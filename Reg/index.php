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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Register</title>
    <style>
        td,th{
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
 body {
  margin: 30px auto;
  padding: 40px !important;
 }
 </style>
</head>
<body>
    <div class="container">
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
    <hr>
 <h3 style="text-align: center">Class Form</h3>
 <form class="form-horizontal" action="insert.php" method="post">

 <div style="text-align: center; padding: 10px" class="form-group">
 <label class="control-label col-sm-2" for="sNo">ID: </label>
 <div class="col-sm-10">
 <input type="text" name="id" required class="form-control" placeholder="Enter ID"> 
 </div>
</div>

<div style="text-align: center; padding: 10px" class="form-group">
<label class="control-label col-sm-2" for="sNo">Student No:</label>
<div class="col-sm-10">
<input type="text" name="sNo" required class="form-control" id="sNo" placeholder="Enter Student No"> 
</div>
</div>

<div style="text-align: center; padding: 10px" class="form-group">
<label class="control-label col-sm-2" for="regNo">Registration No: </label>
<div class="col-sm-10">
<input type="text" name="regNo" required class="form-control" id="regNo" placeholder="Enter Registration No">
</div>
</div>

<div style="text-align: center; padding: 10px" class="form-group">
<label class="control-label col-sm-2" for="fname">First Name:</label>
<div class="col-sm-10">
<input type="text" name="fName" required class="form-control" id="fname" placeholder="Enter first name">
</div>
</div>

<div style="text-align: center; padding: 10px" class="form-group">
<label class="control-label col-sm-2" for="lname">Last Name:</label>
<div class="col-sm-10">
<input type="text" name="lName" required class="form-control" id="lname" placeholder="Enter last name">
</div>
</div>

<div style="text-align: center; padding: 10px" class="form-group">
<label class="control-label col-sm-2" for="email">Email:</label>
<div class="col-sm-10">
 <input type="text" name="emailAddress" required  class="form-control" id="email" placeholder="Enter email">
</div>
</div>

<div style="text-align: center; padding: 10px" class="form-group">
<div class="col-sm-offset-2 col-sm-10">
   <button type="submit" name="submit" class="btn btn-default">Submit</button>
</div>
  </div>

 </form>
<hr>



    </div>



</body>
</html>