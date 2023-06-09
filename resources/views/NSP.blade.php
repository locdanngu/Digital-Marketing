<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/NSP.css">
    <title>NSP page</title>
</head>

<body>
    <header>
        <p class="txtheader">Khai trương dịch vụ NSP Việt Nam</p>
    </header>
    <hr>
    <main>
        <div class="box box1">
            <img src="images/nsp.png">
            <p>NSP Co., Ltd. Là công ty sản xuất, cung cấp và kinh doanh phụ tùng và linh
            </p>
            <p>kiện ô tô có trụ sở tại Hàn Quốc. Chúng tôi mang đến những sản phẩm</p>
            <p>chất tốt nhất với giá cả hợp lý.</p>
        </div>
        <div class="box box2">
            <p class="txt1box2">Để cập nhật thông tin liên quan đến</p>
            <p class="txt1box2"> thương hiệu, sự kiện cũng như các</p>
            <p class="txt1box2"> thông tin hợp tác ưu đãi sớm</p>
            <p class="txt1box2">nhất từ NSP Vina, vui lòng để lại thông tin bên dưới. Quý khách có cơ hội tham gia quay
                số ngẫu</p>
            <p class="txt2box2">nhiên trúng thưởng các phần quà từ NSP Vina nhằm chào mừng khai trương của NSP tại Việt
                Nam.</p>
        </div>
        <form class="box box3" action="" method="post" id="formbox3">
            @csrf
            <div class="input-wrapper">
                <span class="label"><span style="color:red">*</span> Họ và tên</span>
                <input type="text" id="nameinput">
            </div>
            <p id="errortext"><i class="bi bi-exclamation-circle-fill"></i> Họ và tên là thông tin bắt buộc.</p>
            <div class="input-wrapper">
                <span class="label"><span style="color:red">*</span> Email</span>
                <input type="text" id="emailinput">
            </div>
            <p id="errortext2"><i class="bi bi-exclamation-circle-fill"></i> Email là thông tin bắt buộc.</p>
            <div class="input-wrapper">
                <span class="label">Địa chỉ</span>
                <input type="text">
            </div>
            <p class="txt1box3">- Phần quà trúng thưởng sẽ được gửi đến địa chỉ này</p>
            <div class="input-wrapper">
                <span class="label">Số điện thoại</span>
                <input type="text">
            </div>
            <div class="input-wrapper">
                <span class="label">Tên công ty/tổ chức</span>
                <input type="text">
            </div>
            <div class="bodybox3">
                <div class="input-wrapper">
                    <span class="label">Phòng ban</span>
                    <input type="text">
                </div>
                <div style="width: 5%;"></div>
                <div class="input-wrapper">
                    <span class="label">Chức vụ</span>
                    <input type="text">
                </div>
            </div>
            <p class="txt2box3"><span>*</span> Đồng ý với việc Thu thập thông tin cá nhân cho mục đích tiếp thị:</p>
            <p class="txt3box3">Thông tin cá nhân của quý khách được bảo vệ bởi các chính sách nội bộ và không bị rò rỉ
                cho bên thứ 3.
                Thông tin trên được thu thập nhằm cung cấp đến quý khách thông</p>
            <p class="txt3box3">tin sản phẩm mới, thông tin sự kiện, quyền lợi khách hàng liên quan đến dịch vụ.</p>
            <div class="footbox3">
                <div>
                    <input type="checkbox" class="checkbox" id="cb1">
                    <label>Đồng ý,</label>
                </div>
                <div style="width: 10%;"></div>
                <div>
                    <input type="checkbox" class="checkbox" id="cb2">
                    <label>Không đồng ý</label>
                </div>
            </div>
            <p id="errortext3"><i class="bi bi-exclamation-circle-fill"></i> Vui lòng chọn Đồng ý với việc Thu thập
                thông tin cá nhân nhằm mục đích tiếp thị để hoàn tất</p>
            <div>
                <button class="btnbox3" onclick="sendForm(event)">Gửi</button>
            </div>
        </form>

    </main>
    <hr>
    <footer>
        <div>
            <a href=""><img src="images/ins.png" class="icon"></a>
            <a href=""><img src="images/fb.png" class="icon"></a>
            <a href=""><img src="images/yt.png" class="icon"></a>
        </div>
    </footer>

    <script>
    var inputWrappers = document.querySelectorAll('.input-wrapper');
    inputWrappers.forEach(function(inputWrapper) {
        var labelWidth = inputWrapper.querySelector('.label').offsetWidth + 35;
        inputWrapper.querySelector('input').style.paddingLeft = labelWidth + 'px';
    });

    function sendForm(event) {
        event.preventDefault();
        var nameInput = document.getElementById("nameinput").value;
        var emailInput = document.getElementById("emailinput").value;
        var errorText = document.getElementById("errortext");
        var errorText2 = document.getElementById("errortext2");
        var form = document.getElementById("formbox3");

        var isChecked1 = document.getElementById("cb1").checked;
        var isChecked2 = document.getElementById("cb2").checked;
        var errorText3 = document.getElementById("errortext3");
        
        if (nameInput === "" && emailInput === "") {
            errorText.style.display = "block";
            errorText2.style.display = "block";
        } else if (emailInput === "") {
            errorText2.style.display = "block";
            errorText.style.display = "none";
        } else if (nameInput === "") {
            errorText.style.display = "block";
            errorText2.style.display = "none";
        } else {
            errorText.style.display = "none";
            errorText2.style.display = "none";
            if (isChecked1 && isChecked2) {
                errorText3.style.display = "block";
            } else if (isChecked1) {
                form.submit();
            } else if (isChecked2) {
                errorText3.style.display = "block";
            } else {
                errorText3.style.display = "block";
            }
        }
    }
    </script>
</body>


</html>