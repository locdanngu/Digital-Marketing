<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @extends('layouts.Link')
    <link rel="stylesheet" href="/css/Brief.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/css/Layoutads.css?v=<?php echo time(); ?>">
    <title>Brief</title>
</head>

<body>
    @include('layouts.Header')


    <div class="box d-flex justify-content-center">
        <div class="box1">
            <p class="txtbox1">Bạn hãy chọn Brief (bản yêu cầu dịch vụ) phù hợp nhất với nhu cầu của mình và điền đầy đủ
                thông tin.</p>
            <p class="txt2box1">Chúng tôi sẽ nhận được thông tin của bạn ngay lập tức! </p>
        </div>
    </div>

    <div class="box box2">
        @foreach($brief as $br)
        <div class="phantubox2 d-flex flex-column justify-content-between">
            <p class="txtbox1">{{ $br->namebrief }}</p>
            <p class="txt2box1">{{ $br->contentbrief }}
            </p>
            <button data-bs-toggle="modal" data-bs-target="#a" class="linkbox2">Brief Về {{ $br->titlebrief }}</button>
        </div>
        @endforeach
        <!-- <div class="phantubox2 d-flex flex-column justify-content-between">
            <p class="txtbox1">Digital Marketing</p>
            <p class="txt2box1">Digital Marketing là chiến lược dùng Internet làm phương tiện cho các hoạt động
                marketing và trao đổi thông tin
            </p>
            <button data-bs-toggle="modal" data-bs-target="#a" class="linkbox2">Brief Về Digital Marketing</button>
        </div> -->
        <!-- <div class="phantubox2 d-flex flex-column justify-content-between">
            <p class="txtbox1">Quảng Cáo</p>
            <p class="txt2box1">Quảng cáo (advertising) là hoạt động của doanh nghiệp nhằm làm tăng mức tiêu thụ hàng
                hóa của mình...
            </p>
            <button data-bs-toggle="modal" data-bs-target="#a" class="linkbox2">Briefs về triển khai quảng cáo</button>
        </div>
        <div class="phantubox2 d-flex flex-column justify-content-between">
            <p class="txtbox1">PR & Booking</p>
            <p class="txt2box1">Booking PR là hình thức đặt bài đăng các bài trên báo chí, trang tin hay các trang mạng
                xã hội có nhiều lượt truy ...
            </p>
            <button data-bs-toggle="modal" data-bs-target="#a" class="linkbox2">Briefs về PR & Booking</button>
        </div>
        <div class="phantubox2 d-flex flex-column justify-content-between">
            <p class="txtbox1">Video Viral</p>
            <p class="txt2box1">Video lan truyền nhanh là video trở nên phổ biến thông qua quá trình chia sẻ trên mạng
                Internet, thông thường thông qua...
            </p>
            <button data-bs-toggle="modal" data-bs-target="#a" class="linkbox2">Brief Về Video Viral</button>
        </div>
        <div class="phantubox2 d-flex flex-column justify-content-between">
            <p class="txtbox1">Creative Content</p>
            <p class="txt2box1">Creative content hay content marketing chính là quá trình mà bạn tạo ra hoặc chia sẻ
                những thông tin có giá trị...
            </p>
            <button data-bs-toggle="modal" data-bs-target="#a" class="linkbox2">Brief Về Creative Content</button>
        </div>
        <div class="phantubox2 d-flex flex-column justify-content-between">
            <p class="txtbox1">KOLs / Influencer</p>
            <p class="txt2box1">KOL và Influencer là khái niệm chỉ về người có sức ảnh hưởng đến cộng đồng, ... biết đến
                bạn, người nước ngoài...
            </p>
            <button data-bs-toggle="modal" data-bs-target="#a" class="linkbox2">Brief Về KOLs / Influencer</button>
        </div>
        <div class="phantubox2 d-flex flex-column justify-content-between">
            <p class="txtbox1">TVC Quảng Cáo</p>
            <p class="txt2box1">Phim quảng cáo là một dạng phim hay tiết mục được dàn dựng sản xuất, lưu hành trên những
                phương tiện truyền thông ...
            </p>
            <button data-bs-toggle="modal" data-bs-target="#a" class="linkbox2">Brief Về TVC Quảng Cáo</button>
        </div>
        <div class="phantubox2 d-flex flex-column justify-content-between">
            <p class="txtbox1">Thuê tài khoản quảng cáo</p>
            <p class="txt2box1">Thuê tài khoản quảng cáo Facebook Ads là sự lựa chọn tốt khi tài khoản quảng cáo của
                doanh nghiệp gặp ...
            </p>
            <button data-bs-toggle="modal" data-bs-target="#a" class="linkbox2">Brief Về Thuê tài khoản quảng cáo</button>
        </div> -->
        <div class="phantubox2 d-flex flex-column justify-content-between text-center">
            <p class="txtbox1">Tư vấn miễn phí</p>
            <p class="txt2box1">Tư vấn MIỄN PHÍ chiến dịch truyền thông & quảng cáo về sản phẩm của bạn?</p>
            <a href="mailto:tranvanloc96lhp@gmail.com" class="d-flex fixa" style="justify-content: left;">
                <div class="icon2" style="margin-right:1em">
                    <img src="images/letter.png">
                </div>
                <div class="d-flex flex-column align-items-baseline">
                    <span class="contactus">Liên hệ với chúng tôi</span>
                    <i class="txt6">Ấn để gửi mail</i>
                </div>
            </a>
        </div>

    </div>






</body>

@include('layouts.Footer')

</html>