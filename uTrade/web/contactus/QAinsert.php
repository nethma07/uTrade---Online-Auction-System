<?php
include '../conn/conn.php';
if(isset($_POST['submit'])){
  $Full_Name=$_POST['Full_Name'];
  $Email_Address=$_POST['Email_Address'];
  $Questions=$_POST['Questions'];

  $sql="insert into feedback (Full_Name,Email_Address,Qusestions) values('$Full_Name','$Email_Address','$Questions')";
  $sql=mysqli_query($conn,$sql);
  if($sql){
    echo "<script>alert('Question is sussesfull send');</script>";

    header('location:contactus.php');
  }else{
    echo "hjb"; 
    die(mysqli_error($conn));
  }
}
else{
    echo "hjb"; 
}
?>