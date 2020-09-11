@extends('layouts.master')
@section('content')
<div class="col-lg-6">
    <div class="central-meta new-pst">
        <div class="new-postbox">
            <figure>
                <img src="{{Auth::user()->image}}" alt="">
            </figure>
            <div class="newpst-input">
                <form method="post" action="{{route('feeds.store')}}" enctype="multipart/form-data">
                    @csrf
                    <textarea rows="2" name="content" placeholder="write something"></textarea>
                    <div class="attachments">
                        <ul>
                            <li>
                                <i class="fa fa-image"></i>
                                <label class="fileContainer">
                                    <input name="image" type="file">
                                </label>
                            </li>
                            <li>
                                <button type="submit">Post</button>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- add post new box -->
    <div class="loadMore">
        <div class="central-meta item" style="display: inline-block;">
            <div class="user-post">
                <div class="friend-info">
                    <figure>
                        <img src="{{Auth::user()->image}}" alt="">
                    </figure>
                    <div class="friend-name">
                        <ins><a href="time-line.html" title="">{{$post->user->name}}</a></ins>
                        <span>published: {{$post->created_at->diffForHumans()}}</span>
                    </div>
                    <div class="post-meta">
                        @if($post->image=='0')
                        @else
                        <img style="width:auto; height: auto;" src="{{$post->image}}" alt="">
                        @endif
                        <div class="description">
                            {{$post->content}}
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            @include('layouts.widget')
            <div class="coment-area">
                <ul class="we-comet">                    
                    <li class="post-comment">
                        <div class="comet-avatar">
                            <img src="{{Auth::user()->image}}" alt="">
                        </div>
                        <div class="post-comt-box">
                            <div class="container-fluid">
                                <div class="row">
                                    <form method="POST" action="{{route('comments.update',$comment->id)}}">
                                        @csrf
                                        {{method_field('put')}}
                                        <input type="hidden" name="post_id" value="{{$post->id}}">
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                        <input type="hidden" name="post_slug" value="{{$post->slug}}">
                                        <div class="col-sm-8">
                                            <textarea name="content" cols="1000" rows="100" placeholder="Post your comment">{{$comment->content}}</textarea>
                                        </div>
                                        <div class="col-sm-4 pull-right">
                                            <button style="width: 100%;" class="btn btn-success" type="submit">Update Comment</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- centerl meta -->
@endsection