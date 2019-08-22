<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$q = intval($_GET['q']);
$conn = mysqli_connect('localhost','root','','hotel');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
}
//mysqli_select_db($conn,"ajax_");
//$sql="SELECT * FROM reservation WHERE id = '".$q."'";
SELECT *
FROM room
WHERE room_no NOT IN (
   SELECT DISTINCT room_no
   FROM reservation
   WHERE check_in <= '2016-02-27' AND check_out >= '2016-02-24')
$result = mysqli_query($conn,$sql);
echo "<table>
<tr>
<th>name</th>
<th>password</th>
<th>email</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>