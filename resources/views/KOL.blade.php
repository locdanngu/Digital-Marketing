<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @extends('layouts.Link')
    <link rel="stylesheet" href="/css/KOL.css">
    <link rel="stylesheet" href="/css/Layoutads.css">
    <title>KOL</title>
</head>

<body>
    @include('layouts.Header')


    <div class="box box1 d-flex justify-content-between align-items-center">
        <div class="leftbox1">
            <p class="txtbox1">Bạn cần KOLs, Influencers quảng bá sản phẩm dịch vụ của mình. Nhưng chưa biết <span
                    style="color:#653FD5">NÊN CHỌN AI?</span>
            </p>
            <div class="d-flex mt-3">
                <a href="{{ route('contact.page') }}" class="btntuvan">Liên hệ tư
                    vấn</a>
                <a href="" class="btnchitiet">Bảng giá</a>
            </div>
        </div>
        <div class="rightbox1">
            <img src="images/kol1.png">
        </div>
    </div>
    <div class="box box2 d-flex justify-content-between align-items-center">
        <div class="rightbox2">
            <img src="images/kol2.png">
        </div>
        <div class="leftbox2">
            <p class="txtbox1">Key Opinion Leader</p>
            <p class="txtbox2">Sở hữu rất nhiều chuyên gia có tiếng ở đa lĩnh vực, Viettel Media tin rằng sẽ đáp ứng
                được mọi yêu cầu
                của khách hàng khi cần đội ngũ chuyên gia tư vấn và quảng bá sản phẩm/dịch vụ của mình.</p>
            <div class="d-flex mt-4">
                <button type="button" class="btntuvan" data-bs-toggle="modal" data-bs-target="#a">Tư vấn KOLs</button>
            </div>
        </div>

    </div>
    <div class="box box4 d-flex justify-content-between align-items-center">
        <div class="leftbox4">
            <p class="txtbox1">Influencer</p>
            <p class="txtbox2">Sở hữu và quản lý danh sách các Influencer có sức ảnh hưởng trong cộng đồng mạng
                (Facebook, Youtube, Tiktok,...) với lượng Fans hùng hậu từ 50.000 - 5.000.000 followers. Chắc chắn sẽ
                nơi lý tưởng để khách hàng (Client) gửi gắm thông điệp truyền tải tới tệp đối tượng của mình.</p>
            <div class="d-flex mt-5">
                <button type="button" class="btntuvan" data-bs-toggle="modal" data-bs-target="#a">Tư vấn
                    Influencers</button>
            </div>
        </div>
        <div class="rightbox4">
            <img src="images/kol3.png">
        </div>
    </div>

    <div class="box text-center">
        <p class="txtbold">KOL/Influencer tiêu biểu </p>
    </div>
    <div class="box box5 d-flex flex-wrap">
        <div class="phantubox5">
            <img src="images/kol4.png">
            <p class="txtbox5">Trường Giang</p>
        </div>
        <div class="phantubox5">
            <img src="images/kol5.png">
            <p class="txtbox5">Trấn Thành</p>
        </div>
        <div class="phantubox5">
            <img src="images/kol6.png">
            <p class="txtbox5">Đứa Phúc</p>
        </div>
        <div class="phantubox5">
            <img src="images/kol7.png">
            <p class="txtbox5">Erik</p>
        </div>
        <div class="phantubox5">
            <img src="images/kol8.png">
            <p class="txtbox5">Viruss</p>
        </div>
        <div class="phantubox5">
            <img src="images/kol9.png">
            <p class="txtbox5">Độ Mixi</p>
        </div>
        <div class="phantubox5">
            <img src="images/kol10.png">
            <p class="txtbox5">Pew Pew</p>
        </div>
        <div class="phantubox5">
            <img src="images/kol11.png">
            <p class="txtbox5">Hòa Minzy</p>
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

    <div class="box box6 d-flex justify-content-between">
        <div class="phantubox61">
            <p class="txtbold">Bảng giá dịch vụ KOLs/ Influencer</p>
            <p class="txtbox6">Tùy vào KOLs/ Influencer mà có mức giá khác nhau. </p>
            <p class="txtbox6">Vì vậy, để đảm bảo cập nhật thông tin mới nhất về bảng giá dịch vụ, hãy liên hệ ngay với
                Mocha Ads để nhận báo giá và tư vấn nhanh nhất.</p>
        </div>
        <div class="phantubox6 d-flex flex-column">
            <p class="txtformbox6">Họ và tên</p>
            <input type="text" name="name" placeholder="Họ và tên của bạn là" class="inputpopup1" required
                id="nameform1">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column" style="width: 48%;">
                    <p class="txtformbox6">Địa chỉ email</p>
                    <input type="email" name="email" placeholder="Địa chỉ Email của bạn là" class="inputpopup1" required
                        id="emailform1">
                </div>
                <div class="d-flex flex-column" style="width: 48%;">
                    <p class="txtformbox6">Số điện thoại</p>
                    <input type="text" name="phone" placeholder="Số điện thoại của bạn là" class="inputpopup1" required
                        id="phoneform1">
                </div>
            </div>
            <p class="txtformbox6">Chi tiết yêu cầu</p>
            <textarea type="text" name="review" placeholder="Hãy viết gì đó..." class="inputpopup1" required
                id="reviewform1"></textarea>
            <button type="submit" class="btntuvan mt-3 mb-5" id="sendformtuvan1">Liên hệ ngay</button>
        </div>
    </div>

    @include('layouts.Layoutads2')
    <script>
    $(document).ready(function() {
        $('#sendformtuvan1').click(function() {

            var nameform = $('#nameform1').val(); // Lấy giá trị của input có class "a"
            var emailform = $('#emailform1').val(); // Lấy giá trị của input có class "a"
            var phoneform = $('#phoneform1').val(); // Lấy giá trị của input có class "a"
            var reviewform = $('#reviewform1').val(); // Lấy giá trị của input có class "a"
            function kiemTraEmail(email) {
                var pattern = /^[\w\.-]+@[\w\.-]+\.\w+$/;
                return pattern.test(email);
            }
            if (nameform && emailform && phoneform && reviewform) {
                if (kiemTraEmail(emailform)) {
                    $(this).prop("disabled", true); // Vô hiệu hóa nút
                    $(this).css("cursor", "not-allowed");
                    setTimeout(function() {
                        $("#sendformtuvan1").prop("disabled",
                            false); // Kích hoạt lại nút sau 10 giây
                        $("#sendformtuvan1").css("cursor", "");
                    }, 10000); // 10 giây = 10,000 miligiây
                    $.ajax({
                        url: '{{ route("senddontuvan") }}', // Đường dẫn đến AdminController
                        method: 'POST', // Phương thức HTTP để gửi dữ liệu
                        data: {
                            _token: '{{ csrf_token() }}',
                            nameform: nameform,
                            emailform: emailform,
                            phoneform: phoneform,
                            reviewform: reviewform,
                        }, // Dữ liệu gửi đi (giá trị của input)
                        success: function(response) {
                            // Xử lý phản hồi thành công từ AdminController (nếu cần)
                            toastr.success(
                                '<b>Gửi đơn đăng ký thành công, Nhân viên tư vấn sẽ liên hệ với bạn trong 12 tiếng tới, Cần 10 giây để gửi tiếp mẫu đơn khác.</b>'
                            )
                        },
                        error: function() {
                            // Xử lý lỗi (nếu có)
                            toastr.error(
                                '<b>Gửi đơn thất bại vì lỗi không rõ nguyên nhân, nếu còn tiếp tục xin liên hệ email: tranvanloc96lhp@gmail.com.</b>'
                            )
                        }
                    });
                } else {
                    toastr.error(
                        '<b>Vui lòng nhập đúng định dạng Email.</b>'
                    )
                }
            } else if (!nameform || !emailform || !phoneform || !reviewform) {
                toastr.error(
                    '<b>Vui lòng điền đầy đủ tất cả thông tin.</b>'
                )
            }

        });
    });
    </script>

</body>

@include('layouts.Footer')

</html>