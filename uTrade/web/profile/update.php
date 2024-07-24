<?php
 
  
  session_start();

  $BidderId=$_SESSION['userid'];
  // $_SESSION['userid'] = $row['BidderID'];
  $_SESSION['bidder_id'] = $BidderId;
?>




<?php
include "conn.php";






// Retrieve form data

$fname=$_POST['First_Name'];
$lname=$_POST['Last_Name'];
$adrs=$_POST['Address'];
$tel=$_POST['Telephone'];
$email=$_POST['Email'];
$uname=$_POST['UserName'];





// Validate and sanitize the form data (you can add more validation as per your requirements)
if (empty($fname) || empty($lname) || empty($adrs)|| empty($email) || empty($uname)){
  die("Please fill all required fields.");
}


$sql = "UPDATE bidder SET First_Name='$fname',Last_Name='$lname',Address='$adrs',Email='$email',UserName='$uname' WHERE BidderID='$BidderId'";
$result=mysqli_query($conn,$sql);

if ($result) {
  echo "Form data submitted successfully.";
  echo "<script>alert('Successfully updated')</script>";
} else {
  
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

  
  
    

