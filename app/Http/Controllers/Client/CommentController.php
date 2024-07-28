<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function postComment(Request $req) {
        $req->validate(['content'=>'required'],);
        Comment::create($req->all('product_id','user_id','content','rating'));
        return redirect()->back()->with(['message'=>'Bình luận thành công']);
    }
}
