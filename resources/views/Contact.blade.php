<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @extends('layouts.Link')
    <link rel="stylesheet" href="/css/Contact.css">
    <link rel="stylesheet" href="/css/Layoutads.css">
    <title>Contact</title>
</head>

<body>
    @include('layouts.Header')


    <div class="box d-flex justify-content-center">
        <div class="box1">
            <p class="txtbox1">Mocha Ads đồng hành cùng bạn</p>
            <p class="txt2box1">Bạn có câu hỏi dành cho chúng tôi? Đừng ngần ngại! Hãy gửi thông tin cho Mocha Ads và
                chúng tôi sẽ phản hồi lại bạn sớm nhất</p>
        </div>
    </div>

    <div class="box box6 d-flex justify-content-between">
        <form action="" method="post" class="phantubox6 d-flex flex-column">
            @csrf
            <p class="txtformbox6">Họ và tên</p>
            <input type="text" name="name" placeholder="Họ và tên của bạn là" class="inputpopup1" required>
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column" style="width: 48%;">
                    <p class="txtformbox6">Địa chỉ email</p>
                    <input type="email" name="email" placeholder="Địa chỉ Email của bạn là" class="inputpopup1"
                        required>
                </div>
                <div class="d-flex flex-column" style="width: 48%;">
                    <p class="txtformbox6">Số điện thoại</p>
                    <input type="text" name="phone" placeholder="Số điện thoại của bạn là" class="inputpopup1" required>
                </div>
            </div>
            <p class="txtformbox6">Chi tiết yêu cầu</p>
            <textarea type="text" name="review" placeholder="Hãy viết gì đó..." class="inputpopup1" required></textarea>
            <button type="submit" class="btntuvan mt-3 mb-5">Liên hệ ngay</button>
        </form>
        <div class="phantubox61 d-flex flex-column">
            <div class="d-flex mt-4 mb-3">
                <img src="images/contact1.png">
                <div style="margin-left:1em">
                    <p class="txtformbox6">Tầng 4, tòa nhà The Light</p>
                    <span class="txtformbox6">36 P. Tố Hữu, Trung Văn, Từ Liêm, Hà Nội</span>
                </div>
            </div>
            <div class="d-flex mt-4 mb-3">
                <img src="images/contact2.png">
                <div style="margin-left:1em">
                    <p class="txtformbox6">0985 903 900 (Mr Dương)</p>
                    <span class="txtformbox6">0987 056 607 (Ms Linh)</span>
                </div>
            </div>
            <div class="d-flex mt-4 mb-3">
                <img src="images/contact3.png">
                <div class="d-flex flex-column justify-content-between" style="margin-left:1em">
                    <a href="" class="txtformbox6 text-decoration-none"
                        style="color: #653FD5;">duongtv2@viettel.com.vn</a>
                    <a href="" class="txtformbox6 text-decoration-none"
                        style="color: #653FD5;">linhntd1@viettel.com.vn</a>
                </div>
            </div>

        </div>
    </div>
    <div class="box">
        <img src="images/contact4.png" class="mapimg">
    </div>
</body>

@include('layouts.Footer')

</html>