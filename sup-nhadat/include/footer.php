<footer id="footer">
		<div class="box-4">
			<div class="container">
				<div class="row">
					<div class="grid_3">
						<h4 class="wow fadeInLeft">Yêu cầu demo website</h4>

						<form id="contact-form">
							<div class="contact-form-loader"></div>
							<fieldset>
								<label class="name  wow fadeInLeft" data-wow-duration="" data-wow-delay="0.0s">
									<input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid name.</span>
								</label>
							 
								<label class="email  wow fadeInLeft" data-wow-duration="" data-wow-delay="0.1s">
									<input type="text" name="email" placeholder="Email:" value="" data-constraints="@Required @Email" />
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid email.</span>
								</label>
								<!-- <label class="phone">
									<input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*This is not a valid phone.</span>
								</label> -->
							 
								<label class="message  wow fadeInLeft" data-wow-duration="" data-wow-delay="0.2s">
									<textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
									<span class="empty-message">*This field is required.</span>
									<span class="error-message">*The message is too short.</span>
								</label>
								<div class="btns  wow fadeInLeft" data-wow-duration="" data-wow-delay="0.3s">
									<!-- <a href="#" class="more_btn" data-type="reset">Clear</a> -->
									<a href="#" class="more_btn" data-type="submit">send message</a>
								</div>
							</fieldset> 
							<div class="modal fade response-message">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Modal title</h4>
										</div>
										<div class="modal-body">
											You message has been sent! We will be in touch soon.
										</div>      
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="grid_3 wow fadeInRight" data-wow-duration="" data-wow-delay="0.2s">
						<h4>Menu</h4>
						<ul class="list2">
							<li><a href="index.php">Home</a></li>
							<li><a href="module.php">Module</a></li>
							<li><a href="service.php">Services</a></li>
							<li><a href="template.php">Template</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					<div class="grid_3 wow fadeInRight" data-wow-duration="" data-wow-delay="0.4s">
						<h4>how to find us</h4>
						<ul class="list3">
							<li><i class="fa fa-map-marker"></i> <span class="list3_txt">Tòa nhà Bitexco,F1,Quận 1<br>Hồ Chí Minh.</span></li>
							<li><i class="fa fa-phone"></i> <span class="list3_txt">099919999</span></li>
							<li><i class="fa fa-envelope-o"></i> <span class="list3_txt">Email: <a href="mailto:">mail@.org</a></span></li>
						</ul>
						<h4 class="marTop6">Follow us</h4>
						<ul class="list3">
							<li><i class="fa fa-facebook"></i> <span class="list3_txt"><a href="#" >Facebook</a></span></li>
							<li><i class="fa fa-twitter"></i> <span class="list3_txt"><a href="#">Twitter</a></span></li>
							<li><i class="fa fa-rss"></i> <span class="list3_txt"><a href="#">RSS</a></span></li>
						</ul>
					</div>
					<div class="grid_3 wow fadeInRight" data-wow-duration="" data-wow-delay="0.6s">
						<h4>About US</h4>
						<p class="marTop5">Công ty chúng tôi là đơn vị chuyên thiết kế website trong và ngoài nước được nhiều khách hàng biết đến đặc biệt là trong lĩnh vực thiết kế website bất động sản . Dịch vụ thiết kế website bất động sản của chúng tôi đem đến cho khách hàng một website thân thiện người dùng , website chuẩn seo tối ưu với công cụ tìm kiếm của google.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<p class="txt_priv wow fadeInLeft">My company &copy; <span id="copyright-year"></span> All Rights Reserved   |   <a href="#">Privacy Policy</a></p>
				</div>
			</div>
		</div>
	</footer>
	<div id="toTop"><i class="fa fa-arrow-circle-o-up"></i></div> 
	<script src="js/animation.js"></script>