@extends('layout')
@section('title',$title)
@section('content')



      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i> Add Category
          <a href="{{url('admin/category/create')}}" class="float-right btn btn-sm btn-dark"> <i class="fas fa-fw fa-plus"></i> Create Data</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $cat)
                <tr>
                  <td>{{ $cat->id }}</td>
                  <td>{{ $cat->title }}</td>
                  <td><img src="{{ asset('imgs').'/'.$cat->image }}" width="50px" /></td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="{{ url('admin/category/'.$cat->id.'/edit') }}"><i class="fa fa-fw fa-edit"></i> edit</a>
                    <a onclick="return confirm('are you sure?')" class="btn btn-danger btn-sm" href="{{ url('admin/category/'.$cat->id.'/delete') }}"><i class="fa fa-fw fa-trash-alt"></i>delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              
            </table>
          </div>
        </div>
      </div>




@endsection