@extends('admin.layout.main')
@include('admin.layout.table')
@section('content')
    <div class="content-wrapper" style="min-height: 1604.44px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ $userModel->getAvatar()  }}"
                                        alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">{{ $userModel->name }}</h3>
                                <p class="text-muted text-center"></p>
                                {{-- <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Followers</b> <a class="float-right">1,322</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Following</b> <a class="float-right">543</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Friends</b> <a class="float-right">13,287</a>
                                    </li>
                                </ul> --}}
                                {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                            </div>

                        </div>


                        {{-- <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Thông tin</h3>
                            </div>

                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Education</strong>
                                <p class="text-muted">
                                    B.S. in Computer Science from the University of Tennessee at Knoxville
                                </p>
                                <hr>
                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                                <p class="text-muted">Malibu, California</p>
                                <hr>
                                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                                <p class="text-muted">
                                    <span class="tag tag-danger">UI Design</span>
                                    <span class="tag tag-success">Coding</span>
                                    <span class="tag tag-info">Javascript</span>
                                    <span class="tag tag-warning">PHP</span>
                                    <span class="tag tag-primary">Node.js</span>
                                </p>
                                <hr>
                                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                    fermentum enim neque.</p>
                            </div>

                        </div> --}}

                    </div>

                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Các
                                            đánh giá</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Bài viết</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Thông
                                            tin</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="activity">
                                        @foreach ($reacts as $react)
                                            <div class="post">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm"
                                                        src="{{ $react->getUser->getAvatar() }}"
                                                        alt="user image">
                                                    <span class="username">
                                                        <a href="#">{{ $react->getUser->name }}</a>

                                                    </span>
                                                    <span
                                                        class="description">{{ $react->created_at->diffForHumans() }}</span>
                                                </div>

                                                <p>
                                                    Nội dung: {{ $react->content }}
                                                    <br>
                                                    Đánh giá:
                                                    @for ($i = 0; $i < $react->rating; $i++)
                                                        <i class="fa fa-star" style="color:rgb(255, 230, 0)"
                                                            aria-hidden="true"></i>
                                                    @endfor
                                                </p>

                                                <p>

                                                    <a href="#" class="link-black text-sm btn btn-danger"
                                                        style="color: white">Xóa</a>

                                                </p>

                                            </div>
                                        @endforeach






                                    </div>

                                    <div class="tab-pane" id="timeline">

                                        @foreach ($posts as $post)
                                            <div class="post">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm"
                                                        src="{{ asset('storage/users-avatar') . '/' . ($post->getUser->avatar ?? 'avatar.png') }}"
                                                        alt="user image">
                                                    <span class="username">
                                                        <a href="#">{{ $post->getUser->name }}</a>

                                                    </span>
                                                    <span
                                                        class="description">{{ $post->created_at->diffForHumans() }}</span>
                                                </div>

                                                <p>
                                                    Tiêu đề: {{ $post->caption }}
                                                    <br>
                                                    Nội dung : {!! $post->content !!}

                                                </p>
                                                <div class="image">
                                                    <img src="{{ asset('uploads/post/' . (empty($post->getImagePost()->first()->path_image) ? '' : $post->getImagePost()->first()->path_image)) }}"
                                                        alt="">
                                                </div>
                                                <br>
                                                <div class="timeline-footer">
                                                    <a href="{{ route('post.detail', $post->slug) }}"
                                                        class="btn btn-primary btn-sm">Xem thêm</a>

                                                </div>

                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="tab-pane" id="settings">
                                        <form class="form-horizontal" method="POST"
                                            action="{{ route('admin.update', $userModel->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputName" name="name"
                                                        placeholder="Họ và tên" value="{{ $userModel->name }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-check-label">
                                                    <input type="radio" name="gender" class="p-2 m-2"
                                                        @checked($userModel->gender == 1 && $userModel->gender != null ? true : false) value="1">
                                                    Nam
                                                    <span class="form-check-sign"></span>
                                                </label>

                                                <label class="form-check-label">
                                                    <input type="radio" name="gender" class="p-2 m-2"
                                                        @checked($userModel->gender == 0 ? true : false) value="0">
                                                    Nữ
                                                    <span class="form-check-sign"></span>
                                                </label>


                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Ngày sinh</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control" id="inputEmail"
                                                        placeholder="Ngày sinh" name="birthday"
                                                        value="{{ $userModel->birthday }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Địa chỉ</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputEmail"
                                                        placeholder="Địa chỉ" name="address"
                                                        value="{{ $userModel->address }}">
                                                </div>  
                                            </div>
                                            <div class="form-group d-flex justify-content-between">
                                                <div style="width: 48%">
                                                    <label for="city">Tỉnh</label>
                                                    <select class="form-control" name="idCity" id="city">
                                                        <option value="">--Chọn Tỉnh/Thành---</option>
                                                    </select>
                                                </div>
                                                <div style="width: 48%">
                                                    <label for="district">Huyện</label>
                                                    <select class="form-control" name="idDistrict" id="district">
                                                        <option value="">--Chọn Quận/Huyện---</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="ward">Xã</label>
                                                <select class="form-control" name="idWard" id="ward">
                                                    <option value="">--Chọn Xã/Phường---</option>
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Thay đổi</button>
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>
@endsection
@push('script')
    <script>
        getAddress({{ $userModel->idCity ?? -1 }}, {{ $userModel->idDistrict ?? -1 }}, {{ $userModel->idWard ?? -1 }});

        
        </script>  
    @if (Session::has('message'))
        
        <script>
            toastMessageSuccess("{{ Session::get('message') }}")
        </script>
    @endif
@endpush
