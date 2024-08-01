<?php

namespace App\Http\Controllers\Client;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserSignupRequest;
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
    public function myAccount()
    {
        $orders = Order::where('user_id', Auth::user()->id)->where('status', '<>', 'Delivered')->where('status', '<>', 'Cancelled')->orderBy('id', 'desc')->get();
        $orderHistory = Order::where('user_id', Auth::user()->id)->where('status', '=', 'Delivered')->orwhere('status', '=', 'Cancelled')->orderBy('id', 'desc')->get();
        $info = User::find(Auth::user()->id);
        return view('client/account/my-account', compact('orders', 'info', 'orderHistory'))->with(['active3' => 'class="active"', 'show3' => 'show']);
    }
    public function changeInfo($id, UpdateUserRequest $req)
    {
        $user = User::find($id);
        if (Hash::check($req->password, $user->password)) {
            
            $data = $req->all('name', 'email', 'phone', 'address');
            if ($req->confirm_new_password != null && $req->new_password != null) {
                $data['password'] = Hash::make($req->confirm_new_password);
            }
            User::where('id', $id)->update($data);
            $message = 'Cập nhật thông tin thành công';
        } else {
            $message = 'Sai mật khẩu';
        }
        return redirect()->back()->with(['message' => $message,'active4'=>'class="active"','show4'=>'show active']);
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
    public function checkUserSignup(UserSignupRequest $req)
    {
        // $user = User::where('email', 'like', $req->email)->first();
        // $req->validate([
        //     'name' => 'required',
        //     'email' => 'required|unique:users',
        //     'password' => 'required',
        //     'confirmpassword' => 'required|same:password'
        // ], [
        //     'name.required' => 'Vui lòng điền vào trường này',
        //     'email.required' => 'Vui lòng điền vào trường này',
        //     'password.required' => 'Vui lòng điền vào trường này',
        //     'confirmpassword.required' => 'Vui lòng điền vào trường này',
        //     'email.unique' => 'Email đã được sử dụng, vui lòng dùng email khác',
        //     'confirmpassword.same' => 'Password xác nhận không khớp',
        // ]);
        // if (empty($user) && Hash::check($req->password, $user->password)) {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
        ];
        Mail::send('client/email/active-account', compact('data'), function ($email) use ($data) {
            $email->to($data['email']);
            $email->subject('Xác nhận đăng ký tài khoản!');
        });
        // User::insert($data);
        $message = "Vui lòng kiểm tra email để kích hoạt tài khoản";
        return redirect()->back()->with(['message' => $message]);
        // } else {
        //     $message = "Email đã được sử dụng, vui lòng chọn email khác";
        //     return view('client/login/login')->with(['message' => $message]);
        // }
    }
    public function Active(Request $req)
    {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'email_verified_at' => Carbon::now(),
        ];
        User::insert($data);
        $message = "Đăng ký thành công, vui lòng đăng nhập!";
        return redirect()->route('Login')->with(['message' => $message]);
    }
    public function logout()
    {
        Auth::logout();
        // dd(Session::get('user'));
        return redirect()->route('home');
    }
    function checkUserLogin(UserLoginRequest $req)
    {

        // $req->validate(
        //     [
        //         'login_email' => 'required|email',
        //         'login_password' => 'required',
        //     ],
        //     [
        //         'login_name.required' => 'Vui lòng điền vào trường này',
        //         'login_email.required' => 'Vui lòng điền vào trường này',
        //         'login_email.email' => 'Vui lòng điền đúng định dạng email',
        //     ]
        // );

        // $user = User::where('email', 'like', $req->login_email)
        //     // ->where('password', 'like', Hash::make($req->login_password) )
        //     ->first();
        // // dd($user,Hash::check($req->login_password,$user->password));
        $data = [
                'email' => $req->login_email,
                'password' => $req->login_password
            ];
        if (
            // $user && Hash::check($req->login_password, $user->password )
Auth::attempt($data, $req->remember)
           ) {
            
            

            return redirect()->route('home');
        } else {
            $message = "Sai mật khẩu";
            return redirect()->back()->with(['message' => $message]);
        }
    }
    function forGot()
    {
        return view('client/login/forgot-password');
    }
    function checkForGot(Request $req)
    {
        $user = User::where('email', 'like', $req->email)->first();
        if ($checkIssetToken = CustomerResetToken::where('email', $req->email)) {
            $checkIssetToken->delete();
        }
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
                    $email->subject('Reset Password');
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
        $req->validate([
            'password' => 'required',
            'confirmpassword' => 'required|same:password',
        ]);
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
