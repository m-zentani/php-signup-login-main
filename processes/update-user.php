<?php
session_start();

$mysqli = require __DIR__ . "/database/database.php";   


if (($_GET["user_id"])) {
    $sql = "SELECT name, email FROM user WHERE id = $user_id";
// Assuming you have retrieved existing user data from the database
$existing_username = $_GET["name"]; // Initialize with empty values
$existing_email = $_GET["email"]; // Initialize with empty values
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission (e.g., update data in the database)
    $new_username = $_POST['name'];
    $new_email = $_POST['email'];


    // Assuming you have an 'id' column for the logged-in user
    $user_id = $_GET["user_id"]; // Replace with the actual user ID
    $sql = "SELECT name, email FROM user WHERE id = $user_id";
    $result = $mysqli->query($select_query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $existing_username = $row['Name'];
        $existing_email = $row['Email'];
    } else {
        echo "User not found.";
    }

    // Close the database connection
    $mysqli->close();
}
?>
