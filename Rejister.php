<?php
session_start();

include "Database.php";
include "Classhandle.php";

$data = new DatabaseConnection();
$classhandle = new Classhandle($data);

if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $classhandle->registerUser($username, password_hash($password, PASSWORD_DEFAULT));

    header("Location: lojin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="halloween-theme.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Join the Halloween Custom Community!</h1>
            <img src="jpg.JPEG" alt="Halloween Icon" class="halloween-decoration">
        </div>

        <div class="content">
            <form method="post" action="Rejister.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="input-field" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="input-field" required>

                <button type="submit" class="button">Register</button>
            </form>

            <p class="halloween-text">Already have an account? <a href="lojin.php">Login here</a></p>
        </div>
    </div>
</body>

</html>
