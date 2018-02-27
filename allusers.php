<?php 
include 'common.php';
?>
<!Doctype HTML>
<HEAD>
<TITLE>
Questions
</TITLE>
<style>

</style>
</HEAD>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="buzzpage.css">
<body>
<div id="right-content" class="col-sm-9">
	     <div class="tabu">
             Users
        </div>
		<hr>
        
	<div class="tabular">
  <button class="tablinks" onclick="opentype('Name')">Name</button>
  <button class="tablinks" onclick="opentype('Points')">Points</button>

</div>

<div id="Name" class="w3-container type">
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
$count=0;
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$user=$row["username"];
		$points=$row["Points"];
		$count++;
?>
    <div id="userbox" class="col-sm-4">
	    <div class="col-sm-2">
			<img src="profile.png" style="height:40px;width:40px;">
        </div>
        <div class="col-sm-10">		
		<?php		
		echo "<a href=\"userprofile.php?name=$user\" method=\"GET\">$user</a><br>";
		echo "$points Points";
		echo "\r\n";
?>
</div>
    </div>
<?php
    if($count%3==0)
	{
		?>
	<br><br><br>	
		<?php
	}		
	}	
}
?>
</div>

<div id="Points" class="w3-container type" style="display:none">
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

$sql="select username,Points from student ORDER BY Points DESC";
$result=(mysqli_query($conn,$sql));
$count=0;
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$user=$row["username"];
		$points=$row["Points"];
		$count++;
?>
     <div id="userbox" class="col-sm-4">
	    <div class="col-sm-2">
			<img src="profile.png" style="height:40px;width:40px;">
        </div>
        <div class="col-sm-10">		
		<?php		
		echo "<a href=\"userprofile.php?name=$user\" method=\"GET\">$user</a><br>";
		echo "$points Points";
		echo "\r\n";
?>
</div>
    </div>
<?php
    if($count%3==0)
	{
		?>
	<br><br><br>
		<?php
	}		
	}	
}
?>
</div>



<script>
function opentype(typeName) {
    var i;
    var x = document.getElementsByClassName("type");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(typeName).style.display = "block";  
}
</script>
  </div>  
  
  </body>
  </html>