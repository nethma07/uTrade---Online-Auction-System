<?php
 
  
  session_start();

  $BidderId=$_SESSION['userid'];
  // $_SESSION['userid'] = $row['BidderID'];
  $_SESSION['bidder_id'] = $BidderId;
?>



<?php
    include '../../Library/navigation_bar.php';
?>

<?php
    include "../../conn/conn.php";

   

    // $BidderId = $_SESSION['bidder_id'];
?>

<?php

    if(isset($_GET['payid']))
    {
        $cid=$_GET['payid'];
        $cid= $_SESSION['bidder_id'];

        $sql = "SELECT SUM(Bid_Price) as total FROM Cart WHERE `BidderID`='$cid'";
        $result4 = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result4) > 0) 
        {
            while($row = mysqli_fetch_assoc($result4)) 
            {
                $donprice=$row["total"];

                $_SESSION['Total_Price'] = $donprice;
            }
        } 
        else 
        {
            echo "0 results";
        }
?>

<?php
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="payment.css">
    <script src="payment.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Payment</title>
</head>

<body>
    <div class="container">
        <form action="getpay.php" method="POST">
            <div class="row">
                
                <div class="col">
                    <h3 class="title">Billing Address</h3>
                    <div class="inputBox">
                        <span>Full Name : </span>
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="inputBox">
                        <span>Email : </span>
                        <input type="email" id="email" name="email" placeholder="example@gmail.com " required>
                    </div>
                    <div class="inputBox">
                        <span>Phone Number : </span>
                        <input type="tel" id="phone" name="phone" name="phone" placeholder="+94 xx xxx xxxx" required>
                    </div>
                    <div class="inputBox">
                        <span>Address : </span>
                        <input type="text" id="address" name="address" placeholder="No, Street, Locality" required>
                    </div>
                    <div class="inputBox">
                        <span>City : </span>
                        <input type="text" id="city" name="city" placeholder="City" required>
                    </div>
                    <div class="inputBox">
                        <span>State: </span>
                        <input type="text" id="state" name="state"  placeholder="Country" required>
                    </div>
                    <div class="inputBox">
                        <span>Zip Code : </span>
                        <input type="text" id="zip" name="zip" placeholder="000000" required>
                    </div>
                </div>

                <div class="col">
                    <h3 class="title">Payment</h3>
                    
                    <div class="col1">
                        <div class="card top-card">
                            <i class="fas fa-credit-card card-icon"></i>&nbsp;
                            <div>
                            <h2>Online Payment</h2>
                            <small><p>Online payment enables electronic transfer of funds for internet purchases, providing convenience and security to individuals and businesses worldwide.</p></small>
                            </div>
                            <input type="checkbox" class="pay-checkbox" name="payment_option" value="OP" onclick="handleCheckbox(this)">
                        </div>
                        
                        <div class="card bottom-card">
                            <i class="fas fa-hand-holding-usd card-icon"></i>&nbsp;
                            <div>
                            <h2>Cash On Delivery</h2>
                            <small><p>Cash on Delivery (COD) is a payment method where customers pay in cash upon product delivery, providing convenience and security for offline transactions.</p></small>
                            </div>
                            <input type="checkbox" class="pay-checkbox"  name="payment_option" value="COD" onclick="handleCheckbox(this)">
                        </div>
                    </div>
                
                </div>
            </div>
           
            <center><input type="submit" value="Pay Now"></center>
            
        </form>
    </div>
</body>

</html>

<?php
    include '/Applications/XAMPP/xamppfiles/htdocs/IWT/Library/footer.php';
?>