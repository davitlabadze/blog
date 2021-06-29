@extends('frontlayout')
@section('title','profile')
@section('content')

        @foreach ($data as $user)
        
        <div class="container">
            <div class="card-group">
                <div class="col-2"></div>
                <div class="col-2 d-inline-flex" >
                  <img class="img-thumbnail rounded-circle" src="/imgs/default-avatar.jpg" alt="Card image cap">
                </div>
                
                <div class="card-body col-3">
                    <h5 class="card-title ml-5 mt-2"><b>{{ $user->name }}</b> </h5>
                   
                    <p class="card-text ml-5"> <b>{{ $count_post_data }}</b> post</p>
                </div>
                <div class="card-body col-2">
                    <button type="button" class="btn btn-light"><a href="{{ url('edit-profile') }}"><b>Edit Profile</b></a></button>
                </div>
            </div>
        @endforeach
            <hr>
          {{-- user posts --}}
          @if(count($user_post_data)>0)
          @foreach($post_data as $post)
            <div class="card-group " style="display:inline-block;">
                <div class=" align-self-center" style="width:22rem;">
                    <img class="card-img-top" src="{{ asset('imgs/fullimg').'/'.$post->full_img }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$post->title}}</h5>
                      <p class="card-text">{{ substr($post->detail ,0,100) }}...</p>
                      <p class="card-text"><small class="text-muted"> {{ $post->created_at->diffForHumans() }}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
        @else
		    <p class="text-center"><i class="fas fa-th"></i> No Posts Yet</p>
            <p class="text-center" ><a class="nav-link" href="{{ url('save-post-form') }}"><i class="fas fa-fw fa-plus"></i> Add Post</a></p>
		@endif

        {{-- pagination --}}
        {{$user_post_data->links() }}

        
@endsection

