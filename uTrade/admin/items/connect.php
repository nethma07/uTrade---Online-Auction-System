<?php
    $server = "localhost";
    $un = "root";
    $pw ="";
    $db = "uTrade";

    
    $conn = new mysqli($server,$un,$pw,$db);

    if($conn->connect_error)
    {
        die("Error");
    }

?>