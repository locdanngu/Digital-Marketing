<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @extends('layouts.Link')
    <link rel="stylesheet" href="/css/Viralvideo.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/css/Layoutads.css?v=<?php echo time(); ?>">
    <title>Viralvideo</title>
</head>

<body>
    @include('layouts.Header')
    <div class="box box1 d-flex">
        <div class="leftbox1 d-flex flex-column justify-content-center ">
            <p class="txtbox1">TVC / Viral video</p>
            <p class="txt2box1">Hai công cụ truyền thông đắc lực được các công ty, doanh nghiệp sử dụng phổ biến trong
                việc quảng bá hình ảnh và định vị thương hiệu</p>
            <button type="button" class="btntuvan mt-4" data-bs-toggle="modal" data-bs-target="#a">Liên hệ tư
                vấn</button>
        </div>
        <div class="rightbox1 d-flex justify-content-center">
            <img src="images/vr1.png">
        </div>
    </div>
    <p class="txthead text-center">Quy trình tạo ra sản phẩm</p>
    <div class="box box2 justify-content-between d-flex">
        <div class="phantubox2">
            <img src="images/vr2.png">
            <div class="d-flex flex-column">
                <p class="txtbox2">Nhận Brief</p>
                <p class="txt2box2">Nhận thông tin yêu cầu từ phía khách hàng (client) theo biểu mẫu có sẵn</p>
            </div>
        </div>
        <div class="phantubox2">
            <img src="images/vr3.png">
            <div class="d-flex flex-column">
                <p class="txtbox2">Ý tưởng kịch bản</p>
                <p class="txt2box2">Lên ý tưởng kịch bản sáng tạo, bứt phá, mới lạ cho TVC / Viral Video</p>
            </div>
        </div>
        <div class="phantubox2">
            <img src="images/vr4.png">
            <div class="d-flex flex-column">
                <p class="txtbox2">Ký hợp đồng thực hiện</p>
                <p class="txt2box2">Ký kết hợp đồng triển khai từ timeline, kịch bản, chi phí,...</p>
            </div>
        </div>
        <div class="phantubox2">
            <img src="images/vr5.png">
            <div class="d-flex flex-column">
                <p class="txtbox2">Tổ chức sản xuất</p>
                <p class="txt2box2">Tiến hành lựa chọn bối cảnh, đạo cụ, trang phục, casting</p>
            </div>
        </div>
    </div>
    <div class="box box2fix justify-content-center d-flex">
        <div class="d-flex justify-content-between" style="width: 80%;">
            <div class="phantubox2">
                <img src="images/vr6.png">
                <div class="d-flex flex-column">
                    <p class="txtbox2">Shooting</p>
                    <p class="txt2box2">Tiến hành quay TVC/ Viral Video theo đúng kịch bản đã lên</p>
                </div>
            </div>
            <div class="phantubox2">
                <img src="images/vr7.png">
                <div class="d-flex flex-column">
                    <p class="txtbox2">Hậu kỳ</p>
                    <p class="txt2box2">Dựng phim offline: Kĩ xảo, 3D/ 2D Animation, Hậu kì, chỉnh màu, Âm nhạc</p>
                </div>
            </div>
            <div class="phantubox2">
                <img src="images/vr8.png">
                <div class="d-flex flex-column">
                    <p class="txtbox2">Nghiệm thu</p>
                    <p class="txt2box2">Thực hiện nghiệm thu TVC / Viral Video để phát hành phiên bản phù hợp với định
                        dạng
                        quảng cáo / truyền thông</p>
                </div>
            </div>
        </div>
    </div>
    <div class="box box3 d-flex flex-column align-items-center justify-content-between">
        <p class="txtbox3">Các dự án đã triển khai</p>
        <div class="d-flex phantubox3 justify-content-between">
            <img src="images/cr8.png">
            <img src="images/cr9.png">
            <img src="images/cr10.png">
            <img src="images/cr11.png">
        </div>
        <div class="d-flex phantubox3 justify-content-between" style="width:85%">
            <img src="images/cr12.png">
            <img src="images/cr13.png">
            <img src="images/cr14.png">
            <img src="images/cr15.png">
        </div>
        <a href="{{ route('contact.page') }}" class="text-decoration-none buttonbox3">Tìm hiểu thêm</a>
    </div>
    <p class="txthead text-center">Thành tựu của chúng tôi</p>
    <div class="d-flex justify-content-center" style="width:100%">
        <p class="txtfoot text-center d-flex justify-content-center" style="width:60%">Với đội ngũ chuyên môn kinh
            nghiệm lâu năm, sức sáng tạo "vô cực" đã tạo nên những
            sản phẩm "tuyệt vời" lan truyền tới cộng đồng</p>
    </div>
    <!-- <div class="box box4 d-flex justify-content-between">
        <div class="phantubox4 d-flex flex-column">
            <p class="txtbox4">12 Tr</p>
            <p class="txt2box4">Like</p>
        </div>
        <div class="phantubox4 d-flex flex-column">
            <p class="txtbox4">6.3 Tr</p>
            <p class="txt2box4">Bình Luận</p>
        </div>
        <div class="phantubox4 d-flex flex-column">
            <p class="txtbox4">4 Tr</p>
            <p class="txt2box4">Chia sẻ</p>
        </div>
    </div> -->
    <!-- <div class="box box5 d-flex justify-content-between align-items-center" style="margin:1em 0 1em 0 !important">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/cr2.png" class="d-block" style="width:800px">
                </div>
                <div class="carousel-item">
                    <img src="images/cr2.png" class="d-block" style="width:800px">
                </div>
                <div class="carousel-item">
                    <img src="images/cr2.png" class="d-block" style="width:800px">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div> -->
    <div class="box box5">
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <i class="bi bi-chevron-left" style="color:black !important"></i>
        </a>

        <div id="slider" class="carousel slide d-flex justify-content-center align-items-center" data-ride="carousel">

            <div class="carousel-inner">
                @foreach($video as $key => $vd)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="d-flex justify-content-between">
                        <div class="phantubox4 d-flex flex-column">
                            <p class="txtbox4">{{ $vd->like }} Tr</p>
                            <p class="txt2box4">Like</p>
                        </div>
                        <div class="phantubox4 d-flex flex-column">
                            <p class="txtbox4">{{ $vd->comment }} Tr</p>
                            <p class="txt2box4">Bình Luận</p>
                        </div>
                        <div class="phantubox4 d-flex flex-column">
                            <p class="txtbox4">{{ $vd->share }} Tr</p>
                            <p class="txt2box4">Chia sẻ</p>
                        </div>
                    </div>
                    <a class="d-block wrap-img-16-9">
                        <img class="d-block w-100 img-16-9" src="{{ $vd->imgvideo }}">
                    </a>
                    <p class="lead text-center mt-3">
                        {{ $vd->contentvideo }}
                    </p>
                </div>

                @endforeach
            </div>
            <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                <i class="bi bi-chevron-right" style="color:black !important"></i>
            </a>
        </div>
    </div>
    <!-- <div class="box d-flex justify-content-center hidemobile" style="width:100%;margin:0 !important">
        <div class="box d-flex justify-content-between" style="width: 15%;margin:0 0 2em 0 !important">
            <button class="btnchuyenanh active" onclick="changeImage(0)"></button>
            <button class="btnchuyenanh" onclick="changeImage(1)"></button>
            <button class="btnchuyenanh" onclick="changeImage(2)"></button>
            <button class="btnchuyenanh" onclick="changeImage(3)"></button>
            <button class="btnchuyenanh" onclick="changeImage(4)"></button>
        </div>
    </div> -->
    <p class="txthead text-center">Lựa chọn dịch vụ</p>
    <p class="txthead text-center">phù hợp cho doanh nghiệp của bạn</p>
    <div class="box box6 d-flex justify-content-center mb-5">
        <div class="d-flex justify-content-between" style="width: 70%;">
            <div class="leftbox6">
                <span>Sản xuất</span>
                <p class="txthead">TVC Quảng cáo</p>
                <p><i class="bi bi-check-lg"></i>Tư vấn ý tưởng kịch bản</p>
                <p><i class="bi bi-check-lg"></i>Tư vấn ngân sách triển khai theo các tùy chọn</p>
                <p><i class="bi bi-check-lg"></i>Sản xuất TVC Quảng cáo</p>
                <p><i class="bi bi-check-lg"></i>Tư vấn các dự án triển khai sau (nếu có)</p>
                <p><i class="bi bi-check-lg"></i>Ưu đãi khi sử dụng dịch vụ lần 2</p>
                <p><i class="bi bi-check-lg"></i>Hỗ trợ 24/7</p>
                <p><i class="bi bi-check-lg"></i>Nhân viên hỗ trợ riêng</p>
                <button class="btntuvan mt-4" style="width:100%" data-bs-toggle="modal" data-bs-target="#a">Đăng ký
                    ngay</button>
            </div>
            <div class="leftbox6">
                <span>Sản xuất</span>
                <p class="txthead">Video Viral</p>
                <p><i class="bi bi-check-lg"></i>Tư vấn ý tưởng kịch bản</p>
                <p><i class="bi bi-check-lg"></i>Tư vấn ngân sách triển khai theo các tùy chọn</p>
                <p><i class="bi bi-check-lg"></i>Sản xuất TVC Quảng cáo</p>
                <p><i class="bi bi-check-lg"></i>Tư vấn các dự án triển khai sau (nếu có)</p>
                <p><i class="bi bi-check-lg"></i>Ưu đãi khi sử dụng dịch vụ lần 2</p>
                <p><i class="bi bi-check-lg"></i>Hỗ trợ 24/7</p>
                <p><i class="bi bi-check-lg"></i>Nhân viên hỗ trợ riêng</p>
                <button class="btntuvan mt-4" style="width:100%" data-bs-toggle="modal" data-bs-target="#a">Đăng ký
                    ngay</button>
            </div>
        </div>

    </div>

    @include('layouts.Layoutads2')

    <script>
    function changeActiveImage(direction) {
        var fadeImages = document.querySelectorAll('.anhbox5 .fadeimg');
        var buttons = document.querySelectorAll('.box .btnchuyenanh');
        var activeIndex = -1;

        for (var i = 0; i < fadeImages.length; i++) {
            if (fadeImages[i].classList.contains('active')) {
                activeIndex = i;
                fadeImages[i].classList.remove('active');
                buttons[i].classList.remove('active');
                break;
            }
        }

        if (activeIndex !== -1) {
            var nextIndex;

            if (direction === 'previous') {
                nextIndex = activeIndex === 0 ? fadeImages.length - 1 : activeIndex - 1;
            } else if (direction === 'next') {
                nextIndex = activeIndex === fadeImages.length - 1 ? 0 : activeIndex + 1;
            }

            fadeImages[nextIndex].classList.add('active');
            buttons[nextIndex].classList.add('active');
        }
    }


    function changeImage(index) {
        var fadeImages = document.querySelectorAll('.anhbox5 .fadeimg');
        var buttons = document.querySelectorAll('.box .btnchuyenanh');

        for (var i = 0; i < fadeImages.length; i++) {
            fadeImages[i].classList.remove('active');
            buttons[i].classList.remove('active');
        }

        fadeImages[index].classList.add('active');
        buttons[index].classList.add('active');
    }
    </script>

</body>

@include('layouts.Footer')

</html>