<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
    public function deleteUser($id)
    {
        User::where('id',$id)->delete();
        return redirect()->back()->with(['message'=>'Xóa thành công']);
    }
    public function list()
    {
        $users=User::all();
        return view('admin/user/list',compact('users'));
    }
}
