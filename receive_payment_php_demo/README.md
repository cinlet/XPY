# What is this?
A basic PHP/MySQL example on how to implement Cinlet's API to easily process PayCoin payments.

It uses the Receive Payments API: http://api.cinlet.com/

It automatically updates the order with the received payments (using Receive Payments API).

Do not use in production as is!

# Instructions
	* Clone the git repository into your web server.
	* cd receive_payment_php_demo
	* Edit config.php. Update at least $DB_*, $MY_SITE and $MY_ADDRESS
	* Run install.php to create the required DB tables
	* Open the demo: http://example.com/receive_payment_php_demo/index.php
