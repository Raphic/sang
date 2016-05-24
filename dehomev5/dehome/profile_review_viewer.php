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
				<div class="account-actions">
					<button class="btn btn-default">Overiew</button>
					<button class="btn btn-default">Overiew</button>
				</div><!-- account-actions -->
			</div>

			<div class="col-xs-12 visible-xs"><div class="clearfix"><br></div></div>
			
			<div class="col-xs-12 col-sm-6 col-md-7">
				<div class="account-title">
					<h3>146 Reviews for Martha O'Hara Interiors</h3>
				</div><!-- account-title -->

				<div class="account-reviews">
				
					<?php for ($i=0; $i < 3; $i++) { ?>

					<div class="account-review">
						<div class="review-head">
							<div class="review-image">
								<a href="#">
									<img src="resources/imageDemo.png" class="img-responsive">
								</a>
							</div><!-- review-image -->
							<div class="review-name">
								<strong class="dark-text">Michelle Kirkby</strong>
								<div class="review-ratting">
									<?php for ($j=0; $j < 5; $j++) { 
										echo '<img src="resources/ratingStart.png">';
									} ?>
								</div><!-- review-ratting -->
							</div><!-- review-name -->
						</div><!-- review-head -->
						<div class="review-meta-data">
							<strong class="dark-text">Relationship:</strong> perspiciatis <br>
							<strong class="dark-text">Project Date:</strong> perspiciatis <br>
							<strong class="dark-text">Project Prices:</strong> perspiciatis <br>
						</div><!-- review-meta-data -->
						<div class="review-excerpt">
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							<a href="#" class="review-read-more">Read more <i class="fa fa-angle-down"></i></a>
						</div><!-- review-excerpt -->
						<div class="review-social-info">
							<a href="#">
								<i class="fa fa-thumbs-up"></i>
								9 Likes
							</a>
							<i class="date">October 19, 2015</i>
						</div><!-- review-social-info -->
					</div><!-- account-review -->

					<hr>

					<?php } ?>

				</div><!-- account-reviews -->

				<div class="paging-nav text-center">
					<button class="btn btn-default active">1</button>
					<?php for ($i=2; $i < 6; $i++) { ?>
					<button class="btn btn-default"><?php echo $i; ?></button>
					<?php } ?>
					<button class="btn btn-default paging-nav-next">Next Page <i class="fa fa-angle-right"></i></button>
				</div>

			</div>

			<div class="col-xs-12 visible-xs"><div class="clearfix"><hr></div></div>

			<div class="col-xs-12 col-sm-3">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- account-main -->

<?php include 'footer.php' ?>