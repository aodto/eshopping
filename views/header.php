<?php 
$num_item_in_stock = 10;
$num_item_in_cart = 4;
$num_item_in_order = 2;
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>eShopping</title>
		<link href='<?php echo url('assets/css/style.css');?>' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="container">
			<header>
				<div id="logo">e-Shopping Online</div>
				<div id="cart">
					<a href="<?php echo url('index.php');?>">Products (<?php echo $num_item_in_stock; ?>)</a> | 
					<a href="<?php echo url('index.php?c=cart');?>">Cart (<?php echo $num_item_in_cart; ?>)</a> | 
					<a href="<?php echo url('index.php?c=order');?>">Pendding Order (<?php echo $num_item_in_order; ?>)</a>
				</div>
			</header>