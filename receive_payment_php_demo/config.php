<?php
	// MySQL Database: Change this information
	$DB_USER = 'api_demo';
	$DB_PASSWORD = '<mysql_password>';
	$DB_DATABASE= 'api_demo';
	$DB_HOST = 'localhost';

	// Only change if required, useful to install on a shared DB
	$DB_TABLE_PREFIX = 'api_';
	
	// My site: The API will call it. It needs to be accessible by it (don't use localhost).
	$MY_SITE = "http://example.com/receive_payment_php_demo/";
	
	// My TTC address: Payments will be forwarded here
	$MY_ADDRESS = '<your_XPY_address>'; // Change this!
	
	// A unique string, without spaces or special characters
	$SECRET_KEY = "3hIOW2HgWx7vYPfmrs3Q"; // Optional, random string
	
	// Demo Products
	// Name and price in XPY
	$PRODUCTS = array( "Chocolate"=>1.5,
						"Water"=>1.4,
						"Bread"=>1.3 );

	// API root
	$API = "http://api.cinlet.com/";
	// Block explorer
	$EXPLORER = "https://chainz.cryptoid.info/xpy/tx.dws?{TX}.htm";
?>