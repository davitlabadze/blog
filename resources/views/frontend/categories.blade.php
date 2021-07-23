@extends('layouts.frontlayout')
@section('title','Categories')
@section('content')
		
			<div class="col-md-12">
				<div class="row mb-5"> 
					@if(count($categories)>0)
						@foreach($categories as $category)
						<div class="col-md-4 mb-4">
							<div class="card">
							  <a href="{{url('category/'.Str::slug($category->title).'/'.$category->id)}}">
								<img src="{{asset('imgs/'.$category->image)}}" class="card-img-top" width="100px;" height="200px;" alt="{{$category->title}}" /></a>
							  <div class="card-body">
							    <h5 class="card-title text-center"><a href="{{url('category/'.Str::slug($category->title).'/'.$category->id)}}">{{$category->title}}</a></h5>
							  </div>
							</div>
						</div>
						@endforeach
					@else
					<p class="alert alert-warning">No Category Found</p>
					@endif
				</div>
				<!-- Pagination -->
				{{$categories->links()}}
			</div>
@endsection