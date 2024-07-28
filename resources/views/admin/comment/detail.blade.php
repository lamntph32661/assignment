@extends('admin.layouts.default')
@section('content')
   
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 1px; ">
    <div class="card card-primary w-100" style="height: 585px;">
      <div class="card-header">
        <h3 class="card-title">Chi tiết bình luận</h3>
      </div>
      
      <div class="card-body">
          <div class="form-group">
            <p>ID: {{$comment->id}}</p>
           <p>user_name: {{$comment->user_name}}</p>
            <p>product_name:{{$comment->product_name}}</p>
           <p>rating: {{$comment->rating}}</p>
           <p>content: {{$comment->content}}</p>
            
           <p> created_at: {{$comment->created_at}}</p>
          </div>
          
      </form>
      <a href="{{route('admin.comment.delete',$comment->id)}}" onclick="return confirm('Bạn có muốn xóa')"><button class="btn btn-danger">Xóa</button></a>
    </div>
    
  </nav>
   
@endsection