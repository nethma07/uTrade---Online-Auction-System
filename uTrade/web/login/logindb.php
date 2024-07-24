<?php
// Start session
session_start();

include ("conn.php");

// Check if the user is already logged in, redirect to home page
if (isset($_SESSION['username'])) {
    header("Location: ../HomePage/HomePage.php");
    exit;
}

// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate input data
    $username = $_POST['username'];
    $password = $_POST['password'];

  

    // Prepare SQL statement to retrieve user information
    $sql = "SELECT * FROM bidder WHERE UserName = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (($password==$row['Password'])) {
            // Successful login, set session variables
            $_SESSION['username'] = $row['UserName'];
            $_SESSION['userid'] = $row['BidderID'];

            // Redirect to home page
            header("Location: ../HomePage/HomePage.php");
            exit;
        } else {
            // Invalid password
            $error = "Invalid password";
            // echo $row['Password'] ;
        }
    } else {
        // User not found
        $error = "User not found";
    }

    // Close database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet"  href="footer.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- <h2>Login</h2> -->
    

            <div class="loginbox">
                <img src ="image/user.jpg" class="user">
                <h1>Bidder Login</h1> 

                <?php if (isset($error)) { ?>
                    <p><?php echo $error; ?></p>
                <?php } ?>

                <form method="POST">
                    <p>Username</p>
                    <input type="text" name="username" id="username" required><br>
                    <p>Password</p>
                    <input type="password" name="password" id="password" required><br>

                    <!-- <input type="Submit" name="submit" value="Login"> -->
                    <input type="submit" value="Login" name="submit">

                    <p>Are you<a href="sellerLogin.php">  Seller  </a>or <a href="http://localhost/uTrade/admin/admin-login-form-main/index.php"> Admin </a></p>
                    <a href="reset.html">Lost Your Password</a><br>
                    <a href="../rejister/Register_Form.php">Register</a><br>
                </form>
            </div> 


    <!-- <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Login">
    </form> -->
</body>
</html>
