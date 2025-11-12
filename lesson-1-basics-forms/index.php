<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice form</title>
</head>
<body>

    <h2> Contact Form</h2>

    <form method="POST" action="process.php" >
        <label>Name:</label> <br>
        <input type="text" name="username" required>
        <br> <br>


        <label>Email:</label><br>
        <input type="email" name="email" required>
        <br><br>

        <label>Mesaage:</label>
        <textarea name="message" rows="4" cols="30"></textarea>
        <script>alert('test')</script>
        <br><br>

        <input type="submit" value="send message"!>
    </form>
</body>
</html>
