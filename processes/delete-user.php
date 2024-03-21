<?php
session_start();

$mysqli = require __DIR__ . "/database/database.php";

if (($_GET["user_id"])) {
    
    
    $sql = "DELETE FROM user
            WHERE id = ".$_GET["user_id"];


    $stmt = $mysqli->stmt_init();

    if ( ! $stmt->prepare($sql)) {
        die("SQL error: " . $mysqli->error);
    }

    if ($stmt->execute()) {
        echo "User with ID $sql has been deleted successfully.";
        header("Location: ../index.php");
    }
}

        
?>