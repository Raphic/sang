<?php include 'header.php' ?>

<div class="main account-main clearfix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="accout-cover clearfix">
					<img src="resources/accountCover.png">
				</div>
			</div>
		</div>

		<div class="row"><div class="col-xs-12"><div class="clearfix"><br></div></div></div>

		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-2">
				<div class="account-avatar">
					<div class="avatar" style="background-image: url(resources/imageDemo.png);">
						<a href="#" class="change-avatar">Đổi Avatar</a>
					</div><!-- avatar -->
				</div><!-- account-avatar -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-7">
				<div class="account-nav clearfix">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
						  	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#account-nav" aria-expanded="false">
							    <span class="sr-only">Toggle navigation</span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
						  	</button>
						</div>
						<div class="collapse navbar-collapse" id="account-nav">
						  	<ul class="nav navbar-nav">
						  		<li class="active">
						  			<a href="#">Overview</a>
						        </li>
						        <li>
						  			<a href="#">Projects</a>
						        </li>
						        <li>
						  			<a href="#">Overview</a>
						        </li>
						        <li>
						  			<a href="#">Projects</a>
						        </li>
						  	</ul>
						</div>
					</nav>
				</div><!-- account-nav -->
			</div>
			<div class="col-xs-12 col-sm-3">
				<div class="account-socials clearfix">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-yahoo"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-skype"></i></a>
				</div><!-- account-socials -->
			</div>
		</div>

		<div class="row"><div class="col-xs-12"><div class="clearfix"><hr style="margin-top: -8px;"></div></div></div>

		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-2">
			</div>
			<div class="col-xs-12 col-sm-6 col-md-7">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#forgot">
					Forgot popup
				</button>

				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#register">
					Register popup
				</button>

				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login">
					Login popup
				</button>

				<div class="forgot-popup modal fade" id="forgot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<p><img src="resources/logo.png"></p>
								<h4 class="modal-title" id="myModalLabel">Quên mật khẩu - phải làm sao?</h4>
								<p>Bạn hãy cung cấp email mà bạn đã đăng ký với hệ thống chúng tôi. Hệ thống sẽ gửi email cách thiết lập mật khẩu mới</p>
							</div>
							<div class="modal-body">
								<div class="input-group">
			                  		<p class="clearfix text-center"><input type="text" class="form-control" placeholder="Địa chỉ email của bạn"></p>
			                  		<p class="clearfix text-center"><button class="btn btn-default" type="button">Gửi yêu cầu</button></p>
				                </div>
				                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
							</div>
						</div>
					</div>
				</div><!-- forgot -->

				<div class="forgot-popup register-popup modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<p><img src="resources/logo.png"></p>
								<h4 class="modal-title" id="myModalLabel">Hân hoan đến với chúng tôi</h4>
								<p>67829 người đang sử dụng dehome. Hãy đăng ký để giao lưu với cộng đồng</p>
							</div>
							<div class="modal-body">
								<p class="register-with">ĐĂNG KÝ VỚI</p>
								<p class="register-socials">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-yahoo"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-skype"></i></a>
								</p>
								<p class="register-with">HOẶC</p>
								<div class="input-group">
			                  		<p class="clearfix text-center"><input type="text" class="form-control" placeholder="Địa chỉ email của bạn"></p>
			                  		<p class="clearfix text-center"><input type="password" class="form-control" placeholder="Password. (Must be 8 Characters)"></p>
			                  		<p class="clearfix text-center">
			                  			<select class="form-control" placeholder="Bạn là?<">
			                  			  <option value="" selected="">---Bạn là?---</option>	
										  <option value="Chủ nhà">Chủ nhà</option>
										  <option value="Chuyên gia - Nhà thầu">Chuyên gia - Nhà thầu</option>
										  <option value="Showrom - Cửa hàng">Showroom - Cửa hàng</option>
										</select>
									</p>
			                  		<p class="clearfix text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
			                  		<p class="clearfix text-center"><button class="btn btn-default" type="button">Gửi yêu cầu</button></p>
				                </div>
				                <p>Bạn đã là thành viên? <a href="#" class="green">Hãy Đăng nhập!</a></p>
							</div>
						</div>
					</div>
				</div><!-- register -->

				<div class="forgot-popup login-popup modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<p><img src="resources/logo.png"></p>
								<h4 class="modal-title" id="myModalLabel">Đăng nhập! Để chia sẻ và cảm nhận</h4>
								<p>Bạn hãy cung cấp email mà bạn đã đăng ký với hệ thống chúng tôi. Hệ thống sẽ gửi email cách thiết lập mật khẩu mới</p>
							</div>
							<div class="modal-body">
								<div class="input-group">
			                  		<p class="clearfix text-center"><input type="text" class="form-control" placeholder="Địa chỉ email của bạn"></p>
			                  		<p class="clearfix text-center"><input type="password" class="form-control" placeholder="Password. (Must be 8 Characters)"></p>
			                  		<p class="clearfix text-center">
			                  			<span style="max-width: 300px; display: block; margin: auto;">
			                  				<span class="pull-left"><input type="checkbox"> Ghi nhớ trên máy này</span>
			                  				<a href="#" class="pull-right green">Quên mật khẩu?</a>
			                  			</span>
			                  		</p>
			                  		<p class="clearfix text-center"><button class="btn btn-default" type="button">Đăng nhập</button></p>
				                </div>
				                <p class="login-with">HOẶC ĐĂNG NHẬP VỚI</p>
				                <p class="login-socials">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-yahoo"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-skype"></i></a>
								</p>
								<p>Bạn chưa phải thành viên? <a href="#" class="green">Hãy Đăng ký ngay bây giờ!</a></p>
							</div>
						</div>
					</div>
				</div><!-- login -->
			</div>
			<div class="col-xs-12 col-sm-3">
			</div>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- account-main -->

<?php include 'footer.php' ?>