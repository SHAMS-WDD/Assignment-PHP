<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Validate and save user data to a file
    // (You might want to perform more robust validation and use a database)
    $user = compact('username', 'email', 'password');
    file_put_contents('users.txt', json_encode($user) . PHP_EOL, FILE_APPEND);

    header('Location: login.php');
    exit();
}
?>
