<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))
		$b_id[$i]=$_POST[$index];
	else
		$i--;
}
	$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bpcit_db');
for($k=1;$k<=$size;$k++)
{
	$q="delete from book where bookid=".$b_id[$k];
	mysqli_query($con,$q);
	
}
mysqli_close($con);
?>
<html>
<head>
<title>deletion</title>
</head>
<body>
<h1> book record mangagement </h1>
<p><?php
echo $size."record deleted";
?>
</p>
 <h2>do you want to delete more record<a href="deleteform.php">  </br>click hare</a></h2>
 <h1>Go to home<a href="loginpage/home.php">  </br>click hare</a></h1>
</body>
</html>

