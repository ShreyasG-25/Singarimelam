
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
		<h2 style="color:white">Arrange Events</h2>
		<ul>
			<li><a href="pending.php" style="color:#ecf0f1"> Pending Events</a></li>
			<li><a href="arrangingprocess.php" style="color:#ecf0f1"> Arranging Events</a></li>
			<li><a href="arranged.php" style="color:#ecf0f1"> Arranged Events</a></li>
			<li><a href="completed.php" style="color:#ecf0f1"> Completed Events</a></li>
			<li><a href="adminpanel.php" style="color:#ecf0f1"> Back</a></li>
		</ul>
	</div>
	<div id="data">
		<form class="myform" name="idsearch" action="arranging.php" method="post">
				<h3>Arrange Events</h3>
				<label><b>ID</b></label>
				<input name="id" type="text" class="inputvalues" placeholder="Booking request id" required/><br>
				<input name="submit_btn" type="submit" id="signup_btn" value="Arrange"/><br>
				<a href="adminpanel.php"><input type="button" id="back_btn" value="Back"/></a><br>
				
			</form>
		<?php
		error_reporting(0);
		if(isset($_POST['submit_btn']))
		{
			$id =$_POST['id'];
			$querry="SELECT * FROM book_info WHERE id=$id AND accept='yes' AND arranged='no'";
                $result1=mysqli_query($con,$querry);
                if(mysqli_num_rows($result1)>0)
                {        
					$query="INSERT INTO post(eid, date, start_time, end_time, total_people, event_type, pay, event_loc, event_info, distance) SELECT id, date, start_time, end_time, total_people, event_type, pay, event_loc, event_info, distance FROM book_info  WHERE id=$id AND accept='yes' AND arranged='no'";
					$query_run=mysqli_query($con,$query);
					$sql="UPDATE book_info SET arranged='on' WHERE id=$id";
					 $query_run2=mysqli_query($con,$sql);
					
					if($query_run)
					{

						echo"<h3><center>Success</center></h3>";
					}
					else
					{
						echo"<h3><center>Failure</center></h3>";
					}
				}
		else
		{
			echo '<script type="text/javascript"> alert("No such pending event exists!") </script>';
		}
               
		}
		?>
	</div>
</body>
</html>