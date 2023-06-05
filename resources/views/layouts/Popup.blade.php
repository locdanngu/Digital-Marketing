<div class="modal fade" id="a" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" class="modal-content" method="POST">
            @csrf
            <div class="modal-body d-flex flex-column">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="left: 30px;position: relative;"></button>
                <p class="txtpopup1">Đăng ký tư vấn</p>
                <span class="txtpopup2">Bạn có câu hỏi dành cho chúng tôi? Đừng ngần ngại! </span>
                <p class="txtpopup2">Hãy gửi thông tin cho Mocha Ads.</p>
                <div class="d-flex flex-column">
                    <p class="txtpopup3">Họ và tên</p>
                    <input name="name" placeholder="Họ và tên của bạn là" class="inputpopup1">
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column" style="width:48%">
                        <p class="txtpopup3">Địa chỉ Email</p>
                        <input name="email" placeholder="Địa chỉ Email của bạn là" class="inputpopup1">
                    </div>
                    <div class="d-flex flex-column" style="width:48%">
                        <p class="txtpopup3">Số điện thoại</p>
                        <input name="phone" placeholder="Số điện thoại của bạn là" class="inputpopup1">
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <p class="txtpopup3">Đôi lời nhắn gửi</p>
                    <textarea name="review" placeholder="Hãy viết gì đó..." class="inputpopup1"
                        style="height:6em"></textarea>
                </div>
                <button class="btntuvan" style="width:100%;margin:1em 0 2em 0">Liên hệ ngay</button>
            </div>

        </form>
    </div>
</div>