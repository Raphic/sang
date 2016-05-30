				<?php
				    include 'include/header_mail.php';
				?>
				<div class="main flex">
					<?php
					    include 'include/ff_menu.php';
					?>
					<div class="right ff">
						<p class="ff_title">Monitor Pledge Requests</p>
						<p><span style="color:#403f3f;font-weight: 700;">Great job! You've set up and sent your pledge requests!</span>  We emailed you a confirmation with a link to this page so you can monitor your pledge activity.
Below is the status of your email pledge requests and Facebook post.  If a family or friend has not opened your pledge request email it may have gone into their spam folder. In that case we recommend that you either call them or text them to ask that they look for your email.</p>
						<div class="ff_monitor">
							<table  Cellspacing="6px">
								<tr>
									<th>Name</th>
									<th>Status</th>
									<th>Source</th>
									<th>Amt Pledged</th>
								</tr>
								<tr>
									<td>
										<input type="text" name="" value="" placeholder="Ex: Bill Jones">
									</td>
									<td>
										<div class="style_select">
											<select>
												<option value="">Request Sent</option>
											    <option value="">Value2</option>
											    <option value="">Value3</option>
											    <option value="">Value4</option>
											</select>
										</div>
									</td>
									<td>
										<div class="style_select">
											<select>
												<option value="">Email</option>
											    <option value="">Value2</option>
											    <option value="">Value3</option>
											    <option value="">Value4</option>
											</select>
										</div>
									</td>
									<td>
										<input type="text" name="" value="" placeholder="">
										<input type="button" onclick="" value="Filter">
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="ff_monitor_bottom">
					<table>
						<tr>
							<th>FR Name</th>
							<th>Pledge Source</th>
							<th>Message</th>
							<th>Emails</th>
							<th>Facebook</th>
							<th>Pladge Sheet</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						<tr>
							<td>Phillip Nguyen</td>
							<td>Email Pladge</td>
							<td>You go Girl</td>
							<td>$50</td>
							<td>$25</td>
							<td>$15</td>
							<td>Pledge</td>
							<td>Resned</td>
						</tr>
						<tr>
							<td>Randy VOgan</td>
							<td>Email Pladge</td>
							<td>You go Girl</td>
							<td>$50</td>
							<td></td>
							<td></td>
							<td>Pledge</td>
							<td>Thank you send</td>
						</tr>
						<tr>
							<td>Sam Smith</td>
							<td>Email Pladge</td>
							<td>You go Girl</td>
							<td></td>
							<td>$50</td>
							<td></td>
							<td>Pledge</td>
							<td>Thank you send</td>
						</tr>
						<tr>
							<td>Billy Bob</td>
							<td>Email Pladge</td>
							<td>You go Girl</td>
							<td></td>
							<td></td>
							<td>$50</td>
							<td>Pledge</td>
							<td>Resend</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>$100 +</td>
							<td>$75 +</td>
							<td>$65</td>
							<td>= $240</td>
							<td>Total Pledge Received</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</section>
	<?php
	    include 'include/footer.php';
	?>