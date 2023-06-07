<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.Link')
    <link rel="stylesheet" href="/css/Gioithieu.css">
    <link rel="stylesheet" href="/css/Layoutads.css">
    <title>Giới thiệu</title>
</head>

<body>
    @include('layouts.Header')
    <div class="box box1 d-flex align-items-center justify-content-between">
        <div class="leftbox1">
            <p class="txtbox1">Về chúng tôi</p>
            <p class="txt2box1">Công ty Truyền thông Mocha</p>
            <p class="txt3box1">Ngày 31/5/2013, Công ty Truyền hình Mocha được thành lập trên nền tảng Trung tâm
                Truyền hình Mocha. Ngay từ những ngày đầu, Mocha Media góp phần duy trì vị thế vững chắc cho kênh
                Quốc phòng Việt Nam – 1 trong 7 kênh truyền hình thiết yếu của quốc gia.</p>
            <p class="txt3box1">Năm 2015, Công ty Truyền hình Mocha được kiện toàn và đổi tên thành Công ty Truyền
                thông Mocha mở rộng kinh doanh dựa trên các nền tảng công nghệ và nội dung số, với nhiều sản phẩm và
                mô hình kinh doanh mới.</p>
            <p class="txt3box1">Đến nay, Công ty Truyền thông Mocha là đơn vị tiên phong trong lĩnh vực truyền thông -
                quảng cáo số, nội dung số, xây dựng chiến dịch truyền thông tổng thể với hệ sinh thái số đa dạng.</p>
        </div>
        <div class="rightbox1 d-flex flex-column justify-content-between">
            <img src="images/mochaads.png" class="imgmochaads">
            <img src="images/mocha.png" class="imgmocha">
        </div>
    </div>
</body>
@include('layouts.Footer')

</html>