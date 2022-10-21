@extends('users.layout.main')
@push('title')
    Sửa bài viết
@endpush
@push('css')
    <style>
        .img-div {
            position: relative;
            width: 100%;
            float: left;
            margin-right: 5px;
            margin-left: 5px;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            max-width: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .img-div:hover .image {
            opacity: 0.3;
        }

        .img-div:hover .middle {
            opacity: 1;
        }

        #image_preview {
            /* display: flex;
                    flex-wrap: wrap; */
        }

        .d-none {
            display: none;
        }
    </style>
@endpush
@section('contents')
    <div class="wrapper">
        <div class="main">
            <div class="section">
                <div class="container">
                    <h3>Thêm bài viết</h3>

                    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-5 col-sm-5">
                                <h6>Hình ảnh</h6>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3">
                                            <div class="panel panel-primary">

                                                <div class="panel-body">

                                                    <div class="form-group">
                                                        <label for="images">Thêm ảnh</label>
                                                        <input type="file" name="images[]" id="images" multiple
                                                            class="form-control" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <div id="image_preview">

                                                            @foreach ($post->getImagePost as $item)
                                                                <div class='img-div' id='img-div{{ $item->id }}'>
                                                                    <img src='{{ asset('uploads/post/' . (empty($item->path_image) ? '' : $item->path_image)) }}'
                                                                        class='img-responsive image img-thumbnail'>
                                                                    <input type="checkbox" name="image[]"
                                                                        class="checkDelete" value="{{ $item->id }}"
                                                                        id="imageDelete{{ $item->id }}" style="display:none">
                                                                    <div class="middle"><label 
                                                                            class="btn btn-danger"
                                                                            for="imageDelete{{ $item->id }}"><i
                                                                                class="fa fa-trash"></i></label>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7 col-sm-7">
                                <div class="form-group">
                                    <h6>Tiêu đề</h6>
                                    <input type="text" name="caption" id="caption" class="form-control"
                                        value="{{ $post->caption }}">
                                </div>
                                <div class="form-group">
                                    <h6>Nội dung</h6>
                                    <textarea class="form-control textarea-limited" placeholder="This is a textarea limited to 150 characters."
                                        rows="13" ,="" maxlength="150" name="content" id="content">{!! $post->content !!}</textarea>
                                    <h5><small><span id="textarea-limited-message" class="pull-right">150 characters
                                                left</span></small></h5>

                                </div>

                            </div>
                        </div>
                        <br>

                        <div class="row buttons-row">
                            <div class="col-md-4 col-sm-4">
                                <a class="btn btn-outline-danger btn-block btn-round"
                                    href="{{ url()->previous() }}">Cancel</a>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <button class="btn btn-outline-primary btn-block btn-round" name="button"
                                    value="save">Save</button>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <button class="btn btn-primary btn-block btn-round" name="button" value="publish"
                                    type="submit">Save
                                    &amp; Publish </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="{{ asset('/ckeditor') }}/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('content');
        </script>
        <script>
            $(document).ready(function() {
                var fileArr = [];
                $("#images").change(function() {
                    // check if fileArr length is greater than 0
                    if (fileArr.length > 0) fileArr = [];

                    // $('#image_preview').html("");
                    var total_file = document.getElementById("images").files;
                    if (!total_file.length) return;
                    for (var i = 0; i < total_file.length; i++) {
                        if (total_file[i].size > 1048576) {
                            return false;
                        } else {
                            fileArr.push(total_file[i]);
                            $('#image_preview').append("<div class='img-div' id='img-div" + i + "'><img src='" +
                                URL.createObjectURL(event.target.files[i]) +
                                "' class='img-responsive image img-thumbnail' title='" + total_file[i]
                                .name + "'><div class='middle'><button id='action-icon' value='img-div" +
                                i + "' class='btn btn-danger' role='" + total_file[i].name +
                                "'><i class='fa fa-trash'></i></button></div></div>");
                        }
                    }
                });

                $('body').on('click', '#action-icon', function(evt) {
                    var divName = this.value;
                    var fileName = $(this).attr('role');
                    $(`#${divName}`).remove();

                    for (var i = 0; i < fileArr.length; i++) {
                        if (fileArr[i].name === fileName) {
                            fileArr.splice(i, 1);
                        }
                    }
                    document.getElementById('images').files = FileListItem(fileArr);
                    evt.preventDefault();
                });

                function FileListItem(file) {
                    file = [].slice.call(Array.isArray(file) ? file : arguments)
                    for (var c, b = c = file.length, d = !0; b-- && d;) d = file[b] instanceof File
                    if (!d) throw new TypeError("expected argument to FileList is File or array of File objects")
                    for (b = (new ClipboardEvent("")).clipboardData || new DataTransfer; c--;) b.items.add(file[c])
                    return b.files
                }
            });
        </script>
        <script>
            $(document).ready(function() {

                const checkbox = $('input[type=checkbox]');

                checkbox.change(function(event) {
                    var checkbox = event.target;
                    if (checkbox.checked) {
                        $('#img-div' + checkbox.value).addClass('d-none');

                    }
                });
            });
        </script>
    @endpush
@endsection
