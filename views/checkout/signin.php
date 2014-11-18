<?php require 'views/includes/header.php'; ?>
<div class="checkout-header">
  <div class="row">
    <div class="columns small-centered small-12 medium-10">
      <a class="button">Continue Shopping</a>
      <a class="button success right">Checkout</a>
    </div>
  </div>
</div>
<div class="contents">

  <div class="row">

  	<div class="small-12 medium-11 large-10 small-centered columns">

    	<div class="panel white contentpanel cart">

				<h4>Checkout</h4>
        <p>Please sign in or sign up to continue checking out.</p>

        <hr>

        <div id="signtab" class="tabcontent">

          <!-- #sign nav (visible) -->
          <ul class="nav">
            <li><a href="#signin" class="changetab current" data-target="#sign" >Sign In</a></li><li><a href="#signup"  class="changetab" data-target="#sign">Sign Up</a></li>
          </ul>
        
          <div id="sign" class="list-wrap noback">
            <div class="hidetabs"></div>

            <div id="signin" class="tabcontent front">
              <form class="panel">
                <div class="input">
                  <label for="name-last"></label>
                  <input type="text" id="email" placeholder="Email Address">
                </div>
                <div class="input">
                  <label for="name-last"></label>
                  <input type="password" id="pass" placeholder="Password">
                </div>
                <p></p>
                <p class="left small"><a class="changetab" data-target="#alltabs" href="#forgot">Forgot password?</a></p><a class="button right">Sign In</a>
              </form>
              <p class="center small moreinfo">Don’t have an account? <a href="#signup"  class="changetab" data-target="#sign">Sign Up Today</a></p>
            </div> <!-- end #signin -->
         
            <div id="signup" class="tabcontent">
              <form class="panel">
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
                <p></p>
                <p class="left small">Have an invite code?</p><a class="button right">Sign Up</a>
              </form>
              <p class="center small moreinfo">By signing up, you agree to the <a class="">Privacy Policy</a> & <a class="">Terms of Service</a></p>
            </div> <!-- end #signup -->

          </div><!--  end .listwrap -->
        </div> <!-- end #signtab -->   
			
			</div> <!-- end .contentpanel -->
		</div>
	</div>
</div>
<?php require 'views/includes/footer-checkout.php'; ?>