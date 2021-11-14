<?php 
	session_start();
	if (!isset($_SESSION['email'])) 
	{
		echo "<script>alert('silahkan login');</script>";
		echo "<script>location='masuk.php';</script>";
	}
?>
<html>
<head>
	
	<title>Order</title>
	<link rel="stylesheet" href="order.css">
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
						</ul0N>
			</div>
	</header>
	


	


</body>
</html>
