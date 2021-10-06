<?php
session_start();
#error_reporting(0);
include('includes/dbconnection.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$cid=$_POST['duser'];
	$dquery=mysqli_query($con,"DELETE FROM tblusers WHERE ID='$cid'");
	if($dquery)
	{
		$msg="User Detail has been deleted.";
		 echo '<script>alert("User Detail has been deleted.")</script>';
echo "<script>window.location.href ='manage-newusers.php'</script>";
	}
	else
	{
	}
}
?>