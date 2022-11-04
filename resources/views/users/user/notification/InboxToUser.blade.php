
    

    <a href="#paper-kit" class="notification-item">

        <div class="notification-text 
        @if (!$notification->read_at)
        bg-light  
        @endif" style="padding: 15px;border-radius: 10px;margin-top: 7px">
            
           <span class="label label-icon label-success"><i class="fa fa-inbox" aria-hidden="true"></i>
           </span>
           
          
          <a class="message" href="{{ route('chatify') }}"  style="color: black">
            
            <b> {{$notification->data['user']['name']}} </b>đã gửi tin nhắn đến bạn
            
           
          </a>
           <br>
           <span class="time">{{$notification->created_at->diffForHumans()}}</span>
          
          
        </div>
     </a>
