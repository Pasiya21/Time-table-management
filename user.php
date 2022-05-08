<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $buildingname=$_POST['name'];
    $roomname=$_POST['room'];
    $roomtype=$_POST['roomtype'];
    $capacity=$_POST['capacity'];

    $sql ="insert into `locations` (buildingname,roomname,roomtype,capacity) 
    values('$buildingname','$roomname','$roomtype','$capacity')";

    $result=mysqli_query($con,$sql); 
    if($result){
       // echo "Data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con)); 
    }

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud operations</title>
    
  </head>
  <body>
  <div class="mainbluesurface" id="mainbluesurface">
    <div class="container my-5">
    <h1 style="text-align:center;">  Add location </h1>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Building Name</label>
    <input type="text" class="form-control"
    placeholder="Enter the building name"name="name"autocomplete="off">
  </div><br>

  <div class="form-group">
    <label>Room Name</label>
    <input type="room" class="form-control"
    placeholder="Enter the room name"name="room"autocomplete="off">
  </div><br>

  <div class="form-group">
    <label>Room Type</label>
    <input type="room" class="form-control"
    placeholder="Enter the room name"name="roomtype"autocomplete="off">
  </div> <br>

<div class="form-group">

    <label>Capacity</label>
    <input type="room" class="form-control"
    placeholder="Enter the amount of students"name="capacity"autocomplete="off">
  </div><br>

  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>  

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