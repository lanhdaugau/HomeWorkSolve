@if (count($comments) > 0)
    @foreach ($comments as $comment)
        <div class="media comment-{{ $comment->id }}"
            style="border-bottom: 0;margin-top: 0;padding-bottom: 15px;position: relative;min-width:650px">
            <a class="pull-left" href="#paper-kit">
                <div class="avatar">
                    <img class="media-object"
                        src="{{ asset('storage/users-avatar/' . (empty($comment->getUser->avatar) ? 'avatar.png' : $comment->getUser->avatar)) }}"
                        alt="..." onclick="window.open('{{ route('detail', $comment->getUser->id) }}','_self')">
                </div>
            </a>
            <div class="media-body">
                <h5 class="media-heading">
                    {{ $comment->getUser->name ? $comment->getUser->name : 'User' . $comment->getUser->id }}
                </h5>
                <div class="">
                    <h6 class="text-muted" style="font-size: x-small">{{ $comment->created_at->diffForHumans() }}</h6>




                </div>
                <p>{{ $comment->content }}
                </p>
                <div class="media-footer">
                    <a href="{{ route('like', $comment->id) }}"
                        class="btn btn-link 
            {{ $comment->checkUserLike() ? 'btn-danger' : '' }}
            ">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        {{ $comment->getLike->count() }}
                    </a>
                </div>

                <button type="button" data-toggle="reply-form" data-target="comment-{{ $comment->id }}-reply-form"
                    class="btn btn-info btn-link "><i class="fa fa-reply"></i> Reply</button>
                <form action="{{ route('comment.reply') }}" method="POST" class="reply-form d-none"
                    id="comment-{{ $comment->id }}-reply-form" style="padding: 10px 0 30px 0">
                    @csrf
                    <input type="hidden" value="{{ $post->id }}" name="idPost">
                    <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                    <textarea class="form-control border-input" placeholder="Bình luận đi.." rows="6" name="content"
                        style="width: 650px"></textarea>
                    <br>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="media-footer">

                        <button type="button" data-toggle="reply-form" data-target="comment-1-reply-form"
                            class="btn btn-danger pull-right">Kết thúc</button>
                        <button class="btn btn-info btn-wd ">Bình
                            luận</button>
                    </div>
                </form>
                @include('users.post.reply', ['comments' => $comment->replies])

                @if (Auth::user()->id == $comment->getUser->id)
                    <div class="action d-flex pull-right align-self-end " style="position: absolute;top: 0;right: 0;">
                        <button type="button" class="btn btn-primary btn-just-icon" data-toggle="modal"
                            data-target="#{{ $comment->id }}" style="margin-right: 10px">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="{{ $comment->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">
                                            Sửa bình luận
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('comment.update', $comment->id) }} " method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $post->id }}" name="idPost">
                                            <textarea class="form-control border-input" placeholder="Bình luận đi.." rows="6" name="content">{{ $comment->content }}</textarea>
                                            @error('content')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <button type="button" class="btn btn-secondary" style="margin-top: 10px"
                                                data-dismiss="modal">Đóng</button>
                                            <button type="submit" style="margin-top: 10px" class="btn btn-primary">Lưu
                                                thay
                                                đổi</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- delete-comment --}}
                        {{-- <form action="{{ route('comment.destroy', $comment->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-just-icon"></button>
                        </form> --}}


                        <!-- Button trigger modal -->
                        <button type="button" id="confirm" value="{{ $comment->id }}"
                            class="btn btn-danger btn-just-icon" data-toggle="modal" data-target="#1">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>



                        <!-- Modal -->
                        <div class="modal fade" id="1" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" > <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <br> Cảnh báo !</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h6 style="color: red;text-align: center">
                                            Bạn có chắc xóa bình luận này không ?
                                        </h6>
                                         
                                    </div>
                                    <div class="modal-footer" style="padding: 10px">
                                        <button type="button" class="btn btn-secondary" 
                                            data-dismiss="modal">Không</button>
                                        <button type="button" class="btn btn-danger" 
                                            id="okDeleteComment"> Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                @endif
                {{-- reply  --}}
            </div>
        </div>
    @endforeach
@endif
