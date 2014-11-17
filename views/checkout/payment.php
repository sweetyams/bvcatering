<?php require 'views/includes/header.php'; ?>
<?php require 'views/includes/checkout-bar.php'; ?>
<div class="contents">

  <div class="row">

    <div class="small-12 medium-11 large-10 small-centered columns">

      <div class="panel white contentpanel cart">

        <h4>Payment Information</h4>
        <p>Please choose your payment method below</p>

        <hr>

        <div class="row">
          <div class="small-12 medium-9 large-8 small-centered columns">
            <div class="tabs payment">

              <div class="button-group payment toggle nav">
                <div><a href="#credit"  class="changetab button current" data-target="#payment" >Credit Card</a></div><div><a href="#paypal" class="changetab button" data-target="#payment">Paypal</a></div><div><a href="#cheque" class="changetab button" data-target="#payment">Cheque</a></div>
              </div>

              <div id="payment" class="list-wrap noback">
                
                <div class="hidetabs"></div>

                <div id="credit" class="tabcontent front">
                      <form>
                        <div class="input">
                          <label for="card-name"></label>
                          <input type="text" id="card-name" placeholder="Name on Card">
                        </div>
                        <div class="input three-quarter">
                          <label for="card-number"></label>
                          <input type="text" id="card-number" placeholder="Card Number">
                        </div><div class="input one-quarter">
                          <label for="card-cvv"></label>
                          <input type="text" id="card-cvv" placeholder="CVV">
                        </div>
                        <div class="input">
                          <label for="card-expiry"></label>
                          <input class="date" type="text" id="card-expiry" placeholder="Expiry Date">
                        </div>

                      </form>
                </div> <!-- end #signin -->

                <div id="paypal" class="tabcontent">
                <div class="paypal"></div>
                </div> <!-- end #signup -->

                <div id="cheque" class="tabcontent" data-amount="414.79">
<!--                 <p class="center">Please make your cheque out as follows:</p>
 -->                <div class="cheque-example">
                  <div class="name">Mrs. Jane Doe</div>
                  <div class="num">101</div>
                  <div class="thedate">Date</div>
                  <div class="days"><span>D</span><span>D</span><span>M</span><span>M</span><span>Y</span><span>Y</span><span>Y</span><span>Y</span></div>
                  <div class="orderof">To the <br/>order of</div>
                  <div class="toname"><span>Le Bon Vivant</span></div>
                  <div class="amount">$<span>0.00</span></div>
                  <div class="cost">Cost</div>
                  <div class="cents"><span class="cent">00</span><span class="hundred">100</span></div>
                  <div class="bottom">
                    <div class="re"><span>re</span><span class="retext">Catering</span></div><div class="per"><span>per</span></div>
                  </div>
                </div>
                </div> <!-- end #signup -->

                
              </div><!--  end .listwrap -->

              <a href="/checkout/review" class="button success right">Next</a>
            </div>
          </div>
        </div>

      </div> <!-- end .contentpanel -->
    </div>
  </div>
</div>
<?php require 'views/includes/footer-checkout.php'; ?>