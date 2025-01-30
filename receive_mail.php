<?php
// Simulating that the user is a manager (for demonstration purposes)
$is_manager = true; // Change this logic as needed, such as checking a session or user role

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['title']);
    $comment = htmlspecialchars($_POST['comment']);
    // $petition_choice = isset($_POST['petition_choice']) ? $_POST['petition_choice'] : 'No choice selected';

    // Setting agree to 'Yes' directly
    // $agree = 'Yes';
    
    // Setting color based on the answer
    $color = '#415929';

    if ($is_manager) {
        echo "<h1>Mail Details</h1>";
        echo "<p><strong>Title:</strong> $email</p>";
        echo "<p><strong>Letter:</strong> $comment</p>";
        // echo "<p style='color: $color;'><strong>Agreed to the Petition:</strong> $agree</p>";
    } else {
        echo "<p>Sorry, you are not authorized to view this page.</p>";
    }
} else {
    echo "<p>No data received.</p>";
}

