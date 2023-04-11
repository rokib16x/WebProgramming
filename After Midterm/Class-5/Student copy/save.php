<?php 

$name = $_POST['name'];
$email = $_POST['user_email'];
$address = $_POST['address'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webStudent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Adding into database
$sql = "INSERT INTO student (name, email, address) VALUES ('$name', '$email', '$address')";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>