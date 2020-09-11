@extends('layouts.master')
@section('header')
@include('layouts.head')
@endsection
@section('content')

<div class="col-lg-6">
<div class="central-meta new-pst">
        <div class="new-postbox">
            <figure>
                <img src="{{Auth::user()->image}}" alt="">
            </figure>
            <div class="newpst-input">
                <form method="post" action="{{route('pictures.store')}}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="attachments">
                        <ul>
                            <li>
                                <i class="fa fa-image"></i>
                                <label class="fileContainer">
                                    <input name="image" type="file">
                                </label>
                            </li>
                            <li>
                                <button type="submit">Upload a picture</button>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- add post new box -->
    <div class="central-meta">
        <ul class="photos">
            @foreach(Auth::user()->pictures as $picture)
            <li>
                <a class="strip" href="{{$picture->image}}" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                    <img src="{{$picture->image}}" alt=""></a>
                   <form method="POST" action="{{route('pictures.delete',$picture->id)}}">
                       @csrf
                       {{method_field('delete')}}
                       <button class="btn btn-success">delete</button>
                   </form>
            </li>
            @endforeach

        </ul>
        <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
    </div><!-- photos -->
</div>
@endsection