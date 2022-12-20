@if (count($comments) > 0)
    @foreach ($comments as $comment)
        <div class="media comment-{{ $comment->id }}"
            style="border-bottom: 0;margin-top: 0;padding-bottom: 15px;position: relative;min-width:650px">
            <a class="pull-left" href="#paper-kit">
                <div class="avatar">
                    <img class="media-object" src="{{ $comment->getUser->getAvatar() }}" alt="..."
                        onclick="window.open('{{ route('detail', $comment->getUser->id) }}','_self')">
                </div>
            </a>
            <div class="media-body">
                <h5 class="media-heading">
                    {{ $comment->getUser->name ? $comment->getUser->name : 'User' . $comment->getUser->id }}
                </h5>
                <div class="">
                    <h6 class="text-muted" style="font-size: x-small">{{ $comment->created_at->diffForHumans() }}</h6>
                </div>
                <p id="comment-content-{{$comment->id}}">{{ $comment->content }}
                </p>
                <div class="media-footer">
                    {{-- <a href="{{ route('like', $comment->id) }}"  > --}}
                    <button id="like" value="{{ $comment->id }}"
                        class="btn btn-link like-{{ $comment->id }} {{ $comment->checkUserLike() ? 'btn-danger' : '' }}">



                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                        <span id="numberoflike-{{ $comment->id }}">
                            {{ $comment->getLike->count() }}
                        </span>

                    </button>
                </div>
                <button type="button" data-toggle="reply-form" data-target="comment-{{ $comment->id }}-reply-form"
                    class="btn btn-info btn-link "><i class="fa fa-reply"></i> Trả lời</button>
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

                        <button class="btn btn-info btn-wd ">Bình
                            luận</button>
                    </div>
                </form>
                @include('users.post.reply', ['comments' => $comment->replies])
                @if (Gate::check('edit-comment', $comment) || Gate::check('admin-view'))
                    <div class="action d-flex pull-right align-self-end " style="position: absolute;top: 0;right: 0;">
                        <button type="button" class="btn btn-primary btn-just-icon" data-toggle="modal"
                            data-target="#{{ $comment->id }}" style="margin-right: 10px" id="editComment">
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
                                        
                                            @csrf
                                            <input type="hidden" value="{{ $post->id }}" name="idPost">
                                            <textarea class="form-control border-input" placeholder="Bình luận đi.." rows="6" name="content" id="content-edit">{{ $comment->content }}</textarea>
                                            @error('content')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <button type="button" class="btn btn-secondary" style="margin-top: 10px"
                                                data-dismiss="modal">Đóng</button>
                                            <button type="submit" id="save-comment" value="{{$comment->id}}" style="margin-top: 10px" class="btn btn-primary">Lưu
                                                thay
                                                đổi</button>
                                        
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- delete-comment --}}

                        <!-- Button trigger modal -->
                        <button type="button" id="confirm" value="{{ $comment->id }}"
                            class="btn btn-danger btn-just-icon" data-toggle="modal"
                            data-target="#deleteComment{{ $comment->id }}">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteComment{{ $comment->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"> <i
                                                class="fa fa-exclamation-triangle" aria-hidden="true"></i> <br> Cảnh
                                            báo !</h5>
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
                                        <button type="button" class="btn btn-danger" id="okDeleteComment">
                                            Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    @endforeach
@endif
