<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="#" type="image/x-icon">

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!--========================================================
														HEADER 
	=========================================================-->
	<header>
		<div class="hr"></div>
	</header>
	<!--========================================================
														CONTENT 
	=========================================================-->
	<section> 
		<div id="content">
			<div class="login">
				<img src="img/icon_login.png">
				<p>Sycamore Canyon Epic Fun Run<br>
					<span>Wednesday, April 27th</span></p>	
			</div>
			<div class="fc_login_firsttime flex">
				<?php
				    include 'include/fc_menu_login.php';
				?>
				<div class="right">
					<p>Welcome to your fundraiser set-up.  On this page you will be able to design a fundraiser that best fits your organization.  Please contact us anytime with questions or to help determine what may work best for you.</p>
					<div class="main_login_firsttime">
						<img class="scotch_left" src="img/fc/scotch_left.png">
						<img class="scotch_right" src="img/fc/scotch_right.png">
						<p class="title_login_firsttime">Your Group Fundraising Profile</p>
						<p>Enter your organizations information and select the details about the type of fundraiser you want. PledgeBidder will arrange all the information and forms for you and make them available to download. Thank you.</p>
						<form>
							<p>* Your Fundraisers Name (Example: Sunnyside Fun Run)</p>
							<input type="text" name="" value="">
							<p>* Select Group Type
								<span><input type="radio"> Teachers</span>
								<span><input type="radio"> Teachers</span>
							</p>
							<p>* Fundraising Type</p>
							<div class="style_select">
								<select>
									<option value="">Select a Fundraising Type</option>
								    <option value="">Value2</option>
								    <option value="">Value3</option>
								    <option value="">Value4</option>
								</select>
							</div>
							<p>* Auctions
								<span><input style="margin-left:80px;" type="radio"> With Auctions</span>
								<span><input type="radio"> Without Auctions</span>
							</p>
							<p>* Enter the date you plan to kickoff your fundraiser and distribute pledge packages</p>
							<input type="text" name="" value="">
							<span><a href="#"><img src="img/fc/icon_calenar.png"></a></span>
							<p>* Pledge Sheet Turn-in Date</p>
							<input type="text" name="" value="">
							<span><a href="#"><img src="img/fc/icon_calenar.png"></a></span>
							<p>* Date of Event or end of Pledge Drive</p>
							<input type="text" name="" value="">
							<span><a href="#"><img src="img/fc/icon_calenar.png"></a></span>

							<p>Organizations Street, City, State Zip Code</p>
							<p>* Street Address</p>
							<input type="text" name="" value="">
							<p>Address line 2</p>
							<input type="text" name="" value="">
							<p>Address line 2</p>
							<input type="text" name="" value="">
							<div>
								<div class="double">
									<p>* City</p>
									<input type="text" name="" value="">
								</div>
								<div class="double">
									<p>* State</p>
									<input type="text" name="" value="">
								</div>
							</div>
							<div>
								<div class="double" style="vertical-align:4px;">
									<p>* Postal / Zip Code</p>
									<input type="text" name="" value="">
								</div>
								<div class="double">
									<p>* Country</p>
									<div class="style_select">
										<select>
											<option value=""></option>
										    <option value="">Value2</option>
										    <option value="">Value3</option>
										    <option value="">Value4</option>
										</select>
									</div>
								</div>
							</div>
							<p>* Coordinator Cell Phone Number</p>
							<input type="text" name="" value="">
							<p>* Organization Phone number</p>
							<input type="text" name="" value="">
							<p>Upload Organization LOGO (.jpg or .png file)</p>
							<input type="text" name="" value="">
							<p>Upload Picture of Fundraising Purpose #1</p>
							<input type="text" name="" value="">
							<p>Upload Picture of Fundraising Purpose #2</p>
							<input type="text" name="" value="">
							<p>Upload Picture of Fundraising Purpose #3</p>
							<input type="text" name="" value="">
							<p>* Dollar amount Goal to raise?</p>
							<input type="text" name="" value="">
							<p>* Select Group Type</p>
							<div>
								<span><input style="margin-left:inherit;" type="radio"> Teachers</span>
								<span><input type="radio"> Teachers</span>
								<span><input type="radio"> Teachers</span>
							</div>
							<div style="margin: 10px auto;">
								<input class="double" type="text" name="" value="" placeholder="Enter First Name">
								<input class="double" type="text" name="" value="" placeholder="Enter Last Name">
							</div>
							<input type="text" name="" value="" placeholder="Enter # of Students in Classroom">
							<p class="add_login">Add Teachers <span><a href="#"><img src="img/button_add.png"></a></span></p>
							<div class="capcha">
								<div>
									<div class="check_capcha"></div>
									<b>I'm not robot</b>
								</div>
								<img src="img/img_capcha.png">
							</div>
							<div>	
								<input type="button" name="" value="Submit">
							</div>
						</form>
					</div>
				</di>
			</div>
		</div>
	</section>
	<?php
	    include 'include/footer.php';
	?>