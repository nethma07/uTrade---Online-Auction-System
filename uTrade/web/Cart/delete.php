
<?php
    include "../conn/conn.php";
?>

<?php

    if(isset($_GET['deleteid']))
    {
        $cid=$_GET['deleteid'];
        $deletecareer="DELETE FROM `Cart` WHERE `CartID`='$cid'";
        
        $result=mysqli_query($conn,$deletecareer);
        if($result){
            header("Location:cart.php");
        }
    }

?>