@extends('users.layout.main')
@push('css')
    <style>
        @charset "utf-8";
        /* CSS Document */

        /* ---------- GENERAL ---------- */



        a {
            text-decoration: none;
        }

        fieldset {
            border: 0;
            margin: 0;
            padding: 0;
        }

        h4,
        h5 {
            line-height: 1.5em;
            margin: 0;
        }

        hr {
            background: #e9e9e9;
            border: 0;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            height: 1px;
            margin: 0;
            min-height: 1px;
        }

        img {
            border: 0;
            display: block;
            height: auto;
            max-width: 100%;
        }

        input {
            border: 0;
            color: inherit;
            font-family: inherit;
            font-size: 100%;
            line-height: normal;
            margin: 0;
        }

        p {
            margin: 0;
        }

        .clearfix {
            *zoom: 1;
        }

        /* For IE 6/7 */
        .clearfix:before,
        .clearfix:after {
            content: "";
            display: table;
        }

        .clearfix:after {
            clear: both;
        }

        /* ---------- LIVE-CHAT ---------- */

        #live-chat {
            bottom: 0;
            font-size: 12px;
            right: 24px;
            position: fixed;
            width: 300px;
        }

        #live-chat header {
            background: #293239;
            border-radius: 5px 5px 0 0;
            color: #fff;
            cursor: pointer;
            padding: 16px 24px;
        }

        #live-chat h4:before {
            background: #1a8a34;
            border-radius: 50%;
            content: "";
            display: inline-block;
            height: 8px;
            margin: 0 8px 0 0;
            width: 8px;
        }

        #live-chat h4 {
            font-size: 12px;
        }

        #live-chat h5 {
            font-size: 10px;
        }

        #live-chat form {
            padding: 24px;
        }

        #live-chat input[type="text"] {
            border: 1px solid #ccc;
            border-radius: 3px;
            padding: 8px;
            outline: none;
            width: 234px;
        }

        .chat-message-counter {
            background: #e62727;
            border: 1px solid #fff;
            border-radius: 50%;
            display: none;
            font-size: 12px;
            font-weight: bold;
            height: 28px;
            left: 0;
            line-height: 28px;
            margin: -15px 0 0 -15px;
            position: absolute;
            text-align: center;
            top: 0;
            width: 28px;
        }

        .chat-close {
            background: #1b2126;
            border-radius: 50%;
            color: #fff;
            display: block;
            float: right;
            font-size: 10px;
            height: 16px;
            line-height: 16px;
            margin: 2px 0 0 0;
            text-align: center;
            width: 16px;
        }

        .chat {
            background: #fff;
        }

        .chat-history {
            height: 252px;
            padding: 8px 24px;
            overflow-y: scroll;
        }

        .chat-message {
            margin: 16px 0;
        }

        .chat-message img {
            border-radius: 50%;
            float: left;
        }

        .chat-message-content {
            margin-left: 130px;
        }

        .chat-message-content-2 {
            margin-left: 50px;
        }

        .chat-time {
            float: right;
            font-size: 10px;
        }

        .chat-feedback {
            font-style: italic;
            margin: 0 0 0 80px;
        }

        .preview {
            text-align: center;
            padding: 20px
        }
    </style>
@endpush
@section('contents')
    <div class="main">
        <div class="section section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">Liên hệ với chúng tôi</h2>
                        <p>Nếu bạn có sự hài vòng về trang web hoặc báo cáo cá nhân có hành vi không tốt bạn có thể gửi về
                            chúng tôi</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <h3 class="title"><small></small></h3>
                        <form class="contact">
                            <div class="row">

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" id="select_designatfirst">
                                        <option value="-1">--Chọn nội dung--</option>
                                        <option value="0">Báo cáo người dùng</option>
                                        <option value="1">Báo cáo trang web</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="empSearch">
                                </div>
                            </div>

                            <textarea class="form-control" id="textArea" rows="7"></textarea>

                            <div class="row">
                                <div class="col-md-6 ml-auto mr-auto">
                                    <button class="btn btn-primary btn-block btn-round">Send </button>
                                </div>
                            </div>
                        </form>
                        <h3 class="visit"><small>Or come and visit</small></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start chat box -->
    <div id="live-chat">

        <header class="clearfix">



            <h4>Admin</h4>


        </header>

        <div class="chat">



            <div class="chat-history">
                <div class="preview">
                    Bạn có thể trò truyện trực tiếp với người quản trị
                </div>
                @if ($contacts)
                @foreach ($contacts->getContent as $contact)
                @if ($contact->idAuthur != 1)
                    <div class="chat-message clearfix">


                        <img src="{{ $contact->getUser->getAvatar() }}" alt="" width="32" height="32"
                            style="float: right;">
                        <div class="chat-message-content clearfix" style="">




                            <h5 style="margin-left: 50px">Bạn</h5>
                            <p>{{ $contact->content }}</p>

                        </div> <!-- end chat-message-content -->

                    </div> <!-- end chat-message -->
                @endif



                @if ($contact->idAuthur == 1)
                    <div class="chat-message clearfix">

                        <img src="http://gravatar.com/avatar/2c0ad52fc5943b78d6abe069cc08f320?s=32" alt=""
                            width="32" height="32">

                        <div class="chat-message-content-2 clearfix">



                            <h5>Admin</h5>

                            <p>{{ $contact->content }}</p>

                        </div> <!-- end chat-message-content -->

                    </div> <!-- end chat-message -->
                @endif
            @endforeach 
                @endif
               




            </div> <!-- end chat-history -->



            <form action="{{ route('contact.send') }}" method="post">
                @csrf
                <fieldset>

                    <input type="text" placeholder="Nhập nội dung chat" name="content" autocomplete="off" autofocus>


                </fieldset>

            </form>

        </div> <!-- end chat -->

    </div> <!-- end live-chat -->
@endsection
@push('js')
    <script>
        var select_designatfirst = $('#select_designatfirst'),
            empSearch = $('#empSearch');
        text = $('#textArea');
        select_designatfirst.on('change', function() {
            if (this.value == 0) {
                empSearch.attr('placeholder', 'Đường link trang cá nhân ');
                text.attr('placeholder', 'Báo cáo những nội dung, bình luận.. không tốt của người này');
            }
            if (this.value == 1) {
                empSearch.attr('placeholder', 'Lỗi');
                text.attr('placeholder', 'Nội dung cụ thể của lỗi');
            }

        });
        (function() {

            $('#live-chat header').on('click', function() {

                $('.chat').slideToggle(300, 'swing');
                $('.chat-message-counter').fadeToggle(300, 'swing');

            });

        })();
        //$(".chat").delay(5000).slideToggle();

        // setTimeout(function() {
        //     $('.chat').css({
        //         display: "block",
        //         opacity: "1"
        //     });
        // }, 6000);
    </script>
@endpush
