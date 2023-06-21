@extends('admin.Adminlayout')

@section('title', 'Admin Information')
<!-- Content Wrapper. Contains page content -->
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Cài đặt thông tin cá nhân</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin cá nhân</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" action="{{  route('adminin4.change') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group d-flex flex-column">
                                <label for="exampleInputPassword1">Avatar</label>
                                <img id="preview" src="{{ $user->avatar }}" alt=""
                                    style="width:100px;margin-bottom:1em" class="imageblog">
                                <!-- <img src="{{ $user->avatar }}" style="width:100px"> -->
                                <input class="form-control" type="file" id="formFile" accept="image/*"
                                    style="max-width:100%" onchange="previewImage(event)" name="image" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Họ và tên</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" name="password" class="form-control" id="exampleInputPassword1"
                                    value="{{ $user->email }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone</label>
                                <input type="text" name="phone" class="form-control" id="exampleInputPassword1"
                                    value="{{ $user->phone }}">
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>

@endsection

@section('popup')
<!-- Modal trả lời đơn tư vấn -->



@endsection


@section('js')
<script>
function previewImage(event) {
    const preview = document.getElementById('preview');
    const file = event.target.files[0];
    const reader = new FileReader();
    reader.onload = function() {
        preview.src = reader.result;
    }
    reader.readAsDataURL(file);
}
</script>

@endsection