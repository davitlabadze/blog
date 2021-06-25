@extends('layout')
@section('title',$title)
@section('content')

  <main>
    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
      </ol>


      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Add Posts
          <a href="{{url('admin/post/create')}}" class="float-right btn btn-sm btn-dark">Create Data</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Category</th>
                  <th>Title</th>
                  <th>Thumb</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $post)
                <tr>
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->category->title }}</td>
                  <td>{{ $post->title }}</td>
                  <td><img src="{{ asset('imgs/thumbimg').'/'.$post->thumb }}" width="50px" /></td>
                  <td><img src="{{ asset('imgs/fullimg').'/'.$post->full_img }}" width="50px" /></td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="{{ url('admin/post/'.$post->id.'/edit') }}">update</a>
                    <a onclick="return confirm('are you sure?')" class="btn btn-danger btn-sm" href="{{ url('admin/post/'.$post->id.'/delete') }}">delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

    </div>
  </main>

<!-- /.container-fluid -->

@endsection