<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Petition Form</title>
<style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .form-container {
            max-width: 400px;
            margin: 80px auto;
            padding: 50px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
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
</style>
</head>
<body>
<div class="nav">
        <div class="nav-links">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="presentatie.php">presentatie</a>
            <a href="poster.php">Posters</a>
            <a href="petitie.php">Petitie</a>

        </div>
    <br>
<div class="form-container">
<h2>Sign the Petition</h2>
<form action="receive_petition.php" method="POST" onsubmit="return validateForm()">
<label for="email">Email:</label>
<input type="email" id="email" name="email" required>
<label for="comment">Your Comment:</label>
<textarea id="comment" name="comment" rows="4" required></textarea>
<div class="checkbox-group">
<label>
<input type="radio" name="petition_choice" value="agree" required>
                    I agree to the petition.
</label>
<label>
<input type="radio" name="petition_choice" value="disagree" required>
                    I disagree with the petition.
</label>
</div>
<button type="submit">Sign Petition</button>
</form>
</div>
 
    <script>
        function validateForm() {
            const checkboxes = document.querySelectorAll('input[name="petition_choice"]');
            let checked = false;
            checkboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    checked = true;
                }
            });
            if (!checked) {
                alert("Please select either agree or disagree.");
                return false;
            }
            return true;
        }
</script>
</body>
</html>