
<?php

$conn = mysqli_connect('localhost','root','','hotel');
if(!isset($conn)){
	echo ("Sorry, We're not available at the moment. Check back later !");
	die();
}

if(isset($_POST['submit']))
{
	$cust_id = $_POST['cust_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$aadhar_id = $_POST['aadhar_id'];
	$gender = $_POST['gender'];
	$res_addr = $_POST['res_addr'];
	$contact = $_POST['contact'];
	$pass = md5($_POST['pass']);

	$sql = "insert into accounts(cust_id,name,gender,dob,res_addr,contact,email,aadhar_id,pass)
	values ('$cust_id','$name','$gender','$dob','$res_addr','$contact','$email','$aadhar_id','$pass')";
	$q_res = mysqli_query($conn,$sql);
	if($q_res != 1)
	{
		echo("<h4 style='background-color:black;color:white;margin:10px;padding:10px' >The details entered by you seem to have already been associated with another account. Please contact the Customer Support for more information. Thanks for your time !</h4>");
	}
	else{
		echo("Thanks for the Registration.");
	}

}


?>

<html>
<head>
	<title>Home : Welcome</title>
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
			padding: 7px;
			font-size:18 ;
		}
		input{
			padding : 5px;
			border-radius: 5px;
		}

	</style>
</head>
<body>
<div class="head" style="background-color: black; padding: 1px; border-radius: 15px">
<h1 align="center">REGISTRATION</h1>
</div>
<br>
<center>
	<div align="center" class="form" style="width:65%; background-color: black; padding: 20px; border-radius: 15px">
	<form method="POST">
		<table>
			<tr>
			<th>Name</th>
			<td><input type="text" style="width:100%" name="name" required></td>
			</tr>
			<tr>
			<tr>
			<th>Username</th>
			<td><input type="text" style="width:100%" name="cust_id" required></td>
			</tr>
			<tr>
			<tr>
			<th>Password</th>
			<td><input type="password" style="width:100%" name="pass" required></td>
			</tr>
			<tr>
				<th>Email ID</th>
				<td><input type="email" style="width: 100%" name="email" required></td>
			</tr>
			<tr>
				<th>Contact</th>
				<td><input type="number" style="width: 100%" name="contact" required></td>
			</tr>
			<tr>
			<th>Address</th>
			<td><input type="text" style="width:100%" name="res_addr" required></td>
			</tr>
			<tr>
			<tr>
			<th>Adhar Card Number</th>
			<td><input type="number" style="width:100%" name="aadhar_id" required></td>
			</tr>
			<tr>
				<th>Date of Birth</th>
				<td><input type="date" style="width: 100%" name="dob" required></td>
			</tr>
			<tr>
				<th>Gender</th>
				<td>Male : <input type="radio" name="gender" value="male" required>&nbsp;&nbsp;&nbsp;&nbsp;
					Female : <input type="radio" name="gender" value="female" required>&nbsp;&nbsp;&nbsp;&nbsp;
					Others : <input type="radio" name="gender" value="others" required>
			</tr>

		</table>
		<input type ="submit" style="width:100%; font-size: 20; margin-top: 15px;" value="REGISTER" name="submit">
		<center>
			<b><h4>OR</h4></b>
		</center>
	</form>
			<a href="login.php" style="color:white">LOGIN</a>
	</div>
</center>
</body>
</html>


