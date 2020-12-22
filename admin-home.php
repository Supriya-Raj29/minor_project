<?php
include('connection.php');
include('css/index.css.php');
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	
	<link href="img/logo1.jpg" type="img/icon" rel="icon">
	<link href="img/p2.jepg" type="img/jpeg">

</head>
<body>
<div class="full" style="overflow-y: auto;" >

	<div id="inner_full">

		<div id="header"><div id="logo1">
				<img src="img/logo1.jpg" width="50px",
		height= "50px", align="left" style="border-radius: 10px;">
			</div>  <h2><a href="admin-home.php" style="color: red; text-decoration:none;"> Blood Bank Management System </a></h2></div>
		<div id="body">
		<marquee scrollamount="10" style="font-weight:bold; font-size:40px;text-decoration:none; color:white;">“Never feel yourself weak, you have the ability to save a life. Just donate blood.”</marquee>
			<?php
				$un=$_SESSION['un'];
				if(!$un)
				{	
					header("Location: index.php");
				}
			?>
			<h1 style="text-shadow: 3px 3px 3px #000;">Welcome Admin</h1><br><br>
			
			<ul>
				<li><a href="donor-registration.php" style="text-shadow: 3px 3px 3px #000; ">Donor Registration</a></li>
				<li><a href="donor-list.php"style="text-shadow: 3px 3px 3px #000;">Donor List</a></li>
				<li><a href="stock-blood-list.php"style="text-shadow: 3px 3px 3px #000;">Stock Blood List</a> </li>
			</ul><br><br><br><br><br>
			<ul>
				<li><a href="out-stock-blood-list.php" style="text-shadow: 3px 3px 3px #000;">Out Stock Blood List </a></li>
				<li><a href="exchange-blood-registration.php" style="text-shadow: 3px 3px 3px #000;">Exchange Blood Registration</a> </li>
				<li><a href="exchange-blood-list1.php" style="text-shadow: 3px 3px 3px #000;">Exchange Blood List</a> </li>
			</ul>
		</div>
		
		<div id="footer">
		<p><a id=log href="logout.php" >logout</a></p>

		<h4 align="center"> Copyright@supriyaraj</h4>
		
		</div>
	</div>
	<marquee behavior="scroll" direction="right" scrollamount="10" style="font-weight:bold; font-size:20px;text-decoration:none; color:#660033;font-style: oblique;">“Blood Donation will cost you nothing, but it will save a life!”</marquee>
<marquee behavior="scroll" direction="left" scrollamount="12" style="font-weight:bold; font-size:20px;text-decoration:none; color:white;#800000;font-style: oblique;">“We make a living by what we get. We make a life by what we give.”</marquee>
<marquee behavior="scroll" direction="right" scrollamount="14" style="font-weight:bold; font-size:20px;text-decoration:none; color:#000099;font-style: oblique;"> “Donate your blood for a reason, let the reason to be life.”</marquee>
</div>
</body>
</html>