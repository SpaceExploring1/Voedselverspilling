<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            height: 100vh;
            font-family: 'Times New Roman', Times, serif;
            box-sizing: border-box;
        }

        /* Background Layers for Smooth Transition */
        .background, .background-next {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            transition: opacity 1.5s ease-in-out;
        }

        .background-next {
            opacity: 0;
        }

        /* Navbar */
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

        /* Social Media Icons */
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

        /* Welcome Text Block */
        .GoldenOlive {
            font-size: 50px;
            text-align: center;
            position: absolute;
            top: 30%;
            left: 80%;
            transform: translate(-50%, -50%);
            z-index: 1;
            color: white;
            padding: 20px 40px;
            border-radius: 10px;
            transition: background-color 1s ease-in-out;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="nav">
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="about.php">Over</a>
            <a href="contact.php">Contact</a>
            <a href="presentatie.php">Presentatie</a>
            <a href="poster.php">Posters</a>
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

    <!-- Welcome Text Block -->
    <div class="GoldenOlive">Welkom! Hier op deze website voor appél, gaat het om het samenwerken tegen voedselverspilling</div>
    <script>
        const images = [
            "../img/Nature-positive-in-agri-food-value-chains-the-why-and-the-how_i1140.jpg",
            "../img/dreamstime_xl_71214312-scaled.jpg",
            "../img/f3065cf2-375c-4473-9db8-ab8eeae00e12_large.jpg",
        ];

        const colors = ["#C7A752", "#415929", "#727D37"];

        let currentIndex = 0;
        const interval = 3000;

        // Create two background layers for seamless transition
        const bg1 = document.createElement("div");
        bg1.classList.add("background");
        bg1.style.backgroundImage = `url('${images[0]}')`;

        const bg2 = document.createElement("div");
        bg2.classList.add("background-next");
        bg2.style.backgroundImage = `url('${images[1]}')`; // Set initial image for bg2

        document.body.prepend(bg1, bg2);

        function changeBackground() {
            const activeBg = document.querySelector(".background");
            const nextBg = document.querySelector(".background-next");

            // Set the new image for the next background
            nextBg.style.backgroundImage = `url('${images[currentIndex]}')`;

            // Fade in the next background
            nextBg.style.transition = "opacity 1.5s ease-in-out";
            nextBg.style.opacity = "1"; 

            // Change the text color
            document.querySelector(".GoldenOlive").style.backgroundColor = colors[currentIndex];

            // After fade-in, swap the images
            setTimeout(() => {
                activeBg.style.backgroundImage = nextBg.style.backgroundImage; // Swap images
                nextBg.style.opacity = "0"; // Hide the next background for the next cycle
            }, 1500); // Wait until the full fade-in duration

            // Update index for the next background
            currentIndex = (currentIndex + 1) % images.length;
        }

        // Ensure the transition loop runs endlessly without cutting
        setInterval(() => {
            changeBackground();
        }, interval);
    </script>
</body>
</html>
