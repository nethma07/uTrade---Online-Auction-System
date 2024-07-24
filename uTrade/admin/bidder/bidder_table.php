<html>
  <head>
    <title>Manage Bidders</title>
    <style>
      table {
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
        width: 100%;
      }
      
      th, td {
        font-size: 20px;
        padding: 10px;
        text-align: center;
      }
      
      th {
        background-color: #4287f5;
        color: white;
      }
      
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
      
      tr:hover {
        background-color: #d9d9d9;
      }
      
      #update {
        background-color: #4287f5;
        color: white;
        padding: 5px 10px;
        text-decoration: none;
      }
      
      #delete {
        background-color: #e83f3f;
        color: white;
        padding: 5px 10px;
        text-decoration: none;
      }
      
      h2 {
        text-align: center;
        font-size: 30px;
      }
    </style>
  </head>
  <body>
    <h2>Manage Users</h2>
    <?php include "conn.php"; ?>
    <table border="1">
      <thead>
        <tr>
          <th>Id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Password</th>
          <th>Address</th>
          <th>Telephone</th>
          <th>Email</th>
          <th>Username</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Retrieve data from the database
        $query = "SELECT * FROM `bidder`";
        $result = mysqli_query($conn, $query);

        // Populate the HTML template with data
        while ($row = mysqli_fetch_assoc($result)) {
          $BidderID = $row['BidderID'];
          $First_Name = $row['First_Name'];
          $Last_Name = $row['Last_Name'];
          $Password = $row['Password'];
          $Address = $row['Address'];
          $Telephone = $row['Telephone'];
          $Email = $row['Email'];
          $Username = $row['UserName'];
          ?>
          <tr>
            <td><?php echo $BidderID; ?></td>
            <td><?php echo $First_Name; ?></td>
            <td><?php echo $Last_Name; ?></td>
            <td><?php echo $Password; ?></td>
            <td><?php echo $Address; ?></td>
            <td><?php echo $Telephone; ?></td>
            <td><?php echo $Email; ?></td>
            <td><?php echo $Username; ?></td>
            <td>
              <a href="bidder_edit_form.php?updateid=<?php echo $BidderID; ?>" id="update">Edit</a>
            </td>
            <td>
              <a href="bidder_table_del.php?deleteid=<?php echo $BidderID; ?>" id="delete">Delete</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </body>
</html>

