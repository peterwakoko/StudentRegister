<?php
include('connection.php');


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