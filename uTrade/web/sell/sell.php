<?php
 
   
  session_start();

  $BidderId=$_SESSION['userid'];

  echo $BidderId;
  $_SESSION['bidder_id'] = $BidderId;
?>



<!DOCTYPE html>
<html>
<head>
	<title>Sell Item Form</title>
	
	<link rel="stylesheet" href="sell.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



	
    <?php
   include '..\Library\navigation_bar.php';
?>

	<body>

		<form method="post" action="sell_send.php">
			<div class="productInfo">
				<h2>PRODUCT INFORMATION</h2>

                <div class="conta">Category of the product</div>
				<select name="ItemType">
                    <option>Select </option>
                    <option value="fun">Furniture</option>
                    <option value="vehi">Vehicles</option>
                    <option value="watch">Watches</option>
                    <option value="atiq">Antique</option>
                    <option value="jew">Jualery</option>
                    <option value="elec">Electronic</option>
                </select>
               
				<div class="conta">ItemName</div>
				<textarea name="ItemName" placeholder="ItemName" rows="4" cols="68" style=" border: none;
					border-bottom: 1px solid #fff;
					background: white;
					outline: none;
					margin-right: 40px;
					margin-bottom:20px;
					color: #000;
					font-size: 16px;
					border-radius:5px;
					box-shadow: 0 3px 10px rgba(0,0,0,0.3);"></textarea>
				<div class="conta">Description</div>
				<textarea name="Description" placeholder="Description" rows="8" cols="68" style=" border: none;
					border-bottom: 1px solid #fff;
					background: white;
					outline: none;
					margin-right: 40px;
					margin-bottom:20px;
					color: #000;
					font-size: 16px;
					border-radius:5px;
					box-shadow: 0 3px 10px rgba(0,0,0);"></textarea>
			
				<div class="conta">Bid price</div>
				<input type="text" name="SBP" placeholder="Price" >

                <div class="conta">Bid End Date</div>
				<input type="date" name="End_Date" placeholder="End Date" >
                
				<div class="conta">Attach the land images(1 images)</div>
				<input type="text" name="Image" multiple>
                
				<!-- <input type="submit" value="Submit"> -->
                <input type='Submit' name='Submit' value='Submit' style="width:610px; height:30px;margin-bottom:10px; font-size:20px;background-color: rgb(199, 163, 110);">
				</a>
			</div>
		</form>



	</body>
</html>