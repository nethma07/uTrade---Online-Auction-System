<?php
include "conn.php";


// Start session
session_start();



$uname=$_SESSION['username'];




//-----------------------------------------------------session login details---------------------------------------------------------------------


 

    $deletecareer="SELECT * FROM `bidder` WHERE `UserName`='$uname'";
    
    $result=mysqli_query($conn,$deletecareer);
 
    if($result){
      while($row=mysqli_fetch_assoc($result)){

        $bid=$row['BidderID'];
          $fname=$row['First_Name'];
          $lname=$row['Last_Name'];
          $pw=$row['Password'];
          $adrs=$row['Address'];
          $tel=$row['Telephone'];
          $email=$row['Email'];
          $uname=$row['UserName'];
        
          
    
  
    }}
    
   
    ?>
    
    
   





<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
        <link rel="stylesheet" href="editprofile.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="title">Edit profile</div>
            <div class="profile-tab-nav">
              <div>
                <div class="img">
                  <img src="account.png" alt="Image">
                </div>
              </div>
            </div>
            <form action="update.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="First_Name" id="myInput" value="<?php echo $fname ?>" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" name="Last_Name" value="<?php echo $lname ?>" id="myInput1" >
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="UserName" value="<?php echo $uname ?>" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="Email" value="<?php echo $email ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" name="Address" value="<?php echo $adrs ?>" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Phone number</span>
                        <input type="numbers" name="Telephone" value="<?php echo $tel ?>" id="numberInput" required maxlength="9">
                    </div>
                    <div class="input-box">
                      <span class="details"> New Password</span>
                      <input type="password" name="New_Password" value="<?php echo $pw ?>" id="password" required maxlength="8">
                  </div> 
                </div>
                <div class="button">
              
                      <input type="submit"  class="button" value="update" name="submit" Update>
                      
                    
                  </div>
              <div class="button">
                <a href="myprofile.php">
                    <button type="button" class="button" value="My Profile">my profile</button>
                    </a>
                </div>
             
                


              <!-- add href -->
              <span class="span1"> If a member? <a href="../logout/logout.php">Log out</a></span>    
                
            </form>
        </div>
    </body>
</html>

