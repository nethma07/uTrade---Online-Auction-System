<?php
  include "../conn/conn.php";
  
  session_start();

  $BidderId=$_SESSION['userid'];
  // $_SESSION['userid'] = $row['BidderID'];
  $_SESSION['bidder_id'] = $BidderId;
?>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .body{
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 25px;
      height: auto;
      background: url(../1.png);
      padding-bottom: 70px;
  }

  .container {
    padding: 4em;
    width:100%;
  }

  .card {
    width: 30%;
    border-radius: 16px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    padding: 3em 2em;
    transform-style: preserve-3d;
    float: left;
    margin: 10px;
    background-color: white;
  }

  .body img {
    top: 0;
    width: 75%;
    margin-bottom:5%;
  }

  .name {
    font-size: 28px;
    margin: 1.2em 0 0.5em;
    transition: transform 0.3s ease;
  }

  .price {
  
    margin: 1.2em 0 0.5em;
    transition: transform 0.1s ease;
  }

  .bid{
    font-size: 15px;
    margin: 1.2em 0 0.5em;
    transition: transform 0.1s ease;
  }

  .description {
    margin-top: 0.8em;
    transition: transform 0.3s ease;
  }

  .buy {
    margin-top: 2em;
    width: 100%;
    border: 0;
    padding: 0.6em 0;
    font-weight: 500;
    font-size: 16px;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    border-radius: 50px;
    background-color: #ff9800;
    color: #fff;
    cursor: pointer;
    outline: none;
  }

  .row{
      float:left;
      width:100%;
  }

  .hidden {
        display: none;
      }

</style>
<head>
 <title>Bidding Form</title> 
</head>

<section width="100%">
  <div class="nav" style="width:100%; ">  
    <?php
        include '../Library/navigation_bar.php';
    ?>
  </div>

</section>

<section class="body">

<?php

if(isset($_GET['updateid'])){
    $bid=$_GET['updateid'];
    $query = "SELECT * FROM `Bidding` WHERE `BidID`='$bid'";
    $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) 
        {
          $bid_id = $row['BidID'];
          $item_id = $row['ItemID'];
          $bidder_id = $row['BidderID'];
          $bid_id = $row['BidID'];
          $bid_price = $row['Bid_Price'];

          $query1="SELECT * FROM `Item` WHERE `ItemID`='$item_id'";
          $result1 = mysqli_query($conn, $query1);

          while ($row = mysqli_fetch_assoc($result1)) 
          {
            $item_id = $row['ItemID'];
            $item_name = $row['Item_Name'];
            $image = $row['Image'];
            $it_desc = $row['Description'];
            $seller_id = $row['SellerID'];
            $sbp = $row['SBP'];
            $end_date = $row['End_Date'];
          }

          $query2="SELECT * FROM `Bidding` WHERE `BidID`='$bid_id'";
          $result2 = mysqli_query($conn, $query2);

          while ($row = mysqli_fetch_assoc($result2)) 
          {
            $bid_id = $row['BidID'];
            $item_id = $row['ItemID'];
            $bidder_id = $row['BidderID'];
            $hbp = $row['HBP'];  
          }   
}}
?>

  <div class="card">
    <div class="header">
      <div class="bg"></div>
      <img src="<?php echo "$image"?>" alt="Item Image">
    </div>
    <div class="bottom">
      <h1 class="name"><?php echo "$item_name"?></h1>
      <h3 class="price">RS. <?php echo "$bid_price"?>.00 /=</h3>
      <div class="description"><?php echo "$it_desc"?></div>
      
      <form action="update_send_bid.php" method="POST">
        <input type="text" class="hidden" name="p_id" value="<?php echo "$bid"?>" readonly>
        <center><input class="bid" name="bid" type="text" placeholder="Place New bid here" required></center>
        <input class="buy" type="submit">
      </form>
      </div>
  </div>

</section>

<footer>
  <?php
    include '../Library/footer.php';
  ?>
</footer>












