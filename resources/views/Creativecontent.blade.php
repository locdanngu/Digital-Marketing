<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.Link')
    <link rel="stylesheet" href="/css/Creativecontent.css">
    <link rel="stylesheet" href="/css/Layoutads.css">
    <title>Creative Content</title>
</head>

<body>
    @include('layouts.Header')
    <div class="box box1 d-flex">
        <div class="leftbox1 d-flex flex-column justify-content-center ">
            <p class="txtbox1">Creative Content</p>
            <p class="txt2box1">Cách thức khám phá nội dung thông minh của TikTok cho phép người dùng tìm được nội dung
                mới dựa trên sở thích và thói quen xem của họ, </p>
            <p class="txt2box1">giúp các thương hiệu tăng trưởng nhanh và tối đa.</p>
            <button type="button" class="btntuvan mt-4" data-bs-toggle="modal" data-bs-target="#a">Liên hệ tư
                vấn</button>
        </div>
        <div class="rightbox1 d-flex justify-content-center">
            <img src="images/cr1.png">
        </div>
    </div>
    <p class="txthead text-center">Quy trình tạo ra sản phẩm</p>
    <div class="box box2 justify-content-between d-flex">
        <div class="phantubox2 d-flex flex-column text-center">
            <img src="images/cr3.png">
            <p class="txtbox2">Tìm hiểu</p>
            <p class="txt2box2">Trao đổi với khách hàng (Client) về mục tiêu kỳ vọng và tìm hiểu các thông tin liên quan
                để đưa ra giải pháp</p>
        </div>
        <div class="phantubox2 d-flex flex-column text-center">
            <img src="images/cr4.png">
            <p class="txtbox2">Lập kế hoạch</p>
            <p class="txt2box2">Tiến hành ký kết hợp đồng và timeline triển khai sơ bộ</p>
        </div>
        <div class="phantubox2 d-flex flex-column text-center">
            <img src="images/cr5.png">
            <p class="txtbox2">Ký hợp đồng</p>
            <p class="txt2box2">Lên kế hoạch triển khai chi tiết cho khách hàng (Client)</p>
        </div>
        <div class="phantubox2 d-flex flex-column text-center">
            <img src="images/cr6.png">
            <p class="txtbox2">Sản phẩm</p>
            <p class="txt2box2">Triển khai và xuất bản nội dung theo kế hoạch đã đề ra</p>
        </div>
        <div class="phantubox2 d-flex flex-column text-center">
            <img src="images/cr7.png">
            <p class="txtbox2">Báo cáo</p>
            <p class="txt2box2">Báo cáo và nghiệm thu kết quả của quá trình sản xuất nội dụng sáng tạo</p>
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
    <div class="box box5 d-flex justify-content-between align-items-center">
        <i class="bi bi-chevron-left"></i>
        <div class="anhbox5">
            <img src="images/cr2.png">
            <!-- <img src="images/cr2.png">
            <img src="images/cr2.png">
            <img src="images/cr2.png">
            <img src="images/cr2.png"> -->
        </div>
        <i class="bi bi-chevron-right"></i>
    </div>
    <div class="d-flex justify-content-center" style="width:100%">
        <p class="footbox5 d-flex justify-content-center text-center" style="width:60%">Sau 1 ngày lên sóng, MV quảng
            cáo của JustaTee x ViettelPay lọt vào Top Trending trên
            Youtube
            với vị trí 40 cùng 600 nghìn lượt xem.</p>
    </div>
    <p class="txthead text-center">Lựa chọn dịch vụ phù hợp cho doanh nghiệp của bạn</p>
    <div class="d-flex justify-content-center mt-5">
        <button class="btnchoice active" onclick="toggleActive(this)">Bài viết</button>
        <button class="btnchoice" onclick="toggleActive(this)">Bài dịch</button>
        <button class="btnchoice" onclick="toggleActive(this)">Bài PR</button>
    </div>
    <div class="box box6 d-flex justify-content-between mb-5">
        <form action="" method="post" class="phantubox6 d-flex flex-column">
            @csrf
            <input type="hidden" value="200000" name="tongtienform1" class="tongtienform1">
            <p class="headform">Bài viết mô tả sản phẩm</p>
            <p class="bodyform">Tối ưu hóa mô tả sản phẩm (product description) là yếu tố rất quan trọng giúp tăng hiệu
                quả của các chiến dịch chạy quảng cáo Facebook hay Google Shopping.</p>
            <span class="txtform1">Số lượng</span>
            <p class="txtform2">Bao nhiêu bài viết thì phù hợp với bạn?</p>
            <div class="choiceform1 active" onclick="soluongform1(this)"><span>1 bài</span></div>
            <div class="choiceform1 d-flex justify-content-between" onclick="soluongform1(this)">
                <span>5 bài</span>
                <span>+800.000 đ</span>
            </div>
            <div class="d-flex justify-content-between mt-4" id="input1">
                <p class="txtform1">Tùy chọn số lượng</p>
                <div class="checkbox-apple">
                    <input class="yep" id="check-apple" type="checkbox">
                    <label for="check-apple"></label>
                </div>
            </div>
            <div class="quantity" id="q1">
                <div class="decrease buttonnumber" onclick="decreaseQuantity()">-</div>
                <input type="number" id="quantity" min="1" value="1" class="np-spin" oninput="updateForm1()" required>
                <div class="increase buttonnumber" onclick="increaseQuantity()">+</div>
            </div>
            <span class="txtform1">Số từ</span>
            <p class="txtform2">Bao nhiêu từ trong một bài viết thì phù hợp với bạn?</p>
            <div class="choiceform2 active" onclick="soluongform2(this)"><span>500 Từ</span></div>
            <div class="choiceform2 d-flex justify-content-between" onclick="soluongform2(this)">
                <span>1000 - 1200 Từ</span>
                <span>+55.000 đ</span>
            </div>
            <p class="headform mt-3 mb-3" id="totalform1">200.000 đ</p>
            <button class="btntuvan" style="width:100%">Đăng ký ngay</button>
        </form>
        <div class="hrform"></div>
        <form action="" method="post" class="phantubox6 d-flex flex-column">
            @csrf
            <input type="hidden" value="200000" name="tongtienform2" class="tongtienform2">
            <p class="headform">Bài chuẩn SEO</p>
            <p class="bodyform">Bài viết tối ưu hóa nội dung nhằm cạnh tranh thứ hạng từ khóa trên các trang kết quả
                công cụ tìm kiếm, từ đó tăng số lượng và chất lượng traffic. </p>
            <span class="txtform1">Số lượng</span>
            <p class="txtform2">Bao nhiêu bài viết thì phù hợp với bạn?</p>
            <div class="choiceform3 active" onclick="soluongform3(this)"><span>Dưới 50 bài</span></div>
            <div class="choiceform3 d-flex justify-content-between" onclick="soluongform3(this)">
                <span>Trên 50 bài</span>
                <span>+55.000 đ</span>
            </div>
            <div class="d-flex justify-content-between mt-4" id="input2">
                <p class="txtform1">Tùy chọn số lượng</p>
                <div class="checkbox-apple">
                    <input class="yep" id="check-apple2" type="checkbox">
                    <label for="check-apple2"></label>
                </div>
            </div>
            <div class="quantity2" id="q2">
                <div class="decrease buttonnumber" onclick="decreaseQuantity2()">-</div>
                <input type="number" id="quantity2" min="1" value="1" class="np-spin" oninput="updateForm2()" required>
                <div class="increase buttonnumber" onclick="increaseQuantity2()">+</div>
            </div>
            <span class="txtform1">Số từ</span>
            <p class="txtform2">Bao nhiêu từ trong một bài viết thì phù hợp với bạn?</p>
            <div class="choiceform4 active" onclick="soluongform4(this)"><span>500 Từ</span></div>
            <div class="choiceform4 d-flex justify-content-between" onclick="soluongform4(this)">
                <span>1000 - 1200 Từ</span>
                <span>+55.000 đ</span>
            </div>
            <p class="headform mt-3 mb-3" id="totalform2">200.000 đ</p>
            <button class="btntuvan" style="width:100%">Đăng ký ngay</button>
        </form>
        <div class="hrform"></div>
        <form action="" method="post" class="phantubox6 d-flex flex-column">
            @csrf
            <input type="hidden" value="200000" name="tongtienform3" class="tongtienform3">
            <p class="headform">Bài chuyên sâu</p>
            <p class="bodyform">Tập trung khai thác toàn diện thông tin liên quan về một chủ đề cụ thể, đảm bảo tiêu chí
                ĐÚNG - ĐỦ - MỚI</p>
            <span class="txtform1">Số lượng</span>
            <p class="txtform2">Bao nhiêu bài viết thì phù hợp với bạn?</p>
            <div class="choiceform5 active" onclick="soluongform5(this)"><span>1 bài</span></div>
            <div class="choiceform5 d-flex justify-content-between" onclick="soluongform5(this)">
                <span>5 bài</span>
                <span>+800.000 đ</span>
            </div>
            <div class="d-flex justify-content-between mt-4" id="input3">
                <p class="txtform1">Tùy chọn số lượng</p>
                <div class="checkbox-apple">
                    <input class="yep" id="check-apple3" type="checkbox">
                    <label for="check-apple3"></label>
                </div>
            </div>
            <div class="quantity3" id="q3">
                <div class="decrease buttonnumber" onclick="decreaseQuantity3()">-</div>
                <input type="number" id="quantity3" min="1" value="1" class="np-spin" oninput="updateForm3()" required>
                <div class="increase buttonnumber" onclick="increaseQuantity3()">+</div>
            </div>
            <span class="txtform1">Số từ</span>
            <p class="txtform2">Bao nhiêu từ trong một bài viết thì phù hợp với bạn?</p>
            <div class="choiceform6 active" onclick="soluongform6(this)"><span>500 Từ</span></div>
            <div class="choiceform6 d-flex justify-content-between" onclick="soluongform6(this)">
                <span>1000 - 1200 Từ</span>
                <span>+55.000 đ</span>
            </div>
            <p class="headform mt-3 mb-3" id="totalform3">200.000 đ</p>
            <button class="btntuvan" style="width:100%">Đăng ký ngay</button>
        </form>
    </div>

    @include('layouts.Layoutads2')
    <script>
    var form1 = document.querySelector('.tongtienform1').value;
    var totalForm1 = document.getElementById("totalform1");
    var form2 = document.querySelector('.tongtienform2').value;
    var totalForm2 = document.getElementById("totalform2");
    var form3 = document.querySelector('.tongtienform3').value;
    var totalForm3 = document.getElementById("totalform3");
    function increaseQuantity() {
        if (!checkAppleCheckbox.checked) {
            return; // Khi checkbox không được chọn, không thực hiện gì cả
        }
        var input = document.getElementById("quantity");
        var value = parseInt(input.value);
        input.value = value + 1;
        var form1 = input.value * 200000;
        totalForm1.innerHTML = form1.toLocaleString() + " đ";
    }

    function decreaseQuantity() {
        if (!checkAppleCheckbox.checked) {
            return; // Khi checkbox không được chọn, không thực hiện gì cả
        }
        var input = document.getElementById("quantity");
        var value = parseInt(input.value);
        if (value > 0) {
            input.value = value - 1;
            var form1 = input.value * 200000;
            totalForm1.innerHTML = form1.toLocaleString() + " đ";
        }
    }

    function increaseQuantity2() {
        if (!checkAppleCheckbox2.checked) {
            return; // Khi checkbox không được chọn, không thực hiện gì cả
        }
        var input = document.getElementById("quantity2");
        var value = parseInt(input.value);
        input.value = value + 1;
        var tam = input.value % 50;
        if (tam > 0) {
            var form2 = (Math.floor(input.value / 50) + 1) * 200000;
        } else {
            var form2 = Math.floor(input.value / 50) * 200000;
        }
        totalForm2.innerHTML = form2.toLocaleString() + " đ";
    }

    function decreaseQuantity2() {
        if (!checkAppleCheckbox2.checked) {
            return; // Khi checkbox không được chọn, không thực hiện gì cả
        }
        var input = document.getElementById("quantity2");
        var value = parseInt(input.value);
        if (value > 0) {
            input.value = value - 1;
            if (tam > 0) {
                var form2 = ((input.value / 50) + 1) * 200000;
            } else {
                var form2 = (input.value / 50) * 200000;
            }
            totalForm2.innerHTML = form2.toLocaleString() + " đ";
        }
    }

    function increaseQuantity3() {
        if (!checkAppleCheckbox3.checked) {
            return; // Khi checkbox không được chọn, không thực hiện gì cả
        }
        var input = document.getElementById("quantity3");
        var value = parseInt(input.value);
        input.value = value + 1;
        var form3 = input.value * 200000;
        totalForm3.innerHTML = form3.toLocaleString() + " đ";
    }

    function decreaseQuantity3() {
        if (!checkAppleCheckbox3.checked) {
            return; // Khi checkbox không được chọn, không thực hiện gì cả
        }
        var input = document.getElementById("quantity3");
        var value = parseInt(input.value);
        if (value > 0) {
            input.value = value - 1;
            var form3 = input.value * 200000;
            totalForm3.innerHTML = form3.toLocaleString() + " đ";
        }
    }


    const checkAppleCheckbox = document.getElementById('check-apple');
    const checkAppleCheckbox2 = document.getElementById('check-apple2');
    const checkAppleCheckbox3 = document.getElementById('check-apple3');
    const input1 = document.getElementById('input1');
    const input2 = document.getElementById('input2');
    const input3 = document.getElementById('input3');
    const quantity = document.getElementById('q1');
    const quantity2 = document.getElementById('q2');
    const quantity3 = document.getElementById('q3');
    const cf1 = document.getElementsByClassName('choiceform1');
    const cf3 = document.getElementsByClassName('choiceform3');
    const cf5 = document.getElementsByClassName('choiceform5');
    const all1 = quantity.querySelectorAll('*');
    const all2 = quantity2.querySelectorAll('*');
    const all3 = quantity3.querySelectorAll('*');

    if (!checkAppleCheckbox.checked) { //nút 1
        input1.style.opacity = '0.2';
        cf1[0].style.opacity = '';
        cf1[1].style.opacity = '';
        cf1[0].style.cursor = '';
        cf1[1].style.cursor = '';
        all1.forEach(function(element) {
            element.disabled = true;
            element.style.opacity = '0.2';
            element.style.cursor = 'not-allowed';
        });
    } else {
        cf1[0].style.opacity = '0.2';
        cf1[1].style.opacity = '0.2';
        cf1[0].style.cursor = 'not-allowed';
        cf1[1].style.cursor = 'not-allowed';
        input1.style.opacity = '';
        all1.forEach(function(element) {
            element.disabled = false;
            element.style.opacity = '';
            element.style.cursor = '';
        });
    }
    checkAppleCheckbox.addEventListener('change', function() {
        if (!checkAppleCheckbox.checked) {
            input1.style.opacity = '0.2';
            cf1[0].style.opacity = '';
            cf1[1].style.opacity = '';
            cf1[0].style.cursor = '';
            cf1[1].style.cursor = '';
            all1.forEach(function(element) {
                element.disabled = true;
                element.style.opacity = '0.2';
                element.style.cursor = 'not-allowed';
            });
        } else {
            input1.style.opacity = '';
            cf1[0].style.opacity = '0.2';
            cf1[1].style.opacity = '0.2';
            cf1[0].style.cursor = 'not-allowed';
            cf1[1].style.cursor = 'not-allowed';
            all1.forEach(function(element) {
                element.disabled = false;
                element.style.opacity = '';
                element.style.cursor = '';
            });
        }
    });

    if (!checkAppleCheckbox2.checked) { //nút 2
        input2.style.opacity = '0.2';
        cf3[0].style.opacity = '';
        cf3[1].style.opacity = '';
        cf3[0].style.cursor = '';
        cf3[1].style.cursor = '';
        all2.forEach(function(element) {
            element.disabled = true;
            element.style.opacity = '0.2';
            element.style.cursor = 'not-allowed';
        });
    } else {
        cf3[0].style.opacity = '0.2';
        cf3[1].style.opacity = '0.2';
        cf3[0].style.cursor = 'not-allowed';
        cf3[1].style.cursor = 'not-allowed';
        input2.style.opacity = '';
        all2.forEach(function(element) {
            element.disabled = false;
            element.style.opacity = '';
            element.style.cursor = '';
        });
    }
    checkAppleCheckbox2.addEventListener('change', function() {
        if (!checkAppleCheckbox2.checked) {
            cf3[0].style.opacity = '';
            cf3[1].style.opacity = '';
            cf3[0].style.cursor = '';
            cf3[1].style.cursor = '';
            input2.style.opacity = '0.2';
            all2.forEach(function(element) {
                element.disabled = true;
                element.style.opacity = '0.2';
                element.style.cursor = 'not-allowed';
            });
        } else {
            cf3[0].style.opacity = '0.2';
            cf3[1].style.opacity = '0.2';
            cf3[0].style.cursor = 'not-allowed';
            cf3[1].style.cursor = 'not-allowed';
            input2.style.opacity = '';
            all2.forEach(function(element) {
                element.disabled = false;
                element.style.opacity = '';
                element.style.cursor = '';
            });
        }
    });

    if (!checkAppleCheckbox3.checked) { //nút 3
        input3.style.opacity = '0.2';
        cf5[0].style.opacity = '';
        cf5[1].style.opacity = '';
        cf5[0].style.cursor = '';
        cf5[1].style.cursor = '';
        all3.forEach(function(element) {
            element.disabled = true;
            element.style.opacity = '0.2';
            element.style.cursor = 'not-allowed';
        });
    } else {
        input3.style.opacity = '';
        cf5[0].style.opacity = '0.2';
        cf5[1].style.opacity = '0.2';
        cf5[0].style.cursor = 'not-allowed';
        cf5[1].style.cursor = 'not-allowed';
        all3.forEach(function(element) {
            element.disabled = false;
            element.style.opacity = '';
            element.style.cursor = '';
        });
    }
    checkAppleCheckbox3.addEventListener('change', function() {
        if (!checkAppleCheckbox3.checked) {
            cf5[0].style.opacity = '';
            cf5[1].style.opacity = '';
            cf5[0].style.cursor = '';
            cf5[1].style.cursor = '';
            input3.style.opacity = '0.2';
            all3.forEach(function(element) {
                element.disabled = true;
                element.style.opacity = '0.2';
                element.style.cursor = 'not-allowed';
            });
        } else {
            input3.style.opacity = '';
            cf5[0].style.opacity = '0.2';
            cf5[1].style.opacity = '0.2';
            cf5[0].style.cursor = 'not-allowed';
            cf5[1].style.cursor = 'not-allowed';
            all3.forEach(function(element) {
                element.disabled = false;
                element.style.opacity = '';
                element.style.cursor = '';
            });
        }
    });

    function toggleActive(button) {
        // Loại bỏ lớp "active" khỏi tất cả các nút
        var buttons = document.getElementsByClassName("btnchoice");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("active");
        }

        // Thêm lớp "active" cho nút được chọn
        button.classList.add("active");
    }

    function soluongform1(button) {
        if (checkAppleCheckbox.checked) {
            return; // Khi checkbox không được chọn, không thực hiện gì cả
        }
        // Loại bỏ lớp "active" khỏi tất cả các nút
        var buttons = document.getElementsByClassName("choiceform1");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("active");
        }
        // Thêm lớp "active" cho nút được chọn
        button.classList.add("active");

        var buttonPosition = Array.from(buttons).indexOf(button) + 1;
        if (buttonPosition == 2) {
            var quantityValue = 5;
            var form1 = quantityValue * 200000;
            var totalForm1 = document.getElementById("totalform1");
            totalForm1.innerHTML = form1.toLocaleString() + " đ";
        }else{
            var quantityValue = 1;
            var form1 = quantityValue * 200000;
            var totalForm1 = document.getElementById("totalform1");
            totalForm1.innerHTML = form1.toLocaleString() + " đ";
        }
    }

    function soluongform2(button) {
        // Loại bỏ lớp "active" khỏi tất cả các nút
        var buttons = document.getElementsByClassName("choiceform2");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("active");
        }

        // Thêm lớp "active" cho nút được chọn
        button.classList.add("active");
    }

    function soluongform3(button) {
        if (checkAppleCheckbox2.checked) {
            return; // Khi checkbox không được chọn, không thực hiện gì cả
        }
        // Loại bỏ lớp "active" khỏi tất cả các nút
        var buttons = document.getElementsByClassName("choiceform3");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("active");
        }

        // Thêm lớp "active" cho nút được chọn
        button.classList.add("active");

        var buttonPosition = Array.from(buttons).indexOf(button) + 1;
        if (buttonPosition == 2) {
            var form2 = 255000;
            var totalForm2 = document.getElementById("totalform2");
            totalForm2.innerHTML = form2.toLocaleString() + " đ";
        }else{
            var form2 = 200000;
            var totalForm2 = document.getElementById("totalform2");
            totalForm2.innerHTML = form2.toLocaleString() + " đ";
        }
    }

    function soluongform4(button) {
        // Loại bỏ lớp "active" khỏi tất cả các nút
        var buttons = document.getElementsByClassName("choiceform4");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("active");
        }

        // Thêm lớp "active" cho nút được chọn
        button.classList.add("active");
    }

    function soluongform5(button) {
        if (checkAppleCheckbox3.checked) {
            return; // Khi checkbox không được chọn, không thực hiện gì cả
        }
        // Loại bỏ lớp "active" khỏi tất cả các nút
        var buttons = document.getElementsByClassName("choiceform5");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("active");
        }

        // Thêm lớp "active" cho nút được chọn
        button.classList.add("active");

        var buttonPosition = Array.from(buttons).indexOf(button) + 1;
        if (buttonPosition == 2) {
            var quantityValue = 5;
            var form3 = quantityValue * 200000;
            var totalForm3 = document.getElementById("totalform3");
            totalForm3.innerHTML = form3.toLocaleString() + " đ";
        }else{
            var quantityValue = 1;
            var form3 = quantityValue * 200000;
            var totalForm3 = document.getElementById("totalform3");
            totalForm3.innerHTML = form3.toLocaleString() + " đ";
        }
    }

    function soluongform6(button) {
        // Loại bỏ lớp "active" khỏi tất cả các nút
        var buttons = document.getElementsByClassName("choiceform6");
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("active");
        }

        // Thêm lớp "active" cho nút được chọn
        button.classList.add("active");
    }


    function updateForm1() {
        var quantityInput = document.getElementById("quantity");
        var quantityValue = parseInt(quantityInput.value);
        if (isNaN(quantityValue)) {
            var totalForm1 = document.getElementById("totalform1");
            totalForm1.innerHTML = "0 đ";
        } else {
            var form1 = quantityValue * 200000;
            var totalForm1 = document.getElementById("totalform1");
            totalForm1.innerHTML = form1.toLocaleString() + " đ";
            // console.log(form1);
        }

    }

    function updateForm2() {
        var quantityInput = document.getElementById("quantity2");
        var quantityValue = parseInt(quantityInput.value);
        if (isNaN(quantityValue)) {
            var totalForm2 = document.getElementById("totalform2");
            totalForm2.innerHTML = "0 đ";
        } else {
            var tam = quantityValue % 50;
            if (tam > 0) {
                var form2 = (Math.floor(quantityValue / 50) + 1) * 200000;
            } else {
                var form2 = Math.floor(quantityValue / 50) * 200000;
            }
            var totalForm2 = document.getElementById("totalform2");
            totalForm2.innerHTML = form2.toLocaleString() + " đ";
            // console.log(form1);
        }
    }

    function updateForm3() {
        var quantityInput = document.getElementById("quantity3");
        var quantityValue = parseInt(quantityInput.value);
        if (isNaN(quantityValue)) {
            var totalForm3 = document.getElementById("totalform3");
            totalForm3.innerHTML = "0 đ";
        } else {
            var form3 = quantityValue * 200000;
            var totalForm3 = document.getElementById("totalform3");
            totalForm3.innerHTML = form3.toLocaleString() + " đ";
            // console.log(form1);
        }
    }
    </script>


</body>

@include('layouts.Footer')

</html>