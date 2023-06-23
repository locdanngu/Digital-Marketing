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
                    <h1 class="m-0">Quản lý dịch vụ</h1>
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
                                    <td>@if($dv->created_at != $dv->updated_at)
                                        <button class="btn btn-secondary btn-sm mr-1" type="button" data-toggle="modal"
                                            data-target="#modal-traloi-dtv">
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
                                            data-phone="{{ $dv->phone }}" data-cost="{{ number_format($dv->cost, 0, ',', '.') }} đ"
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
<!-- Modal trả lời đơn tư vấn -->
<div class="modal fade" id="modal-add-serviceads">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('dichvu.add') }}" method="post">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Thêm thông tin dịch vụ mới</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Họ và tên</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                    <input type="email" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="email">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Số điện thoại</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="phone">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Loại dịch vụ</span>
                    <select style="width: 85%;padding-left:1em;" name="idservice">
                        @foreach($service as $sv)
                        <option value="{{ $sv->idservice }}">{{ $sv->idservice }}.
                            {{ $sv->nameservice }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Số tiền</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="cost">
                </div>
            </div>
            <div class="modal-footer justify-align-content-end">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-change-serviceads">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('dichvu.change') }}" method="post">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Chỉnh sửa thông tin dịch vụ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" name="id">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id đơn</span>
                    <span class="spanpopup" name="id">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Họ và tên</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                    <input type="email" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="email">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Số điện thoại</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="phone">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Loại dịch vụ</span>
                    <select style="width: 85%;padding-left:1em;" name="idservice">
                        @foreach($service as $sv)
                        <option value="{{ $sv->idservice }}">{{ $sv->idservice }}.
                            {{ $sv->nameservice }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Số tiền</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="cost">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Lý do chỉnh sửa</span>
                    <textarea type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="reason"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-align-content-end">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-delete-serviceads">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('dichvu.delete') }}" method="post">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Xóa thông tin dịch vụ</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" name="id">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id đơn</span>
                    <span class="spanpopup" name="id">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Họ và tên</span>
                    <span class="spanpopup" name="name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                    <span class="spanpopup" name="email">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Số điện thoại</span>
                    <span class="spanpopup" name="phone">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Loại dịch vụ</span>
                    <span class="spanpopup" name="nameservice">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Số tiền</span>
                    <span class="spanpopup" name="cost">
                </div>
            </div>
            <div class="modal-footer justify-align-content-end">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-danger">Xóa</button>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


@endsection


@section('js')
<script>
$(document).ready(function() {
    $('#modal-change-serviceads').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Nút "Change" được nhấn
        var id = button.data('id');
        var name = button.data('name');
        var email = button.data('email');
        var phone = button.data('phone');
        var nameservice = button.data('nameservice');
        var idservive = button.data('idservice');
        var cost = button.data('cost');
        var modal = $(this);
        modal.find('input[name="id"]').val(id);
        modal.find('span[name="id"]').text(id);
        modal.find('select[name="idservice"] option[value="' + idservive + '"]').prop('selected', true);
        modal.find('input[name="name"]').val(name);
        modal.find('input[name="email"]').val(email);
        modal.find('input[name="phone"]').val(phone);
        modal.find('input[name="cost"]').val(cost);

    });


    $('#modal-delete-serviceads').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Nút "Change" được nhấn
        var id = button.data('id');
        var name = button.data('name');
        var email = button.data('email');
        var phone = button.data('phone');
        var nameservice = button.data('nameservice');
        var idservive = button.data('idservice');
        var cost = button.data('cost');
        var modal = $(this);
        modal.find('input[name="id"]').val(id);
        modal.find('span[name="id"]').text(id);
        modal.find('span[name="nameservice"]').text(nameservice);
        modal.find('span[name="name"]').text(name);
        modal.find('span[name="email"]').text(email);
        modal.find('span[name="phone"]').text(phone);
        modal.find('span[name="cost"]').text(cost);

    });




});
</script>

@endsection