<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Camagru</title>
    </head>
    <body>
        <h1>Welcome to Camagru!</h1>
        <form action="/" method="post">
            <label for="mail">Email:</label>
            <input type="email" id="mail" name="mail">
            <span style="color: red;"><?php echo $errors['email'] ?? ''; ?></span><br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <span style="color: red;"><?php echo $errors['username'] ?? ''; ?></span><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span style="color: red;"><?php echo $errors['password'] ?? ''; ?></span><br>
            <button type="submit">Add to database</button>
        </form>
    </body>

</html>
