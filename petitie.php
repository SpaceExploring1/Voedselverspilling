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
<a href="presentatie.php">presentatie</a>
<a href="poster.php">Posters</a>
<a href="petitie.php">Petitie</a>
</div>
</div>
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
        const images = [
            "../img/Nature-positive-in-agri-food-value-chains-the-why-and-the-how_i1140.jpg",
            "../img/dreamstime_xl_71214312-scaled.jpg",
            "../img/f3065cf2-375c-4473-9db8-ab8eeae00e12_large.jpg",
        ];
        let currentIndex = 0;
        const interval = 7000;
        function changeBackground() {
            document.querySelectorAll('.background').forEach(bg => bg.remove());
            const background = document.createElement('div');
            background.classList.add('background');
            background.style.backgroundImage = `url('${images[currentIndex]}')`;
            document.body.appendChild(background);
            currentIndex = (currentIndex + 1) % images.length;
        }
        changeBackground();
        setInterval(changeBackground, interval);
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
