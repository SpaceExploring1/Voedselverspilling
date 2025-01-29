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
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .form-container input, .form-container button, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Sign the Petition</h2>
        <form action="receive_petition.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="comment">Why do you want to sign the petition?</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            
            <label>
                <input type="checkbox" name="agree" required>
                I agree to the petition.
            </label>
            
            <button type="submit">Sign Petition</button>
        </form>
    </div>
</body>
</html>
