<!doctype html>
<html lang="en">
  <head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Fill Details</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/php24/formDB.php">Home <span class="sr-only">(current)</span></a>
      </li>
  </div>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php

$servername = "localhost";
$username = "root";
$password = "";

// I am Creating a connection here with MySQL.
$conn = mysqli_connect($servername, $username, $password);

// I am Checking connection here. 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

// SQL qurey to Creating a database in MySQL.
$sql = "CREATE DATABASE Prince_24";

if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error! creating database: " . mysqli_error($conn);
}
mysqli_close($conn);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $name = $_POST['name'];
   $contact = $_POST['contact'];
   $city =$_POST['city'];


   
// Connecting to the DB
$servername = "localhost";
$username = "root";
$password = "";
$database = "Prince_24";
// Creating a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// if connection was not successful
if (!$conn){
    die("Failed to connect". mysqli_connect_error());
}else{
    echo "Connection was successful";
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Prince_24";

// I am Creating a connection here with MySQL.
$conn = mysqli_connect($servername, $username, $password, $dbname);

// I am Checking connection here. 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

// SQL query to creating a table in (School) database.
$sql = "CREATE TABLE information (
name VARCHAR(30) NOT NULL,
contact int(40),NOT NULL
city VARCHAR(10) ,NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table information created successfully";
} else {
  echo "Error! creating table: " . mysqli_error($conn);
}



//submit data to DB
// Sql query
$sql = "INSERT INTO `Information` (`name`, `contact`,`city`) VALUES ('$name', '$contact', '$city')";
$result = mysqli_query($conn, $sql);
if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Successfully Added!</strong>Your details has been added successfully.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
}
else{
    echo "Your data was not inserted successfully because". mysqli_error($conn);
}
}

?>
<div class="container mt-4">
    <h1>Please enter your details</h1>
<form action="Completeform.php" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
  </div>
  <div class="form-group">
    <label for="contact">Phoneno</label>
    <input type="text" name="contact" class="form-control" id="contact">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" name="city" class="form-control" id="city">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <!--ptional JavaScript-->
    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
