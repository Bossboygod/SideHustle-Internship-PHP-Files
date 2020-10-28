<?php

// Connecting to  database using mysqli method

$serverName = "loacalhost";
$username = "root";
$password = "";
$dbname = "sidehustle";

//Create Connection
$con = mysqli_connect($serverName, $username, $password);

if(mysqli_connect_errno()){
    echo "Connection Failed!";
    exit();
}

    echo "Connection Successful!";

?>