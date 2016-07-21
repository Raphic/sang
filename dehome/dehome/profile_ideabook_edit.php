<?php include 'header.php' ?>

<div class="main upload-main clearfix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="upload-page-title">
					<h3>Edit Ideabook</h3>
				</div><!-- upload-page-title -->

				<br>

				<div class="form-group">
					<div class="form-inline">
						<button class="btn btn-default upload-step-3-done">Done</button>
						<button class="btn btn-default">Move Photos to...</button>
						<button class="btn btn-default">Move Photos to...</button>
						<button class="btn btn-default">Coppy Photos to...</button>
						<button class="btn btn-default">Remove Photos</button>
					</div>
				</div>

				<br>

				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							Ideabook Title
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<input type="text" class="form-control" placeholder="placeholder"></input>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-2">
							Description
						</div>
						<div class="col-xs-12 col-sm-9 col-md-10">
							<textarea class="form-control" rows="3" placeholder="placeholder"></textarea>
						</div>
					</div>
				</div>

				<br>

				<div class="form-group text-left">
					<div class="checkbox">
						<span>Edit photo information. Click the "Done" button on top when finished.</span>
						<label class="pull-right">
							<input type="checkbox"> 2 photos
						</label>
					</div>
				</div>
				<div class="form-group">
					<div class="upload-step-3-images profile-ideabook-images"><!--

						<?php for ($i=0; $i < 10; $i++) { ?>

						--><div class="upload-step-3-image profile-ideabook-image">
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
		</div><!-- row -->
	</div><!-- container -->
</div><!-- upload-main -->

<?php include 'footer.php' ?>