<?php include 'header.php' ?>

<div class="main upload-main clearfix">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="upload-page-title clearfix">
					<h3>Title</h3>
				</div><!-- upload-page-title -->
			</div>		
			<div class="col-xs-12 col-sm-7 col-md-8">
				<a href="#" class="thumbnail">
					<img src="resources/imageDemo.png" class="img-responsive">
				</a>
			</div>

			<div class="col-xs-12 visible-xs"><hr></div>

			<div class="col-xs-12 col-sm-5 col-md-4">
				<div class="form-group">
          			<label for="">Title</label>
					<input type="text" class="form-control" id="" placeholder="placeholder">
          		</div>
          		<div class="form-group">
          			<label for="">Category</label><br>
          			<select class="form-control">
						<option>Project</option>
						<option>Project</option>
						<option>Project</option>
						<option>Project</option>
						<option>Project</option>
					</select>
          		</div>
          		<div class="form-group">
          			<label for="">Style</label>
					<input type="text" class="form-control" id="" placeholder="placeholder">
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
					<div class="text-right">Characters Left: 300</div>
          		</div>
          		<div class="form-group">
          			<label for="">Photo Credit</label>
					<textarea class="form-control" rows="3" placeholder="placeholder"></textarea>
          		</div>
          		<div class="form-group">
          			<label for="">Budget</label>
					<select class="form-control">
						<option>Vietnam</option>
						<option>Vietnam</option>
						<option>Vietnam</option>
						<option>Vietnam</option>
						<option>Vietnam</option>
					</select>
          		</div>
          		<div class="form-group">
          			<label for="">Site</label>
					<select class="form-control">
						<option>Vietnam</option>
						<option>Vietnam</option>
						<option>Vietnam</option>
						<option>Vietnam</option>
						<option>Vietnam</option>
					</select>
          		</div>
          		<div class="form-group">
          			<label for="">Color</label>
				  	<div class="nav">
				  		<li>
				  			<input type="text" name="custom_color" readonly placeholder="#ffffff" id="pickcolor" class="call-picker">
						    <div class="color-holder call-picker"></div>
						    <div class="color-picker" id="color-picker" style="display:none" ></div>
				        </li>
				        <script src="js/colorpicker.js"></script>
				  	</div>
				</div>
			</div>
			<div class="col-xs-12 text-center">
				<br>
				<div class="form-group upload-main-step-group-btn">
					<button class="btn btn-default"><i class="fa fa-rotate-left"></i></button>
					<button class="btn btn-default"><i class="fa fa-rotate-right"></i></button>
					<button class="btn btn-default">Replace</button>
					<button class="btn btn-default orange-btn" style="margin: 0 10px;">Remove</button>
					<button class="btn btn-default">Copy Data</button>
					<button class="btn btn-default">Paste Data</button>
					<button class="btn btn-default">Close</button>
					<button class="btn btn-default green-btn"><i class="fa fa-angle-double-left"></i> Previous</button>
				</div>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</div><!-- upload-main -->

<?php include 'footer.php' ?>