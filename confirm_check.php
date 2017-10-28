<?php

session_start();

$conn = new mysqli('localhost','root','','hotel');
if(!isset($conn)){
	echo ("Sorry, We're not available at the moment. Check back later !");
	die();
}


$cust_id = $_SESSION['cust_id'];
$sub_id = $_SESSION['sub_id'];
$check_in = $_SESSION['check_in'];
$check_out = $_SESSION['check_out'];
$room_count = $_SESSION['room_count']; 
$adult_count = $_SESSION['adult_count'];
$child_count = $_SESSION['child_count'];
$charge = $_SESSION['charge'];

print_r($_SESSION);
$sql = "insert into stay_details(cust_id,sub_id,check_in,check_out,room_count,adult_count,child_count,charge) values 
		('$cust_id','$sub_id','$check_in','$check_out',$room_count,$adult_count,$child_count,$charge)";
print($sql); 
$result = mysqli_query($conn,$sql);
if($result==1)
{
	echo("<script>window.location.href = 'ack.php';</script>");
}
else
{
	echo("Could not complete the Booking process. Try again !");
}


?>