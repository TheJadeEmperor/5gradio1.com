<?php

echo $_GET['page'];

switch ($page) {
    case 'gallery_global': 
      
        break;
    case 'gallery_zulu': 
    case 'gallery_health': 

        break;
    case 'gallery_nyc': 
    case 'gallery_eastcoastfam': 
    case 'gallery_atlanta':
    case 'gallery_blm': 
    case 'gallery_miami': 
    default: 

        break; 
}  


?>
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






<?php
//include hoverbox css
//hoverbox 

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
</body>