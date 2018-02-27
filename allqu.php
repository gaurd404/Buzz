<?php
include 'swfserver.php';
if(isset($_GET['qid']))
{
	$user=$_GET['qid'];
}
$sql="Select * from answer where question_id='$user'";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$user=$row["user_name"];
		$answer=$row["answer_text"];
		echo "Answer $answer<br>";
		echo "by $user<br>";
		echo "<a href=\"notifications.php?nid=1&username=$user\" method=\"POST\"><button>upvote</button></a><br><hr>";
	}
}
?>
