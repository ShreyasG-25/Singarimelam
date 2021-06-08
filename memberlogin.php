<?php
/*For My LocalPC*/
$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'project');
session_start();
?>
<DOCTYPE html>
	<html>
	<title>LoginPage</title>
	<head>
		<link rel="stylesheet" href="css1/style.css">
		<style>
			#register_btn{
        background-color:red;
        padding:5px;
        color:white;
        width:100%;
        text-align:center;
        font-size:18px;
        font-weight:bold;
        margin-top:10px;
        }
		</style>
	</head>
		<body style="background-color:#7f8c8d">
			<div id="main-wrapper">
				<center>
				<h2>Login Form</h2>
				<img src="image/male.png" class="male"/>
				</center>
			
			<form class="myform" action="memberlogin.php" method="post">
				<label><b>Member name</b></label>
				<input name="username" type="text" class="inputvalues" placeholder="Type your username"/><br>
				<label><b>Password</b></label>
				<input name="password" type="password" class="inputvalues" placeholder="Type your password"/><br>
				<input name="login" type="submit" id="login_btn" value="Login"/><br>
				<a href="index.html"><input type="button" id="register_btn" value="Back"/></a>
				<a href="memberforgot.php"><label>Forgot Password?</label></a>
			</form>
			<?php
			if(isset($_POST['login']))
			{
				$name=$_POST['username'];
				$password=$_POST['password'];

				$query="select * from memberinfo WHERE name='$name' AND password='$password'";

				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					//valid user
					$row=mysqli_fetch_assoc($query_run);
					$_SESSION['mid']=$row["mid"];
					$_SESSION['name']=$row["name"];
					
					header('location:join.php');
				}
				else
				{
					//invalid user
					echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
				}
			}
			?>

				</div>
		</body>
		</html>
	
