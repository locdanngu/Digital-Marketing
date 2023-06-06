<footer>
    <div class="box box1foot d-flex flex-column align-items-center">
        <span class="txt10">Cập nhật xu hướng</span>
        <p class="txt10">TRUYỀN THÔNG QUẢNG CÁO ĐA KÊNH</p>
        <p class="txt11">Đừng bỏ lỡ thông tin mới nhất về ngành truyền thông quảng cáo, đón đầu xu thế bạn nhé!</p>
        <form class="d-flex formfoot mt-3">
            @csrf
            <input class="inputfoot" required name="email" type="email" placeholder="Địa chỉ email của bạn là">
            <button class="btnfoot">Nhận tin tức</button>
        </form>
    </div>
    <div class="box d-flex justify-content-between">
        <div class="foot1 d-flex flex-column">
            <img src="images/logomocha.png" class="imgfoot1">
            <p class="txt12">Mocha Ads - Hệ thống dịch vụ
                quảng cáo truyền thông do Viettel Media triển khai.</p>
            <div class="d-flex">
                <a href="" class="iconfoot">
                    <img src="images/iconfb.png">
                </a>
                <a href="" class="iconfoot">
                    <img src="images/iconyt.png">
                </a>
                <a href="" class="iconfoot">
                    <img src="images/iconis.png">
                </a>
            </div>
        </div>
        <div class="foot2 d-flex flex-column">
            <p class="txt13">Về chúng tôi</p>
            <a href="{{ route('brief.page') }}" class="txt14">Brief</a>
            <a href="{{ route('portfolio.page') }}" class="txt14">Portfolio</a>
            <a href="{{ route('blog.page') }}" class="txt14">Blog</a>
            <a href="{{ route('contact.page') }}" class="txt14">Liên hệ</a>
        </div>
        <div class="foot2 d-flex flex-column">
            <p class="txt13">Dịch vụ</p>
            <a href="{{ route('facebookads.page') }}" class="txt14">Facebook Ads</a>
            <a href="{{ route('googleads.page') }}" class="txt14">Google Ads</a>
            <a href="{{ route('tiktokads.page') }}" class="txt14">Tiktok Ads</a>
            <a href="{{ route('KOL.page') }}" class="txt14">KOLs/Influencer</a>
        </div>
        <div class="foot2 d-flex flex-column">
            <img src="images/imgfoot1.png" class="imgfoot1 mb-2">
            <img src="images/imgfoot2.png" class="imgfoot1 mb-2">
            <img src="images/imgfoot3.png" class="imgfoot1 mb-2">
            <img src="images/imgfoot4.png" class="imgfoot1 mb-2">
        </div>
        <div class="boxmini2 d-flex flex-column">
            <p class="txt5">Tư vấn miễn phí</p>

            <p>Tư vấn MIỄN PHÍ chiến dịch truyền thông & quảng cáo về sản phẩm của bạn?</p>
            <a href="" class="d-flex fixa">
                <div class="icon2">
                    <img src="images/letter.png">
                </div>
                <div class="d-flex flex-column align-items-baseline">
                    <span class="contactus">Liên hệ với chúng tôi</span>
                    <i class="txt6">Ấn để gửi mail</i>
                </div>
            </a>
        </div>
    </div>



    <hr class="hrfoot">
    <div class="boxfoot box2foot d-flex flex-column align-items-center">
        <span class="txt15">Cơ quan chủ quản: Công ty Truyền thông Viettel (Viettel Media) – Chi nhánh Tập đoàn Công
            nghiệp – Viễn thông Quân đội.</span>
        <span class="txt15">Trụ sở: Tầng 4, Tòa nhà The Light (CT2 Trung Văn), đường Tố Hữu, Nam Từ Liêm, Hà Nội</span>
        <span class="txt15">
            Giấy phép: Số 217/GXN-TTĐT do Cục QL Phát Thanh Truyền Hình và TTĐT cấp ngày 28/12/2011</span>
        <span class="txt15">Chịu trách nhiệm nội dung: Ông Võ Thanh Hải</span>
        <span class="txt15">
            Chăm sóc khách hàng: 198 (Miễn phí) | Quảng cáo:hoptac@viettel.com.vn</span>
    </div>
    <div class="boxfoot box3foot d-flex justify-content-between">
        <span class="txt16">©2020, Viettel Media. All Rights Reserved</span>
        <div class="d-flex rightbox3foot">
            <a href="">Term of Service</a>
            <a href="">Privacy Policy</a>
            <a href="">Legal Info</a>
        </div>
    </div>
</footer>