<html>
<head>
	<title>Home</title>
	<style type="text/css">
		body{
			background:
					radial-gradient(rgba(255,255,255,0) 0, rgba(255,255,255,.15) 30%, rgba(255,255,255,.3) 32%, rgba(255,255,255,0) 33%) 0 0,
					radial-gradient(rgba(255,255,255,0) 0, rgba(255,255,255,.1) 11%, rgba(255,255,255,.3) 13%, rgba(255,255,255,0) 14%) 0 0,
					radial-gradient(rgba(255,255,255,0) 0, rgba(255,255,255,.2) 17%, rgba(255,255,255,.43) 19%, rgba(255,255,255,0) 20%) 0 110px,
					radial-gradient(rgba(255,255,255,0) 0, rgba(255,255,255,.2) 11%, rgba(255,255,255,.4) 13%, rgba(255,255,255,0) 14%) -130px -170px,
					radial-gradient(rgba(255,255,255,0) 0, rgba(255,255,255,.2) 11%, rgba(255,255,255,.4) 13%, rgba(255,255,255,0) 14%) 130px 370px,
					radial-gradient(rgba(255,255,255,0) 0, rgba(255,255,255,.1) 11%, rgba(255,255,255,.2) 13%, rgba(255,255,255,0) 14%) 0 0,
					linear-gradient(45deg, #343702 0%, #184500 20%, #187546 30%, #006782 40%, #0b1284 50%, #760ea1 60%, #83096e 70%, #840b2a 80%, #b13e12 90%, #e27412 100%);
			background-size: 470px 470px, 970px 970px, 410px 410px, 610px 610px, 530px 530px, 730px 730px, 100% 100%;
			background-color: #840b2a;
			color : white;
			font-family: "Arial Rounded MT Bold";
			font-size: x-large;
		}
		th,tr{
			width: 50%;
			padding: 5px;
			font-size:18 ;
		}

	</style>
</head>
<body>
<div class="head" style="background-color: black; padding: 1px">
<h1 align="center">The Grand Budapest</h1>
<h3 align="center">Welcome, <?php session_start(); echo($_SESSION['cust_id']); ?> </h3>
</div>
<br>
<center>
		<div align="center" class="sublets" style="width:75%; background-color: black; padding: 1px">
 		<a href="booking.php" style="color:white;text-decoration:none"><h4>BOOK A ROOM</h4></a>
		</div>
	<br>
		<div align="center" class="sublets" style="width:75%; background-color: black; padding: 1px">
 		<a href="sublets.php" style="color:white;text-decoration:none"><h4>FIND SUBLETS</h4></a>
		</div>
	<br>
		<div align="center" class="amenities" style="width:75%; background-color: black; padding: 1px">
 		<a href="amenities.php" style="color:white;text-decoration:none"><h4>AMENITIES PROVIDED BY US</h4></a>
		</div>
	<br>
		<div align="center" class="deals" style="width:75%; background-color: black; padding: 1px">
 		<a href="deals.php" style="color:white;text-decoration:none"><h4>CHECK AMAZING DEALS !</h4></a>
		</div>
	<br>
</center>
</body>
</html>