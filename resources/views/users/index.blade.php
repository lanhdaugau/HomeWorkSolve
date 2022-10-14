@extends('users.layout.main')
@push('css')

    @section('contents')
        <div style="background-color: rgb(231, 231, 231)">
            <h3 class="p-5 ">Các bài đăng</h3>


            @foreach ($posts as $post)
                <div class="card w-50 d-flex m-auto" style="">
                    <div class="card-image">
                        <a href="#pablo">
                            <img class="img"
                                src="{{ asset('uploads/post/' . (empty($post->getImagePost()->first()->path_image) ? '' : $post->getImagePost()->first()->path_image)) }}"
                                style="height: 400px;width: 100%">
                        </a>
                    </div>
                    <div class="card-body">
                        <a class="label label-warning" style="color: white" href="{{ route('post.detail', $post->id) }}">Chi
                            tiết</a>
                        <h5 class="card-title">
                            {{ $post->caption }}
                        </h5>
                        <hr>
                        <div class="card-footer">
                            <div class="author">
                                <a href="#pablo">
                                    <img src="{{ asset('uploads/avatar/' . (empty($post->getUser->avatar) ? 'default-avatar.png' : $post->getUser->avatar)) }}"
                                        alt="..." class="avatar img-raised">
                                    <span>{{ $post->getUser->name ? $post->getUser->name : 'User' . $post->getUser->id }}</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <br><br>
                <br>
        
        @endforeach
    </div>
    @endsection
