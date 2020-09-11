@extends('layouts.master')
@section('header')
@include('layouts.head')
@endsection
@section('content')
<div class="col-lg-6">
    <div class="central-meta">
        <div class="frnds">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">My friends</a> </li>
                <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Friend Requests</a><span>{{Auth::user()->requests->count()}}</span></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active fade show" id="frends">
                    <ul class="nearby-contct">
                        @foreach(Auth::user()->friends as $user)                        
                        <li>
                            <div class="nearly-pepls">
                                <figure>
                                    <a href="#" title=""><img src="{{$user->user->image}}" alt=""></a>
                                </figure>
                                <div class="pepl-info">
                                    <h4><a href="#" title="">{{$user->user->name}}</a></h4>
                                    <span>{{$user->user->username}}</span>                                                                       
                                </div>
                            </div>
                        </li>                        
                        @endforeach
                        @foreach(Auth::user()->allFriends as $user)                        
                        <li>
                            <div class="nearly-pepls">
                                <figure>
                                    <a href="#" title=""><img src="{{$user->user->image}}" alt=""></a>
                                </figure>
                                <div class="pepl-info">
                                    <h4><a href="#" title="">{{$user->userFriend->name}}</a></h4>
                                    <span>{{$user->userFriend->username}}</span>                                                                     
                                </div>
                            </div>
                        </li>                        
                        @endforeach
                    </ul>
                    <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                </div>
                <div class="tab-pane fade" id="frends-req">
                    <ul class="nearby-contct">
                        @foreach(Auth::user()->requests as $request)
                        <li>
                            <div class="nearly-pepls">
                                <figure>
                                    <a href="#" title=""><img src="{{$request->user->image}}" alt=""></a>
                                </figure>
                                <div class="pepl-info">
                                    <h4><a href="#" title="">{{$request->user->name}}</a></h4><br>
                                    <span>{{$request->user->username}}</span><br>
                                    <form method="POST" style="display: inline-block;" action="{{route('friends.confirm')}}">
                                        @csrf
                                        <input type="hidden" name="request_id" value="{{$request->id}}">
                                        <button type="submit" class="btn btn-success" data-ripple="">Confirm</button>
                                    </form>
                                    <form style="display: inline-block;" action="">
                                        @csrf
                                        <button class="btn btn-danger" data-ripple="">delete Request</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <button class="btn-view btn-load-more"></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection