<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="verwerk.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <input type="submit">
    </form>
    <br>
    <form method="POST" action="verwerk.php">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <input type="submit">
    </form>
    <br>
    <form method="get" action="verwerk.php">
        <input type="number" name="num1" id="num1" required>
        <p>+</p>
        <input type="number" name="num2" id="num2" required>
        <input type="submit" name="button" value="Add">
    </form>
</body>

</html>