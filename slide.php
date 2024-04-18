<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>5GRadio1 Global Radio Station 24/7</title>

  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">

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


    <div id="livestream">
      <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
      
      <script type="text/javascript">
      MRP.insert({
      'url':'https://streamer.radio.co/sc3a7cc4c5/listen',
      'codec':'mp3',
      'volume':100,
      'autoplay':false,
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

   
  
  
    <div class="headline"> 
      <img id="events" src="images/events.png" />
	  </div>
    Why do we use it?


  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


Where does it come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
</div>

</body>