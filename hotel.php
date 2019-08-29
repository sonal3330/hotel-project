<!DOCTYPE html>

<html lang="en-US">

<head>
  <title>Rajmahal hotel</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Rajmahal hotel">
  <meta name="keywords" content="Rajmahal hotel, hotel in Goa, best hotel">
  <meta name="author" content="Sonal Sharma">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/slide.css">
  <link rel="stylesheet" href="css/facility.css">
  <link rel="stylesheet" href="css/activity.css">
  <link rel="stylesheet" href="css/review.css">
  <link rel="stylesheet" href="css/footer.css">

  <script>
    function myFunction() {
      var y = document.getElementById("myDIV2");
      var x = document.getElementById("myDIV");
      var z = document.getElementById("myDIV3");
      if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
      } else {
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
      } else {
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
      } else {
        x.style.display = "none";
        x.style.display = "none";
        z.style.display = "block";
      }
    }
    $(document).ready(function() {
      $(".show").click(function() {
        $(".abc").toggle();
      });
    });
  </script>
  <noscript>Sorry, your browser does not support JavaScript!</noscript>
</head>

<body>

  <!--section1-->


  <?php
    require_once('hotelnavigation.php');
    ?>

  <!--section 2-->

  <?php
    require_once('slide.php');
    ?>

  <!--section 3-->

  <?php
     require_once('facility.php');
    ?>

  <!--section 4-->

  <?php
       require_once('activity.php');
      ?>

  <!--section5-->

  <?php
       require_once('review.php');
      ?>

  <!-- Section 6-->

  <?php
        require_once('footer.php');
      ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="jquery.js"></script>
</body>

</html>