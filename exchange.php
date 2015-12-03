<?php include('header.php'); ?>

<div id="content" class="section">

	<div class="container">
		<div class="back">
			<a class="backlink" onclick="history.back(); return false;"><i class="icon-arrow-left"></i> back</a>
		</div>

		<h1 class="centered">Stock exchange summary</h1>

		<!-- Copy of landing page section -->

		<div id="last">
				
				<div class="small_title">Last applications</div>
			
				<ul class="tabs">
					<li class="active">Buy</li>
					<li>Sell</li>
				</ul>
					
				<div class="clearfix"></div>

				<div class="tab active" id="buy">
					<table>
						<tr>
							<th class="time">Time</th>
							<th class="amount">Amount(BTC)</th>
							<th class="payment_system">Payment system</th>
							<th class="price">Price</th>
							<th class="currency">Currency</th>
							<th class="seller">Seller</th>
							<th class="rating">Rating</th>
							<th class="arrow">&nbsp;</th>
						</tr>
						<tr>
							<td class="time">1 min ago</td>
							<td class="amount">0,00001 - 12</td>
							<td class="payment_system">Cash</td>
							<td class="price">1 000 000</td>
							<td>EUR</td>
							<td class="seller"><i class="status online"></i> <a href="seller">PayBis</a></td>
							<td>+ 100</td>
							<td class="arrow">buy</td>
						</tr>
						<tr>
							<td class="time">2 min ago</td>
							<td class="amount">0.00380629</td>
							<td class="payment_system">Western Union</td>
							<td class="price">45 000 000 000</td>
							<td>USD</td>
							<td class="seller"><i class="status offline"></i> <a href="seller">PayBis</a></td>
							<td>- 75</td>
							<td class="arrow">buy</td>
						</tr>
						<tr>
							<td class="time">3 min ago</td>
							<td class="amount">25</td>
							<td class="payment_system">Bank of America</td>
							<td class="price">182.09</td>
							<td>BTC</td>
							<td class="seller"><i class="status online"></i> <a href="seller">PayBis</a></td>
							<td>+ 45</td>
							<td class="arrow">buy</td>
						</tr>
						<tr>
							<td class="time">7 min ago</td>
							<td class="amount">0.0233663 - 30</td>
							<td class="payment_system">Walgreens Balance® Financial Prepaid MasterCard®.</td>
							<td class="price">182.09</td>
							<td>BTC</td>
							<td class="seller"><i class="status offline"></i> <a href="seller">PayBis</a></td>
							<td>+ 35</td>
							<td class="arrow">buy</td>
						</tr>
						<tr>
							<td class="time">10 min ago</td>
							<td class="amount">0,012332</td>
							<td class="payment_system">Cash</td>
							<td class="price">182.09</td>
							<td>BTC</td>
							<td class="seller"><i class="status offline"></i> <a href="seller">PayBissad-<br>khja</a></td>
							<td>+ 75</td>
							<td class="arrow">buy</td>
						</tr>
						<tr>
							<td class="time">20 min ago</td>
							<td class="amount">0,01223002</td>
							<td class="payment_system">Western Union</td>
							<td class="price">182.09</td>
							<td>EUR</td>
							<td class="seller"><i class="status online"></i> <a href="seller">PayBis</a></td>
							<td>+ 40</td>
							<td class="arrow">buy</td>
						</tr>
						<tr>
							<td class="time">1 hour ago</td>
							<td class="amount">0,000032</td>
							<td class="payment_system">Western Union</td>
							<td class="price">182.09</td>
							<td>USD</td>
							<td class="seller"><i class="status offline"></i> <a href="seller">PayBis</a></td>
							<td>+ 73</td>
							<td class="arrow">buy</td>
						</tr>
						<tr>
							<td class="time">2 hours ago</td>
							<td class="amount">0,1 - 10</td>
							<td class="payment_system">Western Union</td>
							<td class="price">182.09</td>
							<td>BTC</td>
							<td class="seller"><i class="status not_disturb"></i> <a href="seller">PayBis</a></td>
							<td>+ 100</td>
							<td class="arrow">buy</td>
						</tr>
					</table>

					<div class="clearfix"></div>

					<a href="exchange" class="show_more">
						Show more <i class="icon-arrow-right"></i>
					</a>
				
				</div>

				<div class="tab" id="sale">
					<table>
						<tr>
							<th class="time">Time</th>
							<th class="amount">Amount(BTC)</th>
							<th class="payment_system">Payment system</th>
							<th class="price">Price</th>
							<th class="currency">Currency</th>
							<th class="seller">Seller</th>
							<th class="rating">Rating</th>
							<th class="arrow"></th>
						</tr>
						<tr>
							<td class="time">1 hour ago</td>
							<td class="amount">0,000032</td>
							<td class="payment_system">Western Union</td>
							<td class="price">182.09</td>
							<td>USD</td>
							<td class="seller"><i class="status offline"></i> <a href="seller">PayBis</a></td>
							<td>+ 73</td>
							<td class="arrow">sell</td>
						</tr>
						<tr>
							<td class="time">2 hours ago</td>
							<td class="amount">0,1 - 10</td>
							<td class="payment_system">Western Union</td>
							<td class="price">182.09</td>
							<td>BTC</td>
							<td class="seller"><i class="status not_disturb"></i> <a href="seller">PayBis</a></td>
							<td>+ 100</td>
							<td class="arrow">sell</td>
						</tr>
						<tr>
							<td class="time">3 min ago</td>
							<td class="amount">25</td>
							<td class="payment_system">Bank of America</td>
							<td class="price">182.09</td>
							<td>BTC</td>
							<td class="seller"><i class="status online"></i> <a href="seller">PayBis</a></td>
							<td>+ 45</td>
							<td class="arrow">sell</td>
						</tr>
						<tr>
							<td class="time">7 min ago</td>
							<td class="amount">0.0233663 - 30</td>
							<td class="payment_system">Walgreens Balance® Financial Prepaid MasterCard®.</td>
							<td class="price">182.09</td>
							<td>BTC</td>
							<td class="seller"><i class="status offline"></i> <a href="seller">PayBis</a></td>
							<td>+ 35</td>
							<td class="arrow">sell</td>
						</tr>
						<tr>
							<td class="time">1 min ago</td>
							<td class="amount">0,00001 - 12</td>
							<td class="payment_system">Cash</td>
							<td>1 000 000</td>
							<td>EUR</td>
							<td class="seller"><i class="status online"></i> <a href="seller">PayBis</a></td>
							<td>+ 100</td>
							<td class="arrow">sell</td>
						</tr>
						<tr>
							<td class="time">2 min ago</td>
							<td class="amount">0.00380629</td>
							<td class="payment_system">Western Union</td>
							<td>45 000 000 000</td>
							<td>USD</td>
							<td class="seller"><i class="status offline"></i> <a href="seller">PayBis</a></td>
							<td>- 75</td>
							<td class="arrow">sell</td>
						</tr>
						<tr>
							<td class="time">10 min ago</td>
							<td class="amount">0,012332</td>
							<td class="payment_system">Cash</td>
							<td class="price">182.09</td>
							<td>BTC</td>
							<td class="seller"><i class="status offline"></i> <a href="seller">PayBissad-<br>khja</a></td>
							<td>+ 75</td>
							<td class="arrow">sell</td>
						</tr>
						<tr>
							<td class="time">20 min ago</td>
							<td class="amount">0,01223002</td>
							<td class="payment_system">Western Union</td>
							<td class="price">182.09</td>
							<td>EUR</td>
							<td class="seller"><i class="status online"></i> <a href="seller">PayBis</a></td>
							<td>+ 40</td>
							<td class="arrow">sell</td>
						</tr>
					</table>

					<div class="clearfix"></div>

					<ul id="pagination">
						<li>
							<i class="icon-arrow-left"></i>
						</li>
						<li>1</li>
						<li class="active">2</li>
						<li>3</li>
						<li>4</li>
						<li>
							<i class="icon-arrow-right"></i>
						</li>
					</ul>

				</div>

			</div>

	</div>

</div>

<?php include('footer.php'); ?>