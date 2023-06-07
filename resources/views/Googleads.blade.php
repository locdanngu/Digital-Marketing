<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.Link')
    <link rel="stylesheet" href="/css/Googleads.css">
    <link rel="stylesheet" href="/css/Layoutads.css">
    <title>Google Ads</title>
</head>

<body>
    @include('layouts.Header')
    <div class="box box1 d-flex">
        <div class="leftbox1 d-flex flex-column justify-content-center">
            <p class="txt1box1">Phát triển doanh nghiệp của bạn thông qua
                Google Ads</p>
            <p class="txt2box1">Hiển thị quảng cáo cho khách hàng khi họ đang tìm kiếm các doanh nghiệp giống như doanh
                nghiệp của bạn trên Google Tìm kiếm và Maps. </p>
            <p class="txt2box1">Bạn chỉ trả tiền khi quảng cáo mang lại kết quả, chẳng hạn như khi khách hàng nhấp vào
                quảng cáo để tới trang web hoặc khách hàng gọi đến doanh nghiệp của bạn.
            </p>
        </div>
        <div class="rightbox1">
            <img class="imgbox1" src="images/googleads.png">
        </div>

    </div>
    <div class="box box2 text-center">
        <p class="txtbold">Các loại dịch vụ quảng cáo trên Google</p>
        <p class="txt2box1">Mỗi mục tiêu cụ thể sẽ có phù hợp với một hoặc một vài hình thức quảng cáo tương ứng</p>
    </div>
    <div class="box box3 d-flex">

        <div class="leftbox3 d-flex flex-column justify-content-center">
            <p class="txt1box3">Quảng cáo tìm kiếm</p>
            <p class="txt2box1">Quảng cáo trên mạng tìm kiếm của Google (Google Search). </p>
            <p class="txt2box1">Dựa trên việc người dùng truy vấn tìm kiếm (từ khóa) trên Google từ đó tiếp cận
                người dùng thông qua quảng cáo.</p>
        </div>
        <div class="rightbox3">
            <img class="imgbox3" src="images/img1box3.png">
        </div>

    </div>
    <div class="box box4 d-flex justify-content-between">

        <div class="leftbox4">
            <img class="imgbox4" src="images/img2box3.png">
        </div>
        <div class="rightbox4 d-flex flex-column justify-content-center">
            <p class="txt1box3" style="align-self:baseline">Quảng cáo hiển thị</p>
            <p class="txt2box1">Quảng cáo trên mạng hiển thị của Google (Google Display Network). </p>
            <p class="txt2box1">Bạn có thể lựa chọn hiển thị trên các trang web thuộc mạng hiển thị hoặc cũng có thể
                sử dụng các tiêu chí khác như từ khóa, chủ đề,…</p>
        </div>


    </div>
    <div class="box box5 d-flex justify-content-between">

        <div class="leftbox5 d-flex flex-column justify-content-center">
            <p class="txt1box3">Quảng cáo mua sắm</p>
            <p class="txt2box1">Tương thích với các trang thương mại điện tử hoặc đáp ứng được các yếu tố cơ bản của
                trang thương mại điện tử (giỏ hàng, thanh toán, các chính sách thuế phí, vận chuyển, hoàn hủy, bảo
                mật,…)</p>
        </div>
        <div class="rightbox5">
            <img class="imgbox5" src="images/img3box3.png">
        </div>

    </div>
    <div class="box box6 d-flex">
        <div class="leftbox6">
            <img class="imgbox6" src="images/img4box3.png">
        </div>
        <div class="rightbox6 d-flex flex-column justify-content-center">
            <p class="txt1box3">Quảng cáo Video</p>
            <p class="txt2box1">Quảng cáo sản phẩm dịch vụ của bạn trên Youtube hoặc đối tác video của Google</p>
            <a href="" class="linkbox6">
                <span class="txtlinkbox6">Youtube TrueView</span>
                <span class="txt2linkbox6">Quảng cáo trong luồng có thể bỏ qua</span>
            </a>
            <a href="" class="linkbox6">
                <span class="txtlinkbox6">Youtube Bumper</span>
                <span class="txt2linkbox6">Thời lượng video tối đa 15s</span>
            </a>
        </div>


    </div>
    @include('layouts.Layoutads')
</body>
@include('layouts.Footer')

</html>