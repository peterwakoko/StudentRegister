<?php
define('DB_SERVER', 'localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','ClassRegister');

$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
 body {
  margin: 30px auto;
  padding: 40px !important;
 }
 </style>
</head>
<body>
<hr>
 <h3 style="text-align: center">Class Form</h3>
 <form action="insert.php" method="post">
 <div style="text-align: center; padding: 10px">
   ID: <input type="text" name="id" required> 
</div>

<div style="text-align: center; padding: 10px">
   Student No: <input type="text" name="sNo" required> 
</div>
<div style="text-align: center; padding: 10px">
Registration No: <input type="text" name="regNo" required>
</div>
<div style="text-align: center; padding: 10px">
First Name: <input type="text" name="fName" required>
</div>
<div style="text-align: center; padding: 10px">
Last Name: <input type="text" name="lName" required>
</div>
<div style="text-align: center; padding: 10px">
Email Address: <input type="text" name="emailAddress" required>
</div>

<div style="text-align: center; padding: 10px">
   <button type="submit" name="submit">Submit</button>
  </div>

 </form>
<hr>
<table>
    <tr>
        <th>ID</th>
        <th>sNo</th>
        <th>regNo</th>
        <th>emailAddress</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php
    $sql = "SELECT * FROM Student";

    $result = mysqli_query($link, $sql);
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $sNo = $row['sNo'];
        $regNo = $row['regNo'];
        $emailAddress = $row['emailAddress'];
?>
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $sNo; ?></td>
        <td><?php echo $regNo; ?></td>
        <td><?php echo $emailAddress; ?></td>
        <td><a href="edit.php?id=<?php echo $id;?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $id;?>">Delete</a></td>
    </tr>

<?php
    }
?>
</table>


</body>
</html>