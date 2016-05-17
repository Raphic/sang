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
									<button type="button" class="btn btn-default user-photo">Use Photo</button>
								</div>
							</div>
						</div>
					</div><!-- change-avatar -->
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
			<div class="col-xs-12 col-sm-3 col-sm-push-6 col-md-push-7">
				<div class="account-socials clearfix">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-yahoo"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-skype"></i></a>
				</div><!-- account-socials -->
			</div>
			<div class="col-xs-12 col-sm-6 col-md-7 col-sm-pull-3">
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
		</div>

		<div class="row"><div class="col-xs-12"><div class="clearfix"><hr class="account-separate"></div></div></div>

		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-2">
				<div class="account-title hidden-xs">
					<h3>Photo Questions</h3>
				</div><!-- account-title -->
				<a href="#" class="green-text">Questions to this Pro</a>
			</div>

			<div class="col-xs-12 visible-xs"><div class="clearfix"><hr></div></div>
			
			<div class="col-xs-12 col-sm-9 col-md-10">
				<div class="account-title">
					<h3>4,4488 Questions</h3>
				</div><!-- account-title -->

				<div class="account-questions">

					<?php for ($i=0; $i < 10; $i++) { ?>

					<div class="account-question">
						<div class="row">
							<div class="col-xs-12 col-sm-4 col-md-3">
								<div class="question-image clearfix">
									<a href="#">
										<img src="resources/imageDemo.png" class="img-responsive">
									</a>
								</div><!-- question-image -->
							</div>

							<div class="col-xs-12 visible-xs"><br></div>

							<div class="col-xs-12 col-sm-8 col-md-9">
								<div class="question-content">
									<div class="question-head">
										<h4><a href="#" class="green-text">Pillow</a></h4>
										<p>Posted by <a href="#" class="dark-text">Hirray Spencer Design</a> | March 1,2016</p>
									</div><!-- question-head -->
									<div class="question-main">
										<p>1 Comment</p>
										<div class="question-comment">
											<div class="question-comment-image">
												<img src="resources/imageDemo.png" class="img-responsive">
											</div><!-- question-comment-image --><!--
											--><div class="question-comment-comment">
												<span><a href="#" class="dark-text">Hirray Spencer Design</a> | March 1,2016</span>
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
											</div><!-- question-comment-comment -->
										</div><!-- question-comment -->
									</div><!-- question-main -->
								</div><!-- question-content -->
							</div>
						</div>
					</div><!-- account-question -->

					<hr>

					<?php } ?>

				</div><!-- account-questions -->

				<div class="paging-nav text-center">
					<button class="btn btn-default active">1</button>
					<?php for ($i=2; $i < 6; $i++) { ?>
					<button class="btn btn-default"><?php echo $i; ?></button>
					<?php } ?>
					<button class="btn btn-default paging-nav-next">Next Page <i class="fa fa-angle-right"></i></button>
				</div>

			</div>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- account-main -->

<?php include 'footer.php' ?>