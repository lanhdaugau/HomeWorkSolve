@extends('admin.layout.main')
@include('admin.layout.table')
@section('content')
    <div class="content-wrapper" style="min-height: 2209.06px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Bài viết</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Project Detail</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Quản trị bài viết</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                       
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="info-box bg-light">
                                        <div class="info-box-content">
                                            <span class="info-box-text text-center text-muted">Tổng các bài đăng</span>
                                            <span class="info-box-number text-center text-muted mb-0">{{count($posts)}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 " >
                                    <div class="info-box bg-light ">
                                        <div class="info-box-content">
                                            <span class="info-box-text text-center text-muted">Tổng các bình luận</span>
                                            <span class="info-box-number text-center text-muted mb-0">
                                          
                                            {{count($comments)}}
                                            
                                                
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                       
                            </div>
                            <div class="row">
                                <div class="col-12 px-5">
                                    <h4>Bài đăng gần đây</h4>

                                @foreach ($posts as $post)
                                
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="{{ $post->getUser->getAvatar() }}"
                                            alt="user image" >
                                        <span class="username">
                                            <a href="#">{{$post->getUser->name}}</a>
                                        </span>
                                        <span class="description">{{$post->created_at->diffForHumans()}}</span>
                                    </div>

                                    <h5>
                                        {{$post->caption}}
                                    </h5>
                                    <p>
                                        {!!$post->content!!}
                                    </p>
                                    
                                    
                                    <div class="image">
                                        <a href="{{ asset('storage/uploads/post/' . (empty($post->getImagePost()->first()->path_image) ? '' : $post->getImagePost()->first()->path_image)) }}" data-toggle="lightbox" data-title="sample 9 - red">
                                           
                                          
                                        <img class="img-fluid mb-2" alt="red sample" src="{{ asset('storage/uploads/post/' . (empty($post->getImagePost()->first()->path_image) ? '' : $post->getImagePost()->first()->path_image)) }}" alt="" style="width: 25vw;height: auto;">
                                    </a>
                                    </div>
                                    <br>
                                    <p>
                                        <a href="{{ route('post.detail', $post->slug) }}" class="link-black text-sm btn btn-warning" style="color: white"><i class="fas fa-link mr-1"></i>
                                            Xem chi tiết</a>
                                    </p>
                                </div>
                                @endforeach
                                    
                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>

        </section>

    </div>
@endsection
