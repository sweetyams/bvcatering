<?php require 'views/includes/header.php'; ?>
<div class="checkout-header">
  <div class="row">
    <div class="columns small-centered small-12 medium-10">

      <a href="/menu/main" class="button left">Continue Shopping</a>
      <a class="button success right modal changetab checkout" data-target="#alltabs" href="#signtab" data-subtarget="#sign" data-subtab="#signup">Checkout</a>
    </div>
  </div>
</div>
<div class="contents">

  <div class="row">

  	<div class="small-12 medium-11 large-10 small-centered columns">

    	<div class="panel white contentpanel cart">

				<h4>Your Basket</h4>
        <p>Please review your cart and its contents.</p>

        <hr>
        <table class="responsive cart">

          <thead>
            <tr>
              <th></th>
              <th>Item</th>
              <th>Options</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
            </tr>
          </thead>
        <!--            <tfoot>
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </tfoot> -->
          <tbody>
            <tr class="item">
              <td><span class="icon-close"></span></td>
              <td>SANDWICH TUNA MELT</td>
              <td class="action"><a class="button">Options</a></td>
              <td class="price">$<span>9.25</span></td>
              <td class="quantity"><input maxlength="3" type="text" value="13"></td>
              <td class="totalprice">$<span></span></td>
            </tr>
            <tr class="option">
              <td><span class="icon-close"></span></td>
              <td>SANDWICH TUNA MELT</td>
              <td>GLUTEN FREE</td>
              <td class="price">$<span>1.00</span></td>
              <td class="quantity"><input maxlength="3" type="text" value="3"></td>
              <td class="totalprice">$<span></span></td>
            </tr>
            <tr class="option last">
              <td><span class="icon-close"></span></td>
              <td>SANDWICH TUNA MELT</td>
              <td>DAIRY FREE</td>
              <td class="price">$<span>1.00</span></td>
              <td class="quantity"><input maxlength="3" type="text" value="5"></td>
              <td class="totalprice">$<span></span></td>
            </tr>
            <tr class="item">
              <td><span class="icon-close"></span></td>
              <td>FIGUES & CHEDDAR</td>
              <td class="action"><a class="button">Options</a></td>
              <td class="price">$<span>9.25</span></td>
              <td class="quantity"><input maxlength="3" type="text" value="10"></td>
              <td class="totalprice">$<span></span></td>
            </tr>
            <tr class="item">
              <td><span class="icon-close"></span></td>
              <td>QUINOA SALAD(SMALL)</td>
              <td class="action"><a class="button">Options</a></td>
              <td class="price">$<span>9.25</span></td>
              <td class="quantity"><input maxlength="3" type="text" value="2"></td>
              <td class="totalprice">$<span></span></td>
            </tr>
          </tbody>          
        </table>
        <div class="textright">
          <div class="carttotal">
            <div class="info">
              <p>Subtotal<span class="subtotal">$360.75</span></p>
              <p class="taxesval hide">.14975</p>
              <p>Taxes<span class="taxes">$54.02</span></p>
              <div class="price">$<span>414.79</span></div>
            </div>
            <a class="button success modal changetab checkout" data-target="#alltabs" href="#signtab" data-subtarget="#sign" data-subtab="#signup">Checkout</a>
          </div>
        </div>
			
			</div> <!-- end .contentpanel -->
		</div>
	</div>
</div>
<?php require 'views/includes/footer-checkout.php'; ?>