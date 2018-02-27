<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "warehouse";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$House_No=$_POST['house_no'];
$Village_town=$_POST['village'];
$District=$_POST['district'];
$Email_address=$_POST['email'];
$Aadhar_No=$_POST['aadhar_no'];
$mobile=$_POST['mobile_no'];
$user_id=$_POST['user_name'];
$password =$_POST['password'];
$sql = "INSERT INTO user_details (Username,First_name, Last_name, Email,Aadhar_No, Mobile_No, House_No,Village,District)
VALUES ('$user_id','$firstname', '$lastname','$Email_address','$Aadhar_No','$mobile' , '$House_No','$Village_town','$District')";
$sqli = "INSERT INTO login (Username,Password)
VALUES ('$user_id','password')";
$result=mysqli_query($conn, $sqli);
?>
<script>
alert("You have been successfully registered! \n Please Login to continue");
window.location = 'LOGIN.php';
</script>
<?php
mysqli_close($conn);
?> 