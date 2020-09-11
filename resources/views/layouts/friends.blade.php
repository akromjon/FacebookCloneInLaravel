<ul class="peoples ps-container ps-theme-default ps-active-y" data-ps-id="4b3c4fa9-a40e-8d58-f9d4-f189ce010c4d">
    @foreach(Auth::user()->friends as $friend)
    <li>
    <a href="{{route('messages.user',$friend->user->username)}}">
        <figure>
            <img src="{{$friend->user->image}}" alt="">
            <span class="status f-online"></span>
        </figure>
        <div class="people-name">
            <span>{{$friend->user->name}}</span>
        </div>
    </a>
    </li>
    @endforeach
    @foreach(Auth::user()->allFriends as $friend)
    <li>
        <a href="{{route('messages.user',$friend->userFriend->username)}}">
            <figure>
                <img src="{{$friend->userFriend->image}}" alt="">
                <span class="status f-online"></span>
            </figure>
            <div class="people-name">
                <span>{{$friend->userFriend->name}}</span>
            </div>
        </a>
    </li>
    @endforeach

    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
        <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps-scrollbar-y-rail" style="top: 0px; height: 462px; right: 0px;">
        <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 423px;"></div>
    </div>
</ul>