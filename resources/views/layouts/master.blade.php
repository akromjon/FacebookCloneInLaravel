<html lang="en" class=" ">

<head>
    <style>
        .dismissButton {
            background-color: #fff;
            border: 1px solid #dadce0;
            color: #1a73e8;
            border-radius: 4px;
            font-family: Roboto, sans-serif;
            font-size: 14px;
            height: 36px;
            cursor: pointer;
            padding: 0 24px
        }

        .dismissButton:hover {
            background-color: rgba(66, 133, 244, 0.04);
            border: 1px solid #d2e3fc
        }

        .dismissButton:focus {
            background-color: rgba(66, 133, 244, 0.12);
            border: 1px solid #d2e3fc;
            outline: 0
        }

        .dismissButton:hover:focus {
            background-color: rgba(66, 133, 244, 0.16);
            border: 1px solid #d2e2fd
        }

        .dismissButton:active {
            background-color: rgba(66, 133, 244, 0.16);
            border: 1px solid #d2e2fd;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15)
        }

        .dismissButton:disabled {
            background-color: #fff;
            border: 1px solid #f1f3f4;
            color: #3c4043
        }
    </style>
    <style>
        .gm-style .gm-style-mtc label,
        .gm-style .gm-style-mtc div {
            font-weight: 400
        }
    </style>
    <style>
        .gm-control-active>img {
            box-sizing: content-box;
            display: none;
            left: 50%;
            pointer-events: none;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .gm-control-active>img:nth-child(1) {
            display: block
        }

        .gm-control-active:hover>img:nth-child(1),
        .gm-control-active:active>img:nth-child(1) {
            display: none
        }

        .gm-control-active:hover>img:nth-child(2),
        .gm-control-active:active>img:nth-child(3) {
            display: block
        }
    </style>
    <style>
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-mtc div {
            font-size: 10px;
            box-sizing: border-box
        }
    </style>
    <style>
        @media print {

            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }

        @media screen {

            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }
    </style>
    <style>
        .gm-style-pbc {
            transition: opacity ease-in-out;
            background-color: rgba(0, 0, 0, 0.45);
            text-align: center
        }

        .gm-style-pbt {
            font-size: 22px;
            color: white;
            font-family: Roboto, Arial, sans-serif;
            position: relative;
            margin: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }
    </style>
    <style>
        .gm-ui-hover-effect {
            opacity: .6
        }

        .gm-ui-hover-effect:hover {
            opacity: 1
        }
    </style>
    <style>
        .gm-style .transit-container {
            background-color: white;
            max-width: 265px;
            overflow-x: hidden
        }

        .gm-style .transit-container .transit-title span {
            font-size: 14px;
            font-weight: 500
        }

        .gm-style .transit-container .transit-title {
            padding-bottom: 6px
        }

        .gm-style .transit-container .transit-wheelchair-icon {
            background: transparent url('https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png');
            background-size: 59px 492px;
            display: inline-block;
            background-position: -5px -450px;
            width: 13px;
            height: 13px
        }

        .gm-style.gm-china .transit-container .transit-wheelchair-icon {
            background-image: url('http://maps.gstatic.cn/mapfiles/api-3/images/mapcnt6.png')
        }

        @media (-webkit-min-device-pixel-ratio:1.2),
        (min-resolution:1.2dppx),
        (min-resolution:116dpi) {
            .gm-style .transit-container .transit-wheelchair-icon {
                background-image: url('https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6_hdpi.png');
                background-size: 59px 492px;
                display: inline-block;
                background-position: -5px -449px;
                width: 13px;
                height: 13px
            }

            .gm-style.gm-china .transit-container .transit-wheelchair-icon {
                background-image: url('http://maps.gstatic.cn/mapfiles/api-3/images/mapcnt6_hdpi.png')
            }
        }

        .gm-style .transit-container div {
            background-color: white;
            font-size: 11px;
            font-weight: 300;
            line-height: 15px
        }

        .gm-style .transit-container .transit-line-group {
            overflow: hidden;
            margin-right: -6px
        }

        .gm-style .transit-container .transit-line-group-separator {
            border-top: 1px solid #e6e6e6;
            padding-top: 5px
        }

        .gm-style .transit-container .transit-nlines-more-msg {
            color: #999;
            margin-top: -3px;
            padding-bottom: 6px
        }

        .gm-style .transit-container .transit-line-group-vehicle-icons {
            display: inline-block;
            padding-right: 10px;
            vertical-align: top;
            margin-top: 1px
        }

        .gm-style .transit-container .transit-line-group-content {
            display: inline-block;
            min-width: 100px;
            max-width: 228px;
            margin-bottom: -3px
        }

        .gm-style .transit-container .transit-clear-lines {
            clear: both
        }

        .gm-style .transit-container .transit-div-line-name {
            float: left;
            padding: 0 6px 6px 0;
            white-space: nowrap
        }

        .gm-style .transit-container .transit-div-line-name .gm-transit-long {
            width: 107px
        }

        .gm-style .transit-container .transit-div-line-name .gm-transit-medium {
            width: 50px
        }

        .gm-style .transit-container .transit-div-line-name .gm-transit-short {
            width: 37px
        }

        .gm-style .transit-div-line-name .renderable-component-icon {
            float: left;
            margin-right: 2px
        }

        .gm-style .transit-div-line-name .renderable-component-color-box {
            background-image: url(https://maps.gstatic.com/mapfiles/transparent.png);
            height: 10px;
            width: 4px;
            float: left;
            margin-top: 3px;
            margin-right: 3px;
            margin-left: 1px
        }

        .gm-style.gm-china .transit-div-line-name .renderable-component-color-box {
            background-image: url(http://maps.gstatic.cn/mapfiles/transparent.png)
        }

        .gm-style .transit-div-line-name .renderable-component-text {
            text-align: left;
            overflow: hidden;
            text-overflow: ellipsis;
            display: block
        }

        .gm-style .transit-div-line-name .renderable-component-text-box {
            overflow: hidden;
            text-overflow: ellipsis;
            display: block;
            font-size: 8pt;
            font-weight: 400;
            text-align: center;
            padding: 1px 2px
        }

        .gm-style .transit-div-line-name .renderable-component-text-box-white {
            border: solid 1px #ccc;
            background-color: white;
            padding: 0 2px
        }

        .gm-style .transit-div-line-name .renderable-component-bold {
            font-weight: 400
        }
    </style>
    <style>
        .poi-info-window div,
        .poi-info-window a {
            color: #333;
            font-family: Roboto, Arial;
            font-size: 13px;
            background-color: white;
            -moz-user-select: text;
            -webkit-user-select: text;
            -ms-user-select: text;
            user-select: text
        }

        .poi-info-window {
            cursor: default
        }

        .poi-info-window a:link {
            text-decoration: none;
            color: #427fed
        }

        .poi-info-window .view-link,
        .poi-info-window a:visited {
            color: #427fed
        }

        .poi-info-window .view-link:hover,
        .poi-info-window a:hover {
            cursor: pointer;
            text-decoration: underline
        }

        .poi-info-window .full-width {
            width: 180px
        }

        .poi-info-window .title {
            overflow: hidden;
            font-weight: 500;
            font-size: 14px
        }

        .poi-info-window .address {
            margin-top: 2px;
            color: #555
        }
    </style>
    <style>
        .gm-style .gm-style-iw {
            font-weight: 300;
            font-size: 13px;
            overflow: hidden
        }

        .gm-style .gm-style-iw-a {
            position: absolute;
            width: 9999px;
            height: 0
        }

        .gm-style .gm-style-iw-t {
            position: absolute;
            width: 100%
        }

        .gm-style .gm-style-iw-t::after {
            background: linear-gradient(45deg, rgba(255, 255, 255, 1) 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);
            box-shadow: -2px 2px 2px 0 rgba(178, 178, 178, .4);
            content: "";
            height: 15px;
            left: 0;
            position: absolute;
            top: 0;
            transform: translate(-50%, -50%) rotate(-45deg);
            width: 15px
        }

        .gm-style .gm-style-iw-c {
            position: absolute;
            box-sizing: border-box;
            overflow: hidden;
            top: 0;
            left: 0;
            transform: translate(-50%, -100%);
            background-color: white;
            border-radius: 8px;
            padding: 12px;
            box-shadow: 0 2px 7px 1px rgba(0, 0, 0, 0.3)
        }

        .gm-style .gm-style-iw-d {
            box-sizing: border-box;
            overflow: auto
        }

        .gm-style .gm-style-iw-d::-webkit-scrollbar {
            width: 18px;
            height: 12px;
            -webkit-appearance: none
        }

        .gm-style .gm-style-iw-d::-webkit-scrollbar-track,
        .gm-style .gm-style-iw-d::-webkit-scrollbar-track-piece {
            background: #fff
        }

        .gm-style .gm-style-iw-c .gm-style-iw-d::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.12);
            border: 6px solid transparent;
            border-radius: 9px;
            background-clip: content-box
        }

        .gm-style .gm-style-iw-c .gm-style-iw-d::-webkit-scrollbar-thumb:horizontal {
            border: 3px solid transparent
        }

        .gm-style .gm-style-iw-c .gm-style-iw-d::-webkit-scrollbar-thumb:hover {
            background-color: rgba(0, 0, 0, 0.3)
        }

        .gm-style .gm-style-iw-c .gm-style-iw-d::-webkit-scrollbar-corner {
            background: transparent
        }

        .gm-style .gm-iw {
            color: #2c2c2c
        }

        .gm-style .gm-iw b {
            font-weight: 400
        }

        .gm-style .gm-iw a:link,
        .gm-style .gm-iw a:visited {
            color: #4272db;
            text-decoration: none
        }

        .gm-style .gm-iw a:hover {
            color: #4272db;
            text-decoration: underline
        }

        .gm-style .gm-iw .gm-title {
            font-weight: 400;
            margin-bottom: 1px
        }

        .gm-style .gm-iw .gm-basicinfo {
            line-height: 18px;
            padding-bottom: 12px
        }

        .gm-style .gm-iw .gm-website {
            padding-top: 6px
        }

        .gm-style .gm-iw .gm-photos {
            padding-bottom: 8px;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none
        }

        .gm-style .gm-iw .gm-sv,
        .gm-style .gm-iw .gm-ph {
            cursor: pointer;
            height: 50px;
            width: 100px;
            position: relative;
            overflow: hidden
        }

        .gm-style .gm-iw .gm-sv {
            padding-right: 4px
        }

        .gm-style .gm-iw .gm-wsv {
            cursor: pointer;
            position: relative;
            overflow: hidden
        }

        .gm-style .gm-iw .gm-sv-label,
        .gm-style .gm-iw .gm-ph-label {
            cursor: pointer;
            position: absolute;
            bottom: 6px;
            color: #fff;
            font-weight: 400;
            text-shadow: rgba(0, 0, 0, 0.7) 0 1px 4px;
            font-size: 12px
        }

        .gm-style .gm-iw .gm-stars-b,
        .gm-style .gm-iw .gm-stars-f {
            height: 13px;
            font-size: 0
        }

        .gm-style .gm-iw .gm-stars-b {
            position: relative;
            background-position: 0 0;
            width: 65px;
            top: 3px;
            margin: 0 5px
        }

        .gm-style .gm-iw .gm-rev {
            line-height: 20px;
            -ms-user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none
        }

        .gm-style.gm-china .gm-iw .gm-rev {
            display: none
        }

        .gm-style .gm-iw .gm-numeric-rev {
            font-size: 16px;
            color: #dd4b39;
            font-weight: 400
        }

        .gm-style .gm-iw.gm-transit {
            margin-left: 15px
        }

        .gm-style .gm-iw.gm-transit td {
            vertical-align: top
        }

        .gm-style .gm-iw.gm-transit .gm-time {
            white-space: nowrap;
            color: #676767;
            font-weight: bold
        }

        .gm-style .gm-iw.gm-transit img {
            width: 15px;
            height: 15px;
            margin: 1px 5px 0 -20px;
            float: left
        }
    </style>
    <style>
        .gm-iw {
            text-align: left;
        }

        .gm-iw .gm-numeric-rev {
            float: left;
        }

        .gm-iw .gm-photos,
        .gm-iw .gm-rev {
            direction: ltr;
        }

        .gm-iw .gm-stars-f,
        .gm-iw .gm-stars-b {
            background: url("https://maps.gstatic.com/mapfiles/api-3/images/review_stars.png") no-repeat;
            background-size: 65px 26px;
            float: left;
        }

        .gm-iw .gm-stars-f {
            background-position: left -13px;
        }

        .gm-iw .gm-sv-label,
        .gm-iw .gm-ph-label {
            left: 4px;
        }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700">
    <style>
        .gm-style img {
            max-width: none;
        }

        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{asset('css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/dark-theme.css')}}">

    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/map.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/marker.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/infowindow.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/onion.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/42/2/controls.js"></script>
</head>

<body>


    <!--<div class="se-pre-con"></div>-->
    <div id="mm-0" class="mm-page mm-slideout">
        <div class="theme-layout">
            <div class="postoverlay" style="display: none;"></div>
            <div class="responsive-header">
                <div class="mh-head first mm-sticky mh-btns-left mh-btns-right mh-sticky">
                    <span class="mh-btns-left">
                        <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                    </span>
                    <span class="mh-text">
                        <a href="newsfeed.html" title=""><img src="{{asset('images/logo.png')}}}}" alt=""></a>
                    </span>
                    <span class="mh-btns-right">
                        <a class="fa fa-sliders" href="#shoppingbag"></a>
                    </span>
                </div>
                <div class="mh-head second">
                    <form class="mh-form">
                        <input placeholder="search">
                        <a href="#/" class="fa fa-search"></a>
                    </form>
                </div>


            </div><!-- responsive header -->

            <div class="topbar stick" style="">
                <div class="logo">
                    <a title="" href="{{route('main')}}"><img width="50" src="{{asset('images/logo_blue.png')}}" alt="">richer</a>
                </div>

                <div class="top-area">
                    <ul class="main-menu">
                        <li>
                            <a href="{{route('main')}}" title="">Home</a>

                        </li>
                        <li>
                            <a href="{{route('friends.user')}}" title="Users">Users</a>

                        </li>

                    </ul>

                    <div class="user-img">
                        <img style="width: 60px;" src="{{Auth::user()->image}}" title="{{Auth::user()->name}}">

                    </div>

                </div>
            </div><!-- topbar -->
            @yield('header')
            <section>
                <div class="gap gray-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row" id="page-contents">
                                    <div class="col-lg-3">
                                        <aside class="sidebar static">
                                            <div class="widget">
                                                <h4 class="widget-title">Menu</h4>
                                                <ul class="naves">
                                                    <li>
                                                        <i class="ti-clipboard"></i>
                                                        <a href="{{route('feeds')}}" title="">My News feed</a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-comments-smiley"></i>
                                                        <a href="{{route('messages')}}" title="">My Messages</a>
                                                    </li>

                                                    <li>
                                                        <i class="ti-user"></i>
                                                        <a href="{{route('friends.index')}}" title="">My friends </a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-image"></i>
                                                        <a href="{{route('pictures')}}" title="">my images</a>
                                                    </li>

                                                    <li>
                                                        <i class="ti-settings"></i>
                                                        <a href="{{route('settings')}}" title="">account setting</a>
                                                    </li>
                                                    <li>
                                                        <i class="ti-power-off"></i>
                                                        <a href="{{ route('logout') }}" title="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>

                                                    </li>
                                                </ul>
                                            </div><!-- Shortcuts -->
                                            <div class="widget">
                                                <h4 class="widget-title">Recent Posts</h4>
                                                <ul class="activitiez">
                                                    @foreach(Auth::user()->posts->take(4) as $post)
                                                    <li>
                                                        <div class="activity-meta">

                                                            <i>{{$post->created_at->diffForHumans()}}</i>
                                                            <span>
                                                                <a href="" title="">{{$post->content}}
                                                                </a>
                                                            </span>
                                                            <h6>by You</a></h6>
                                                        </div>
                                                    </li>
                                                    @endforeach


                                                </ul>
                                            </div><!-- recent activites -->
                                            <div class="widget">
                                                <h4 class="widget-title">Recent Comments</h4>
                                                <ul class="activitiez">
                                                    @foreach(Auth::user()->comments->take(4) as $post)
                                                    <li>
                                                        <div class="activity-meta">

                                                            <i>{{$post->created_at->diffForHumans()}}</i>
                                                            <span>
                                                                <a href="" title="">{{$post->content}}
                                                                </a>
                                                            </span>
                                                            <h6>by You</a></h6>
                                                        </div>
                                                    </li>
                                                    @endforeach


                                                </ul>
                                            </div><!-- recent activites -->

                                        </aside>
                                    </div><!-- sidebar -->
                                    @yield('content')
                                    <div class="col-lg-3">
                                        <aside class="sidebar static">


                                            <div class="widget friend-list stick-widget" style="">
                                                <h4 class="widget-title">Friends</h4>


                                                <ul id="people-list" class="friendz-list ps-container ps-theme-default ps-active-y" data-ps-id="c0122a9d-2c0d-dafa-25a9-55567572a1d0">
                                                    @foreach(Auth::user()->friends as $friend)
                                                    <li>
                                                        <figure>
                                                            <img src="{{$friend->user->image}}" alt="">
                                                            <span class="status f-online"></span>
                                                        </figure>
                                                        <div class="friendz-meta">
                                                            <a href="time-line.html">{{$friend->user->name}}</a>
                                                            <i>{{$friend->user->username}}</i>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                    @foreach(Auth::user()->allFriends as $friend)
                                                    <li>
                                                        <figure>
                                                            <img src="{{$friend->userFriend->image}}" alt="">
                                                            <span class="status f-online"></span>
                                                        </figure>
                                                        <div class="friendz-meta">
                                                            <a href="time-line.html">{{$friend->userFriend->name}}</a>
                                                            <i>{{$friend->userFriend->username}}</i>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                                        <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                    </div>
                                                    <div class="ps-scrollbar-y-rail" style="top: 0px; height: 450px; right: 0px;">
                                                        <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 334px;"></div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </aside>
                                    </div>
                                    <!-- sidebar -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="bottombar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="copyright">Created By <a href="https://github.com/akromjon">Akromjon</a></a></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="strp-spinner-move" style="display: none;">
            <div class="strp-spinner" style="display: none;">
                <div class="strp-spinner-rotate" style="animation: 1s steps(80) 0s infinite normal none running strp-spinner-spin;">
                    <div class="strp-spinner-frame" style="opacity: 0.01; transform: rotate(4.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.03; transform: rotate(9deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.04; transform: rotate(13.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.05; transform: rotate(18deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.06; transform: rotate(22.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.08; transform: rotate(27deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.09; transform: rotate(31.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.1; transform: rotate(36deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.11; transform: rotate(40.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.13; transform: rotate(45deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.14; transform: rotate(49.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.15; transform: rotate(54deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.16; transform: rotate(58.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.18; transform: rotate(63deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.19; transform: rotate(67.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.2; transform: rotate(72deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.21; transform: rotate(76.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.23; transform: rotate(81deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.24; transform: rotate(85.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.25; transform: rotate(90deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.26; transform: rotate(94.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.28; transform: rotate(99deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.29; transform: rotate(103.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.3; transform: rotate(108deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.31; transform: rotate(112.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.33; transform: rotate(117deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.34; transform: rotate(121.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.35; transform: rotate(126deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.36; transform: rotate(130.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.38; transform: rotate(135deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.39; transform: rotate(139.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.4; transform: rotate(144deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.41; transform: rotate(148.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.43; transform: rotate(153deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.44; transform: rotate(157.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.45; transform: rotate(162deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.46; transform: rotate(166.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.48; transform: rotate(171deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.49; transform: rotate(175.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.5; transform: rotate(180deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.51; transform: rotate(184.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.53; transform: rotate(189deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.54; transform: rotate(193.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.55; transform: rotate(198deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.56; transform: rotate(202.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.58; transform: rotate(207deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.59; transform: rotate(211.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.6; transform: rotate(216deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.61; transform: rotate(220.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.63; transform: rotate(225deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.64; transform: rotate(229.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.65; transform: rotate(234deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.66; transform: rotate(238.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.68; transform: rotate(243deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.69; transform: rotate(247.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.7; transform: rotate(252deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.71; transform: rotate(256.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.73; transform: rotate(261deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.74; transform: rotate(265.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.75; transform: rotate(270deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.76; transform: rotate(274.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.78; transform: rotate(279deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.79; transform: rotate(283.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.8; transform: rotate(288deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.81; transform: rotate(292.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.83; transform: rotate(297deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.84; transform: rotate(301.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.85; transform: rotate(306deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.86; transform: rotate(310.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.88; transform: rotate(315deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.89; transform: rotate(319.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.9; transform: rotate(324deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.91; transform: rotate(328.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.93; transform: rotate(333deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.94; transform: rotate(337.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.95; transform: rotate(342deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.96; transform: rotate(346.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.98; transform: rotate(351deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 0.99; transform: rotate(355.5deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                    <div class="strp-spinner-frame" style="opacity: 1; transform: rotate(360deg);">
                        <div class="strp-spinner-line" style="background: rgb(238, 238, 238);"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="strp-window strp-measured strp-window-skin-strip">
            <div class="strp-pages"></div>
            <div class="strp-nav strp-nav-previous" style="display: none;">
                <div class="strp-nav-button" style="display: none;">
                    <div class="strp-nav-button-background"></div>
                    <div class="strp-nav-button-icon"></div>
                </div>
            </div>
            <div class="strp-nav strp-nav-next" style="display: none;">
                <div class="strp-nav-button" style="display: none;">
                    <div class="strp-nav-button-background"></div>
                    <div class="strp-nav-button-icon"></div>
                </div>
            </div>
            <div class="strp-close">
                <div class="strp-close-background"></div>
                <div class="strp-close-icon"></div>
            </div>
        </div>
        <div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 10px; right: 5px; opacity: 0; cursor: pointer;"><i class="fa fa-angle-up"></i></div>
    </div>
    <!-- side panel -->

    <script src="{{asset('js/main.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/map-init.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>


    <div id="mm-blocker" class="mm-slideout"></div>
</body>

</html>