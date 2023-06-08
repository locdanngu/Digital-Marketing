<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @extends('layouts.Link')
    <link rel="stylesheet" href="/css/Blog.css">
    <link rel="stylesheet" href="/css/Layoutads.css">
    <title>Blog</title>
</head>

<body>
    @include('layouts.Header')

    <div class="box box1 d-flex justify-content-between">
        <a href="{{ route('contentblog.page') }}" class="leftbox1 d-flex">
            <div style="width:60%">
                <img src="images/blog1.png">
            </div>
            <div class="d-flex flex-column justify-content-center" style="width:38%">
                <p class="txtbox1">Hướng dẫn</p>
                <p class="txt2box1">Digital Marketing là làm gì? Top những kỹ năng Digital Marketer phải biết </p>
                <p class="txt3box1">Digital Marketing là một mảng nhỏ hơn của Marketing, yêu cầu những kiến thức chuyên
                    sâu ...</p>
                <p class="txt4box1">7 phút để đọc</p>
            </div>
        </a>
        <div class="rightbox1 d-flex flex-column justify-content-between">
            <a href="" class="phantubox1 d-flex">
                <img src="images/blog2.png">
                <div class="d-flex flex-column">
                    <p class="txt5box1">SEO</p>
                    <p class="txt6box1">Digital Marketing là làm gì? Top những kỹ năng...</p>
                </div>
            </a>
            <div class="phantubox1 d-flex">
                <img src="images/blog3.png">
                <div class="d-flex flex-column">
                    <p class="txt5box1">SEO</p>
                    <p class="txt6box1">Digital Marketing là làm gì? Top những kỹ năng...</p>
                </div>
            </div>
            <div class="phantubox1 d-flex">
                <img src="images/blog4.png">
                <div class="d-flex flex-column">
                    <p class="txt5box1">SEO</p>
                    <p class="txt6box1">Digital Marketing là làm gì? Top những kỹ năng...</p>
                </div>
            </div>
        </div>
    </div>
    <div class="box box2 d-flex justify-content-between">
        <div class="leftbox2 d-flex flex-column">
            <form action="" method="get" class="d-flex formbox2">
                @csrf
                <div class="group">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                    <input placeholder="Tìm kiếm" type="search" class="input" name="search">
                    <!-- <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                    <input placeholder="Tìm kiếm" type="search" class="input" name="search"> -->
                </div>
                <button class="btntuvan">Tìm kiếm</button>
            </form>
            <a href="" class="phantuleftbox2 d-flex justify-content-between">
                <img src="images/blog5.png">
                <div class="d-flex flex-column justify-content-between" style="margin-left:1em">
                    <span class="txtbox2">HƯỚNG DẪN</span>
                    <span class="txt2box2">Digital Marketing là làm gì? Top những kỹ năng Digital Marketer phải biết
                    </span>
                    <span class="txt3box2">Digital Marketing là một mảng nhỏ hơn của Marketing, yêu cầu những kiến thức
                        chuyên sâu ...</span>
                    <span class="txt4box2">5 phút để đọc</span>
                </div>
            </a>
            <a href="" class="phantuleftbox2 d-flex justify-content-between">
                <img src="images/blog6.png">
                <div class="d-flex flex-column justify-content-between" style="margin-left:1em">
                    <span class="txtbox2">HƯỚNG DẪN</span>
                    <span class="txt2box2">Digital Marketing là làm gì? Top những kỹ năng Digital Marketer phải biết
                    </span>
                    <span class="txt3box2">Digital Marketing là một mảng nhỏ hơn của Marketing, yêu cầu những kiến thức
                        chuyên sâu ...</span>
                    <span class="txt4box2">5 phút để đọc</span>
                </div>
            </a>
            <a href="" class="phantuleftbox2 d-flex justify-content-between">
                <img src="images/blog7.png">
                <div class="d-flex flex-column justify-content-between" style="margin-left:1em">
                    <span class="txtbox2">HƯỚNG DẪN</span>
                    <span class="txt2box2">Digital Marketing là làm gì? Top những kỹ năng Digital Marketer phải biết
                    </span>
                    <span class="txt3box2">Digital Marketing là một mảng nhỏ hơn của Marketing, yêu cầu những kiến thức
                        chuyên sâu ...</span>
                    <span class="txt4box2">5 phút để đọc</span>
                </div>
            </a>
            <a href="" class="phantuleftbox2 d-flex justify-content-between">
                <img src="images/blog8.png">
                <div class="d-flex flex-column justify-content-between" style="margin-left:1em">
                    <span class="txtbox2">HƯỚNG DẪN</span>
                    <span class="txt2box2">Digital Marketing là làm gì? Top những kỹ năng Digital Marketer phải biết
                    </span>
                    <span class="txt3box2">Digital Marketing là một mảng nhỏ hơn của Marketing, yêu cầu những kiến thức
                        chuyên sâu ...</span>
                    <span class="txt4box2">5 phút để đọc</span>
                </div>
            </a>
            <a href="" class="phantuleftbox2 d-flex justify-content-between">
                <img src="images/blog9.png">
                <div class="d-flex flex-column justify-content-between" style="margin-left:1em">
                    <span class="txtbox2">HƯỚNG DẪN</span>
                    <span class="txt2box2">Digital Marketing là làm gì? Top những kỹ năng Digital Marketer phải biết
                    </span>
                    <span class="txt3box2">Digital Marketing là một mảng nhỏ hơn của Marketing, yêu cầu những kiến thức
                        chuyên sâu ...</span>
                    <span class="txt4box2">5 phút để đọc</span>
                </div>
            </a>
            <a href="" class="phantuleftbox2 d-flex justify-content-between">
                <img src="images/blog10.png">
                <div class="d-flex flex-column justify-content-between" style="margin-left:1em">
                    <span class="txtbox2">HƯỚNG DẪN</span>
                    <span class="txt2box2">Digital Marketing là làm gì? Top những kỹ năng Digital Marketer phải biết
                    </span>
                    <span class="txt3box2">Digital Marketing là một mảng nhỏ hơn của Marketing, yêu cầu những kiến thức
                        chuyên sâu ...</span>
                    <span class="txt4box2">5 phút để đọc</span>
                </div>
            </a>
            <div class="phantrang">
                <a href="">Quay lại</a>
                <a href="" class="linkpt active">1</a>
                <a href="" class="linkpt">2</a>
                <a href="" class="linkpt">3</a>
                <a href="" class="linkpt">4</a>
                <a href="" class="linkpt">5</a>
                <a href="" class="linkpt">Tiếp tục</a>
            </div>
        </div>
        <div class="rightbox2">
            <p class="txt5box2">Xem nhiều nhất</p>
            <div class="hrbox2"></div>
            <div class="phanturightbox2 d-flex">
                <p class="txt6box2">01</p>
                <div style="margin-left:1em" class="d-flex flex-column">
                    <span class="txt7box2">Digital Marketing là làm gì? Top những kỹ năng Digital Marketer phải biết
                    </span>
                    <span class="txt4box2">5 phút để đọc</span>
                </div>
            </div>
            <div class="phanturightbox2 d-flex">
                <p class="txt6box2">02</p>
                <div style="margin-left:1em" class="d-flex flex-column">
                    <span class="txt7box2">Digital Marketing là làm gì? Top những kỹ năng Digital Marketer phải biết
                    </span>
                    <span class="txt4box2">5 phút để đọc</span>
                </div>
            </div>
            <div class="phanturightbox2 d-flex">
                <p class="txt6box2">03</p>
                <div style="margin-left:1em" class="d-flex flex-column">
                    <span class="txt7box2">Digital Marketing là làm gì? Top những kỹ năng Digital Marketer phải biết
                    </span>
                    <span class="txt4box2">5 phút để đọc</span>
                </div>
            </div>
            <div class="phanturightbox2 d-flex">
                <p class="txt6box2">04</p>
                <div style="margin-left:1em" class="d-flex flex-column">
                    <span class="txt7box2">Digital Marketing là làm gì? Top những kỹ năng Digital Marketer phải biết
                    </span>
                    <span class="txt4box2">5 phút để đọc</span>
                </div>
            </div>
            <div class="phanturightbox2 d-flex">
                <p class="txt6box2">05</p>
                <div style="margin-left:1em" class="d-flex flex-column">
                    <span class="txt7box2">Digital Marketing là làm gì? Top những kỹ năng Digital Marketer phải biết
                    </span>
                    <span class="txt4box2">5 phút để đọc</span>
                </div>
            </div>
        </div>
    </div>


</body>
@include('layouts.Footer2')


</html>