
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
</head>
<body>
<h2 front-color="blue" front-family="arial" align="right">hellow  <?php echo $_SESSION['username'];?></h2>
<h1 align="center"> WELCOME TO BPCIT DATABASE </h1>
<img src="./mukul/title.jpg" width="100%" height="25%" />
<hr />
<h1 align="center">
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
<font color="green" size="10" face="Algerian">There are four trades</font><br></br>
<font color="bc15f3" size="5" face="Cambria">Computer Science & Technology</font><br></br>
<font color="bc15f3" size="5" face="Cambria">Electrical Engneering</font><br></br>
<font color="bc15f3" size="5" face="Cambria">Civil Engneering</font><br></br>
<font color="bc15f3" size="5" face="Cambria">Mechanical Engneering</font><br></br>
</center>

</body>
</html>