<?php require 'views/includes/header.php'; ?>
<?php require 'views/includes/checkout-bar.php'; ?>
<div class="contents">

  <div class="row">

  	<div class="small-12 medium-9 large-6 small-centered columns">

    	<div class="panel white contentpanel cart">

				<h4>DELIVERY INFO</h4>
        <p>Please add a delivery address and time</p>

        <hr>


      <div class="row">
        <div class="small-12 medium-12 large-12 small-centered columns textleft">
          <div class="panel address">
            <!-- <div class="box isactive check">
              <input type="checkbox" name="addresstype" id="isactive" checked/>
              <label for="isactive">Selected</label>
            </div> -->
            <p class="left"><span class="set-address">Address</span><br><span class="set-phone">Phone</span></p><a class="button right edit">Edit</a>
          
            <form>
              <hr>
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

<!--           <a class="button">Add New Address</a>
 -->

            <div class="panel address">

            <p class="left"><span class="set-date">Event Date</span><br><span class="set-time">Event Time</span></p><a class="button right edit">Edit</a>
          
            <form>

              <hr>
              <div class="input half">
                <label for="event-date"></label>
                <input class="date" type="text" id="date" placeholder="Event Date">
              </div><div class="input half">
                <label for="event-time"></label>
                <input class="time" type="text" id="time" placeholder="Event Time">
              </div>
              <div class="input textarea">
                <label for="datenotes"></label>
                <textarea type="textarea" id="datenotes" placeholder="Notes about your event"></textarea>
              </div>  
              <a class="button cancel">Cancel</a>
              <a class="button success save">Save</a>

            </form>

          </div>

<!--           <a class="button">Add New Date / Time</a>
 -->
          <a href="/checkout/payment" class="button success right">Next</a>

        </div>
      </div>
				
			
			</div> <!-- end .contentpanel -->
		</div>
	</div>
</div>
<?php require 'views/includes/footer-checkout.php'; ?>