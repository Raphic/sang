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
				<div class="profile-preview-post">
					<div class="account-title">
						<h3>Review for Martha P'Hara Interiors</h3>
					</div><!-- account-title -->

					<div class="form-group">
						<p><strong>Select a Star Rating</strong></p>
						<span class="rating-star">
							<a href="#"><img src="resources/ratingStart.png"></a>
							<a href="#"><img src="resources/ratingStart.png"></a>
							<a href="#"><img src="resources/ratingStart.png"></a>
							<a href="#"><img src="resources/ratingStart.png"></a>
							<a href="#"><img src="resources/ratingStart.png"></a>
							<span>Roll over stars, then click to rate</span>
						</span>
					</div>
					
					<br>

					<div class="form-group">
						<p><strong>Your Review</strong></p>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
						<ol>
							<li>First item</li>
							<li>Second item</li>
							<li>Third item</li>
							<li>Fourth item</li>  
						</ol>
						<textarea class="form-control" rows="5"></textarea>
					</div>

					<br>

					<div class="form-group">
						<p><strong>Your Relationshop to the professional</strong></p>
						<div class="radio">
						  	<label>
							    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							    Option one is this and that&mdash;be sure to include why it's great
						  	</label>
						</div>
						<div class="radio">
						  	<label>
							    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							    Option two can be something else and selecting it will deselect option one
						  	</label>
						</div>
						<div class="radio">
						  	<label>
						    	<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
						    	Option three
						  	</label>
						</div>
						<div class="radio">
						  	<label>
						    	<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> Other
						  	</label>
						  	<input type="text" class="form-control" id="" placeholder="placeholder" disabled>
						</div>
					</div>

					<br>

					<div class="form-group">
						<label for="">Approximate Project Date</label>
						<div class="form-inline">
							<select class="form-control">
								<option>Month</option>
								<option>Month</option>
								<option>Month</option>
								<option>Month</option>
								<option>Month</option>
							</select>
							<select class="form-control">
								<option>Year</option>
								<option>Year</option>
								<option>Year</option>
								<option>Year</option>
								<option>Year</option>
							</select>
						</div>
					</div>

					<br>

					<div class="form-group">
						<label for="">Approximate Project Cost</label>
						<select class="form-control">
							<option>Choose one</option>
							<option>Choose one</option>
							<option>Choose one</option>
							<option>Choose one</option>
							<option>Choose one</option>
						</select>
					</div>

					<br>

					<div class="form-group">
						<label for="">Project Street Address</label>
						<p>*Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
						<input type="text" class="form-control" id="" placeholder="placeholder">
					</div>

					<br>

					<div class="form-group">
						<label for="">Your email</label>
						<p>*Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
						<input type="email" class="form-control" id="" placeholder="placeholder">
					</div>

					<br>

					<div class="form-group">
						<div class="checkbox required-term">
							<label>
								<input type="checkbox" value="">
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
							</label>
						</div>
					</div>

					<hr>

					<div class="form-group text-center profile-preview-post-submit">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div><!-- profile-preview-post -->
			</div>

			<div class="col-xs-12 visible-xs"><div class="clearfix"><hr></div></div>

			<div class="col-xs-12 col-sm-3">
				<div class="account-title">
					<h3>Frequently Aksed Questions</h3>
				</div><!-- account-title -->
				<div class="question-block">
					<div class="question dark-text">
						<p>Sed ut perspiciatis unde omnis?</p>
					</div><!-- question -->
					<div class="answers">
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
					</div><!-- answers -->
				</div><!-- question-block -->
				<div class="question-block">
					<div class="question dark-text">
						<p>Sed ut perspiciatis unde omnis?</p>
					</div><!-- question -->
					<div class="answers">
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
					</div><!-- answers -->
				</div><!-- question-block -->
			</div>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- account-main -->

<?php include 'footer.php' ?>