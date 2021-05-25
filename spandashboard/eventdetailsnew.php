<?php 
$id = $_GET['id']; //why doesn't it work with post method


?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Hotel Span</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <style>
        *{
            margin:0;
            padding:0;
        }
        </style>
        
    </head>
    <body>
<!--================Header Area =================-->
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"><img src="image/logo_span.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>  
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li> 
                    <li class="nav-item"><a class="nav-link" href="../index.html#abt">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.html#acmdtn">Accomodation</a></li>
                    <li class="nav-item active"><a class="nav-link" href="uigallery.html">Gallery</a></li>
                    
                  <li class="nav-item"><a class="nav-link" href="../contact.html">Contact</a></li>
                  <li class="nav-item"><a class="nav-link" href="displayevent.php">Events</a></li>
                  <li class="nav-item"><a class="nav-link" href="../login/login.php">Login</a></li>
                </ul>
            </div> 
        </nav>
    </div>
</header>
<!--================Header Area =================-->
        
       
        
        <!--================Breadcrumb Area =================-->
        <section class="gallery_area section_gap">
            <div class="container">
                              
                                  <!-- ----start display events (fetching from database and displaying on page) -->
                                                                                             
             <?php 
                $conn = mysqli_connect("localhost","root","","hotelspan");
               
               $sql ="SELECT `title`,`description`,`date`,TIME_FORMAT(`time`,'%H %i %s %p') as `time`,`description`,`venue`,`id`,`image`,`organizer` FROM events where id =$id ";
                $result =mysqli_query($conn,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){

                $title=$row['title'];   
                $image=$row['image'];
                $description =$row['description'];
                $date = $row['date'];
                $time = $row['time'];
                $venue = $row['venue'];
             ?> 
                <div class=" row">
                <!-- ----fetching from database and displaying details on page -->
                     <div class="col-md-12  " >
                         <div  class="text-center">
                             <h2 class="text-dark "><?php echo $title?></h2>
                             <p class="text-primary  font-weight-bold"> <?php echo "Date: ".$date;  ?> &amp; <?php echo "Time: ".$time ?></p>
                         </div>
                         <hr>
                  
                         <div class="row">
                                <div class="col-md-12 col-sm-12 text-center" >
                                    <div class="row">
                                        <div class="col-md-8 ">
                                              <p  class=""style="text-align:justify"> <?php echo $description;  ?> </p>
                                        </div>
                                        <div class="col-md-4">
                                              <img  style="height:300px;width:100%;" src="<?php echo $image;?>" >
                                              <span class="text-primary font-weight-bold "><?php echo "Venue: ".$venue?></span>
                                        </div>
                                    </div>
                                 </div> 
                                                <?php 
                                                    }
                                                }
                                        ?>
                             <!-- --------------------------------------- -->
                        </div>
                     </div>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Hotel Span</h6>
                            <p>Hotel Span is situated in the heart of Butwal Sukkhanagar , 22 K.M north from Gautam Buddha International Airport, 27 K.M. from (Nepal -India Border) a business hub in the western Nepal. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="index.html#acmdtn">Accomodation</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    
                                </div>										
                            </div>							
                        </div>
                    </div>							
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For business professionals  </p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list_style instafeed d-flex flex-wrap">
                                <li><img src="../image/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="../image/instagram/image-02.jpg" alt=""></li>
                                <li><img src="../image/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="../image/instagram/image-04.jpg" alt=""></li>
                                <li><img src="../image/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="../image/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="../image/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="../image/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>						
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://ansunepal.com/" target="_blank">Ansu Tech</a>
</p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="https://www.facebook.com/hotelspan/"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class=""></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="../js/jquery.ajaxchimp.min.js"></script>
        <script src="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="../vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="../js/mail-script.js"></script>
        <script src="../js/stellar.js"></script>
        <script src="../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="../vendors/isotope/isotope-min.js"></script>
        <script src="../js/stellar.js"></script>
        <script src="../vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="../js/custom.js"></script>
    </body>
</html>