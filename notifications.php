<?php
include 'swfserver.php';
$notification_id=$_GET['nid'];
$user=$_GET['username'];
$sql="Insert into notifications(nid, Notification, Username) Values ('$notification_id', '', '$user');"
?>