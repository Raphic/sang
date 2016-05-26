				<?php
				    include 'include/header_mail.php';
				?>
				<div class="main flex">
					<?php
					    include 'include/ff_menu.php';
					?>
					<div class="right ff">
						<p class="ff_title">Upload a Photo</p>
						<p>You can upload one .jpg file of all your all the participants.  This photo will only appear on the email pledge request that you send to family and friends.  It will not be posted on your Facebook page or anywhere else.<br><br>Click Next > if you do not want to upload a picture.</p>
						<div class="ff_upload_main">
							<input type="file" name="" value="">
							<input type="button" onclick="" value="Upload">
							<div class="loadding_bar"></div>
							<div>
								<img src="img/mail_avatar.jpg">
							</div>
						</div>
						<div class="button_navigation flex">
							<div class="button_back">
								<a href="#">Back</a>
								<img src="img/shadow_next_back.png">
							</div>
							<div class="button_next">
								<a href="#">Next</a>
								<img src="img/shadow_next_back.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	    include 'include/footer.php';
	?>