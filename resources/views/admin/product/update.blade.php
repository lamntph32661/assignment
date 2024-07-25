@extends('admin.layouts.default')
@section('content')
   
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 1px; ">
    <div class="card card-primary w-100" style="min-height: 585px;">
      <div class="card-header">
        <h3 class="card-title">Thêm danh mục</h3>
      </div>
      <form class="ml-5" action="{{route('admin.Product.updateProduct',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="danhmuc">Tên sản phẩm</label>
                <input type="text" class="form-control" id="danhmuc" placeholder="Nhập tên danh mục"
                    name="name" value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="danhmuc">image</label>
                <input type="file" class="form-control" id="danhmuc" 
                    name="image">
                    <img src="{{asset(''.$product->image.'')}}" alt="Hình 1" style="width: 50px; height: 50px;">
            </div>
            <div class="form-group">
                <label for="danhmuc">Giá</label>
                <input type="number" class="form-control" id="danhmuc" placeholder="Nhập tên danh mục"
                    name="price" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <label for="danhmuc">Giảm giá (%)</label>
                <input type="number" class="form-control" id="danhmuc" placeholder="Nhập tên danh mục"
                    name="discount" value="{{$product->discount}}">
            </div>
            <div class="form-group">
                <label for="danhmuc">Số lượng</label>
                <input type="number" class="form-control" id="danhmuc" placeholder="Nhập tên danh mục"
                    name="quantity" value="{{$product->quantity}}">
            </div>
            <div class="form-group">
                <label for="danhmuc" >Danh mục</label>
                <select name="category_id"  class="form-control" id="">
                  @foreach ($categories as $item)
                  @if ($item->id==$product->category_id)
                  <option value="{{$item->id}}" selected>{{$item->name}}</option>
                  @else
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endif
                      
                  @endforeach
                  
                </select>
            </div>
            <div class="form-group">
                <label for="danhmuc">Mô tả</label>
                <textarea name="description"  id="" cols="60" rows="5"  class="form-control">{{$product->description}}</textarea>
                
            </div>

        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-success" name="themmoi" value="Submit">
            <input class="btn btn-secondary" type="reset" value="Nhập lại">
            <a href="#" class="btn btn-primary">Danh sách</a>
        </div>
    </form>
      <?php
  
      ?>
    </div>
  </nav>
   
@endsection