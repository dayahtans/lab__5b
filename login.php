<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h1>Login Page</h1>
    <form action="authenticate.php" method="POST">
        <label for="matric">Matric:</label>
        <input type="text" name="matric" id="matric" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <button type="submit">Login</button>
    </form>
    <p style="color: red;"><?php if (isset($_GET['error'])) echo $_GET['error']; ?></p>
    <p><a href="register_form.php">Register</a> here if you have not.</p>
</body>

</html>
