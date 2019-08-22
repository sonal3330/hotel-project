<html>
<head>
 <link rel="stylesheet" href="css/bookroomstyle.css">
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