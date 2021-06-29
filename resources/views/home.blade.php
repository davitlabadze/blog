@extends('frontlayout')
@section('title','Home')
@section('content')
		<div class="row">
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
			<!-- Right SIdebar -->
			<div class="col-md-4">
				<!-- Recent Posts -->
				<div class="card mb-4 ">
					<h5 class="card-header">Recent Posts</h5>
					<div class="list-group list-group-flush">
						@if($recent_posts)
							@foreach($recent_posts as $post)
							<img class="card-img-top" src="{{asset('imgs/thumbimg/'.$post->thumb)}}" alt="Card image cap">
								<a href="#" class="list-group-item">{{$post->title}}</a>
							@endforeach
						@endif
					</div>
				</div>
				<!-- Popular Posts -->
				<div class="card mb-4">
					<h5 class="card-header">Popular Posts</h5>
					<div class="list-group list-group-flush">
						@if ($popular_posts)
                            @foreach ($popular_posts as $post )
                                <a href="#" class="list-group-item">{{ $post->title }} <span class="badge badge-dark float-right">View Post {{ $post->views }}</span></a>
                            @endforeach
                        @endif
					</div>
				</div>
			</div>
		</div>
@endsection

