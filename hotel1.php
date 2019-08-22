                                    
									<!-- HOME PAGE -->
<!DOCTYPE html>

<html lang="en-US">

<head>
  <title>Rajmahal hotel</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Rajmahal hotel"> 
  <meta name="keywords" content="Rajmahal hotel, hotel in Goa, best hotel"> 
  <meta name="author" content="Sonal Sharma"> 
  <script src="jquery.js"></script>   
  <link rel="stylesheet" href="css/reviewcss.css">
  <script>
  
    $(document).ready(function(){
      $(".show").click(function(){
        $(".abc").toggle();
      });
    });
	
  </script>  
  <noscript>Sorry, your browser does not support JavaScript!</noscript>
  </head>
    
<body>

  <!--section1-->
  
  
   <?php
    require_once('hotelnavigation.php'); 
    ?>
	
  <!--section 2-->
  
    <?php
    require_once('slide.php'); 
    ?>
	<br><br>
  <!--section 3-->
  
    <?php
     require_once('facility.php'); 
    ?>
	
	<!--section 4-->
			
	  <?php
       require_once('activities.php'); 
      ?>
			
	<!--section5-->
	
	  <div class="review-container">
	  <br>
	    <div class="review-heading">
		  <h1><u>Guest speak</u></h1></div>
		  <br>
		  <div class="review">
 		  
		      <div class="review-content">
		        <b><font color="brown">"Thank you very much for the warm hospitality extended to us."</font><br>Mr Thein Sein</b><br><i><b> President – Myanmar</b></i>
			  </div>
			  
			  <br><br> 	
              		  
              <div class="review-content">
			    <b><font color="brown">"It has been a great pleasure for me and my wife to stay in this prestigious hotel - RAJ MAHAL.Your professional and thoughtful care have made my visit to India most wonderful."</font></b><br><i><b>His Excellency Ban ki-Moon<br>Secretary General of United Nations</b></i>
			  </div>
			  
			  <br><br>
			  
			    <div class="abc">
			  
	              <div class="review-content">
	              <b><font color="brown">"It was completely a wonderful visit. It is a pleasure doing  business with the Taj."</font></b><br><i><b>Mr Jeffrey R Immelt<br>Chairman & CEO – General Electric, US</b></i>
				  </div>
			  
				
				  <br><br>
				
                  <div class="review-content">
				  <b><font color="brown">"It’s great to be back. Thank you for your hospitality."</font></b><br><i> <b>Mr Jeffrey Archer<br>Author, UK</b></i>
				  </div>
				
	            </div>
			  
	      </div>
	      <button class="show">Show more</button>

      </div>
	  
	  <!-- Section 6-->
	  
      <?php
        require_once('footer.php'); 
      ?>

</body>

</html>
