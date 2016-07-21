<?php include 'header.php' ?>

<div class="main home-main list-pro-main clearfix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-2">
				<div class="sidebar sidebar-left home-sidebar-left clearfix">
					<nav class="sidebar-nav navbar navbar-default">
						<div class="navbar-header">
						  	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-nav-collapse-2" aria-expanded="false">
							    <span class="sr-only">Toggle navigation</span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
						  	</button>
							<li class="dropdown active" style="list-style:none">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="navbar-brand"><strong>Bài viết <span class="caret"></strong></a>
							  <ul class="dropdown-menu" style="margin-top:10%;">
								<li><a href="#">Kiến Trúc</a></li>
								<li><a href="#">Nội Thất</a></li>
								<li><a href="#">Trang Trí</a></li>
								<li><a href="#">Cảnh Quan</a></li>
								<li><a href="#">Xây Dựng</a></li>
								<li><a href="#">Vật Liệu</a></li>
							  </ul>
							</li>
						</div>

						<div class="collapse navbar-collapse" id="sidebar-nav-collapse-2">
						  	<ul class="nav navbar-nav">
						  		<li class="need-bullet">
						  			<a href="#">Kinh nghiệm làm nhà</a>
						        </li>
						        <li class="need-bullet">
						  			<a href="#">Kinh nghiệm làm nhà</a>
						        </li>
						        <li class="need-bullet">
						  			<a href="#">Kinh nghiệm làm nhà</a>
						        </li>
						        <li class="need-bullet">
						  			<a href="#">Kinh nghiệm làm nhà</a>
						        </li>
						        <li class="need-bullet">
						  			<a href="#">Kinh nghiệm làm nhà</a>
						        </li>
						  	</ul>
						</div>
					</nav>
					<div class="product-read-more">
						<a href="#">
							<span>Xem thêm</span>
							<i class="fa fa-angle-down"></i>
							<!--
							<i class="fa fa-angle-up"></i>
							-->
						</a>
					</div><!-- product-read-more -->
				</div><!-- sidebar-left -->
			</div>

			<div class="col-xs-12 visible-xs"></div>

			<div class="col-xs-12 col-sm-9 col-md-10">
				<div class="main-content home-main-content clearfix">
					<?php
						include 'newslist-section.php';

						// uncomment under line to get dummy products in list view
						getProducts(true, true, 3);

						// uncomment under line to get dummy products in grid view
						// getProducts(false, true, 20);
					?>
				</div><!-- home-main-content -->
			</div>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- home-main -->

<?php include 'footer.php' ?>