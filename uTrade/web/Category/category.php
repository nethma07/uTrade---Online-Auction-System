<?php
  
  session_start();

  $BidderId=$_SESSION['userid'];

  
  $_SESSION['bidder_id'] = $BidderId;

?>


<!DOCTYPE html>

<html>

    <div class="nav" style="width:100%; ">
    <?php
        include '../Library/navigation_bar.php';
    ?>
    </div>

    <head>
        <link rel="stylesheet" href="category.css" type="text/css">
        <title>Categories</title>
    </head>

    <body>

   
   <!-- <div class="nav" style="width:100%; ">
    <?php
        include '../nav/navbar.php';
    ?>
    </div>
  -->

    


<table id="table" style="margin-top:15%;">
            <tr>
                <td  >
                    <a href ='item_fun.php'>
                    <div class="div1">
                        <img src="https://hips.hearstapps.com/hmg-prod/images/hbx120118flesher03-1554319818.jpg" style="width: 50%;" />
                        <p>Furniture</p>
                    </div>
                    </a>
                </td>
                <td >
                    <a href ='item_vehi.php'>
                    <div class="div1">
                        <img src="https://wi.wallpapertip.com/wsimgs/5-52701_skyline-sports-bar-lounge.jpg" style="width: 50%;"/>
                        <p>Vehicles</p>
                    </div>
                    </a>
                </td>
                <td >
                    <a href ='item_watch.php'>
                    <div class="div1">
                        <img src="https://wallpapercave.com/wp/wp6985886.jpg" style="width: 50%;"/>
                        <p>Watches</p>
                    </div>
                    </a>
                </td>
            </tr>
            <tr>
                <td  >
                    <a href ='item_atiq.php'>
                    <div class="div1">
                        <img src="https://images.pexels.com/photos/265006/pexels-photo-265006.jpeg?cs=srgb&dl=pexels-pixabay-265006.jpg&fm=jpg" style="width: 50%;" />
                        <p>Antique</p>
                    </div>
                    </a>
                </td>
                <td >
                    <a href ='item_jew.php'>
                    <div class="div1">
                        <img src="https://i.pinimg.com/originals/0b/ef/50/0bef50b6cda73f50785c5013b145e5d9.jpg" style="width: 50%;"/>
                        <p>Jewelry</p>
                    </div>
                    </a>
                </td>
                <td >
                    
                <a href ='item_elec.php'>
                    <div class="div1">
                        <img src="https://dailyasianage.com/library/1605552217_1.png" style="width: 50%;"/>
                        <p>Electronics</p>
                    </div>
                    </a>
                </td>
            </tr>
           
            

        </table>



    </body>

</html>