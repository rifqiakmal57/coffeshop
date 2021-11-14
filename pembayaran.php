<?php 
	session_start();
	if (!isset($_SESSION['email'])) {
		header("location:masuk.php");
	}
?>
<html>
<head>
	
	<title>Payment</title>
	<link rel="stylesheet" href="pembayaran.css">
</head>

<body>
	<!-- header -->
	<header>
	<div class="header-logo">
				Akmal Coffee
			</div>	
					<div class="header-nav">
						<ul>
							<li><a href="order.php">ORDER</a></li>
							<li><a href="pembayaran.php">PEMBAYARAN</a></li>
							<li><a href="pengiriman.php">PENGIRIMAN</a></li>
							<li><a href="masuk.php">LOGOUT</a></li>
						</ul>
			</div>
	</header>
	


	


</body>
</html>
