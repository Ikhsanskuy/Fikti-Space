<?php
//windows
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "fspace";

//mac
$servername = "localhost";
$username = "root";
$password = "root";
$database = "fspace";


// $servername = "localhost";
// $username = "bemfikti_oprec2";
// $password = "fachrilfahril";
// $database = "bemfikti_oprecfenom";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
