<!DOCTYPE html>
<html>
<head>
    <title>Navigation Bar</title>
    <style>
        /* CSS styling for the navigation bar */
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #C2E1FF;
            border-radius: 10px;
        }
        
        ul.navbar li {
            float: left;
        }
        
        ul.navbar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            color:black;
        }
        
        ul.navbar li a:hover {
            background-color: #111;
            color:white;
        }
        
        .logo {
            float: left;
        }
        
        .right-corner {
            float: right;
        }
        
        .right-corner li {
            display: inline-block;
            vertical-align: middle;
        }
        
        .right-corner li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        .right-corner li a:hover {
            background-color: #111;
            color:white;
        }
        
        .profile-btn {
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <ul class="navbar">
        <li class="logo" style="padding:5px;"><img src="../logo_1.png" alt="Logo" width="" height="30px"></li>
        <li><a href="../HomePage/HomePage.php">HOME</a></li>
                <li><a href="../Category/category.php">CATEGORY</a></li>
                <li><a href="../sellerItem\sellerItem.php">SELL</a></li>
                <li><a href="../Bidding/update.php">BID</a></li>
                <li><a href="../aboutus/about.php">ABOUT US</a></li>
                <li><a href="../contactus/contactus.php">CONTACT US</a></li>
        <ul class="right-corner">
            <li class="profile-btn"><a href="../profile/myprofile.php">Profile</a></li>
            <li><a href="../login/logindb.php">Login</a></li>
            <li><a href="../Cart/cart.php">Cart</a></li>
        </ul>
    </ul>
</body>
</html>
