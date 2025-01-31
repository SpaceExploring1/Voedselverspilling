<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petition Form</title>
    <link href="about.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header class="container-fluid bg-light d-flex justify-content-around align-items-center nav-text p-2">
    <!-- Navigation links go here -->
</header>

<div class="form-container">
    <h2>Maak contact met ons!</h2>
    <form id="contact-form" onsubmit="submitForm(event)">
        <label for="email">Titel</label>
        <input type="text" id="email" name="email" required>

        <label for="comment">Reden van contact</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>

        <label for="other_comment" id="other_comment_label" style="display:none;">Specificeer:</label>
        <textarea id="other_comment" name="other_comment" rows="4" style="display:none;"></textarea>

        <button type="submit">Verzenden</button>
    </form>
    <div id="confirmation-message" style="display:none; margin-top: 20px;">
        <p>Your message has been submitted successfully!</p>
    </div>
</div>

<script>
    function submitForm(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        
        const form = document.getElementById('contact-form');
        const formData = new FormData(form);

        // Send the form data using AJAX (XMLHttpRequest)
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'receive_message.php', true);
        
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Show confirmation message after successful submission
                document.getElementById('confirmation-message').style.display = 'block';
                form.reset(); // Reset the form
            } else {
                alert('Error: Unable to submit the form');
            }
        };
        
        xhr.send(formData);
    }
</script>

</body>
</html>
