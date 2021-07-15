@extends('layouts.backlayout')
@section('title',$title)
@section('content')

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i> Add Posts
    <a href="{{url('admin/post/create')}}" class="float-right btn btn-sm btn-dark"><i class="fas fa-fw fa-plus"></i>Create Data</a>
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
              <a class="btn btn-primary btn-sm" href="{{ url('admin/post/'.$post->id.'/edit') }}"><i class="fas fa-fw fa-edit"></i> edit</a>
              <a onclick="return confirm('are you sure?')" class="btn btn-danger btn-sm" href="{{ url('admin/post/'.$post->id.'/delete') }}"><i class="fas fa-fw fa-trash-alt"></i>  delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
        
      </table>
    </div>
  </div>
</div>
@endsection