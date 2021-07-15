@extends('layouts.backlayout')
@section('content')

  <!-- Icon Cards-->
  <div class="row p-2">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-list"></i>
          </div>
          <div class="mr-5">{{\App\Models\Category::count()}} Categories</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/category')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-address-card"></i>
          </div>
          <div class="mr-5">{{\App\Models\Post::count()}} Posts</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/post')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>


  <!-- DataTables Example -->
  <div class="card">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Recent Posts</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Category</th>
              <th>Title</th>
              <th>Image</th>
              <th>Full</th>
            </tr>
          </thead>
          <tbody>
             @if ($posts)
             @foreach($posts as $post)
             <tr>
               <td>{{$post->id}}</td>

               <td>{{$post->category->title}}</td>
               <td>{{$post->title}}</td>
               <td><img src="{{ asset('imgs/thumbimg').'/'.$post->thumb }}" width="100" /></td>
               <td><img src="{{ asset('imgs/fullimg').'/'.$post->full_img }}" width="100" /></td>
             </tr>
             @endforeach
             @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>




@endsection