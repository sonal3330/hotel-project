<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/nav.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="jquery.js"></script>
  <script>
  var menu = false;
  $(".fa-list.modify").click(function() {
    if (menu == false) {
      $(".nav").fadeIn();
      menu = true;
    } else {
      $(".nav").fadeOut();
      menu = false;
    }
  })
</script>
</head>

<body>
  <div class="navigation-body">
    <div class="navigation-header">
      <div class="logo"><img src="images/rajmahal-logo-new.jpg" alt="logo"> </div>
      <div class="menu"><span class="fa fa-list modify"></span></div>
    </div>
    <div class="nav">
      <ul>
        <li><a href="hotel.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
        <li><a href="room.php"><i class="fa fa-bed" aria-hidden="true"></i>Rooms and Suites</a></li>
        <li><a href="#"><i class="fa fa-cutlery" aria-hidden="true"></i>Services and Amenities</a>
          <ul>
            <li><a href="swimming.php"><i class="fa fa-shower" aria-hidden="true"></i>Swimmimg pool</a></li>
            <li><a href="spa.php"><i class="fa fa-bath" aria-hidden="true"></i>Spa</a></li>
          </ul>
        </li>
        <li><a href="book-room.php"><i class="fa fa-check-circle" aria-hidden="true"></i>BOOK NOW</a></li>
      </ul>
    </div>
  </div>
</body>

</html>
