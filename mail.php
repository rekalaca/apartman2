<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "rekalaca@rekalaca-webdesign.hu";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="hu">

<head>

     <title>White Apartman Resort & Spa</title>
     <!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>

<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><img src="images/logo.png" class="img-responsive"
                              alt="logo" style="max-width: 70px; margin-left: 10px;"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Főlap</a></li>
                         <li><a href="#about" class="smoothScroll">Rólunk</a></li>
                         <li><a href="#team" class="smoothScroll">Szolgáltatások</a></li>
                         <li><a href="#menu" class="smoothScroll">Képek</a></li>
                         <li><a href="#arak" class="smoothScroll">Árak</a></li>
                         <li><a href="#contact" class="smoothScroll">Kapcsolat</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#">Hívjon most! <i class="fa fa-phone"></i> 010 020 0340</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-12 align-self-end">
                    <h1 class="text-white font-weight-bold">Köszönjük megkeresését!</h1>
                </div>
                <div class="col-lg-12 align-self-baseline">
                    <h5 class="magyaraz">Hamarosan felvesszük Önnel a kapcsolatot!</h5>
                    <br>
                    
                    <br>
                    <a class="btn btn-primary btn-xl" href="index.html">Vissza a főoldalra!</a>
                </div>
            </div>
        </div>
    </header>
     

     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Elérhetőségeink</h2>
                              </div>
                              <div class="text pl-3">
                                   <span class="fa fa-map-marker fa-2x"
                                        style="color: #e6c068; margin-right: 10px;"></span>
                                   <p><span>Cím:</span><br><a href="https://goo.gl/maps/LG7imJU4G1mm4wrY6"
                                             target="_blank">Balatoncsodaszép, Parti
                                             sétány 1.</a></p>
                              </div>
                              <div class="text pl-3">
                                   <span class="fa fa-phone fa-2x" style="color: #e6c068; margin-right: 10px;"></span>
                                   <p><span>Telefon:</span><br><a href="tel:+363012345670">+ 36 30
                                             123-45-67</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Web</h2>
                              </div>
                              <div class="text pl-3">
                                   <span class="fa fa-paper-plane fa-2x"
                                        style="color: #e6c068; margin-right: 10px;"></span>
                                   <p><span>Email:</span><br><a
                                             href="mailto:rekalaca@gmail.com">info@rekalacaresort.com</a>
                                   </p>
                              </div>
                              <div class="text pl-3">
                                   <span class="fa fa-globe fa-2x" style="color: #e6c068; margin-right: 10px;"></span>
                                   <p><span>Web:</span><br><a href="https://www.white-apartman.hu/"
                                             target="_blank">www.white-apartman.hu</a>
                                   </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info footer-open-hour">
                              <img class="img-fluid logom" src="images/webdesign500.png" alt="logo"
                                   style="max-width: 200px;">
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                              <li><a href="#" class="fa fa-google"></a></li>
                         </ul>

                         <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
                              <p><br>Copyright &copy; 2023 <br>rekalaca-webdesign

                                   <br><br>Design: <a rel="nofollow" href="https://rekalaca-webdesign.hu"
                                        target="_parent">rekalaca</a> &
                                   <a rel="nofollow" href="http://templatemo.com" target="_parent">TemplateMo</a>
                              </p>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>

</html>

';


?>