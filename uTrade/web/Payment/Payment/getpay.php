<?php
    // start the session
    session_start();
    include "../../conn/conn.php";

    $tot_payment = $_SESSION['Total_Price'];
    $BidderId = $_SESSION['bidder_id'];

    echo "$BidderId";
?> 
<br>
<?php
    $fname=mysqli_real_escape_String($conn,$_POST['name']);
    $email=mysqli_real_escape_String($conn,$_POST['email']);
    $telephone=mysqli_real_escape_String($conn,$_POST['phone']);
    $address=mysqli_real_escape_String($conn,$_POST['address']);
    $city=mysqli_real_escape_String($conn,$_POST['city']);
    $country=mysqli_real_escape_String($conn,$_POST['state']);
    $zcode=mysqli_real_escape_String($conn,$_POST['zip']);
    $method=mysqli_real_escape_String($conn,$_POST['payment_option']);

    $date="2023-02-04";

    $faddress=$address."-".$city."-".$country."-".$zcode;

     
    $insert="INSERT INTO `payment`( `Amount`, `Payment_Date`, `Method`, `Address`,`BidderID`) VALUES ('$tot_payment','$date','$method','$faddress','$BidderId')";

    $result= mysqli_query($conn, $insert);



    echo "Data Sucessfull";
    echo $BidderId ;

    if($result){

        $del = "DELETE FROM `Cart` WHERE `BidderID`='$BidderId'"; 
        $result2 = mysqli_query($conn, $del);

        if ($result2) 
        {
            echo "deleteSuc";
            header("Location:sucesscard.php");
        }else{
            echo "Error";
        }
    }
?>



