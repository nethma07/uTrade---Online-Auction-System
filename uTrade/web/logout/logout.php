<?php



// Start session
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // Clear session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    
    header("Location: ../login/logindb.php");
}
?>