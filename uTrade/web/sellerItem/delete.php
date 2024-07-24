<?php
include "conn.php";

if(isset($_GET['deleteid'])){
    $ItemID=$_GET['deleteid'];
    $sql="DELETE FROM `item` WHERE ItemID=$ItemID";
    
    echo "<script>alert('Item Succesfuly Deleted');</script>";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Item Succesfuly Deleted');</script>";
        header('location:sellerItem.php');
    }
}
?>