<?php
    if(isset($_POST["submitButton"])){
        echo "Form was submitted";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Welcome to Netflix Clone</title>
</head>
<body>
    <div class="signInContainer">
        <div class="column">

            <div class="header">
                <img src="assets/images/leonormanlogo3.png" title='logo' width='200' height='50'alt="">
                <h3>Sign Up</h3>
                <span>to continue to Netflix clone</span>
            </div>

            <form method="POST">
                    <input type="text" name="firstName" placeholder="First name" required>
                    <input type="text" name="lastName" placeholder="Last name" required>
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="email" name="email2" placeholder="Confirm email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="password" name="password2" placeholder="Confirm password" required>
                    <input type="submit" name="submitButton" value="SUBMIT">
            </form>
           <span>Already have an account?</span> <a href="login.php" class="signInMessage"> &nbsp;  Sign in here!</a>
        </div>
    </div>
    
</body>
</html>