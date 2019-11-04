<?php

include "serv/cmd.php";

?>

<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Events - PENSA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/mediaelement%404.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <?php include "serv/header.php"?>
  
    <div style="height: 113px;"></div>
    <div class="slide-one-item home-slider owl-carousel">
      
      

      <div class="site-blocks-cover inner-page" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Our Activites</h1>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>UpComing Events</h2>
          </div>
        </div>
    
        <div class="row">
          <?php upcomingEvents(0)?>

          
        </div>
      </div>
    </div>

    
    
    <div class="site-section bg-light">
      <div class="container">
      <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Recent Events</h2>
          </div>
        </div>
        <div class="row mb-5">

        <?php events("","events")?>
          
          <!-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/img_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Learn How To Pray</a></h2>
              <span class="mb-3 d-block post-date">January 20, 2018 &bullet; By <a href="#">Josh Holmes</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          </div> -->
        </div>

        <!-- <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
        
      </div>
    </div>

    

    <div class="site-section block-14">

      <div class="container">
        
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Testimonies</h2>
          </div>
        </div>

        <div class="nonloop-block-14 owl-carousel">


          <?php testimonies()?>
          
          <!-- <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
              </div>
              <div>
                <h2 class="h5">Katie Johnson</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div>
            </div>
          </div>-->

        </div>
      </div>
    </div>
    
    <?php include "serv/footer.php"?>
  </div>

  <script src="js/jquery-3.3.1.min.js" type="bb251de13db979cd3ae520fb-text/javascript"></script>
  <script src="js/jquery-migrate-3.0.1.min.js" type="bb251de13db979cd3ae520fb-text/javascript"></script>
  <script src="js/jquery-ui.js" type="bb251de13db979cd3ae520fb-text/javascript"></script>
  <script src="js/popper.min.js" type="bb251de13db979cd3ae520fb-text/javascript"></script>
  <script src="js/bootstrap.min.js" type="bb251de13db979cd3ae520fb-text/javascript"></script>
  <script src="js/owl.carousel.min.js" type="bb251de13db979cd3ae520fb-text/javascript"></script>
  <script src="js/jquery.stellar.min.js" type="bb251de13db979cd3ae520fb-text/javascript"></script>
  <script src="js/jquery.countdown.min.js" type="bb251de13db979cd3ae520fb-text/javascript"></script>
  <script src="js/jquery.magnific-popup.min.js" type="bb251de13db979cd3ae520fb-text/javascript"></script>
  <script src="js/bootstrap-datepicker.min.js" type="bb251de13db979cd3ae520fb-text/javascript"></script>
  <script src="js/aos.js" type="bb251de13db979cd3ae520fb-text/javascript"></script>

  
  <script src="js/mediaelement-and-player.min.js" type="bb251de13db979cd3ae520fb-text/javascript"></script>

  <script src="js/main.js" type="bb251de13db979cd3ae520fb-text/javascript"></script>
    

  <script type="bb251de13db979cd3ae520fb-text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="bb251de13db979cd3ae520fb-text/javascript"></script>
<script type="bb251de13db979cd3ae520fb-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


  <script src="js/rocket-loader.min.js" data-cf-settings="bb251de13db979cd3ae520fb-|49" defer=""></script></body>


</html>