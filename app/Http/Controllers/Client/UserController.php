<?php
namespace App\Http\Controllers\Client;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\CustomerResetToken;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function myAccount() {
        $orders= Order::where('user_id',Auth::user()->id)->where('status','<>','Delivered')->where('status','<>','Cancelled')->orderBy('id','desc')->get();
        $orderHistory= Order::where('user_id',Auth::user()->id)->where('status','=','Delivered')->orwhere('status','=','Cancelled')->orderBy('id','desc')->get();
        $info=User::find(Auth::user()->id);
        return view('client/account/my-account',compact('orders','info','orderHistory'));
    }
    public function changeInfo($id,Request $req)  {
        $user=User::find($id);
        if (Hash::check($req->password,$req->passwordHidden)) {
            $req->validate(
            [
                'name'=>'required|max:255',
                'email'=>'required|max:255',
                'phone'=>'required|max:10',
                'address'=>'required|max:255',
                'new_password'=>'max:255',
                'confirm_new_password'=>'max:255|same:new_password'
            ],$err=[
                'name.required'=>'Vui lòng nhập tên',
                'name.max'=>'độ dài tối đa: 255 ký tự',
                'email.required'=>'Vui lòng nhập email',
                'email.max'=>'độ dài tối đa: 255 ký tự',
                'phone.required'=>'Vui lòng nhập tên',
                'address.required'=>'Vui lòng nhập tên',
                'address.max'=>'độ dài tối đa: 255 ký tự',
                'phone.max'=>'độ dài tối đa: 10 ký tự',
                'new_password.max'=>'độ dài tối đa: 255 ký tự',
                'confirm_new_password.same'=>'Mật khẩu không khớp',
                'confirm_new_password.max'=>'độ dài tối đa: 255 ký tự',
            ]
        );
        $data=$req->all('name','email','phone','address');
        if ($req->confirm_new_password!=null&&$req->new_password!=null) {
            $data['password']=Hash::make($req->confirm_new_password);
        }
        User::where('id',$id)->update($data);
        $message='Cập nhật thông tin thành công';
        }else {
            $message='Sai mật khẩu';
        }
        return redirect()->back()->with(['message'=>$message]);
    }
    public function add()
    {
        return view('admin/user/add');
    }
    public function updateUser()
    {
        return view('admin/user/update');
    }
    public function deleteUser()
    {
        return view('admin/user/list');
    }
    public function list()
    {
        return view('admin/user/list');
    }
    public function login()
    {
        return view('client/login/login');
    }
    public function signup()
    {
        return view('client/login/signup');
    }
    public function checkUserSignup(Request $req)
    {
        $user = User::where('email', 'like', $req->email)->first();
        if (empty($user) && Hash::check($req->password, $user->password)) {
$data = [
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'email_verified_at' => null,
            'remember_token' => $req->name,
            'created_at' => Carbon::now(),
            'updated_at' => null,
        ];
        User::insert($data);
        $message = "Đăng ký thành công, vui lòng đăng nhập!";
        return view('client/login/login')->with(['message' => $message]);
           
        } else {
            $message = "Email đã được sử dụng, vui lòng chọn email khác";
        return view('client/login/login')->with(['message' => $message]);
        }
        
    }
    public function logout()
    {
        Auth::logout();
        // dd(Session::get('user'));
        return redirect()->route('home');
    }
    function checkUserLogin(Request $req)
    {
        $user = User::where('email', 'like', $req->email)->first();

        if ( Auth::attempt($req->all('email','password'),$req->remember)) {

            // Session::put('user', [
            //     'email' => $user->email,
            //     'role' => $user->role,
            //     'name' => $user->name,
            //     'id' => $user->id,
            // ]);
            
            
            return redirect()->route('home');
        } else {
            $message = "Email hoặc mật khẩu không chính xác!";
            return view('client/login/login')->with(['message' => $message]);
        }
    }
    function forGot()
    {
        return view('client/login/forgot-password');
    }
    function checkForGot(Request $req)
    {
        $user = User::where('email', 'like', $req->email)->first();
        if (!empty($user)) {

            // return view('client/home');
            $customer = User::where('email', $req->email)->first();
            $token = Str::random(50);
            $tokenData = [
                'email' => $req->email,
                'token' => $token,
            ];
            if (CustomerResetToken::create($tokenData)) {
                $message = "Vui lòng kiểm tra email!";

                // Mail::send(new ForgotPassword($customer, $token))->to($req->email);
                Mail::send('client.email.forgot-password', compact('customer', 'token'), function ($email) use ($customer) {
                    $email->to($customer->email, 'test phát');
                });
                return view('client/login/forgot-password')->with(['message' => $message]);
            }
        } else {
            $message = "Email chưa được đăng ký hoặc không tồn tại!";
            return view('client/login/forgot-password')->with(['message' => $message]);
        }
    }
    function reset_password($token)
    {
        $tokenData = CustomerResetToken::where('token', $token)->firstOrFail();
        $customer = User::where('email', $tokenData->email)->firstOrFail();
        // dd($customer);
        return view('client/email/reset-password', compact('token'));
    }
    function change_password($token, Request $req)
    {
        $tokenData = CustomerResetToken::where('token', $token)->firstOrFail();
        $customer = User::where('email', $tokenData->email)->firstOrFail();
        $data = ['password' => Hash::make($req->password)];
        $customer->update($data);
        // DB::table('users')->where('email',$tokenData->email)->update($data);
        if ($customer->update($data) == true) {
            // $customer=User::where('email',$tokenData->email)->firstOrFail();
            $tokenData->delete($customer->email);
            $message2 = "Reset password thành công, vui lòng đăng nhập!";
            return view('client/login/login')->with(['message2' => $message2]);
        }
    }
    function testEmail()
    {
        $name = 'test meo';
        Mail::send('client.email.forgot-password', compact('name'), function ($email) {
            $email->to('thanhlam200496@gmail.com', 'test phát');
        });
    }
}
