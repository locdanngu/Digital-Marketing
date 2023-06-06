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
                <a class="nav-link active" aria-current="page" href="{{ route('home.page') }}">Trang chủ</a>
                <a class="nav-link" href="#">Giới thiệu</a>
                <a class="nav-link" href="#">Giải pháp</a>
                <a class="nav-link" href="#">Portfolio</a>
                <a class="nav-link" href="#">Blog</a>
                <a class="nav-link" href="#">Contact</a>
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