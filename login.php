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
                <h3>Sign In</h3>
                <span>to continue to Netflix clone</span>
            </div>

            <form method="POST">
                    
                    <input type="text" name="username" placeholder="Username" required>
                    
                    <input type="password" name="password" placeholder="Password" required>
                    
                    <input type="submit" name="submitButton" value="SUBMIT">
            </form>
           <span>Not yet registered?</span> <a href="register.php" class="signInMessage"> &nbsp;  Create account here!</a>
        </div>
    </div>
    
</body>
</html>