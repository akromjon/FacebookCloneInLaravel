<hr>
<div class="we-video-info">
    <ul>
        <li>
            <span class="comment" data-toggle="tooltip" title="Comments" data-original-title="Comments">
                <i class="fa fa-comments-o"></i>
                {{$post->comments->count()}}
            </span>
        </li>
        <li>
            <span class="like" data-toggle="tooltip" title="Like" data-original-title="like">
                <a href="{{route('likes.store')}}" title="" onclick="event.preventDefault(); document.getElementById('like{{$post->id}}').submit();">
                    <i class="ti-heart"></i>
                    {{$post->likes->count()}}
                    @foreach($post->likes as $like)
                    @if($like->user_id==Auth::user()->id)
                    You Liked
                    @endif
                    @endforeach
                </a>
                <form id="like{{$post->id}}" action="{{route('likes.store')}}" method="POST" class="d-none">
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <input type="hidden" name="liked" value="
                    @foreach($post->likes as $like)
                    @if($like->user_id==Auth::user()->id)
                    {{$like->user_id}}
                    @endif 
                    @endforeach">
                    @csrf
                </form>
            </span>
        </li>
        <li>
            <span class="dislike" data-toggle="tooltip" title="" data-original-title="dislike">
                <a href="{{route('dislikes.store')}}" title="" onclick="event.preventDefault(); document.getElementById('dislike{{$post->id}}').submit();">
                    <i class="ti-heart-broken"></i> {{$post->dislikes->count()}}                    
                    @foreach($post->dislikes as $like)
                    @if($like->user_id==Auth::user()->id)
                    You Disliked
                    @endif
                    @endforeach
                </a>
                <form id="dislike{{$post->id}}" action="{{route('dislikes.store')}}" method="POST" class="d-none">
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <input type="hidden" name="liked" value="
                    @foreach($post->dislikes as $like)
                    @if($like->user_id==Auth::user()->id)
                    {{$like->user_id}}
                    @endif 
                    @endforeach">
                    @csrf
                </form>
            </span>
        </li>
    </ul>
</div>