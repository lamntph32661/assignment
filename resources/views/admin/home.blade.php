@extends('admin.layouts.default')
@section('content')
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: 1px; ">
    <div class="row w-100">
      <div class="col-12">
       
        {{-- {{Auth::user()->role}} --}}
        Hello {{Auth::user()->name}}
      </div>
      
    </div>
    <!-- /.row -->
</nav>
@endsection
