<?php require 'views/includes/header.php'; ?>
<?php require 'views/includes/checkout-bar.php'; ?>
<div class="contents">

  <div class="row">

    <div class="small-12 medium-11 large-10 small-centered columns">

      <div class="panel white contentpanel cart">

        <h4>REVIEW YOUR CART</h4>
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
            <a href="/account/orders" class="button success " >Place order</a>
          </div>
        </div>
        

      </div> <!-- end .contentpanel -->
    </div>
  </div>
</div>
<?php require 'views/includes/footer-checkout.php'; ?>