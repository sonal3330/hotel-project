<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/select.css">
    <link rel="stylesheet" href="css/nav.css">
</head> 
<body>
<?php
include('hotelnavigation.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$type=$_POST['type'];
$chkin= $_POST['chkin'];
$chkout=$_POST['chkout'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql="SELECT distinct type,rate FROM room WHERE room_no NOT IN (SELECT DISTINCT room_no FROM reservation WHERE check_in <= '$chkin' AND check_out >= '$chkout')";
$sql="SELECT distinct type,rate FROM room WHERE room_no NOT IN (SELECT room_no FROM reservation WHERE check_in between '$chkin' AND '$chkout' or check_out between '$chkin' AND'$chkout')";
$result = $conn->query($sql);
//echo $row["user"];
//print_r($result);
$data = array();//declaring as an array
while($row = mysqli_fetch_array($result)) {
     $data[] = $row;  //assigning values to the array data
}
echo "<div class='axc'>";

  echo "<table >";

$count=0;$count2 =0;$count3=0;
foreach ($data as $row)  {

   
 //echo "<tr>";


if($row['type']=='ocean view king' && $count ==0){
    echo "<td> <img src='images/room1.jpg' height='200' width='300'> <p class='type'>". $row['type'] . 
    "</p><p class='rate'>Rs". $row['rate'] ."</p></td>";
    $count++;
      //$x++;
  }
  if($row['type']=='Two Bedroom Suite' && $count2==0){
    echo "<td> <img src='images/room3.png' height='200' border=3 colspan='4'> <p class='type'>". $row['type'] . 
    "</p><p>Rs.". $row['rate'] ."</p></td>";
     $count2++;
       //$x++;
  }
    //echo "<td>" . $row['rate'] . "</td>";
    if($row['type']=='Ocean View 2 Queens' && $count3 ==0){
    echo "<td> <img src='images/room2.jpeg' height='200' border=3 colspan='4'> <p class='type'>". $row['type'] . 
    "</p><p class='rate'>Rs.". $row['rate'] ."</p></td>";
     $count3++;

  }
  
   // echo "</tr>";
  

}

echo "</table>";
echo "</div>";


$conn->close();

}
    include('final-book.php');
?>
<center>

 <div id = "loginform"  id="form">	
  <form method = "post" action = "insert.php" >
   <p>enter the details to book your room</p>
    <input type = "text" id = "login" placeholder = "enter name" name = "name" REQUIRED>
   <input type = "text" id = "password" name = "contact" placeholder = "contact no" REQUIRED><br>

 <?php
echo "<select name='type'>";
echo "<option >select room</option>";
foreach ($data as $row){
echo "<option>" . $row['type']. "</option>";

}
echo "</select>";
   ?>
   <label>checkin</label>
   <input type="date" name="checkin" >
   <label>checkout</label>
   <input type="date" name="checkout">
   <input type = "submit" id = "dologin" value = "Book" name="submit">
  </form>
 </div>
 <div>
  <a href="#dologin"><input type="button" id="show_login" value= "book now"></a> </div>
</center>
</body>
</html>