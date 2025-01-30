<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        body {

        font-family: 'Times New Roman', Times, serif;

        margin: 0;

        overflow-x: hidden;

        height: 100vh;

        box-sizing: border-box;

        /* Add background image directly */

        background-image: url('../img/terrace-farming-rice-fields-agriculture-country-side-5120x2880-6411.jpg');

        background-size: cover;

        background-position: center;

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