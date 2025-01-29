<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petition Form</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            overflow-x: hidden;
            height: 100vh;
            box-sizing: border-box;
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
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            background: white;
            position: relative;
            z-index: 2;
        }
        .form-container input, .form-container button, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
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
<div class="nav">
    <div class="nav-links">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="presentatie.php">Presentatie</a>
        <a href="poster.php">Posters</a>
        <a href="petitie.php">Petitie</a>
    </div>
</div>
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
