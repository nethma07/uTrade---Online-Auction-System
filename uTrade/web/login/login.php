   <?php
   include ("conn.php");
   session_start();

    if (isset($_POST['submit'])) {
        $UserName =$_POST['UserName'];
        $Password =$_POST['Password'];
      
        if (empty($UserName)) {
            echo "<script>alert(' username is required');</script>";
            exit;
        } 
        if (empty($Password)) {
            echo "<script>alert(' passwored is required');</script>";
            exit;
        }
      
            $sql = "SELECT UserName,Password FROM bidder WHERE UserName='$UserName' AND Password='$Password'";
          
            $result = $conn->query($sql);
           

            if ($result->num_rows>0) {
                while ($row = mysqli_fetch_assoc($result))
                {
                    $UserName = $row['UserName'];
                   
                }
                // $UserName="2";
                $_SESSION['UserName'] = $UserName;
                header('location: ../sell/sell.php');
              
            }else {
                echo "<script>alert('Wrong username or password');</script>";
                header('location: ../login/login.php');
                // exit;
            }
        }

 ?> 

<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
       
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet"  href="footer.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <body>

            <header>
                <nav class="navigation">
                    <a href="#">Home</a>
                    <a href="#">About us</a>
                    <a href="#">contact us</a>
                </nav>
            </header>

            <div class="loginbox">
                <img src ="image/user.jpg" class="user">
                <h1>Bidder Login</h1> 
                     
                <form method="POST">
                    <p>Username</p>
                    <input type="text" name="UserName" placeholder="Enter Username Here">
                    <p>Password</p>
                    <input type="password" name="Password" placeholder="Enter password ">

                    <input type="Submit" name="submit" value="Login">

                    <p>Are you<a href="sellerLogin.php">  Seller  </a>or <a href="http://localhost/uTrade/admin/admin-login-form-main/index.php"> Admin </a></p>
                    <a href="reset.html">Lost Your Password</a><br>
                    <a href="">Register</a><br>
                </form>
            </div> 
            

     </body>
    </head>

    </html>