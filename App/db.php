<?php
include('connection.php');


$sql = "CREATE DATABASE ClassRegister";

if(mysqli_query($link,$sql)){
    echo "Database created successfully.";
}

else{
    echo "ERROR: Could not execute $sql." . mysqli_error($link);
}

mysqli_close($link);

?>