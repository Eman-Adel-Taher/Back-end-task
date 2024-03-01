
<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username" value="<?php echo isset($username) ? $username : ''; ?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" value="<?php echo isset($email) ? $email : ''; ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1" placeholder="Password">
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2" placeholder="Confirm Password">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>Have an account? <a href="login.php">Sign in</a></p>
    </form>
</body>
</html>
