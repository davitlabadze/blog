@extends('layouts.frontlayout')

@section('title',$detail->title)
@section('content')   
   
            <div class="col-md-8">
                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="card">
                    <h5 class="card-header" >{{ $detail->title }}
                        <span class="float-right">View Post {{ $detail->views }} </span>
                    </h5>
                    <img src="{{ asset('imgs/fullimg/'.$detail->full_img) }}" alt="{{ $detail->title }}">
                    <div class="card-body">
                        {{ $detail->detail }}
                    </div>
                    <div class="card-footer">
                    In <a href="{{ url('category/'.Str::slug($detail->category->title).'/'.$detail->category->id) }}">{{ $detail->category->title }}</a>
                    </div>
                </div>
                
            </div> 
@endsection