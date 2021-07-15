<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- Bootstrao CSS --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('lib/bs5/bootstrap.min.css') }}"> --}}
    <!-- CSS only -->
    {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    {{-- <link href="{{ asset('backend') }}/css/styles.css" rel="stylesheet" /> --}}
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    {{-- BS4 js --}}

   
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>



  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>






</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <!-- Search -->
				<div class="card mx-auto">
						<form method="get" action="{{url('/')}}">
							<div class="input-group">
							  <input type="text" name="q" class="form-control" />
							  <div class="input-group-append">
							    <button class="btn btn-dark" type="submit" id="button-addon2">Search</button>
							  </div>
							</div>
						</form>
				</div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ '/' }}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ 'all-categories' }}">Categories</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

   
    {{-- get latest posts --}}
    <main class="container mt-4">
        <div class="row">
        
        @yield('content')


        <!-- Right SIdebar -->
			<div class="col-md-4">
				<!-- Recent Posts -->
				<div class="card mb-4 ">
					<h5 class="card-header">Recent Posts</h5>
					<div class="list-group list-group-flush">
						@if($recent_posts)
							@foreach($recent_posts as $post)
							<img class="card-img-top" src="{{asset('imgs/thumbimg/'.$post->thumb)}}" alt="Card image cap">
								<a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}" class="list-group-item">{{$post->title}}</a>
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
                                <a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}" class="list-group-item">{{ $post->title }} <span class="badge badge-dark float-right">View Post {{ $post->views }}</span></a>
                            @endforeach
                        @endif
					</div>
				</div>
			</div>
        </div>
    </main>

    
    

    
</body>
</html>