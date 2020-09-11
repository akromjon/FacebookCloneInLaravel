@extends('layouts.master')
@section('content')
<div class="col-lg-6">
    <div class="central-meta new-pst">
        <div class="new-postbox">
            <figure>
                <img src="{{Auth::user()->image}}" alt="">
            </figure>
            <div class="newpst-input">
                <form method="post" action="{{route('feeds.update',$post->id)}}" enctype="multipart/form-data">
                    @csrf
                    {{method_field('put')}}
                    <img src="{{$post->image}}"><br><hr> 
                    <input type="hidden" name="image_old" value="{{$post->image}}">                  
                    <textarea rows="2" name="content" placeholder="write something">{{$post->content}}</textarea>
                    <div class="attachments">
                        <ul>
                            <li>
                                <i class="fa fa-image"></i>
                                <label class="fileContainer">
                                    <input name="image" type="file">
                                </label>
                            </li>
                            <li>
                                <button class="btn-success" type="submit">update</button>
                            </li>
                        </ul>
                    </div>
    
                </form>
            </div>
        </div>
    </div><!-- add post new box -->
    
</div><!-- centerl meta -->
@endsection