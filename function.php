<?php

include("dp.php");

function cart1()
{
   global $con;
	  $user= $_SESSION['user']; 
	  $following_userid=$_GET['username'];
	  $check_pro="insert into follow_person (Username,Following_Username) values('$user','$following_userid')";
	  $run_check=mysqli_query($con,$check_pro);	   
}

?>