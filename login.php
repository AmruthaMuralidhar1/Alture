<?php 
include("connection.php");
include("lp.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="stylelog.css">
    <script src="login.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="heading">
            <h1>Login</h1>
        </div>
        <div class="form">
            <form method="post" action="login.php">
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username" name="Username">
                </span><br>
                <span>
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="pass">
                </span><br>
                <button type="submit" name="submit">Login</button>
            </form>
            <div class="bottom">
                <p>New user? <a href="signup.php">SignUp Here</a>.</p>
            </div>
        </div>
    </div>
</body>
</html>