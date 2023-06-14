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
                        <div class="card-tools" style="width: 45%;">
                            <div class="input-group input-group-sm">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Tìm kiếm" id="search">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 70vh;">
                        <table class="table table-head-fixed text-nowrap" id="capnhat">
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
                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                                            data-target="#modal-traloi-dtv" data-id="{{ $dtv->idtuvan }}"
                                            data-name="{{ $dtv->name }}" data-email="{{ $dtv->email }}"
                                            data-phone="{{ $dtv->phone }}" data-review="{{ $dtv->review }}"
                                            data-time="{{ $dtv->created_at }}">
                                            <i class="bi bi-chat-right-dots-fill"></i>
                                            Trả lời
                                        </button>
                                        <!-- <button class="btn btn-info btn-sm">
                                            <i class="bi bi-pencil-fill">
                                            </i>
                                            Edit
                                        </button>
                                        <button class="btn btn-danger btn-sm">
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
                    <span name="review" class="spanpopup"></span>
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
$(document).ready(function() {
    $('#modal-traloi-dtv').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Nút "Change" được nhấn
        var id = button.data('id');
        var name = button.data('name');
        var email = button.data('email');
        var phone = button.data('phone');
        var review = button.data('review');
        var time = button.data('time');
        var modal = $(this);
        modal.find('input[name="id"]').val(id);
        modal.find('span[name="id"]').text(id);
        modal.find('span[name="name"]').text(name);
        modal.find('span[name="email"]').text(email);
        modal.find('span[name="phone"]').text(phone);
        modal.find('span[name="review"]').text(review);
        modal.find('span[name="time"]').text(time);
    });


    $('#search').on('input', function() {
        var search = $(this).val();
        $.ajax({
            type: 'POST',
            url: '{{ route("newcontact.search") }}',
            data: {
                _token: '{{ csrf_token() }}',
                search: search
            },
            success: function(response) {
                var dontuvan = response.dontuvan;
                $("#capnhat").load(window.location.href + " #capnhat");
            },
            error: function(xhr, status, error) {}
        });
    });

});
</script>

@endsection