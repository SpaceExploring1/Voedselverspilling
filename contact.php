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
    <h2>maak contact mens ons!</h2>
    <form action="receive_petition.php" method="POST" onsubmit="return validateForm()">
        <label for="email">Title:</label>
        <input type="t" id="email" name="email" required>

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

        <label for="comment">Your Comment:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>

        <label for="other_comment" id="other_comment_label" style="display:none;">Specify:</label>
        <textarea id="other_comment" name="other_comment" rows="4" style="display:none;"></textarea>

        <button type="submit">Sign Petition</button>
    </form>
    
</div>

<script>
    function toggleOtherComment(show) {
        const otherComment = document.getElementById("other_comment");
        const otherLabel = document.getElementById("other_comment_label");
        if (show) {
            otherComment.style.display = "block";
            otherLabel.style.display = "block";
        } else {
            otherComment.style.display = "none";
            otherLabel.style.display = "none";
        }
    }

    const images = [
        "../img/terrace-farming-rice-fields-agriculture-country-side-5120x2880-6411.jpg",
    ];

    function validateForm() {
        const checkboxes = document.querySelectorAll('input[name="petition_choice"]');
        let checked = false;
        checkboxes.forEach((checkbox) => {
            if (checkbox.checked) {
                checked = true;
            }
        });
        if (!checked) {
            alert("Please select one option.");
            return false;
        }
        return true;
    }
</script>

</body>
</html>
