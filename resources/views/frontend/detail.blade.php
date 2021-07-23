@extends('layouts.frontlayout')

@section('title',$detail->title)
@section('content')   
   
            <div class="col-md-8">
                <div class="card">
                    <img src="{{ asset('imgs/fullimg/'.$detail->full_img) }}" alt="{{ $detail->title }}">
                    
                    <div class="card-body">
                        <h3 class="card-title" >{{ $detail->title }}</h3>
                        <p><span class="text-muted">Category <a href="{{ url('category/'.Str::slug($detail->category->title).'/'.$detail->category->id) }}">{{ $detail->category->title }}</a></span></p>

                        
                        {{ $detail->detail }}
                    </div>
                </div>
                
            </div> 

            <div class="col-md-4">
                <b> Recent Posts</b>
                <hr>
                <ul class="list-unstyled">
                    @if($recent_posts)
                        @foreach($recent_posts as $post)
                            <li class="media my-4">
                                <img class="mr-3 rounded" src="{{asset('imgs/thumbimg/'.$post->thumb)}}" width="70" height="70" alt="image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1"><a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">{{$post->title}}</a> </h5>
                                    <p class="card-text">{{ substr($post->detail ,0,60) }}...</p> 
                                </div>
                            </li>
                            <hr>
                        @endforeach
                    @endif
                   
                </ul>
            </div>
            
@endsection


