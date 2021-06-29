@extends('layout')
@section('content')

  <!-- Icon Cards-->
  <div class="row">
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
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-comments"></i>
          </div>
          <div class="mr-5">{{\App\Models\Comment::count()}} Comments</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/comment')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-users"></i>
          </div>
          <div class="mr-5">{{\App\Models\User::count()}} Users</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{url('admin/user')}}">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    
  </>


  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Recent Posts</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>User</th>
              <th>Category</th>
              <th>Title</th>
              <th>Image</th>
              <th>Full</th>
            </tr>
          </thead>
          <tbody>
              @foreach($posts as $post)
              <tr>
                <td>{{$post->id}}</td>
                @if ($post->user_id) 
                  <td>{{$post->user->name}}</td>
                @else
                  <td>{{ $post->user_id}}</td>
                @endif
                <td>{{$post->category->title}}</td>
                <td>{{$post->title}}</td>
                <td><img src="{{ asset('imgs/thumbimg').'/'.$post->thumb }}" width="100" /></td>
                <td><img src="{{ asset('imgs/fullimg').'/'.$post->full_img }}" width="100" /></td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

@endsection