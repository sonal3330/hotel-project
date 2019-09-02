
<html>

<head>
  <meta charset="UTF-8">
  <title></title>
</head>

<body>
  <?php
        
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit']))
{
 
   
$name=$_POST['name'];
    $type=$_POST['type'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $contact=$_POST['contact'];
    $room=$_POST['type'];

$sql="insert into reservation (name,contact,check_in,check_out,type)values('$name','$contact','$checkin','$checkout','$type')";   
if ($conn->query($sql) === TRUE) {
    header("Location:book-confirm.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
</body>

</html>