<?php

session_start();

$conn = new mysqli('localhost','root','','hotel');
if(!isset($conn)){
	echo ("Sorry, We're not available at the moment. Check back later !");
	die();
}


if(isset($_POST['submit']))
{
	$print['Username'] = $_SESSION['cust_id'];
	$print['Date of Check-In'] = $_POST['check_in'];
	$print['Date of Check-Out'] = $_POST['check_out'];
	$print['Room Count'] = $_POST['room_count'];
	$print['Guest Count'] = $_POST['guest_count'];
	$print['Adult Count'] = $_POST['adult_count'];
	$print['Child Count'] = $_POST['child_count'];
	$_SESSION['room_type'] = $_POST['room_type'];
	$_SESSION['sub_id'] = $_POST['sub_id'];
	$_SESSION['check_in'] = $_POST['check_in'];
	$_SESSION['check_out'] = $_POST['check_out'];
	$_SESSION['room_count'] = $_POST['room_count'];
	$_SESSION['guest_count'] = $_POST['guest_count'];
	$_SESSION['adult_count'] = $_POST['adult_count'];
	$_SESSION['child_count'] = $_POST['child_count'];

	if($_SESSION['room_type']=='rtsin')
	{
		$charge = 500;
		$print['Total Charge'] = $charge*$_SESSION['room_count'];
		$_SESSION['charge'] = $print['Total Charge'];
	}
	else if($_SESSION['room_type']=='rtdou')
	{
		$charge = 1000;
		$print['Total Charge'] = $charge*$_SESSION['room_count'];
		$_SESSION['charge'] = $print['Total Charge'];
	}
	else if($_SESSION['room_type']=='rtque')
	{
		$charge = 2000;
		$print['Total Charge'] = $charge*$_SESSION['room_count'];
		$_SESSION['charge'] = $print['Total Charge'];
	}
	else{
		$charge = 3000;
		$print['Total Charge'] = $charge*$_SESSION['room_count'];
		$_SESSION['charge'] = $print['Total Charge'];
	}

	echo(
		"<div class='head'>
		<h1 align='center'>CONFIRM & PAY</h1></div><br>"
	);

	echo("<center><table style='background-color:black'>");
	foreach ($print as $key => $value)
	{
		echo("<tr><th>$key</th><td>$value</td></tr>");


	}
	echo("</table></center>");

}


?>



<html>
<head>
	<title>Confirmation</title>
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
		th,tr,td{
			width: 50%;
			padding: 15px;
			font-size:18 ;
			border: 1px solid white;
		}
		table{
			margin-bottom: 20px;
		}
		.head{
			background-color: black; 
			padding: 1px; 
			border-radius: 15px
		}
		.class{
			background-color: black;
		}

	</style>
</head>
<body>	
	<div>
		<center>
			<form action="confirm_check.php" method="POST">
			<input class='head' type="submit" name="submit" style="width:75%; font-size: 20; margin-top: 15px; margin-bottom:15px; background-color: black; color:white; padding: 10px" value="CONFIRM & PAY">
			</form>
		</center>
	</div>
</body>
</html>



