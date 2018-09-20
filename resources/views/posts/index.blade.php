@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            {{-- <div class="well"> --}}
            {{-- <div class="card card-block bg-faded">    --}}
            <div class="card card-inverse" style="background-color: #e5e7ea; border-color: d5d9e0; padding: 5px">    
               <div class="row">
                    <div class="col-sm-4 col-md-4">  
                        <img style="width: 100%" src="{{url('/storage/cover_image/')}}/{{$post->cover_image}}">
                    </div>    
                    <div class="col-sm-4 col-md-4">  
                        <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>  
                </div>    
            </div> 
            <br/>   
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts Found</p>
    @endif

@endsection
