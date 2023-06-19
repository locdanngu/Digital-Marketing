@extends('admin.Adminlayout')

@section('title', 'Admin Notification')
<!-- Content Wrapper. Contains page content -->
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Email đã đăng ký nhận thông báo</h1>
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
                        <h3 class="card-title">Tổng cộng : {{ $countemailthongbao }} email</h3>
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
                                    <th>Email</th>
                                    <th>Thời gian đăng ký</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="capnhat">
                                @foreach($emailthongbao as $noti)
                                <tr>
                                    <td>{{ $noti->email }}</td>
                                    <td>{{ $noti->created_at }}</td>
                                    <td class="project-actions text-right">
                                        <button class="btn btn-danger btn-sm" type="button" data-toggle="modal"
                                            data-target="#modal-delete-emailnoti" data-id="{{ $noti->idemailthongbao }}"
                                            data-time="{{ $noti->created_at }}" data-email="{{ $noti->email }}">
                                            <i class="bi bi-trash"></i>
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
<div class="modal fade" id="modal-delete-emailnoti">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('deleteemail.noti') }}" method="post">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Xóa Email nhận thông báo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" name="id">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                    <span name="email" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Thời gian đăng ký</span>
                    <span name="time" class="spanpopup"></span>
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
    $('#modal-delete-emailnoti').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Nút "Change" được nhấn
        var id = button.data('id');
        var email = button.data('email');
        var time = button.data('time');
        var modal = $(this);
        modal.find('input[name="id"]').val(id);
        modal.find('span[name="email"]').text(email);
        modal.find('span[name="time"]').text(time);
    });


    $('#search').on('input', function() {
        var search = $(this).val();
        $.ajax({
            type: 'POST',
            url: '{{ route("notification.search") }}',
            data: {
                _token: '{{ csrf_token() }}',
                search: search
            },
            success: function(response) {
                var html = response.html;
                var count = response.count;
                $('#capnhat').html(html);
                $('.card-title').text('Tổng cộng: ' + count + ' email');
            },
            error: function(xhr, status, error) {}
        });
    });

});
</script>

@endsection