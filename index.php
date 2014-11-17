<?php

require 'flight/Flight.php';

Flight::set('url', '');

Flight::route('/', function(){
   Flight::render('home.php', array('title'=>'Home Page','lang' => 'en','bodyClass' => ''));
});

Flight::route('/menu', function(){
   Flight::render('menu.php', array('title'=>'Menu','lang' => 'en','bodyClass' => ''));
});

// ACCOUNT FILES
Flight::route('/account/profile', function(){
	Flight::set('sidebar', 'profile');
	Flight::render('account/profile.php', array('title'=>'Profile','lang' => 'en','bodyClass' => 'admin'));
});

Flight::route('/account/notifications', function(){
	Flight::set('sidebar', 'notifications');
	Flight::render('account/notifications.php', array('title'=>'Notifications','lang' => 'en','bodyClass' => 'admin'));
});

Flight::route('/account/orders', function(){
	Flight::set('sidebar', 'orders');
	Flight::render('account/orders.php', array('title'=>'Orders','lang' => 'en','bodyClass' => 'admin'));
});

// SINGLE ORDER
Flight::route('/account/orders/order1', function(){
  Flight::render('account/order.php', array('title'=>'Order 1','lang' => 'en','bodyClass' => 'order'));
});

Flight::route('/account/invoices', function(){
	Flight::set('sidebar', 'invoices');
	Flight::render('account/invoices.php', array('title'=>'Invoices','lang' => 'en','bodyClass' => 'admin'));
});

// SINGLE INVOICE
Flight::route('/account/invoices/invoice1', function(){
  Flight::render('account/invoice.php', array('title'=>'Order 1','lang' => 'en','bodyClass' => 'order'));
});

Flight::route('/account/addresses', function(){
	Flight::set('sidebar', 'addresses');
	Flight::render('account/addresses.php', array('title'=>'Addresses','lang' => 'en','bodyClass' => 'admin'));
});

Flight::route('/account/payment', function(){
	Flight::set('sidebar', 'payment');
	Flight::render('account/payment.php', array('title'=>'Payment','lang' => 'en','bodyClass' => 'admin'));
});

Flight::route('/account/reviews', function(){
	Flight::set('sidebar', 'reviews');
	Flight::render('account/reviews.php', array('title'=>'Reviews','lang' => 'en','bodyClass' => 'admin'));
});

Flight::route('/account/messages', function(){
	Flight::set('sidebar', 'messages');
	Flight::render('account/messages.php', array('title'=>'Messages','lang' => 'en','bodyClass' => 'admin'));
});

Flight::route('/account/tabs', function(){
	Flight::set('sidebar', 'tabs');
	Flight::render('account/tabs.php', array('title'=>'Tabs','lang' => 'en','bodyClass' => 'admin'));
});


Flight::route('/checkout/cart', function(){
  Flight::render('checkout/cart.php', array('title'=>'Basket','lang' => 'en','bodyClass' => 'checkout'));
});

Flight::route('/checkout/delivery', function(){
  Flight::set('checkout', 'delivery');
  Flight::render('checkout/delivery.php', array('title'=>'Delivery','lang' => 'en','bodyClass' => 'checkout'));
});

Flight::route('/checkout/payment', function(){
  Flight::set('checkout', 'payment');
  Flight::render('checkout/payment.php', array('title'=>'Payment','lang' => 'en','bodyClass' => 'checkout'));
});

Flight::route('/checkout/review', function(){
  Flight::set('checkout', 'review');
  Flight::render('checkout/review.php', array('title'=>'Review','lang' => 'en','bodyClass' => 'checkout'));
});


Flight::start();

?>