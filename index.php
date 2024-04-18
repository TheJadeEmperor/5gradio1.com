<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Background Image Slider</title>
  
  <link rel="stylesheet" href="assets/radio.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script>

    function scrollDown() {
      window.scrollBy(0, 400); // Scroll down by 200 pixels
    }
 
  // Array of image URLs
  const images = [
    'images/slider_1.jpg',
    'images/slider_2.jpg',
    'images/slider_3.jpg',
    'images/slider_4.jpg',
    'images/slider_5.jpg',
    'images/slider_6.jpg',
    'images/office_d.jpg',
    'images/postcard_d.jpg',
  ];

  // Function to change the background image
  function changeBackgroundImage() {
    const slider = document.getElementById('slider');
    const randomIndex = Math.floor(Math.random() * images.length); // Get a random index from the images array
    const imageUrl = images[randomIndex]; // Get the random image URL
    slider.style.backgroundImage = `url(${imageUrl})`; // Set the background image
  }

  // Change background image every 5 seconds (5000 milliseconds)
  setInterval(changeBackgroundImage, 5000);

</script>
  
</head>
<body id="slider">

 
  <div id="menuContainer">
    <div class="menu blinking">
      <a href="#home">Home</a>
      <a href="#events">Events</a>
      <a href="#videos">Videos</a>
      <a href="#gallery">Gallery</a>

    </div>
    <div class="logo" id="home">
      <img id="logo" class="darken" src="images/logo.png" alt="5gradio1"></div>
    <div class="menu">
      
      <div class="socialMedia" >
        <a class="spin darken" href="https://www.facebook.com/eastcoastgroupny/" target="_BLANK"><i class="fab fa-facebook"></i></a>
        <a class="spin darken" href="https://twitter.com/q96fm?lang=en" target="_BLANK"><i class="fab fa-twitter"></i></a>
        <a class="spin darken" href="https://www.youtube.com/channel/UCBiX00Ti_pfZl8ivRnPA-Rg" target="_BLANK"><i class="fab fa-youtube"></i></a>
        <a class="spin darken" href="https://www.instagram.com/trevor.forde/" target="_BLANK"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>


  <div class="content">

     <?php 
     if(true) {
     ?>
    
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
 
 
  
    <div id="podcast">
      <img src="images/podcast.jpg" />
    </div>
  
  
    <p>&nbsp;</p>
  
    <button class="scrollButton" onclick="scrollDown()"><img src="images/arrow.png"></button>
  
    <?php
    if(true) {
    ?>
    <div class="headline" id="events"> 
      <img  class="desktop" src="images/events_d.png" />
      <img  class="mobile" src="images/events_m.png" />
	  </div>

    <img id="q96fm1" class="darken desktop" class="darken" src="images/event_d.jpg" alt="5gradio1" />
    <img id="q96fm1" class="darken mobile" class="darken" src="images/event_m.jpg" alt="5gradio1" />

    <img id="q96fm2" class="darken desktop" src="images/q96fm_d.jpg" alt="5gradio1" />
    <img id="q96fm2" class="darken mobile" src="images/q96fm_m.jpg" alt="5gradio1" />
    <?php
    } 
    ?>

    <?php
      if(true) {
    ?>

      <video controls="" id="embedVideo">
        <source src="assets/1.mp4" type="video/mp4">
      </video>
    <?php
    } 
    ?>
     
     <button class="scrollButton" onclick="scrollDown()"><img src="images/arrow.png"></button>

    <div class="headline" id="videos">
      <img class="desktop" src="images/videos_d.png" />
      <img class="mobile" src="images/videos_m.png" />
 
    </div>

    <div class="videoContainer">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/DLr3nECDqJ0?si=s7c3DtBSyH3BZwjH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div class="videoContainer">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Y2BV1zJjmtA?si=Rlz9L1SgpnRZnUAJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
  
    <div class="videoContainer">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/DLr3nECDqJ0?si=r_hvJF5PSGeiwJ15" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <button class="scrollButton" onclick="scrollDown()"><img src="images/arrow.png"></button>

    <!-- gallery pages -->
    <div class="headline" id="gallery">
      <img class="desktop" src="images/gallery_d.png" />
      <img class="mobile" src="images/gallery_m.png" />
    </div>
   

  </div>

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
 
  <div class="donate">
    <a href="https://www.paypal.com/webapps/shoppingcart?flowlogging_id=f4332416c39a6&mfid=1713469501036_f4332416c39a6#/checkout/openButton"><button class="blinking" >Donate</button></a>
  </div>

</footer>
<?php
    }
?>

</body>
</html>
