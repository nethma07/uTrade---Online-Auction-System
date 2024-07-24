<?php
  session_start();
?>

<?php
  $_SESSION['username'] = 'John';
  $_SESSION['role'] = 'admin';
?>

<?php
  $username = $_SESSION['username'];
  $role = $_SESSION['role'];

  echo "Username: " . $username; 
  echo "Role: " . $role; 
?>

<tr>
  <td><?php echo "$cart_id"?></td>
  <td><?php echo "$item_id"?></td>
  <td><?php echo "$item_name"?></td>
  <td > <img width="10%" src="<?php echo "$image"?>" alt=""></td>
  <td><?php echo "$description"?></td>
  <td><?php echo "$bid_price"?></td>
  <td><?php echo "$end_date"?></td>
</tr>

         

     