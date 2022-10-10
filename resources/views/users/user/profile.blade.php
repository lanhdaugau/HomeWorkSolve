@extends('users.layout.main')
@section('contents')
    <div class="wrapper">
        <div class="page-header page-header-small"
            style="background-image: url('../assets/img/sections/rodrigo-ardilha.jpg');">
            <div class="filter"></div>
        </div>
        <div class="profile-content section">
            <div class="container">
                <div class="row">
                    <div class="profile-picture">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new img-no-padding m">
                                <img src="{{ asset('uploads/avatar/' . (empty($user->avatar) ? 'default-avatar.png' : $user->avatar)) }}"
                                    alt="...">
                            </div>
                            <div class="name">
                                <h4 class="title text-center">{{ $user->name ? $user->name : 'USER' . $user->id }}<br></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based
                            Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel
                            with a solid groove structure. </p>
                        <br>
                        <btn class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Settings</btn>
                    </div>
                </div>
                <br>
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#follows" role="tab">Bài viết của
                                    bạn</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                   
                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-md-3 col-sm-6">
                                    <div class="card card-plain">

                                        <div class="card-image">
                                            <a href="{{ route('post.detail', $post->id) }}">
                                                <img src="{{ asset('uploads/post/' . (empty($post->getImagePost()->first()->path_image) ? '' : $post->getImagePost()->first()->path_image)) }}"
                                                    alt="Rounded Image" class="img-rounded img-responsive" style="height: 155px;width:255px">
                                            </a>
                                            <div class="card-body">
                                                <a href="#paper-kit">
                                                    <div class="author">
                                                        <img src="{{ asset('uploads/avatar/' . (empty($user->avatar) ? 'default-avatar.png' : $user->avatar)) }}"
                                                            alt="Circle Image"
                                                            class="img-circle img-no-padding img-responsive img-raised">
                                                    </div>
                                                    <span
                                                        class="name">{{ $user->name ? $user->name : 'USER' . $user->id }}</span>
                                                </a>
                                                <div class="meta">{{ $post->caption }}</div>
                                                <div class="float-right meta">{{ $post->created_at }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                       

                    </div>

                   
                </div>

                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                           
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#following" role="tab">Nhận xét của bạn</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    
                    <div class=" text-center" >
                        <h3 class="text-muted">Not following anyone yet :(</h3>
                        <button class="btn btn-warning btn-round">Find artists</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
