<html>
<head>
<script type="text/javascript" src="jquery.js"></script>
<style>
#loginform
{
	position:relative;
	top:300px;
 width:500px;
 height:530px;
 margin-top:100px;
 background-color:#333;
 border-radius:3px;
 box-shadow:0px 0px 10px 0px #424242;
 padding:10px;
 box-sizing:border-box;
 font-family:helvetica;
 visibility:hidden;
 display:none;
}
#loginform p
{
 margin-top:40px;
 font-size:22px;
 color:#E6E6E6;
}
#loginform #login
{
 width:250px;
 height:40px;
 border:2px solid silver;
 border-radius:3px;
 padding:5px;
}
#loginform #password
{
 margin-top:5px;
 width:250px;
 height:40px;
 border:2px solid silver;
 border-radius:3px;
 padding:5px;
 }
#loginform #dologin,select
{
 margin-left:-5px;
 margin-top:10px;
 width:250px;
 height:40px;
 border:none;
 border-radius:3px;
 color:#E6E6E6;
 background-color:grey;
 font-size:20px;
}
input,label{
	display: block;
	margin-left:-5px;
 margin-top:10px;
 width:250px;
 height:40px;
 font-size:20px;
 color:white;
background-color:#333;

 }
</style>
</head>
   
<body>
<script>$(document).ready(function()
{
 $("#show_login").click(function(){
  showpopup();
 });
 
});

function showpopup()
{
 $("#loginform").fadeIn();
 $("#loginform").css({"visibility":"visible","display":"block"});
}
</script>


</body>
</html>