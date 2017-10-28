<html>
<head>
	<title>Booking </title>
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
		th{
			padding-right: 50px;
		}
		select{
			padding:3px;
		}

	</style>
</head>
<body>
<div class="head" style="background-color: black; padding: 1px">
<h1 align="center">BOOKING</h1>
</div>
<br><br>
<center>
	<div align="center" class="form" style="width:75%; background-color: black; padding: 20px">
	<form action="confirm.php" method="POST">
		<table>
			<tr>
			<th>City</th>
			<td>
				<select required style="width:150%" name="sub_id">
					<option value="">-----SELECT A CITY-----</option>
					<option value="s003" name="sub_id" required>Delhi</option>
					<option value="s001" name="sub_id">Mumbai</option>
					<option value="s002" name="sub_id">Kolkata</option>
					<option value="s004" name="sub_id">Chennai</option>
				</select>
			</td>
			</tr>
			<tr>
				<th>Check in</th>
				<td><input type="date" style="width: 150%" name="check_in" required></td>
			</tr>
			<tr>
				<th>Check out</th>
				<td><input type="date" style="width: 150%" name="check_out" required></td>
			</tr>
			<tr>
			<th>Number of Guests</th>
			<td><input type="number" style="width:150%" name="guest_count" required></td>
			</tr>
			<tr>
			<th>Room Type</th>
			<td>
				<select required style="width: 150%" name="room_type">
					<option value="">-----SELECT YOUR PREFERENCE-----</option>
					<option value="rtsin" name="room_type">Single</option>
					<option value="rtdou" name="room_type">Double</option>
					<option value="rtque" name="room_type">Queen</option>
					<option value="rtkin" name="room_type">King</option>
				
				</select>
			</td>
			</tr>
			<tr>
			<th>Number of Rooms</th>
			<td><input type="number" style="width:150%" name="room_count" required></td>
			</tr>
			<tr>
			<th>Adult Count</th>
			<td><input type="number" style="width:150%" name="adult_count" required></td>
			</tr>
			<tr>
			<th>Child Count</th>
			<td><input type="number" style="width:150%" name="child_count" required></td>
			</tr>
		</table>
		<input type="submit" name="submit" style="width:100%; font-size: 20; margin-top: 15px; padding:5px" value="BOOK MY ROOM">
	</form>
	</div>
</center>
</body>
</html>