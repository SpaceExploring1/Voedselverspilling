<?php
session_start(); // Start the session

// Check if the user is a manager
$is_manager = isset($_SESSION['is_manager']) && $_SESSION['is_manager'];

if (!$is_manager) {
    // If the user is not a manager, redirect or show an error
    echo "<p>Access denied. Only authorized users can view this page.</p>";
    exit();
}

// If the form is submitted, capture and display the data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']); // Title input
    $comment = htmlspecialchars($_POST['comment']);
    
    echo "<div class='container' style='background-color: black; color: white; padding: 20px;'>";
    echo "<h1>Mail Details</h1>";
    echo "<p><strong>Title:</strong> $email</p>";
    echo "<p><strong>Letter:</strong> $comment</p>";
    echo "</div>";
} else {
    echo "<p>No data received.</p>";
}
