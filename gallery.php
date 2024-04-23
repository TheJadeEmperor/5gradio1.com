<?php

//echo $_GET['page'];


function gallery_function($atts) {
  $anime = $atts['project_folder'];
  $postTitle = $atts['project_name'];

  $divID = str_replace('/', '_',  $anime);

  $directory = $anime;

  //valid image extensions
  $validFiles = array('jpg', 'jpeg', 'png');
  
  $counter = 1; //images counter
  if(is_dir($directory))
  if ($handle = opendir($directory)) { //read all files in directory
      //List all the files
      while (false !== ($file = readdir($handle))) {
          $ext = pathinfo($file, PATHINFO_EXTENSION);
          if(in_array($ext, $validFiles)) {   
              $small[$counter] = $file; //add image to array
              $counter++; //increase counter
          }
      }//while
      closedir($handle);
  }//if

  sort($small); //sort image names in order

  //sorting adds a 0 element and shifts all elements back 1
  //this will fix the array 
  foreach ($small as $num => $picture) {
      $small[$num+1] = $picture; 
  }
  unset($small[0]); //delete 0 element

  //    print_r($small); exit;

  //check for thumbnails
  if(is_dir($directory.'/thumbnails')) $showThumbnails = 1;

  $galleryContent .= '
<table><tr valign="top"><td>
<ul class="hoverbox">';
  
foreach($small as $num => $picture) {
  //$num = $num + 1; //offset the 0 element    
  list($name, $ext) = explode('.', $picture); 
  
          if($showThumbnails) {
              $readThisImg = $directory.'/'.$picture;
              $showThisImg = $directory.'/thumbnails/'.$picture;
          }
          else    
              $showThisImg = $readThisImg = $directory.'/'.$picture;
    //$showThisImg = $site_url.'/'.$directory.'/'.$picture;
    
    if(file_exists($readThisImg)) {
      list($width, $height, $type, $attr) = getimagesize($readThisImg);

      if($thumbnails == 1) {
        $galleryContent .= '<li title="'.$anime.'" onclick="openModal(\''.$divID.'\');currentSlide('.$num.')"><a href="#">
        <img src="'.$showThisImg.'" alt="'.$anime.'" class="episode_thumbnail" />
        <img src="'.$showThisImg.'" class="preview_large" alt="'.$anime.'" >
        </a></li>'; 
      }
      else {
                  
                  if($height > $width)
                      $class = 'preview_tall';
                  else
                      $class = 'preview_portrait';
      
        $galleryContent .= '<li title="'.$anime.'" onclick="openModal(\''.$divID.'\');currentSlide('.$num.')"><a>
        <img src="'.$showThisImg.'" alt="'.$anime.'" />
        <img src="'.$showThisImg.'" class="'.$class.'" alt="'.$anime.'" >
        </a></li>'; 
      }					
     }      
      }//foreach

  $galleryContent .= '</ul></td>
  </tr></table>';

  $counter = $counter - 1; //JS arrays start at 0

  //display the modal elements
  $galleryContent .=  '<div id="'.$divID.'" class="modal">
  <a class="close cursor" onclick="closeModal(\''.$anime.'\')">&times;</a>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  <div class="modal-content">';

  foreach($small as $num => $picture) {
      $showThisImg = $directory.'/'.$picture;
      $galleryContent .=  '<div class="mySlides">
      <div class="numbertext">'.$num.' / '.$counter.'</div>
      <img src="'.$showThisImg.'" onclick="plusSlides(1)" class="lightbox_main_image cursor">
      </div>';
  }
  $galleryContent .=  '<div class="caption-container">
  <p id="caption">'.$postTitle.'</p>
  </div>
  </div>
  </div>';

  return $galleryContent;
}


function showglobal() {

  $output = '<div class="videoContainer">
  <iframe width="357" height="315" src="https://www.youtube.com/embed/WxKQt1U2-0w" title="West Indian Day Parade 2017 Brooklyn" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

<div class="videoContainer">
  <iframe width="357" height="315" src="https://www.youtube.com/embed/K843nHUel0M" title="Vocalize NY with Yella Rae w/ Special Guest: Charizmuah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

<div class="videoContainer">
  <iframe width="357" height="315" src="https://www.youtube.com/embed/M5Ayw8W8OLI" title="LIFESTYLE VLOG - YAAD VIBES" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

<div class="videoContainer">
  <iframe width="357" height="315" src="https://www.youtube.com/embed/NViWuFNH56k" title="West Indian Day Parade Brooklyn NYC September 5 2022" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

<div class="videoContainer">
  <iframe width="357" height="315" src="https://www.youtube.com/embed/eK5QVUEIaI4" title="Music Buff Radio Host Jaevon Bubbles with President of Q96FM Trevor Forde" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
';

  return $output;
}
?>


<div class="content">


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

      <p>&nbsp;</p><p>&nbsp;</p>
<?php
switch ($page) {
    case 'gallery_global': 
        
        echo showGlobal();      
        break;
    case 'gallery_zulu': 
    case 'gallery_health': 

      
      $atts = array(
        'project_folder' => 'images/gallery_zulu',
        'project_name' => 'Zulu Juice'
      );

      echo gallery_function($atts);

        break;
    case 'gallery_nyc': 
    case 'gallery_eastcoastfam': 
    case 'gallery_atlanta':
    case 'gallery_blm': 
    case 'gallery_miami': 
    default: 

      $atts = array(
        'project_folder' => 'images/'.$page,
        'project_name' => $page
      );

      echo gallery_function($atts);

      break; 
} 
?> 
</div>


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