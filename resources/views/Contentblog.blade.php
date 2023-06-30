<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @extends('layouts.Link')
    <link rel="stylesheet" href="/css/Contentblog.css">
    <link rel="stylesheet" href="/css/Layoutads.css">
    <title>Content Blog</title>
</head>

<body>
    @include('layouts.Header')

    <div class="box box1 d-flex justify-content-between">
        <div class="leftbox1 d-flex flex-column">
            <div class="headbox1 d-flex justify-content-between mb-3">
                <div class="d-flex justify-content-between" style="width: 40%;">
                    <img src="{{ asset($blog->user->avatar) }}" class="avatar" style="border-radius: 50%;">
                    <div class="d-flex flex-column justify-content-between">
                        <span class="txtuser">{{ $blog->user->name }}</span>
                        <span class="txtuser2">{{ $blog->updated_at }}</span>
                    </div>
                    <span class="txtuser3">Manager</span>
                </div>
                <a href="" class="share"><i class="bi bi-share-fill"></i></a>
            </div>
            <div class="bodybox1">
                <p class="txtcontent">{{ $blog->title }}</p>
                <img src="{{ $blog->imageblog }}" style="width:100%">
                <p class="txtcontent2">{!!  $blog->content !!}</p>
            </div>
        </div>
        <div class="d-flex flex-column" style="width: 32%;">
            <div class="rightbox1 d-flex flex-column justify-content-between">
                @foreach($topblog as $key => $tb)
                @if($loop->first)
                @continue
                @endif
                <a href="{{ route('contentblog.page', ['idbaiviet' => $tb->idblog ]) }}" class="phantubox1 d-flex">
                    <img src="{{ $tb->imageblog }}" style="height:100px">
                    <div class="d-flex flex-column">
                        <p class="txt5box1">{{ $tb->category }}</p>
                        <p class="txt6box1">{{ $tb->title }}</p>
                    </div>
                </a>
                @endforeach
                <!-- <div class="phantubox1 d-flex">
                    <img src="images/blog3.png">
                    <div class="d-flex flex-column">
                        <p class="txt5box1">SEO</p>
                        <p class="txt6box1">Digital Marketing là làm gì? Top những kỹ năng...</p>
                    </div>
                </div>
                <div class="phantubox1 d-flex">
                    <img src="images/blog4.png">
                    <div class="d-flex flex-column">
                        <p class="txt5box1">SEO</p>
                        <p class="txt6box1">Digital Marketing là làm gì? Top những kỹ năng...</p>
                    </div>
                </div> -->


            </div>
            <div class="d-flex flex-column">
                <p class="txt5box2">Xem nhiều nhất</p>
                <div class="hrbox2"></div>
                @foreach($popularblog as $ppblog)
                <a href="{{ route('contentblog.page', ['idbaiviet' => $ppblog->idblog ]) }}" class="phanturightbox2 d-flex">
                    <p class="txt6box2">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
                    <div style="margin-left:1em" class="d-flex flex-column">
                        <span class="txt7box2">{{ $ppblog->title }}
                        </span>
                        <span class="txt4box2">{{ $ppblog->timeread }} phút để đọc</span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>

    </div>



</body>

@include('layouts.Footer2')

</html>