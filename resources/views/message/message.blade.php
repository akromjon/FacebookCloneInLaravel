@extends('layouts.master')
@section('content')
<div class="col-lg-9">
    <div class="central-meta">
        <div class="messages">
            <h5 class="f-title"><i class="ti-bell"></i>All Messages <span class="more-options"><i class="fa fa-ellipsis-h"></i></span></h5>
            <div class="message-box">
                @include('layouts.friends')
                <div class="peoples-mesg-box">
                    <div class="conversation-head">
                        <figure><img src="{{$user->image}}" alt=""></figure>
                        <span>{{$user->name}}</span>
                    </div>
                    <ul class="chatting-area ps-container ps-theme-default ps-active-y" data-ps-id="72c8ac49-d753-4c80-916b-e81792e89eff">
                        @foreach($messages as $message)
                        @if((($message->user_id==Auth::user()->id) AND ($message->friend_id==$user->id)) OR (($message->user_id==$user->id) AND ($message->friend_id==Auth::user()->id)))
                        <li class="@if($message->user_id==Auth::user()->id)me @elseif($message->user_id==$user->id)you @endif">
                            <figure>
                                <img src="@if($message->user_id==Auth::user()->id){{Auth::user()->image}} @elseif($message->user_id==$user->id){{$user->image}} @endif " alt="">
                            </figure>
                            <p>{{$message->message}}</p>
                        </li>
                        @endif
                        @endforeach
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: -92px;">
                            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 92px; height: 322px; right: 0px;">
                            <div class="ps-scrollbar-y" tabindex="0" style="top: 72px; height: 250px;"></div>
                        </div>
                    </ul>
                    <div class="message-text-container">
                        <form action="{{route('messages.store')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$user->id}}" name="friend_id">
                            <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                             <textarea name="message"></textarea>
                            <button type="submit" title="send"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection