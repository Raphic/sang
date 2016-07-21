<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>DEHOME</title>

    <!-- Bootstrap -->
    
    <link href="resources/fontAwesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/sub_main.css" rel="stylesheet">

    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <br>
    <div class="header clearfix">
      <div class="container">
        <div class="row">
          <div class="header-top clearfix">
            <div class="col-sm-2">
              <div class="header-logo clearfix">
                <a href="#">
                  <img class="img-responsive" src="resources/logo.png">
                </a>
              </div><!-- header-logo -->
            </div>
            <div class="col-sm-8 col-md-7">
              <div class="header-search clearfix">
                <div class="input-group form-inline">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Tìm kiếm</button>
                  </span>
                </div>
              </div><!-- header-search -->
            </div>
            <div class="col-sm-2 col-md-3">
              <div class="header-login clearfix">
                <a id="userbox" href="#">
                  <img src="resources/userIcon.png"> doansang <span class="clo_red bold">(79,205)</span>
                </a>
              </div><!-- header-login -->
              <div id="userpanel">
                <ul>
                  <li>Hello, sangdoan1</li>
                  <li><a href="#">Notifications <span class="clo_red bold">(79,205)</span></a></li>
                  <li><a href="#">Bids Balance</a></li>
                  <li><a href="#">SMS &amp; Email Settings</a></li>
                  <li><a href="#">My Profile</a></li>
                  <li><a href="#">Make a Suggestion</a></li>
                  <li><a href="javascript:__doPostBack('Logout$btLogout','')" id="Logout_btLogout">Logout</a></li>
                </ul>
              </div>
              <script type="text/javascript">
                  $(document).ready(function () {
                      $("#userbox").click(function () {
                          $("#userpanel").toggle(200);
                      });
                  });
              </script>
            </div>
          </div><!-- header-top -->
        </div><!-- row -->
        <div class="row">
          <div class="main-menu">
            <nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Menu</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav nav-pills nav-justified">
                    <li class="dropdown active">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tìm Photo<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Nhà Phố</a></li>
                        <li><a href="#">Biệt Thự</a></li>
                        <li><a href="#">Nội Thất</a></li>
                        <li><a href="#">Phòng Khách</a></li>
                        <li><a href="#">Bếp</a></li>
                        <li><a href="#">Phòng Ngủ</a></li>
                        <li><a href="#">Phòng Bé Trai</a></li>
                      </ul>
                    </li>
                    <li class="dropdown active">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tìm Chuyên Gia<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Thiết Kế & Thi Công</a></li>
                        <li><a href="#">Thầu Xây Thô</a></li>
                        <li><a href="#">Thầu Nội Thất</a></li>
                        <li><a href="#">Thi Công Cảnh Quan</a></li>
                        <li><a href="#">Nhà Thầu Điện Lạnh</a></li>
                        <li><a href="#">Tất Cả Nhà Thầu</a></li>
                      </ul>
                    </li>
                    <li class="dropdown active">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Showroom<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Trang Trí Nội Thất</a></li>
                        <li><a href="#">Vật Liệu Hoàn Thiện</a></li>
                        <li><a href="#">Vật Liệu Thô</a></li>
                      </ul>
                    </li>
                    <li class="dropdown active">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bài Viết<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Kiến Trúc</a></li>
                        <li><a href="#">Nội Thất</a></li>
                        <li><a href="#">Trang Trí</a></li>
                        <li><a href="#">Cảnh Quan</a></li>
                        <li><a href="#">Xây Dựng</a></li>
                        <li><a href="#">Vật Liệu</a></li>
                      </ul>
                    </li>
                    <li class="dropdown active">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gốc Tư Vấn<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Câu Hỏi Thường Gặp</a></li>
                        <li><a href="#">Hỏi Chuyên Gia</a></li>
                      </ul>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>  
          
        </div><!-- row -->
      </div>
    </div><!-- header -->   