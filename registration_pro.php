<?php
session_start();
include("dp.php");
?><?php
 if(isset($_POST['register']))
 {
	$name=$_POST['name'];
     $dob=$_POST['dob'];
	 $gender=$_POST['gender'];
	 $email=$_POST['email'];	
	 $mobile=$_POST['mobile'];
     $address=$_POST['address'];
	 $type=$_POST['type'];
	 $board=$_POST['board'];
	 $class=$_POST['class'];
	 $username=$_POST['username'];
	 $pass=$_POST['pass'];	
   $insert_c ="insert into person(name,username,dob,gender,email,mobile_no,address,type,board,class,password) 
   values('$name','$username','$dob','$gender','$email','$mobile','$address','$type','$board','$class','$pass')";
   $run_c1=mysqli_query($con,$insert_c);     
    $sel_c5="select * from person where email='$email' ";
	$run_c5=mysqli_query($con,$sel_c5);
	while($row_pro5=mysqli_fetch_array($run_c5))
			{
			   $person_id=$row_pro5['person_id'];
			    
			   $sel_c="select * from board where board_name='$board'";
			   $run_c=mysqli_query($con,$sel_c);
			   while($row_pro=mysqli_fetch_array($run_c))
						{
						   $board_id=$row_pro['board_id'];
						
						   if($type=="Student")
							  {
								  
								 $insert_c1 ="insert into student(username,person_id,board_id,class_id) values('$name','$person_id','$board_id','$class')";
								  
								$run_c2=mysqli_query($con,$insert_c1); 
								 if($run_c2)
								  {
								  echo "<script>alert('Registration Successful!')</script>";
								   $_SESSION['email']=$email;
								   echo "<script>window.open('feed.php','_self')</script>";

								  }
							  }
							 if($type=="Mentor")
							  {
								 $insert_c1 ="insert into mentor(username,person_id,board_id) values('$name','$person_id','$board_id');";
								 $run_c2=mysqli_query($con,$insert_c1); 
								  if($run_c2)
								  {
								  echo "<script>alert('Registration Successful!')</script>";
								   $_SESSION['email']=$email;
								  echo "<script>window.open('feed.php','_self')</script>";
								  }
							  }
							  
						}
			
						 
						 
			}
  }
 
?>