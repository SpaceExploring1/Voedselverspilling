<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petition Form</title>
    <link href="about.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {

        font-family: 'Times New Roman', Times, serif;

        margin: 0;

        overflow-x: hidden;

        /* height: 100vh; */

        box-sizing: border-box;

        /* Add background image directly */

        background-image: url('../img/terrace-farming-rice-fields-agriculture-country-side-5120x2880-6411.jpg');

        background-size: cover;

        /* background-position: center; */

        background-repeat: no-repeat;

}


        .nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 98%;
            background-color: white;
            height: 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }
        .nav-links {
            font-size: 3em;
            display: flex;
            justify-content: space-between;
            gap: 190px;
        }
        .nav a {
            font-size: 25px;
            text-decoration: none;
            color: #c7a752;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .nav a:hover {
            color: #415929;
        }
        .form-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 50px;
            top: 50px;
            left: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 5px 5px 8px rgba(199, 167, 82, 1);
            background: white;
            position: relative;
            z-index: 2;
        }
        .form-container input, .form-container button, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        .social-links {
            display: flex;
            gap: 25px;
        }

        .social-links img {
            width: 40px;
            height: 40px;
            transition: transform 0.3s ease;
        }

        .social-links img:hover {
            transform: scale(1.1);
        }
        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .checkbox-group label {
            display: flex;
            align-items: center;
        }
        .checkbox-group input {
            width: auto;
            margin-right: 10px;
        }
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
            z-index: 0;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
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
    <h2>Sign the Petition</h2>
    <form action="receive_petition.php" method="POST" onsubmit="return validateForm()">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <div class="checkbox-group">
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
        </div>

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
