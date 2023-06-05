<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.Link')
    <link rel="stylesheet" href="/css/Tiktokads.css">
    <link rel="stylesheet" href="/css/Layoutads.css">
    <title>Tiktok Ads</title>
</head>

<body>
    @include('layouts.Header')
    <div class="box box1 d-flex">
        <div class="leftbox1 d-flex flex-column justify-content-center ">
            <p class="txtbox1">Kể câu chuyện thương hiệu của bạn theo cách độc đáo với TikTok</p>
            <p class="txt2box1">Cách thức khám phá nội dung thông minh của TikTok cho phép người dùng tìm được nội dung
                mới dựa trên sở thích và thói quen xem của họ, giúp các thương hiệu tăng trưởng nhanh và tối đa.</p>
        </div>
        <div class="rightbox1 d-flex justify-content-center">
            <img src="images/tiktok1.png">
        </div>
    </div>
    <span class="txthead text-center d-flex justify-content-center">Phát triển việc kinh doanh của bạn</span>
    <p class="txthead text-center">với các giải pháp thương hiệu đa dạng trên TikTok</p>
    <div class="box box2 d-flex">
        <div class="leftbox2 d-flex flex-column justify-content-center ">
            <p class="txtbox2">Quảng cáo hiển thị ngay khi khởi động ứng dụng</p>
            <a href="" class="text-decoration-none mb-3" style="color:#653FD5">#Brand Takeover</a>
            <p class="txt2box2">Ngay lập tức thu hút sự chú ý của người dùng bằng toàn màn hình tĩnh hoặc động, đem đến
                tác động trực quan cho thương hiệu của bạn.</p>
            <ul>
                <li>Thu hút sự chú ý của người dùng thông qua trải nghiệm hình ảnh toàn màn hình.</li>
                <li>Có nhiều tùy chọn định dạng sáng tạo với màn hình tĩnh hoặc động.</li>
                <li>Hỗ trợ cả JPG 3 giây và video 3-5 giây.</li>
            </ul>
        </div>
        <div class="rightbox1 d-flex justify-content-center">
            <img src="images/tiktok2.png">
        </div>
    </div>
    <div class="box box2 d-flex">
        <div class="rightbox1 d-flex justify-content-center">
            <img src="images/tiktok2.png">
        </div>
        <div class="leftbox2 d-flex flex-column justify-content-center ">
            <p class="txtbox2">Quảng cáo trên dòng thời gian</p>
            <a href="" class="text-decoration-none mb-3" style="color:#653FD5">#In-Feed Ads</a>
            <p class="txt2box2">Kể câu chuyện thương hiệu của bạn như một người sáng tạo của TikTok bằng cách tích hợp
                nội dung video vào dòng thời gian “For You” của người dùng.</p>
            <p class="li">Xuất hiện trong dòng nội dung “For You” với video tối đa 60 giây được phát tự động với âm thanh.</p>
        </div>

    </div>
    @include('layouts.Layoutads')
</body>
@include('layouts.Footer')

</html>