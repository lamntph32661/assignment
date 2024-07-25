@extends('admin.layouts.default')
@section('content')
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 1px; ">
    <div class="row w-100">
      <div class="col-12">
        @if (session('message'))
            <p>{{session('message')}}</p>
        @endif
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Danh sách sản phẩm</h3>
            <div class="card-tools">
            {{-- <form action="" method="post" style="display: flex;">
                  <input type="text" name="kyw" id="" class="form-control float-right" placeholder="Search" style=" margin-right: 10px;">
                  <select name="iddm" id="" class="form-control"  style=" margin-right: 10px;">
                      <option value="0" selected>Tất cả</option>
                     
                  </select>
                  <input type="submit" name="listok" value="Search" class="btn btn-default">
              </form> --}}
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 500px;">
            
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên sản phẩm</th>
                  <th>Hình</th>
                  <th>Giá</th>
                  <th>Giảm giá</th>
                  <th>Mô tả</th>
                  <th>Số lượng</th>
                  <th>Danh mục</th>
                  <th>Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $item)
                    <tr>
                  <td>{{$item->id}}</td>
                  <td>@if (strlen($item->name)>30)
                    {{substr($item->name,0,30).'...'}}
                   
                    @else
                        {{$item->name}}
                    
                @endif</td>
                  <td><img src="{{asset(''.$item->image.'')}}" alt="Hình 1" style="width: 50px; height: 50px;"></td>
                  <td>{{$item->price}}</td>
                  <td>{{$item->discount}}</td>
                  <td>@if (strlen($item->description)>30)
                      {{substr($item->description,0,30).'...'}}
                     
                      @else
                          {{$item->description}}
                      
                  @endif</td>
                  <td>{{$item->quantity}}</td>
                  <td>{{$item->category_id}}</td>
                  <td><a href="{{route('admin.Product.updateProduct',$item->id)}}"><button class="btn btn-primary"> Chỉnh sửa</button></a> <a href="{{route('admin.Product.deleteProduct',$item->id)}}" onclick="return confirm('Bạn có muốn xóa')"><button class="btn btn-danger">Xóa</button></a></td>
                </tr>
                @endforeach
                
               
              </tbody>
            </table>
            
           
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <a href="{{route('admin.Product.addProduct')}}"><input class="btn btn-primary" type="button" value="Thêm mới" style="margin-left: 6px;"></a>
    </div>
    <!-- /.row -->
</nav>
@endsection
