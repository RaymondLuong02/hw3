<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'luongray_hw3user', '@Sanjose2024', 'luongray_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
