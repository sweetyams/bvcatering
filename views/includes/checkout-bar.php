<?php $checkout = Flight::get('checkout'); ?>
<div class="checkout-header">
  <div class="menu">
    <div class="row">
      <div class="columns small-centered small-12 medium-11 large-10">
        <a href="/menu/main" class="button cancel left">Cancel</a>
          <div class="button-group delivery">
          <a href="/checkout/delivery" class="button grey <?php echo ($checkout == 'delivery') ? "active" : ""; ?> ">Delivery</a><a href="/checkout/payment" class="button grey <?php echo ($checkout == 'payment') ? "active" : ""; ?> <?php echo ($checkout == 'delivery') ? "inactive" : ""; ?>">Payment</a><a href="/checkout/review" class="button grey <?php echo ($checkout == 'review') ? "active" : ""; ?> <?php echo ($checkout == 'delivery') ? "inactive" : ""; ?> <?php echo ($checkout == 'payment') ? "inactive" : ""; ?>">Review Cart</a>
        </div>
      </div>
    </div>
  </div>
</div>