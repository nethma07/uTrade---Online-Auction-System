
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <title>Responsive Contact Us Page</title>
  <link rel="stylesheet" href="QA1.css">
</head>
<body>
  
  <section>
    
    <div class="section-header">
      <div class="container">
        <h2>ASK A QUESTION ?</h2>
        <p>Welcome to U Trade, your premier online auction site! At U Trade, we believe in connecting buyers and sellersfrom around the                                                               
           world to create a dynamic marketplace. As we strive to provide the best user experience, we value your feedback and questions. 
           Whether you're curious about our bidding process, shipping options, or anything else, we're here to help! Submit your questions below,
          and our dedicated team will promptly assist you. Join U Trade today and discover endless opportunities to buy and sell with confidence!</p>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="contact-form">
          <form action="updatetable.php" id="contact-form" method="post">
            <h2>Send Question</h2>
            <div class="input-box">
              <input type="text" required="true" name="Full_Name">
              <span>Full Name</span>
            </div>
            
            <div class="input-box">
              <input type="email" required="true" name="Email_Address">
              <span>Email Adress</span>
            </div>
            
            <div class="input-box">
              <textarea required="true" name="Questions"></textarea>
              <span>Type your Question...</span>
            </div>
            
            <div class="input-box">
              <input type="submit" value="update" name="submit">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </section>
  
</body>
</html>