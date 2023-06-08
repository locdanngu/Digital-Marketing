<div class="modal fade" id="a" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body d-flex flex-column">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="left: 30px;position: relative;"></button>
                <p class="txtpopup1">Đăng ký tư vấn</p>
                <span class="txtpopup2">Bạn có câu hỏi dành cho chúng tôi? Đừng ngần ngại! </span>
                <p class="txtpopup2">Hãy gửi thông tin cho Mocha Ads.</p>
                <div class="d-flex flex-column">
                    <p class="txtpopup3">Họ và tên</p>
                    <input name="name" placeholder="Họ và tên của bạn là" class="inputpopup1" id="nameform">
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column" style="width:48%">
                        <p class="txtpopup3">Địa chỉ Email</p>
                        <input name="email" placeholder="Địa chỉ Email của bạn là" class="inputpopup1" id="emailform">
                    </div>
                    <div class="d-flex flex-column" style="width:48%">
                        <p class="txtpopup3">Số điện thoại</p>
                        <input name="phone" placeholder="Số điện thoại của bạn là" class="inputpopup1" id="phoneform">
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <p class="txtpopup3">Đôi lời nhắn gửi</p>
                    <textarea name="review" placeholder="Hãy viết gì đó..." class="inputpopup1" style="height:6em"
                        id="reviewform"></textarea>
                </div>
                <button class="btntuvan" style="width:100%;margin:1em 0 2em 0" id="sendformtuvan">Liên hệ ngay</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#sendformtuvan').click(function() {
        var nameform = $('#nameform').val(); // Lấy giá trị của input có class "a"
        console.log(nameform);
        var emailform = $('#emailform').val(); // Lấy giá trị của input có class "a"
        var phoneform = $('#phoneform').val(); // Lấy giá trị của input có class "a"
        var reviewform = $('#reviewform').val(); // Lấy giá trị của input có class "a"
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

            },
            error: function() {
                // Xử lý lỗi (nếu có)
            }
        });
    });
});
</script>