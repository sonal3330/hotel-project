<?php
  require_once('hotelnavigation.php'); 
?>
<html>
 <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="jquery.js"></script> 
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="css/spa.css">
     <link rel="stylesheet" href="css/nav.css">
</head>
<body>
<div class="container-fluid cbox">
<br>
<div class="text-center" id="he"><h1>An Inspired Spa Resort in The Raj Mahal</h1></div><br>
<h2><font color="green">Look and Feel Your Best </font></h2>

<p>
<b><i><font color="green">The Moon</font></i></b><br>

The different energies, phases & qualities of the moon impact the body in very specific ways. Luna y Mar’s six signature treatments represent these varying energies of the lunar phases and its connection to earth, to align you with the rhythms of nature for your enhanced well-being at our spa resort in Cabo.<br>
<b><i><font color="green">The Sea</font></i></b><br>

The Ocean is the source of life, and it has a powerful therapeutic effect on mind, body, and spirit. Our aquatic and sea based treatments harness the pull of the ocean’s energy, and the healing power of the sea, to restore beauty, health, and spirit. Ingredients such as 100% certified organic seaweed and pure algae extracts are hand-harvested from some of the cleanest waters on the planet.<br>
<b><i><font color="green">Authentic Baja</font></i></b><br>

Mexican folk healing is known as “curanderismo”. Steeped in tradition, it still maintains a prominent place in the life of the Mexican people. Luna y Mar, a luxury choice among Cabo San Lucas spa resorts, honors this tradition with our spa guardian, using rituals, herbs, and healing to address the material, spiritual, and mental realms. We warmly invite you to begin your spa experience with our welcome foot cleansing ritual using special herbs to purify and prepare you for your spa journey.
</p><br>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/spa1.jpg" style="width:100%">
  </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/spa2.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/spa3.png" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 
