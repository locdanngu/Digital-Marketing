@extends('admin.Adminlayout')

@section('title', 'Admin Viral Video')
<!-- Content Wrapper. Contains page content -->
@section('body')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý Viral video</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-3">
                <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                    data-target="#modal-add-video"><i class="bi bi-plus-circle-fill"></i> Tạo thông tin quảng
                    cáo</button>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tổng cộng : {{ $count }} quảng cáo</h3>
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
                                    <th>Tên quảng cáo</th>
                                    <th>Ảnh quảng cáo</th>
                                    <th>Nội dung quảng cáo</th>
                                    <th>Lượt Like</th>
                                    <th>Lượt bình luận</th>
                                    <th>Lượt chia sẻ</th>
                                    <th>Ngày đăng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="capnhat">
                                @foreach($listvideo as $vd)
                                <tr>
                                    <td>{{ $vd->namevideo }}</td>
                                    <td><img src="{{ $vd->imgvideo }}" class="fixanhnen"></td>
                                    <td>{{ $vd->contentvideo }}</td>
                                    <td>{{ $vd->like }} tr</td>
                                    <td>{{ $vd->comment }} tr</td>
                                    <td>{{ $vd->share }} tr</td>
                                    <td>{{ $vd->created_at }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                                            data-target="#modal-change-video" data-id="{{ $vd->idvd }}"
                                            data-name="{{ $vd->namevideo }}" data-content="{{ $vd->contentvideo }}"
                                            data-like="{{ $vd->like }}" data-comment="{{ $vd->comment }}"
                                            data-share="{{ $vd->share }}" data-img="{{ $vd->imgvideo }}">
                                            <i class="bi bi-pencil"></i>
                                            Sửa
                                        </button>
                                        <button class="btn btn-danger btn-sm" type="button" data-toggle="modal"
                                            data-target="#modal-delete-video" data-id="{{ $vd->idvd }}"
                                            data-name="{{ $vd->namevideo }}" data-content="{{ $vd->contentvideo }}"
                                            data-like="{{ $vd->like }}" data-comment="{{ $vd->comment }}"
                                            data-share="{{ $vd->share }}" data-img="{{ $vd->imgvideo }}">
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
<div class="modal fade" id="modal-add-video">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('video.add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Tạo liên kết thương hiệu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tên quảng cáo</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nội dung video</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="content">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Lượt Like</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="like">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Lượt Comment</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="comment">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Lượt Share</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="share">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Ảnh quảng cáo</span>
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


<div class="modal fade" id="modal-change-video">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('video.change') }}" method="post" enctype="multipart/form-data">
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
                    <span class="input-group-text" id="inputGroup-sizing-default">Tên quảng cáo</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nội dung video</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="content">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Lượt Like</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="like">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Lượt Comment</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="comment">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Lượt Share</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="share">
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


<div class="modal fade" id="modal-delete-video">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('video.delete') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Xóa quảng cáo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" name="id">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tên quảng cáo</span>
                    <span name="name" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nội dung video</span>
                    <span name="content" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Like</span>
                    <span name="like" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Comment</span>
                    <span name="comment" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Share</span>
                    <span name="share" class="spanpopup"></span>
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
    $('#modal-change-video').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Nút "Change" được nhấn
        var id = button.data('id');
        var name = button.data('name');
        var image = button.data('img');
        var content = button.data('content');
        var like = button.data('like');
        var comment = button.data('comment');
        var share = button.data('share');
        var modal = $(this);
        modal.find('input[name="name"]').val(name);
        modal.find('input[name="id"]').val(id);
        modal.find('input[name="content"]').val(content);
        modal.find('input[name="like"]').val(like);
        modal.find('input[name="comment"]').val(comment);
        modal.find('input[name="share"]').val(share);
        modal.find('img.image').attr('src', image);
    });

    $('#modal-delete-video').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Nút "Change" được nhấn
        var id = button.data('id');
        var name = button.data('name');
        var image = button.data('img');
        var content = button.data('content');
        var like = button.data('like');
        var comment = button.data('comment');
        var share = button.data('share');
        var modal = $(this);
        modal.find('span[name="name"]').text(name);
        modal.find('input[name="id"]').val(id);
        modal.find('span[name="content"]').text(content);
        modal.find('span[name="like"]').text(like);
        modal.find('span[name="comment"]').text(comment);
        modal.find('span[name="share"]').text(share);
        modal.find('img.image').attr('src', image);
    });


    $('#search').on('input', function() {
        var search = $(this).val();
        $.ajax({
            type: 'POST',
            url: '{{ route("video.find") }}',
            data: {
                _token: '{{ csrf_token() }}',
                search: search
            },
            success: function(response) {
                var html = response.html;
                var count = response.count;
                $('#capnhat').html(html);
                $('.card-title').text('Tổng cộng: ' + count + ' quảng cáo');
            },
            error: function(xhr, status, error) {}
        });
    });

});
</script>

@endsection