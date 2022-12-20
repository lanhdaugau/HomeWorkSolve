@extends('users.layout.main')
@section('title')
    Chi tiết bài viết
@endsection
@push('css')
    <style>
        .d-none {
            display: none !important
        }
    </style>
@endpush
@section('contents')

    <div class="wrapper">
        <div class="main">
            <div class="section section-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto text-center title">
                            <h2>Chi tiết bài đăng </h2>
                            <h3 class="title-uppercase"><small></small></h3>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pull-left" href="#paper-kit">
                            <div class="avatar big-avatar">
                                <img class="media-object" alt="64x64"
                                    src="{{ $post->getUser->getAvatar() }}">
                            </div>
                        </a>
                        <div class="media-body" style="min-width: 670px">
                            <h4 class="media-heading">{{ $post->getUser->name }}</h4>
                            <p>{{ $post->updated_at }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto">
                            @if(Gate::check('edit-post',$post) || Gate::check('admin-view'))
                                <div class="text-center">
                                    <a class="label label-warning main-tag" href="{{ route('post.edit', $post->id) }}">Sửa
                                        bài
                                        viết</a>
                                    <button class="label label-danger" style="color: white;border:0;cursor: pointer;"
                                        id="delete" data-toggle="modal" data-target="#2">Xóa bài viết</button>

                                    <div class="modal fade" id="2" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <br>Cảnh báo !</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6 style="color: red;text-align: center">
                                                        Bạn có chắc xóa bài viết này không?
                                                    </h6>
                                                      
                                                </div>
                                                <div class="modal-footer" style="padding: 10px">
                                                    <button type="button" class="btn btn-secondary"
                                                        style="margin-top: 10px" data-dismiss="modal">Không</button>
                                                    <button type="button" class="btn btn-danger" style="margin-top: 10px"
                                                        id="okDeletePost">OK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascrip: void(0);">
                                        <h3 class="title">{{ $post->caption }}</h3>
                                    </a>
                                    <h6 class="title-uppercase">{!! $post->content !!}</h6>
                                </div>
                                @endif
                            
                        </div>
                        {{-- {{dd(route('comment.destroy',['idComment'=>'32','content'=>'hello']) )}} --}}
                        <div class="col-md-8 ml-auto mr-auto">
                            <a href="javascrip: void(0);">
                                @foreach ($post->getImagePost as $item)
                                    <div class="card" data-radius="none"
                                        style="background-image: url('{{ asset('uploads/post/' . (empty($item->path_image) ? '' : $item->path_image)) }}')">
                                    </div>
                                @endforeach
                            </a>
                            <br>
                            <hr>
                            @if ($post->isActive == 1)
                                <div class="container">
                                    <div class="row">
                                        <div class="comments media-area">
                                            <h3 class="text-center">Tất cả bình luận</h3>
                                            <br>
                                            @include('users.post.reply', ['comments' => $post->comments])
                                        </div>
                                        <div class="media">
                                            <a class="pull-left" href="#paper-kit">
                                                <div class="avatar">
                                                    <img class="media-object" alt="64x64"
                                                        src="{{$user->getAvatar() }}">
                                                </div>
                                            </a>
                                            <div class="media-body">
                                                <form action="{{ route('comment') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $post->id }}" name="idPost">
                                                    <textarea class="form-control border-input" placeholder="Bình luận đi.." rows="6" name="content"
                                                        style="width: 650px"></textarea>
                                                    <br>
                                                    @error('content')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="media-footer">
                                                        <button class="btn btn-info btn-wd pull-right">Bình
                                                            luận</button>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                        <!-- end media -->
                                    </div>
                                </div>
                        </div>
                        @endif

                    </div>
                    {{-- 
            <div class="row">
               <div class="related-articles">
                  <h3 class="title">Related articles</h3>
                  <legend></legend>
                  <div class="container">
                     <div class="row">
                        <div class="col-md-4">
                           <a href="pkp"><img src="../assets/img/sections/damir-bosnjak.jpg"
                              alt="Rounded Image" class="img-rounded img-responsive"></a>
                           <p class="blog-title">My Review of Pitchfork’s ‘Indie 500’ Album Review</p>
                        </div>
                        <div class="col-md-4">
                           <a href="pkp"><img src="../assets/img/sections/por7o.jpg" alt="Rounded Image"
                              class="img-rounded img-responsive"></a>
                           <p class="blog-title">Top Events This Month</p>
                        </div>
                        <div class="col-md-4">
                           <a href="pkp"><img src="../assets/img/sections/jeff-sheldon.jpg"
                              alt="Rounded Image" class="img-rounded img-responsive"></a>
                           <p class="blog-title">You Should Get Excited About Virtual Reality. Here’s Why.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // delete Post
        $('#delete').click(function() {
            let url = "{{ route('post.destroy', $post->id) }}";
            $(document).on('click', '#okDeletePost', function() {
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        _method: 'delete'
                    },

                }).done(function(response) {
                    if (response.statusCode == 200) {
                        window.location.href = "{{ route('user.index') }}";
                    }
                })
            });
          

           
        });
        //reply
        document.addEventListener(
            "click",
            function(event) {
                var target = event.target;
                var replyForm;
                if (target.matches("[data-toggle='reply-form']")) {
                    replyForm = document.getElementById(target.getAttribute("data-target"));
                    replyForm.classList.toggle("d-none");
                }
            },
            false
        );
        //delete comment


        $(document).on('click', '#confirm', function() {
            
            var idComment = this.value;
            let url = `{{ route('comment.destroy', ':idComment') }}`;
            url = url.replace(':idComment', idComment);
            console.log(url);
            $(document).on('click', '#okDeleteComment', function() {

                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        _method: 'delete'
                    },
                    typedata: 'json'

                }).done(function(response) {
                    
                    if (response.statusCode == 200) {
                        $('.modal').modal('hide');
                        $('.comment-' + idComment).css('display', 'none');

                    }
                })


            });

        });
        

        $(document).on('click','#like',function(){
            var idComment = this.value;
            let url=`{{route('like',':idComment') }}`;
            url = url.replace(':idComment', idComment);
            $.ajax(
                {
                    url:url,
                    method: 'GET',
                    typeData: 'json'
                }
            ).done(function(response){
                
                if(response.statusCode == 200){
                   
                    $('.like-'+idComment).addClass('btn-danger');
                    var num=parseInt($('#numberoflike-'+idComment).text())+1;
                    $('#numberoflike-'+idComment).text(num);
                }
                else{
                    $('.like-'+idComment).removeClass('btn-danger');
                    var num=parseInt($('#numberoflike-'+idComment).text())-1;
                    $('#numberoflike-'+idComment).text(num);
                }
            })  
        });
        
        $(document).on('click','#save-comment',function(){
           
            var content=$('#content-edit').val();
           
            var idComment=this.value;
          
            let url='http://homeworksolve.test/comment/update/' + idComment + '/'+ content;
  
            $.ajax(
                {
                    url:url,
                    method:'POST',
                    data: {
                        _method: 'put'
                    },
                    typeData: 'json'
                }).done(function(response){
                    if(response.statusCode==200)
                    {
                        $('.modal').modal('hide');
                        $('#comment-content-'+idComment).text(content);
                    }
                });

        });
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
