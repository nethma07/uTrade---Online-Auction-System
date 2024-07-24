<?php
include 'connect.php';?>

<!DOCTYPE html>
<html>
  <head>
    <title>item table</title>
    <link rel="stylesheet" href="table.css" />
  </head>
  <body>
    <div class="button">
      <button type="submit"><a href="items.php">Add item</a></button>
    </div>

    <table class="table">
      <thead>
      <tr>
        <th scope="col">Item ID</th>
        <th scope="col">Description</th>
        <th scope="col">SBP</th>
        <th scope="col">End Date</th>
        <th scope="col">Seller ID</th>
        <th scope="col">Image</th>
        <th scope="col">Type</th>
        <th scope="col">Operations</th>
      </tr>
      <tbody>
      <?php
    
    $sql="Select * from `item`";
    $result=mysqli_query($conn,$sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
        $ItemID=$row['ItemID'];
        $Description=$row['Description'];
        $SBP=$row['SBP'];
        $End_Date=$row['End_Date'];
        $SellerID=$row['SellerID'];
        $Image=$row['Image'];
        $Type=$row['Type'];
        echo ' <tr>
        <th scope="row">'.$ItemID.'</th>
        <td>'.$Description.'</td>
        <td>'.$SBP.'</td>
        <td>'.$End_Date.'</td>
        <td>'.$SellerID.'</td>
        <td>'.'<img width="100px" src="'.$Image.'" alt="">'.'</td>
        <td>'.$Type.'</td>
        <td>
        <button><a href="update.php?updateid='.$ItemID.'">Update</a></button>
        <button><a href="delete.php?deleteid='.$ItemID.'">delete</a></button>
        </td>
        </tr>';
      }
    }

      ?>

      
  </tbody>
    </table>
  </body>
</html>
