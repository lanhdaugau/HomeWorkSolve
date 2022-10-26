
    <a href="#paper-kit" class="notification-item" >
        <div class="notification-text">
            
           <span class="label label-icon label-danger"><i class="fa fa-reply" aria-hidden="true"></i>
           </span>
           
          
          <a class="message" href="{{ route('post.detail.read',[$notification->data['post']['id'],$notification->id ]) }}" style="color: black">
            
            <b> {{$notification->data['user']['name']}} </b>đã trả lời bình luận của bạn có chủ đề <b> {{$notification->data['comment']['content']}}</b>
            
           
          </a>
           <br>
           <span class="time">{{$notification->created_at->diffForHumans()}}</span>
           
          
        </div>
     </a>
