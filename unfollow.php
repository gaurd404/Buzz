<?php
session_start();
include 'swfserver.php';
	  $user= $_SESSION['user']; 
	  $following_userid=$_GET['username'];
	  $check_pro="delete from follow_person where (Following_Username='$following_userid' AND Username='$user')";
	  $run_check=mysqli_query($conn,$check_pro);
	  header('Location: allusers.php');
?>