<?php

include('connection.php');
include('css/index.css.php');

session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Donor Registration</title>
	
	<link href="img/logo1.jpg" type="img/icon" rel="icon">
</head>
<body>
<div class="full">
	<div id="inner_full">

		<div id="header">
			<div id="logo1">
				<img src="img/logo1.jpg" width="50px",height= "50px", align="left" style="border-radius: 10px;">
			</div>  
			<h2><a href="admin-home.php" style="color: red; text-decoration:none;"> Blood Bank Management System </a></h2>
		</div>
		<div id="body">
		<marquee scrollamount="10" style="font-weight:bold; font-size:40px;text-decoration:none; color:white;font-style: oblique;">“Never feel yourself weak, you have the ability to save a life. Just donate blood.”</marquee>
			<?php
				$un=$_SESSION['un'];
				if(!$un)
				{	
					header("Location: index.php");
				}
			?>
			<h2 style="text-shadow: 3px 3px 3px #000;">Donor Registration</h2>
			<center><div id="form">
				<form action="" method="post">
				<table>
					<tr>
						<td width="200px" height="50px" style="text-shadow: 3px 3px 3px #000; color:red;">Enter Name</td>
						<td width="200px" height="50px" > <input type="text" name="name" placeholder="Enter Name" style="border-radius: 10px;"></td>
						<td width="200px" height="50px" style="text-shadow: 3px 3px 3px #000; color:red;">Enter Fathers Name</td>
						<td width="200px" height="50px" > <input type="text" name="fname" placeholder="Enter Fathers Name" style="border-radius: 10px;"></td>
					</tr>
					<tr>
						<td width="200px" height="50px" style="text-shadow: 3px 3px 3px #000; color:red;">Enter Address</td>
						<td width="200px" height="50px"><textarea Name="address" style="border-radius: 10px;"></textarea></td>
						<td width="200px" height="50px" style="text-shadow: 3px 3px 3px #000; color:red;">Enter City</td>
						<td width="200px" height="50px"> <input type="text" name="city" placeholder="Enter City" style="border-radius: 10px;"></td>
					</tr>
					<tr>
						<td width="200px" height="50px" style="text-shadow: 3px 3px 3px #000; color:red;">Enter Age</td>
						<td width="200px" height="50px"> <input type="text" name="age" placeholder="Enter Age" style="border-radius: 10px;"></td>
						<td width="200px" height="50px" style="text-shadow: 3px 3px 3px #000; color:red;">Select Blood Group</td>
						<td width="200px" height="50px"> 
							<select name="bgroup" style="border-radius: 10px;">
								<option>O+</option>
								<option>AB+</option>
								<option>O-</option>
								<option>AB-</option>
							</select>
						</td>
					</tr>
					<tr>
						<td width="200px" height="50px" style="text-shadow: 3px 3px 3px #000; color:red;">Enter Email</td>
						<td width="200px" height="50px"><input type="text" name="email" placeholder="Enter Email" style="border-radius: 10px;"></td>
						<td width="200px" height="50px" style="text-shadow: 3px 3px 3px #000; color:red;">Enter Mobile No.</td>
						<td width="200px" height="50px"> <input type="text" name="mno" placeholder="Enter Mobile No." style="border-radius: 10px;"></td>
					</tr>
					<tr>
					
						<td><input type="submit" name="sub" value="save" style="border-radius: 10px; text-shadow: 3px 3px 3px #000; color:red; font:bold; " ></td>
						
					</tr>
					
				</table>
				</form>
				<?php
				if(isset($_POST['sub']))
				{
					$name=$_POST['name'];
					$fname=$_POST['fname'];
					 $address=$_POST['address'];
					$city=$_POST['city'];
					$age=$_POST['age'];
					 $bgroup=$_POST['bgroup'];
					$email=$_POST['email'];
					$mno=$_POST['mno'];
					$q=$db->prepare("insert into donor_registration(name,fname, address,city,age,bgroup,email,mno)values(:name,:fname, :address,:city,:age,:bgroup,:email,:mno)");
					$q->bindValue('name',$name);
					$q->bindValue('fname',$fname);
					$q->bindValue('address',$address);
					$q->bindValue('city',$city);
					$q->bindValue('age',$age);
					$q->bindValue('bgroup',$bgroup);
					$q->bindValue('email',$email);
					$q->bindValue('mno',$mno);
					if($q->execute())
					{  
						$to_email = $email;
						$subject = "Blood Donation";
						$body = "Thank you!!! for helping us.... Donate Blood Save Life!!!    “Never feel yourself weak, you have the ability to save a life. Just donate blood.”";
						$headers = "From: supriyaraj2029@gmail.com";

						if (mail($to_email, $subject, $body)) {
    						echo "Registration Successful!!!";
						} else {
   							 echo "Email sending failed...";
								}

						echo "<script>alert('Donor Registration Successful')</script>";
					}
					else
					{
						echo "<script>alert('Donor Registration Failed')</script>";
					}	
				}
				?>

			</div></center>
		</div>
		<br><br>
		<div id="footer">	<p><a id=BTH href="admin-home.php" >Back To Home</a></p>
		<p><a id=log href="logo1ut.php" >logOut</a></p>

		<h4 align="center"> Copyright@supriyaraj</h4>
		</div>
	</div>
	<marquee behavior="scroll" direction="right" scrollamount="10" style="font-weight:bold; font-size:20px;text-decoration:none; color:#660033;font-style: oblique;">“Blood Donation will cost you nothing, but it will save a life!”</marquee>
<marquee behavior="scroll" direction="left" scrollamount="12" style="font-weight:bold; font-size:20px;text-decoration:none; color:white;#800000;font-style: oblique;">“We make a living by what we get. We make a life by what we give.”</marquee>
<marquee behavior="scroll" direction="right" scrollamount="14" style="font-weight:bold; font-size:20px;text-decoration:none; color:#000099;font-style: oblique;"> “Donate your blood for a reason, let the reason to be life.”</marquee>
</div>
</body>
</html>