<?php
include("conn.php");



// session_start();

// if (isset($_SESSION["BidderID"])) {
//     $x = $_SESSION["BidderID"];

    if (isset($_POST['submit'])) {
        $unamd= $_POST['username'];
        $pwd1 = $_POST['password1'];
        $pwd2 = $_POST['password2'];

        if ($pwd1 == $pwd2) {
            $sql = "UPDATE `seller` SET `Password`='$pwd2' WHERE `UserName` ='$unamd' ";
           
            if ($conn->query($sql) === true) {
                header("login.php");
                // echo "Password updated";
                echo "<script>alert(' Password updated'); </script>";
            } else {
                echo "Error: " . $conn->$error;
            }
        }
    } else {
        echo "<script>alert('No matching Password'); </script>";
    }

// } else {
//     if (isset($_POST['submit'])) {
//         $username = $_POST['UserName'];
//         $pwd1 = $_POST['password1'];
//         $pwd2 = $_POST['password2'];

//         $query = "SELECT BidderID FROM bidder WHERE `BidderID`='$BidderId'";
//         $result = $conn->query($query);

//         if ($result->num_rows > 0) {
//             if ($pwd1 == $pwd2) {
//                 $sql = "UPDATE `bidder` SET `Password`='[$pwd2]' WHERE `BidderID` ='$BidderId' ";
//                 if ($conn->query($sql) === true) {
                   
//                     echo "Password updated";
//                 } else {
//                     echo "Error: " . $conn->error;
//                 }
//             } else {
//                 echo "<script>alert('No matching Password'); window.location.href = 'Forgot.html';</script>";
//             }
//         } else {
//             echo "User not found";
//         }
//     }
// }
?>
