<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slideshow</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            height: 100vh;
            font-family: 'Times New Roman', Times, serif;
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
            z-index: 0; /* Backgrounds stay at the back */
        }

        .GoldenOlive {
            font-size: 50px;
            text-align: center;
            position: absolute;
            top: 25%;
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
    <div class="GoldenOlive">Hello world</div>

    <script>
        const images = [
            "../img/idyllic-farm-landscape-stockcake.jpg",
            "../img/dreamstime_xl_71214312-scaled.jpg",
            "../img/istockphoto-1403665879-612x612.jpg"
        ];

        const colors = [
            "#C7A752", // Matches Image 1
            "#415929", // Matches Image 2
            "#727D37"  // Matches Image 3
        ];

        let currentIndex = 0;
        const interval = 4000;

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
