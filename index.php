<?php 
include 'serv/cmd.php';

?>
<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>PENSA - UCC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="" type="image/x-icon">
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
    <link rel="stylesheet" href="fonts/fontawesome/css/all.css">
  
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/YouTubePopUp.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
    <div class="bgAnn">
      <i class="fa fa-times fa-2x cls"></i>
      <div class="news_row">

        <div class="news">
          <div class="headImg">
            <div>
              <img src="images/event.jpg">
            </div>
            <div class="date">
              Written By : Josh Pong | <i class="fa fa-calendar"></i> <span>2019-06-12</span>
            </div>
          </div>
          <div class="passage">
            <h4>Hello World and Planet</h4>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae repudiandae voluptatum dicta neque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae repudiandae voluptatum dicta neque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae repudiandae voluptatum dicta neque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae repudiandae voluptatum dicta neque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae repudiandae voluptatum dicta neque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae repudiandae voluptatum dicta neque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae repudiandae voluptatum dicta neque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae repudiandae voluptatum dicta neque.
            </p>

          </div>
        </div>

      </div>
    </div>

  
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
      <!--Slider Division-->

      <div class="site-blocks-cover" style="background-image: url(images/executives.jpg);background-size: 100%;background-repeat: no-repeat" data-aos="fade" data-stellar-background-ratio="1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <!--<h1>The <strong>Truth</strong> Will Set You Free</h1>-->
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--Slider Division-->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Latest Sermon</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus molestiae repudiandae voluptatum dicta neque.</p>
          </div>
        </div>

        <!--Quote and Audio Sermons-->
        <div class="row">

          <?php rec_sermons();?>

        </div>
        <!--Quote and Audio Sermons-->

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

          <?php upcomingEvents(3)?>

        </div>

        <div class="row">
          
        </div>
      </div>
    </div>

    <!--About with video-->

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                <a href="assets/video/test3.mp4" class="popup-vimeo image-play">
                  <span class="icon-wrap">
                    <span class="icon icon-play"></span>
                  </span>
                  <img src="images/about_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
            
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="h2 mb-3">About Our Church</h2>
            <p class="h5 mb-3">We are helping people with the Cretor!</p>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis magni eaque velit eum, id rem eveniet dolor possimus voluptas..</p>
            <p><a href="assets/video/test3.mp4" class="popup-vimeo text-uppercase">Watch Video <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    <!--About with video-->


    <div class="site-section block-15">
      <div class="container">

        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>News and Announcements</h2>
          </div>
        </div>

        <div class="row griduni">
          <!-- <div style="background: blue;padding: 10px;" class=""> -->
            <div>
              <img style="width: 100%; height: 100%" src="images/img_2.jpg">
              <div>
                <h5>Hello World</h5>
                <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil suscipit iure quae aspernatur nam nobis ipsa voluptates vitae tenetur assumenda facilis ullam voluptas molestiae porro animi temporibus sunt, inventore reiciendis?
                </p>
                <div class="ann_b">Read More</div>
              </div>
            </div>
            <div>
              <img style="width: 100%; height: 100%" src="images/img_2.jpg">
              <div>
                <h5>Hello World</h5>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil suscipit iure quae aspernatur nam nobis ipsa voluptates vitae tenetur assumenda facilis ullam voluptas molestiae porro animi temporibus sunt, inventore reiciendis?
                </p>
                <div class="new_b">Read More</div>
              </div>
            </div>
            <div>
              <img style="width: 100%; height: 100%" src="images/img_2.jpg">
              <div>
                <h5>Hello World</h5>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil suscipit iure quae aspernatur nam nobis ipsa voluptates vitae tenetur assumenda facilis ullam voluptas molestiae porro animi temporibus sunt, inventore reiciendis?
                </p>
                <div class="new_b">Read More</div>
              </div>
            </div>
          
          <!-- </div> -->

        </div>

      </div>
    </div>

    <!--Containers for the service of the church-->
    <div class="site-section site-block-feature bg-light">
      <div class="container">
        <div class="d-block d-md-flex">
          <div class="text-center p-4 item border-right">
            <span class="flaticon-paper-plane display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">We Care</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="beliefs.php">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>

          <div class="text-center p-4 item">
            <span class="flaticon-chat-1 display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Testimonies</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="beliefs.php">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>

        </div>
      </div>
    </div>
    <!--Containers for the service of the church-->

    <div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Recent Events</h2>
          </div>
        </div>


        <div class="nonloop-block-15 owl-carousel">

          <?php events(5, "")?>
          <!-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="" style="width: 300px; heigth: 300px;margin-bottom: 30px;">
                  <a href="https://youtu.be/Zbow21FKJS4" class="popup-vimeo image-play">
                    <iframe style="width: 100%; height: 100%"
                    src="https://www.youtube.com/embed/Zbow21FKJS4" frameborder="0" allowfullscreen>
                    </iframe> 
                  </a>
            
              </div>
              <h2 class="heading mb-0"><a href="#"></a></h2>
              <span class="mb-3 d-block post-date"> &bullet; At <a href="#"></a></span>
              <p></p>
            </div> 
          </div> -->

        </div>

        <div class="row">
          
        </div>
      </div>
    </div>
    
    
    <?php include "serv/footer.php";?>

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
  <script src="jquery.js"></script>
  <script src="js/datatables.js"></script>
  <script src="js/YouTubePopUp.jquery.js"></script>

  <script src="custom.js"></script>
    

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