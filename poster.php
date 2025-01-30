<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
            overflow-x: hidden;
            height: 100vh;
            background-image: url('../img/poster_background.jpg');
        }

        .background {
    position: fixed;
    background-color: white;
    top: 50%; /* Centered vertically */
    left: 50%; /* Centered horizontally */
    transform: translate(-50%, -50%);
    width: 500px; /* Maintain aspect ratio */
    max-width: 100%; /* Adjust based on screen size */
    height: 500px; /* Maintain aspect ratio */
    max-height: 100%; /* Adjust based on screen size */
    background-image: url('../img/poster.jpg'); /* Make sure path is correct */
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    z-index: 0;
    box-shadow: 3px 9px 6px rgba(0, 0, 0, 0.5);
    
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
    </style>
</head>
<body>
    <div class="background">

    </div>
    <div class="nav">
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="presentatie.php">Presentatie</a>
            <a href="poster.php">Poster</a>
            <a href="petitie.php">Petitie</a>
        </div>
    </div>
</body>
</html>
