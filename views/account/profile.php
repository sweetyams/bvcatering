<?php require 'views/includes/header.php'; ?>
	
	<div class="container">
	<?php require 'views/includes/sidebar.php'; ?>
		<div class="contents match" >

			<div class="header">
				<span class="icon-l-profile"></span>
				<h4>Your Profile</h4>
			</div>
			<div class="row">
				<div class="small-12 medium-10 large-6 small-centered columns">
					<form>
						<div class="input half">
							<label for="name-first"></label>
							<input type="text" id="name-first" placeholder="First Name">
						</div><div class="input half">
							<label for="name-last"></label>
							<input type="text" id="name-last" placeholder="Last Name">
						</div>
						<div class="input">
							<label for="name-last"></label>
							<input type="text" id="email" placeholder="Email Address">
						</div>
						<div class="input">
							<label for="name-last"></label>
							<input type="password" id="pass" placeholder="Password">
						</div>
						<div class="input">
							<label for="name-last"></label>
							<input type="tel" id="phone" placeholder="Phone Number">
						</div>		
						<div class="input check">
							<div class="box">
								<input type="checkbox" name="receipts" id="receipts" />
								<label for="receipts">I do not want to receive paper receipts</label>
							</div>
						</div>

					</form>
				</div>

			</div>

		</div> <!-- END CONTENTS -->
	</div> <!-- END CONTAINER -->

<?php require 'views/includes/footer.php'; ?>