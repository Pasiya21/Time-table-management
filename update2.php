<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `room` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$lecturer1=$row['lecturer1'];
$lecturer2=$row['lecturer2'];
$subcode=$row['subcode'];
$subname=$row['subname'];
$groupid=$row['groupid'];
$room=$row['room'];

if(isset($_POST['submit'])){
    $lecturer1=$_POST['lname'];
    $lecturer2=$_POST['slname'];
    $subcode=$_POST['subcode'];
    $subname=$_POST['subname'];
    $groupid=$_POST['group'];
    $room=$_POST['room'];
   
    $sql ="update `room` set id=$id,lecturer1='$lecturer1',lecturer2='$lecturer2',subcode='$subcode',subname='$subname',groupid='$groupid',room='$room' where id=$id";

    $result=mysqli_query($con,$sql); 
    if($result){
       // echo "Updated successfully";
        header('location:display2.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud operations</title>
    
  </head>
  <body>
  <div class="mainbluesurface" id="mainbluesurface">
    <div class="head my-5">
    <h1 style="text-align:center;">Update Session Room </h1>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Lecturer Name </label>
    <input type="text" class="form-control"
    placeholder="Enter the lecturer name"name="lname"autocomplete="off"value=<?php
    echo $lecturer1;?>>
  </div><br>

  <div class="form-group">
    <label>Second Lecturer Name</label>
    <input type="room" class="form-control"
    placeholder="Enter the second lecturer name"name="slname"autocomplete="off"value=<?php
    echo $lecturer2;?>>
  </div><br>

  <div class="form-group">
    <label>Sub_Code</label>
    <input type="room" class="form-control"
    placeholder="Enter the sub_code"name="subcode"autocomplete="off"value=<?php
    echo $subcode;?>>
  </div> <br>

<div class="form-group">

    <label>Sub_Name</label>
    <input type="room" class="form-control"
    placeholder="Enter the sub_name"name="subname"autocomplete="off"value=<?php
    echo $subname;?>>
  </div><br>

  <div class="form-group">

    <label>Group_ID</label>
    <input type="room" class="form-control"
    placeholder="Enter the group_id"name="group"autocomplete="off"value=<?php
    echo $groupid;?>>
  </div><br>

  <div class="form-group">

    <label>Room</label>
    <input type="room" class="form-control"
    placeholder="Enter the room"name="room"autocomplete="off"value=<?php
    echo $room;?>>
  </div> <br>
  
 


  <button type="submit" class="btn btn-primary"name="submit">Update</button>
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