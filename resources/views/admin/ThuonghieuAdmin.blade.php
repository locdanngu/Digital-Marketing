@extends('admin.Adminlayout')

@section('title', 'Admin Trade Mark')
<!-- Content Wrapper. Contains page content -->
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý thương hiệu</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-3">
                <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                    data-target="#modal-add-trade"><i class="bi bi-plus-circle-fill"></i> Kết nối với thương hiệu
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
                        <h3 class="card-title">Tổng cộng : {{ $count }} thương hiệu</h3>
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
                                    <th>Tên thương hiệu</th>
                                    <th>Ảnh thương hiệu</th>
                                    <th>Ngày liên kết</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="capnhat">
                                @foreach($listthuonghieu as $lth)
                                <tr>
                                    <td>{{ $lth->tenthuonghieu }}</td>
                                    <td><img src="{{ $lth->anhthuonghieu }}" class="fixanhnen"></td>
                                    <td>{{ $lth->created_at }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                                            data-target="#modal-change-trade" data-id="{{ $lth->idth }}"
                                            data-name="{{ $lth->tenthuonghieu }}" data-img="{{ $lth->anhthuonghieu }}">
                                            <i class="bi bi-pencil"></i>
                                            Sửa
                                        </button>
                                        <button class="btn btn-danger btn-sm" type="button" data-toggle="modal"
                                            data-target="#modal-delete-trade" data-id="{{ $lth->idth }}"
                                            data-name="{{ $lth->tenthuonghieu }}" data-img="{{ $lth->anhthuonghieu }}">
                                            <i class="bi bi-trash"></i> Xóa
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
<div class="modal fade" id="modal-add-trade">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('trade.add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Tạo liên kết thương hiệu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tên thương hiệu</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Ảnh thương hiệu</span>
                    <input class="form-control" type="file" id="formFile" accept="image/*" style="max-width:100%"
                        onchange="previewImage(event)" name="image" required>
                </div>
                <img id="preview" src="" alt="" style="max-width:30%;margin-bottom:1em">
            </div>
            <div class="modal-footer justify-align-content-end">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<div class="modal fade" id="modal-change-trade">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('trade.change') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Chỉnh sửa thương hiệu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" name="id">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tên thương hiệu</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Ảnh thương hiệu</span>
                    <input class="form-control" type="file" id="formFile" accept="image/*" style="max-width:100%"
                        onchange="previewImage2(event)" name="image" required>
                </div>
                <img id="preview2" src="" alt="" style="max-width:30%;margin-bottom:1em" class="image">
            </div>
            <div class="modal-footer justify-align-content-end">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Hoàn tất</button>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<div class="modal fade" id="modal-delete-trade">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('trade.delete') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Xóa liên kết thương hiệu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" name="id">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tên thương hiệu</span>
                    <span name="name" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3 d-flex align-items-center">
                    <span class="input-group-text" id="inputGroup-sizing-default">Ảnh thương hiệu</span>
                    <img id="preview2" src="" alt="" style="max-width:30%;margin-bottom:1em;margin-left:1em"
                        class="image">
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
function previewImage(event) {
    const preview = document.getElementById('preview');
    const file = event.target.files[0];
    const reader = new FileReader();
    reader.onload = function() {
        preview.src = reader.result;
    }
    reader.readAsDataURL(file);
}

function previewImage2(event) {
    const preview = document.getElementById('preview2');
    const file = event.target.files[0];
    const reader = new FileReader();
    reader.onload = function() {
        preview.src = reader.result;
    }
    reader.readAsDataURL(file);
}

$(document).ready(function() {
    $('#modal-change-trade').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Nút "Change" được nhấn
        var id = button.data('id');
        var name = button.data('name');
        var image = button.data('img');
        var modal = $(this);
        modal.find('input[name="name"]').val(name);
        modal.find('input[name="id"]').val(id);
        modal.find('img.image').attr('src', image);
    });

    $('#modal-delete-trade').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Nút "Change" được nhấn
        var id = button.data('id');
        var name = button.data('name');
        var image = button.data('img');
        var modal = $(this);
        modal.find('span[name="name"]').text(name);
        modal.find('input[name="id"]').val(id);
        modal.find('img.image').attr('src', image);
    });


    $('#search').on('input', function() {
        var search = $(this).val();
        $.ajax({
            type: 'POST',
            url: '{{ route("trade.find") }}',
            data: {
                _token: '{{ csrf_token() }}',
                search: search
            },
            success: function(response) {
                var html = response.html;
                var count = response.count;
                $('#capnhat').html(html);
                $('.card-title').text('Tổng cộng: ' + count + ' thương hiệu');
            },
            error: function(xhr, status, error) {}
        });
    });

});
</script>

@endsection