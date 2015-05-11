<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PayCoin - Receive Payments API - Demo</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="shortcut icon" href="images/ico.ico"/>
</head>
<body>
	<div id="getwallet" style="height: 500px;">
		<div class="clearfix">
			<div>
				<h2>Place your order</h2>
				<p>
					We only accept PayCoin!
				</p>
				<p>
					<br/>
					<form>
						<?php
							foreach( $PRODUCTS as $product=>$price ) {
						?>
						<label><b><?php echo $product; ?></b><br/>
						<b>Price</b>: <?php echo $price; ?> XPY &bull; <b>Quantity</b>: <select name="product[]"><?php echo $options; ?></select>
						</label>
						<input type="hidden" name="price[]" value="<?php echo $price; ?>" />
						<br/><br/>
						<?php
							}
						?>
						<input type="submit" name="order" value="Order!" />
					</form>
				</p>
			</div>
		</div>
	</div>
</body>
</html>