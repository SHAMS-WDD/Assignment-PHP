<?php
session_start();

// Check if the user is an admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Load existing roles
    $rolesFile = 'roles.txt';
    $roles = file($rolesFile, FILE_IGNORE_NEW_LINES);

    if (isset($_POST['newRole'])) {
        // Create new role
        $newRole = $_POST['newRole'];
        $roles[] = $newRole;
    }

    if (isset($_POST['editRole'])) {
        // Edit role
        $selectedRole = $_POST['selectedRole'];
        $editedRole = $_POST['editedRole'];

        $key = array_search($selectedRole, $roles);
        if ($key !== false) {
            $roles[$key] = $editedRole;
        }
    }

    if (isset($_POST['deleteRole'])) {
        // Delete role
        $selectedRole = $_POST['selectedRole'];

        $key = array_search($selectedRole, $roles);
        if ($key !== false) {
            unset($roles[$key]);
        }
    }

    // Save updated roles to a file
    file_put_contents($rolesFile, implode(PHP_EOL, $roles));
}

header('Location: role_management.php');
exit();
?>
