
<?php
$con=mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'project');
session_start();
if(!isset($_SESSION["id"]))
{
    header('location:login.php');
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
        .error {color: #FF0000;}
    </style>
<script type="text/javascript">
                                function calculate()
                                {
                                    //For event type
                                    var a=document.getElementById("type");
                                    var pay=a.options[a.selectedIndex].value;
                                    document.getElementById("txtvalue").value=pay;
                                    var m=a.options[a.selectedIndex].text;
                                    document.getElementById("eventtype").value=m;
                                }

                                function calculate2()
                                {
                                    //For number of people
                                    var b=document.getElementById("number");
                                    var num=b.options[b.selectedIndex].value;
                                    document.getElementById("txtvalue2").value=num;
                                }
                                function calculate3()
                                {
                                    //calculating total persons pay
                                    num1 = document.getElementById("txtvalue").value;
                                    num2 = document.getElementById("txtvalue2").value;
                                    document.getElementById("result").innerHTML = num1 * num2;
                                    document.getElementById("txtvalue3").value= num1 * num2;
                                    //calculating travel pay
                                    var dist = document.getElementById("distance").value;
                                    var totdist=parseInt(dist)*2;
                                    if(num2<=15)
                                    {
                                        var km=16;
                                    }
                                    else if(num2<=21)
                                    {
                                        var km=24;
                                    }
                                    else
                                    {
                                        var km=30;
                                    }
                                    document.getElementById("result2").innerHTML = km * totdist;
                                    document.getElementById("txtvalue4").value= km * totdist;
                                    //Total expense
                                    var ppl = document.getElementById("txtvalue3").value;
                                    var trvl = document.getElementById("txtvalue4").value;
                                    var tot= parseInt(ppl)+parseInt(trvl);
                                    document.getElementById("result3").innerHTML = tot;
                                    document.getElementById("txtvalue5").value= tot;
                                    //Team profit
                                    var profit;
                                    if(dist<=50)
                                    {
                                        profit=3000;
                                    }
                                    else if(dist<=100)
                                    {
                                        profit=5000;
                                    }
                                    else if(dist<=200)
                                    {
                                        profit=7500;
                                    }
                                    else if(dist<=500)
                                    {
                                        profit=10000;
                                    }
                                    document.getElementById("result4").innerHTML = profit;
                                    document.getElementById("txtvalue6").value= profit;
                                   //Total payment after team profit
                                    var total;
                                    total=parseInt(tot)+parseInt(profit);
                                    document.getElementById("result5").innerHTML = total;
                                    document.getElementById("txtvalue7").value= total;
                                }

                                function reset()
                                { 
                                    document.getElementById('txtvalue').value = "";
                                    document.getElementById('txtvalue2').value = "";
                                    document.getElementById('txtvalue3').value = "";
                                    document.getElementById('txtvalue4').value = "";
                                    document.getElementById('txtvalue5').value = "";
                                    document.getElementById('txtvalue6').value = "";
                                    document.getElementById('txtvalue7').value = "";
                                    document.getElementById("distance").value="";
                                    document.getElementById("result").innerHTML = "";
                                    document.getElementById("result2").innerHTML = "";
                                    document.getElementById("result3").innerHTML = "";
                                    document.getElementById("result4").innerHTML = "";
                                    document.getElementById("result5").innerHTML = "";
                                    
                                }       
                            </script>

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
                                            <li><a class="" href="book_now.html">Book now</a></li>
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

   
    <form method="post" action="auth_book_now.php" id="bookform">
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="filter_result_wrap">
                        <center>
                        <h2>Booking Form</h2>
                        </center>
                        <div class="filter_bordered">
                            <div class="filter_inner">
                                <div class="row">
                                    

                                    <div class="col-lg-12">
                                      <div class="form-group">
                                        <p>Your Name:</p>
                                        <input class="form-control" name="input1" required id="input1" pattern="[a-zA-Z]+"  title="Enter only alphabets" required type="name">
                                        <span class="error">* Only letters and white space allowed</span>
                                      </div>
                                    </div>
                                    <div class="col-lg-12">
                                      <div class="form-group">
                                        <p>Your Email:</p>
                                        <input class="form-control" name="input2" required id="input2" type="email">
                                        <span class="error">* </span>
                                      </div>
                                    </div>
                                    <div class="col-lg-12">
                                      <div class="form-group">
                                        <p>Your Mobile Number:</p>
                                        <input class="form-control" name="input3" maxlength="10" pattern="[0-9]{10}" title="Enter only 10 digits" required id="input3" type="text">
                                        <span class="error">*Only number are allowed </span>
                                      </div>
                                    </div>
                                    <div class="col-lg-12">
                                      <div class="form-group">
                                        <p>Alternate Mobile Number:</p>
                                        <input class="form-control" maxlength="10" pattern="[0-9]{10}" title="Enter only 10 digits" name="input4" id="input4" type="text">
                                        <span class="error">*Only number are allowed </span>
                                      </div>
                                    </div>
                                    <div class="col-lg-12">
                                      <div class="form-group">
                                        <p>Event Start time:</p>
                                        <input class="form-control" name="input5" id="input5" type="time" required>
                                      </div>
                                    </div>
                                    <div class="col-lg-12">
                                      <div class="form-group">
                                        <p>Event End time:</p>
                                        <input class="form-control" name="input6" id="input6" type="time" required>
                                      </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                        <p>Select Event Date:</p>
                                    <input class="form_control" id="datepicker" name="datepicker"  placeholder="Date" required>
                                       </div>
                                    </div> 


                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <p>Even Type:</p>
                                            <select id="type" name="type" required onchange="calculate();">
                                                <option data-display="Choose an event type">Choose an event type</option>
                                                <option value="600">Marriage, Wedding, Engagement, Reception</option>
                                                <option value="650">Small Celebration: Birthday Party, Anniverssary, Success Party etc,.</option>
                                                <option value="700">Corporate: Inauguration, Concerts, Shows etc,.</option>
                                                <option value="750">Procession</option>
                                                <option value="550">Other: Religious Festival, Pooja, Club Celebrations etc,.</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                       <p> Pay per head(in Rs)</p>
                                        <input class="form-control" name="txtvalue" id="txtvalue" type="number" readonly required>
                                    </div>
                                </div>
                                <input type="hidden" name="eventtype" id="eventtype">
                                    <div class="col-lg-12">
                                        <div class="single_select">
                                            <p>Band Combination:</p>
                                            <select id="number" name="number" required onchange="calculate2();">
                                                <option data-display="Choose band combination">Choose band combination</option>
                                                <option value="12">4 chende - 4 thala - 4 dole</option>
                                                <option value="15">5-5-5</option>
                                                <option value="18">6-6-6</option>
                                                <option value="21">7-7-7</option>
                                                <option value="24">8-8-8</option>
                                                <option value="27">9-9-9</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <p>Total number of People</p>
                                        <input class="form-control" name="txtvalue2" id="txtvalue2" type="number" readonly required>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                      <div class="form-group">
                                        <p>Event Location:</p>
                                        <input class="form-control" name="input7" id="input7" type="text" required>
                                      </div>
                                    </div>

                                    <div class="col-lg-12">
                                      <div class="form-group">
                                        <p>Event Info:</p>
                                        <textarea class="form-control" name="input8" id="input8" type="text" placeholder="To serve you better, tell us something more about the event." onfocus="this.placeholder = 'To serve you better, tell us something more about the event.'">
                                        </textarea>
                                      </div>
                                    </div>

                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <p>One way distance from our location to event location:</p>
                                        <input class="form-control" name="distance" id="distance" type="number" required onfocus="this.placeholder = 'Distance from event location to our location(in km)'" placeholder = "Distance in km" required>
                                    </div>
                                </div>
                               Our Location:  
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.492284604281!2d74.85601391396955!3d12.811433821840911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35ddedff47b97%3A0x4613f98fc6aae38!2sKapikad%2Cthokkottu!5e0!3m2!1sen!2sin!4v1582112523178!5m2!1sen!2sin" width="450" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>       
                                </div>
                            </div>
                                <br>
                            <div class="reset_btn">
                                <button class="boxed-btn3" type="button" onclick="calculate3();">Calculate</button>
                            </div>
                            <br>
                             <div class="reset_btn">
                                <button class="boxed-btn3" type="button" onclick="reset();">Reset</button>
                            </div>
                            <br>
                            <div class="col-lg-12">
                                    <div class="form-group">
                                        <p>Total Person Pay:</p>
                                        <input class="form-control" name="txtvalue3" id="txtvalue3" type="text" readonly></input>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <p>Total Travel Expense:</p>
                                        <input class="form-control" name="txtvalue4" id="txtvalue4" type="text" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <p>Total Expense:</p>
                                        <input class="form-control" name="txtvalue5" id="txtvalue5" type="text" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <p>Team Profit:</p>
                                        <input class="form-control" name="txtvalue6" id="txtvalue6" type="text" readonly>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <p>Grand Total:</p>
                                        <input class="form-control" name="txtvalue7" id="txtvalue7" type="text" readonly>
                                         <input class="form-control" name="txtvalue8" id="txtvalue8" type="hidden" value="no" readonly>
                                    </div>
                                    <h3>Expected Bill</h3>
                                    <p>Total Personal Pay : 
                                    <span id = "result"></span>
                                    </p>
                                    <p>Total Travel Expense : 
                                    <span id = "result2"></span>
                                    </p>
                                    <p>Total Expense : 
                                    <span id = "result3"></span>
                                    </p>
                                    <p>Team Profit : 
                                    <span id = "result4"></span>
                                    </p>
                                    <p>Grand Total : 
                                    <span id = "result5"></span>
                                    </p>
                                    </div>
                                    <div class="reset_btn">
                                        <center>
                                        <button type="submit" name="submit_btn" class="button button-contactForm boxed-btn">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
        if(isset($_POST['submit_btn']))
        {
            $name=$_POST['input1'];
            $email=$_POST['input2'];
            $number=$_POST['input3'];
            $alt_number=$_POST['input4'];
            $start_time=$_POST['input5'];
            $end_time=$_POST['input6'];
            $date=$_POST['datepicker'];
            $event_type=$_POST['eventtype'];
            $pay=$_POST['txtvalue'];
            $total_people=$_POST['txtvalue2'];
            $event_loc=$_POST['input7'];
            $event_info=$_POST['input8'];
            $distance=$_POST['distance'];
            $expected_pay=$_POST['txtvalue7'];
            $accept=$_POST['txtvalue8'];
            $arranged=$_POST['txtvalue8'];
            $completed=$_POST['txtvalue8'];

            $query="insert into book_info values('','$name','$email','$number','$alt_number','$start_time','$end_time','$date','$event_type','$pay','$total_people','$event_loc','$event_info','$distance','$expected_pay','$accept','$arranged','$completed')";
            $query_run= mysqli_query($con,$query);
            echo"Booking request sent successfully";

        }

    ?>

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