@extends('layouts.app')

@section('content')

    <div class="container">
            <div class="card card-inverse" style="background-color: #e5e7ea; border-color: d5d9e0; padding: 5px">
                <h3>My profile</h3>
            </div>
            <br>
            <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <img style="width: 70%" src="{{url('/storage/profile_picture/avatar.jpg')}}"> 
                     </div> 
                    <div class="col-sm-8 col-md-8">  
                            <table class="table">
                                <tr>
                                    <td>Name</td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                        <td>Email</td>
                                        <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                        <td>Account created</td>
                                        <td >{{$user->created_at}}</td>
                                </tr>
                                <tr>
                                    <td>Member since</td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                        <td>Number of posts</td>
                                        <td>{{count($post)}}</td>
                                </tr>
                                                                
                            </table>    
                    </div>
            </div>
           
    </div>
@endsection