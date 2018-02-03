
<?php
$username=$_POST['username'];
$f=$_FILES['myfile'];
echo "Hello $username file uploaded";
move_uploaded_file($f['tmp_name'],"photos/".$username);

?>