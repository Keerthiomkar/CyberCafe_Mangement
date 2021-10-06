<?php
session_start();
#error_reporting(0);
include('includes/dbconnection.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$cid=$_POST['dcomputer'];
	$dquery=mysqli_query($con,"DELETE FROM tblcomputers WHERE ID='$cid'");
	if($dquery)
	{
		$msg="Computer Detail has been deleted.";
		 echo '<script>alert("Computer Detail has been deleted.")</script>';
echo "<script>window.location.href ='manage-computer.php'</script>";
	}
	else
	{
	}
}
?>
