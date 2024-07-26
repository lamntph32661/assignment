@extends('admin.layouts.default')
@section('content')
   
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 1px; ">
    <div class="card card-primary w-100" style="height: 585px;">
      <div class="card-header">
        <h3 class="card-title">Thêm danh mục</h3>
      </div>
      <form class="ml-5" action="{{route('admin.login')}}" method="POST">
        @csrf
      <div class="card-body">
          <div class="form-group">
            <label for="danhmuc">Email</label>
            <input type="email" class="form-control" id="danhmuc" placeholder="Nhập tên danh mục" name="email">
            
          </div>
          <div class="form-group">
            <label for="danhmuc">Password</label>
            <input type="password" class="form-control" id="danhmuc" placeholder="Nhập tên danh mục" name="password">
            
          </div>
          <div class="card-footer">
            <input type="submit" class="btn btn-success" name="themmoi" value="Submit">
            <input class="btn btn-secondary" type="reset" value="Nhập lại">
            <a href="#" class="btn btn-success">Danh sách</a>
          </div>
      </form>
      <?php
  
      ?>
    </div>
  </nav>
   
@endsection