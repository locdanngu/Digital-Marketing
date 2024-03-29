@extends('admin.Adminlayout')

@section('title', 'Admin Old Contact')
<!-- Content Wrapper. Contains page content -->
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Mẫu đơn đã trả lời</h1>
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
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID Đơn</th>
                                    <th>Họ và tên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Góp ý</th>
                                    <th>Thời gian nhận</th>
                                    <th>Trả lời</th>
                                    <th>Thời gian trả lời</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="capnhat">
                                @foreach($dontuvan as $dtv)
                                <tr>
                                    <td>{{ $dtv->idtuvan }}</td>
                                    <td>{{ $dtv->name }}</td>
                                    <td>{{ $dtv->email }}</td>
                                    <td><span class="tag tag-success">{{ $dtv->phone }}</span></td>
                                    <td>{!! nl2br($dtv->review) !!}</td>
                                    <td>{{ $dtv->created_at }}</td>
                                    <td>{!! nl2br($dtv->request) !!}</td>
                                    <td>{{ $dtv->updated_at }}</td>
                                    <td class="project-actions text-right">
                                        <button class="btn btn-info btn-sm" type="button" data-toggle="modal"
                                            data-target="#modal-info-dtv" data-id="{{ $dtv->idtuvan }}"
                                            data-name="{{ $dtv->name }}" data-email="{{ $dtv->email }}"
                                            data-phone="{{ $dtv->phone }}" data-review="{!! nl2br($dtv->review) !!}"
                                            data-time="{{ $dtv->created_at }}" data-request="{!! nl2br($dtv->request) !!}"
                                            data-timerequest="{{ $dtv->updated_at }}">
                                            <i class="bi bi-info"></i>
                                            Xem Chi Tiết
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
<div class="modal fade" id="modal-info-dtv">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('newcontact.answer') }}" method="post">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Thông tin đơn</h4>
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
                    <p name="review" class="spanpopup"></p>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Thời gian nhận</span>
                    <span name="time" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Câu trả lời</span>
                    <p name="request" class="spanpopup"></p>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Thời gian gửi</span>
                    <span name="timerequest" class="spanpopup"></span>
                </div>
            </div>
            <div class="modal-footer justify-align-content-end">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
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
    $('#modal-info-dtv').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Nút "Change" được nhấn
        var id = button.data('id');
        var name = button.data('name');
        var email = button.data('email');
        var phone = button.data('phone');
        var review = button.data('review');
        var time = button.data('time');
        var request = button.data('request');
        var timerequest = button.data('timerequest');
        var modal = $(this);
        modal.find('input[name="id"]').val(id);
        modal.find('span[name="id"]').text(id);
        modal.find('span[name="name"]').text(name);
        modal.find('span[name="email"]').text(email);
        modal.find('span[name="phone"]').text(phone);
        modal.find('p[name="review"]').html(review);
        modal.find('span[name="time"]').text(time);
        modal.find('p[name="request"]').html(request);
        modal.find('span[name="timerequest"]').text(timerequest);
    });


    $('#search').on('input', function() {
        var search = $(this).val();
        $.ajax({
            type: 'POST',
            url: '{{ route("oldcontact.search") }}',
            data: {
                _token: '{{ csrf_token() }}',
                search: search
            },
            success: function(response) {
                var html = response.html;
                var count = response.count;
                $('#capnhat').html(html);
                $('.card-title').text('Tổng cộng: ' + count + ' đơn');
            },
            error: function(xhr, status, error) {}
        });
    });

});
</script>

@endsection