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

				<div class="form-group">
					<div class="form-inline">
						<button class="btn btn-default upload-step-3-done">Done</button>
						<button class="btn btn-default">Remove Photos</button>
					</div>
				</div>
				<div class="form-group text-left">
					<div class="checkbox">
						<span>Edit photo information. Click the "Done" button on top when finished.</span>
						<label class="pull-right">
							<input type="checkbox"> 2 photos
						</label>
					</div>
				</div>
				<div class="form-group">
					<div class="upload-step-3-images"><!--

						<?php for ($i=0; $i < 4; $i++) { ?>

						--><div class="upload-step-3-image">
							<div class="checkbox text-right">
							    <label>
							      	<input type="checkbox">
							    </label>
						  	</div>
							<div class="image-detail clearfix">
								<a href="#">
									<img src="resources/imageDemo.png" class="img-responsive">
								</a>
							</div>
							<br>
							<div class="image-caption">
								test
							</div>
						</div><!-- upload-step-3-image --><!--

						<?php } ?>
					--></div><!-- upload-step-3-images -->
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