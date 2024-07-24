<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $ItemID=$_GET['deleteid'];

    $sql="delete from `item` where ItemID=$ItemID";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }

}

?>

