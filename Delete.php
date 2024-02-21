<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "School";

// I am Creating a connection here with MySQL.
$conn = mysqli_connect($servername, $username, $password, $dbname);

// I am Checking connection here. 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

// SQL query to deleting record.

$sql = "DELETE FROM students WHERE id=1";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error! deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>