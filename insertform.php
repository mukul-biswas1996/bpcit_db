
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
<h2 front-color="blue" front-family="arial" align="right">hellow <?php echo $_SESSION['username'];?></h2>
<h1 align="center"> WELCOME TO BPCIT DATABASE </h1>
<img src="./mukul/title.jpg" width="100%" height="25%" />
<hr />
<h1 align="center">
<a href="insertform.php"><font color="green" size=3 face="Elephant"> ||  INSERT RECORD  ||  </font></a>
<a href="deleteform.php"><font color="green" size=3 face="Elephant">||    DELECT RECORD    ||</font></a>
<a href="view.php"><font color="green" size=3 face="Elephant"> ||   VIEW RECORD ||   </font></a>
<a href="photo.html"><font color="green" size=3 face="Elephant" > ||   GALARY  || </font></a>

<a href="depertment.html"><font color="green" size=3 face="Elephant">||   DEPERTMENTS  || </font></a>
<a href="application.html"><font color="green" size=3 face="Elephant">||   SUBMIT RESUME  || </font></a>
</h1>
<h4  front-color="red"><a align="center" href="logout.php"> LOGOUT TO USER </a></h4>

<hr />
<h1>book record management</h1>
<form action="insertion.php" method="post">
<table>
<tr>
<th> Title</th>
<td><input type="text" name="title" required /></td>
</tr>
<tr>
<th> Price</th>
<td><input type="text" name="price" required /></td>
</tr>
<tr>
<th> Autor</th>
<td><input type="text" name="author"/></td>
</tr>
<tr>
<th></th>
<td><input type="submit" value="insert"/></td>
</tr>
</table>
</form>
</body>
</html>