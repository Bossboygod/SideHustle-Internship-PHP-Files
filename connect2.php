<?php

// Connecting to  database using pdo method

$serverName = "loacalhost";
$username = "root";
$password = "";
$dbname = "sidehustle";

//Create Connection
try{
    $con = new PDO ("mysql:host=$serverName; dbname= $dbname" , $username , $password);

    $con -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Successful!";
}

catch (PDOException $e){
    echo "Error in Connection" . $e ->getMessage();
}
?>