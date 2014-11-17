<div class="sidebar match">
  <ul>
    <?php $sidebar = Flight::get('sidebar'); ?>
    <div class="box">
      <li class="toppad-30"></li>
      <li>
        <a <?php echo ($sidebar == 'profile') ? "class='active'" : ""; ?> href="/account/profile"><span class="icon icon-profile"></span><span class="title">Profile</span></a>
      </li>
      <li>
        <a <?php echo ($sidebar == 'notifications') ? "class='active'" : ""; ?> href="/account/notifications"><span class="icon icon-notifications"></span><span class="title">Notifications</span></a>
      </li>
      <li class="toppad-30"></li>
      <li>
        <a <?php echo ($sidebar == 'orders') ? "class='active'" : ""; ?> href="/account/orders"><span class="icon icon-orders"></span><span class="title">Orders</span></a>
      </li>
      <li>
        <a <?php echo ($sidebar == 'invoices') ? "class='active'" : ""; ?> href="/account/invoices"><span class="icon icon-invoices"></span><span class="title">Invoices</span></a>
      </li>
      <li>
        <a <?php echo ($sidebar == 'addresses') ? "class='active'" : ""; ?> href="/account/addresses"><span class="icon icon-addresses"></span><span class="title">Addresses</span></a>
      </li>
      <li>
        <a <?php echo ($sidebar == 'payment') ? "class='active'" : ""; ?> href="/account/payment"><span class="icon icon-payment"></span><span class="title">Payment Details</span></a>
      </li>
      <li class="toppad-30"></li>
      <li>
        <a <?php echo ($sidebar == 'reviews') ? "class='active'" : ""; ?> href="/account/reviews"><span class="icon icon-reviews"></span><span class="title">Reviews</span></a>
      </li>
      <li>
        <a <?php echo ($sidebar == 'messages') ? "class='active'" : ""; ?> href="/account/messages"><span class="icon icon-messages"></span><span class="title">Messages</span></a>
      </li>
      <li class="close"><a><span class="icon icon-menu-close"></span><span class="title">Close Menu</span></a></li>
    </div>

  </ul>
</div>