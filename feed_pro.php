<?php
session_start();
include("dp.php");
?>
<?php
 if(isset($_POST['add_feed']))
 {
	echo $subject=$_POST['subject'];
	echo $email=$_SESSION['email'];
	$sel_c6="select * from subject where  name='$subject'";
	$run_c6=mysqli_query($con,$sel_c6);
	while($row_pro6=mysqli_fetch_array($run_c6))
			{
			  echo $subject_id=$row_pro6['subject_id'];
			  $sel_c="select * from person where  email='$email'";
			  $run_c=mysqli_query($con,$sel_c);
			  while($row_pro5=mysqli_fetch_array($run_c))
						{
						  echo $person_id=$row_pro5['person_id'];
						  echo $type=$row_pro5['type'];
						   if($type=="Student")
										  {
											  
											 $insert_c1 ="select * from  student where person_id='$person_id' ";
											  $run_c2=mysqli_query($con,$insert_c1); 
											  while($row_pro5=mysqli_fetch_array($run_c2))
												{
												  echo $student_id=$row_pro5['student_id'];
												  $insert_c2 ="insert into interested_sub_details(student_id,subject_id) values('$student_id','$subject_id')";
											        $run_c8=mysqli_query($con,$insert_c2); 
													 if($run_c8)
													  {
														 echo "<script>alert('add Successful!')</script>";
														 echo "<script>window.open('feed.php','_self')</script>";
													  }
													
												}
										  }
										else
										  {
											  
											 $insert_c1 ="select * from  mentor where person_id='$person_id' ";
											  $run_c2=mysqli_query($con,$insert_c1); 
											  while($row_pro5=mysqli_fetch_array($run_c2))
												{
												  echo $mentor_id=$row_pro5['mentor_id'];
												  $insert_c2 ="insert into feed(mentor_id,subject_id) values('$mentor_id','$subject_id')";
											        $run_c8=mysqli_query($con,$insert_c2); 
													 if($run_c8)
													  {
														 echo "<script>alert('add Successful!')</script>";
														 echo "<script>window.open('feed.php','_self')</script>";
													  }
												}
										  }
						     
							  
							  
							  }
							  }
						}
			
			
  
  
							  ?>
							  <?php
							      if(isset($_POST['skip']))
								  {
									  echo "<script>window.open('Questions.php','_self')</script>";
								  }
								  ?>
								  