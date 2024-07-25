<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Models\CustomerResetToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
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
        Session::forget('user');
        // dd(Session::get('user'));
        return redirect()->route('home');
    }
    function checkUserLogin(Request $req)
    {
        $user = User::where('email', 'like', $req->email)->first();
        if (!empty($user) && Hash::check($req->password, $user->password)) {

            Session::put('user', [
                'email' => $user->email,
                'role' => $user->role,
                'name' => $user->name,
                'id' => $user->id,
            ]);
            
            
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
            $token = \Str::random(50);
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
