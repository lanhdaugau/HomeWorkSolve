@extends('users.layout.main')
@section('contents')
<h3 class="p-5 ">Các bài đăng</h3>

<div class="card w-50 d-flex m-auto" style="">
    <div class="card-image">
        <a href="#pablo">
            <img class="img" src="assets/img/sections/david-marcu.jpg">
        </a>
    </div>
    <div class="card-body">
        <label class="label label-warning">Travel</label>
        <h5 class="card-title">
            Currently at the San Francisco Museum of Modern Art
        </h5>
        <hr>
        <div class="card-footer">
            <div class="author">
                <a href="#pablo">
                   <img src="assets/img/rihanna.jpg" alt="..." class="avatar img-raised">
                   <span>Lord Alex</span>
                </a>
            </div>
           <div class="stats">
                <i class="fa fa-heart" aria-hidden="true"></i> 5.3k
            </div>
        </div>
    </div>
</div>
<br>
<br><br>
<br>
<div class="card w-50 d-flex m-auto mt-1">
    <div class="card-image">
        <a href="#pablo">
            <img class="img" src="assets/img/sections/david-marcu.jpg">
        </a>
    </div>
    <div class="card-body">
        <label class="label label-warning">Travel</label>
        <h5 class="card-title">
            Currently at the San Francisco Museum of Modern Art
        </h5>
        <hr>
        <div class="card-footer">
            <div class="author">
                <a href="#pablo">
                   <img src="assets/img/rihanna.jpg" alt="..." class="avatar img-raised">
                   <span>Lord Alex</span>
                </a>
            </div>
           <div class="stats">
                <i class="fa fa-heart" aria-hidden="true"></i> 5.3k
            </div>
        </div>
    </div>
</div>
@endsection