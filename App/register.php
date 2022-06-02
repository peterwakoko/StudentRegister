<?php
 include ('connection.php') ;
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link  rel="stylesheet" href="style.css">

    <title>Register</title>
    <style>
        td,th{
            text-align: left;
            padding: 8px;
        }
       
 tr:nth-child(even){
     background-color: #dddddd;
 }
 </style>
</head>
<body>
    <div class="container">
 <h3 style="text-align: center" id="title">Fill in the form to be able to see your details recorded below!</h3>
 <form class="form-horizontal" action="insert.php" method="post">

 <div style="text-align: center; padding: 10px" class="form-group">
 <label class="control-label col-sm-2" for="id">ID: </label>
 <div class="col-sm-10">
 <input type="text" name="id" required class="form-control input-sm" placeholder="Enter ID" id="id"> 
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
   <button type="submit" name="submit" class="btn btn-default" id="btn">Submit</button>
</div>
  </div>

 </form>

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
        <td><a href="edit.php?id=<?php echo $id;?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
        <td><a href="delete.php?id=<?php echo $id;?>"><i class="fa-solid fa-trash-can"></i></a></td>
    </tr>

<?php
    }
?>
</table>
    </div>



</body>
</html>