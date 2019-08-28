<html>
<head>
</head>
<body>

<?php
session_start();
?>
<?php if(!empty($_SESSION["user_id"])){?>
<h1>welcome </h1>
<form action="connect.php" method="post">
<input type="submit" value="logout" name="logout">
		</form>
<?php }
else
{
		header("Location:userlogin.php")	;
	
}

 ?>	
</body>
</html>