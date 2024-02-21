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

// SQL query to creating a table in (School) database.
$sql = "CREATE TABLE students (
id INT AUTO_INCREMENT PRIMARY KEY,
stname VARCHAR(30) NOT NULL,
email VARCHAR(40),
mobile VARCHAR(10) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table students created successfully";
} else {
  echo "Error! creating table: " . mysqli_error($conn);
}