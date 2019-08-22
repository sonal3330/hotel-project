
                                 <!--Slideshow on Home page-->

<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta name="description" content="Rajmahal hotel"> 
     <meta name="keywords" content="Rajmahal hotel, hotel in Goa, best hotel"> 
     <meta name="author" content="Sonal Sharma"> 
	  <meta charset="UTF-8">
    <link rel="stylesheet" href="slidecss.css">
  </head>
  <body>
    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 5</div>
        <img src="images/hotel1.jpg" alt="hotel-image" style="height:20%; width:100%">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 5</div>
        <img src="images/hotel2.jpg" alt="hotel-image" style="height:20%; width:100%;">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="images/hotel3.jpg" alt="hotel-image" style="height:20%; width:100%;" >
      </div>
  
      <div class="mySlides fade">
        <div class="numbertext">4 / 5</div>
        <img src="images/hotel4.jpg" alt="hotel-image" style="height:20%; width:100%;">
      </div>

      <div class="mySlides">
        <div class="numbertext">5 / 5</div>
        <img src="images/hotel5.jpg" alt="hotel-image" style="width:100%;height:20%;">
      </div>

    </div>
    <br>
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
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
	<noscript>Sorry, your browser does not support JavaScript!</noscript>
  </body>

</html>  
