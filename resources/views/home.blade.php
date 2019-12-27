@extends('layout.Link-header')
<script>
$(window).load(function(){
  $(".stiki").sticky({ });
});
</script>
<style>
.stiki
{
    z-index: 99999 !important;
}
</style>

    <div class="all">
        <!-- //////////////////header//////////// -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="header-top">
                        <img width="100%" src="style/img/banner.png" href="home">
                    </div>
                </div>
            </div>
            <div class="stiki">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-menu row">
                                <div class="col-lg-2 col-sm-12">
                                    <button id="menu-btn">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <div class="logo">
                                        <a href="#" title="">
                                            <img src="style/img/logo.png" class="img-fluid">
                                        </a>
                                    </div>
                                    <button id="search-form-btn">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="col-lg-10 col-sm-12">
                                                                   <ul class="nav">
                                    <span id="close-menu-btn">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </span>
                                    <li class="nav-item">
                                        <a class="nav-link" href="home"> Home  </a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link icon-active" href="home.php"> Tin quốc tế  </a>
                                    </li> 
                                         <li class="dropdown">
                                    <a href="video.html" >Góc chuyên môn </a><button id="mm"><i class="fa fa-chevron-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Góc chuyên môn</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Góc chuyên môn</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Góc chuyên môn</a>
                                        </li>
                                    </ul>
                                        </li> 
                                     <li class="nav-item">
                                        <a class="nav-link" href="category.html"> Tin hội golf </a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="" class="nav-link" href="#"> Câu lạc bộ </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link icon-active" href="video.html">Giải đấu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> GolfnewsTV</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="video">Video </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> Góc chuyên môn</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link icon-active" href="#"> Du lịch golf </a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Thời trang </a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Bên lề</a>
                                    </li> 
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="header-banner">
                            <form class="search-form-header" style="display: none;">
                                <input type="text" name="" placeholder="Tìm kiếm">
                                <button id="search-icon-head"> <i style="color: white" class="fa fa-search"></i> </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="header-banner">
                        <img src="style/img/banner1.png">
                        <form class="search-form-header">
                            <input id="sear" type="text" name="" placeholder="Tìm kiếm">
                            <button id="search-icon-head"> <i style="color: white" class="fa fa-search"></i> </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!-- //////////////////Body//////////// -->
        <div class="container">
            <div class="box">
                <div style="background-color: white" class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 resonleft">
                       <div class="box-left">
                          <h5 class="box-left-title">Tin mới</h5>
                            <div class="row">
                                <div class="show-in-mobile"> 
                                    <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                    <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                </div>
                                <div class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>
                                    <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div  class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>
                                   <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>

                                     <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div  class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>

                                <div class="col-lg-12">
                                    <div class="box-left-post-img">
                                        <a href="#"><img style="width: 100%; margin-bottom: 10px;" src="style/img/qc.png"></a>
                                    </div>
                                </div>

                                  <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div  class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>

                                  <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>

                                    <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>

                                 <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>

                                    <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div  class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>

                                  <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>

                                    <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div  class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>

                                  <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post-img">
                                        <a href="#"><img style="width: 100%; margin-bottom: 10px;" src="style/img/qc.png">
                                    </div>
                                </div>

                                    <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>

                                 <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>

                                    <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div  class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>

                                  <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>

                                    <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div  class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>
                                  <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>
                                    <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>

                                  <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>
                                <div class="col-lg-12">
                                    <div class="box-left-post-img">
                                        <img style="width: 100%; margin-bottom: 10px;" src="style/img/qc.png">
                                    </div>
                                </div>

                                    <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>

                                  <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>

                                     <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>

                                  <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>
                                
                                    <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>

                                  <div class="qc show-in-mobile">
                                        <a href="#"><img src="style/img/banner.png"></a>
                                    </div>
                                
                                   <div class="show-in-mobile"> 
                                        <span class="show-title-1"><a href="#"><h6 class="title-mobile">Tin quốc tế </h6></a></span>
                                        <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                    </div>
                                    <div class="vector2"></div>
                                    <div class="col-lg-12">
                                        <div class="box-left-post">
                                            <div class="box-left-post-img">
                                                <a href="#"><img src="style/img/post.png"></a>
                                            </div>
                                            <div class="box-left-post-desc">
                                                <a href="#"><h6 class="post-title-left">Tin quốc tế</h6></a>
                                                <span class="box-left-day"><i class="fa fa-clock-o"></i> 2 giờ trước</span>
                                                <p>Chơi golf bao lâu để xuống được Single Handicap?</p>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 responright">
                      <div class="box-right">
                            <h5 class="box-right-title">Truyền hình</h5>
                            <div class="box-right-video">
                                <img style="width: 100%; height: 100%" src="style/img/video.png">
                            </div>
                            <div class="qc">
                                <a href="#"><img src="style/img/banner.png"></a>
                            </div>
                            <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="block-title-right hide-in-mobile">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Bên lề</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="show-in-mobile"> 
                                            <span class="show-title-1"><a href="#"><h6 class="post-title-left">Tin quốc tế </h6></a></span>
                                            <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                            <div class="vector2"></div>
                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh2.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                               <a href="#"><h6 class="post-title">Vì sao Tiger Woods đổi gậy wedge mới ở mỗi giải đấu?</h6></a>
                                                 <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                           <div class="slim-scroll">
                                             <div class="scrollbar">
                                                <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Thế đứng hợp lý giúp bạn tự tin đánh từ bunkerrrrrrrrrrrrr </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">Phương pháp giúp người chơi đo tốc độ green nhanh chóng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">4 điều ghi nhớ để có một cú phát bóng tốt </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="block-title-right hide-in-mobile">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Bên lề</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="show-in-mobile"> 
                                            <span class="show-title-1"><a href="#"><h6 class="post-title-left">Tin quốc tế </h6></a></span>
                                            <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                            <div class="vector2"></div>

                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh2.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                               <a href="#"><h6 class="post-title">Vì sao Tiger Woods đổi gậy wedge mới ở mỗi giải đấu?</h6></a>
                                                 <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                           <div class="slim-scroll">
                                             <div class="scrollbar">
                                                <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Thế đứng hợp lý giúp bạn tự tin đánh từ bunkerrrrrrrrrrrrr </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">Phương pháp giúp người chơi đo tốc độ green nhanh chóng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">4 điều ghi nhớ để có một cú phát bóng tốt </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="block-title-right hide-in-mobile">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Bên lề</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="show-in-mobile"> 
                                            <span class="show-title-1"><a href="#"><h6 class="post-title-left">Tin quốc tế </h6></a></span>
                                            <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                            <div class="vector2"></div>

                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh2.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                               <a href="#"><h6 class="post-title">Vì sao Tiger Woods đổi gậy wedge mới ở mỗi giải đấu?</h6></a>
                                                 <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                           <div class="slim-scroll">
                                             <div class="scrollbar">
                                                <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Thế đứng hợp lý giúp bạn tự tin đánh từ bunkerrrrrrrrrrrrr </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">Phương pháp giúp người chơi đo tốc độ green nhanh chóng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">4 điều ghi nhớ để có một cú phát bóng tốt </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="qc">
                                    <a href="#"><img src="style/img/banner.png"></a>
                                </div>
                            </div>
                              <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="block-title-right hide-in-mobile">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Bên lề</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="show-in-mobile"> 
                                            <span class="show-title-1"><a href="#"><h6 class="post-title-left">Tin quốc tế </h6></a></span>
                                            <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                            <div class="vector2"></div>

                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh2.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                               <a href="#"><h6 class="post-title">Vì sao Tiger Woods đổi gậy wedge mới ở mỗi giải đấu?</h6></a>
                                                 <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                           <div class="slim-scroll">
                                             <div class="scrollbar">
                                                <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Thế đứng hợp lý giúp bạn tự tin đánh từ bunkerrrrrrrrrrrrr </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">Phương pháp giúp người chơi đo tốc độ green nhanh chóng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">4 điều ghi nhớ để có một cú phát bóng tốt </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                               <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="block-title-right hide-in-mobile">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Bên lề</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="show-in-mobile"> 
                                            <span class="show-title-1"><a href="#"><h6 class="post-title-left">Tin quốc tế </h6></a></span>
                                            <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                            <div class="vector2"></div>

                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh2.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                               <a href="#"><h6 class="post-title">Vì sao Tiger Woods đổi gậy wedge mới ở mỗi giải đấu?</h6></a>
                                                 <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                           <div class="slim-scroll">
                                             <div class="scrollbar">
                                                <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Thế đứng hợp lý giúp bạn tự tin đánh từ bunkerrrrrrrrrrrrr </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">Phương pháp giúp người chơi đo tốc độ green nhanh chóng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">4 điều ghi nhớ để có một cú phát bóng tốt </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="block-title-right hide-in-mobile">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Bên lề</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="show-in-mobile"> 
                                            <span class="show-title-1"><a href="#"><h6 class="post-title-left">Tin quốc tế </h6></a></span>
                                            <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                            <div class="vector2"></div>

                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh2.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                               <a href="#"><h6 class="post-title">Vì sao Tiger Woods đổi gậy wedge mới ở mỗi giải đấu?</h6></a>
                                                 <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                           <div class="slim-scroll">
                                             <div class="scrollbar">
                                                <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Thế đứng hợp lý giúp bạn tự tin đánh từ bunkerrrrrrrrrrrrr </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">Phương pháp giúp người chơi đo tốc độ green nhanh chóng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">4 điều ghi nhớ để có một cú phát bóng tốt </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class="col-lg-12">
                                <div class="qc">
                                    <a href="#"><img src="style/img/banner.png"></a>
                                </div>
                            </div>
                                 <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="block-title-right hide-in-mobile">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Bên lề</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="show-in-mobile"> 
                                            <span class="show-title-1"><a href="#"><h6 class="post-title-left">Tin quốc tế </h6></a></span>
                                            <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                            <div class="vector2"></div>

                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh2.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                               <a href="#"><h6 class="post-title">Vì sao Tiger Woods đổi gậy wedge mới ở mỗi giải đấu?</h6></a>
                                                 <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                           <div class="slim-scroll">
                                             <div class="scrollbar">
                                                <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Thế đứng hợp lý giúp bạn tự tin đánh từ bunkerrrrrrrrrrrrr </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">Phương pháp giúp người chơi đo tốc độ green nhanh chóng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">4 điều ghi nhớ để có một cú phát bóng tốt </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="qc">
                                    <a href="#"><img src="style/img/banner.png"></a>
                                </div>
                                <div class="box-right-post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="block-title-right hide-in-mobile">
                                            <ul>
                                                <li>
                                                    <a href="quoc-te">Bên lề</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="show-in-mobile"> 
                                            <span class="show-title-1"><a href="#"><h6 class="post-title-left">Tin quốc tế </h6></a></span>
                                            <span class="show-title-2"><a href="#"><p>Xem tất cả</p></a></span>
                                            <div class="vector2"></div>

                                        </div>
                                        <div class="post-new-left">
                                            <div class="post-new-img">
                                                <a href="#"><img src="style/img/anh2.jpg"></a>
                                            </div>
                                            <div class="post-new-desc">
                                               <a href="#"><h6 class="post-title">Vì sao Tiger Woods đổi gậy wedge mới ở mỗi giải đấu?</h6></a>
                                                 <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                                <p> Hon 200 golfer tranh giai Caballo Open Championship 2019. Ngay 20 thang 9 nam 2019, giai dau dien ra rat thanh cong, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam, phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam,phát hiện ra tài năng trẻ Nguyễn Xuân Trường, một nhân tố vô cùng bí ẩn trong làng GOLF Việt Nam</p>
                                            </div>
                                        </div>
                                        <div class="post-new-right">
                                           <div class="slim-scroll">
                                             <div class="scrollbar">
                                                <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Thế đứng hợp lý giúp bạn tự tin đánh từ bunkerrrrrrrrrrrrr </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">Phương pháp giúp người chơi đo tốc độ green nhanh chóng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">4 điều ghi nhớ để có một cú phát bóng tốt </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link active">
                                                <a href="#"><h6 class="post-title">3 dạng chấn thương phổ biến trong golf và cách phòng tránh </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                             <div class="post-new-link">
                                                <a href="#"><h6 class="post-title">Matt Kuchar hé lộ lý do đổi bóng giúp anh có chiến thắng </h6></a>
                                                <p class="box-right-post-day"><i class="fa fa-clock-o"></i> 1 ngay truoc</p>
                                            </div>
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
        
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="js/slick-1.8.1/slick/slick.min.js"></script>
    <script src="js/SlimScroll.js"></script>
    <script src="js/slim.min.js"></script>
    <Script>
        $(document).ready(function() {
            $('.slide-post').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1.5
                    }
                }]
            });
        });
    </Script>
    @extends('layout.Link-footer')


