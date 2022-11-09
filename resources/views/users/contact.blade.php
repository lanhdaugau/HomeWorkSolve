@extends('users.layout.main')
@push('css')
<style>
 /* start chat box*/
#live-chat {
  bottom: 0;
  font-size: 12px;
  position: fixed;
  right: 15px;
  width: 300px;
  z-index: 99;

  -webkit-box-shadow: 0 4px 4px #797979;
  -moz-box-shadow: 0 4px 4px #797979;
  -ms-box-shadow: 0 4px 4px #797979;
  -o-box-shadow: 0 4px 4px #797979;
  box-shadow: 0 4px 4px #797979;
}
#live-chat .chat-header {
  border: medium none;
  background: rgba(41, 186, 237, 0.83);

  color: #ffffff;
  cursor: pointer;
  float: left;
  padding: 7.5px 24px;
  -webkit-transition: all 0.4s ease 0s;
  -moz-transition: all 0.4s ease 0s;
  -ms-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;

  width: 100%;
}
#live-chat .chat-header:hover,
#scroll-top:hover {
  background: none repeat scroll 0 0 #29baed;
}

#live-chat h4:before {
  background: #A6D87A;
  content: "";
  display: inline-block;
  height: 8px;
  margin: 0 8px 0 0;
  width: 8px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
}
#live-chat h4 {
  color: #fff;
  float: left;
  font-family: Roboto;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 0.3px;
}

#live-chat h5 {
  color: #333333;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 600;
  letter-spacing: 0.3px;
  line-height: 10px;
  margin-bottom: 15px;
}

#live-chat form {
  padding: 15px;
}

#live-chat input[type="text"] {
  border: 1px solid #ccc;

  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  -ms-border-radius: 1px;
  -o-border-radius: 1px;
  border-radius: 1px;

  font-family: Roboto;
  letter-spacing: 0.3px;
  outline: medium none;
  padding: 8px 18px;
  width: 100%;
}

.chat-close {
  background: none repeat scroll 0 0 rgba(0,0,0,.5);
  color: #FFFFFF;
  display: block;
  float: right;
  font-size: 22px;
  height: 20px;
  line-height: 18px;
  margin: 9px 0 0;
  text-align: center;
  width: 20px;

  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
}
.chat-close:hover {
  color: #FFFFFF;
  text-decoration: none;
}
.chat {
  background: none repeat scroll 0 0 #ffffff;
  float: left;
  overflow: hidden;
  width: 100%;
}
.chat-history {
  height: 252px;
  padding: 0;
  width: 100% !important;
  overflow-x: hidden;
  overflow-y: scroll
}

.ds-chat-message-content {
  float: left;
  width: 100%;
}

.ds-chat-message {
  border-bottom: 5px dashed #d8dcdc;
  float: left;
  padding: 20px 20px;
  position: relative;
  width: 100%;
}

.ds-chat-message img {

  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  border: 0 none;
  float: none;
  right: 20px;
  max-width: 100%;
  position: absolute;
  top: 20px;
}
.ds-chat-time {
  float: left;
  font-family: Roboto;
  font-size: 11px;
}

.support-chat
{
  background: #d8dcdc;
  margin-bottom: 2px;
  float: left;
  padding: 20px 20px 20px 10px;
  position: relative;
  width: 100%;
}

#live-chat .support-chat h5 {color: #29baed;text-align: center;}

#live-chat .support-chat p {text-align: right;margin: 15px 30px 0}
/* message two */
.ds-chat-message-2 {
  border-bottom: 5px dashed #d8dcdc;
  border-top: 5px dashed #d8dcdc;
  float: left;
  padding: 20px 20px;
  position: relative;
  width: 100%;
}

.ds-chat-message-2 img {

  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  border: 0 none;
  float: none;
  left: 20px;
  max-width: 100%;
  position: absolute;
  top: 20px;
}
.ds-chat-time-2 {
  float: right;
  font-family: Roboto;
  font-size: 11px;
}

.support-chat-2
{
  margin-bottom: 2px;
  float: left;
  padding: 20px 20px 20px 73px;
  position: relative;
  width: 100%;
}

#live-chat .support-chat-2 h5 {color: #444;}

#live-chat .support-chat-2 p {margin: 15px 0px 0;color: #666}

/* start input */
label {
  cursor: pointer;
  background: #29baed;
  padding: 8px;
  color: #fff;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  margin: 5px 
  /* Style as you please, it will become the visible UI component. */
}

#upload-photo {
  opacity: 0;
  position: absolute;
  z-index: -1;
}

fieldset {min-width: 100%}

fieldset input[type="text"] {
  max-width: 85%;
  float: left;
}

fieldset .bg_none {
  max-width: 10%;
  margin: -1px 0 0;
  float: right;
}

/* end chat box*/

    </style>
@endpush
@section('contents')

<div class="main">
    <div class="section section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Liên hệ với chúng tôi</h2>
                    <p>Nếu bạn có sự hài vòng về trang web hoặc báo cáo cá nhân có hành vi không tốt bạn có thể gửi về chúng tôi</p>
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
                                <select class="form-control" id="select_designatfirst" >
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
    <div class="clearfix chat-header">
      <a class="chat-close">-</a>
      <h4>7Dsoftware Support</h4>
    </div>
    <div class="chat" style="display:none;"><!---->
      <div class="chat-history">
        
        <div class="ds-chat-message support-chat">
          <div class="message-message">
            <img src="https://lh3.googleusercontent.com/-v-nOreIwytQ/WXYGOTJfxwI/AAAAAAAAABA/gmB02KQ5YukxO7WQDS_lo0xl5OBrphA5ACEwYBhgL/w139-h140-p/17022164_281947275571825_7574097377909968664_n.jpg" alt="" width="32" height="32" />
            <div class="ds-chat-message-content">
              <span class="ds-chat-time">11:54</span>
              <h5>7Ds Support</h5>
              <p>welcome to our website.</p>
            </div> <!-- end chat-message-content -->
          </div>
        </div> <!-- end chat-message -->
        
        <div class="ds-chat-message-2 support-chat-2">
          <img src="https://lh3.googleusercontent.com/-v-nOreIwytQ/WXYGOTJfxwI/AAAAAAAAABA/gmB02KQ5YukxO7WQDS_lo0xl5OBrphA5ACEwYBhgL/w139-h140-p/17022164_281947275571825_7574097377909968664_n.jpg" alt="" width="32" height="32" />
          <div class="ds-chat-message-content">
            <span class="ds-chat-time-2">11:54</span>
            <h5>shaban abd al shafy</h5>
            <p>welcome to our website, welcome to our website, welcome to our website, welcome to our website, </p>
          </div> <!-- end chat-message-content -->
        </div> <!-- end chat-message -->
  
        <!-- end chat-message -->
        

        <!-- end chat-message -->
        
        <!-- end chat-message -->
      </div> <!-- end chat-history -->
      <form action="#" method="post">
        <fieldset>
          <input type="text" placeholder="Type your message…" autofocus>
          <input type="hidden">
          <label  class="bg_none" for="upload-photo">
            <i class="glyphicon glyphicon-paperclip"></i>
          </label>
          <input type="file" name="photo" id="upload-photo"/>
        </fieldset>
      </form>
    </div> <!-- end chat -->
  </div> <!-- end live-chat -->
  
  <!-- end chat box -->
@endsection
@push('js')
    <script>
  var select_designatfirst = $('#select_designatfirst'),
  empSearch = $('#empSearch');
    text=$('#textArea');
select_designatfirst.on('change', function () {
    if(this.value ==0){
        empSearch.attr('placeholder', 'Đường link trang cá nhân ');
        text.attr('placeholder', 'Báo cáo những nội dung, bình luận.. không tốt của người này');
    }
    if(this.value ==1){
        empSearch.attr('placeholder', 'Lỗi');
        text.attr('placeholder', 'Nội dung cụ thể của lỗi');
    }
  
});
$('#live-chat .chat-header').click(function () {
  $('.chat').slideToggle();
});

//$(".chat").delay(5000).slideToggle();

setTimeout(function(){
  $('.chat').css({
    display: "block",
    opacity: "1"
  });
}, 6000);
    </script>
@endpush
