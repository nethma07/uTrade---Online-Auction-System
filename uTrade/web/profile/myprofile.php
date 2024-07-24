<?php
include "conn.php";
// Start session
session_start();


//-----------------------------------------------------session login details---------------------------------------------------------------------
   

$uname=$_SESSION['username'];

    $deletecareer="SELECT * FROM `bidder` WHERE `UserName`='$uname'";
    
    $result=mysqli_query($conn,$deletecareer);
 
    if($result){
      // echo "Select Ok";
    }?>
    <?php
    while($row=mysqli_fetch_assoc($result)){

    $bid=$row['BidderID'];
      $fname=$row['First_Name'];
      $lname=$row['Last_Name'];
      $pw=$row['Password'];
      $adrs=$row['Address'];
      $tel=$row['Telephone'];
      $email=$row['Email'];
      $uname=$row['UserName'];
      // $actp=$row['acc_type'];
      

    
    
   
}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
        <link rel="stylesheet" href="myprofile.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    <?php
  //  include '..\Library\navigation_bar.php';
?>
        <div class="container">
            <div class="title">My profile</div>
            <div class="profile-tab-nav">
              <div>
                <div class="img">
                  <img src="account.png" alt="Image">
                </div>
              </div>
            </div>
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" id="myInput" value="<?php echo $fname ?>" required readonly>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" id="myInput1" value="<?php echo $lname ?>" required readonly>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" value="<?php echo $uname ?>" required readonly>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" value="<?php echo $email ?>"  required readonly>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" value="<?php echo $adrs ?>" required readonly>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone number</span>
                        <input type="numbers" id="numberInput"  value="<?php echo $tel ?>" required maxlength="9" readonly>
                    </div>
                  
                </div>
                
                <div class="button">
                    <a href="editprofile.php">
                        <button type="button" class="button" value="edit Profile">edit profile</button>
                        
                        </a>
                  </div> 
                   <div class="button">
                        <a href="qatable.php">
                            <button type="button" class="button" value="Edit Questions">Edit Questions</button>
                            </a> 
                    </div> 
                    
              <!-- add href -->
            
              <span class="span1"> If a member? <a href="../logout/logout.php">Log out</a></span>    
                
            </form>
        </div>
    </body>
</html>

<script>

  //Password missmatch

    function checkPasswordMatch(){
        var currentPassword = document.getElementById("password").value;
        var confirmPassword = document.getElementById("password1").value;
        var passwordMismatch = document.getElementById("passwordMismatch");

        if (currentPassword === confirmPassword) {
            passwordMismatch.style.display = "none";
        } else {
            passwordMismatch.style.display = "block";
        }
    }

    // First Name Validation

    var inputElement = document.getElementById("myInput");

    inputElement.addEventListener("input", function() {
      var inputValue = inputElement.value;
      var lettersOnlyRegex = /^[A-Za-z]+$/;
      var isValid = lettersOnlyRegex.test(inputValue);

      if (!isValid) {
        inputElement.value = inputValue.replace(/[^A-Za-z]+/g, '');
      }
    });

    // Last Name Validation

    var inputElement1 = document.getElementById("myInput1");

    inputElement1.addEventListener("input", function() {
      var inputValue = inputElement1.value;
      var lettersOnlyRegex = /^[A-Za-z]+$/;
      var isValid = lettersOnlyRegex.test(inputValue);

      if (!isValid) {
        inputElement1.value = inputValue.replace(/[^A-Za-z]+/g, '');
      }
    });

    //Phone number validation
    var inputElement = document.getElementById("numberInput");

inputElement.addEventListener("input", function() {
    var inputValue = inputElement.value;
    var numbersOnlyRegex = /^[0-9]{0,9}$/;

    if (!numbersOnlyRegex.test(inputValue)) {
        inputElement.setCustomValidity("Please enter a valid number with maximum 9 digits.");
    } else {
        inputElement.setCustomValidity("");
    }
});

inputElement.addEventListener("keyup", function() {
    inputElement.reportValidity();
});
  
    
   // Password Validation

    var passwordElement = document.getElementById("password");

    passwordElement.addEventListener("input", function() {
      var password = passwordElement.value;

      var lengthValid = password.length >= 8;
      var uppercaseValid = /[A-Z]/.test(password);
      var lowercaseValid = /[a-z]/.test(password);
      var numberValid = /\d/.test(password);
      var specialCharValid = /[!@#$%^&*]/.test(password);

      var isValid = lengthValid && uppercaseValid && lowercaseValid && specialCharValid;

      if (isValid) {
        passwordElement.style.border = "3px solid green";
      } else {
        passwordElement.style.border = "3px solid red";
      }
    });

   var passwordElement1 = document.getElementById("password1");

    passwordElement1.addEventListener("input", function() {
      var password = passwordElement1.value;

      var lengthValid = password.length >= 8;
      var uppercaseValid = /[A-Z]/.test(password);
      var lowercaseValid = /[a-z]/.test(password);
      var numberValid = /\d/.test(password);
      var specialCharValid = /[!@#$%^&*]/.test(password);

      var isValid = lengthValid && uppercaseValid && lowercaseValid && specialCharValid;

      if (isValid) {
        passwordElement1.style.border = "3px solid green";
      } else {
        passwordElement1.style.border = "3px solid red";
      }
    });
 </script> 