
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
	<title>Admin Panel</title>
	<link rel="stylesheet" href="css1/style.css">
		<link rel="stylesheet" href="text/css" href="C:\xampp\htdocs\bootstrap-4.4.1-dist\css\bootstrap.min.css">
		<script type="text/javascript" src="C:\xampp\htdocs\bootstrap-4.4.1-dist\js\bootstrap.bundle.min.js"></script>
	<style>
		body{
			margin: 0px;
			border: 0px;
			background: #ecf0f1;
		}
		#header{
			width: 100%;
			height: 150px;
			background: #2c3e50;
			color: white;
		}
		#sidebar{
			width: 300px;
			height: 400px;
			background:#2c3e50;
			float:right;

		}
		#data{
			height: 700px;
			background: #ecf0f1;
			color:black;
			font-family: Helvetica;
			font-size: 15px;
		}
		#adminLogo{
			background: white;
			border-radius: 50px;
			width:125px;
			height:125px;
		}
		ul li{
			padding:20px;
			border-bottom: 2px solid grey;
		}
		ul li:hover{
			background:#e74c3c;
			color:white;
		}
	</style>
</head>
<body>
	<div id="header">
		<center><img src="adminicon.png" alt="adminLogo" id="adminLogo"><br>This is Admin Panel, Please proceed with caution!
		</center>
	</div>
	<div id="sidebar">
		<h2 style="color:white">Manage Members</h2>
		<ul>
			<li><a href="add.php" style="color:#ecf0f1"> Add</a></li>
			<li><a href="remove.php" style="color:#ecf0f1"> Remove</a></li>
			<li><a href="search.php" style="color:#ecf0f1"> Search</a></li>
			<li><a href="adminpanel.php" style="color:#ecf0f1"> Back</a></li>
		</ul>
	</div>
	<div id="data">
			<form class="myform" action="remove.php" method="post">
				<h3>Give id to delete user data</h3>
				<label><b>ID</b></label>
				<input name="mid" type="text" class="inputvalues" placeholder="Member id" required/><br>
				<input name="submit_btn" type="submit" id="signup_btn" value="Delete"/><br>
				<a href="manage.php"><input type="button" id="back_btn" value="Back"/></a>
			</form>
			<?php
			if(isset($_POST['submit_btn']))
			{
				//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
				$mid =$_POST['mid'];
				{
						$query="delete from memberinfo where mid=$mid";
						$query_run= mysqli_query($con,$query);
						if($query_run)
						{
							echo'<script type="text/javascript"> alert("Member data deleted succefully") </script>';
						}
						else
						{
							echo'<script type="text/javascript"> alert("Error...") </script>';
						}
				}

			}
			?>
		</div>

		</body>
	</div>
	</body>
	</html>
	
