@extends('admin.layouts.default')
@section('content')
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 1px; ">
    <div class="row w-100">
      @if (session('message'))
          <div class="alert alert-success">{{session('message')}}</div>
      @endif
      
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Danh sách User</h3>
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Role</th>
                  <th>Created_at</th>
                  <th>Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $item)
                    <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->phone}}</td>
                  <td>{{$item->address}}</td>
                  <td>{{$item->role}}</td>
                  <td>{{$item->created_at}}</td>
                  
                  <td>
                    {{-- <a href="{{route('admin.user.updateUser',$item->id)}}"><button class="btn btn-primary"> Chỉnh sửa</button></a>  --}}
                    <a href="{{route('admin.user.deleteUser',$item->id)}}" onclick="return confirm('Bạn có muốn xóa')"><button class="btn btn-danger">Xóa</button></a></td>
                </tr>
                @endforeach
                
               
              </tbody>
            </table>
            
           
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      {{-- <a href="{{route('admin.user.addUser')}}"><input class="btn btn-primary" type="button" value="Thêm mới" style="margin-left: 6px;"></a> --}}
    </div>
    <!-- /.row -->
</nav>
@endsection
