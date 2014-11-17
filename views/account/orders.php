<?php require 'views/includes/header.php'; ?>
	
	<div class="container">
	<?php require 'views/includes/sidebar.php'; ?>
		<div class="contents" data-mh="items-a">


			<div class="header">
				<span class="icon-l-orders"></span>
				<h4>Orders</h4>
			</div>

			<div class="row">
				<div class="small-12 medium-10 large-8 small-centered columns">
					
					<table class="responsive orders">

						<thead>
							<tr>
								<th>Date</th>
								<th>Order</th>
								<th>Total</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
<!-- 						<tfoot>
							<tr>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
							</tr>
						</tfoot> -->
						<tbody>
							<tr>
								<td>09 24 2014</td>
								<td>T20004324</td>
								<td>$<b>45.24</b></td>
								<td><div class="status pending">Pending</div></td>
								<td class="action"><a href="/account/orders/order1" class="button">View</a></td>
							</tr>
							<tr>
								<td>09 24 2014</td>
								<td>T20004324</td>
								<td>$<b>45.24</b></td>
								<td><div class="status approved">Approved</div></td>
								<td class="action"><a href="/account/orders/order1" class="button">View</a></td>
							</tr>
							<tr>
								<td>09 24 2014</td>
								<td>T20004324</td>
								<td>$<b>45.24</b></td>
								<td><div class="status complete">Complete</div></td>
								<td class="action"><a href="/account/orders/order1" class="button">View</a></td>
							</tr>
						</tbody>					
					</table>

				</div>

			</div>

		</div> <!-- END CONTENTS -->
	</div> <!-- END CONTAINER -->

<?php require 'views/includes/footer.php'; ?>