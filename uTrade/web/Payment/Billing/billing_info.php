<?php
    include '/Applications/XAMPP/xamppfiles/htdocs/IWT/Library/navigation_bar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Card Details</title>
    <style>

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 25px;
            height: auto;
            background-image: url(../1.png);
            padding-bottom: 70px;
        }

        .container form {
            background-color: rgba(255, 255, 255);
            width: 400px;
            padding: 20px;
            border-radius: 10px;
        } 

        .container form .row {
            display: flex;
            gap: 100px;
        }

        .container form .row .col .title {
            font-size: 24px;
            color: black;
            padding-bottom: 10px;
            text-transform: uppercase;
            text-align: center;
        }

        .container form .row .col .inputBox {
            margin: 15px 0;
        }

        .container form .row .col .selection {
            margin: 15px 0;
        }

        .container form .row .col .inputBox span {
            margin-bottom: 5px;
            display: block;
            font-size: 18px;
        }

        .container form .row .col .selection span {
            margin-bottom: 5px;
            display: block;
            font-size: 18px;
        }

        .container form .row .col .inputBox input {
            width: 100%;
            border: 1px solid black;
            padding: 10px 15px;
            font-size: 16px;
            text-transform: none;
        }

        .container form .row .col .selection input {
            width: 100%;
            border: 1px solid black;
            padding: 10px 15px;
            font-size: 16px;
            text-transform: none;
        }

        .container form .row .col .selection select {
            height: 40px;
            width: 130px;
            font-size: 16px;
        }

        .container form .row .col .flex {
            gap: 15px;
        }

        .container form .row .col .flex .inputBox {
            margin-top: 5px;
        }

        input[type="submit"] {
            border-radius: 10px;
            background: #ade8f4;
            outline: none;
            width: 200px;
            height: 50px;
            font-size: 20px;
            margin-top: 5px;
            cursor: pointer;
        } 

        input[type="submit"]:hover {
            background-color: #00B4D8;
        }

        .select {
            display: flex;
        }

        h2 {
            padding-bottom: 5px;
        }

        p {
            text-align: justify;
            padding-left: 2px;
            padding-right: 10px;
        }

        #form_input {
            border-radius: 10px;
        }

    </style>
</head>

<body>
    <div class="container">
        <form action="" onsubmit="return validateForm()">
            <div class="row">

                <div class="col">
                    <h3 class="title">Make Your Payment</h3>
                    <div class="inputBox">
                        <span>Cards Accepted : </span>
                        <div class="select">
                            <input type="radio" name="payment-option">VisaCard
                            <input type="radio" name="payment-option"> MasterCard
                        </div>
                    </div>
                    <div class="inputBox">
                        <span>Name on Card: </span>
                        <input type="text" id="name-on-card" placeholder="Mr. Your Name" required>
                    </div>
                    <div class="inputBox">
                        <span>Card Number : </span>
                        <input type="text" id="card-number" placeholder="0000 0000 0000 0000" required>
                    </div>       
                
                    <div class="row">
                        <div class="left">
                            <div class="selection">
                                <span>Exp Month : </span>
                                <select name="month" id="month">
                                    <option value="january">January</option>
                                    <option value="february">February</option>
                                    <option value="march">March</option>
                                    <option value="april">April</option>
                                    <option value="may">May</option>
                                    <option value="june">June</option>
                                    <option value="july">July</option>
                                    <option value="august">August</option>
                                    <option value="septhember">Septhember</option>
                                    <option value="octomber">Octomber</option>
                                    <option value="november">November</option>
                                    <option value="december">December</option>
                                </select>                               
                            </div>
                        </div>
                        <div class="right">
                            <div class="inputBox">
                                <span>Exp Year : </span>
                                <input type="text" id="exp-year" placeholder="2023" required>
                            </div>
                        </div>
                    </div>
                

                    <div class="inputBox">
                        <span>CVV: </span>
                        <input type="text" id="cvv" placeholder="xxx" required>
                    </div>
                    </div>
                    
            </div>
           
            <center><input type="submit" value="Pay Now"></center>
            
        </form>
    </div>

    <script>
        function validateForm() {
            var cardNumber = document.getElementById('card-number').value;
            var expYear = document.getElementById('exp-year').value;
            var cvv = document.getElementById('cvv').value;

            var cardNumberPattern = /^[0-9]{16}$/;
            if (!cardNumberPattern.test(cardNumber)) {
                alert('Please enter a valid card number.');
                return false;
            }

            var currentYear = new Date().getFullYear();
            if (expYear < currentYear || expYear > currentYear + 10) {
                alert('Please enter a valid expiry year.');
                return false;
            }

            var cvvPattern = /^[0-9]{3}$/;
            if (!cvvPattern.test(cvv)) {
                alert('Please enter a valid CVV.');
                return false;
            }

            return true;
        }
    </script>

</body>

</html>

<?php
    include '/Applications/XAMPP/xamppfiles/htdocs/IWT/Library/footer.php';
?>