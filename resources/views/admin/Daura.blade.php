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
                    data-target="#modal-add-daura"><i class="bi bi-plus-circle-fill"></i> Thêm hóa đơn chi tiêu</button>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="color:red;font-weight:bold">Tổng cộng : -{{ number_format($costdaura, 0, ',', '.') }} đ</h3>
                        <div class="card-tools" style="width: 45%;">

                        </div>
                    </div>

                    <div class="card-body table-responsive p-0" style="height: 70vh;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID Đơn</th>
                                    <th>Tên</th>
                                    <th>Số tiền</th>
                                    <th>Ghi chú</th>
                                    <th>Ngày nhập</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="capnhat">
                                @foreach($daura as $dr)
                                <tr>
                                    <td>{{ $dr->iddaura }}</td>
                                    <td>{{ $dr->namedaura }}</td>
                                    <td>{{ number_format($dr->totalcost, 0, ',', '.') }} đ</td>
                                    <td>{{ $dr->note }}</td>
                                    <td>{{ $dr->created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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

<div class="modal fade" id="modal-add-daura">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('daura.add') }}" method="post">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Thêm thông tin chi tiêu mới</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tên thông tin</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="namedaura">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Số tiền</span>
                    <input type="number" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="totalcost">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Ghi chú</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="note">
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
@endsection


@section('js')
<script>

</script>

@endsection