<?php
 
   
  session_start();

  $BidderId=$_SESSION['userid'];

  
  $_SESSION['bidder_id'] = $BidderId;
?>







<html>
  <head>
  <style>
 table {
  margin-left: auto;
  margin-right: auto;
  border-collapse: collapse;
  width: 100%;
  background-color: whitesmoke;
}

th, td {
  padding: 10px;
  text-align: center;
  border: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
  color: #333;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #e1e1e1;
}
a{
  color: white;
  text-decoration: none;
}
#delete {
  background-color: lightcoral;
  color: white;
  border: none;
  padding: 5px 10px;
  text-decoration: none;
  cursor: pointer;
}

#delete:hover {
  background-color: red;
}

table caption {
  font-size: 18px;
  font-weight: bold;
  color: #333;
  padding: 10px;
  text-align: left;
  background-color: #fafafa;
  border-bottom: 2px solid #ddd;
}
body {
  background-color: lightblue;
}
</style>
    <title>Manage Item</title>
  </head>
  <body>
  <?php
   include '../Library/navigation_bar.php';
?>  



  <a href="../sell/sell.php"><button style="background-color: green; color: white;" id="add">Add Item</button></a></td>
    <h2 style="text-align: center; font-size: 30px;">Manage Your Item</h2>    
  </body>
</html>

<?php
include "conn.php";
?>
<main>
<table style="margin-left: auto; margin-right: auto;" border ="2" >

  <b>
    <div style="padding: 20px;">
    <tr style="text-align: center;">
    <td>Item_Id</td>
    <td>Item_Name</td>
    <td>Description</td>
    <td>Price</td>
    <td>End Date</td>
    <td>SellerID</td>
    <td>Image</td> 
    <td>Item_type</td>
    
   </tr>
  </div>
  </b>
</main>
  <tbody>
  
<?php

  // Retrieve data from the database
$query = "SELECT * FROM `item` WHERE `SellerID`='$BidderId'";
$result = mysqli_query($conn, $query);

// Populate the HTML template with data
while ($row = mysqli_fetch_assoc($result)) {
 
        $ItemID = $row['ItemID'];
        $ItemName = $row['Item_Name'];
        $Description = $row['Description'];	
        $StartBid = $row['SBP'];
        $End_Date= $row['End_Date'];	
        $SellerID= $row['SellerID'];
        $image= $row['Image'];
        $ItemType = $row['Type'];

  ?>
    <tr>
       
       <td><?php echo "$ItemID"?></td>
       <td><?php echo "$ItemName"?></td>
       <td><?php echo "$Description"?></td>
       <td><?php echo "$StartBid"?></td>
       <td><?php echo "$End_Date"?></td>
       <td><?php echo "$SellerID"?></td>
       <td> <img width="100px" src="<?php echo "$image"?>" alt="" > </td>
       <td><?php echo "$ItemType"?></td>

       <td><a href="#"><button style="background-color: red; color: white;" id="delete"><a href="delete.php? deleteid=<?php echo $ItemID; ?>">Remove Item</button></a></td>

    </tr>

<?php
}?>

</tbody>
</table>