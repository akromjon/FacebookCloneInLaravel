@extends('layouts.master')
@section('header')
@include('layouts.head')
@endsection
@section('content')
<div class="col-lg-6">
    <div class="central-meta">
        <div class="frnds">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">All Users</a> <span>{{$users->count()}}</span></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active fade show" id="frends">
                    <ul class="nearby-contct">
                        @foreach($users as $user)
                        @if($user->id==Auth::user()->id)  
                        @else
                        <li>
                            <div class="nearly-pepls">
                                <figure>
                                    <a  title=""><img src="{{$user->image}}" alt=""></a>
                                </figure>
                                <div class="pepl-info">
                                    <h4><a  title="">{{$user->name}}</a></h4>
                                    <span>{{$user->username}}</span>
                                    <hr>
                                    <form method="POST" style="display: inline-block;" action="{{route('friends.add')}}">
                                        @csrf
                                        <input name="friend_id" value="{{$user->id}}" type="hidden">
                                        <button type="submit" class="btn btn-primary" data-ripple="">add friend</button>
                                    </form>
                                </div>
                            </div>
                        </li>                        
                        @endif                                          
                        @endforeach
                    </ul>
                    <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection