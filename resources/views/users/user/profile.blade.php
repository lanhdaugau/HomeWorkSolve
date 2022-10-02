@extends('users.layouts.main')
@section('contents')
<div class="wrapper">
    <div class="page-header page-header-small" style="background-image: url('../assets/img/sections/rodrigo-ardilha.jpg');">
        <div class="filter"></div>
    </div>
    <div class="profile-content section">
        <div class="container">
            <div class="row">
                <div class="profile-picture">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new img-no-padding">
                            <img src="{{ asset('assets') }}/img/faces/joe-gardner-2.jpg" alt="...">
                        </div>
                        <div class="name">
                            <h4 class="title text-center">Chet Faker<br><small>Music Producer</small></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                    <br>
                    <btn class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Settings</btn>
                </div>
            </div>
            <br>
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#follows" role="tab">Follows</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#following" role="tab">Following</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="follows" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <ul class="list-unstyled follows">
                                <li>
                                    <div class="row">
                                        <div class="col-md-2 col-3">
                                            <img src="{{ asset('asset') }}/img/faces/clem-onojeghuo-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                        <div class="col-md-7 col-4">
                                            <h6>Lincoln<br><small>Car Producer</small></h6>
                                        </div>
                                        <div class="col-md-3 col-2">
                                            <div class="unfollow">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="" checked="">
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <hr>
                                <li>
                                    <div class="row">
                                        <div class="col-md-2 col-3">
                                            <img src="{{ asset('asset') }}/img/faces/erik-lucatero-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                        <div class="col-md-7 col-4">
                                            <h6>Banks<br><small>Singer</small></h6>
                                        </div>
                                        <div class="col-md-3 col-2">
                                            <div class="unfollow">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane text-center" id="following" role="tabpanel">
                    <h3 class="text-muted">Not following anyone yet :(</h3>
                    <button class="btn btn-warning btn-round">Find artists</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection