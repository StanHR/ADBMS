<?php

$conn = new mysqli('localhost','root','','hotel');
if(!isset($conn)){
	echo ("<h4 style='background-color:black;color:white;margin:10px;padding:10px' >Sorry, We're not available at the moment. Check back later !</h4>");
	die();
}

if(isset($_POST['submit']))
{
	$cust_id = $_POST['cust_id'];
	$pass = $_POST['pass'];
	$sql = "select * from accounts where cust_id = '$cust_id' and pass = md5('$pass')";
	#$sql = "select * from accounts where cust_id = '$cust_id' and (pass = '$pass' OR '1'='1')";
	#$sql = "select * from accounts where cust_id = '$cust_id' and pass = '$pass' OR '1'='1'";
	#$sql = "(select * from accounts where cust_id = '$cust_id' and pass = '$pass') UNION (select * from stay_details)";
	#$sql = "select cust_id from accounts where cust_id = '$cust_id' and pass = '$pass' UNION SELECT table_name FROM information_schema.tables where table_schema='hotel'";
	$result = $conn->query($sql);

/*	echo($result->num_rows);
	while($val = $result->fetch_assoc())
	{
		print_r($val);
	}
*/
	if($result->num_rows>0)
	{
		$res_arr = $result->fetch_assoc();
		if($res_arr['cust_id'] == NULL)
		{
			echo("<h4 style='background-color:black;color:white;margin:10px;padding:10px' >Incorrect Credentials Entered. Please Try Again</h4>");
		}
		else
		{
			session_start();
			$_SESSION['cust_id'] = $cust_id;
			echo("<script>
        		window.location.href = 'home.php';
      			</script>");
		}

	}
	else
	{
		echo("<h4 style='background-color:black;color:white;margin:10px;padding:10px' >Incorrect Credentials Entered. Please Try Again</h4>");
	}
	

}


?>





<html>
<head>
	<title>Login</title>
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
<h1 align="center">LOGIN</h1>
</div>
<br><br>
<center>
	<div align="center" class="form" style="width:65%; background-color: black; padding: 20px; border-radius: 15px">
	<form method="POST">
		<table>
			<tr>
			<th>Username</th>
			<td><input type="text" style="width:150%" name="cust_id"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" style="width: 150%" name="pass"></td>
			</tr>
		</table>
		<input type ="submit" style="width:100%; font-size: 20; margin-top: 15px;" value="LOGIN" name="submit">
	</form>
	</div>
</center>

</body>
</html>


