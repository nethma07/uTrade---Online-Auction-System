<?php
include 'connect.php';
if(isset($_POST['submit'])){

  $Description=$_POST['Description'];
  $SBP=$_POST['SBP'];
  $End_Date=$_POST['End_Date'];
  $SellerID=$_POST['SellerID'];
  $Image=$_POST['Image'];
  $Type=$_POST['Type'];

  $sql="insert into `item` (Description,SBP,End_Date,SellerID,Image,Type)
  values('$Description','$SBP','$End_Date','$SellerID','$Image','$Type')";
  $result=mysqli_query($conn,$sql);
  if($result){
    //echo "Data inserted successfully";
    header('location:display.php');
  }else{
    die(mysqli_error($conn));
  }
}
?>




<!DOCTYPE html>
<html>
  <head>
    <title>Items form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <form method="post">
        <div class="form-group">
            <label>Description</label>
            <input
              type="text"
              class="form-control"
              placeholder="Enter description..."
              name="Description"
              autocomplete="off"/>
        </div>
        <div class="form-group">
            <label>SBP</label>
            <input
              type="text"
              class="form-control"
              placeholder="Enter SBP..."
              name="SBP"
              autocomplete="off"/>
        </div>
        <div class="form-group">
            <label>End Date</label>
            <input
              type="date"
              class="form-control"
              placeholder="Enter end date..."
              name="End_Date"
              autocomplete="off"/>
        </div>
        <div class="form-group">
            <label>Seller ID</label>
            <input
              type="text"
              class="form-control"
              placeholder="Enter seller ID..."
              name="SellerID"
              autocomplete="off"/>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input
              type="text"
              class="form-control"
              placeholder="Enter the image URL..."
              name="Image"
              autocomplete="off"/>
        </div>
        <div class="form-group">
            <label>Item Type</label>
            <input
              type="text"
              class="form-control"
              placeholder="Enter the Item Type..."
              name="Type"
              autocomplete="off"/>
        </div>
        <div class="button">
            <button type="submit"  name="submit">submit</button>
        </div>
  </body>
</html>
