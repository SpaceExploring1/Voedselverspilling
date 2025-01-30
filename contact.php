<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petitieformulier</title>
    <link href="about.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header class="container-fluid bg-light d-flex justify-content-around align-items-center nav-text p-2">
    <!-- <div class="nav-links"> -->
        <a href="index.php">Home</a>
        <a href="about.php">Over</a>
        <a href="contact.php">Contact</a>
        <a href="presentatie.php">Presentatie</a>
        <a href="poster.php">Poster</a>
        <a href="petitie.php">Petitie</a>
    <!-- </div> -->
    <!-- <div class="d-flex justify-content-around align-items-center"> -->
            <a href="https://www.instagram.com/appelcatering/">
                <img style="width:40px; height:40px;" src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
            </a>
            <a href="https://www.facebook.com/appelcatering">
                <img style="width:40px; height:40px;" src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
            </a>
            <a href="https://www.linkedin.com/connect-services/ads_experience/?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fappel-bv%2F">
                <img style="width:40px; height:40px;" src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn">
            </a>
        <!-- </div> -->
</header>
<div class="form-container">
    <h2>Neem contact met ons op!</h2>
    <form action="receive_mail.php" method="POST" onsubmit="return validateForm()">
        <label for="title">Titel:</label>
        <input type="text" id="email" name="title" required>

        <!-- <div class="checkbox-group">
            <label>
                <input type="radio" name="petition_choice" value="save_money" required>
                Ik doe het om geld te besparen.
            </label>
            <label>
                <input type="radio" name="petition_choice" value="save_planet" required>
                Ik doe het om de planeet te redden.
            </label>
            <label>
                <input type="radio" name="petition_choice" value="guilt" required>
                Ik doe het uit schuldgevoel.
            </label>
            <label>
                <input type="radio" name="petition_choice" value="other" required onclick="toggleOtherComment(true)">
                Anders..
            </label>
        </div> -->

        <label for="comment">Jouw bericht:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>
<!-- 
        <label for="other_comment" id="other_comment_label" style="display:none;">Specificeer:</label>
        <textarea id="other_comment" name="other_comment" rows="4" style="display:none;"></textarea> -->

        <button type="submit">Verstuur</button>
    </form>
    
</div>

</body>
</html>
