@extends('layouts.backlayout')
@section('title',$title)
@section('content')



  <!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i> Update Post
      <a href="{{url('admin/post')}}" class="float-right btn btn-sm btn-dark"><i class="fas fa-fw fa-eye"></i> All Data</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table>
        @if($errors)
          @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
          @endforeach
        @endif

        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif

        <form method="post" action="{{url('admin/post/'.$data->id)}}" enctype="multipart/form-data">
          @csrf
          @method('put')
          <table class="table table-bordered">
            <tr>
              <th>Category <span class="text-danger">*</span></th>
              <td>
                <select name="category" class="form-control">
                  @foreach ($cats as $cat)
                    
                  @if ($cat->id==$data->car_id)
                      <option selected value="{{ $cat->id }}">{{ $cat->title }}</option>
                  @else
                      <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                  @endif
                  @endforeach
                </select>
              </td>
            </tr>
            <tr>
              <th>Title <span class="text-danger">*</span></th>
              <td><input class="form-control" type="text" value="{{ $data->title }}" name="title"> </td>
            </tr>
            <tr>
              <th>Thumb</th>
              <td>
                <p class="my-2"><img width="80" src="{{asset('imgs/thumbimg')}}/{{$data->thumb}}" /></p>
                <input type="hidden" value="{{$data->thumb}}" name="post_thumb" />
                <input type="file" name="post_thumb" />
              </td>
            </tr>
            <tr>
              <th>Full Image</th>
              <td>
                <p class="my-2"><img width="80" src="{{asset('imgs/fullimg')}}/{{$data->full_img}}" /></p>
                <input type="hidden" value="{{$data->full_img}}" name="post_image" />
                <input type="file" name="post_image" />
              </td>
            </tr>
            <tr>
              <th>Details <span class="text-danger">*</span> </th>
              <td>
                <textarea type="text" name="detail" class="form-control">
                  {{ $data->detail }} 
                </textarea>
              </td>
            </tr>
            <tr>
              <th>Tags</th>
              <td>
                <textarea type="text" name="tags" class="form-control">
                  {{ $data->tags }}
                </textarea>
            <tr>
              <td colspan="2">
                <input type="submit" class="btn btn-primary" />
              </td>
            </tr>
          </table>
        </form>
      </table>
    </div>
  </div>
</div>


@endsection