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
</head>
<body>
<div class="full">

	<div id="inner_full">

		<div id="header">
			<div id="logo1">
				<img src="img/logo1.jpg" width="50px",
		height= "50px", align="left" style="border-radius: 10px;">
			</div> 
		<h2> Blood Bank Management System </h2>
		</div>
		<div id="body">
		<marquee scrollamount="10"  style="font-weight:bold; font-size:40px;text-decoration:none; color:white;font-style: oblique;">“Never feel yourself weak, you have the ability to save a life. Just donate blood.”</marquee>
		<br><br><br><br><br><br>
		<form action="" method="post">
		<table align="center">
			<tr>
				<td width="200px" height="70px" style= "font-weight:bold;text-decoration:none;"><b>Enter Username </b></td>
				<td width="200px" height="70px"><input type="text" name="un" placeholder="Enter Username" style= "width:180px; height:30px; border-radius:10px"></td>

			</tr>
			<tr>
				<td width="200px" height="70px" style=" font-weight:bold;text-decoration:none;" ><b>Enter Password</b></td>
				<td width="200px" height="70px"><input type="text" name="ps" placeholder="Enter Password" style= "width:180px; height:30px; border-radius:10px"></td>

			</tr>
			<tr>
				<td><input type="submit" name="sub" value="Login" style= "width:70px; height:30px; border-radius:5px;color:red; font-weight:bold;text-decoration:none;"></td>
			</tr>
		</table>
		</form>
		<?php
		if(isset($_POST['sub']))
		{
			 $un=$_POST['un'];
		     $ps=$_POST['ps'];
		     $q=$db->prepare("select * from admin where uname='$un' and pass='$ps'");
		     $q->execute();
		     $res=$q->fetchAll(PDO::FETCH_OBJ);
		     if($res)
		     {
		     	$_SESSION['un']=$un;
		     	header("Location:admin-home.php");
		     }
		     else
		     {
		     	echo "<script>alert('wrong user')</script>";
		     }

		}
		?>
		</div>
		
		<div id="footer">
		
		<h4 align="center"> Copyright@supriyaraj</h4>
		
		</div>
	</div>
	
	<marquee behavior="scroll" direction="right" scrollamount="10" style="font-weight:bold; font-size:20px;text-decoration:none; color:#660033;font-style: oblique;">“Blood Donation will cost you nothing, but it will save a life!”</marquee>
<marquee behavior="scroll" direction="left" scrollamount="12" style="font-weight:bold; font-size:20px;text-decoration:none; color:white;#800000;font-style: oblique;">“We make a living by what we get. We make a life by what we give.”</marquee>
<marquee behavior="scroll" direction="right" scrollamount="14" style="font-weight:bold; font-size:20px;text-decoration:none; color:#000099;font-style: oblique;"> “Donate your blood for a reason, let the reason to be life.”</marquee>
</div>
</body>
</html>