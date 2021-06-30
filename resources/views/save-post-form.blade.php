@extends('frontlayout')
@section('title','edit profile')
@section('content')

		<div class="row">
			
				<h3>Add Post</h3>
                <div class="table-responsive">

                    @if($errors)
                        @foreach($errors->all() as $error)
                        <p class="text-danger">{{$error}}</p>
                        @endforeach
                    @endif

                    @if(Session::has('success'))
                    <p class="text-success">{{session('success')}}</p>
                    @endif

                    <form method="post" action="{{url('save-post-form')}}" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Category <span class="text-danger">*</span></th>
                                <td>
                                    <select name="category" class="form-control">
                                        <option value=""></option>
                                        @foreach ($cats as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Title <span class="text-danger">*</span></th>
                                <td><input class="form-control" type="text" name="title"> </td>
                            </tr>


                            <tr>
                                <th>Thumnail</th>
                                <td><input type="file" name="post_thumb" /></td>
                            </tr>
                            <tr>
                                <th>Full Image</th>
                                <td><input type="file" name="post_image" /></td>
                            </tr>
                            <tr>
                                <th>Details <span class="text-danger">*</span> </th>
                                <td>
                                    <textarea type="text" name="detail" class="form-control">

                                    </textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Tags <span class="text-danger">*</span></th>
                                <td>
                                    <textarea type="text" name="tags" class="form-control">

                                    </textarea>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="input-group justify-content-center btn btn-primary" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
			
			
		</div>
@endsection