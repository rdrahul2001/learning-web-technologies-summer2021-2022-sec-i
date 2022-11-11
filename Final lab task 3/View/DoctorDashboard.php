
<?php
	//require_once('../controller/header.php');
  session_start();
  include_once("Nav2.php");

  if(empty($_SESSION["Username"])){
    header("Location: DoctorSignIn.php");
  }
	
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../controll/asset/css/design3.css">
	
	<title>Doctor Dasboard</title>
<style>
body {
  background-image: url('../image/8.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
</head>
<body>
  <center>

<table border="5px" style="background-color:#79cafc;color:black">
<td>
	<tr>
  <li><b><a href="Doctor Profile.php">Profile</a></b></li>
                    <li><b><a href="Edit Profile.php">Edit Profile</a></b></li>
                    <li><b><a href="Change Password.php">Change Password</a></b></li>
                    <li><b><a href="Change Profile picture.php">Change profile picture</a></b></li>
                    <li><b><a href="Appointment.php">Appointment</a></b></li>
                    <li><b><a href="Give Prescription.php">give prescription</a></b></li>
                    <li><b><a href="Withdraw Salary.php">Withdraw salary</a></b></li>
                    <li><b><a href="Show Patient list.php">Show patient list</a></b></li>
                    <li><b><a href="View Prescription history.php">View prescription history</a></b></li>
                    <br>
                    <b><a href="../controller/Logout.php">Logout</a></b>
</td>
</tr>

</table>
</Center>
	

</head>


</body>
</html>

