<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.Link')
    <link rel="stylesheet" href="/css/Viralvideo.css">
    <link rel="stylesheet" href="/css/Layoutads.css">
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
        <div class="phantubox2 d-flex flex-column text-center">
            <img src="images/vr2.png">
            <p class="txtbox2">Nhận Brief</p>
            <p class="txt2box2">Nhận thông tin yêu cầu từ phía khách hàng (client) theo biểu mẫu có sẵn</p>
        </div>
        <div class="phantubox2 d-flex flex-column text-center">
            <img src="images/vr3.png">
            <p class="txtbox2">Ý tưởng kịch bản</p>
            <p class="txt2box2">Lên ý tưởng kịch bản sáng tạo, bứt phá, mới lạ cho TVC / Viral Video</p>
        </div>
        <div class="phantubox2 d-flex flex-column text-center">
            <img src="images/vr4.png">
            <p class="txtbox2">Ký hợp đồng thực hiện</p>
            <p class="txt2box2">Ký kết hợp đồng triển khai từ timeline, kịch bản, chi phí,...</p>
        </div>
        <div class="phantubox2 d-flex flex-column text-center">
            <img src="images/vr5.png">
            <p class="txtbox2">Tổ chức sản xuất</p>
            <p class="txt2box2">Tiến hành lựa chọn bối cảnh, đạo cụ, trang phục, casting</p>
        </div>
    </div>
    <div class="box box2fix justify-content-center d-flex">
        <div class="d-flex justify-content-between" style="width: 80%;">
            <div class="phantubox2 d-flex flex-column text-center">
                <img src="images/vr6.png">
                <p class="txtbox2">Shooting</p>
                <p class="txt2box2">Tiến hành quay TVC/ Viral Video theo đúng kịch bản đã lên</p>
            </div>
            <div class="phantubox2 d-flex flex-column text-center">
                <img src="images/vr7.png">
                <p class="txtbox2">Hậu kỳ</p>
                <p class="txt2box2">Dựng phim offline: Kĩ xảo, 3D/ 2D Animation, Hậu kì, chỉnh màu, Âm nhạc</p>
            </div>
            <div class="phantubox2 d-flex flex-column text-center">
                <img src="images/vr8.png">
                <p class="txtbox2">Nghiệm thu</p>
                <p class="txt2box2">Thực hiện nghiệm thu TVC / Viral Video để phát hành phiên bản phù hợp với định dạng
                    quảng cáo / truyền thông</p>
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
        <a href="" class="text-decoration-none buttonbox3">Tìm hiểu thêm</a>
    </div>
    <p class="txthead text-center">Thành tựu của chúng tôi</p>
    <div class="d-flex justify-content-center" style="width:100%">
        <p class="txtfoot text-center d-flex justify-content-center" style="width:60%">Với đội ngũ chuyên môn kinh
            nghiệm lâu năm, sức sáng tạo "vô cực" đã tạo nên những
            sản phẩm "tuyệt vời" lan truyền tới cộng đồng</p>
    </div>
    <div class="box box4 d-flex justify-content-between">
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
    </div>
    <div class="box box5 d-flex justify-content-between align-items-center" style="margin:1em 0 1em 0 !important">
        <i class="bi bi-chevron-left" onclick="changeActiveImage('previous')"></i>
        <div class="anhbox5 d-flex">
            <img src="images/cr2.png" class="fadeimg active">
            <img src="images/cr3.png" class="fadeimg">
            <img src="images/cr4.png" class="fadeimg">
            <img src="images/cr5.png" class="fadeimg">
            <img src="images/cr6.png" class="fadeimg">
        </div>
        <i class="bi bi-chevron-right" onclick="changeActiveImage('next')"></i>
    </div>

    <div class="d-flex justify-content-center" style="width:100%">
        <p class="footbox5 d-flex justify-content-center text-center" style="width:60%">Sau 1 ngày lên sóng, MV quảng
            cáo của JustaTee x ViettelPay lọt vào Top Trending trên
            Youtube
            với vị trí 40 cùng 600 nghìn lượt xem.</p>
    </div>
    <div class="box d-flex justify-content-center" style="width:100%;margin:0 !important">
        <div class="box d-flex justify-content-between" style="width: 15%;margin:0 0 2em 0 !important">
            <button class="btnchuyenanh active" onclick="changeImage(0)"></button>
            <button class="btnchuyenanh" onclick="changeImage(1)"></button>
            <button class="btnchuyenanh" onclick="changeImage(2)"></button>
            <button class="btnchuyenanh" onclick="changeImage(3)"></button>
            <button class="btnchuyenanh" onclick="changeImage(4)"></button>
        </div>
    </div>
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
                <button class="btntuvan mt-4" style="width:100%">Đăng ký ngay</button>
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
                <button class="btntuvan mt-4" style="width:100%">Đăng ký ngay</button>
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