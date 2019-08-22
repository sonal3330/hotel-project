<html>
<head>
  <style >
  .choose{
	  background-color:beige;
  }
    .ab,input{
      margin:20px 0px 0px 120px;
  width:70%;
  height:   60px;
 text-align-last:  center; 
  font-size:  30px;
  }
  .sub:hover{
background-color:blue;
cursor: pointer;
  }
  .sub{
width:50px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  background-color:LightBlue;
  }
  h1{
	  color:purple;
  }

  </style>

</head>
<body class="choose">
  <?php include_once('hotelnavigation.php'); ?>
  <h1>check the availability</h1>
<form method="post" action="select.php"> 
<select name="type"  class="ab">
   <option>Ocean View King</option>
  <option>Ocean View 2 Queens</option>
  <option>Two Bedroom Suite</option>

  </select>
   <input type="date" name="chkin" Required>
  <input type="date" name="chkout" Required>  
<input type="submit" name="submit" class="sub" style="width:30%;margin-left:230px;">

</form>
<br>

</body>
</html>