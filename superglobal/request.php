<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Sign Up Form</title>
</head>
<body>

    <h2>Sign Up</h2>
    <form action="process2.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" ><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" ><br><br>

        <input type="submit" name="save" id="save">
    </form>

</body>
</html>
