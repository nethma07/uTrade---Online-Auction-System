<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <link rel="stylesheet" href="adminPanel.css" />
    </head>
    <body>
        <div class="logo">uTrade</div>
            <div class="main-text">
                <h1>Welcome to the Admin Panel!</h1>
                <p>Empower Your Bids, Master Your Auctions: Welcome to our Admin Panel!</p>
            </div>

        <!--Navigation-->
        <div id="sideNavigation">
            <nav>
                <ul>
                    <li><a href="../bidder/bidder_table.php" >USERS</a></li>
                    <li><a href="../items/display.php" >ITEMS</a></li>
                    <li><a href="../faq/qatable.php" >FAQ</a></li>
                    <!-- <li><a href="#" >BIDDERS</a></li> -->
                    <li><a href="../biddings/bidding_table.php" >BIDDING</a></li>
                </ul>
            </nav>
        </div>
        <div id="menuButton">
            <img src="menu.png" alt="Main Menu" id="menuIcon"/>
        </div>
        
        <script>
            var btn = document.getElementById("menuButton");
            var navigation = document.getElementById("sideNavigation");
            var menuImg = document.getElementById("menuIcon");
                
            navigation.style.right = "-250px";

            btn.onclick = function () 
            {
                if (navigation.style.right == "-250px")
                {
                    navigation.style.right = "0";
                } 
                else
                {
                    navigation.style.right = "-250px";
                } 
            };  
        </script>
       
    </body>
</html>