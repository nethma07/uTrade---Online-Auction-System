




<?php
include "conn.php";

?>

<?php

if(isset($_GET['deleteid'])){
    $cid=$_GET['deleteid'];
    $deletecareer="DELETE FROM `bidder` WHERE `BidderID`='$cid'";
    
    
    $result=mysqli_query($conn,$deletecareer);
    if($result){
        header("Location:bidder_table.php");
    }
}
?>