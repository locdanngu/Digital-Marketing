<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a href="{{ route('home.page') }}"><img src="images/logomocha.png"></a>
        <!-- <a class="navbar-brand" href="#">Trang chủ</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                    href="{{ route('home.page') }}">Trang chủ</a>
                <a class="nav-link {{ request()->is('gioi-thieu') ? 'active' : '' }}"
                    href="{{ route('gioithieu.page') }}">Giới thiệu</a>
                <!-- <a class="nav-link {{ request()->is('giaiphap') ? 'active' : '' }}" href="{{ route('giaiphap.page') }}">Giải pháp</a> -->
                <div class="dropdown">
                    <a class="nav-link {{ request()->is('google-ads') 
                                       || request()->is('facebook-ads')
                                       || request()->is('tiktok-ads')
                                       || request()->is('creative-content')
                                       || request()->is('viral-video')
                                       || request()->is('KOL')
                                       || request()->is('booking') ? 'active' : '' }}" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Giải pháp
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('googleads.page') }}">Google Ads</a></li>
                        <li><a class="dropdown-item" href="{{ route('facebookads.page') }}">Facebook Ads</a></li>
                        <li><a class="dropdown-item" href="{{ route('tiktokads.page') }}">Tiktok Ads</a></li>
                        <li><a class="dropdown-item" href="{{ route('creativecontent.page') }}">Create Content</a></li>
                        <li><a class="dropdown-item" href="{{ route('viralvideo.page') }}">TVC/Viral Videos</a></li>
                        <li><a class="dropdown-item" href="{{ route('KOL.page') }}">KOLs, Influencers</a></li>
                        <li><a class="dropdown-item" href="{{ route('booking.page') }}">PR, Booking</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Portfolio
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Dowload bản Tiếng Việt</a></li>
                        <li><a class="dropdown-item" href="">Dowload bản Tiếng Anh</a></li>
                    </ul>
                </div>
                <a class="nav-link {{ request()->is('blog') || request()->is('contentblog') ? 'active' : '' }}"
                    href="{{ route('blog.page') }}">Blog</a>
                <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                    href="{{ route('contact.page') }}">Contact</a>
                <button type="button" class="nav-link hidemobile" data-bs-toggle="modal" data-bs-target="#a">
                    Tư vấn miễn phí
                </button>
            </div>
        </div>
        <button type="button" class="btntuvan hidemobilebtntuvan" data-bs-toggle="modal" data-bs-target="#a">
            Tư vấn miễn phí
        </button>
    </div>
</nav>


@include('layouts.Popup')