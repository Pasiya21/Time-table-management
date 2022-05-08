<?php
include 'connect2.php'; ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud operation2</title>
   

</head>
<body>
<div class="mainbluesurface" id="mainbluesurface">
<div class="container ">
<button class="btn btn-primary my-5"><a href="user2.php"class="text-light">Add room</a>

</button>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Lecturer</th>
      <th scope="col">Second Lecturer</th>
      <th scope="col">Subject Code</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Group ID</th>      
      <th scope="col">Room</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

<?php

$sql="Select * from `room`";
$result=mysqli_query($con,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $lecturer1=$row['lecturer1'];
    $lecturer2=$row['lecturer2'];
    $subcode=$row['subcode'];
    $subname=$row['subname'];
    $groupid=$row['groupid']; 
    $room=$row['room'];
    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$lecturer1.'</td>
    <td>'.$lecturer2.'</td>
    <td>'.$subcode.'</td>
    <td>'.$subname.'</td>
    <td>'.$groupid.'</td>
    <td>'.$room.'</td>
     
    <td>
            <button class="btn btn-primary"><a href="update2.php?updateid='.$id.'"
            class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete2.php?deleteid='.$id.' "
            class="text-light">Delete</a></button>
            </td>
  </tr>';
  }


}




?>
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
  </tbody>
</table>
</body>
</html>