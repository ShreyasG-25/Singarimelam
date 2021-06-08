
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
		#accept_btn{
		background-color:#2ecc71;
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

<body>
	<div id="header">
		<center><img src="adminicon.png" alt="adminLogo" id="adminLogo"><br>This is Admin Panel, Please proceed with caution!
		</center>
	</div>
	<div id="sidebar">
		<h2 style="color:white">Booking Requests</h2>
		<ul>
			<li><a href="arrange.php" style="color:#ecf0f1"> Search</a></li>
			<li><a href="accept.php" style="color:#ecf0f1"> Accept</a></li>
			<li><a href="deletebook.php" style="color:#ecf0f1"> Delete</a></li>
			<li><a href="adminpanel.php" style="color:#ecf0f1"> Back</a></li>
		</ul>
	</div>
	<div id="data">
		<form class="myform" name="idsearch" action="arrange.php" method="post">
				<h3>Give booking request id</h3>
				<label><b>ID</b></label>
				<input name="id" type="text" class="inputvalues" placeholder="Booking request id" required/><br>
				<input name="submit_btn" type="submit" id="signup_btn" value="Search"/><br>
				<a href="accept.php"><input name="submit_btn" type="button" id="accept_btn" value="Next"/><br></a>
				<a href="adminpanel.php"><input type="button" id="back_btn" value="Back"/></a><br>
				
			</form>
		<?php
		error_reporting(0);
		if(isset($_POST['submit_btn']))
		{
		$id =$_POST['id'];
		echo $id;
		$query="SELECT * FROM book_info WHERE id=$id";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0){
			echo"<h3><center>Data available</center></h3>";
			while($row=mysqli_fetch_assoc($result)){
				echo"<h4>ID: </h4>" . $row["id"]. "<br>" . "Name:" . $row["name"]. "<br>" . "Email:" . $row["email"]. "<br>" . "Number:" . $row["number"]. "<br>" . "Alternate number:" . $row["alt_number"]. "<br>" . "Start Time:" . $row["start_time"]. "<br>" . "End Time:" . $row["end_time"]. "<br>" . "Date:" . $row["date"]. "<br>" . "Event Type:" . $row["event_type"]. "<br>" . "Per Person Pay:" . $row["pay"]. "<br>" . "Required People:" . $row["total_people"]. "<br>" . "Event Location:" . $row["event_loc"]. "<br>" . "Event Info:" . $row["event_info"]. "<br>" . "Distance in km:" . $row["distance"]. "<br>" . "Expected Pay:" . $row["expected_pay"]. "<br><br><br>";
				}
			}	else {
					echo"<h3><center>No such booking request found</center></h3>";
		}
	}
		?>
	</div>
</body>
</html>