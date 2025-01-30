<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="about.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .video {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .video img {
            max-width: 100%;
            height: auto;
        }
        header a {
            position: relative;
            z-index: 10; /* Ensure the link is above other elements */
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="container-fluid bg-light d-flex justify-content-around align-items-center nav-text p-2">
        <a href="index.php">Home</a>
        <a href="about.php">Over</a>
        <a href="contact.php">Contact</a>
        <a href="presentatie.php">Presentatie</a>
        <a href="poster.php">Poster</a>
        <a href="petitie.php">Petitie</a>
        <a href="https://www.instagram.com/appelcatering/">
            <img style="width:40px; height:40px;" src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
        </a>
        <a href="https://www.facebook.com/appelcatering"></a>
            <img style="width:40px; height:40px;" src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
        </a>
        <a href="https://www.linkedin.com/connect-services/ads_experience/?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fappel-bv%2F"></a>
            <img style="width:40px; height:40px;" src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn">
        </a>
    </header>
    <div class="background"></div>
    <div class="video">
        <a href="http://localhost:/Projectweek/Voedselverspilling/index.php">
            <img src="../img/qr.png" alt="Poster met QR code">
        </a>
    </div>
</body>
</html>
