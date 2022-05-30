<?php
define('DB_SERVER', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD','');

$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD);

if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}

echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

mysqli_close($link);
?>