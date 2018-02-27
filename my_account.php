<!DOCTYPE>
<?php
session_start();
include("dp.php");
?>
<html>
   <head>
	</head>
	<body>
	    >
		
				<div id="sidebar_title">My Account:</div>
				
				<ul>
				
				<li><a href="edit.php">Edit Account</a></li>
				<li><a href="change_password.php">Change Password</a></li>
				<li><a href="delete_account.php">Delete Account</a></li>
			
				
				<ul>
				
				</div>
					
					
					</span>
			</div>
			
				<div id="products_box">
				
				
				
				<?php 
				
					if(!isset($_GET['edit'])){
						if(!isset($_GET['change_password'])){
							if(!isset($_GET['delete_account'])){
							
				
				
				}
				}
				}
				?>
				
				<?php 
				if(isset($_GET['edit_account'])){
				include("edit.php");
				}
				if(isset($_GET['change_pass'])){
				include("change_password.php");
				}
				if(isset($_GET['delete_account'])){
				include("delete_account.php");
				}
				
				
				?>
				
				
	</body>
</html>
	   