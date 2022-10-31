
@extends('users.layout.main')
@push('css')
    <style>
        .title{
            color: white !important;
        }
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");
* {
  margin: 0px; padding: 0px;
  border: 0px; outline: 0px;
  box-sizing: border-box;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  text-decoration: none; list-style: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.search_con {
  padding: 5rem 0;
	 width: 100%;
   height: 100%
	 display: flex;
	 justify-content: flex-start;
	 align-items: center;
}
 .search_con .input_con {
   margin: auto;
	 width: 550px;
	 height: 2.5rem;
	 background-color: white;
	 border: 1px solid #2d4bf0;
	 display: flex;
	 align-items: center;
	 justify-content: space-between;
	 overflow: hidden;
	 border-radius: 9999px;
	 transition: all 0.2s ease;
	 outline: 3px solid transparent;
}
 .search_con .input_con:focus-within {
	 outline: 3px solid #c8d5f3;
}
 .search_con .input_con input {
	 padding: 0 0.5rem 0 1rem;
	 width: 100%;
	 font-size: 15px;
	 color: #1d1d1d;
	 font-family: &#39;
	Inter&#39;
	, sans-serif;
}
 .search_con .input_con span {
	 height: 100%;
	 display: flex;
	 align-items: center;
}
 .search_con .input_con span .bi {
	 padding: 0 0.5rem;
	 color: #1d1d1d;
	 font-size: 15px;
	 line-height: 2.5rem;
	 cursor: pointer;
	 color: rgba(0, 0, 0, 0.733);
}
 .search_con .input_con span .bi:hover {
	 color: #2d4bf0;
}
 .search_con .input_con span .bi-search {
	 padding-right: 1rem;
}
 .search_con .input_con .h-line {
	 height: 50%;
	 width: 1px;
	 background-color: #1d1d1d;
}
    </style>
@endpush
@section('contents')
<div class="header-3">
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
        <div class="container">
            <a class="navbar-brand mb-0" href="www.creative-tim.com"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                   
            </div>
        </div>
    </nav>

    <div class="page-carousel">
        <div class="filter"></div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item">
                    <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1465433045946-ba6506ce5a59?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
                        <div class="filter"></div>
                        <div class="content-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <h1 class="title">HomeWorkSolve</h1>
                                        <h5>Học tập là một kho báo đi theo chủ nhân của nó tới mọi nơi.</h5>
                                        <br>
                                        <div class="buttons">
                                            
                                            <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                <i class="fa fa-get-pocket"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='search_con'>
                                <form action="{{ route('user.index') }}" method="get" class="input_con">
                                  <input name="searchPost" type="text" placeholder='Tìm kiếm...' id="queryFind"/>
                                  <span id="clearBtn"><i class="bi bi-x-lg"></i></span>
                                  <span class='h-line'></span>
                                  <a href="https://t.me/rawnge" target="_blank">
                                  <span><i class="bi bi-search"></i></span>
                                    </a>
                                </form>
                              </div>
                        </div>
                       
                    </div>
                </div>

                <div class="carousel-item active">
                    <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1560785496-3c9d27877182?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80')">
                        <div class="filter"></div>
                        <div class="content-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 ml-auto mr-auto text-center">
                                        <h1 class="title">HomeWorkSolve</h1>
                                        <h5>Đừng xấu hổ khi không biết, chỉ xấu hổ khi không học.
                                        </h5>
                                        <br>
                                        <h6>Connect with us:</h6>
                                        <div class="buttons">
                                            <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='search_con'>
                                <form action="{{ route('user.index') }}" method="get" class="input_con">
                                  <input name="searchPost" type="text" placeholder='Tìm kiếm...' spellCheck="False" id="queryFind"/>
                                  <span id="clearBtn"><i class="bi bi-x-lg"></i></span>
                                  <span class='h-line'></span>
                                  <a href="https://t.me/rawnge" target="_blank">
                                  <span><i class="bi bi-search"></i></span>
                                    </a>
                                </form>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=874&q=80')">
                        <div class="filter"></div>
                        <div class="content-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 ml-auto text-right">
                                        <h2 class="title">HomeWorkSolve</h2>
                                        <h5>Tri thức ở đâu chúng tôi vươn cao tới đó.</h5>
                                        <br>
                                        <div class="buttons">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class='search_con'>
                                <form action="{{ route('user.index') }}" method="get" class="input_con">
                                  <input name="searchPost" type="text" placeholder='Tìm kiếm...' spellCheck="False" id="queryFind"/>
                                 
                                  <span class='h-line'></span>
                                  <a href="https://t.me/rawnge" target="_blank">
                                  <span><i class="fa fa-zoom"></i></span>
                                    </a>
                                </form>
                              </div>
                        </div>
                    </div>
                </div>
            </div>

            <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="fa fa-angle-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="fa fa-angle-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

@endsection

@push('js')
    <script>
        const clearBtn = document.getElementById("clearBtn");
const inputArea = document.getElementById("queryFind");

clearBtn.addEventListener("click", clear)

function clear(){
  inputArea.value = "";
}
    </script>
@endpush