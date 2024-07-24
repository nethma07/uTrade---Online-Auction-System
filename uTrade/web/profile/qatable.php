<?php
include ('conn.php');
?>

<html>
<head>
<link rel="stylesheet" href="qatable1.css">
</head>
<body>
<table style="margin-left: auto; margin-right: auto;" border ="5">
      <tr>
        <th scope="col">Qusestions Number</th>
        <th scope="col">Full Name</th>
        <th scope="col" >Email Address</th>
        <th scope="col">Qusestions</th>
      </tr>
      <tbody>

      <?php
    
    $sql="Select * from feedback";
    $result=mysqli_query($conn,$sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
        $Qusestions_Number=$row['Qusestions_Number'];
        $Full_Name=$row['Full_Name'];
        $Email_Address=$row['Email_Address'];
        $Qusestions=$row['Qusestions'];
        echo $Qusestions_Number;
        echo ' <tr>
       
        <th scope="row">'.$Qusestions_Number.'</th>
        <th scope="row">'.$Full_Name.'</th>
        <th>'.$Email_Address.'</th>
        <th>'.$Qusestions.'</th>

        <td>
        <button class="btn btn-primary"><a href="updatefrom.php?updateid='.$Qusestions_Number.'" class="text-light">Update</a></button>
        <button1 class="btn btn-danger"><a href="deletequsestions.php?deleteid='.$Qusestions_Number.'"class="text-light">delete</a></button>
        </td>
        </tr>';
      }
    }
    else

    {
      echo "dffg";
    }

      ?>

      
  </tbody> 
</table>
</body>
</html>
