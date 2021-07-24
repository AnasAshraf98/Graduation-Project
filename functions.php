<?php

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// require Cart Class
require ('database/Cart.php');

// require Data Class
require ('database/Data.php');


// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

// data object
$data=new Data();

// Cart object
$Cart = new Cart($db );
