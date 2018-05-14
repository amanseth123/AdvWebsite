 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comments";

// Create connection
$conn = new mysqli("localhost", "root", "", "messageme");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO messageme (Name, Email, Message)
VALUES ('your_name', 'your_email', 'your_enquiry')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 