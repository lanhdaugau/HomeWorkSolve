@extends('users.layout.main')
@section('title')
    Cài đặt
@endsection
@section('contents')
    <div class="wrapper">
        <div class="page-header page-header-xs settings-background"
            style="background-image: url('../assets/img/sections/joshua-earles.jpg');">
            <div class="filter"></div>
        </div>
       
        <div class="profile-content section">
            <div class="container">
                <div class="row">
                    
                </div>
                <div class="row">
                   
                    <div class="col-md-6 ml-auto mr-auto">
                        <form class="settings-form" method="POST" action="{{route('user.setting')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="profile-picture">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new img-no-padding">
                                        <img src="{{ $user->getAvatar()}}" alt="...">
                                    </div>
                                    
                                    <div class="fileinput-preview fileinput-exists img-no-padding"></div>
                                    <div>
                                        <span class="btn btn-outline-default btn-file btn-round"><span class="fileinput-new">Sửa ảnh đại diện</span><span class="fileinput-exists">Thay đổi</span>
                                                <input type="file"
                                                name="avatar"></span>
                                        <br>
                                        <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists"
                                            data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Họ và tên</label>
                                        <input type="text" class="form-control border-input" placeholder="Họ và tên"
                                            value="{{ $user->name }}" name="name">
                                    </div>
                                </div>


                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control border-input" disabled
                                    value="{{ $user->email }}" name="email">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control border-input" value="{{ $user->phone }}" name="phone">
                            </div>
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label class="form-check-label">
                                    <input type="radio" name="gender" class="p-2 m-2" @checked(($user->gender==1 && $user->gender!=null ) ? true : false) value="1">
                                    Nam
                                    <span class="form-check-sign"></span>
                                </label>

                                <label class="form-check-label">
                                    <input type="radio" name="gender" class="p-2 m-2" @checked(($user->gender==0 ) ? true : false) value="0">
                                    Nữ
                                    <span class="form-check-sign"></span>
                                </label>


                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <div style="width: 48%">
                                    <label for="city">Tình</label>
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
                            <div class="form-group">
                                <label >Địa chỉ cụ thể</label>
                                <input type="text" class="form-control" name="address" value="{{ $user->address}}">
                            </div>
                            <div class="form-group">
                                <label for="ward">Ngày sinh</label>
                                <div class="input-group date">
                                    <input type="date" class="form-control" placeholder="06/07/2017" name="birthday" value="{{ $user->birthday}}">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            

                            
                            <div class="">
                                <button type="submit" class="btn btn-wd btn-info btn-round" style="margin-left: 50%;transform: translateX(-50%)">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        getAddress({{ $user->idCity ?? -1}},{{$user->idDistrict ?? -1}},{{ $user->idWard ?? -1}});
    </script>
    @if (Session::has('message'))
  
    
     <script>
        $(function() {
          var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });
      
          toastr.success("{{ Session::get('message') }}")
      
          
          
        });
      </script>
    @endif
    
@endpush
