<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slideshow Background</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            font-family: 'Times New Roman', Times, serif;
            transition: background-image 1s ease-in-out;
        }

        .GoldenOlive {
            color: #c7a752;
            font-size: 30px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <h1 class="GoldenOlive">Hello world</h1>
    
    <script>
        const images = [
            "../img/idyllic-farm-landscape-stockcake.jpg",
            "../img/dreamstime_xl_71214312-scaled.jpg",
            "../img/istockphoto-1403665879-612x612.jpg"
        ];

        let currentIndex = 0;

        function changeBackground() {
            document.body.style.backgroundImage = `url('${images[currentIndex]}')`;
            currentIndex = (currentIndex + 1) % images.length; // Loop back to the first image
        }

        // Initial background setup
        changeBackground();

        // Change background every 5 seconds
        setInterval(changeBackground, 5000);
    </script>
</body>
</html>
