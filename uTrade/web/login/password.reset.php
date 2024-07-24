<?php
include("conn.php");





    if (isset($_POST['submit'])) {
        $unamd= $_POST['username'];
        $pwd1 = $_POST['password1'];
        $pwd2 = $_POST['password2'];

        if ($pwd1 == $pwd2) {
            $sql = "UPDATE `bidder` SET `Password`='$pwd2' WHERE `UserName` ='$unamd' ";
           
            if ($conn->query($sql) === true) {
                header("Location:logindb.php");
                echo "Password updated";
            } else {
                echo "Error: " . $conn->$error;
            }
        }
    } else {
        echo "<script>alert('No matching Password'); </script>";
    }


?>
