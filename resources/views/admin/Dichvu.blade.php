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
                    <div class="card-body table-responsive p-0" style="height: 70vh;">
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="capnhat">
                                @foreach($dichvu as $dv)
                                <tr>
                                    <td>{{ $dv->idggads }}</td>
                                    <td>{{ $dv->name }}</td>
                                    <td>{{ $dv->email }}</td>
                                    <td>{{ $dv->phone }}</td>
                                    <td>{{ $dv->category }}</td>
                                    <!-- <td>{{ $dtv->review }}</td> -->
                                    <td>{{ $dv->cost }}</td>
                                    <td>{{ $dv->created_at }}</td>
                                    <td class="project-actions text-right">
                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                                            data-target="#modal-traloi-dtv">
                                            <i class="bi bi-chat-right-dots-fill"></i>
                                            Trả lời
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
<div class="modal fade" id="modal-traloi-dtv">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('newcontact.answer') }}" method="post">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Trả lời đơn</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" name="id">
            <input type="hidden" name="email">
            <input type="hidden" name="name">
            <input type="hidden" name="time">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">ID Mẫu đơn</span>
                    <span name="id" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Họ Và Tên</span>
                    <span name="name" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                    <span name="email" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Số Điện Thoại</span>
                    <span name="phone" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Câu Hỏi</span>
                    <p name="review" class="spanpopup"></p>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Thời gian nhận</span>
                    <span name="time" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Câu Trả Lời</span>
                    <textarea class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="traloi"
                        style="height: 10em"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-align-content-end">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Trả lời</button>
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