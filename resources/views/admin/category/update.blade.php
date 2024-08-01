@extends('admin.layouts.default')
@section('content')
   
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 1px; ">
    <div class="card card-primary w-100" style="height: 585px;">
      <div class="card-header">
        <h3 class="card-title">Cập nhật danh mục</h3>
      </div>
      <form class="ml-5" action="{{route('admin.Category.updateCategory', $category->id)}}" method="POST">
        @csrf
      <div class="card-body">
          <div class="form-group">
            <label for="danhmuc">Tên danh mục</label>
            <input type="text" class="form-control" id="danhmuc" value="{{$category->name}}" placeholder="Nhập tên danh mục" name="name"  >
            <p style="color: red">{{$errors->first('name')??''}}</p> 
          </div>
          <div class="card-footer">
            <input type="submit" class="btn btn-primary" name="themmoi" onclick="return confirm('Xác nhận cập nhật')" value="Submit">
            <input class="btn btn-secondary" type="reset" value="Nhập lại">
            <a href="{{route('admin.Category.listCategory')}}" class="btn btn-success">Danh sách</a>
          </div>
      </form>
      <?php
  
      ?>
    </div>
  </nav>
   
@endsection