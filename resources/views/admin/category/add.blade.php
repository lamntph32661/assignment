@extends('admin.layouts.default')
@section('content')
   
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 1px; ">
    <div class="card card-primary w-100" style="height: 585px;">
      <div class="card-header">
        <h3 class="card-title">Thêm danh mục</h3>
      </div>
      <form class="ml-5" action="{{route('admin.Category.addCategory')}}" method="POST">
        @csrf
      <div class="card-body">
          <div class="form-group">
            <label for="danhmuc">Tên danh mục</label>
            <input type="text" class="form-control" id="danhmuc" placeholder="Nhập tên danh mục" name="name">
           <p style="color: red">{{$errors->first('name')??''}}</p> 
          </div>
          <div class="card-footer">
            <input type="submit" class="btn btn-success" name="themmoi" onclick="return confirm('Xác nhận thêm')" value="Submit">
            <input class="btn btn-secondary" type="reset" value="Nhập lại">
            <a href="{{route('admin.category.listCategory')}}" class="btn btn-success">Danh sách</a>
          </div>
      </form>
      <?php
  
      ?>
    </div>
  </nav>
   
@endsection