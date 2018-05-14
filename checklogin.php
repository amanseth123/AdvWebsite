<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "training";

if(isset($_POST['submit']))
{
$usermail = $_POST['email'];
$password = $_POST['pass'];
$con=mysqli_connect("localhost","root","","training");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$qz = "SELECT * FROM auth where email='".$usermail."' and password='".$password."'" ; 
$qz = str_replace("\'","",$qz); 
$result = mysqli_query($con,$qz);
$row = mysqli_num_rows($result);
if($row == 1)
  {
  echo "successfully logged in";
  header("location: examples.html");
  }
mysqli_close($con);

}


?>