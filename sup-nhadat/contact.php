<?php
		include 'include/header.php';
	?>
	<style rel="stylesheet">
		.sf-menu > li:nth-child(5) > a {
		  color: #7fb0a6;
		}
		.sf-menu > li:nth-child(5) > a strong {
		  width: 100%;
		  opacity: 1;
		}
		.listWithMarker li:nth-child(5) a{
		  color: #7fb0a6;
		}
	</style>
	<!--========================================================
														CONTENT 
	=========================================================-->
	<section id="content">
		<div class="container">
			<h2 class="marTop10">Contact US</h2>
			<section class="content_map">
				<div class="google-map-api">
					<div id="map-canvas" class="gmap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.5151481381245!2d106.7044405!3d10.7718008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f41476fee6b%3A0x15de2e5129cc54f!2zVMOyYSBuaMOgIHTDoGkgY2jDrW5oIEJpdGV4Y28sIDIgSOG6o2kgVHJp4buBdSwgQuG6v24gTmdow6ksIFF14bqtbiAxLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1417576356959" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
					</div>
				</div>
			</section>
		</div>
		<div class="box-3">
			<div class="container">
				<div class="row">
					<div class="grid_12">
						<h4 class="wow fadeInLeft">Contact Form</h4>
						<form id="contact-form">
							<div class="contact-form-loader"></div>
							<fieldset>
								<label class="name  wow fadeInLeft" data-wow-duration="" data-wow-delay="0.0s">
									<input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters" /> <span class="empty-message">*This field is required.</span> <span class="error-message">*This is not a valid name.</span> </label>
								<label class="email  wow fadeInLeft" data-wow-duration="" data-wow-delay="0.1s">
									<input type="text" name="email" placeholder="Email:" value="" data-constraints="@Required @Email" /> <span class="empty-message">*This field is required.</span> <span class="error-message">*This is not a valid email.</span> </label>
								<label class="message  wow fadeInLeft" data-wow-duration="" data-wow-delay="0.2s">
									<textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea> <span class="empty-message">*This field is required.</span> <span class="error-message">*The message is too short.</span> </label>
								<div class="btns  wow fadeInLeft" data-wow-duration="" data-wow-delay="0.3s"> <a href="#" class="more_btn" data-type="reset">Clear</a> <a href="#" class="more_btn" data-type="submit">send message</a> </div>
							</fieldset>
							<div class="modal fade response-message">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Modal title</h4> </div>
										<div class="modal-body"> You message has been sent! We will be in touch soon. </div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<p>Mọi thắc mắc hoặc cần tư vấn xin liên hệ :</p>
			<div class="col3"> <i class="fa fa-home icon3"></i>
				<div class="box">
					<p>Address,
						<br>address.</p>
				</div>
			</div>
			<div class="col3 v2"> <i class="fa fa-phone icon3"></i>
				<div class="box">
					<p>+phone number
						<br>+phone number</p>
				</div>
			</div>
			<div class="col3"> <i class="fa fa-envelope icon3"></i>
				<div class="box">
					<p><a href="mailto:" class="link">mail@.org</a></p>
				</div>
			</div>
		</div>
</section>
	<!--========================================================
														FOOTER 
	=========================================================-->
		<?php
		include 'include/footer.php';
	?>