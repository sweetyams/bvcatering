<?php require 'views/includes/header.php'; ?>
	
	<div class="container">
	<?php require 'views/includes/sidebar.php'; ?>
		<div class="contents" data-mh="items-a">


			<div class="header">
				<span class="icon-l-notifications"></span>
				<h4>Notifications</h4>
			</div>

			<div class="row">
				<div class="small-12 medium-10 large-6 small-centered columns">
					<form>
						<div class="input check">
							<div class="box">
								<input type="checkbox" name="promotions" id="promotions" />
								<label for="promotions">Send me occasional promotions and discounts</label>
							</div>
						</div>
						<div class="input check">
							<div class="box">
								<input type="checkbox" name="news" id="news" />
								<label for="news">Send me news, updates, and events</label>
							</div>
						</div>
						<div class="input check">
							<div class="box">
								<input type="checkbox" name="orders" id="orders" />
								<label for="orders">Remind me to place orders</label>
							</div>
						</div>
						<div class="input check">
							<div class="box">
								<input type="checkbox" name="pickup" id="pickup" />
								<label for="pickup">Remind me to pick up an order</label>
							</div>
						</div>
						<div class="input check">
							<div class="box">
								<input type="checkbox" name="updates" id="updates" />
								<label for="updates">Send me updates and notifications via SMS</label>
							</div>
						</div>

					</form>
				</div>

			</div>

		</div> <!-- END CONTENTS -->
	</div> <!-- END CONTAINER -->

<?php require 'views/includes/footer.php'; ?>