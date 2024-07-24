
<?php

session_start();
include "../../conn/conn.php";



$BidderIds = $_SESSION['bidder_ids'];

echo $BidderID;


$del="DELETE FROM `Cart` WHERE `BidderID`='$BidderIDs'";
        $result2 = mysqli_query($conn, $del);

        if ($result2) 
        {
            //header("Location:sucesscard.php");
        }


?>