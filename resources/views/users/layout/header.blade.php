<nav class="navbar navbar-expand-lg fixed-top bg-danger {{ (Request::is('/', 'login', 'register', 'profile')) ? 'navbar-transparent' : '' }} nav-down"
    {{ (Request::is('/', 'login' , 'register' , 'profile' )) ? 'color-on-scroll="500"' : '' }} >
    <div class="container">
        <a class="navbar-brand" href="#paper-kit">HomeWorkSolve</a>
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
                    <a class="nav-link" href="#paper-kit">
                        Trang chủ 
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">Chức năng</a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                        <a class="dropdown-item" href="{{route('post.addPost')}}"><i class="nc-icon nc-tile-56"></i>&nbsp; Đăng bài</a>
                        
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="btn btn-just-icon btn-warning  " data-toggle="dropdown">
                        <i class="nc-icon nc-sound-wave"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right dropdown-notification">
                        <li class="no-notification">
                            You're all clear!
                        </li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="btn btn-just-icon btn-danger  " data-toggle="dropdown">
                        <i class="nc-icon nc-email-85"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right dropdown-wide dropdown-notification">
                        <li class="dropdown-header">
                            You have 7 unread notifications
                        </li>
                        <li>
                            <ul class="dropdown-notification-list scroll-area">
                                <a href="#paper-kit" class="notification-item">
                                    <div class="notification-text">
                                        <span class="label label-icon label-success"><i
                                                class="nc-icon nc-chat-33"></i></span>
                                        <span class="message"><b>Patrick</b> mentioned you in a comment.</span>
                                        <br>
                                        <span class="time">20min ago</span>

                                        <button class="btn btn-just-icon read-notification btn-round">
                                            <i class="nc-icon nc-check-2"></i>
                                        </button>
                                    </div>
                                </a>


                                <a href="#paper-kit" class="notification-item">
                                    <div class="notification-text">
                                        <span class="label label-icon label-info"><i
                                                class="nc-icon nc-alert-circle-i"></i></span>

                                        <span class="message">Our privacy policy changed!</span>
                                        <br>
                                        <span class="time">1day ago</span>
                                    </div>
                                </a>

                                <a href="#paper-kit" class="notification-item">
                                    <div class="notification-text">
                                        <span class="label label-icon label-warning"><i
                                                class="nc-icon nc-ambulance"></i></span>

                                        <span class="message">Please confirm your email address.</span>
                                        <br>
                                        <span class="time">2days ago</span>
                                    </div>
                                </a>
                                <a href="#paper-kit" class="notification-item">
                                    <div class="notification-text">
                                        <span class="label label-icon label-primary"><i
                                                class="nc-icon nc-paper"></i></span>
                                        <span class="message">Have you thought about marketing?</span>
                                        <br>
                                        <span class="time">3days ago</span>
                                    </div>
                                </a>
                            </ul>
                        </li>
                        <!--      end scroll area -->

                        <li class="dropdown-footer">
                            <ul class="dropdown-footer-menu">
                                <li>
                                    <a href="#paper-kit">Mark all as read</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @auth
                <li class="nav-item dropdown" >
                    <a href="#paper-kit" class="nav-link navbar-brand" data-toggle="dropdown" width="30" height="30">
                        <div class="profile-photo-small" >
                            <img src="{{ asset('uploads/avatar/' . (empty($avatar) ? 'default-avatar.png' : $avatar))}}" alt="Circle Image"
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