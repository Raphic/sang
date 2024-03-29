<?php include 'header.php' ?>

<div class="main upload-main clearfix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-md-2">
				<div class="upload-actions">

				</div><!-- upload-actions -->
			</div>

			<div class="col-xs-12 visible-xs"><div class="clearfix"><br></div></div>
			
			<div class="col-xs-12 col-sm-6 col-md-7">
				<div class="upload-page-title">
					<h3>Upload Photos to a Project</h3>
				</div><!-- upload-page-title -->

				<br>

				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

				<br>

				<div class="form-group">
          			<label for="">Select Project <span class="red-text">*</span></label>
					<select class="form-control">
						<option>Project</option>
						<option>Project</option>
						<option>Project</option>
						<option>Project</option>
						<option>Project</option>
					</select>
          		</div>
          		<div class="form-group">
          			<label for="">Category</label><br>
					<label class="radio-inline">
						<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Spaces
					</label>
					<label class="radio-inline">
						<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Spaces
					</label>
					<label class="radio-inline">
						<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Spaces
					</label>
					<label class="radio-inline">
						<input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4"> Spaces
					</label>
          		</div>
          		<div class="form-group">
          			<label for="">Country</label>
					<select class="form-control">
						<option>Vietnam</option>
						<option>Vietnam</option>
						<option>Vietnam</option>
						<option>Vietnam</option>
						<option>Vietnam</option>
					</select>
          		</div>
          		<div class="form-group">
          			<label for="">City</label>
					<input type="text" class="form-control" id="" placeholder="placeholder">
          		</div>
          		<div class="form-group">
          			<label for="">Zipcode</label>
					<input type="text" class="form-control" id="" placeholder="placeholder">
          		</div>
          		<div class="form-group">
          			<label for="">Link to Website</label>
					<input type="text" class="form-control" id="" placeholder="placeholder">
          		</div>
          		<div class="form-group">
          			<label for="">Key words</label>
					<textarea class="form-control" rows="3" placeholder="placeholder"></textarea>
					<span class="pull-right text-right">Characters Left: 300</span>
          		</div>
          		<div class="form-group">
          			<label for="">Photo Credit</label>
					<textarea class="form-control" rows="3" placeholder="placeholder"></textarea>
          		</div>
          		<div class="form-group">
          			<label for="">Select Photos</label>
          			<div class="form-with-border">
						<a href="#" class="thumbnail add-photo">
							<span><i class="fa fa-plus"></i> Add Photo</span>
						</a>
						<a href="#" class="thumbnail">
							<img src="resources/imageDemo.png" class="img-responsive">
						</a>
						<a href="#" class="thumbnail uploading">
							<img src="resources/imageDemo.png" class="img-responsive">
							<div class="dim-background">
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
						</a>
          			</div>
          		</div>
          		<div class="form-group">
          			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          		</div>

          		<hr>

          		<div class="form-group upload-button-form-control">
          			<button class="btn btn-default upload-button disabled">Upload</button>
          		</div>
			</div>

			<div class="col-xs-12 visible-xs"><div class="clearfix"><hr></div></div>

			<div class="col-xs-12 col-sm-3 upload-right-col">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
				<div class="row">
					<div class="col-xs-2">
						<div class="upload-check active">
							<i class="fa fa-check"></i>
						</div>
					</div>
					<div class="col-xs-10">
						<label>Do's</label>
						<ul>
							<li>Sed ut perspiciatis unde omnis iste natus</li>
							<li>Sed ut perspiciatis unde omnis iste natus</li>
							<li>Sed ut perspiciatis unde omnis iste natus</li>
							<li>Sed ut perspiciatis unde omnis iste natus</li>
						</ul>
					</div>

					<div class="col-xs-12"><div class="clearfix"><br></div></div>

					<div class="col-xs-2">
						<div class="upload-check">
							<i class="fa fa-close"></i>
						</div>
					</div>
					<div class="col-xs-10">
						<label>Don'ts</label>
						<ul>
							<li>Sed ut perspiciatis unde omnis iste natus</li>
							<li>Sed ut perspiciatis unde omnis iste natus</li>
							<li>Sed ut perspiciatis unde omnis iste natus</li>
							<li>Sed ut perspiciatis unde omnis iste natus</li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- upload-main -->

<?php include 'footer.php' ?>