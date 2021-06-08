<?php
$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'project');
session_start();
if(!isset($_SESSION["mid"]))
{
    header('location:memberlogin.php');
}
?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Singarimelam</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style type="text/css">
        .error {color: #FF0000;
        }
        td{
            padding:10px;
        }
        #leftbar{
            width: 300px;
            height: 450px;
            background:#ecf0f1;
            float:left;

        }
    </style>

</head>

<body>
    <style>
        body{
            margin: 0px;
            border: 0px;
        }
    #leftbar{
            width: 200px;
            background:#f5f6fa;
            float:left;
        }
         #data{
            
            background: #f5f6fa;
            color:black;
            font-family: Arial Narrow;
            font-size: 15px;
            align-items: center;
        }
         #rightbar{
            width: 200px;         
            background:#f5f6fa;;
            float:right;
        }
    </style>
    

    
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="indexmember.php">home</a></li>
                                            <li><a href="aboutmember.php">About</a></li>
                                            <li><a href="">Login <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="adminlogin.php">Admin</a></li>
                                                        <li><a href="memberlogin.php">Member</a></li>
                                                        <li><a href="login.php">User</a></li>
                                                </ul>
                                            <li><a href="join.php">Join</a></li>
                                            <li><a href="list.php">List</a></li>
                                            <li><a href="postmember.php">Stories</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                             <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p> <i class="fa fa-phone"></i> +91 8660719454</p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li><a href="https://www.instagram.com/shri_umamaheshwari_chende/?hl=en"> <i class="fa fa-instagram"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                           <li><a href="logout.php" type="button"> Log out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <center>
            <h2>Event Updates</h2><br>
        </center>
    <!-- header-end -->
    <!-- Postarea-start -->
    <div id="leftbar">
    </div>
    
    <div id="data">
        
        <?php
        error_reporting(0);
        $query="SELECT * FROM postupdate";
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
        if($total!=0)
        {
            ?>
            <table>
            <?php
            while($result=mysqli_fetch_assoc($data))
            {
                    echo"<tr>
                        <td>".$result['title']."</td>
                    </tr>
                    <tr>
                        <td>Date:".$result['date']."</td>
                    </tr>
                    <tr>
                        <td><img src='".$result['folder']."'height='599' width='900'/> </td>
                    </tr>
                    <tr>
                        <td>".$result['description']."</td>
                    </tr>
                    <tr>
                        <td>Location:".$result['location']."</td>
                    </tr>
                    <tr>
                    <td></td>
                    </tr>
                    <tr>
                    <td></td>
                    </tr>";
            }
             }
            else
       
            {
                echo"No Record found";
            }
            ?>
        </table>
            
    </div>
<div id="rightbar">
    </div>

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="index.html">
                                    <img src="img\logo.png" alt="">
                                </a>
                            </div>
                            <p>umapuri road, kapikad <br> ullal, mangalore-575022 <br>
                                <p>+91 8660719454</p> 
                                <p>sk6518191@gmail.com</p>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/SHRI-Umamaheshwari-CheNde-Set-960679650615524/?epa=SEARCH_BOX">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/shri_umamaheshwari_chende/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/watch?v=LAVqPdLImNc">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul class="links">
                                <li><a href="#">Book now</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href=""> Gallery</a></li>
                                <li><a href="contact.html"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Popular videos
                            </h3>
                            <ul class="links double_links">
                                <li><a href="https://youtu.be/zLCGE2bKdPs">Dodballapur</a></li>
                                <li><a href="https://youtu.be/9auPnS0TpOE">Chikmagluru</a></li>
                                <li><a href="https://youtu.be/TIibHWUNNFE">Andhra Pradesh</a></li>
                                <li><a href="https://youtu.be/WoexEYiyddQ">Mangalore</a></li>
                                <li><a href="https://youtu.be/JnssLKmwsiA">Gokarna</a></li>
                                <li><a href="https://youtu.be/LAVqPdLImNc">Ulal</a></li>
                                <li><a href="https://youtu.be/3dpKCQjc4-0">Bangalore</a></li>
                                <li><a href="https://youtu.be/NFUwBxeAeXg">Belur</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="https://www.instagram.com/p/B5SVrHmnB-0/?utm_source=ig_web_copy_link">
                                        <img src="img/Project/insta1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="https://www.instagram.com/p/B2N7RoNnwUF/?utm_source=ig_web_copy_link">
                                        <img src="img/Project/insta2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="https://www.instagram.com/p/B7fYm8SH0df/?utm_source=ig_web_copy_link">
                                        <img src="img/Project/insta3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="https://www.instagram.com/p/Bq15ZANAY8tiUVsGYgQW_h2ggufc3oOsYMseVw0/">
                                        <img src="img/Project/insta6.jpg" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="https://www.instagram.com/p/BjAHSPMl8Ut5D9RmK9LDBVoH19dMFKaFKjJNLk0/">
                                        <img src="img/Project/insta4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="https://www.instagram.com/p/BgxSNbtl4JjWqs8yy2gmeLimuDRLRU_LE27hGo0/">
                                        <img src="img/Project/insta5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>
    <!-- link that opens popup -->
    

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-ui.min.js"> </script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/range.js"></script>
        <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
    </script>
</body>
</html>