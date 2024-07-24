<?php
   include ("connect.php");
   session_start();

    if (isset($_POST['submit'])) {
        $User_Name =$_POST['User_Name'];
        $Password =$_POST['Password'];
      
        if (empty($User_Name)) {
            echo "<script>alert(' username is required');</script>";
            exit;
        } 
        if (empty($Password)) {
            echo "<script>alert(' passwored is required');</script>";
            exit;
        }
      
            $sql = "SELECT User_Name,Password FROM admin WHERE User_Name='$User_Name' AND Password='$Password'";
          
            $result = $conn->query($sql);
           

            if ($result->num_rows>0) {
                while ($row = mysqli_fetch_assoc($result))
                {
                    $User_Name = $row['User_Name'];
                   
                }
                $User_Name="2";
                $_SESSION['Use_rName'] = $User_Name;
                // echo $_SESSION['User_Name'];
                header('location:../adminPanel/adminPanel.php');
              
            }else {
                echo "<script>alert('Wrong username or password');</script>";
                exit;
            }
        }

 ?> 


<!DOCTYPE html>
<html>
<head>
  <title>Admin Login Panel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body> 
  <div class="container">
    <div class="myform">
      <form method="POST">
        <h2>ADMIN LOGIN</h2>
        <input type="text" placeholder="Admin Name" name="User_Name">
        <input type="password" placeholder="Password" name="Password">
        <button type="submit" name="submit">LOGIN</button>
      </form>
    </div>
    <div class="image">
      <img src="image.jpg">
    </div>
  </div>
</body>
</html>