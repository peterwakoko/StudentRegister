<?php
include('connection.php');



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
    ?>