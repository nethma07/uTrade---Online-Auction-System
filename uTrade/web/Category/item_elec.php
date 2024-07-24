<?php
  include "../conn/conn.php";
   
  session_start();

  $BidderId=$_SESSION['userid'];

  
  $_SESSION['bidder_id'] = $BidderId;
?>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  #body{
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 25px;
      height: auto;
      background: url(https://img.freepik.com/premium-vector/abstract-circuit-board-futuristic-technology-processing-background_583398-466.jpg);
      padding-bottom: 70px;
  }

  .container {
    padding: 4em;
    width:100%;
  }

  .card {
    width: 30%;
    border-radius: 16px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    padding: 3em 2em;
    transform-style: preserve-3d;
    float: left;
    margin: 10px;
    background-color: white;
  }

  .header img {
    top: 0;
    width: 75%;
    margin-bottom:5%;
  }

  .name {
    font-size: 28px;
    margin: 1.2em 0 0.5em;
    transition: transform 0.3s ease;
  }

  .price {
    margin: 1.2em 0 0.5em;
    transition: transform 0.1s ease;
  }

  .bid{
    font-size: 15px;
    margin: 1.2em 0 0.5em;
    transition: transform 0.1s ease;
    text-align: center;
  }

  .description {
    margin-top: 0.8em;
    transition: transform 0.3s ease;
  }

  .buy {
    margin-top: 2em;
    width: 100%;
    border: 0;
    padding: 0.6em 0;
    font-weight: 500;
    font-size: 16px;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    border-radius: 50px;
    background-color: #ff9800;
    color: #fff;
    cursor: pointer;
    outline: none;
  }

  .row{
      float:left;
      width:100%;
  }

  .hidden {
        display: none;
      }

</style>

<head>
 <title>Electronic</title> 
</head>

<body>
<section width="100%">
  <div class="nav" style="width:100%; ">    
    <?php
        include '../Library/navigation_bar.php';
    ?>
  </div>
</section>

<section>

<div class="row">
<div class="container">
<?php
        $query = "SELECT * FROM `Item` WHERE `type`='elec'";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) 
        {
          $it_id = $row['ItemID'];
          $it_name = $row['Item_Name'];
          $it_desc = $row['Description'];
          $it_sbp = $row['SBP'];
          $it_prc = $row['End_Date'];
          $it_selid = $row['SellerID'];
          $it_img = $row['Image'];
          $it_type = $row['Type'];    
?>
          
  <div class="card">
    <div class="header">
      <div class="bg"></div>
      <img src="<?php echo "$it_img"?>" alt="Item Image">
    </div>
    <div class="bottom">
      <h1 class="name"><?php echo "$it_name"?></h1>
      <h3 class="price">RS. <?php echo "$it_sbp"?>.00 /=</h3>
      <div class="description"><?php echo "$it_desc"?></div>
      
      <form action="item_send.php" method="POST">
      <input type="text" class="hidden" name="p_id" value="<?php echo "$it_id"?>" readonly>
      <center><input class="bid" name="bid" type="text" placeholder="Place bid here" required></center>
      <input class="buy" type="submit">
      </form>
        
    </div>
  </div>

      <?php
        }
      ?>

</div>
</div>
</section>


<footer>
  <?php
    include '../Library/footer.php';
  ?>
</footer>
</body>











