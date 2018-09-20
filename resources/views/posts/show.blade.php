@extends('layouts.app')

@section('content')
    <a href="{{ url ('posts')}}" class="btn btn-info">Go Back</a>
    <h1>{{$post->title}}</h1>
        <img style="width: 100%" src="{{url('/storage/cover_image/')}}/{{$post->cover_image}}">
    <br><br>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="{{url ('posts/')}}/{{$post->id}}/edit" class="btn btn-info">Edit post</a>
            
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                    {!!Form::hidden('_method', 'DELETE')!!}
                    {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                {!!Form::close()!!}

                {{-- <a href="{{$post->id}}/edit" class="btn btn-info">Edit post</a> --}}
            @endif
        @endif
        <br><br><br>
@endsection
