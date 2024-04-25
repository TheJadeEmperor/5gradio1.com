

  <div class="content">

     <?php 
     if(true) {
     ?>

    <div id="podcast">
      <a href="https://streamer.radio.co/sc3a7cc4c5/listen" target="_BLANK"><img src="images/podcast.jpg" alt="Listen Live 24/7" /></a>
    </div>
  
    
    <div id="livestream">
      <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
      
      <script type="text/javascript">
      MRP.insert({
      'url':'https://streamer.radio.co/sc3a7cc4c5/listen',
      'codec':'mp3',
      'volume':100,
      'autoplay':true,
      'jsevents':true,
      'buffering':0,
      'title':'5gradio1.com',
      'wmode':'transparent',
      'skin':'listen-live',
      'width':250,
      'height':100
      });
      </script>
     
      </div>

    <?php
    }
    ?>
 
  
    <p>&nbsp;</p>
  
    <button class="scrollButton darken" onclick="scrollDown()"><img src="images/arrow.png"></button>
  
    <?php
    if(true) {
    ?>
    <div class="headline darken" id="events"> 
      <img  class="desktop" src="images/events_d.png" />
      <img  class="mobile" src="images/events_m.png" />
	  </div>

    <div id="q96fm">
      <img id="q96fm1" class="darken" class="darken" src="images/event_m.jpg" alt="5gradio1" />
      <img id="q96fm2" class="darken" src="images/q96fm_m.jpg" alt="5gradio1" />
    </div>
    <?php
    } 

    if(true) {
    ?>

      <video controls="" id="embedVideo">
        <source src="assets/1.mp4" type="video/mp4">
      </video>
    <?php
    } 
    ?>
     
     <button class="scrollButton darken" onclick="scrollDown()"><img src="images/arrow.png"></button>

    <div class="headline darken" id="videos">
      <img class="desktop" src="images/videos_d.png" />
      <img class="mobile" src="images/videos_m.png" />
    </div>

    <div class="videoContainer">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/DLr3nECDqJ0?si=s7c3DtBSyH3BZwjH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
<!--
    <div class="videoContainer">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Y2BV1zJjmtA" title="MUSIC BUFF RADIO LIVE ON Q96TV" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
      -->
     
    <div class="videoContainer">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/tPtpHZZHmr4" title="Trevor Forde LIVE on Q96TV with  Renaizancerz" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <button class="scrollButton darken" onclick="scrollDown()"><img src="images/arrow.png"></button>

    <!-- gallery pages -->
    <div class="headline darken" id="gallery">
      <img class="desktop" src="images/gallery_d.png" />
      <img class="mobile" src="images/gallery_m.png" />
    </div>
   
    <!-- carousel --> 
    <div class="container">
    <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
          <li data-target="#myCarousel" data-slide-to="6"></li>
          <li data-target="#myCarousel" data-slide-to="7"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php
            $carousel = array(
              'gallery_miami' => 'Miami',
              'gallery_zulu' => 'Zulu',
              'gallery_nyc' => 'NYC',
              'gallery_eastcoastfam' => 'East Coast Fam',
              'gallery_atlanta' => 'Atlanta',
              'gallery_blm' => 'BLM',
              'gallery_health' => 'Health & Beauty',
              'gallery_global' => 'Global',
            );

            foreach ($carousel as $slide => $caption) {
              //exceptions
              if($slide == 'gallery_miami') $active = 'active'; else $active = '';

              if($slide == 'gallery_global') $ext = 'gif'; else $ext = 'jpg';

              echo '<div class="item '.$active.'">
              <a href="./?page='.$slide.'"><img src="images/gallery/'.$slide.'.'.$ext.'" alt="'.$caption.'" width="460" height="345">
              </a>
              <div class="carousel-caption">
                <h3>'.$caption.'</h3>
              </div>
            </div>';
            }
          ?>
      
        </div> <!-- Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
 <!-- carousel --> 

</div><!-- content -->

<?php
if(true) {
?>

<footer>

  <p>
      <a href="#"> <i class="fa-solid fa-map-marker"></i> 232-9 Merrick Blvd Laurelton, NY 11413 </a> &nbsp; 
      <a href="tel:#8883725636"> <i class="fa-solid fa-phone"></i> (888) 372-5636 </a>
  </p>

  <p>5GRadio1 Copyright &copy; <a href="https://benjaminlouie.com" target="_BLANK">BL Web Solutions</a></p>
  <div class="socialMedia">
    <a class="spin darken" href="https://www.facebook.com/eastcoastgroupny/" target="_BLANK"><i class="fab fa-facebook"></i></a>
    <a class="spin darken" href="https://twitter.com/q96fm?lang=en" target="_BLANK"><i class="fab fa-twitter"></i></a>
    <a class="spin darken" href="https://www.youtube.com/channel/UCBiX00Ti_pfZl8ivRnPA-Rg" target="_BLANK"><i class="fab fa-youtube"></i></a>
    <a class="spin darken" href="https://www.instagram.com/trevor.forde/" target="_BLANK"><i class="fab fa-instagram"></i></a>
  </div>
 
 

</footer>
<?php
    }
?>

</body>
</html>