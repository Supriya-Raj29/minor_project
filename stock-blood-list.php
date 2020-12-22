<?php
include('connection.php');
include('css/index.css.php');
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Stock Blood List</title>
	
    <link href="img/logo1.jpg" type="img/icon" rel="icon">
    <style type="text/css">
        td{
            width:200px;
            height:40px;
        }
    </style>
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
        <marquee scrollamount="10" style="font-weight:bold; font-size:40px;text-decoration:none; font-style: oblique;color:white;">“Never feel yourself weak, you have the ability to save a life. Just donate blood.”</marquee>
			<?php
				$un=$_SESSION['un'];
				if(!$un)
				{	
					header("Location: index.php");
				}
			?>
			<h2 style="text-shadow: 3px 3px 3px #000;">Stock Blood List</h2>
			<center><div id="form">
			<table>
                <tr>
                    <td><center><b> <font color="red" style="text-shadow: 3px 3px 3px #000;">Name</font></b></center></td>
                    <td><center><b><font color="red" style="text-shadow: 3px 3px 3px #000;">Quantity</font></b></center></td>
                    
                </tr>
                 <tr>
                     <td><center>AB+</td>
                     <td><center>
                         <?php
                         $q=$db->query("select * from donor_registration where bgroup='AB+'");
                         echo $row=$q->rowCount();
                         ?>
                     </center> 
                     </td>  
                 </tr>
                 <tr>
                     <td><center>AB-</center></td>
                     <td><center>
                     <?php
                         $q=$db->query("select * from donor_registration where bgroup='AB-'");
                         echo $row=$q->rowCount();
                         ?>
                     </center></td>  
                 </tr>
                 <tr>
                     <td><center>O+</center></td>
                     <td><center>
                     <?php
                         $q=$db->query("select * from donor_registration where bgroup='O+'");
                         echo $row=$q->rowCount();
                         ?>
                     </center></td>  
                 </tr>
                 <tr>
                     <td><center>O-</center></td>
                     <td><center>
                     <?php
                         $q=$db->query("select * from donor_registration where bgroup='O-'");
                         echo $row=$q->rowCount();
                         ?>
                     </center></td>  
                 </tr>
            </table>

			</div></center>
		</div>
		<br><br>
		<div id="footer">
        <p><a id=log href="logo1ut.php" >logo1ut</a></p>        
        <p><a id=BTH href="admin-home.php" >Back To Home</a></p>
                <h4 align="center"> Copyright@supriyaraj</h4>
		</div>
	</div>
    <marquee behavior="scroll" direction="right" scrollamount="10" style="font-weight:bold; font-size:20px;text-decoration:none; color:#660033;font-style: oblique;">“Blood Donation will cost you nothing, but it will save a life!”</marquee>
<marquee behavior="scroll" direction="left" scrollamount="12" style="font-weight:bold; font-size:20px;text-decoration:none; color:white;#800000;font-style: oblique;">“We make a living by what we get. We make a life by what we give.”</marquee>
<marquee behavior="scroll" direction="right" scrollamount="14" style="font-weight:bold; font-size:20px;text-decoration:none; color:#000099;font-style: oblique;"> “Donate your blood for a reason, let the reason to be life.”</marquee>
</div>
</body>
</html>