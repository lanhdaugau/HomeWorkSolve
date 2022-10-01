<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <base href="{{ asset('') }}">
    <link rel="icon" type="image/png" href="{{asset('/asset/users')}}/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/asset/users')}}/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Paper</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

   

    <link href="{{asset('/asset/users')}}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('/asset/users')}}/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>
    <link href="{{asset('/asset/users')}}/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/asset/users')}}/css/nucleo-icons.css" rel="stylesheet">

</head>

<body style="">
   

<script src="{{asset('/asset/users')}}/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="{{asset('/asset/users')}}/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="{{asset('/asset/users')}}/js/popper.js" type="text/javascript"></script>
<script src="{{asset('/asset/users')}}/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Switches -->
<script src="{{asset('/asset/users')}}/js/bootstrap-switch.min.js"></script>

<!--  Plugins for Slider -->
<script src="{{asset('/asset/users')}}/js/nouislider.js"></script>

<!--  Photoswipe files -->
<script src="{{asset('/asset/users')}}/js/photoswipe.min.js"></script>
<script src="{{asset('/asset/users')}}/js/photoswipe-ui-default.min.js"></script>
<script src="{{asset('/asset/users')}}/js/init-gallery.js"></script>

<!--  Plugins for Select -->
<script src="{{asset('/asset/users')}}/js/bootstrap-select.js"></script>

<!--  for fileupload -->
<script src="{{asset('/asset/users')}}/js/jasny-bootstrap.min.js"></script>

<!--  Plugins for Tags -->
<script src="{{asset('/asset/users')}}/js/bootstrap-tagsinput.js"></script>

<!--  Plugins for DateTimePicker -->
<script src="{{asset('/asset/users')}}/js/moment.min.js"></script>
<script src="{{asset('/asset/users')}}/js/bootstrap-datetimepicker.min.js"></script>

<script src="{{asset('/asset/users')}}/js/paper-kit.js?v=2.1.0"></script>
    @stack('js')

</body>



</html>
k