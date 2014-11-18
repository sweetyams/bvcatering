<?php require 'views/includes/header.php'; ?>
	
	<div class="container">
	<?php require 'views/includes/sidebar.php'; ?>
		<div class="contents match" >

			<div class="header">
				<span class="icon-l-addresses"></span>
				<h4>Addresses</h4>
			</div>

			<div class="row">
				<div class="small-12 medium-10 large-6 small-centered columns">
					<div class="panel address">
					<p class="left">5092 St. Clotilde<br><span>Shipping</span></p><a class="button cancel right">Delete</a><a class="button right edit">Edit</a>
					
						<form>
							<div class="input check">
								<div class="box half">
									<input type="checkbox" name="addresstype" id="shipping" checked/>
									<label for="shipping">Shipping</label>
								</div><div class="box half">
									<input type="checkbox" name="addresstype" id="billing" />
									<label for="billing">Billing</label>
								</div>
							</div>
							<div class="input half">
								<label for="name-first"></label>
								<input type="text" id="name-first" placeholder="First Name">
							</div><div class="input half">
								<label for="name-last"></label>
								<input type="text" id="name-last" placeholder="Last Name">
							</div>
							<div class="input">
								<label for="address"></label>
								<input type="text" id="address" placeholder="Address">
							</div>
							<div class="input">
								<label for="coty"></label>
								<input type="text" id="city" placeholder="City">
							</div>
							<div class="input half">
								<label for="province"></label>
								<input type="text" id="province" placeholder="Province">
							</div><div class="input half">
								<label for="zip"></label>
								<input type="text" id="zip" placeholder="Zip Code">
							</div>
							<div class="input">
								<label for="name-last"></label>
								<input type="tel" id="phone" placeholder="Phone Number">
							</div>		
							<div class="input textarea">
								<label for="delivery"></label>
								<textarea type="textarea" id="delivery" placeholder="Delivery Notes"></textarea>
							</div>	
							<a class="button cancel">Cancel</a>
							<a class="button save success">Save</a>

						</form>

					</div>

					<a class="button success">Add New Address</a>

				</div>
			</div>

		</div> <!-- END CONTENTS -->
	</div> <!-- END CONTAINER -->

<?php require 'views/includes/footer.php'; ?>