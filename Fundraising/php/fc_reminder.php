				<?php
				    include 'include/header_mail.php';
				?>
				<div class="main flex">
					<?php
					    include 'include/fc_menu.php';
					?>
					<div class="right ff">
						<p class="ff_title">FC Reminder Request Schedule</p>
						<p>Below you can schedule the date you want PledgeBidder to send thoughful reminder notices to people that 
have not openned or have openned and not acted on the Pledge Request email they received. 
Please check how you want reminders sent, then on which two days you want them sent.</p>
						<div class="fc_reminder">
							<div class="send_request"><input type="checkbox" name="" value="">Send requests by email only</div>
							<div class="send_request"><input type="checkbox" name="" value="">Send requests by email & text msg</div>
							<div class="reminder">
								<div class="calendar">
									<table>
										<tr>
											<th><a href="#"><</a></th>
											<th colspan="5">SEPTEMBER</th>
											<th><a href="#">></a></th>
										</tr>
										<tr class="things">
											<th>S</th>
											<th>M</th>
											<th>T</th>
											<th>W</th>
											<th>T</th>
											<th>F</th>
											<th>S</th>
										</tr>
										<tr>
											<td><a href="#">1</a></td>
											<td><a href="#">2</a></td>
											<td><a href="#">3</a></td>
											<td><a href="#">4</a></td>
											<td><a href="#">5</a></td>
											<td><a href="#">6</a></td>
											<td><a href="#">7</a></td>
										</tr>
										<tr>
											<td><a href="#">8</a></td>
											<td><a href="#">9</a></td>
											<td><a href="#">10</a></td>
											<td><a href="#">11</a></td>
											<td><a href="#">12</a></td>
											<td><a href="#">13</a></td>
											<td><a href="#">14</a></td>
										</tr>
										<tr>
											<td><a href="#">15</a></td>
											<td><a href="#">16</a></td>
											<td><a href="#">17</a></td>
											<td><a href="#">18</a></td>
											<td class="active"><a href="#">19</a></td>
											<td><a href="#">20</a></td>
											<td><a href="#">21</a></td>
										</tr>
										<tr>
											<td><a href="#">22</a></td>
											<td><a href="#">23</a></td>
											<td><a href="#">24</a></td>
											<td><a href="#">25</a></td>
											<td><a href="#">26</a></td>
											<td><a href="#">27</a></td>
											<td><a href="#">28</a></td>
										</tr>
										<tr>
											<td><a href="#">29</a></td>
											<td><a href="#">30</a></td>
											<td><a href="#">31</a></td>
											<td class="other_month"><a href="#">1</a></td>
											<td class="other_month"><a href="#">2</a></td>
											<td class="other_month"><a href="#">3</a></td>
											<td class="other_month"><a href="#">4</a></td>
										</tr>
									</table>
								</div>
								<div class="fc_reminder_text">
									<p>Note:  Some kind of scheduler here for FC to schedule two dates for PledgeBidder system to automatically send out Pledge Request Reminder notices to all FR that have not opened or have opened and not responded.</p><br>
									<p>If PledgeBidder system can't send reminder notices automatically then SA should be notified of the requested date and SA would then send reminder notices manually (not preferred)</p>		
								</div>
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