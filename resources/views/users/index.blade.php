@extends('users.layout.main')
@push('css')
    @section('title')
        Trang chủ
    @endsection
    @push('css')
        <style>
            /* @media(max-width: 600px) {
                .card {
                    min-height: 300px !important;
                }
            } */
        </style>
    @endpush
    @section('contents')

        <div class="blog-2 section section-gray">
            <div class="container">
    			<div class="row">
    				<div class="col-md-10 ml-auto mr-auto">
    					<h2 class="title">Các bài viết mới nhất</h2>
    					<br>
    					<div class="row">
                            @foreach ($posts as $post)
    						<div class="col-md-4">
    							<div class="card card-blog">
    								<div class="card-image">
    									<a href="#pablo">
    										<img style="min-width: 286.66px;min-height:300.98px;max-width: 286.66px;max-height:300.98px" class="img img-raised" src="{{ asset('uploads/post/' . (empty($post->getImagePost()->first()->path_image) ? '' : $post->getImagePost()->first()->path_image)) }}">
    									</a>
    								</div>
    								<div class="card-body">
    									<h6 class="card-category text-info">Chủ đề</h6>
    									<h5 class="card-title">
    										<a href="{{route('post.detail',$post->slug)}}">{{$post->caption}}</a>
    									</h5>
    									<p class="card-description">
    										{!!strlen($post->content) > 40 ? trim(substr($post->content,0,12)).'..' : $post->content !!}<br>
    									</p>
                                        <hr>
                                        <div class="card-footer">
                                            <div class="author">
        	                                    <a href="#pablo">
        	                                       <img src="{{ $post->getUser->getAvatar() }}" alt="..." class="avatar img-raised">
        	                                       <span>{{ $post->getUser->name }}</span>
        	                                    </a>
        	                                </div>
                                            <div class="stats">
         	                                    <i class="fa fa-clock-o" aria-hidden="true"></i>{{ $post->created_at->diffForHumans() }}
         	                                </div>
        	                            </div>
    								</div>
    							</div>
    						</div>
@endforeach
    						{{-- <div class="col-md-4">
    							<div class="card card-blog">
    								<div class="card-image">
    									<a href="#pablo">
    										<img class="img img-raised" src="assets/img/sections/roger-keller.jpg">
    									</a>
    								</div>
    								<div class="card-body">
    									<h6 class="card-category text-success">
    										Startups
    									</h6>
    									<h5 class="card-title">
    										<a href="#pablo">MIT’s Cheetah 3 robot is built to save lives</a>
    									</h5>
    									<p class="card-description">
    										The latest version of MIT’s Cheetah robot made its stage debut today at TC Sessions: Robotics in Cambridge, Mass. It’s a familiar project... <br>
    									</p>
                                        <hr>
                                        <div class="card-footer">
                                            <div class="author">
        	                                    <a href="#pablo">
        	                                       <img src="assets/img/faces/kaci-baum-2.jpg" alt="..." class="avatar img-raised">
        	                                       <span>Nickie Kelly</span>
        	                                    </a>
        	                                </div>
                                            <div class="stats">
         	                                    <i class="fa fa-clock-o" aria-hidden="true"></i> 5 min read
         	                                </div>
        	                            </div>
    								</div>
    							</div>
    						</div> --}}

    						{{-- <div class="col-md-4">
    							<div class="card card-blog">
    								<div class="card-image">
    									<a href="#pablo">
    										<img class="img img-raised" src="assets/img/sections/joshua-earlesz.jpg">
    									</a>
    								</div>

    								<div class="card-body">
    									<h6 class="card-category text-danger">
    										<i class="fa fa-free-code-camp" aria-hidden="true"></i> Enterprise
    									</h6>
    									<h5 class="card-title">
    										<a href="#pablo">Lionel Richie says “Hello” to startup investors</a>
    									</h5>
    									<p class="card-description">
    										Because developing a doctor-on-demand service that would allow personalized medical visits, booked through an app on a user’s phone is... <br>
    									</p>
                                        <hr>
                                        <div class="card-footer">
                                            <div class="author">
        	                                    <a href="#pablo">
        	                                       <img src="assets/img/faces/erik-lucatero-2.jpg" alt="..." class="avatar img-raised">
        	                                       <span>Mike John</span>
        	                                    </a>
        	                                </div>
                                            <div class="stats">
         	                                    <i class="fa fa-clock-o" aria-hidden="true"></i> 5 min read
         	                                </div>
        	                            </div>
    								</div>
    							</div>
    						</div> --}}
    					</div>
    				</div>
    			</div>
		    </div>
        </div>
        <div style="display: flex">
            <div style="margin: auto">
                {!! $posts->appends(request()->query())->links("pagination::bootstrap-4") !!}
            </div>
           
        </div>
    @endsection
