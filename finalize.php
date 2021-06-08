
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
		<form class="myform" name="idsearch" action="finalize.php" method="post">
				<h3>Arrange Events</h3>
				<label><b>ID</b></label>
				<input name="id" type="text" class="inputvalues" placeholder="Booking request id" required/><br>
				<input name="submit_btn" type="submit" id="signup_btn" value="Check"/><br>
				<input name="accept_btn" type="submit" id="accept_btn" value="Finalize List"/><br></a>
				<a href="adminpanel.php"><input type="button" id="back_btn" value="Back"/></a><br>
				
			</form>
		<?php
		error_reporting(0);
		if(isset($_POST['submit_btn']))
		{
		$eid =$_POST['id'];

		$query="SELECT * from  post WHERE eid=$eid";
		$res=mysqli_query($con,$query);
		if(mysqli_num_rows($res)>0){
		while($rows=mysqli_fetch_assoc($res))
		{
			$num=$rows["total_people"];
			echo"<h3><center>Selected Members List for Event ID $eid</center></h3>";
			echo"<h3><center>Required Artists: $num</center></h3>";
		}
		
		$chendenum=$num/3;
		$dolenum=$num/3;
		$thalanum=$num/3;

		$sql="SELECT memberinfo.name,memberinfo.position,post.date,joined.logs FROM joined INNER JOIN post on post.eid=joined.eid INNER JOIN memberinfo on joined.mid=memberinfo.mid  WHERE  joined.eid=$eid AND memberinfo.position='chende' LIMIT $chendenum";
		$sql2="SELECT memberinfo.name,memberinfo.position,post.date,joined.logs FROM joined INNER JOIN post on post.eid=joined.eid INNER JOIN memberinfo on joined.mid=memberinfo.mid  WHERE  joined.eid=$eid AND memberinfo.position='tutor' OR memberinfo.position='dole'  LIMIT $dolenum";
		$sql3="SELECT memberinfo.name,memberinfo.position,post.date,joined.logs FROM joined INNER JOIN post on post.eid=joined.eid INNER JOIN memberinfo on joined.mid=memberinfo.mid  WHERE  joined.eid=$eid AND memberinfo.position='Thala' LIMIT $thalanum";
		$result1=mysqli_query($con,$sql);
		if(mysqli_num_rows($result1)>0){
			// echo"<h3><center>Selected Members List for Event ID $eid</center></h3>";
			// echo"<h3><center>Required Artists: $num</center></h3>";
			echo"<h3>Chende</h3>";
			?>
			<table border="1" width="600" align="">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Position</th>
					<th>Joining Time</th>
				</tr>
				<?php
				$i=1;
				while($row1=mysqli_fetch_assoc($result1))
				{
				
					echo"<tr>";
						echo"<td>$i</td>";
						echo"<td>".$row1["name"]."</td>";
						echo"<td>" . $row1["position"]. "</td>";
						echo"<td>" . $row1["logs"]. "</td>";
						echo"</tr>";
					$i++;
				}
				?>
			</table>
			<br><br>
			<?php
			}
			else
			{
				echo"<h3>Chende</h3>";
				echo "Members yet to join!";
			}
		



		$result2=mysqli_query($con,$sql2);
		if(mysqli_num_rows($result2)>0){
			echo"<h3>Dole</h3>";
			?>
			<table border="1" width="600" align="">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Position</th>
					<th>Joining Time</th>
				</tr>
				<?php
				$i=1;
				while($row2=mysqli_fetch_assoc($result2))
				{
				
					echo"<tr>";
						echo"<td>$i</td>";
						echo"<td>".$row2["name"]."</td>";
						echo"<td>" . $row2["position"]. "</td>";
						echo"<td>" . $row2["logs"]. "</td>";
						echo"</tr>";
					$i++;
				}
					?>
			</table>
			<br><br>
			<?php
			}
			else
			{
				echo"<h3>Dole</h3>";
				echo "Members yet to join!";
			}
		

			


		$result3=mysqli_query($con,$sql3);
		if(mysqli_num_rows($result3)>0){
			echo"<h3>Thala</h3>";
			?>
			<table border="1" width="600" align="">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Position</th>
					<th>Joining Time</th>
				</tr>
				<?php
				$i=1;
				while($row3=mysqli_fetch_assoc($result3))
				{
				
					echo"<tr>";
						echo"<td>$i</td>";
						echo"<td>".$row3["name"]."</td>";
						echo"<td>" . $row3["position"]. "</td>";
						echo"<td>" . $row3["logs"]. "</td>";
						echo"</tr>";
					$i++;
				}
				?>
			</table>
			<br><br>
			<?php
			}
			 else
			 {
			 	echo"<h3>Thala</h3>";
			 	echo "Members yet to join!";
			 }

        }
        else
        {
        	echo '<script type="text/javascript"> alert("Ooops! No such arranging request exists") </script>';
        }
    }
        if(isset($_POST['accept_btn']))
		{
			$eid =$_POST['id'];
			$newsql="UPDATE book_info SET arranged='yes' WHERE id=$eid";
			// $newresult=mysqli_query($con,$newsql);
			$query_run=mysqli_query($con,$newsql);
			if($query_run)
			{
				echo '<script type="text/javascript"> alert("Sucess! Event Lists is updated") </script>';
			}
			else
			{
				echo '<script type="text/javascript"> alert("Failure! Could not update list") </script>';
			}
		}
		?>
	</div>
</body>
</html>