<?php
  require_once('hotelnavigation.php'); 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Rajmahal hotel"> 
    <meta name="keywords" content="Rajmahal hotel, hotel in Goa, best hotel"> 
    <meta name="author" content="Sonal Sharma"> 
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="jquery.js"></script> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="css/room.css">
	  <link rel="stylesheet" href="css/nav.css">
	 <script src="jquery.js"></script>
	 <script>

     $(document).ready(function(){
       $(".a1").click(function(){
         $(".room11").animate({
		   left: '10px',
		   width: '100%'       
         });
		 $(".room11").toggle();
		 $(".img1").css("opacity",".4");
       });
     });
	 
     $(document).ready(function(){
       $(".btn1").click(function(){
         $(".room11").hide();
		 $(".img1").css("opacity","1");
       });
     });
	 
     $(document).ready(function(){
       $(".a2").click(function(){
         $(".room12").animate({
           left: '10px',
		   width: '100%'
         });
	     $(".room12").toggle();
	     $(".img2").css("opacity",".4");
       });
     });
	 
     $(document).ready(function(){
       $(".btn2").click(function(){
         $(".room12").hide();
		 $(".img2").css("opacity","1");
       });
     });
	 
     $(document).ready(function(){
       $(".a3").click(function(){
         $(".room13").animate({
           left: '10px',
		   width: '100%'
         });
	     $(".room13").toggle();
	     $(".img3").css("opacity",".4");
       });
     });
	 
     $(document).ready(function(){
       $(".btn3").click(function(){
         $(".room13").hide();
		 $(".img3").css("opacity","1");
       });
     });
	 
    </script>
   
  </head>
  <body class="roombody">
    <div class="container-fluid rbox">
	  <h1>Ocean View king</h1>
	     <div class="row">
	     <div class="col-md-6">
	     <img src="images/room1.jpg" alt="room" class="img-fluid img-thumbnail img1">
		</div>
		<div class="col-md-6">
		   <p>Authentic Mexican style meets modern luxury in the Ocean View King accommodations at The Raj Mahal.Providing ample space across 856 square feet and a terrace with a plunge pool and stellar views, this room is anything but standard.</p>
		
		<table class="t1">
          <tr>
            <td><b>Price</b></td>
            <td>₹6000</td>
          </tr>
          <tr>
            <td><b>Additional person</b></td>
            <td>₹300</td>
          </tr>
          <tr> 
            <td><b>Tax</b></td>
            <td>12%</td>
          </tr>  
        </table>
		
        <div class="a1"><a href="#room" style="font-size:21px;">Learn More</a></div><br><br>
       <button class="btn btn-success" onclick="window.open('bookRoom.php')">Book Now</button>
        </div>
		</div>
		 <div class="room11">
	       <button class="btn1"><img src="images/cross.png" alt="cross" height="30px" width="30px"></button>
		   <h1><b>Ocean View King Room Amenities</b></h1><br>
		   <h2><b>Welcome Amenities</b></h2><br>
            Premium welcome amenity including Tequila Reserva de la Familia
	        Platinum, fruit<br> bowl and nuts
            <br>
			<h2><b>Room Features</b></h2>
            <ul>
              <li> King bed </li>
              <li> Located mostly on the first and second floors throughout the Resort </li>
              <li> A private terrace and plunge pool with a spectacular ocean view </li>
              <li> Binoculars for whale watching </li>
              <li> Complimentary refreshment center with sodas, water, juices<br> and coffee with a Nespresso coffee machine </li>
              <li>Complimentary wireless Internet access </li>
              <li>Enjoy thousands of complimentary current-day newspapers <br>and magazines by connecting to our WiFi </li> 
	          <li>Press Reader app or visiting pressreader.com </li>
              <li>In-Room CrossFit Fitness sessions, via your television </li>
              <li>Beach bag </li>
              <li>Fireplace </li>
              <li>In-room safe </li>
	          <li>Premium pillow selection available </li>
              <li>Bluetooth sound system  </li>
              <li>Telephone with voice mail </li>
              <li>LCD television with cable television and a variety of preferred channels </li>
              <li>Refined, upscale touches, such as specially chosen reading material,<br> luxury amenities and premium bedding </li>
              <li>Custom-made furniture, light fixtures and local artwork </li>
              <li>Umbrellas, bathrobe and slippers for on-property convenience</li>
              <li>24-hour room service</li>
	        </ul>

            <b>Complimentary Services</b>
            <ul>
              <li>Complimentary shoe shine; packing and unpacking services</li>
              <li> Daily afternoon chips, guacamole and Coronitas delivered to the room</li>
              <li> Nightly turndown experience and amenity</li>
            </ul>
			
            <b> Bathroom Amenities</b>
            <ul>
              <li>Rainforest shower</li>
              <li>Separate tub with Lady Primrose honey bubblebath with loofah</li>
              <li>Hairdryer</li>
              <li>Makeup amenities</li>
              <li>Lighted makeup mirror</li>
              <li>Premium bath amenities</li>
              <li>Expanded toiletries in a leather travel pouch</li>
	        </ul>
             
       </div> 
	  </div>
	  <br>
	       
	 <div class="container-fluid rbox">
	  <h1>Ocean View Deluxe Two Queens</h1>
	  <div class="row arow">
	    <div class="col-md-6">
           <img src="images/room2.jpeg" alt="room" class="img-fluid img-thumbnail img2"> 
        </div>
		<div class="col-md-6">
           <p>Authentic Mexican style meets modern luxury in the Ocean View Deluxe Two Queens accommodations at The Raj Mahal. Each of these 856-square-foot rooms features a private terrace with a plunge pool, a spacious sitting area with natural sunlight and a fireplace, and locally inspired design details.</p>
          <table class="t1">
            <tr>
              <td><b>Price</b></td>
              <td>₹8000</td>
            </tr>
            <tr>
              <td><b>Additional person</b></td>
              <td>₹300</td>
            </tr>
            <tr>
              <td><b>Tax</b></td>
              <td>12%</td>
            </tr>  
          </table>
          <a href="#room" style="font-size:21px;" class="a2"> Learn More</a><br><br>
          <button class="btn btn-success" onclick="window.open('bookRoom.php')">Book Now</button>
		 </div>
		</div>
		<div class="room12">
          <button class="btn2"><img src="images/cross.png" alt="cross" height="30px" width="30px"></button>
          <h1>Ocean View Deluxe Two Queens Room Amenities</h1><br>
          <h2><b>Welcome Amenities</b></h2><br>
          <p>Premium welcome amenity including Tequila Reserva de la Familia Platinum,
		  <br>fruit bowl and nuts</p>
         <br>
		
         <h2><b>Room Features</b></h2>
          <ul>
           <li>  A private terrace and plunge pool with a spectacular ocean view</li>
           <li> Binoculars for whale watching</li>
           <li> Complimentary refreshment center with sodas, water, juices and coffee with a Nespresso coffee machine</li>
           <li> Complimentary wireless Internet access</li>
           <li> Enjoy thousands of complimentary current-day newspapers and magazines by connecting to our WiFi<br> and downloading the Press Reader app or visiting pressreader.com</li> 
           <li> In-Room CrossFit Fitness sessions, via your television</li>
           <li> Beach bag</li>
           <li> Fireplace</li>
           <li> In-room safe</li>
           <li> Premium pillow selection available</li>
           <li> Bluetooth sound system </li>
           <li> Telephone with voice mail</li>
           <li> LCD television with cable television and a variety of preferred channels</li>
           <li> Refined, upscale touches, such as specially chosen reading material, luxury amenities and premium bedding</li>
           <li> Custom-made furniture, light fixtures and local artwork</li>
           <li> Umbrellas, bathrobe and slippers for on-property convenience</li>
           <li> 24-hour room service</li>
        </ul>

        <b>Complimentary Services</b>
        <ul>
          <li>Complimentary shoe shine; packing and unpacking services</li>
          <li>Daily afternoon chips, guacamole and Coronitas delivered to the room</li>
          <li> Nightly turndown experience and amenity</li>
        </ul>
		
        <b>Bathroom Amenities</b>
        <ul>
          <li>Rainforest shower</li>
          <li>Separate tub with Lady Primrose honey bubblebath with loofah</li>
          <li>Hairdryer</li>
          <li>Makeup amenities</li>
          <li>Lighted makeup mirror</li>
          <li>Premium bath amenities</li>
          <li>Expanded toiletries in a leather travel pouch</li>
     	</ul>

       </div>
     </div>		
	 <br>
	  <div class="container-fluid rbox">
	  <h1>Two Bedroom Ocean View Suite</h1>
	  <div class="row arow">
	    <div class="col-md-6">
		  <img src="images/room3.png" alt="room" class="img-fluid img-thumbnail img3">
		</div>
		<div class="col-md-6">
		   <p>With ample space for up to four guests, each of the Two Bedroom Ocean View Suites at The Resort at Rajmahal provides a restful oasis with stellar Pacific panoramas. Enjoy the convenience of a fully equipped kitchen and the luxury of a private terrace in this 2,685-square-foot suite.</p>
          <table class="t1">
            <tr>
              <td><b>Price</b></td>
              <td>₹10,000</td>
            </tr>
            <tr>
              <td><b>Additional person</b></td>
              <td>₹300</td>
            </tr>
            <tr>
              <td><b>Tax</b></td>
              <td>12%</td>
            </tr>  
          </table>
         <a href="#room" style="font-size:21px;" class="a3"> Learn More</a><br><br>
          <button class="btn btn-success" onclick="window.open('bookRoom.php')">Book Now</button>
		</div>
	</div>
	<div class="room13">
        <button class="btn3"><img src="images/cross.png" alt="cross" height="30px" width="30px"></button>
        <p><h1>Two Bedroom Ocean View Suite Room Amenities</h1><br>
        <h2><b>Welcome Amenities</b></h2><br>
        Premium welcome amenity including Tequila Reserva de la Familia Platinum,
		fruit<br> bowl and nuts
        <br>
        <h2><b>Room Features</b></h2>
        <ul>
          <li>  Fully equipped kitchen and pantry, with full size refrigerator stocked with complimentary sodas, water, juices </li>
          <li>Large indoor entertainment and dining area with stadium-style sofa living room</li>
          <li>Two terraces; one of which is a large entertainment style terrace, complete with plunge pool, dining table and chaise lounges.  The other terrace is located directly off the Master bedroom and has two chaise lounges</li>
          <li>Two spacious bedrooms including a Master bedroom suite with king bed, private terrace and a fireplace</li>
          <li>Second bedroom with two queen beds and private bathroom with walk-in rainfall shower; located on the first floor</li>
          <li>Unique woodwork, featuring distressed mesquite wood doors with distinctive nail-head <br>detail and hand-forged ironwork hinges and an antique-style finish</li>
          <li>Luxury dimmer light fixtures, hand-forged and custom-designed in Mexico</li>
          <li>Fully equipped kitchen with toaster, blender, utensils and cookware complete with professional stainless steel Viking appliances, including refrigerator, gas range, microwave and dishwasher</li>
          <li>Washer and dryer</li>
          <li>Binoculars for whale watching</li>
          <li>Complimentary wireless Internet access</li>
          <li>Enjoy thousands of complimentary current-day newspapers and magazines by connecting to our WiFi<br> and downloading the Press Reader app or visiting pressreader.com</li>
          <li>In-Room CrossFit Fitness sessions, via your television</li>
          <li>Beach bag</li>
          <li>Fireplace</li>
          <li>In-room safe</li>
          <li>Premium pillow selection available</li>
          <li>Bluetooth sound system </li>
	    </ul>

        <b>Complimentary Services</b>
        <ul>
          <li>Complimentary shoe shine; packing and unpacking services</li>
          <li>Daily afternoon chips, guacamole and Coronitas delivered to the room</li>
          <li> Nightly turndown experience and amenity</li>
        </ul>
		
        <b> Bathroom Amenities</b>
        <ul>
          <li>Rainforest shower</li>
          <li>Separate tub with Lady Primrose honey bubblebath with loofah</li>
          <li>  Hairdryer</li>
          <li>   Makeup amenities</li>
          <li>  Lighted makeup mirror</li>
          <li>  Premium bath amenities</li>
          <li>  Expanded toiletries in a leather travel pouch</li>
	    </ul>
     </div>
     </div>
    
  
  </body>
</html>