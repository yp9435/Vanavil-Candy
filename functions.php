
<?php
//mysql connection
require('database/DBController.php');

//product class
require('database/Product.php');

$db = new DBController();

$product = new Product($db);
