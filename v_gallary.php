<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video gallery</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/v_gallary.css">

</head>
<body>

        
<header>
        <a href="index.php" class="logo"><span>Awara</span>.com</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="booking.php">Book</a>
            <a href="category.php">Packages</a>
            <a href="service.php">Servicies</a>
            <a href="gallary.php">Gallery</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
<!-- 360 deg video  rotate ----------------------------------------------------------->
    <div class="head">
        <div class="map"> 

            <div class="video-container">	
              <div class="wrap-rel">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-8">
                      <div class="video-section">
                        <figure class="vimeo"> 
                          <a href="https://player.vimeo.com/video/233536312" class="">
                            <img src="http://www.ivang-design.com/svg-load/video.jpg" alt="image"/>
                          </a>
                        </figure>
                      </div>					
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
        </div>
    </div>

<!-- side video section -------------------------------------------- -->

    <section class="side_video">
      <div class="left">
        <img src="video/v1.gif" alt="">
      </div>
      <div class="right">
      <img src="video/v2.gif" alt="">
      </div>
    </section>

<!-- title section start ------------------------------------------- -->
    <div class="title1">
      <div class="sec-title-style1 text-center max-width">
          <div class="title">Video Gallery</div>
          <div class="text"><div class="decor-left"><span></span></div><p>Amazing</p><div class="decor-right"><span></span></div></div>
          <div class="bottom-text">
              <p>Fixyman is proud to be the name that nearly 1 million homeowners have trusted since 1996 for home improvement and repair, providing virtually any home repair.</p>
          </div>
      </div>
  </div>

<!-- video section --------------------------------------------------->

        <div class="container">
          
          <div class="building">
            <div class="blocks"> <video src="video/v9.mp4" autoplay muted controls></video> </div>

            <div class="single-block"> <video src="video/v2.mp4"  muted controls></video> </div>
            <div class="single-block"> <video src="video/v3.mp4"  muted controls></video> </div>
            <div class="single-block"> <video src="video/v1.mp4"  muted controls></video> </div>

            <div class="blocks"> <video src="video/v4.mp4"  muted controls></video> </div>

            <div class="single-block"> <video src="video/v6.mp4"  muted controls></video> </div>
            <div class="single-block"> <video src="video/v7.mp4"  muted controls></video> </div>
            <div class="single-block"> <video src="video/v8.mp4"  muted controls></video> </div>

            <div class="blocks"> <video src="video/v10.mp4" autoplay muted controls></video> </div>

           
            <div class="single-block"> <video src="video/v5.mp4"  muted controls></video> </div>
            <div class="single-block"> <video src="video/v11.mp4" muted controls></video> </div>
            <div class="single-block"> <video src="video/v12.mp4" muted controls></video> </div>
            <div class="single-block"> <video src="video/v13.mp4" muted controls></video> </div>
            <div class="single-block"> <video src="video/v14.mp4" muted controls></video> </div>
            <div class="single-block"> <video src="video/v15.mp4" muted controls></video> </div>

          </div>
        </div>


<!-- text video background ------------------------- -->

      <div class="bgtext">
        <div class="banner">
            <video autoplay muted loop>
                <source src="video/v5.mp4" type="video/mp4">
            </video>
            <h2> <b>Awara.com</b> </h2>
        </div>
      </div>

<!-- footer section ------------------------------------ -->
       <footer>
          <div class="footer-container">
            <div class="left-col">
              <img src="images/logo.png" alt="" class="logo">
              <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
              <p class="rights-text">© 2022 Created By <b>Awara.com travel</b>  All Rights Reserved.</p>
            </div>
    
            <div class="right-col">
              <h1>Our Newsletter</h1>
              <div class="border"></div>
              <p>Enter Your Email to get our news and updates.</p>
              <form action="" class="newsletter-form">
                <input type="text" class="txtb" placeholder="Enter Your Email">
                <input type="submit" class="btn" value="submit">
              </form>
            </div>
          </div>
       </footer>



      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	  <!-- <script src='https://code.jquery.com/jquery-2.2.2.min.js'></script> -->
      <script src="https://kit.fontawesome.com/b0a5cfef0e.js" crossorigin="anonymous"></script>
      <script>
        /*! FitVids */
            !function(t){"use strict";t.fn.fitVids=function(e){var i={customSelector:null};if(!document.getElementById("fit-vids-style")){var r=document.createElement("div"),a=document.getElementsByTagName("base")[0]||document.getElementsByTagName("script")[0],o="&shy;<style>.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>";r.className="fit-vids-style",r.id="fit-vids-style",r.style.display="none",
                    r.innerHTML=o,a.parentNode.insertBefore(r,a)}return e&&t.extend(i,e),this.each(function(){var e=["iframe[src*='player.vimeo.com']","iframe[src*='youtube.com']","iframe[src*='youtube-nocookie.com']","iframe[src*='kickstarter.com'][src*='video.html']","object","embed"];i.customSelector&&e.push(i.customSelector);var r=t(this).find(e.join(","));r=r.not("object object"),r.each(function(){var e=t(this);if(!("embed"===this.tagName.toLowerCase()&&e.parent("object").length||e.parent(".fluid-width-video-wrapper").length))
                    {var i="object"===this.tagName.toLowerCase()||e.attr("height")&&!isNaN(parseInt(e.attr("height"),10))?parseInt(e.attr("height"),10):e.height(),r=isNaN(parseInt(e.attr("width"),10))?e.width():parseInt(e.attr("width"),10),a=i/r;if(!e.attr("id")){var o="fitvid"+Math.floor(999999*Math.random());
                    e.attr("id",o)}e.wrap('<div class="fluid-width-video-wrapper"></div>').parent(".fluid-width-video-wrapper").css("padding-top",100*a+"%"),e.removeAttr("height").removeAttr("width")}})})}}(window.jQuery||window.Zepto);

            (function($) { "use strict";	
                $(document).ready(function() {				
                    /* Video */		
                    $(".container").fitVids();						
                    $('.vimeo a,.youtube a').on('click', function (e) {
                        e.preventDefault();
                        var videoLink = $(this).attr('href');
                        var classeV = $(this).parent();
                        var PlaceV = $(this).parent();
                        if ($(this).parent().hasClass('youtube')) {
                            $(this).parent().wrapAll('<div class="video-wrapper">');
                            $(PlaceV).html('<iframe frameborder="0" height="333" src="' + videoLink + '?autoplay=1&showinfo=0" title="YouTube video player" width="547"></iframe>');
                        } else {
                            $(this).parent().wrapAll('<div class="video-wrapper">');
                            $(PlaceV).html('<iframe src="' + videoLink + '?autoplay=1&loop=1&autopause=0&muted=1&color=8c6acc" width="500" height="281" frameborder="0" allow="autoplay"></iframe>');
                        }
                    });						
                });	
            })(jQuery);


      </script>
      
</body>
</html>