				<?php
				    include 'include/header_mail.php';
				?>
				<div class="main flex">
					<?php
					    include 'include/ff_menu.php';
					?>
					<div class="right ff">
						<p class="ff_title">Enter Family & Friends</p>
						<p>Here you can enter all your family and friends the will  receive your participant's email pledge request.  The
salutation is how the participant refers to that person (Grandpa, Uncle Bill,  Cousin Jim). Dear will proceed the salutation.  Each time you click Add a new set of fieilds will open for the next family or friend</p>
						<div class="ff_enterfamilyfriends">
							<table Cellspacing="10px">
								<tr>
									<th>First & Last Name</th>
									<th>Email Address</th>
									<th>Dear</th>
									<th>Cell Phone Number</th>
								</tr>
								<tr>
									<td><input type="text" name="" value="" placeholder="Ex: Bill Jones"></td>
									<td><input type="email" name="" value="" placeholder="Ex: billj@domain.com"></td>
									<td><input type="text" name="" value="" placeholder="Ex: Uncle Bill"></td>
									<td><input type="tel" name="" value="" placeholder="Ex: 6161007894"></td>
								</tr>
								<tr>
									<td><input type="text" name="" value="" placeholder="Ex: Bill Jones"></td>
									<td><input type="email" name="" value="" placeholder="Ex: billj@domain.com"></td>
									<td><input type="text" name="" value="" placeholder="Ex: Uncle Bill"></td>
									<td><input type="tel" name="" value="" placeholder="Ex: 6161007894"></td>
								</tr>
								<tr>
									<td><input type="text" name="" value="" placeholder="Ex: Bill Jones"></td>
									<td><input type="email" name="" value="" placeholder="Ex: billj@domain.com"></td>
									<td><input type="text" name="" value="" placeholder="Ex: Uncle Bill"></td>
									<td><input type="tel" name="" value="" placeholder="Ex: 6161007894"></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td>Add more<input type="button" name="" value=""></td>
								</tr>
							</table>
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