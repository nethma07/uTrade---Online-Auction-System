<!DOCTYPE html>
<html>
<head>
    <!-- <title>Navigation Bar</title> -->
    <!-- icon -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .navbar1 {
        display: flex;
        justify-content: flex-end;
        background-color: rgba(255, 255, 255, 0.5);
        padding: 15px;
    }

    .navbar {
        display: flex;
        justify-content: flex-end;
        background-color: rgba(0, 0, 102, 0.8);
        padding: 15px;
    }
    
    .navbar ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .navbar li {
        display: inline-block;
        margin-left: 10px;
    }
    
    .navbar a {
        text-decoration: none;
        color: white;
        padding: 5px 10px;
    }

    .login-button {
        margin-left: 10px;
        padding-top: 7vh;
        margin-right: 1vw;
        color: #002699;
        font-weight: bold;
    }

    .profile-icon {
        padding-top: 4%;
        margin-right: 1vw;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #002699;
    }

    .cart {
        padding-top: 4%;
        margin-right: 1vw;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #002699;
    }

    .login-button a {
        text-decoration: none;
    }

    .navbar a:hover {
        color: #cc7a00;
    }

    .login-button a:hover {
        color: #cc7a00;
    }

    .profile-icon a:hover {
        color: #cc7a00;
    }

    .cart a:hover {
        color: #cc7a00;
    }

    .logo {
        align-self: flex-start;
        margin-right: auto;
    }

    body {
        background: url(../1.png);
        background-size: cover;
        height: 100vh;
        background-position: center;
    }
    
  </style>
  
</head>

<body>
    <div class="navbar1">
        <div class="logo">
            <!-- Place your logo here -->
            <img src="https://utradesolutions.com/images/utrade-alogo-logo-2.svg" alt="Logo" width="30%">
        </div>
        <div class="login-button">
            <a href="../login/logindb.php">LOGIN</a>
        </div>
        <div class="profile-icon">
            <a href="../profile/myprofile.php"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a>
        </div>
        <div class="cart">
            <a href="../Cart/cart.php"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>
    
    <div class="navbar">
        <ul>
        <li><a href="../HomePage/HomePage.php">HOME</a></li>
                <li><a href="../Category/category.php">CATEGORY</a></li>
                <li><a href="../sellerItem\sellerItem.php">SELL</a></li>
                <li><a href="../Bidding/update.php">BID</a></li>
                <li><a href="../aboutus/about.php">ABOUT US</a></li>
                <li><a href="../contactus/contactus.php">CONTACT US</a></li>
        </ul>
    </div>
</body>
</html>