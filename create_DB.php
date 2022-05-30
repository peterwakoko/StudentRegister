<?php
define('DB_SERVER', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD','');

$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD);

if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}

$sql = "CREATE DATABASE ClassRegister";

if(mysqli_query($link,$sql)){
    echo "Database created successfully.";
}

else{
    echo "ERROR: Could not execute $sql." . mysqli_error($link);
}

mysqli_close($link);

?>