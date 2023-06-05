<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.Link')
    <link rel="stylesheet" href="/css/Facebookads.css">
    <link rel="stylesheet" href="/css/Layoutads.css">
    <title>Facebook Ads</title>
</head>

<body>
    @include('layouts.Header')
    <div class="box box1 d-flex">
        <div class="leftbox1 d-flex flex-column justify-content-center">
            <p class="txtbox1">Mọi mục tiêu marketing
                đều nằm trong tầm tay bạn.</p>
            <p class="txt2box1">
                Chúng tôi cung cấp các giải pháp quảng cáo cho mọi trình độ chuyên môn.
            </p>
            <p class="txt2box1">
                Hơn 2 tỷ người sử dụng Facebook mỗi tháng. Vì vậy, bạn sẽ tìm thấy mọi loại đối tượng mình muốn tiếp cận
                ở đây.
            </p>
        </div>
        <div class="rightbox1">
            <img src="images/fb1.png">
        </div>
    </div>
    <div class="box text-center">
        <p class="txthead">Các loại dịch vụ quảng cáo trên Facebook</p>
        <p class="txtfoot">Mỗi mục tiêu cụ thể sẽ có phù hợp với một hoặc một vài hình thức quảng cáo tương ứng</p>
    </div>
    <div class="box box2 d-flex">
        <div class="leftbox2 d-flex flex-column justify-content-center">
            <p class="txtbox1">Quảng cáo tương tác </p>
            <p class="txt2box1">
                #Page Post Engagement
            </p>
            <p class="txt2box1">
                Tăng tương tác cho bài viết, gia tăng tỷ lệ chuyển đổi đối với các bài viết liên quan tới sale trực tiếp
            </p>
        </div>
        <div class="rightbox2">
            <img src="images/fb2.png">
        </div>
    </div>
    <div class="box box3 d-flex">
        <div class="rightbox3">
            <img src="images/fb3.png">
        </div>
        <div class="leftbox2 d-flex flex-column justify-content-center">
            <span class="txtbox1">Quảng cáo Video</span>
            <a href="" class="txtbox3 mb-3 text-decoration-none" style="color:#653FD5">
                #Video View
            </a>
            <p class="txt2box1">
                Nâng cao nhận thức về thương hiệu thông qua video với thông điệp cụ thể
            </p>
            <p class="txt2box1">
                Text mô tả vd: Tropicana đã sử dụng quảng cáo video với mục tiêu mức độ nhận biết thương hiệu.
            </p>
        </div>
    </div>
    <div class="box box4 d-flex">
        <div class="leftbox4 d-flex flex-column justify-content-center">
            <span class="txtbox1">Quảng cáo tin nhắn </span>
            <a href="" class="txtbox3 mb-3 text-decoration-none" style="color:#653FD5">
                #Messenger (Sponsor)
            </a>
            <p class="txt2box1">
                Tiếp cận khách hàng qua cách gửi tin nhắn tài trợ hoặc quảng cáo trong messenger / bảng tin
            </p>
        </div>
        <div class="rightbox2 d-flex justify-content-between">
            <img src="images/fb4.png">
            <img src="images/fb5.png">
        </div>
    </div>
    <div class="box box3 d-flex">
        <div class="rightbox3">
            <img src="images/fb6.png">
        </div>
        <div class="leftbox2 d-flex flex-column justify-content-center">
            <span class="txtbox1">Quảng lượt tiếp cận</span>
            <a href="" class="txtbox3 mb-3 text-decoration-none" style="color:#653FD5">
                #Reach
            </a>
            <p class="txt2box1">
                Nâng cao nhận thức về thương hiệu thông qua việc đưa các thông điệp tiếp cận tới tệp khách hàng tiềm
                năng.
            </p>
        </div>
    </div>
    <div class="box box2 d-flex">
        <div class="leftbox2 d-flex flex-column justify-content-center" style="width:80%">
            <span class="txtbox1">Quảng cáo</span>
            <span class="txtbox1">tìm kiếm khách hàng tiềm năng </span>
            <a href="" class="txtbox3 mb-3 text-decoration-none" style="color:#653FD5">
                #Lead
            </a>
            <p class="txt2box1">
            Quảng cáo tới tệp khách hàng tiềm năng và điền thông tin khách hàng theo mẫu được cấu hình sẵn.
            </p>
        </div>
        <div class="rightbox2">
            <img src="images/fb7.png">
        </div>
    </div>
    <div class="box box3 d-flex">
        <div class="rightbox3">
            <img src="images/fb8.png">
        </div>
        <div class="leftbox2 d-flex flex-column justify-content-center">
            <span class="txtbox1">Quảng cáo tăng like fanpage</span>
            <a href="" class="txtbox3 mb-3 text-decoration-none" style="color:#653FD5">
            #Page Likes
            </a>
            <p class="txt2box1">
            Tăng mức độ uy tín của Fanpage và tạo ra cộng đồng đông đảo, đúng với chân dung khách hàng mà đối tác mong muốn.
            </p>
        </div>
    </div>
    @include('layouts.Layoutads')
</body>
@include('layouts.Footer')

</html>