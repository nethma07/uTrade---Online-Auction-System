<?php
// Start session
session_start();

$uname=$_SESSION['username'];
$_SESSION['username']=$uname;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomePage.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="navbar.css">
    <title>HomePage</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <section id="header">
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
                <li><a href="#">HOME</a></li>
                <li><a href="../Category/category.php">CATEGORY</a></li>
                <li><a href="../sellerItem\sellerItem.php">SELL</a></li>
                <li><a href="../Bidding/update.php">BID</a></li>
                <li><a href="../aboutus/about.php">ABOUT US</a></li>
                <li><a href="../contactus/contactus.php">CONTACT US</a></li>
            </ul>
        </div>
    </section>
<section class="body">
    <div class="container">
        <div class="image">
            <img src="1.jpg" alt="">
        </div>
        <div class="image">
            <img src="2.jpg" alt="">
        </div>
        <div class="image">
            <img src="3.jpg" alt="">
        </div>
        <div class="image">
            <img src="4.jpg" alt="">
        </div>
        <div class="image">
            <img src="5.jpg" alt="">
        </div>
        <div class="image">
            <img src="6.jpg" alt="">
        </div>

        <div class="button">
            <a onclick="nextimg(-1)" class="prev">&#10094;</a>
            <a onclick="nextimg(1)" class="next">&#10095;</a>
        </div>

        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </div>

    <script>

        var imageno =1;
        displayimg(imageno);

        function nextimg(n){
            displayimg(imageno += n)
        }

        function currentSlide(n){
            displayimg(imageno = n)
        }

        function displayimg(n){
            var i;
            var image = document.getElementsByClassName("image");
            var dots = document.getElementsByClassName("dot");

            if(n > image.length){
                imageno = 1;
            }

            if(n < 1){
                imageno = image.length;
            }

            for(i=0; i < image.length; i++){
                image[i].style.display = "none";
            }

            for(i=0; i < dots.length; i++){
                dots[i].className = dots[i].className.replace(" active", "");
            }

            image[imageno - 1].style.display ="block";
            dots[imageno - 1].className += " active";

        }

    </script>
    </section>
    <section class="footer">
        <div class="column">
            <div class="img">
                <img src="https://utradesolutions.com/images/utrade-alogo-logo-2.svg" alt="Logo">
            </div>
            <div class="fot_intro">
                <p>
                    uTrade is an e-commerce side that offers a wide range of products, deals and discounts, customer support, and user accounts. it aims to provides a seamless shopping experience for its customers.
                </p>
            </div>
        </div>
    
        <div class="column">
            <div class="menu">
                <h1>
                    Menu
                </h1>
                <p><a href="">Home</a></p>
                <p><a href="">Find an Item</a></p> 
                <p><a href="">Contact Us</a></p>
                <p><a href="">About Us</a></p>
            </div>
        </div>
    
        <div class="column">
            <div class="subcol">
                <h1>
                    Contact Us
                </h1>
                <p>Tel: 123-245-7890 </p>
                <p>Email: info@uTrade.lk</p>
                <p>No.205, Silver Lane, Colombo </p>
            </div>
        </div>
    
        <div class="column">
            <div class="subcol">
                <h1>
                    Social
                </h1>
                <p><i class="fa fa-facebook-square" aria-hidden="true"></i>&nbsp;&nbsp;Facebook</p>
                <p><i class="fa fa-twitter-square" aria-hidden="true"></i>&nbsp;&nbsp;Twitter</p>
                <p><i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp;&nbsp;YouTube</p>
            </div>
        </div>
    </section>

</body>
</html>