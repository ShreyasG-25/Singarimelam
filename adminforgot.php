<?php
/*For My LocalPC*/
$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'project');
session_start();
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
				<h2>Forgot Password</h2>
				<img src="image/male.png" class="male"/>
				</center>
			
			<form class="myform" action="adminforgot.php" method="post">
				<label><b>Admin name</b></label>
				<input name="username" type="text" class="inputvalues" placeholder="Type Admin name"/><br>
				<input name="login_btn" type="submit" id="login_btn" value="Submit"/><br>
				<a href="adminlogin.php"><input type="button" id="register_btn" value="Login"/></a>
			</form>
			<?php
			if(isset($_POST['login_btn']))
			{
					$username=$_POST['username'];
					$query= "select * from admin_info WHERE username='$username'";
					$query_run= mysqli_query($con,$query);
					if(mysqli_num_rows($query_run)>0)
					{
						//username exists
								$sql1="SELECT * FROM admin_info WHERE username='$username'";
								$result2=mysqli_query($con,$sql1);
								while($rows=mysqli_fetch_assoc($result2))
								{	
									$to=$rows["email"];
									$_SESSION['aname']=$rows["username"];
									
								}
                				
	                                $message="To reset your password click this link http://localhost/singarimelam/admin_reset.php";
	                               
	                                // echo $message;
	                                $subject="Password Reset from Singarimelam@suc";
	                                 // $to= "sk6518191@gmail.com";
	                                $headers='From: Singarimelam@shri umamheshwari chende';

	                                 mail($to,$subject,$message,$headers);
	                                   echo '<script type="text/javascript"> alert("Recovery link has been sent to your email") </script>';
					}
					else
					{
						echo'<script type="text/javascript"> alert("No such admin name exists.") </script>';	
					}
			}
			?>
				</div>
		</body>
		</html>
	