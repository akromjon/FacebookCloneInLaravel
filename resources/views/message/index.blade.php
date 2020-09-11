@extends('layouts.master')
@section('content')
<div class="col-lg-9">
    <div class="central-meta">
        <div class="messages">
            <h5 class="f-title"><i class="ti-bell"></i>All Messages <span class="more-options"><i class="fa fa-ellipsis-h"></i></span></h5>
            <div class="message-box">
               @include('layouts.friends')
                <div class="peoples-mesg-box">

                    <ul class="chatting-area ps-container ps-theme-default ps-active-y" data-ps-id="72c8ac49-d753-4c80-916b-e81792e89eff">
                        <h1 style="text-align: center;">Start chatting</h1>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection