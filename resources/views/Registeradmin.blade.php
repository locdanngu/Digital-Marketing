<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Registration Page</title>
    @include('layouts.Linkadmin')
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="#"><img src="images/icon.png" height=50 width=50><b> Admin</b> Mocha</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Đăng ký tài khoản mới</p>
                <form action="{{ route('registeradmin') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Tên đầy đủ" name="name" required
                            value="{{ old('name') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="bi bi-person"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" required
                            value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="bi bi-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Số điện thoại" name="phone" required
                            value="{{ old('phone') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="bi bi-telephone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="bi bi-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="repassword"
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="bi bi-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                    <div class="input-group">
                        <p style="color:red">{{ $message }}</p>
                    </div>
                    @enderror
                    @error('email')
                    <div class="input-group">
                        <p style="color:red">{{ $message }}</p>
                    </div>
                    @enderror
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                                <label for="agreeTerms">
                                    Tôi đồng ý với <a href="#">Điều khoản</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

                <a href="{{ route('adminlogin.page') }}" class="text-center">Chuyển đến trang đăng nhập</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    @include('layouts.Footadmin')
</body>

</html>