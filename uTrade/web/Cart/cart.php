<?php
  include "../conn/conn.php";
  
  session_start();

  $BidderId=$_SESSION['userid'];
  // $_SESSION['userid'] = $row['BidderID'];
  $_SESSION['bidder_id'] = $BidderId;
?>

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
      font-size: 0.75rem;
      font-weight: normal;
      margin: 0;
      padding: 0;
    }

    button {
      background-color: #666;
      color: #fff;
    }

    button:hover,
    button:focus {
      background-color: #555;
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
      font-size: 0.75rem;
      margin: 0 auto;
      overflow: hidden;
      padding: 1rem 0;
      width: 960px;
    }

    .basket,
    aside {
      padding: 0 1rem;
      box-sizing: border-box;
    }

    .basket {
      width: 70%;
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

    .price,
    .quantity,
    .subtotal {
      width: 15%;
    }

    .subtotal {
      text-align: right;
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
      padding-left: 4.375rem;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    .basket-product {
      border-bottom: 1px solid #ccc;
      padding: 1rem 0;
      position: relative;
    }

    .product-image {
      width: 35%;
    }

    .product-details {
      width: 65%;
    }

    .product-frame {
      border: 1px solid #aaa;
    }

    .product-details {
      padding: 0 1.5rem;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    .quantity-field {
      background-color: #ccc;
      border: 1px solid #aaa;
      border-radius: 4px;
      font-size: 0.625rem;
      padding: 2px;
      width: 3.75rem;
    }

    .summary {
      background-color: #eee;
      border: 1px solid #aaa;
      padding: 1rem;
      /* position: fixed; */
      width: 250px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    .summary-total-items {
      color: black;
      font-size: 0.875rem;
      text-align: center;
    }

    .summary-subtotal,
    .summary-total {
      border-top: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
      clear: both;
      margin: 1rem 0;
      overflow: hidden;
      padding: 0.5rem 0;
    }

    .subtotal-value,
    .total-value {
      text-align: right;
    }

    .total-title {
      font-weight: bold;
      text-transform: uppercase;
    }

    .checkout-cta {
      display: block;
      float: none;
      font-size: 0.75rem;
      text-align: center;
      text-transform: uppercase;
      padding: 0.625rem 0;
      width: 100%;
    }

    .checkout-cta a { 
      color: white;
    }

    .container {
      display: flex;
      height: auto;
      background-color: rgba(255, 255, 255, 0.9);
      margin-top: 30px;
      margin-bottom: 30px;
    }

  </style>
    
  <title>Cart</title>
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
          <li class="quantity">Quantity</li>
          <li class="subtotal">Subtotal</li>
        </ul>
      </div>

      <?php
        $query = "SELECT * FROM `Cart` WHERE `BidderID`='$BidderId'";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) 
        {
          $cart_id = $row['CartID'];
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
            $description = $row['Description'];
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
            // $hbp = $row['HBP'];
            
          }

      ?>
          
          <div class="basket-product">
              <div class="item">
                <div class="product-image">
                  <img src="<?php echo "$image"?>" alt="Placholder Image 2" class="product-frame" width="120px" height="166px">
                </div>
                <div class="product-details">
                  <h1><strong><span class="item-quantity">0</span> x  <?php echo "$item_name"?></strong></h1>
                  <p><small><?php echo "$description"?></small></p>
                  <p>Product Code - itm-<?php echo "$item_id"?></p>
                </div>
              </div>
              <div class="price"><?php echo "$bid_price"?></div>
                <div class="quantity">
                  <input type="number" value="0" min="0" max="1" class="quantity-field" >
                </div>
                <div class="subtotal">0.00</div>
                <div class="remove" >
                  <button class="btn" id="delete"><a href="delete.php? deleteid=<?php echo $cart_id; ?>">Delete</a></button>
                </div>
              </div>

      <?php
        }
      ?>
      
    </div>
    
    <aside>
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Subtotal</div>
          <div class="subtotal-value final-value" id="basket-subtotal">000.00</div>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total">000.00</div>
        </div>
        <div class="summary-checkout">
          <button class="checkout-cta" id="payment"><a href="../Payment/Payment/payment.php? payid=<?php echo $BidderId; ?>">Go to Secure Checkout</a></button>
        </div>
      </div>
    </aside>

  </main>

<footer>
  <?php
    include '../Library/footer.php';
  ?>
</footer>

</body>

<script>
    
  var fadeTime = 300;

  $('.quantity input').change(function() {
    updateQuantity(this);
  });

  $('.remove button').click(function() {
    removeItem(this);
  });

  $(document).ready(function() {
    updateSumItems();
  });
  
  function recalculateCart(onlyTotal) 
  {
    var subtotal = 0;

    $('.basket-product').each(function() {
      subtotal += parseFloat($(this).children('.subtotal').text());
    });
   
    var total = subtotal;

    if (onlyTotal) {
     
      $('.total-value').fadeOut(fadeTime, function() 
      {
        $('#basket-total').html(total.toFixed(2));
        $('.total-value').fadeIn(fadeTime);
      });
    } 
    else 
      {      
        $('.final-value').fadeOut(fadeTime, function() 
        {
          $('#basket-subtotal').html(subtotal.toFixed(2));
          $('#basket-total').html(total.toFixed(2));
          if (total == 0) {
            $('.checkout-cta').fadeOut(fadeTime);
          } else {
            $('.checkout-cta').fadeIn(fadeTime);
          }
          $('.final-value').fadeIn(fadeTime);
        });
      }
  }

  function updateQuantity(quantityInput)
  {
    var productRow = $(quantityInput).parent().parent();
    var price = parseFloat(productRow.children('.price').text());
    var quantity = $(quantityInput).val();
    var linePrice = price * quantity;

    productRow.children('.subtotal').each(function() {
      $(this).fadeOut(fadeTime, function() {
        $(this).text(linePrice.toFixed(2));
        recalculateCart();
        $(this).fadeIn(fadeTime);
      });
    });

    productRow.find('.item-quantity').text(quantity);
    updateSumItems();
  }

  function updateSumItems() 
  {
    var sumItems = 0;
    $('.quantity input').each(function() {
      sumItems += parseInt($(this).val());
    });
    $('.total-items').text(sumItems);
  }

</script>

</html>