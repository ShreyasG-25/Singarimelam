
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
		}
		#header{
			width: 100%;
			height: 150px;
			background: #2c3e50;
			color: white;
		}
		#sidebar{
			width: 300px;
			height: 450px;
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
		<ul>
			<li><a href="manage.php" style="color:#ecf0f1"> Manage Members</a></li>
			<li><a href="viewbooking.php" style="color:#ecf0f1"> View Booking Request</a></li>
			<li><a href="viewcontact.php" style="color:#ecf0f1"> View Contact Detail</a></li>
			<li><a href="https://mail.google.com/mail/u/0/#inbox" style="color:#ecf0f1"> Mail</a></li>
			<li><a href="upload.php" style="color:#ecf0f1"> Post Updates</a></li>
			<li><a href="pending.php" style="color:#ecf0f1"> Arrange Event</a></li>
		</ul>
	</div>
	<div id="data">
		<?php
		error_reporting(0);
		$query="SELECT * FROM contact ORDER BY ID DESC";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0){
			echo"<h3><center>User Messages</center></h3>";
			echo"<h4><center>These messages were sent to admin email-sk6518191@gmail.com</center></h4>";
			while($row=mysqli_fetch_assoc($result)){
				echo"<h4>ID: ". $row["id"] ."</h4>" . "Name:" . $row["name"]. "<br>" . "Message:" . $row["message"]. "<br>" . "Email:" . $row["email"]. "<br>" . "Subject:" . $row["subject"]. "<br>";
				}
			}	else {
					echo"<h3><center>No User messages found!!</center></h3>";
		}
		?>
	</div>
</body>
</html>