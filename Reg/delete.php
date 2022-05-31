<?php
define('DB_SERVER', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','ClassRegister');

$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}

if(isset($_GET['id'])){


  
    $id = $_GET['id'];
    
    $sql = "DELETE FROM Student WHERE id = '$id'";
    
     $result = mysqli_query($link, $sql);
    
    
     if($result){
      echo "successfully deleted.";
     }else{
      echo "failed";
     }
    
     mysqli_close($link);
     
    }
    