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
				
				<div class="col-xs-12 col-sm-12 col-md-12">
					<label for="=">User Name</label>
					<div class="form-group">
						<input type="text" class="form-control" id="" placeholder="placeholder">
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<label for="=">User Name</label>
					<div class="form-group">
						<input type="text" class="form-control" id="" placeholder="placeholder">
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<label for="=">User Name</label>
					<div class="form-group">
						<input type="text" class="form-control" id="" placeholder="placeholder">
					</div>
				</div>
				
				<div class="col-xs-12 visible-xs"><div class="clearfix"><br></div></div>
				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<label for="=">Lĩnh vực chính</label> <span class="red-text">*</span>
						<select class="form-control">
							<option>Kitchen &amp; Bath Designers</option>
							<option>Kitchen &amp; Bath Designers</option>
							<option>Kitchen &amp; Bath Designers</option>
							<option>Kitchen &amp; Bath Designers</option>
							<option>Kitchen &amp; Bath Designers</option>
						</select>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<label for="=">User Name</label>
					<div class="form-group">
						<input type="text" class="form-control" id="" placeholder="placeholder">
					</div>
				</div>
				
				<div class="col-xs-12 visible-xs"><div class="clearfix"><br></div></div>
				
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<label for="=">Services Provided</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
				
				<div class="col-xs-12 visible-xs"><div class="clearfix"><br></div></div>
				
				
				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="form-group">
						<label for="=">Services Provided</label>
						<input type="text" class="form-control" id="" placeholder="placeholder">
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="form-group">
						<label for="=">Services Provided</label>
						<input type="text" class="form-control" id="" placeholder="placeholder">
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-2">
					<div class="form-group">
						<label for="=">Quận</label>
						<select class="form-control">
							<option>Kitchen &amp; Bath Designers</option>
							<option>Kitchen &amp; Bath Designers</option>
							<option>Kitchen &amp; Bath Designers</option>
							<option>Kitchen &amp; Bath Designers</option>
							<option>Kitchen &amp; Bath Designers</option>
						</select>
					</div>
				</div>
				
				<div class="col-xs-12 visible-xs"><div class="clearfix"><br></div></div>
				
				
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="form-group">
						<label for="=">Services Provided</label>
						<input type="text" class="form-control" id="" placeholder="placeholder">
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-3">
					<div class="form-group">
						<label for="=">Services Provided</label>
						<input type="text" class="form-control" id="" placeholder="placeholder">
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-3">
					<div class="form-group">
						<label for="=">Quận</label>
						<select class="form-control">
							<option>Kitchen &amp; Bath Designers</option>
							<option>Kitchen &amp; Bath Designers</option>
							<option>Kitchen &amp; Bath Designers</option>
							<option>Kitchen &amp; Bath Designers</option>
							<option>Kitchen &amp; Bath Designers</option>
						</select>
					</div>
				</div>
				
				<div class="col-xs-12 visible-xs"><div class="clearfix"><br></div></div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<label for="=">Services Provided</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
				
				<div class="col-xs-12 visible-xs"><div class="clearfix"><br></div></div>
				
				<div class="col-xs-12 col-sm-12 col-md-4">
				<input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox" />
				<label for="checkboxG1" class="css-label">Thiết Kế Kiến Trúc</label>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-4">
				<input type="checkbox" name="checkboxG2" id="checkboxG2" class="css-checkbox" />
				<label for="checkboxG2" class="css-label">Thiết kế & Thi Công</label>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-4">
				<input type="checkbox" name="checkboxG3" id="checkboxG3" class="css-checkbox" />
				<label for="checkboxG3" class="css-label">Thi Công Xây Dựng</label>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-4">
				<input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox" />
				<label for="checkboxG1" class="css-label">Thiết Kế Kiến Trúc</label>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-4">
				<input type="checkbox" name="checkboxG2" id="checkboxG2" class="css-checkbox" />
				<label for="checkboxG2" class="css-label">Thiết kế & Thi Công</label>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-4">
				<input type="checkbox" name="checkboxG3" id="checkboxG3" class="css-checkbox" />
				<label for="checkboxG3" class="css-label">Thi Công Xây Dựng</label>
				</div>
				
				<div class="col-xs-12 visible-xs"><div class="clearfix"><br></div></div>
				
				
				
				<div class="form-group text-center">
						<button type="submit" class="btn btn-default">Done editing</button>
				</div>
				
				
				
				
				<!-- profile-edit -->
			</div>

			<div class="col-xs-12 visible-xs"><div class="clearfix"><hr></div></div>

			<div class="col-xs-12 col-sm-3">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- account-main -->

<?php include 'footer.php' ?>