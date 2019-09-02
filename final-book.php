<html>

<head>
  <script type="text/javascript" src="jquery.js"></script>
  <link rel="stylesheet" href="css/finalbook.css">
</head>

<body>

  <script>
    $(document).ready(function() {
      $("#show_login").click(function() {
        showpopup();
      });

    });

    function showpopup() {
      $("#loginform").fadeIn();
      $("#loginform").css({
        "visibility": "visible",
        "display": "block"
      });
    }
  </script>


</body>

</html>