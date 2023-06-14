@extends('admin.Adminlayout')

@section('title', 'Admin New Contact')
<!-- Content Wrapper. Contains page content -->
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Mẫu đơn chưa trả lời</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tổng cộng : {{ $countdontuvan }} đơn</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Tìm kiếm">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 70vh;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID Đơn</th>
                                    <th>Họ và tên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Góp ý</th>
                                    <th>Thời gian nhận</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dontuvan as $dtv)
                                <tr>
                                    <td>{{ $dtv->idtuvan }}</td>
                                    <td>{{ $dtv->name }}</td>
                                    <td>{{ $dtv->email }}</td>
                                    <td><span class="tag tag-success">{{ $dtv->phone }}</span></td>
                                    <td>{{ $dtv->review }}</td>
                                    <td>{{ $dtv->created_at }}</td>
                                    <td class="project-actions text-right">
                                        <button class="btn btn-primary btn-sm" href="#">
                                            <i class="bi bi-chat-right-dots-fill"></i>
                                            Trả lời
                                        </button>
                                        <!-- <button class="btn btn-info btn-sm" href="#">
                                            <i class="bi bi-pencil-fill">
                                            </i>
                                            Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm" href="#">
                                            <i class="bi bi-trash-fill">
                                            </i>
                                            Delete
                                        </button> -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

@endsection