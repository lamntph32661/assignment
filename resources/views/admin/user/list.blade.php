@extends('admin.layouts.default')
@section('content')
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 1px; ">
    <div class="row w-100">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Danh sách phim</h3>
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
                <tr>
                  <td>1</td>
                  <td>Sản phẩm 1</td>
                  <td><img src="hinh1.jpg" alt="Hình 1" style="width: 50px; height: 50px;"></td>
                  <td>100,000 VND</td>
                  <td>10%</td>
                  <td>Mô tả sản phẩm 1</td>
                  <td>50</td>
                  <td>Danh mục A</td>
                  <td><a href="{{route('admin.user.updateUser',1)}}"><button class="btn btn-primary"> Chỉnh sửa</button></a> <a href="{{route('admin.user.deleteUser',1)}}" onclick="return confirm('Bạn có muốn xóa')"><button class="btn btn-danger">Xóa</button></a></td>
                </tr>
               
              </tbody>
            </table>
            
           
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <a href="{{route('admin.user.addUser')}}"><input class="btn btn-primary" type="button" value="Thêm mới" style="margin-left: 6px;"></a>
    </div>
    <!-- /.row -->
</nav>
@endsection
