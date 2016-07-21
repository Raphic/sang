<?php include 'header.php' ?>

<div class="main account-main clearfix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="accout-cover clearfix">
					<img src="resources/accountCover.png">
					
					<button class="btn btn-default change-cover" data-toggle="modal" data-target="#change-avatar">Đổi cover</button>

					<div class="change-avatar-popup modal fade" id="change-avatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="myModalLabel">Choose Cover Photo</h4>
								</div>
								<div class="modal-body">
		                  			<div class="accout-change-avatar-row">
		                  				<div class="accout-change-avatar-col">
		                  					<div class="form-group">
												<select class="form-control">
													<option>Project</option>
													<option>Project</option>
													<option>Project</option>
													<option>Project</option>
													<option>Project</option>
												</select>
											</div>
											<div class="image-group"><!--
												<?php for ($i=0; $i < 20; $i++) { ?>

												--><a href="#">
													<img src="resources/imageDemo.png" class="img-responsive">
												</a><!--

												<?php } ?>
											--></div>
		                  				</div>
		                  				<div class="accout-change-avatar-col right-col">
		                  					<input id="selectImage" type="file" name="selectImage" style="display: none;"/>

		                  					<div class="drag-drop-container">
		                  						<div class="drag-drop">
		                  							<a href="#">
			              								<span>
			              									<i class="fa fa-plus"></i>
			              									Click or drag &amp; drop files here to upload
			              								</span>
			              							</a>
		                  						</div>
		                  					</div>
		                  				</div>
		                  			</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-default user-photo green-btn">Use Photo</button>
								</div>
							</div>
						</div>
					</div><!-- change-avatar -->
				</div>
			</div>
		</div>

		<div class="row"><div class="col-xs-12"><div class="clearfix"><br></div></div></div>

		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-3">
				<div class="account-avatar">
					<div class="avatar" style="background-image: url(resources/imageDemo.png);">
						<a href="#" class="change-avatar">Đổi Avatar</a>
					</div><!-- avatar -->
				</div><!-- account-avatar -->
				<div class="info-acc">
					<a href="#" class="name-acc">Tên Acc AAAAAA</a>
					<div>
						<p>Showroom -Cửa Hàng</p>
						<div class="rating-stars">
	                        <span class="fa fa-star-o"></span>
	                        <span class="fa fa-star-o"></span>
	                        <span class="fa fa-star-o"></span>
	                        <span class="fa fa-star-o"></span>
	                        <span class="fa fa-star-o"></span>
	                    </div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-3 col-sm-push-6 col-md-push-6">
				<div class="account-socials clearfix">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-yahoo"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-skype"></i></a>
				</div><!-- account-socials -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-sm-pull-3">
				<div class="account-nav clearfix">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
						  	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#account-nav" aria-expanded="false">
							    <span class="sr-only">Toggle navigation</span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
						  	</button>
						  	<span class="navbar-brand visible-xs" href="#">Menu</span>
						</div>
						<div class="collapse navbar-collapse" id="account-nav">
						  	<ul class="nav navbar-nav">
						  		<li class="active">
						  			<a href="#">Thông Tin Chung</a>
						        </li>
						        <li>
						  			<a href="#">Sản Phẩm</a>
						        </li>
						        <li>
						  			<a href="#">Đánh Giá</a>
						        </li>
						        <li>
						  			<a href="#">Yêu Thích</a>
						        </li>
						        <li>
						  			<a href="#">Hoạt Động</a>
						        </li>
						  	</ul>
						</div>
					</nav>
				</div><!-- account-nav -->
			</div>
		</div>

		<div class="row"><div class="col-xs-12"><div class="clearfix"><hr class="account-separate"></div></div></div>

		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-2">
				<div class="account-actions">
					<button class="btn btn-default">Overiew</button>
					<button class="btn btn-default">Overiew</button>
				</div><!-- account-actions -->
			</div>

			<div class="col-xs-12 visible-xs"><div class="clearfix"><br></div></div>
			
			<div class="col-xs-12 col-sm-6 col-md-7">
				<div class="account-excerpt">
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<div class="account-read-more default">
						<a href="#">
							<span>Hiển thị thêm</span>
							<i class="fa fa-angle-down"></i>
							<i class="fa fa-angle-up"></i>
						</a>
					</div><!-- account-read-more -->
				</div><!-- account-excerpt -->

				<div class="row"><div class="col-xs-12"><div class="clearfix"><hr></div></div></div>

				<div class="account-title">
					<h3>Các hình ảnh</h3>
				</div><!-- account-title -->
				<?php
					include 'products-section.php';

					/// uncomment under line to get dummy products in grid view
					getProducts(false, false, 6);
				?>

				<div class="row"><div class="col-xs-12"><div class="clearfix"><hr></div></div></div>

				<div class="account-title">
					<h3>Các câu hỏi</h3>
				</div><!-- account-title -->
				<div class="account-ask">
					<?php for ($i=0; $i < 2; $i++) { ?>

					<div class="account-user ask">
						<a href="#" class="user">
							<img src="resources/userIcon.png">
							Tên người tạo dự án
						</a><!-- user -->
						<span class="user-time">Hôm qua</span>
						<div class="row"><div class="col-xs-12"><div class="clearfix"></div></div></div>
						<div class="account-text">
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
						</div><!-- account-text -->
					</div><!-- account-user -->

					<?php for ($j=0; $j < 2; $j++) { ?>

					<div class="account-user answer">
						<a href="#" class="user">
							<img src="resources/userIcon.png">
							Tên người tạo dự án
						</a><!-- user -->
						<span class="user-time">2 tiếng trước</span>
						<div class="row"><div class="col-xs-12"><div class="clearfix"></div></div></div>
						<div class="account-text">
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
						</div><!-- account-text -->
					</div><!-- account-user -->

					<?php } ?>

					<?php } ?>
				</div><!-- account-ask -->
			</div>

			<div class="col-xs-12 visible-xs"><div class="clearfix"><hr></div></div>

			<div class="col-xs-12 col-sm-3">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- account-main -->

<?php include 'footer.php' ?>