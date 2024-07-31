@extends('admin.layouts.default')
@section('content')
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 1px; ">
        <div class="card card-primary w-100" style="min-height: 385px;">
            <div class="card-header">
                <h3 class="card-title">Thêm sản phẩm</h3>
            </div>
            <form class="ml-5" action="{{route('admin.Product.addProduct')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body overflow-auto" style="height: 450px;">
                    <div class="form-group">
                        <label for="danhmuc">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="danhmuc" value="{{old('name')}}" placeholder=""
                            name="name"><p style="color: red">{{$errors->first('name')}}</p>
                    </div>
                    <div class="form-group">
                        <label for="danhmuc">image</label>
                        <input type="file" class="form-control" id="danhmuc" 
                            name="image">
                    </div>
                    <div class="form-group">
                        <label for="danhmuc">Giá</label>
                        <input type="text" class="form-control" value="{{old('price')}}" id="danhmuc" placeholder="" min="0"
                            name="price"><p style="color: red">{{$errors->first('price')}}</p>
                    </div>
                    <div class="form-group">
                        <label for="danhmuc">Giảm giá (%)</label>
                        <input type="number" class="form-control" min="0" max="100" value="{{old('discount')??0}}" id="danhmuc" placeholder=""
                            name="discount"><p style="color: red">{{$errors->first('discount')}}</p>
                    </div>
                    <div class="form-group">
                        <label for="danhmuc">Số lượng</label>
                        <input type="number" class="form-control" value="{{old('quantity')}}" id="danhmuc" placeholder=""
                            name="quantity"><p style="color: red">{{$errors->first('quantity')}}</p>
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
                        <label for="danhmuc">Mô tả</label><p style="color: red">{{$errors->first('description')}}</p>
                        <textarea name="description" id="" value="" cols="60" rows="5"  class="form-control">{{old('description')}}</textarea>
                        
                    </div>

                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-success" name="themmoi"  onclick="return confirm('Xác nhận thêm')" value="Submit">
                    <input class="btn btn-secondary" type="reset" value="Nhập lại">
                    <a href="{{route('admin.Product.listProduct')}}" class="btn btn-primary">Danh sách</a>
                </div>
            </form>

        </div>
    </nav>
@endsection
