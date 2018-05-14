<?php

if (isset($_POST['submit'])) 
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
$con=mysqli_connect("localhost","root","","training");
if($con)
echo 'succ conn.';
else
echo 'failed con';
$sql="INSERT INTO auth (name,email,password) VALUES ('{$name}','{$email}','{$password}')";
$result=mysqli_query($con,$sql);
if ($result) {
	# code...
	//echo "Done successfully";
	header("location:examples.php");
}else{
	echo "Failed";
}

 }
?>