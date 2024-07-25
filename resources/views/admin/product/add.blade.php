@extends('admin.layouts.default')
@section('content')
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 1px; ">
        <div class="card card-primary w-100" style="height: 385px;">
            <div class="card-header">
                <h3 class="card-title">Thêm danh mục</h3>
            </div>
            <form class="ml-5" action="{{route('admin.Product.addProduct')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body overflow-auto" style="height: 585px;">
                    <div class="form-group">
                        <label for="danhmuc">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="danhmuc" placeholder="Nhập tên danh mục"
                            name="name">
                    </div>
                    <div class="form-group">
                        <label for="danhmuc">image</label>
                        <input type="file" class="form-control" id="danhmuc" 
                            name="image">
                    </div>
                    <div class="form-group">
                        <label for="danhmuc">Giá</label>
                        <input type="number" class="form-control" id="danhmuc" placeholder="Nhập tên danh mục"
                            name="price">
                    </div>
                    <div class="form-group">
                        <label for="danhmuc">Giảm giá (%)</label>
                        <input type="number" class="form-control" id="danhmuc" placeholder="Nhập tên danh mục"
                            name="discount">
                    </div>
                    <div class="form-group">
                        <label for="danhmuc">Số lượng</label>
                        <input type="text" class="form-control" id="danhmuc" placeholder="Nhập tên danh mục"
                            name="quantity">
                    </div>
                    <div class="form-group">
                        <label for="danhmuc" >Danh mục</label>
                        <select name="category_id"  class="form-control" id="">
                          @foreach ($categories as $item)
                              <option value="{{$item->id}}">{{$item->name}}</option>
                          @endforeach
                          
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="danhmuc">Mô tả</label>
                        <textarea name="description" id="" cols="60" rows="5"  class="form-control"></textarea>
                        
                    </div>

                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-success" name="themmoi" value="Submit">
                    <input class="btn btn-secondary" type="reset" value="Nhập lại">
                    <a href="#" class="btn btn-primary">Danh sách</a>
                </div>
            </form>

        </div>
    </nav>
@endsection
