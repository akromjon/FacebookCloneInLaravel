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
        @foreach($posts as $post)
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
                        <a href="{{route('feeds.view',$post->slug)}}"><img style="width:auto; height: auto;" src="{{$post->image}}"></a>
                        @endif
                        <div class="description">
                            <a href="{{route('feeds.view',$post->slug)}}">{{$post->content}}</a>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            @include('layouts.widget')
            @if($post->user_id==Auth::user()->id)
            <a href="{{route('feeds.edit',$post->slug)}}" class="btn btn-success">Edit</a>
            <form method="POST" style="display: inline-block;" action="{{route('feeds.delete',$post->slug)}}">
                @csrf
                {{method_field('delete')}}
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            @endif
        </div>
        @endforeach
    </div>

@endsection