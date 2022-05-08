<?php
include 'connect.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Crud operation</title>
   

</head>
<body>
<div class="mainbluesurface" id="mainbluesurface">

<div class="container">
<button class="btn btn-primary my-5"><a href="user.php"class="text-light">Add location</a>

</button>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Building name</th>
      <th scope="col">Room name</th>
      <th scope="col">Room type</th>
      <th scope="col">Capacity</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $sql="Select * from `locations`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $buildingname=$row['buildingname'];
            $roomname=$row['roomname'];
            $roomtype=$row['roomtype'];
            $capacity=$row['capacity'];
            echo ' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$buildingname.'</td>
            <td>'.$roomname.'</td>
            <td>'.$roomtype.'</td>
            <td>'.$capacity.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"
            class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.' "
            class="text-light">Delete</a></button>
            </td>
          </tr>';
        }
    }

    ?>
  
     

  </tbody>
</table>

</div>
<style>
        body {
  background-color:	 #0f0f3d;
  font-family: Arial, Helvetica, sans-serif;
  
}

.mainbluesurface {
  background-color: #cccccc;
  height: 800px;
  width: 1429px;
  border-radius: 20px;
  margin-top: 86px;
  margin-left: auto;
  margin-right: auto;
}
</style>
</body>
</html>