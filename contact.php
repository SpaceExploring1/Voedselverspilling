<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petition Form</title>
    <link href="about.css" rel="stylesheet">
</head>
<body>

<div class="nav">
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="about.php">Over</a>
        <a href="contact.php">Contact</a>
        <a href="presentatie.php">Presentatie</a>
        <a href="poster.php">Poster</a>
        <a href="petitie.php">Petitie</a>
    </div>
    <div class="social-links">
            <a href="https://www.instagram.com/appelcatering/" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
            </a>
            <a href="https://www.facebook.com/appelcatering" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
            </a>
            <a href="https://www.linkedin.com/connect-services/ads_experience/?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fappel-bv%2F" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn">
            </a>
        </div>
</div>
<div class="form-container">
    <h2>Contact with our!</h2>
    <form action="receive_mail.php" method="POST" onsubmit="return validateForm()">
        <label for="title">Title:</label>
        <input type="text" id="email" name="title" required>

        <!-- <div class="checkbox-group">
            <label>
                <input type="radio" name="petition_choice" value="save_money" required>
                I do it to save money.
            </label>
            <label>
                <input type="radio" name="petition_choice" value="save_planet" required>
                I do it to save the planet.
            </label>
            <label>
                <input type="radio" name="petition_choice" value="guilt" required>
                I do it out of guilt.
            </label>
            <label>
                <input type="radio" name="petition_choice" value="other" required onclick="toggleOtherComment(true)">
                Other..
            </label>
        </div> -->

        <label for="comment">Your mail:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>
<!-- 
        <label for="other_comment" id="other_comment_label" style="display:none;">Specify:</label>
        <textarea id="other_comment" name="other_comment" rows="4" style="display:none;"></textarea> -->

        <button type="submit">Submit</button>
    </form>
    
</div>

</body>
</html>
