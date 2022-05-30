<?php
define('DB_SERVER', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','ClassRegister');

$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $sNo = $_POST['sNo'];
    $regNo = $_POST['regNo'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $emailAddress = $_POST['emailAddress'];

    $sql = "INSERT INTO Student VALUES('$id','$sNo','$regNo','$fName','$lName','$emailAddress')";

    $result = mysqli_query($link,$sql);
    if($result){
        echo "Successfully inserted.";
    }else{
        echo "Failed to insert.";
    }
}

mysqli_close($link);
?>