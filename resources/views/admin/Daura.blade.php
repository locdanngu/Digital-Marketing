@extends('admin.Adminlayout')

@section('title', 'Admin Service')
<!-- Content Wrapper. Contains page content -->
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý đầu ra</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-3">
                <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                    data-target="#modal-add-serviceads"><i class="bi bi-plus-circle-fill"></i> Thêm hóa đơn chi tiêu</button>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tổng cộng : -  đ</h3>
                        <div class="card-tools" style="width: 45%;">

                        </div>
                    </div>

                    <div class="position-relative mb-4">
                        <canvas id="thongkedauvao-chart" height="550"></canvas>
                    </div>
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


@endsection


@section('js')
<script>

</script>

@endsection