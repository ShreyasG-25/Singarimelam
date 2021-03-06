
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
    <script>
    .center {
    margin:0 auto
}
    </script>
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
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

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
                                        <img src="img\logo.png" alt="">
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
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Procession</h3>
                                <p>Variety of band perfomance for all kinds of processions</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Events</h3>
                                <p>Make your events more special with us</p>
                                <!-- <a href="book_now.html" class="boxed-btn3">Book Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Pooja</h3>
                                <p>Experience the divine power of kerala pooja singarimelam</p>
                                <!-- <a href="book_now.html" class="boxed-btn3">Book Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- slider_area_end -->

    
    
    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Popular Perfomance</h3>
                        <p>Here are some of the major event perfomance done by us</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="img\Project\img4.jpg" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Mangalore dasara <a href="">  2019</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="img\Project\img2.jpg" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Kalasa <a href="">  2019</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="img\Project\img3.jpg" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Milagris <a href="">  2019</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="img\Project\img1.jpg" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Madoor <a href="">  2017</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="img\Project\img5.jpg" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Mangalore <a href="">  2018</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="img\Project\img6.jpg" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Gokarna <a href="">  2019</a> </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Other Teams </h3>
                        <p>There are more than 30 singarimelam teams in mangalore,</p>
                         <p>Here are list of few teams.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img\Teams\sri_shabari_chende2.jpg" alt="">
                            <a href="https://www.instagram.com/sri_shabari_chende/?hl=en" class="prise">700 per head</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Sri Shabari Chende</h3></a>
                            <p>Mulakad,Mangalore</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i>
                                    
                                </span>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img\Teams\sri_mookambika_chende.jpg" alt="">
                            <a href="https://www.instagram.com/sri_mookambika_chende/?hl=en" class="prise">650 per head</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Sri Mookambika Chende</h3></a>
                            <p>Konchady,Mangalore</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa-star"></i>
                                   
                                </span>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img\Teams\sri_guru_chende.jpg" alt="">
                            <a href="https://www.instagram.com/sri_guru_chende/?hl=en" class="prise">650 per head</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Sri Guru Chende</h3></a>
                            <p>Vamanjoor,Mangalore</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa-star"></i>
                                
                                </span>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img\Teams\sri_sharada_chende.jpg" alt="">
                            <a href="https://www.instagram.com/sri_sharada_chende/?hl=en" class="prise">600 per head</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Sri Sharada Chende</h3></a>
                            <p>BC Road,Bantwal</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa-star"></i> 
                                     <i class="fa-star"></i>
                                     
                                </span>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img\Teams\team_shastavas.jpg" alt="">
                            <a href="https://www.instagram.com/team_shastavas/?hl=en" class="prise">600 per head</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Sri Shastava Chende</h3></a>
                            <p>Chilimbi,Mangalore</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa-star"></i> 
                                     <i class="fa-star"></i>
                                     
                                </span>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img\Teams\shreee_bhadrakali_chende2.jpg" alt="">
                            <a href="https://www.instagram.com/_shreee_bhadrakali_chende_/?hl=en" class="prise">600 per head</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Sri Bhadrakali Chende</h3></a>
                            <p>Urwa,Mangalore</p>
                            <div class="rating_days d-flex justify-content-between">
                                <span class="d-flex justify-content-center align-items-center">
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa fa-star"></i> 
                                     <i class="fa-star"></i>
                                   
                                </span>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                        <a class="boxed-btn4" href="https://www.instagram.com/karnataka_singarimelam/?hl=en">More Teams</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="center">
        <center>
        <h2 color:black>Enjoy video</h2>
        </center>
        <video controls>
        <source src="video/thokot.mp4">
        </video>
    </div>

   

    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img\logo.png" alt="">
                                        </div>
                                        <p>"Providing the best classical music experience to enlight your events.</p>
                                        <div class="testmonial_author">
                                            <h3>- Lathish SUC</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img\logo.png" alt="">
                                        </div>
                                        <p>"We entertain you with our latest beats and combinations.</p>
                                        <div class="testmonial_author">
                                            <h3>- Manish SUC</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img\logo.png">
                                        </div>
                                        <p>"If you're intrested in joining us you contact and join our team for free.</p>
                                        <div class="testmonial_author">
                                            <h3>- Charan SUC</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->


    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Leaders</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img\Project\lathish.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <h2>Lathish Kotekar
                                <span>Founder, Leader</span>
                            </div>
                            <a href="#">
                                <h3>He is the most important person of our team. Always works hard for the improvment and prosper of our team.</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img\Project\manish3.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <h2>Manish Kinya
                                <span>Beat Master</span>
                            </div>
                            <a href="#">
                                <h3>He is the leader of the dole crew. His role is to create new innovative beats in music.</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img\Project\adish.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <h2>Adish Kapikad<h2>
                                <span>Co-Leader</span>
                            </div>
                            <a href="#">
                                <h3>He is the backbone of the chende team. Specialist in chende, hardworkin and sensible person.</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
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
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
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
</body>

</html>