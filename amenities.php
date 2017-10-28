<html>
<head>
	<title>Amenities</title>
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
<div class="head" style="background-color: black; padding: 1px; border-radius: 15px">
<h1 align="center">AMENITIES PROVIDED BY US</h1>
</div>
<center>
	
<?php

$conn = new mysqli('localhost','root','','hotel');

if(!isset($conn)){
	echo ("<h4 style='background-color:black;color:white;margin:10px;padding:10px'>Sorry, We're not available at the moment. Check back later !</h4>");
	die();
}

$sql = "select am_id, am_name, charge from amenities group by am_name";
$result = $conn->query($sql);
$img[0] = "<img src='gym.jpg' style='width:75%;margin-top:5px'>";
$img[1] = "<img src='pool.jpg' style='width:75%;margin-top:5px'>";
$img[2] = "<img src='sauna.jpg' style='width:75%;margin-top:5px'>";
$i=0;
while($sub = $result->fetch_assoc())
{
	echo("$img[$i]");
	$i = $i+1;
	echo("<table style='background-color:black;color:white;margin:10px;padding:10px; width:75%'>");
	foreach ($sub as $key => $value) {
		echo("
				<tr>
				<th>$key</th>
				<td>$value</td>
				</tr>
			");
	}
			echo("</table>");
}
?>
</center>
</body>
</html>