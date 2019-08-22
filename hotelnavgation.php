<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
             *{
                       box-sizing:border-box;
                   }       
            .a{
                background-color:white;
                height:150px;
                width:100%;
                border:1px solid hidden;
			  }
            .b{
                position:absolute;
				height:10%;
				width:10%;
            }
            .c{
                position:absolute;
                left:10%;
                top:10%;
            }
            .d{
                margin-left:93px;
                      float:left;
                      font-size:22px;
                      font-weight:bold;
                       font-family:ar blanca;
              
            }
            .d a{
                color:#003333;
						
            }
			 	
			
            .drp{
                float:left;
            }
            .dropdown{
                display:none;
                font-size:22px;
                font-weight:bold;
                font-family:ar blanca;
                margin-top:20px;
				
		
            }
            .dropdown ul li a{
                color:#003333;
				
            }
            .dropdown li a:hover{
                background-color:#ffffcc ;
            }
            .d:hover{
                background-color:#ffffcc;
            }
            .drp:hover .dropdown {
                display:block;
				
                
            }  
            ul li{
                list-style: none;
		
                
            }
            a{
                text-decoration:none;
            }  
			
			</style>
			</head>
			 <body>
			   <!-- section1-->
        <div class="a">
            <div class="b">  <img src="rajmahal-logo-new.jpg" alt="logo"></div>
        <div class="c">
            <div class="d"><a href="hotel1.php">Home</a> </div>
            <div class="d"><a href="room.php">Rooms and Suites</a></div>
            <div class="drp">
            <div class="d"><a href="#">Services and Amenities</a></div>
           <div class="dropdown">
            <ul>
                <li><a href="swimming.php">Swimming pool</a></li>
                <li><a href="spa.php"> Revive Spa and Fitness</a></li>
                                   </ul>
                  </div>  
            </div>
			           <div class="d"><a href="bookRoom.php"> BOOK NOW</a> </div>
		   
		</div>
        </div>
		<br><br>
		
		</body>
		</html>