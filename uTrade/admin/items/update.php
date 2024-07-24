<?php
include 'connect.php';
$ItemID=$_GET['updateid'];
$sql="Select * from `item` where ItemID=$ItemID";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$Description=$row['Description'];
$SBP=$row['SBP'];
$End_Date=$row['End_Date'];
$SellerID=$row['SellerID'];
$Image=$row['Image'];
$Type=$row['Type'];

if(isset($_POST['submit'])){
  $Description=$_POST['Description'];
  $SBP=$_POST['SBP'];
  $End_Date=$_POST['End_Date'];
  $SellerID=$_POST['SellerID'];
  $Image=$_POST['Image'];
  $Type=$_POST['Type'];

  $sql="update `item` set ItemID=$ItemID,Description='$Description',
  SBP='$SBP',End_Date='$End_Date',SellerID=$SellerID,Image='$Image'
  where ItemID=$ItemID";
  $result=mysqli_query($conn,$sql);
  if($result){
    //echo "updated successfully";
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
              autocomplete="off"
              value=<?php echo $Description;?>>
        </div>
        <div class="form-group">
            <label>SBP</label>
            <input
              type="text"
              class="form-control"
              placeholder="Enter SBP..."
              name="SBP"
              autocomplete="off"
              value=<?php echo $SBP;?>>
        </div>
        <div class="form-group">
            <label>End Date</label>
            <input
              type="date"
              class="form-control"
              placeholder="Enter end date..."
              name="End_Date"
              autocomplete="off"
              value=<?php echo $End_Date;?>>
        </div>
        <div class="form-group">
            <label>Seller ID</label>
            <input
              type="text"
              class="form-control"
              placeholder="Enter seller ID..."
              name="SellerID"
              autocomplete="off"
              value=<?php echo $SellerID;?>>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input
              type="text"
              class="form-control"
              placeholder="Enter the image URL..."
              name="Image"
              autocomplete="off"
              value=<?php echo $Image;?>>
        </div>
        <div class="form-group">
            <label>Item Type</label>
            <input
              type="text"
              class="form-control"
              placeholder="Enter the Item Type..."
              name="Type"
              autocomplete="off"
              value=<?php echo $Type;?>>
        </div>
        <div class="button">
            <button type="submit"  name="submit">Update</button>
        </div>
  </body>
</html>
