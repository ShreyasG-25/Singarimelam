
<?php
/*For My LocalPC*/
$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'project');
?>

<DOCTYPE html>
	<html>   
	<title>Registration Page</title>
	<head>
		<link rel="stylesheet" href="css1/style.css">
		<link rel="stylesheet" href="text/css" href="C:\xampp\htdocs\bootstrap-4.4.1-dist\css\bootstrap.min.css">
		<script type="text/javascript" src="C:\xampp\htdocs\bootstrap-4.4.1-dist\js\bootstrap.bundle.min.js"></script>
	</head>
		<body style="background-color:#bdc3c7">
			<div id="main-wrapper">
				<center>
				<h2>Register Form</h2>
				<img src="image/male.png" class="male"/>
				</center>
			
			<form class="myform" action="register.php" method="post">
				<label><b>Username</b></label>
				<input name="username" type="text" class="inputvalues" placeholder="Type your username" pattern="[a-zA-Z]+"  title="Enter only alphabets" required/><br>
				<label><b>Fullname</b></label>
				<input name="fullname" type="text" class="inputvalues" placeholder="Type your fullname" pattern="^[a-zA-Z\s]+" title="Enter only alphabets" required/><br>
				<label><b>Gender:</b></label>
				<input type="radio" class="radiobtns" name="gender" value="male" checked required> Male
				<input type="radio" class="radiobtns" name="gender" value="female" required> Female<br>
				<label><b>Email</b></label>
				<input name="email" type="email" class="inputvalues" placeholder="Type your email" required/><br>
				<label><b>Contact</b></label>
				<input name="contact" type="text" maxlength="10" pattern="[0-9]{10}" title="Enter only 10 digits" class="inputvalues" placeholder="Type your 10 digit contact number" required/><br>
				<label><b>Password</b></label>
				<input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
				<label><b>Confirm Password</b></label>
				<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm your password" required/><br>
				<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
				<a href="login.php"><input type="button" id="back_btn" value="Back"/></a>
			</form>
			<?php
			if(isset($_POST['submit_btn']))
			{
				//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
				$fullname =$_POST['fullname'];
				$username=$_POST['username'];
				$gender = $_POST['gender'];
				$email=$_POST['email'];
				$contact=$_POST['contact'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				if($password==$cpassword)
				{
					$query= "select * from user_info WHERE username='$username'";
					$query_run= mysqli_query($con,$query);

					if(mysqli_num_rows($query_run)>0)
					{
						//username exists
						echo'<script type="text/javascript"> alert("Error.. User name exists, Try different username") </script>';
					}
					else
					{
						$query="insert into user_info values('','$username','$fullname','$gender','$email','$contact','$password')";
						$query_run= mysqli_query($con,$query);
						if($query_run)
						{
							echo'<script type="text/javascript"> alert("User Registerd.. Go to login page to login") </script>';
						}
						else
						{
							echo'<script type="text/javascript"> alert("Error...") </script>';
						}
					}
				}
				else
				{
					echo'<script type="text/javascript"> alert("Password & Confirm password does not match..") </script>';
				}

			}
			?>

		</body>
	</div>
	</body>
	</html>
	
