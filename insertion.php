<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bpcit_db');
$q="INSERT INTO book(title,price,author) values('$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<html>
<head>
<title>insertion</title>
</head>
<body>
<h1> book record mangagement </h1>
<p><?php if($status==1) echo "record inserted";
else echo "inssertion failed";?>
</p>
<h2 align ="center">DO YOU want more record<a href="insertform.php"> click hare</a></h2>
<h1 align="center">Go back to home page<a href="home.php"> Click hare</a></h1>
</body>
</html>