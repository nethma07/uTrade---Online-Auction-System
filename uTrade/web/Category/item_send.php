<?php
  include "../conn/conn.php";
  
  
  session_start();

  $BidderId=$_SESSION['userid'];

  
  $_SESSION['bidder_id'] = $BidderId;

?>

<?php

  $bid=mysqli_real_escape_String($conn,$_POST['bid']);
  $p_id=mysqli_real_escape_String($conn,$_POST['p_id']);

  echo $bid;

  $insert="INSERT INTO `Bidding`(`ItemID`, `BidderID`, `Bid_Price`) VALUES ('$p_id','$BidderId','$bid')";

  if(mysqli_query($conn,$insert)){
          echo "Data Sucessfull";
          header("Location:category.php");
      }else{
          echo "Error";
          
      }

?>




