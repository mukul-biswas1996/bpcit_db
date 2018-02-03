<?php
session_start();
if(!isset($_SESSION['username']))
{
	echo"your usename or password is incorrect";
	header('location:http://localhost/loginpage/login.php');
}
?>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bpcit_db');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>
DELETE BOOK RECORD
</title>
<link rel="stylesheet" href="./css/viewstyle.css"/>
</head>
<body>

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
<h1 align="center" >
<a href="insertform.php"><font color="green" size=3 face="Elephant"> ||  INSERT RECORD  ||  </font></a>
<a href="deleteform.php"><font color="green" size=3 face="Elephant">||    DELECT RECORD    ||</font></a>
<a href="view.php"><font color="green" size=3 face="Elephant"> ||   VIEW RECORD ||   </font></a>
<a href="photo.html"><font color="green" size=3 face="Elephant" > ||   GALARY   || </font></a>

<a href="depertment.html"><font color="green" size=3 face="Elephant">||   DEPERTMENTS  || </font></a>
<a href="application.html"><font color="green" size=3 face="Elephant">||   SUBMIT RESUME  || </font></a>
</h1>
<h4  front-color="red"><a align="center" href="logout.php"> LOGOUT TO USER </a></h4>

<hr />
<h1>book record management</h1>
<form action="deletion.php" method="post">
<table id="view_table">
<tr>
<th>Book ID </th>
<th>Title</th>
<th>Price </th>
<th>Author </th>
<th>select To delete</th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
?>
<tr>
<td><?php echo $row['bookid'];?> </td>
<td><?php echo $row['title'];?></td>
<td><?php echo $row['price'];?> </td>
<td><?php echo $row['author'];?> </td>
<td><input type="checkbox" value="<?php echo $row['bookid'];?>" name="b<?php echo $i; ?>"/></td>

</tr>
<?php
}
?>
<tr>
<td colspan="5"><input type="submit" value="delete"/></td>
</tr>
</table>
</body>
</html>