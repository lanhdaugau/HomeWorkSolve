<nav class="navbar navbar-expand-lg fixed-top bg-danger {{ (Request::is('/', 'searchPost', 'login', 'register', 'profile')) ? 'navbar-transparent' : '' }} nav-down"
{{ (Request::is('/', 'login' , 'register' , 'profile')) ? 'color-on-scroll="500"' : '' }}
>
<div class="container">
    
   <a class="navbar-brand" href="{{ route('user.index') }}">HomeWorkSolve</a>
   <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
   <span class="navbar-toggler-bar"></span>
   <span class="navbar-toggler-bar"></span>
   <span class="navbar-toggler-bar"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
            Trang chủ 
            </a>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">Chức năng</a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
               <a class="dropdown-item" href="{{route('post.addPost')}}"><i class="nc-icon nc-tile-56"></i>&nbsp; Đăng bài</a>
               <a class="dropdown-item" href="{{route('user.search')}}"><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp; Tìm kiếm</a>
               <a class="dropdown-item" href="{{route('chatify')}}"><i class="nc-icon nc-chat-33"></i>&nbsp; Trò chuyện</a>
               <a class="dropdown-item" href="{{ route('searchPost') }}"><i class="nc-icon nc-zoom-split"></i>&nbsp; Tìm kiếm bài viết</a>
               <a class="dropdown-item" href="{{ route('contact.contact') }}"><i class="fa fa-flag" aria-hidden="true"></i>&nbsp; Liên hệ với chung tôi</a>
            </ul>
         </li>
         <li class="nav-item dropdown">
            <a class="btn btn-just-icon btn-primary " data-toggle="dropdown">
               
                   
              
               <i class="nc-icon nc-satisfied"></i>
              
            
            </a>
            @auth
            @if (count($userNotification->unreadNotifications->where('type','App\Notifications\RatingToUser'))>0)
            <span class="label label-danger notification-bubble"><i class="nc-icon nc-bell-55"></i></span>
            @endif
            
            <ul class="dropdown-menu dropdown-menu-right dropdown-notification">
               <li class="no-notification">
                  @if (count($userNotification->unreadNotifications->where('type','App\Notifications\RatingToUser'))>0)
                  Ai đó đã đánh giá bạn..
                  <a href="{{route('checkRating')}}" class="label label-danger">
                     Xem liền 
                  </a>
                  
                  @else
                  Chưa có ai đánh giá bạn cả :(
                  @endif
               </li>
            </ul>
            @endauth
         </li>
         <li class="nav-item dropdown">
            <a class="btn btn-just-icon " data-toggle="dropdown">
            <i class="nc-icon nc-bell-55"></i>
            </a>
            
            @auth
            @if (count($userNotification->unreadNotifications->whereNotIn('type','App\Notifications\RatingToUser'))>0)
            <span class="label label-danger notification-bubble">{{count($userNotification->unreadNotifications)}}</span>
            @endif
            @if(count($userNotification->Notifications->whereNotIn('type','App\Notifications\RatingToUser'))>0)
            <ul class="dropdown-menu dropdown-menu-right dropdown-wide dropdown-notification">
               <li class="dropdown-header">
                  Bạn có {{count($userNotification->unreadNotifications)}} thông báo chưa đọc 
               </li>
               <li>
                  <ul class="dropdown-notification-list scroll-area" style="width:500px;padding:10px">
                     @foreach ($userNotification->Notifications as $notification)
                     @include('users.user.notification.'.class_basename($notification->type))
                     @endforeach 
                  </ul>
               </li>
               <!--      end scroll area -->
               <li class="dropdown-footer">
                  <ul class="dropdown-footer-menu">
                     <li>
                        <a href="{{ route('maskAsRead') }}">Mark all as read</a>
                     </li>
                  </ul>
               </li>
            </ul>
            @else
            <ul class="dropdown-menu dropdown-menu-right dropdown-wide dropdown-notification">
               <li class="dropdown-header">
                  Bạn có {{count($userNotification->unreadNotifications)}} thông báo chưa đọc 
               </li>
               <li>
                  <ul class="dropdown-notification-list scroll-area" style="width:500px;padding:10px">
                     <a href="#paper-kit" class="notification-item">
                        <div class="notification-text">
                           </span>
                           Bạn không có thông báo nào
                           <br>
                        </div>
                     </a>
                  </ul>
               </li>
               <!--      end scroll area -->
               <li class="dropdown-footer">
                  <ul class="dropdown-footer-menu">
                     <li>
                        <a href="{{ route('maskAsRead') }}">Mark all as read</a>
                     </li>
                  </ul>
               </li>
            </ul>
            @endif
            @endauth
         </li>
         @auth
         <li class="nav-item dropdown" >
            <a href="#paper-kit" class="nav-link navbar-brand" data-toggle="dropdown" width="30" height="30">
               <div class="profile-photo-small" >
                  <img src="{{$avatar}}" alt="Circle Image"
                     class="img-circle img-responsive img-no-padding" style="object-fit: cover !important; width:38.5px;height:38.5px;">
               </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
               <div class="dropdown-header">Dropdown header</div>
               <a class="dropdown-item" href="{{ route('profile') }}">Tôi</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="{{ route('user.setting') }}">Cài đặt</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="{{ route('login.logout')}}">Đăng xuất</a>
            </ul>
         </li>
         @else
         <li class="nav-item dropdown" >
            <a href="{{route('login.login')}}" class="nav-link "  width="30" height="30">
            Login
            </a>
         </li>
         @endauth
      </ul>
   </div>
</div>
</nav>