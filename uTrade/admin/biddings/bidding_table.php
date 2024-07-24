<?php
  include "../conn/conn.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>All Biddings</title>
  <style>
    body {
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    h2 {
      text-align: center;
      font-size: 30px;
      color: #333;
      margin-top: 20px;
    }

    table {
      margin: 20px auto;
      border-collapse: collapse;
      width: 80%;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color: #4CAF50;
      color: #fff;
      text-align: center;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    .view-button {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 8px 12px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      cursor: pointer;
      border-radius: 4px;
    }

    .view-button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h2>All Biddings</h2>   
  <table border="4">
    <tr style="text-align: center;">
      <th>Id</th>
      <th>Item ID</th>
      <th>Bidder ID</th>
      <th>Bid Price</th>
      <th>View</th>
    </tr>
  
    <?php
      $query = "SELECT * FROM `Bidding`";
      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        $BidderID = $row['BidID'];
        $First_Name = $row['ItemID'];
        $Last_Name = $row['BidderID'];
        $Password = $row['Bid_Price'];
    ?>
    <tr>
      <td><?php echo $BidderID; ?></td>
      <td><?php echo $First_Name; ?></td>
      <td><?php echo $Last_Name; ?></td>
      <td><?php echo $Password; ?></td>
      <td>
        <a href="bidding_show_table.php?showid=<?php echo $First_Name; ?>">
          <button class="view-button">View</button>
        </a>
      </td>
    </tr>
    <?php
      }
    ?>
  </table>
</body>
</html>
