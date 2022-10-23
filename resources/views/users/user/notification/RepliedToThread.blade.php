
    <a class="message" href="{{ route('post.detail',$notification->data['post']['id'] ) }}" >
        <b> {{$notification->data['user']['name']}} </b>đã bình luận bài viết của bạn có chủ đề {{$notification->data['post']['caption']}}
        
             
    </a>

