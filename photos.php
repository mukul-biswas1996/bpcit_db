
<?php
session_start();
if(!isset($_SESSION['username']))
{
	echo"your usename or password is incorrect";
	header('location:http://localhost/loginpage/login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>BPC Institute of Technology</title>
<link rel="stylesheet" href="./css/viewstyles.css"/>
</head>
<body>
<h2 front-color="blue" front-family="arial" align="right">hellow  <?php echo $_SESSION['username'];?></h2>
<h1 align="center"> WELCOME TO BPCIT DATABASE </h1>
<img src="./mukul/title.jpg" width="100%" height="25%" />
<hr />
<h1 align="center" >
<a href="insertform.php"><font color="green" size=3 face="Elephant"> ||  INSERT RECORD  ||  </font></a>
<a href="deleteform.php"><font color="green" size=3 face="Elephant">||    DELECT RECORD    ||</font></a>
<a href="view.php"><font color="green" size=3 face="Elephant"> ||   VIEW RECORD ||   </font></a>
<a href="photos.php"><font color="green" size=3 face="Elephant" > ||   GALARY   || </font></a>

<a href="depertments.php"><font color="green" size=3 face="Elephant">||   DEPERTMENTS  || </font></a>
<a href="application.php"><font color="green" size=3 face="Elephant">||   SUBMIT RESUME  || </font></a>
</h1>
<h4  front-color="red"><a align="center" href="logout.php"> LOGOUT TO USER </a></h4>

<hr />
<center>
<img src="./mukul/photo1.jpg" width="300" hight="300" />
<img src="./mukul/photo7.jpg" width="300" hight="300" />
<img src="./mukul/photo6.jpg" width="300" hight="270" />
<img src="./mukul/photo4.jpg" width="300" hight="300" />
<img src="./mukul/photo8.jpg" width="300" hight="300" />
<img src="./mukul/photo9.jpg" width="300" hight="300" />
<img src="./mukul/photo11.jpg" width="300" hight="300" />
<img src="./mukul/photo3.jpg" width="300" hight="300" />
</center>
</body>
</html>