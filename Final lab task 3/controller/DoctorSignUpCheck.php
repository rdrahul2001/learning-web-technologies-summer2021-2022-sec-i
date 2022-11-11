<?php 
include("../Model/patientdb.php");
   $err=false;
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

    $Name = $_REQUEST['name'];
	$Username = $_REQUEST['username'];
	$Password = $_REQUEST['password'];
	$confirmPassword=$_REQUEST['Cpassword'];
	$Gender="";

	if ($Name == null || $Password == null || $confirmPassword==null ||)
	 {
		echo "<center><b><h1>Missing Information</h1></b></center> ";
		$err=true;
	}
	if(isset($_REQUEST['gender'])){
		$Gender=$_REQUEST['gender'];
		$err=false;
	}
	else {
		$err=true;
	}
	

	if($err==false){
		$connection=new Doctordb();
		$conobj=$connection->OpenCon();
		$userQuery=  $connection->Registration($conobj,$Name,$Username,$Password,$Gender);
		if($userQuery==true){
			header("location: ../View/DoctorSignIn.php");
		}
		$connection->CloseCon($conobj);
	}

}
?>
