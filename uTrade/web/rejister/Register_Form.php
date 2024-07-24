<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
        <link rel="stylesheet" href="register_styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body >
        <div class="container">
            <div class="title">Create an account</div>
            <form  method="POST" action="Register_form_send.php">
                <div class="account-type-details">
                    <input type="radio" name="account-type" value="bidder" id="dot-1">
                    <input type="radio" name="account-type" value="seller" id="dot-2">
                    <span class="account-type-title">Account type</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="account-type">Bidder</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="account-type">Seller</span>
                        </label>
                    </div>
                </div>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input name="First_Name1" type="text" id="myInput" placeholder="Enter your first name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input name="Last_Name1" type="text" id="myInput1" placeholder="Enter your last name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input name="username1" type="text" id="username" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input name="Email1" type="email" id="email" placeholder="example@gmail.com" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input name="Address1" type="text" id="address" placeholder="Enter your address" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone number</span>
                        <input name="Telephone1" type="numbers" id="numberInput" placeholder="Enter your phone number" required maxlength="9">
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input name="Password1" type="password" id="password" placeholder="Enter your password" required maxlength="8">
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm password</span>
                        <input type="password" id="password1" placeholder="Enter your password again" required maxlength="8" oninput="checkPasswordMatch()">
                        <p id="passwordMismatch" style="display: none; color: red;">Passwords do not match.</p>
                    </div>
                </div>

                <span class="span2">**You should enter a password with 8 characters and should be a combination of uppercase letters, lowercase letters, numbers and special characters</span>
                
              <div class="button">
                <input type="submit" value="Create acount">
              </div>    
              <!-- add login file -->
              <span class="span1">Already a member? <a href="../login/logindb.php">Log In</a></span>    
                
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