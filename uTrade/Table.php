<?php
include "conn.php";
?>

<head>
  
</head>
<table class="table" border="1">
  <thead>
    <td>id</td>
    <td>name</td>
    <td>Password</td>
  </thead>
  <tbody>
   


<?php
            // Retrieve data from the database
$query = "SELECT * FROM `admin`";
$result = mysqli_query($conn, $query);



// Create an HTML template for the card


// Populate the HTML template with data
while ($row = mysqli_fetch_assoc($result)) {
  $card_title = $row['AdminID'];
  $card_text = $row['User_Name'];
  $card_updated = $row['Password'];


  ?>


    <tr>
       <td><?php echo "$card_title"?></td>
       <td><?php echo "$card_text"?></td>
       <td><?php echo "$card_updated"?></td>

    </tr>

<?php
}?>

</tbody>
</table>