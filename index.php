<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
    body {
        margin: 0;
        overflow-x: hidden; /* Prevent horizontal overflow */
        height: 100vh;
        font-family: 'Times New Roman', Times, serif;
        box-sizing: border-box; /* Ensure proper sizing */
    }

    .nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 98%;
    background-color: white;
    height: 70px; /* Consistent height */
    display: flex;
    justify-content: space-between; /* Distribute space between nav-links and social-links */
    align-items: center; /* Center items vertically */
    padding: 0 20px; /* Add consistent padding on both sides */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add subtle shadow */
    z-index: 10;
}

.nav-links {
    display: flex;
    gap: 30px; /* Space between navigation links */
}

.nav a {
    text-decoration: none;
    color: #c7a752;
    font-size: 18px; /* Ensure links are readable */
    font-weight: bold;
    transition: color 0.3s ease;
}

.nav a:hover {
    color: #415929;
}

.social-links {
    display: flex;
    gap: 15px; /* Space between social icons */
}

.social-links img {
    width: 24px; /* Consistent size for social icons */
    height: 24px;
    transition: transform 0.3s ease;
}

.social-links img:hover {
    transform: scale(1.1); /* Add hover effect */
}



    /* Slideshow Background Styling */
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
        z-index: 0; /* Background stays at the back */
    }

    /* Text Block Styling */
    .GoldenOlive {
        font-size: 50px;
        text-align: center;
        position: absolute;
        top: 30%;
        left: 80%;
        transform: translate(-50%, -50%);
        z-index: 1;
        color: white; /* Keep the text white */
        padding: 20px 40px;
        border-radius: 10px;
        transition: background-color 1s ease-in-out; /* Smooth background color transition */
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
    <!-- Navbar -->
    <div class="nav">
        <div class="nav-links">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
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

    <!-- Text Block -->
    <div class="GoldenOlive">Hello World</div>

    <script>
        const images = [
    "../img/Nature-positive-in-agri-food-value-chains-the-why-and-the-how_i1140.jpg",
    "../img/dreamstime_xl_71214312-scaled.jpg",
    "../img/f3065cf2-375c-4473-9db8-ab8eeae00e12_large.jpg",
    "../img/"  // Added missing comma here
];


        const colors = [
            "#C7A752", // Matches Image 1
            "#415929", // Matches Image 2
            "#727D37"  // Matches Image 3
        ];

        let currentIndex = 0;
        const interval = 7000;

        function changeBackground() {
            // Remove any existing background elements
            document.querySelectorAll('.background').forEach(bg => bg.remove());

            // Create a new background element
            const background = document.createElement('div');
            background.classList.add('background');
            background.style.backgroundImage = `url('${images[currentIndex]}')`;
            document.body.appendChild(background);

            // Update the text block's background color
            const textElement = document.querySelector('.GoldenOlive');
            textElement.style.backgroundColor = colors[currentIndex];

            // Update the index
            currentIndex = (currentIndex + 1) % images.length;
        }

        // Initial background and text block setup
        changeBackground();

        // Change background and text block color at regular intervals
        setInterval(changeBackground, interval);
    </script>
</body>
</html>
