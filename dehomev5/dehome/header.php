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
                <a href="#">
                  <img src="resources/userIcon.png"> Đăng nhập
                </a>
              </div><!-- header-login -->
            </div>
          </div><!-- header-top -->
        </div><!-- row -->
        <div class="row">
          <div class="header-bottom clearfix">
            <div class="col-sm-2 header-bottom-col header-bottom-col-1">
              <div class="header-left-menu dropdown clearfix">
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="header-left-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="header-left-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div><!-- header-left-menu -->
            </div>
            <div class="col-sm-10 header-bottom-col header-bottom-col-2">
              <div class="header-right-menu clearfix">
                <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-right-menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">
                        <i class="fa fa-home"></i>
                      </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="header-right-menu">
                      <ul class="nav navbar-nav">
                        <li>
                          <img class="menu-slash hidden-xs" src="resources/slashIcon.png">
                          <a href="#">Chăm sóc khách hàng</a>
                        </li>
                        <li class="active">
                          <img class="menu-slash hidden-xs" src="resources/slashIcon.png">
                          <a href="#">Điều khoản sử dụng</a>
                        </li>
                      </ul> 
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
              </div><!-- header-right-menu -->
            </div>
          </div><!-- header-bottom -->
        </div><!-- row -->
      </div>
    </div><!-- header -->