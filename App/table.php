<?php
include('connection.php');


$sql = "CREATE TABLE Student(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    sNo VARCHAR(20) NOT NULL,
    regNo VARCHAR(35) NOT NULL,
    fName VARCHAR(20) NOT NULL,
    lName VARCHAR(20) NOT NULL,
    emailAddress VARCHAR(255) NOT NULL UNIQUE)";

if(mysqli_query($link,$sql)){
    echo "Table created successfully.";
}

else{
    echo "ERROR: Could not execute $sql." . mysqli_error($link);
}

mysqli_close($link);

?>