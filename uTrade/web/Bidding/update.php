<?php
  include "../conn/conn.php";
  
  session_start();

  $BidderId=$_SESSION['userid'];
  // $_SESSION['userid'] = $row['BidderID'];
  $_SESSION['bidder_id'] = $BidderId;
?>

<!DOCTYPE html>

<html>

<head>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    @charset "utf-8";

    .body {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 25px;
      height: auto;
      background: url(../1.png);
      color: black;
    }

    strong {
      font-weight: bold;
    }

    p {
      margin: 0.75rem 0 0;
    }

    h1 {
      font-size: 1rem;
      font-weight: normal;
      margin: 0;
      padding: 0;
    }

    .container img,
    .basket-labels,
    .basket-product {
      width: 100%;
    }

    input,
    button,
    .basket,
    .basket-labels,
    .item,
    .price,
    .quantity,
    .subtotal,
    .basket-product,
    .product-image,
    .product-details {
      float: left;
    }

    .price:before,
    .subtotal:before,
    .subtotal-value:before,
    .total-value:before,
    .promo-value:before {
      content: 'Rs.';
    }

    .hide {
      display: none;
    }

    main {
      clear: both;
      font-size: 0.9rem;
      margin: 0 auto;
      overflow: hidden;
      padding: 1rem 0;
      width: 960px;
    }

    .basket,
    aside {
      padding: 0 1rem;
    }

    .basket {
      width: auto;
    }

    .basket-labels {
      border-top: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
      margin-top: 1.625rem;
    }

    ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    li {
      color: black;
      font-weight: bold;
      display: inline-block;
      padding: 0.625rem 0;
    }

    li.price:before,
    li.subtotal:before {
      content: '';
    }

    .item {
      width: 55%;
    }

    .remove {
      bottom: 1.125rem;
      float: right;
      position: absolute;
      right: 0;
      text-align: right;
      width: 45%;
    }

    .remove button {
      background-color: transparent;
      color: #777;
      float: none;
      text-decoration: underline;
      text-transform: uppercase;
    }

    .item-heading {
      padding-left: 5rem;
    }

    .basket-product {
      border-bottom: 1px solid #ccc;
      padding: 1rem 0;
      position: relative;
    }

    .product-image {
      width: 30%;
    }

    .product-details {
      width: 65%;
    }

    .product-frame {
      border: 1px solid #aaa;
    }

    .product-details {
      padding: 2rem 1.5rem;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    .basket-product .price {
        padding-left: 7%;
        padding-top: 5%
    }

    .container {
      display: flex;
      height: auto;
      background-color: rgba(255, 255, 255, 0.9);
      margin-top:30px;
      margin-bottom:30px;
    }

  </style>
    
  <title>Bidding</title>
</head>

<body>

<section width="100%">
  <div class="nav" style="width:100%; ">  
    <?php
      include '../Library/navigation_bar.php';
    ?>
  </div>
</section>


  <main class="container">
    
    <div class="basket">
      
      <div class="basket-labels">
        <ul>
          <li class="item item-heading">Item</li>
          <li class="price">Price</li>
        </ul>
      </div>

      <?php
        $query = "SELECT * FROM `Bidding` WHERE `BidderID`='$BidderId'";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) 
        {
          $bid_id = $row['BidID'];
          $item_id = $row['ItemID'];
          $bidder_id = $row['BidderID'];
          $bid_price = $row['Bid_Price'];

          $query1="SELECT * FROM `Item` WHERE `ItemID`='$item_id'";
          $result1 = mysqli_query($conn, $query1);

          while ($row = mysqli_fetch_assoc($result1)) 
          {
            $item_id = $row['ItemID'];
            $item_name = $row['Item_Name'];
            $image = $row['Image'];
            $description = $row['Description'];
            $seller_id = $row['SellerID'];
            $sbp = $row['SBP'];
            $end_date = $row['End_Date'];
          }
      ?>
          
        <div class="basket-product">
            <div class="item">
                <div class="product-image">
                  <img src="<?php echo "$image"?>" alt="Placholder Image 2" class="product-frame" width="120px" height="166px">
                </div>
                <div class="product-details">
                  <h1><strong><span class="item-quantity">1</span> x  <?php echo "$item_name"?></strong></h1>
                  <p><small><?php echo "$description"?></small></p>
                  <p>Product Code - itm-<?php echo "$item_id"?></p>
                </div>
            </div>
            <div class="price"><?php echo "$bid_price"?></div>
            <div class="remove" >
                <button class="btn" id="update"><a href="bidding_edit_form.php? updateid=<?php echo $bid_id ?>"> update new bid </a></button>
            </div>
        </div>

      <?php
        }
      ?>
      
    </div>

  </main>

</body>


<footer>
  <?php
    include '../Library/footer.php';
  ?>
</footer>

</html>

