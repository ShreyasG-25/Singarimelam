<?php
/*For My LocalPC*/
$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'project');
session_start();
if(!isset($_SESSION["mname"]))
{
    header('location:memberlogin.php');
}
?>
<DOCTYPE html>
	<html>
	<title>Reset Password</title>
	<head>
		<link rel="stylesheet" href="css1/style.css">
	</head>
		<body style="background-color:#7f8c8d">
			<div id="main-wrapper">
				<center>
				<h2>Reset Password</h2>
				<img src="image/male.png" class="male"/>
				</center>
			
			<form class="myform" action="member_reset.php" method="post">
				<label><b>Member name</b></label>
				<input name="username" type="text" class="inputvalues" placeholder="Type your username"/><br>
				<label><b>New Password</b></label>
				<input name="password" type="password" class="inputvalues" placeholder="Type your password"/><br>
				<label><b>Confirm Password</b></label>
				<input name="cpassword" type="password" class="inputvalues" placeholder="Retype your password"/><br>
				<input name="login_btn" type="submit" id="login_btn" value="Submit"/><br>
				<a href="memberlogin.php"><input type="button" id="register_btn" value="Login"/></a>
			</form>
			<?php
			if(isset($_POST['login_btn']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				if($password==$cpassword)
				{
					$query= "select * from memberinfo WHERE name='$username'";
					$query_run= mysqli_query($con,$query);

					if(mysqli_num_rows($query_run)>0)
					{
						//username exists
						$sql="UPDATE memberinfo SET password='$password' WHERE name='$username'";
						$query_run2= mysqli_query($con,$sql);
						if($query_run2)
							{
								echo'<script type="text/javascript"> alert("Password changed successfully.! Go to login page to login") </script>';
								unset($_SESSION["mname"]);
								session_destroy();
								header("location:memberlogin.php");

							}
						else
							{
								echo'<script type="text/javascript"> alert("Error..") </script>';
							}
					}
					else
					{
						echo'<script type="text/javascript"> alert("No such username exists.") </script>';	
					}
				}
				else
				{
					echo'<script type="text/javascript"> alert("Password & Confirm password does not match..") </script>';
				}
			
				
			}
			?>
				</div>
		</body>
		</html>
	