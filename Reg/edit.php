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
    
    $sql = "SELECT * FROM Student WHERE id = '$id'";
    
     $result = mysqli_query($link, $sql);
     while($row = mysqli_fetch_array($result)){

        $id = $row['id'];
        $sNo = $row['sNo'];
        $regNo = $row['regNo'];
        $fName = $row['fName'];
        $lName = $row['lName'];
        $emailAddress = $row['emailAddress'];
       }

}
?>

<form action="update.php" method="post">
<div style="text-align: center; padding: 10px">
   ID: <input type="text" name="id" required value="<?php echo $id ?>"> 
</div>

<div style="text-align: center; padding: 10px">
   Student No: <input type="text" name="sNo" required value="<?php echo $sNo ?>"> 
</div>
<div style="text-align: center; padding: 10px">
Registration No: <input type="text" name="regNo" required value="<?php echo $regNo ?>" >
</div>
<div style="text-align: center; padding: 10px">
First Name: <input type="text" name="fName" required value="<?php echo $fName ?>">
</div>
<div style="text-align: center; padding: 10px">
Last Name: <input type="text" name="lName" required value="<?php echo $lName ?>">
</div>
<div style="text-align: center; padding: 10px">
Email Address: <input type="text" name="emailAddress" required value="<?php echo $emailAddress ?>">
</div>

<div style="text-align: center; padding: 10px">
   <button type="submit" name="update">Update</button>
  </div>

 </form>