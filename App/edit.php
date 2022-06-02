<?php
include('connection.php');

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

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link  rel="stylesheet" href="style.css">
   <title>register</title>
</head>
<body>
<form class="form-horizontal" action="update.php" method="post">
<!-- <div style="text-align: center; padding: 10px">
   ID: <input type="text" name="id" required value="<?php echo $id ?>"> 
</div> -->

<div style="text-align: center; padding: 10px" class="form-group">
 <label class="control-label col-sm-2" for="sNo">ID: </label>
 <div class="col-sm-10">
 <input type="text" name="id" required class="form-control input-sm"  value="<?php echo $id ?>"> 
 </div>
</div>


<!-- <div style="text-align: center; padding: 10px">
   Student No: <input type="text" name="sNo" required value="<?php echo $sNo ?>"> 
</div> -->

<div style="text-align: center; padding: 10px" class="form-group">
<label class="control-label col-sm-2" for="sNo">Student No:</label>
<div class="col-sm-10">
<input type="text" name="sNo" required class="form-control input-sm" id="sNo" value="<?php echo $sNo ?>"> 
</div>
</div>

<!-- <div style="text-align: center; padding: 10px">
Registration No: <input type="text" name="regNo" required value="<?php echo $regNo ?>" >
</div> -->

<div style="text-align: center; padding: 10px" class="form-group">
<label class="control-label col-sm-2" for="regNo">Registration No: </label>
<div class="col-sm-10">
<input type="text" name="regNo" required class="form-control input-sm" id="regNo" value="<?php echo $regNo ?>">
</div>
</div>

<!-- <div style="text-align: center; padding: 10px">
First Name: <input type="text" name="fName" required value="<?php echo $fName ?>">
</div> -->

<div style="text-align: center; padding: 10px" class="form-group">
<label class="control-label col-sm-2" for="fname">First Name:</label>
<div class="col-sm-10">
<input type="text" name="fName" required class="form-control input-sm" id="fname" value="<?php echo $fName ?>">
</div>
</div>

<!-- <div style="text-align: center; padding: 10px">
Last Name: <input type="text" name="lName" required value="<?php echo $lName ?>">
</div> -->

<div style="text-align: center; padding: 10px" class="form-group">
<label class="control-label col-sm-2" for="lname">Last Name:</label>
<div class="col-sm-10">
<input type="text" name="lName" required class="form-control input-sm" id="lname"value="<?php echo $lName ?>">
</div>
</div>


<!-- <div style="text-align: center; padding: 10px">
Email Address: <input type="text" name="emailAddress" required value="<?php echo $emailAddress ?>">
</div> -->

<div style="text-align: center; padding: 10px" class="form-group">
<label class="control-label col-sm-2" for="email">Email:</label>
<div class="col-sm-10">
 <input type="text" name="emailAddress" required  class="form-control input-sm" id="email" value="<?php echo $emailAddress ?>">
</div>
</div>

<!-- <div style="text-align: center; padding: 10px">
   <button type="submit" name="update">Update</button>
  </div> -->

  <div style="text-align: center; padding: 10px" class="form-group">
<div class="col-sm-offset-2 col-sm-10">
   <button type="submit" name="update" class="btn btn-default" id="btn">Update</button>
</div>
  </div>

 </form>
</body>
</html>

