
<?php
$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'project');
session_start();
if(!isset($_SESSION["aid"]))
{
    header('location:adminlogin.php');
}
?>


<html>
<head>
	<title>Admin Panel</title>
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
		<?php
		error_reporting(0);
		$query="SELECT * FROM memberinfo";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0){
			echo"<h3><center>Data available</center></h3>";
			while($row=mysqli_fetch_assoc($result)){
				echo"<h4>ID: </h4>" . $row["mid"]. "<br>" . "Name:" . $row["name"]. "<br>" . "Position:" . $row["position"]. "<br>" . "Email:" . $row["email"]. "<br>" . "Contact:" . $row["contact"]. "<br>";
				}
			}	else {
					echo"<h3><center>No user data found</center></h3>";
		}
		?>

	</div>
</body>
</html>