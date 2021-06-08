
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
        <form class="myform" action="upload.php" method="post" enctype="multipart/form-data">
            <center>
            <h2>Add Post</h2>
        </center>
                <label><b>Date:</b></label>
                <input name="date" type="date" class="inputvalues" placeholder="Type event date" required/><br>
                <label><b>Title:</b></label>
                <input name="title" type="text" class="inputvalues" placeholder="Type event title" required/><br>
                <label><b>Upload Image:</b></label>
                <input type="file" name="uploadfile" class="inputvalues" value=""/><br>
                <label><b>Description:</b></label>
                <textarea class="form-control" cols="61" rows="4" name="description" id="description" type="text" placeholder="Desciption of the event." onfocus="this.placeholder = 'Desciption of the event.'">
                </textarea><br>
                <label><b>Location</b></label>
                <input name="location" type="text" class="inputvalues" placeholder="Type event location" required/><br>
                <input name="submit_btn" type="submit" id="signup_btn" value="Upload"/><br>
                <a href="adminpanel.php"><input type="button" id="back_btn" value="Back"/></a><br>
                <?php
            if(isset($_POST['submit_btn']))
            {
                //echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
                $date =$_POST['date'];
                $title=$_POST['title'];
                $description = $_POST['description'];
                $location=$_POST['location'];
                $filename=$_FILES["uploadfile"]["name"];
                $tempname=$_FILES["uploadfile"]["tmp_name"];
                $folder="uploads/".$filename;
                move_uploaded_file($tempname,$folder);
                
                    $query="INSERT INTO postupdate VALUES ('$date','$title','$folder','$description','$location')";
                    $query_run= mysqli_query($con,$query);
                    if($query_run)
                    {
                        echo"Data inserted into database";
                    }
                    else
                    {
                        echo"All fields are required";
                    }
            }
?>
            </form>
        
    </div>
</body>
</html>

