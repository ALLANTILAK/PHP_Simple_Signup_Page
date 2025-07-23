<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <base href="/app2/">
</head>
<body>
    <h2>Sign Up</h2>
    <form action="register.php" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
