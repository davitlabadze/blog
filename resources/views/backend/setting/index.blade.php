@extends('layouts.backlayout')
@section('content')



<!-- DataTables Example -->
<div class="card mb-3">
<div class="card-header">
    <i class="fas fa-table"></i> Manage settings

</div>
<div class="card-body">
        <div class="table-responsive">

        @if($errors)
            @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif

        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif

        <form method="post" action="{{url('admin/setting')}}" enctype="multipart/form-data">
            @csrf
            <table class="table table-bordered">
                
                
                <tr>
                    <th>Recent Post Limit </th>
                    <td><input  @if($setting) value="{{ $setting->recent_limit }}" @endif class="form-control" type="text" name="recent_limit"> </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" />
                    </td>
                </tr>
            </table>
        </form>
        </div>
    </div>
    </div>





@endsection