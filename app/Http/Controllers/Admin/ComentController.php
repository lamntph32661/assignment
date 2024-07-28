<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    
    public function list()
    {
        $comments=Comment::join('products','products.id','=','comments.product_id')
        ->join('users','users.id','=','comments.user_id')->select('comments.*','products.name as product_name','users.name as user_name')->get();
    //    dd($comments);
        return view('admin/comment/list',compact('comments'));
    }
    function detail($id)  {
        $comment=Comment::join('products','products.id','=','comments.product_id')
        ->join('users','users.id','=','comments.user_id')
        ->where('comments.id',$id)->select('comments.*','products.name as product_name','users.name as user_name')->first();
        // dd($comment);
        return view('admin/comment/detail',compact('comment'));
    }
    function delete($id)  {
        Comment::where('id',$id)->delete();
        return redirect()->back()->with(['message'=>'Xóa thành công']);
    }
}
