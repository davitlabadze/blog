@extends('layouts.frontlayout')
{{-- @section('title',$category->title) --}}
@section('content')
		
			<div class="col-md-12">
				<div class="row mb-5"> 
					@if(count($posts)>0)
						@foreach($posts as $post)
						<div class="col-md-4 mb-4">
							<div class="card">
							  <a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}"><img src="{{asset('imgs/thumbimg/'.$post->thumb)}}"  width="100px;" height="200px;" class="card-img-top" alt="{{$post->title}}" /></a>
							  <div class="card-body">
							    <h5 class="card-title text-center"><a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">{{$post->title}}</a></h5>
							  </div>
							</div>
						</div>
						@endforeach
					@else
					<p class="alert alert-warning">No Post Found</p>
					@endif
				</div>
				<!-- Pagination -->
				{{$posts->links()}}
				
			</div>
			
	
@endsection