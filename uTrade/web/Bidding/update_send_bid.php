<?php
  include "../conn/conn.php";
  
  session_start();

  $BidderId=$_SESSION['bidder_id'];

?>

<?php

    $bid=mysqli_real_escape_String($conn,$_POST['bid']);
    $p_id=mysqli_real_escape_String($conn,$_POST['p_id']);

    echo $bid;

    $insert="UPDATE `Bidding` SET `Bid_Price`='$bid' WHERE `BidID`='$p_id'";

    if(mysqli_query($conn,$insert))
        {
            echo "Data Sucessfull";
            header("Location:update.php");
        }
    else
        {
            echo "Error";    
        }

?>




