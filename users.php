<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swf";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="select username,Points from student ORDER BY username DESC";
$result=(mysqli_query($conn,$sql));
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$user=$row["username"];
		$points=$row["Points"];
		echo "$user\n";
		echo "$points";
		echo "\r\n";
	}
}
?>