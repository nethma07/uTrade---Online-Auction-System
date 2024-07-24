<?php
    $server = "localhost";
    $un = "root";
    $pw ="";
    $db = "utrade";

    //$conn = mysqli_connect($server,$un,$pw,$db);
    $conn = new mysqli($server,$un,$pw,$db);

    if($conn->connect_error)
    {
      
        echo "Error";
    }

?>