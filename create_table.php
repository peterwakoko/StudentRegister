<?php
define('DB_SERVER', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','ClassRegister');

$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}

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