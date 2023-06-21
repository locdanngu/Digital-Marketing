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
                    <h1 class="m-0">Quản lý blog</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-3">
                <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                    data-target="#modal-add-blog"><i class="bi bi-plus-circle-fill"></i> Tạo Blog mới</button>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tổng cộng : {{ $count }} bài viết</h3>
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
                                    <th>ID blog</th>
                                    <th>Ảnh nền</th>
                                    <th>Tiêu đề</th>
                                    <th>Nội dung</th>
                                    <th>Thời gian</th>
                                    <th>Thể loại</th>
                                    <th>Lượt xem</th>
                                    <th>Người đăng</th>
                                    <th>Avatar</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="capnhat">
                                @foreach($listblog as $lb)
                                <tr>
                                    <td>{{ $lb->idblog }}</td>
                                    <td><img src="{{ $lb->imageblog }}" class="fixanhnen"></td>
                                    <td>{{ $lb->title }}</td>
                                    @if(strlen($lb->content) > 40)
                                    <td>{!! substr($lb->content, 0, 40) !!}...</td>
                                    @else
                                    <td>{!! $lb->content !!}</td>
                                    @endif
                                    <td>{{ $lb->timeread }}</td>
                                    <td>{{ $lb->category }}</td>
                                    <td>{{ $lb->read }}</td>
                                    <td>{{ $lb->user->name }}</td>
                                    <td><img src="{{ $lb->user->avatar }}" class="lamtronavatar"></td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-primary btn-sm" type="button" data-toggle="modal"
                                                data-target="#modal-change-blog" data-id="{{ $lb->idblog }}"
                                                data-title="{{ $lb->title }}" data-content="{{$lb->content}}"
                                                data-timeread="{{ $lb->timeread }}"
                                                data-imageblog="{{ $lb->imageblog }}"
                                                data-category="{{ $lb->category }}" data-read="{{ $lb->read }}">
                                                <i class="bi bi-pencil"></i>
                                                Sửa
                                            </button>
                                            <button class="btn btn-danger btn-sm" type="button" data-toggle="modal"
                                                data-target="#modal-delete-blog" data-id="{{ $lb->idblog }}"
                                                data-title="{{ $lb->title }}" data-content="{!! nl2br($lb->content) !!}"
                                                data-timeread="{{ $lb->timeread }}"
                                                data-imageblog="{{ $lb->imageblog }}"
                                                data-category="{{ $lb->category }}" data-read="{{ $lb->read }}">
                                                <i class="bi bi-trash"></i>
                                                Xóa
                                            </button>
                                        </div>
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
<div class="modal fade" id="modal-add-blog">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('blog.add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Tạo bài viết</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tiêu đề</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="title">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nội dung</span>
                    <textarea type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="content" id="TinyMCE"></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Thời gian đọc</span>
                    <input type="number" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="timeread">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Thể loại</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="category">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Ảnh nền</span>
                    <input class="form-control" type="file" id="formFile" accept="image/*" style="max-width:100%"
                        onchange="previewImage(event)" name="image" required>
                </div>
                <img id="preview" src="" alt="" style="max-width:30%;margin-bottom:1em">
            </div>
            <div class="modal-footer justify-align-content-end">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Đăng tải</button>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<div class="modal fade" id="modal-change-blog">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('blog.change') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Chỉnh sửa bài viết</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" name="id">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tiêu đề</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="title">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nội dung</span>
                    <textarea type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="content" id="TinyMCE2"></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Thời gian đọc</span>
                    <input type="number" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="timeread">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Thể loại</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" required name="category">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Lượt xem</span>
                    <span name="read" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Ảnh nền</span>
                    <input class="form-control" type="file" id="formFile" accept="image/*" style="max-width:100%"
                        onchange="previewImage2(event)" name="image" required>
                </div>
                <img id="preview2" src="" alt="" style="max-width:30%;margin-bottom:1em" class="imageblog">
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


<div class="modal fade" id="modal-delete-blog">
    <div class="modal-dialog">
        <form class="modal-content" action="{{ route('blog.delete') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Xóa bài viết</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" name="id">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tiêu đề</span>
                    <span name="title" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nội dung</span>
                    <p name="content" class="spanpopup" style="margin-bottom:0 !important"></p>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Thời gian đọc</span>
                    <span name="timeread" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Thể loại</span>
                    <span name="category" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Lượt xem</span>
                    <span name="read" class="spanpopup"></span>
                </div>
                <div class="input-group mb-3 d-flex align-items-center">
                    <span class="input-group-text" id="inputGroup-sizing-default">Ảnh nền</span>
                    <img id="preview2" src="" alt="" style="max-width:30%;margin-bottom:1em;margin-left:1em"
                        class="imageblog">
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
<script src="https://cdn.tiny.cloud/1/bw2qjgtrkbjqf50ujabs5olg0b4cue44r0pb3cg7fp98oii2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>


// Khởi tạo TinyMCE cho tất cả các textarea
tinymce.init({
  selector: 'textarea',
  // Cấu hình TinyMCE tùy ý
});
</script>
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
    $('#modal-change-blog').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Nút "Change" được nhấn
        var id = button.data('id');
        var title = button.data('title');
        var content = button.data('content');
        var timeread = button.data('timeread');
        var imageblog = button.data('imageblog');
        var category = button.data('category');
        var read = button.data('read');
        var modal = $(this);
        modal.find('span[name="read"]').text(read);
        modal.find('input[name="category"]').val(category);
        modal.find('input[name="id"]').val(id);
        modal.find('input[name="title"]').val(title);
        // modal.find('textarea[name="content"]').val(content);
        tinymce.get('TinyMCE2').setContent(content);
        modal.find('input[name="timeread"]').val(timeread);
        modal.find('img.imageblog').attr('src', imageblog);
    });

    $('#modal-delete-blog').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Nút "Change" được nhấn
        var id = button.data('id');
        var title = button.data('title');
        var content = button.data('content');
        var timeread = button.data('timeread');
        var imageblog = button.data('imageblog');
        var category = button.data('category');
        var read = button.data('read');
        var modal = $(this);
        modal.find('span[name="read"]').text(read);
        modal.find('span[name="category"]').text(category);
        modal.find('input[name="id"]').val(id);
        modal.find('span[name="title"]').text(title);
        modal.find('p[name="content"]').html(content);
        modal.find('span[name="timeread"]').text(timeread);
        modal.find('img.imageblog').attr('src', imageblog);
    });


    $('#search').on('input', function() {
        var search = $(this).val();
        $.ajax({
            type: 'POST',
            url: '{{ route("findblog.search") }}',
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