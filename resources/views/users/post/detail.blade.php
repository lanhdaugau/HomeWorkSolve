@extends('users.layout.main')
@section('title')
Chi tiết bài viết
@endsection
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
                        src="{{ asset('storage/users-avatar/' . (empty($post->getUser->avatar) ? 'avatar.png' : $post->getUser->avatar)) }}">
                  </div>
               </a>
               <div class="media-body">
                  <h4 class="media-heading">{{ $post->getUser->name }}</h4>
                  <p>{{ $post->updated_at }}</p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 ml-auto mr-auto">
                  @if (Auth::user()->id == $post->getUser->id)
                  <div class="text-center">
                     <a class="label label-warning main-tag" href="{{ route('post.edit', $post->id) }}">Sửa
                     bài
                     viết</a>
                     <button class="label label-danger" style="color: white;border:0;cursor: pointer;"
                        id="delete">Xóa bài viết</button>
                     <a href="javascrip: void(0);">
                        <h3 class="title">{{ $post->caption }}</h3>
                     </a>
                     <h6 class="title-uppercase">{!! $post->content !!}</h6>
                  </div>
                  @endif
               </div>
               <div class="col-md-8 ml-auto mr-auto">
                  <a href="javascrip: void(0);">
                     @foreach ($post->getImagePost as $item)
                     <div class="card" data-radius="none"
                        style="background-image: url('{{ asset('uploads/post/' . (empty($item->path_image) ? '' : $item->path_image)) }}');">
                     </div>
                     @endforeach
                  </a>
                  <br>
                  <hr>
                  @if ($post->isActive == 1)
                  <div class="container">
                     <div class="row">
                        <div class="comments media-area">
                           <h3 class="text-center">Comments</h3>
                           @include('users.post.reply',['comments'=>$post->comments])
                        </div>
                        <div class="media">
                           <a class="pull-left" href="#paper-kit">
                              <div class="avatar">
                                 <img class="media-object" alt="64x64"
                                    src="{{ asset('storage/users-avatar/' . (empty($user->avatar) ? 'avatar.png' : $user->avatar)) }}">
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
                           {{-- edit comment --}}
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
   $('#delete').click(function() {
     let checkConfirm = confirm('Xóa bài post!');
     {{ $post->id }}
     let url = "{{ route('post.destroy', $post->id) }}";
     if (checkConfirm) {
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
   }
   });
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
</script>
@endpush