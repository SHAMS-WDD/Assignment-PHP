<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Include Tailwind CSS via a link tag -->
    <style>
        .container{width: 60%;}
        .mx-auto{margin: auto;}
        .bg-gray{background-color: rgb(207, 204, 204);}
        .p-6{padding: 6px;}
    </style>
<body>
    
    <div class="container mx-auto bg-gray p-6">
        <h2>Login</h2>
        <form action="login_process.php" method="post" class="flex flex-col">
            Email: <input type="email" name="email" required><br><br>
            Password: <input type="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>