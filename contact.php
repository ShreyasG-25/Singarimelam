
<?php
/*For My LocalPC*/
$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'project');
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
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
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
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.html">home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="book_now.html">Book now</a></li>
                                            <li><a href="">Login <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="adminlogin.php">Admin</a></li>
                                                        <li><a href="memberlogin.php">Member</a></li>
                                                        <li><a href="login.php">User</a></li>
                                                </ul>
                                            <li><a href="post.php">Stories</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            
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

     <!-- bradcam_area  -->
     <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>contact</h3>
                        <p>Send your querries and reviews directly to us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact.php" method="post" id="contactform" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" name="submit_btn" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                        <?php                       
                            if(isset($_POST['submit_btn']))
                            {
                                $name=$_POST['name'];
                                $message=$_POST['message'];
                                $email=$_POST['email'];
                                $subject=$_POST['subject'];
                                $to= "sk6518191@gmail.com";
                                $headers='From: noreply@company.com';


                                $query="insert into contact values('','$name','$message','$email','$subject')";
                                $query_run= mysqli_query($con,$query);


                                mail($to,$subject,$message,$headers);
                                echo'<script type="text/javascript"> alert("Your message is sent to admin successfully, response will be given within 2 days") </script>';
                                echo"mail sent successfully";      
                            }                            
                        ?>

                    </div>

                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>SUC club, Kapikad.</h3>
                                <p>Thokot, Kotekar-575022</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+91 8660719454</h3>
                                <p>Sat & Sun 9am to 5pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>sk6518191@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                            <a href="#" class="prise">700 per head</a>
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
                            <a href="#" class="prise">650 per head</a>
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
                            <a href="#" class="prise">650 per head</a>
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
                            <a href="#" class="prise">600 per head</a>
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
                            <a href="#" class="prise">600 per head</a>
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
                            <a href="#" class="prise">600 per head</a>
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
                        <a class="boxed-btn4" href="#">More Teams</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================ contact section end ================= -->
    
    <!-- footer start -->
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
    <!--/ footer end  -->
    
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
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
    
            });
        </script>
    </body>
    
    </html>