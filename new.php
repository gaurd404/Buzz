<?php
include 'common.php';
include 'swfserver.php';
include 'function.php';
cart1();
include 'swfserver.php';
$notification_id=$_GET['nid'];
$user=$_GET['username'];
$usern=$_SESSION['user'];
$sql="Insert into notifications(nid, Current_username, Username) Values ('$notification_id', '$usern', '$user');";
$result=mysqli_query($conn,$sql);
header('Location: allusers.php');
?>