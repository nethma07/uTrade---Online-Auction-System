<?php
    include "../conn/conn.php";
?>
  
<?php

    if(isset($_GET['addid']))
    {
        $cid=$_GET['addid'];

        $deletecareer="SELECT * FROM `Bidding` WHERE `BidID`='$cid'";
        
        $result=mysqli_query($conn,$deletecareer);
    
        if($result)
        {
        // echo "Select Ok";
        }
?>

<?php
        while($row=mysqli_fetch_assoc($result))
        {
            $BidderID = $row['BidID'];
            $First_Name = $row['ItemID'];
            $Last_Name = $row['BidderID'];
            $Password = $row['Bid_Price']; 
        }
    }

    $max="INSERT INTO `Cart`(`BidderID`, `ItemID`, `BidID`, `Bid_Price`) VALUES ('$Last_Name','$First_Name','$BidderID','$Password')";
    $result1 = mysqli_query($conn, $max);

    if ($result1 ) 
    {
        $del="DELETE FROM `Bidding` WHERE `BidID`='$BidderID'";
        $result2 = mysqli_query($conn, $del);

        if ($result2) 
        {
            header("Location: bidding_table.php");
        }

    }
 
?>
