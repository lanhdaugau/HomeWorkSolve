@extends('users.layout.main')
@push('css')
    @section('title')
        Trang chủ
    @endsection
    @push('css')
        <style>
            @media(max-width: 600px) {
                .card {
                    min-height: 300px !important;
                }
            }
        </style>
    @endpush
    @section('contents')
        <div style="background-color: rgb(231, 231, 231)">
            <h3 class="p-5 ">Các bài đăng</h3>


            @foreach ($posts as $post)
                <div class="card w-50 d-flex m-auto" style="">
                    <div class="card-image">
                        <a href="#pablo">
                            <img class="img"
                                src="{{ asset('uploads/post/' . (empty($post->getImagePost()->first()->path_image) ? '' : $post->getImagePost()->first()->path_image)) }}"
                                style="width: 100%">
                        </a>
                    </div>
                    <div class="card-body">
                        <a class="label label-warning" style="color: white" href="{{ route('post.detail', $post->slug) }}">Chi
                            tiết</a>
                        <h5 class="card-title">
                            {{ $post->caption }}
                        </h5>
                        <hr>
                        <div class="card-footer">
                            <div class="author">
                                <a href="#pablo">
                                    <img src="{{ $post->getUser->getAvatar() }}"
                                        alt="..." class="avatar img-raised">
                                    <span>{{ $post->getUser->name}}</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <br><br>
                <br>
            @endforeach
            <div style="display: flex">
                <div style="margin: auto">
                    {!! $posts->appends(request()->query())->links("pagination::bootstrap-4") !!}
                </div>
               
            </div>
            
        </div>
    @endsection
