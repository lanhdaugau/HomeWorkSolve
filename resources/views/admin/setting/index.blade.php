@extends('admin.layout.main')
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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                                        src="{{$admin->getAvatar()}}" alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">{{$admin->name}}</h3>
                                <p class="text-muted text-center">Người quản trị</p>
                               
                            </div>

                        </div>



                    </div>

                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link">Thông tin</a>
                                    </li>
                                    <li class="float-right"> <a href="{{ route('admin.resetPassAdmin') }}" class="btn btn-warning"> Thay đổi mật khẩu</a></li>
                                    
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <div class="tab-pane" id="settings">
                                        <form class="form-horizontal" method="POST"
                                            action="{{ route('admin.updateadmin') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputName" name="name"
                                                        placeholder="Họ và tên" value="{{$admin->name}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-check-label">
                                                    <input type="radio" name="gender" class="p-2 m-2"
                                                    @checked($admin->gender === 1 ? true : false) value="1">
                                                    Nam
                                                    <span class="form-check-sign"></span>
                                                </label>

                                                <label class="form-check-label">
                                                    <input type="radio" name="gender" class="p-2 m-2"
                                                    @checked($admin->gender === 0 ? true : false)  value="0">
                                                    Nữ
                                                    <span class="form-check-sign"></span>
                                                </label>


                                            </div>

                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Ngày sinh</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control" id="inputEmail"
                                                        placeholder="Ngày sinh" name="birthday"
                                                        value="{{$admin->birthday}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Địa chỉ</label>
                                                <div class="col-sm-10">
                                                    <textarea type="text" class="form-control" id="inputEmail"
                                                        placeholder="Địa chỉ" name="address"
                                                        >{{ $admin->address }} </textarea>
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
    getFullAddress('address', '{{ $admin->address }}', {{ $admin->idWard }}, {{ $admin->idDistrict }},
        {{ $admin->idCity }});
    getAddress({{ $admin->idCity ?? -1 }}, {{ $admin->idDistrict ?? -1 }}, {{ $admin->idWard ?? -1 }});
</script>
@if (Session::has('message'))

<script>
    toastMessageSuccess("{{ Session::get('message') }}")
</script>
@endif
@endpush
