<?php require 'views/includes/header-min.php'; ?>


  <div class="row item">

  	<div class="small-12 medium-11 large-12 small-centered columns">

	  	<a class="button grey large" href="/menu/main">Back To Menu</a>

      <div class="menu-cart">
          <a class="popup modal changetab" data-target="#alltabs" href="#signtab" data-subtarget="#sign" data-subtab="#signin">Sign In</a><a class="cart"><span class="icon-cart"></span><span class="cart-amount"></span></a>
        </div>

    	
        <div class="row">

          <div class="small-12 medium-7 large-6 columns">
            <div class="panel white itempanel">
              
              <div class="info">
                <h5>Sandwich Tuna Melt</h5>
                <div class="tags">Organic, Low Carb</div>
                <div class="info-holder">
                  <a class="button add success" data-amount="9.00">Add to Basket</a>
                  <div class="amount"><input maxlength="2" type="text" value="0"></div>
                </div>
                <div class="stars stars-4"></div>
              </div>

              <div class="tabs item-tabs">

                <div class="button-group item-tabs toggle nav">
                  <div><a href="#description"  class="changetab button current" data-target="#item-tabs" >Description</a></div><div><a href="#ingredients" class="changetab button" data-target="#item-tabs">Ingredients</a></div><div><a href="#reviews" class="changetab button" data-target="#item-tabs">Reviews</a></div>
                </div>

                <div id="item-tabs" class="list-wrap noback">
                  
                  <div class="hidetabs"></div>

                  <div id="description" class="tabcontent front">
                    <p class="special">OPTIONAL GLUTEN OR LACTOSE FREE</p>
                    <p>Fine herbs ciabatta, tuna, 30 month old parmigiano reggiano, mayo, scallions,  minced crispy lettuce</p>
                  </div> <!-- end #signin -->

                  <div id="ingredients" class="tabcontent">
                    <ul class="ingredients">
                      <li>Tuna</li>
                      <li>Cheese</li>
                      <li>Eggplant</li>
                      <li>Milk (whole)</li>
                      <li>Tomato sauce</li>
                      <li>Ground lamb</li>
                      <li>Ground beef</li>
                      <li>Egg</li>
                      <li>Lemon juice</li>
                      <li>Romaine Lettuce</li>
                      <li>Red tomatoes</li>
                      <li>Goat's Cheese (Soft)</li>
                      <li>Cucumber</li>
                      <li>Olive Oil</li>
                      <li>Olives</li>
                      <li>Yellow onions</li>
                      <li>Wheat flour</li>
                      <li>Feta Cheese</li>
                      <li>Parmesan Cheese</li>
                      <li>Garlic</li>
                      <li>Basil</li>
                      <li>Bread crumbs</li>
                      <li>Cumin</li>
                      <li>Kosher Salt</li>
                      <li>Unsalted butter</li>
                      <li>Black pepper</li>
                    </ul>

                  </div> <!-- end #signup -->

                  <div id="reviews" class="tabcontent ">
                    <ul class="reviews">
                      <li><p class="text">Absolutely Delicous!</p><p class="writer">Willem Shepherd<span>05 12 2014</span></p><div class="stars stars-4"></div></li>
                      <li><p class="text">Amazing. Lovely summer dish. Chicken was tasty. Noodles were perfect and the sauce was zesty and tangy. I am beginning to think Bon Vivant doesn't provide bad food. Excellent and filling!</p><p class="writer">Willem Shepherd<span>05 12 2014</span></p> <div class="stars stars-4"></div></li>

                    <div class="action">
                      <a class="button success">Add a Review</a><a class="button white right">Load More Reviews</a>  
                    </div>                    
                    </ul>

                  </div> <!-- end #signup -->

                  
                </div><!--  end .listwrap -->

              </div>


            </div> <!-- end .itempanel -->
          </div>
          <div class="small-12 medium-5 large-6 columns">
            <div class="image"><img src="/img/items/item-1-large.jpg"/> </div>
            <div class="social">
              <a class="button large facebook" href="facebook"><span class="icon-facebook" ></span></a><a class="button large twitter" href="facebook"><span class="icon-twitter" ></span></a><a class="button large pinterest" href="facebook"><span class="icon-pinterest" ></span></a>
            </div>
          </div>
  			</div>
			
		</div>
	</div>

<?php require 'views/includes/footer-min.php'; ?>