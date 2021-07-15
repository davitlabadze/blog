@extends('layouts.frontlayout')
@section('title','Home')
@section('content')
		
			<div class="col-md-8">		
				<div class="row mb-5">         
					  @if(count($posts)>0)
					  @foreach($posts as $post)
						<div class="card w-100 mb-3">
							<img class="card-img-top" src="{{asset('imgs/thumbimg/'.$post->thumb)}}" alt="Card image cap">
							<div class="card-body">
							  <h5 class="card-title"><a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">{{$post->title}}</a></h5>
							  <p class="card-text">{{ substr($post->detail ,0,100) }}...</p>
							  <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
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

