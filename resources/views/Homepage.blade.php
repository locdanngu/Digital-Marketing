<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.Link')
    <link rel="stylesheet" href="/css/Homepage.css">
    <title>Home Page</title>
</head>

<body>
    @include('layouts.Header')
    <div class="box box1 d-flex justify-content-between">
        <div class="d-flex flex-column justify-content-center fixwight">
            <p class="txt1">Sự kết hợp dữ liệu giữa</p>
            <p class="txt2">Nền tảng viễn thông & Quảng cáo cộng đồng.</p>
            <p class="txt3">Mocha Ads là một trong những đơn vị tư vấn, thực hiện các chiến dịch truyền thông quảng cáo
                hàng đầu tại Việt Nam.</p>
            <div class="d-flex mt-3">
                <button type="button" class="btntuvan" data-bs-toggle="modal" data-bs-target="#a">Liên hệ tư
                    vấn</button>
                <a href="" class="btnchitiet">Xem chi tiết</a>
            </div>
        </div>
        <img src="images/imgbox1.png">
    </div>

    <div class="box box2 d-flex justify-content-between align-items-center">
        <img src="images/lifeboy.png" class="fiximg">
        <img src="images/knorr.png" class="fiximg">
        <img src="images/vpbank.png" class="fiximg">
        <img src="images/sunlight.png" class="fiximg">
        <img src="images/cocacola.png" class="fiximg">
        <img src="images/pepsi.png" class="fiximg">
    </div>

    <div class="box box2 d-flex justify-content-between">
        <img src="images/imgbox2.png">
        <div class="d-flex flex-column fixwight">
            <p class="txt1">Về chúng tôi</p>
            <p class="txt2">Mocha Ads</p>
            <p class="txt4">TOP <span class="bold">#10</span> Digital Marketing Agency uy tín tại Việt Nam
            </p>
            <p class="txt4">Trực thuộc Viettel Media - Chi nhánh Tập đoàn công nghiệp-Viễn thông Quân đội. </p>
            <p class="txt4">Mocha Ads đã triển khai <span class="bold">10.000+</span> chiến dịch truyền
                thông và quảng cáo của <span class="bold">+6.000</span> khách hàng và đối tác trong và ngoài
                nước. </p>
            <div class="d-flex">
                <button type="button" class="btntuvan" data-bs-toggle="modal" data-bs-target="#a">Nhận tư vấn</button>
                <a href="" class="btnchitiet">Mẫu Briefs</a>
            </div>
        </div>
    </div>

    <div class="box box3 d-flex flex-column align-items-center">
        <p class="txt2">Điều bạn cần là</p>
        <p class="txt3">Mocha Ads là một trong những đơn vị tư vấn, thực hiện các chiến dịch truyền thông quảng cáo hàng
            đầu tại Việt Nam.</p>
        <p class="txt3">Là một tập hợp các chuyên gia hàng đầu trong lĩnh vực truyền thông kỹ thuật số và phát triển nội
            dung.</p>
    </div>

    <div class="box box4">
        <a href="{{ route('facebookads.page') }}" class="boxmini d-flex flex-column align-items-center">
            <div class="icon">
                <img src="images/facebook.png">
            </div>
            <p class="txt5 mt-2">Facebook Ads</p>
            <p class="txtlink">Là đối tác cao cấp của Faceboo với lịch sử đã triển khai hơn 10.000 chiến dịch về thương hiệu & chuyển
                đổi cho khách hàng (Clients)</p>
        </a>
        <a href="{{ route('googleads.page') }}" class="boxmini d-flex flex-column align-items-center">
            <div class="icon">
                <img src="images/google.png">
            </div>
            <p class="txt5 mt-2">Google Ads</p>
            <p class="txtlink">+9.800 Chiến dịch quảng cáo được triển khai Google Search, Google Display, Youtube Trueview,
                Bumper... và
                là đối tác cấp cao của Google</p>
        </a>
        <a href="{{ route('tiktokads.page') }}" class="boxmini d-flex flex-column align-items-center">
            <div class="icon">
                <img src="images/tiktok.png">
            </div>
            <p class="txt5 mt-2">Tiktok Ads</p>
            <p class="txtlink">+100 chiến dịch quảng cáo trên nền tảng quảng cáo video sáng tạo được triển khai và sự ghi nhận
                thành quả
                của +20 nhãn hàng</p>
        </a>
        <a href="{{ route('KOL.page') }}" class="boxmini d-flex flex-column align-items-center">
            <div class="icon">
                <img src="images/microsoft.png">
            </div>
            <p class="txt5 mt-2">KOLs/Influencer</p>
            <p class="txtlink">Sỡ hữu và quản lý +100 KOLs / Influencer uy tín và tương tác khủng tại Việt Nam</p>
        </a>
        <a href="{{ route('viralvideo.page') }}" class="boxmini d-flex flex-column align-items-center">
            <div class="icon">
                <img src="images/video.png">
            </div>
            <p class="txt5 mt-2">TVC / Video Viral</p>
            <p class="txtlink">Biến thông điệp khô cứng thành video sáng tạo với sự thành công của hơn +50 nhãn hàng lớn</p>
        </a>
        <a href="{{ route('booking.page') }}" class="boxmini d-flex flex-column align-items-center">
            <div class="icon">
                <img src="images/paper.png">
            </div>
            <p class="txt5 mt-2">PR & Booking</p>
            <p class="txtlink">Đơn vị chủ quản và hợp tác với +89 trang báo điện tử lớn trong
                và ngoài nước</p>
        </a>
        <a href="{{ route('creativecontent.page') }}" class="boxmini d-flex flex-column align-items-center">
            <div class="icon">
                <img src="images/light.png">
            </div>
            <p class="txt5 mt-2">Content Creative</p>
            <p class="txtlink">Tiếp cận khách hàng một cách khác biệt thông qua nội dung sáng tạo là cách nhanh nhất để thành
                công</p>
        </a>
        <div class="boxmini2 d-flex flex-column">
            <p class="txt5">Dịch vụ chưa phù hợp</p>

            <p>Hãy liên hệ với chúng tôi để được tư vấn dịch vụ phù hợp nhất với bạn!</p>
            <a href="" class="d-flex fixa">
                <div class="icon2">
                    <img src="images/letter.png">
                </div>
                <div class="d-flex flex-column align-items-baseline">
                    <span>Liên hệ với chúng tôi</span>
                    <span class="txt6">Ấn để gửi mail</span>
                </div>
            </a>
        </div>
    </div>
    <div class="box box5">
        <div class="fixbox">
            <p class="txt2">Quy trình xử lý và triển khai</p>
            <p class="txt3">Mọi chiến dịch Mocha Ads đều có quy trình triển khai và phối hợp. Tùy vào từng đối tác và
                yêu
                cầu mà quy trình có thể tùy chỉnh. </p>
        </div>
    </div>
    <div class="box box6">
        <div class="boxmini3">
            <img src="images/01.png" class="number">

            <p class="txt5">Briefs</p>
            <div class="fixhr"></div>
            <p>Trao đổi thông tin với khách hàng (Clients) để có cái nhìn tổng quan nhất về kỳ vọng, mong muốn.</p>
        </div>
        <div class="boxmini3">
            <img src="images/02.png" class="number">

            <p class="txt5">Tư vấn & Nghiên cứu</p>
            <div class="fixhr"></div>
            <p>Tư vấn giải pháp tối ưu và nghiên cứu kế hoạch triển khai hiệu quả cho chiến dịch của khách hàng.</p>
        </div>
        <div class="boxmini3">
            <img src="images/03.png" class="number">

            <p class="txt5">Ký kết</p>
            <div class="fixhr"></div>
            <p>Tiến hành ký kết hợp đồng hợp tác và thời gian triển khai.</p>
        </div>
        <div class="boxmini3">
            <img src="images/04.png" class="number">

            <p class="txt5">Triển khai & Tối ưu</p>
            <div class="fixhr"></div>
            <p>Triển khai chiến dịch và tối ưu các chỉ số để đạt hiệu quả cao nhất.</p>
        </div>
        <div class="boxmini3">
            <img src="images/05.png" class="number">

            <p class="txt5">Báo cáo</p>
            <div class="fixhr"></div>
            <p>Tiến hành gửi báo cáo chiến dịch theo lịch trình mà hai bên đã thống nhất.</p>
        </div>
        <div class="boxmini3">
            <img src="images/06.png" class="number">

            <p class="txt5">Nghiệm thu</p>
            <div class="fixhr"></div>
            <p>Tiến hành nghiệm thu toàn chiến dịch triển khai và tư vấn chiến lược mới cho khách hàng.</p>
        </div>
    </div>

    <div class="box box7 d-flex justify-content-between">
        <img src="images/like.png">
        <div class="d-flex flex-column justify-content-center fixwight">
            <p>Bạn có muốn tư vấn <span class="bold">MIỄN PHÍ</span> chiến dịch truyền thông & quảng cáo về sản phẩm của
                bạn?</p>
            <p>Quảng cáo kém hiệu quả, số lượng khách hàng tiềm năng thấp so với kỳ vọng, hãy để Mocha Ads tư vấn cho
                bạn.</p>
            <button type="button" class="btntuvan" data-bs-toggle="modal" data-bs-target="#a">Tư vấn miễn phí</button>
        </div>
    </div>

    <div class="box box8 d-flex flex-column">
        <p class="txt2 text-center">Thêm thông tin, Thêm hiểu biết</p>
        <div class="d-flex justify-content-between">
            <div class="minibox4">
                <img src="images/img1.png" class="widthimg">
                <div class="p-3">
                    <p class="txt8">26 thg 1</p>
                    <p class="txt9">Tiêu đề</p>
                    <p class="txt8">Bạn có muốn tư vấn MIỄN PHÍ chiến dịch truyền thông & quảng cáo về sản phẩm của bạn?
                    </p>
                    <a href="">Xem chi tiết</a>
                </div>
            </div>
            <div class="minibox4">
                <img src="images/img2.png" class="widthimg">
                <div class="p-3">
                    <p class="txt8">26 thg 1</p>
                    <p class="txt9">Tiêu đề</p>
                    <p class="txt8">Bạn có muốn tư vấn MIỄN PHÍ chiến dịch truyền thông & quảng cáo về sản phẩm của bạn?
                    </p>
                    <a href="">Xem chi tiết</a>
                </div>
            </div>
            <div class="minibox4">
                <img src="images/img3.png" class="widthimg">
                <div class="p-3">
                    <p class="txt8">26 thg 1</p>
                    <p class="txt9">Tiêu đề</p>
                    <p class="txt8">Bạn có muốn tư vấn MIỄN PHÍ chiến dịch truyền thông & quảng cáo về sản phẩm của bạn?
                    </p>
                    <a href="">Xem chi tiết</a>
                </div>
            </div>
            <div class="minibox4">
                <img src="images/img4.png" class="widthimg">
                <div class="p-3">
                    <p class="txt8">26 thg 1</p>
                    <p class="txt9">Tiêu đề</p>
                    <p class="txt8">Bạn có muốn tư vấn MIỄN PHÍ chiến dịch truyền thông & quảng cáo về sản phẩm của bạn?
                    </p>
                    <a href="">Xem chi tiết</a>
                </div>
            </div>
        </div>
    </div>


</body>
@include('layouts.Footer')

</html>