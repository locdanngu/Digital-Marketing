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
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('home.page') }}">Trang chủ</a>
                <a class="nav-link {{ request()->is('gioithieu') ? 'active' : '' }}" href="{{ route('gioithieu.page') }}">Giới thiệu</a>
                <a class="nav-link {{ request()->is('giaiphap') ? 'active' : '' }}" href="{{ route('giaiphap.page') }}">Giải pháp</a>
                <a class="nav-link {{ request()->is('portfolio') ? 'active' : '' }}" href="{{ route('portfolio.page') }}">Portfolio</a>
                <a class="nav-link {{ request()->is('blog') || request()->is('contentblog') ? 'active' : '' }}" href="{{ route('blog.page') }}">Blog</a>
                <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact.page') }}">Contact</a>
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