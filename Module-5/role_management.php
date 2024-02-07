<?php
session_start();

// Check if the user is an admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

// Check if roles.txt exists, create it if not
$rolesFile = 'roles.txt';
if (!file_exists($rolesFile)) {
    file_put_contents($rolesFile, ''); // Create an empty file
}

// Get existing roles from a file
$roles = file($rolesFile, FILE_IGNORE_NEW_LINES);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Role Management</title>
</head>
<body>
    <h2>Role Management</h2>

    <!-- Display existing roles -->
    <h3>Existing Roles:</h3>
    <ul>
        <?php foreach ($roles as $role) : ?>
            <li><?= $role ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Create new role form -->
    <h3>Create New Role:</h3>
    <form action="role_management_process.php" method="post">
        New Role: <input type="text" name="newRole" required>
        <input type="submit" value="Create Role">
    </form>

    <!-- Edit and delete roles -->
    <h3>Edit/Delete Roles:</h3>
    <form action="role_management_process.php" method="post">
        <select name="selectedRole" required>
            <?php foreach ($roles as $role) : ?>
                <option value="<?= $role ?>"><?= $role ?></option>
            <?php endforeach; ?>
        </select>
        New Role Name: <input type="text" name="editedRole" placeholder="New Role Name">
        <input type="submit" name="editRole" value="Edit Role">
        <input type="submit" name="deleteRole" value="Delete Role">
    </form>
</body>
</html>
