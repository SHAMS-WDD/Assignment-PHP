<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve user data from the file (You might want to use a database)
    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        $userData = json_decode($user, true);
        if ($userData['email'] === $email && password_verify($password, $userData['password'])) {
            // Set session data and redirect based on user role
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $userData['role']; // Assuming 'role' is stored during registration

            switch ($_SESSION['role']) {
                case 'admin':
                    header('Location: role_management.php');
                    break;
                case 'manager':
                    header('Location: manager_dashboard.php');
                    break;
                case 'user':
                    header('Location: user_dashboard.php');
                    break;
                default:
                    header('Location: login.php');
                    break;
            }
            exit();
        }
    }

    // Invalid credentials
    header('Location: login.php');
    exit();
}
?>
