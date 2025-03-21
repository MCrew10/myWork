<?php
//Database configuration
$hostname = "localhost";
$username = "root";
$password = "";
$database = "contacts";

//Create a connection to the database
$connection = new mysqli($hostname, $username, $password, $database);

// Check if the connection is successful
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

$sql = "UPDATE users SET email='newemail@example.com' WHERE id=1";

if ($conn->query($sql) === TRUE){
    echo "Record Updated successfully";
}
else{
    echo "Error updating record: " . $conn->error;
}

$conn->close()

$sql = "DELETE FROM users WHERE id=1";

if ($conn->query($sql) === TRUE){
    echo "Record deleted successfully";
}
else{
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>