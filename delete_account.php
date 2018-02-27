
<br>

<h2 style="text-align:center; ">Do you really want to DELETE your account?</h2>

<form action="" method="post">

<br>
<input type="submit" name="yes" value="Yes I want" /> 
<input type="submit" name="no" value="No I was Joking" />


</form>

<?php 
include("dp.php"); 
   session_start();
	echo $user = $_SESSION['user']; 
	
	if(isset($_POST['yes'])){
	
	$delete_customer = "delete from person where username='$user'";
	
	$run_customer = mysqli_query($con,$delete_customer); 
	
	echo "<script>alert('We are really sorry, your account has been deleted!')</script>";

	}
	if(isset($_POST['no'])){
	
	echo "<script>alert('oh! do not joke again!')</script>";
	echo "<script>window.open('order.php','_self')</script>";
	
	}
	


?>