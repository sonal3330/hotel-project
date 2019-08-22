<!DOCTYPE html>
<head> <style type="text/css">
  *{
	
                       box-sizing:border-box;
	  
  }
  table,tr,td,th{
    border:1px solid black;
  border-collapse:collapse; 
  }
  table{
     width: 100%;
  }
  .axc{
    border:1px solid black;
    float: left;
    width:100%;
  height:0px;
  }
   #show_login{
	   position:absolute;
	   top:550px;
	   left:450px;
   }
  .img{
    width:100%;
  }
  
  
  
</style></head> 
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
    include('finalBook.php');
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