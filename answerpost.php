<?php
session_start();
include 'swfserver.php';
$qid=$_SESSION['qid'];
$answer=$_POST['user-message'];
$user=$_SESSION['user'];
$sql="INSERT INTO answer(question_id,answer_text,user_name) values('$qid','$answer','$user')";
$result=mysqli_query($conn,$sql);

?>