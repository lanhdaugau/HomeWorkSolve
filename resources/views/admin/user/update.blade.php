@extends('admin.layout.main')
@include('admin.layout.table')
@section('content')
<div class="content-wrapper" style="min-height: 1345.31px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="{{ route('admin.index') }}" class="btn btn-lm btn-success float-left">
                        <i class="fas fa-list-alt mr-2"></i>
                        Danh sách
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">User Admin</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.update', $userModel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">User admin form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input value="{{ $userModel->name }}" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name=" name" id="name"
                                        value="{{ old('name') }}" placeholder="Enter full name">
                                    @error('name')
                                    <span id="name" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="name">Gender</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- checkbox -->
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input {{ (old('gender')==0) ? 'checked' : '' }} value="0"
                                                        id="female"
                                                        class="form-check-input @error('gender') is-invalid @enderror"
                                                        type="radio" name="gender" {{ ($userModel->gender == 0) ?
                                                    'checked' : '' }}>
                                                    <label for="female" class="form-check-label">Female</label>
                                                    @error('gender')
                                                    <span id="name" class="error invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input {{ (old('gender')==1) ? 'checked' : '' }} value="1" id="male"
                                                    class="form-check-input" type="radio" name="gender" {{
                                                    ($userModel->gender == 1) ?
                                                'checked' : '' }}>
                                                <label for="male" class="form-check-label">Male</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" id="password" placeholder="Enter password">
                                    @error('password')
                                    <span id="password" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="birthday">Birthday</label>
                                    <input type="date" class="form-control" name="birthday" id="birthday"
                                        value="{{ date('Y-m-d', strtotime($userModel->birthday)) }}"
                                        placeholder="Enter phone">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input {{ (old('isActive')==1 ) ? 'checked' : '' }} class="custom-control-input"
                                            name="isActive" type="checkbox" id="isActive" value="1" {{
                                            ($userModel->infoLogin->isActive
                                        ==
                                        1)
                                        ? 'checked' : '' }}>
                                        <label for="isActive" class="custom-control-label">Active</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- Form Element sizes -->
                        <div class="card card-success">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="avatar">Avatar</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input name="avatar" type="file" class="custom-file-input" id="avatar">
                                            <label class="custom-file-label" for="avatar">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="preview" class="d-flex justify-content-between">
                                    @if (!empty($userModel->avatar))
                                    <div id="image-old">
                                        <div class="d-flex align-items-start flex-column">
                                            <label>Avatar(old) </label>
                                            <img style="width: 200px; height: 200px; object-fit: cover; "
                                                src="{{ $userModel->getAvatar() }}" alt="Lỗi!"
                                                class="rounded-circle  img-thumbnail preview-img" />
                                        </div>
                                    </div>
                                    @endif
                                    <div id="preview-image-new"></div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Địa chỉ</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail"
                                            placeholder="Địa chỉ" name="address"
                                            value="{{ $userModel->address }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <select id="city" name="idCity" class="form-control">
                                                <option value="">---Chọn Tỉnh/Thành---</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="district">District</label>
                                            <select id="district" name="idDistrict" class="form-control">
                                                <option value="">---Chọn Quận/Huyện---</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ward">Ward</label>
                                    <select id="ward" name="idWard" class="form-control">
                                        <option value="">---Chọn Xã/Phường---</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
            </form>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@push('script')
<script>
     getAddress({{ $userModel->idCity ?? -1}},{{$userModel->idDistrict ?? -1}},{{ $userModel->idWard ?? -1}});
        
       
</script>
<script>
        
    </script>
@if (Session::has('message'))

<script>
    toastMessageSuccess("{{ Session::get('message') }}")
</script>
@endif
@if ($errors->any())
    
@foreach ($errors->all() as $error)
<script>
$(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000
      });
  
      toastr.error('{{$error}}')
  
      
      
    });
  </script>

  @endforeach
@endif
@endpush