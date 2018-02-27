<?php
session_start();
include 'swfserver.php';
	  $user= $_SESSION['user']; 
	  $answerid=$_GET['answer_id'];
	  $check_pro="Insert into upvote_ans(answer_id,upvote_by) Values ('$answerid','$user')";
	  $run_check=mysqli_query($conn,$check_pro);
	  $usern=$_GET['username'];
	  $notification_id=$_GET['nid'];
$sql="Insert into notifications(nid, Current_username, Username) Values ('$notification_id', '$user', '$usern');";
$result=mysqli_query($conn,$sql);
?>