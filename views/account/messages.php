<?php require 'views/includes/header.php'; ?>
	
	<div class="container">
	<?php require 'views/includes/sidebar.php'; ?>
		<div class="contents match" >

			<div class="header">
				<span class="icon-l-message"></span>
				<h4>Messages</h4>
			</div>

			<div class="row">
				<div class="small-12 medium-10 large-6 small-centered columns">
				<p class="center">You don’t have any messages</p>
					<form>
						<div class="input message">
							<div class="label you">You</div>
							<label for="delivery"></label>
							<textarea type="textarea" id="delivery" placeholder="Your Message"></textarea>
						</div>	
						<a class="button success">Send</a>

					</form>
				

				<p class="center toppad-30">Previous conversations</p>
					<div class="message first">
						<div class="label you">You</div>
						<label for="delivery"></label>
						<div class="block"><p>I don’t know how to remove an item from my cart</p></div>
						<div class="date">October 28, 2014</div>
					</div>
					<div class="message them">
						<div class="label">Le BV</div>
						<label for="delivery"></label>
						<div class="block"><p>Hi Willem, It’s really easy!, just click the delete 
button on the left</p><p>You can also delete them from the item page usingthe arrow key</p> </div>
						<div class="date">October 28, 2014</div>
					</div>	
					<div class="message">
						<div class="label you">You</div>
						<label for="delivery"></label>
						<div class="block"><p>Thanks!</p></div>
						<div class="date">1 min ago</div>
					</div>		
					<a class="button success">Reply</a>

				</div>

			</div>

		</div> <!-- END CONTENTS -->
	</div> <!-- END CONTAINER -->

<?php require 'views/includes/footer.php'; ?>