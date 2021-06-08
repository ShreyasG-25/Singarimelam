
<?php
/*For My LocalPC*/
$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'project');
session_start();
if(!isset($_SESSION["aid"]))
{
    header('location:adminlogin.php');
}
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
			
			<form class="myform" action="add.php" method="post">
				<label><b>Name</b></label>
				<input name="name" type="text" class="inputvalues" placeholder="Member name" pattern="[a-zA-Z]+"  title="Enter only alphabets" required/><br>
				<label><b>Position</b></label><br>
				<input type="radio" class="radiobtns" name="position" value="Chende" checked required> Chende<br>
				<input type="radio" class="radiobtns" name="position" value="Dole" required> Dole<br>
				<input type="radio" class="radiobtns" name="position" value="Thala" required> Thala<br>
				<label><b>Email</b></label>
				<input name="email" type="email" class="inputvalues" placeholder="Type email" required/><br>
				<label><b>Contact</b></label>
				<input name="contact" type="text" maxlength="10" pattern="[0-9]{10}" title="Enter only 10 digits" class="inputvalues" placeholder="Type 10 digit contact number" required/><br>
				<label><b> Create Password</b></label>
				<input name="password" type="password" class="inputvalues" placeholder="Create password" required/><br>
				<input name="submit_btn" type="submit" id="signup_btn" value="Create Member"/><br>
				<a href="manage.php"><input type="button" id="back_btn" value="Back"/></a>
			</form>
			<?php
			if(isset($_POST['submit_btn']))
			{
				//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
				$name =$_POST['name'];
				$position = $_POST['position'];
				$email=$_POST['email'];
				$contact=$_POST['contact'];
				$password=$_POST['password'];
				if($password==$password)
				{
					$query= "select * from memberinfo WHERE name='$name'";
					$query_run= mysqli_query($con,$query);

					if(mysqli_num_rows($query_run)>0)
					{
						//username exists
						echo'<script type="text/javascript"> alert("Error.. User name exists, Try different username") </script>';
					}
					else
					{
						$query="insert into memberinfo values('','$name','$position','$email','$contact','$password')";
						$query_run= mysqli_query($con,$query);
						if($query_run)
						{
							echo'<script type="text/javascript"> alert("Member Registered successfully..") </script>';
						}
						else
						{
							echo'<script type="text/javascript"> alert("Error...") </script>';
						}
					}
				}

			}
			?>

		</body>
	</div>
	</body>
	</html>
	
