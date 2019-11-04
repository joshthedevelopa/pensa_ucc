<?php 

include "serv/cmd.php";

?>


<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Sermons - PENSA</title>
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
    <link rel="stylesheet" href="css/YouTubePopUp.css">
    <link rel="stylesheet" href="css/datatables.css">

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
    
    
    <?php include "serv/header.php";?>
  
    <div style="height: 113px;"></div>
    <div class="slide-one-item home-slider owl-carousel">
      
      

      <div class="site-blocks" style="margin-top: 40px;height: 100px;background-image: url(images/sermon.jpg);background-size: 100%;background-repeat: no-repeat">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">

            </div>
          </div>
        </div>
      </div> 
    </div>

    <!--Audio of sermons_begin-->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <?php sermons("audio");?>
        </div>
      </div>
    </div>   
    <!--Audio of sermons_end-->

    
    <!--Video of sermons_end-->
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>More Sermons</h2>
          </div>
        </div>
        <div class="row">
          <?php sermons("video") ?>

        </div>
      </div>
    </div>
    <!--Video of sermons_end-->

    <?php include "serv/footer.php";?> 
   
  </div>

  <script src="js/jquery-3.3.1.min.js" type="9fd0443effb5d05668a36948-text/javascript"></script>
  <script src="js/jquery-migrate-3.0.1.min.js" type="9fd0443effb5d05668a36948-text/javascript"></script>
  <script src="js/jquery-ui.js" type="9fd0443effb5d05668a36948-text/javascript"></script>
  <script src="js/popper.min.js" type="9fd0443effb5d05668a36948-text/javascript"></script>
  <script src="js/bootstrap.min.js" type="9fd0443effb5d05668a36948-text/javascript"></script>
  <script src="js/owl.carousel.min.js" type="9fd0443effb5d05668a36948-text/javascript"></script>
  <script src="js/jquery.stellar.min.js" type="9fd0443effb5d05668a36948-text/javascript"></script>
  <script src="js/jquery.countdown.min.js" type="9fd0443effb5d05668a36948-text/javascript"></script>
  <script src="js/jquery.magnific-popup.min.js" type="9fd0443effb5d05668a36948-text/javascript"></script>
  <script src="js/bootstrap-datepicker.min.js" type="9fd0443effb5d05668a36948-text/javascript"></script>
  <script src="js/aos.js" type="9fd0443effb5d05668a36948-text/javascript"></script>

  
  <script src="js/mediaelement-and-player.min.js" type="9fd0443effb5d05668a36948-text/javascript"></script>

  <script src="js/main.js" type="9fd0443effb5d05668a36948-text/javascript"></script>
  <script src="jquery.js"></script>
  <script src="js/datatables.js"></script>
  <script src="js/YouTubePopUp.jquery.js"></script>
  <script src="custom.js"></script>
    
  
  <script type="9fd0443effb5d05668a36948-text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'js/mediaelement-4.2.10/build/',
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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="9fd0443effb5d05668a36948-text/javascript"></script>
<script type="9fd0443effb5d05668a36948-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

  <script src="js/rocket-loader.min.js" data-cf-settings="9fd0443effb5d05668a36948-|49" defer=""></script></body>

</html>