<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="submit-form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <input type="submit" value="Send">
    </form>
</body>
</html>
<?php

echo "Hello World!";