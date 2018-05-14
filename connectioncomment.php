 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "training";

// Create connection
if (isset($_POST['submit']))
{
 $name=$_POST['name'];
 $text=$_POST['textarea'];
 $gender=$_POST['gender'];
$conn =  mysqli_connect("localhost", "root", "", "training");
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$sql = "INSERT INTO comments (Name, Comment, Gender) VALUES ('$name', '$text', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  }
$conn->close();
?> 