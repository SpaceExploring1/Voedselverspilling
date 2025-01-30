<?php
// Simulating that the user is a manager (for demonstration purposes)
$is_manager = true; // Change this logic as needed, such as checking a session or user role

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['comment']);
    $petition_choice = isset($_POST['petition_choice']) ? $_POST['petition_choice'] : 'No choice selected';

    // Setting agree/disagree based on the form choice
    $agree = ($petition_choice === 'agree') ? 'Yes' : 'No';
    
    // Setting color based on the answer
    $color = ($petition_choice === 'agree') ? '#415929' : '#9c5023';

    if ($is_manager) {
        echo "<h1>Petition Details</h1>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Comment:</strong> $comment</p>";
        echo "<p style='color: $color;'><strong>Agreed to the Petition:</strong> $agree</p>";
    } else {
        echo "<p>Sorry, you are not authorized to view this page.</p>";
    }
} else {
    echo "<p>No data received.</p>";
}

