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
                    <h1 class="m-0">Quản lý đầu vào</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-3">
                <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                    data-target="#modal-add-serviceads"><i class="bi bi-plus-circle-fill"></i> Tạo Thông tin dịch vụ
                    mới</button>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tổng cộng : {{ $countdichvu }} đơn</h3>
                        <div class="card-tools" style="width: 45%;">
                            <div class="input-group input-group-sm">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Tìm kiếm" id="search">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 65vh;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID Đơn</th>
                                    <th>Họ và tên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Loại dịch vụ</th>
                                    <th>Số tiền</th>
                                    <th>Thời gian nhận</th>
                                    <th>Đã chỉnh sửa</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="capnhat">
                                @foreach($dichvu as $dv)
                                <tr>
                                    <td>{{ $dv->idads }}</td>
                                    <td>{{ $dv->name }}</td>
                                    <td>{{ $dv->email }}</td>
                                    <td>{{ $dv->phone }}</td>
                                    <td>{{ $dv->service->nameservice }}</td>
                                    <td>{{ number_format($dv->cost, 0, ',', '.') }} đ</td>
                                    <td>{{ $dv->created_at }}</td>
                                    <!-- <td>
                                        @foreach ($dv->servicechange as $change)
                                        {{ $change->reason }}
                                        {{ $change->created_at }}
                                        @endforeach
                                    </td> -->
                                    <td>@if($dv->created_at != $dv->updated_at)
                                        <button class="btn btn-secondary btn-sm mr-1" type="button" data-toggle="modal"
                                            data-target="#modal-history-change" data-id="{{ $dv->idads }}"
                                            data-form="{{ json_encode($dv->servicechange) }}">
                                            <i class="bi bi-list"></i>
                                            Lịch sử
                                        </button>
                                        @else
                                        Chưa
                                        @endif
                                    </td>
                                    <td class="project-actions text-right">
                                        <button class="btn btn-primary btn-sm mr-1" type="button" data-toggle="modal"
                                            data-target="#modal-change-serviceads" data-id="{{ $dv->idads }}"
                                            data-name="{{ $dv->name }}" data-email="{{ $dv->email }}"
                                            data-phone="{{ $dv->phone }}" data-cost="{{ $dv->cost }}"
                                            data-idservice="{{ $dv->service->idservice }}">
                                            <i class="bi bi-pencil"></i>
                                            Chỉnh sửa
                                        </button>
                                        <button class="btn btn-danger btn-sm" type="button" data-toggle="modal"
                                            data-target="#modal-delete-serviceads" data-id="{{ $dv->idads }}"
                                            data-name="{{ $dv->name }}" data-email="{{ $dv->email }}"
                                            data-phone="{{ $dv->phone }}"
                                            data-cost="{{ number_format($dv->cost, 0, ',', '.') }} đ"
                                            data-nameservice="{{ $dv->service->nameservice }}">
                                            <i class="bi bi-pencil"></i>
                                            Xóa
                                        </button>
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

@section('popup')


@endsection


@section('js')
<script>

</script>

@endsection