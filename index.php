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
   Flight::render('account/profile.php', array('title'=>'Menu','lang' => 'en','bodyClass' => 'admin'));
});

Flight::start();

?>