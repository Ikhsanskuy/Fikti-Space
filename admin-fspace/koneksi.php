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

$conn    = mysqli_connect($servername, $username, $password, $database) or die("ERROR");

    // if ($con){
    //     echo "ada koneksi ke database";
    // }
