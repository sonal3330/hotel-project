<?php
        require_once('hotelnavigation.php'); 
         ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="swimstyle.css">
</head>
<body bgcolor="Cornsilk">

<div class="he"><h1>Swimming Pool</h1></div><br><br>
<h2><font color="blue">Relax Poolside at the Raj Hotel</font></h2>

<p><b>Be mesmerized by the beauty of the glistening infinity pools that seem to flow into the horizon of the Pacific Ocean, soothed by the saltwater pool, and delighted by the children’s pool. Swim, soak or sip a refreshment on a chaise lounge. Enjoy a spectacular vista from the vantage point of your own private plunge pool off your luxurious guestroom or suite.</b></p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/pool1.jpg" style="width:100%">
  </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/pool2.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/pool3.jpg" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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
