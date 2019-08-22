
                                 <!-- Activity Section on Home page-->

<!DOCTYPE html>
<html lang="en-US">

  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Rajmahal hotel"> 
  <meta name="keywords" content="Rajmahal hotel, hotel in Goa, best hotel"> 
  <meta name="author" content="Sonal Sharma"> 
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/activitycss.css">  
  
  <script>
	
      function myFunction() {

	    var y = document.getElementById("myDIV2");
        var x = document.getElementById("myDIV");
	    var z = document.getElementById("myDIV3");
        if (x.style.display === "none") {
          x.style.display = "block";
		  y.style.display = "none";
		  z.style.display = "none";
        } 
		else {
          x.style.display = "block";
	      y.style.display = "none";
	      z.style.display = "none";
        }
	  }
	  
      function myFunction2() {
	
	    var y = document.getElementById("myDIV2");
        var x = document.getElementById("myDIV");
	    var z = document.getElementById("myDIV3");
        if (y.style.display === "none") {
		  z.style.display = "none";
		  x.style.display = "none";
          y.style.display = "block";
		} 
		else {
          x.style.display = "none";
	      z.style.display = "none";
	      y.style.display = "block";
        }
      }
	  
      function myFunction3() {
	
        var x = document.getElementById("myDIV");
	    var y = document.getElementById("myDIV2");
	    var z = document.getElementById("myDIV3");
        if (z.style.display === "none") {
		  x.style.display = "none";
		  y.style.display = "none";
          z.style.display = "block";
		}
		else {
          x.style.display = "none";
	      x.style.display = "none";
		  z.style.display =  "block";
        }
      }
	  
    </script>
	<noscript>Sorry, your browser does not support JavaScript!</noscript>
  </head>
  <body>

    <ul class="sel">
	
      <li class="viewbutton">
        <a  href="#home"><button onclick="myFunction()">SIGHT SEEING</button></a>
      </li>
	  
      <li>
        <a href="#act"><button onclick="myFunction2()">ACTIVITIES TO DO</button></a>
      </li>
	  
      <li>
        <a href="#contact"><button onclick="myFunction3()">SHOPPING</button></a>
      </li>
	  
    </ul>
	<br>
	                             <!-- Sight seeing-->
    <div id="myDIV">
	
      <ul class="act">
	  
	    <li style="width:23%;margin-left:9%;margin-top:10px;">
          <img src="images/travel1.jpg" alt="Dudhsagar Waterfall" style="height:95%;width:93%;">
		  <h1>Dudhsagar Falls</h1>
		  <p title=" Dudhsagar Waterfall" class="dis">The magnificent Dudhsagar Waterfall is perched in the high peaks
		  of the Western Ghats and is a sight to behold especially in the monsoons when it is in full and furious flow.</p>
		  <a title=" Dudhsagar Waterfall" href="https://en.wikipedia.org/wiki/Dudhsagar_Falls" class="an">Read more</a>
		</li>
			
		<li style="width:23%;margin-left:9%;margin-top:10px;">
		  <img src="images/travel2.jpg" alt="Aguada" style="height:95%;width:93%;">
		  <h1>Fort Aguada</h1>
		  <p title="Aguada" class="dis">Aguada is a Portuguese word which means "Watering Place" and the fort was built by the then Portuguese rulers for providing fresh water supply to the ships passing by in the Arabian Sea.</p>
		  <a title="Aguada" href="https://en.wikipedia.org/wiki/Fort_Aguada" class="an">Read more</a>
		</li>
		
		<li style="width:23%;margin-left:9%;margin-top:10px;">
		  <img src="images/travel3.jpg" alt="Basilica of Bom Jesus" style="height:95%;width:93%;">
		  <h1>Basilica of Bom Jesus</h1>
		  <p title="Basilica of Bom Jesus" class="dis">The Basilica of Bom Jesus or Borea Jezuchi Bajilika is located in Goa, India. The basilica holds the mortal remains of St. Francis Xavier. </p>
		  <a title="Basilica of Bom Jesus" href="https://en.wikipedia.org/wiki/Basilica_of_Bom_Jesus" class="an">Read more</a>
		</li>
		
      </ul>
	  
	</div>
			                          <!-- Activities to do-->
									  
	<div id="myDIV2">
	
	  <ul class="act">
	  
	    <li style="width:23%;margin-left:9%;margin-top:10px;">
	      <img src="images/activity1.jpg" alt="water sports" style="height:95%;width:93%;">
		  <h1>Adventure water sports</h1>
		  <p title="Adventure water sports" class="dis">A trip to Goa can never be complete with enjoying water sports!One of the best hubs for water sports in the country,the beaches and the waterfronts of Goa make it for an international water sports destination.</p>
          <a title="Adventure water sports" href="https://www.thrillophilia.com/tours/adventurous-water-sports-in-goa?" class="an">Book now</a>
		</li>
			
		<li style="width:23%;margin-left:9%;margin-top:10px;">
		  <img src="images/activity2.jpg" alt="Trekking" style="height:95%;width:93%;">
		  <h1>Trekking</h1>
		  <p title="Trekking" class="dis">Planning a Goa trip with only the beaches and party in mind is a grave mistake as it offers some</p>
		  <a title="Trekking" href="https://www.thrillophilia.com/tours/overnight-trek-to-tambdi-surla" class="an">Book now</a>
		</li>
		
		<li style="width:23%;margin-left:9%;margin-top:10px;">
		  <img src="images/activity3.jpg" alt="Hiking" style="height:95%;width:93%;">
		  <h1>Hiking</h1>
		  <p title="Hiking" class="dis">An outdoor activity, hiking usually involves walking on paths or
		  tracks that are pretty much challenging and offers an offbeat experience of exploring the least visited vicinities</p>
		  <a title="Hiking" href="https://www.thrillophilia.com/tours/jungle-adventure-in-goa" class="an">Book now</a>
		</li>
		
	  </ul>
	  
	</div>
			                      <!-- Shopping-->
							  
	<div id="myDIV3">
	
	  <ul class="act">
	
	    <li style="width:23%;margin-left:9%;margin-top:10px;">
		  <img src="images/market1.jpeg" alt="Anjuna Flea Market" style="height:95%;width:93%;">
		  <h1 >Anjuna Flea Market</h1>
		  <p title="Anjuna Flea Market" class="dis">The liveliest of all markets in Goa,it is held every Wednesday in the beach town of Anjuna in North<br> Goa. </p>
		</li>
			
		<li style="width:23%;margin-left:9%;margin-top:10px;">
		  <img src="images/market2.jpg"  alt="Calangute Market Square" style="height:95%;width:93%;">
		  <h1>Calangute Market Square</h1>
		  <p title="Calangute Market Square" class="dis">The popular Calangute beach in Goa is lined with innumerable shacks and stalls making it one of the top markets of this shopping paradise.</p>
		</li>
		
		<li style="width:23%;margin-left:9%;margin-top:10px;">
		  <img src="images/market3.jpg" alt="Saturday Night Bazaar at Arpora" style="height:95%;width:93%;">
		  <h1>Saturday Night Bazaar at Arpora</h1>
		  <p title="Saturday Night Bazaar at Arpora" class="dis">There is no better way to spend a Saturday evening in 
		  Goathan by visiting the Night Bazaar at Arpora.
		  </p>
		</li>
		
	  </ul>
	  
	</div>
	
  </body>

</html>
