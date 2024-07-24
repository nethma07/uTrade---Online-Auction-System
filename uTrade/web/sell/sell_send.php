<?php
 
   
  session_start();

  $BidderId=$_SESSION['userid'];

  
  $_SESSION['bidder_id'] = $BidderId;
?>



<?php
	include "conn.php";



			
			$ItemName = $_POST['ItemName'];
			$Description = $_POST['Description'];
			$SBP = $_POST['SBP'];
			$End_Date = $_POST['End_Date'];
			$Image = $_POST['Image'];
			$ItemType = $_POST['ItemType'];

			echo $ItemType;
			echo $ItemName;
			
	
			$sql = "INSERT INTO `item`(`Item_Name`, `Description`, `SBP`, `End_Date`, `SellerID`, `Image`, `Type`) VALUES ('$ItemName','$Description','$SBP','$End_Date','$BidderId','$Image','$ItemType')";

			$result=mysqli_query($conn,$sql);
			if($result){
				echo "suc";
				header('location:..\sellerItem\sellerItem.php');
			}else{
				echo "no";
			}

?>