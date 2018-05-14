<?php

if (isset($_POST['submit'])) 
{
 $name=$_POST['contactName'];
 $email=$_POST['contactEmail'];
 $subject=$_POST['contactSubject'];
 $message=$_POST['contactMessage'];
$con=mysqli_connect("localhost","root","","training");
// if($con)
// echo 'succ conn.';
else
echo 'failed con';
$sql="INSERT INTO personal (name,email,subject,message) VALUES ('{$name}','{$email}','{$subject}','{$message}')";
$result=mysqli_query($con,$sql);
if ($result) {
	# code...
	echo "Done successfully";
	//header("location:examples.html");
}else{
	echo "Failed";
}

 }
?>