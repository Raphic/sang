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
  <body class="product-overflow">

    <div class="main detail-main clearfix">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-7 col-md-8">
            <div class="product-detail-slider clearfix">
              <div id="product-detail-slider" class="carousel slide" data-ride="carousel" style="height:100%">
                <div class="actions-center">
                  <a href="#" class="action-1"><span class="fa fa-plus"></span></a>
                  <a href="#" class="action-2"><span class="fa fa-envelope-o"></span></a>
                </div>
                <ol class="carousel-indicators">
                  <li data-target="#product-detail-slider" data-slide-to="0" class="active"></li>
                  <li data-target="#product-detail-slider" data-slide-to="1"></li>
                  <li data-target="#product-detail-slider" data-slide-to="2"></li>
                </ol>
                <!-- carousel-indicators -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="resources/imageDemo.png">
						    </div>
                  <div class="item">
                    <img src="resources/imageDemo.png">
						    </div>
                  <div class="item">
                    <img src="resources/imageDemo.png">
						    </div>
                </div>
                <!-- carousel-inner -->
                <a class="left carousel-control" href="#product-detail-slider" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left fa fa-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <!-- carousel-control -->
                <a class="right carousel-control" href="#product-detail-slider" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right fa fa-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                <!-- carousel-control -->
              </div>
              <!-- carousel -->
            </div>
            <!-- product-detail-slider -->
            <div class="product-detail-name">
              <h3>
                <a href="#">Tên của dự án</a>
              </h3>
              <span class="">
                <span>Có 78 người thích</span>
                <span> | </span>
                <span>23 câu hỏi</span>
              </span>
            </div>
            <!-- product-detail-name -->
            <div class="product-detail-excerpt">
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              <div class="product-detail-read-more default">
                <a href="#">
                  <span>Hiển thị thêm</span>
                  <i class="fa fa-angle-down"></i>
                  <i class="fa fa-angle-up"></i>
                </a>
              </div>
              <!-- product-detail-read-more -->
            </div>
            <!-- product-detail-excerpt -->
            <div class="product-detail-socials">
              <a href="#">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="#">
                <i class="fa fa-yahoo"></i>
              </a>
              <a href="#">
                <i class="fa fa-linkedin"></i>
              </a>
              <a href="#">
                <i class="fa fa-skype"></i>
              </a>
            </div>
            <!-- product-detail-socials -->
          </div>

          <div class="col-xs-12 visible-xs">
            <div class="clearfix">
              <br>
                <br>
            </div>
          </div>

          <div class="col-xs-12 col-sm-5 col-md-4 product-fixed">
            <div class="product-detail-content">
              <div class="product-detail-owner">
                <a href="#">
                  <img src="resources/userIcon.png">
							Tên người tạo dự án
						</a>
                <span class="owner-rating">
                  <?php  for ($j=0; $j < 5; $j++) { ?>

                  <img src="resources/ratingStart.png">

                    <?php } ?>

                    <span class="owner-rating-numer">7 đánh giá</span>
                  </span>
                <!-- owner-rating -->
              </div>
              <!-- product-detail-owner -->
              <div class="product-detail-ask">
                <button class="btn btn-default product-detail-ask-btn green-btn" data-toggle="modal" data-target="#product-detail-ask-popup">Hiện có 23 câu hỏi - Đặt câu hỏi</button>
                <div class="product-detail-ask-popup modal fade" id="product-detail-ask-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Đặt câu hỏi cho hình ảnh này</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <input type="text" class="form-control" id="" placeholder="placeholder">
                            <div class="text-right">
                              Characters left <span>70</span>
                            </div>
                          </div>
                        <div class="form-group">
                          <textarea class="form-control" rows="4" placeholder="placeholder"></textarea>
                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-default green-btn">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- change-avatar -->
              </div>
              <!-- product-detail-ask -->

              <?php for ($i=0; $i < 2; $i++) { ?>

              <div class="product-detail-user ask">
                <a href="#" class="user">
                  <img src="resources/userIcon.png">
							Tên người tạo dự án
						</a>
                <!-- user -->
                <span class="user-time">Hôm qua</span>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="product-detail-text">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div>
                <!-- product-detail-text -->
              </div>
              <!-- product-detail-user -->

              <?php for ($j=0; $j < 2; $j++) { ?>

              <div class="product-detail-user answer">
                <a href="#" class="user">
                  <img src="resources/userIcon.png">
							Tên người tạo dự án
						</a>
                <!-- user -->
                <span class="user-time">2 tiếng trước</span>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="product-detail-text">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div>
                <!-- product-detail-text -->
              </div>
              <!-- product-detail-user -->

              <?php } ?>

              <div class="product-detail-user answer">
                <?php if ($i == 0) { ?>
                <span class="login-to-comment">
                  <a href="#">
                    <img src="resources/userIcon.png">Đăng nhập để bình luận
                  </a>
                </span>
                <?php } else { ?>
                <textarea class="form-control" rows="2" placeholder="Đăng nhập để bình luận"></textarea>
                <?php } ?>
              </div>
              <!-- product-detail-user -->

              <?php } ?>
            </div>
            <!-- product-detail-content -->
            <br>
              <div class="other-products">
					<h3>Dự án khác</h3>
					<div class="row other-product-row">
					<?php for ($i=0; $i < 8; $i++) { ?>
					<div class="other-product-image col-xs-6 col-sm-3 other-product-col">
						<a href="#" class="">
							<img src="resources/imageDemo.png" class="img-responsive">
						</a>
				        <a href="vnexpress.net" style="height:100%; width:100%; display:block">
					        <div class="grid grid-popup">
								<div class="actions-center">
									<a href="#" class="action-1"><i class="fa fa-plus"></i></a>
									<a href="#" class="action-2"><i class="fa fa-envelope-o"></i></a>
								</div><!-- actions-center -->
								<!--
								<div class="action-bottom">
									<a href="#">Xem chi tiết </a>
								</div> <!-- action-bottom -->
								-->
							</div><!-- grid-popup -->
				        </a>
					</div>
					<?php } ?>

					</div>
				</div>
              <!-- other-products -->
            </div>
        </div>
        <!-- row -->
		<div id="lbClose" style="cursor:pointer;top:15px; right:30px; height:30px; width:30px; display:block; position:fixed; z-index:999; background:#000; text-align:center; color:#fff; font-size:24px;">X</div>
      </div>
      <!-- container -->
    </div>
    <!-- detail-main -->
  </body>
</html>