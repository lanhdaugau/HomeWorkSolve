@extends('admin.layout.main')
@include('admin.layout.table')
@section('content')
<div class="content-wrapper" style="min-height: 1604.44px;">
    <!-- Content Header (Page header) -->
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
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" style="width: 250px; height:250px"
                                    src="{{ asset('storage/users-avatar').'/'. ($userModel->avatar)?? 'avatar.png' }}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">
                                {{ $userModel->name ?? ''}}
                            </h3>

                            <h4 class="text-muted text-center">
                                <span class="badge badge-pill badge-info">{{ $userModel->gender() ?? ''}}</span>
                            </h4>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Role</b>
                                    <a class="float-right">
                                        <span class='badge badge-pill badge-dark'>{{ $userModel->infoLogin->role()
                                            }}</span>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Status</b>
                                    <a class="float-right">
                                        @if ($userModel->infoLogin->isActive == 1)
                                        <span class='badge badge-pill badge-success'>Actived</span>
                                        @else
                                        <span class='badge badge-pill badge-danger'>Not Actived</span>
                                        @endif
                                    </a>
                                </li>
                            </ul>

                            <a href="{{ url()->previous() }}" class="btn btn-primary btn-block"><b>Back</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-birthday-cake mr-2"></i> Birthday</strong>

                            <p class="text-muted">
                                {{ date('d-m-Y', strtotime($userModel->birthday)) }}
                            </p>

                            <hr>

                            <strong><i class="fas fa-envelope mr-2"></i> Email</strong>

                            <p class="text-muted">{{ $userModel->infoLogin->email }}</p>

                            <hr>

                            <strong><i class="fas fa-phone-square-alt mr-2"></i> Phone</strong>

                            <p class="text-muted">{{substr($userModel->infoLogin->phone, 0, 4) . '.' .
                                substr($userModel->infoLogin->phone,
                                4, 3) . '.' . substr($userModel->infoLogin->phone, 7)}}</p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-2"></i> Address</strong>

                            <p class="text-muted" id="address"></p>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@push('script')
<script>
    getFullAddress('address', '{{$userModel->address}}', {{$userModel->idWard}}, {{$userModel->idDistrict}}, {{$userModel->idCity}})
</script>
@endpush