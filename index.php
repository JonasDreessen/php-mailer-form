<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/style/style.css">
    <title>contact form</title>
</head>
<body>
    <div class="container">
        <div class="title-header">
            <h2>Contact</h2>
            <p>Interested in hiring me?</p>
            
        </div>
        <div class="contact-form">
            <form method="POST">
                <input type="text" placeholder="name" name="name" class="formelement">
                <input type="text" placeholder="email" name="client_email" class="formelement">
                <textarea type="text" placeholder="message" name="text_message" class="form-message"></textarea>
                <input type="submit" class="submit-button" name="submit">
                <div class="php-message">
                <?php
                include("php-to-mail.php");
                ?>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>