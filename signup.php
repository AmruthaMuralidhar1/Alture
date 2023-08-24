<?php 
    include("connection.php");
    include("sp.php")
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="login.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="heading">
            <h1>Sign Up</h1>
        </div>
        <div class="form">
            <form method="post" action="signup.php">
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Name" name="Name">
                </span><br>
                <span>
                    <i class="fa fa-phone"></i>
                    <input type="tel" placeholder="Mobile Number (+91)" name="Mobile_Number">
                </span><br>
                <span>
                    <i class="fa fa-at"></i>
                    <input type="email" placeholder="Email-ID" name="Email-ID">
                </span><br>
                <span>
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="Pwd">
                </span><br>
                <span>
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Retype Password" name="RPwd">
                </span><br>
                <button type="submit" name="submit">Sign Up</button>
            </form>
            <div class="bottom">
                <p>Already a user? <a href="login.php">Login here</a>.</p>
            </div>
        </div>
    </div>
</body>
</html>