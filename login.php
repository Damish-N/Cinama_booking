<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login Page</title>
</head>
<body>
<div class="login-area">
    <div class="logo">
        <img src="../cinama/image/download.png" alt="logo-image">
    </div>
    <h1 style="text-align: center;color: aliceblue">QUICK TICKET</h1>
    <div style="background: #6b6b6b;padding: 5px 0">
        <h2 style="font-weight: bolder; text-align: center;color: white;margin: 0">Welcome Back</h2>
    </div>

    <div class="form-area">
        <form action="./home.php" method="post">
            <input placeholder="USER NAME" id="userNameId" name="username">
            <input placeholder="PASSWORD" id="passwordId" name="password" type="password">
            <div class="checkBox">
                <input  class="checkbox-class" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label style="color: white;flex: 5" for="vehicle1"> Remember me</label><br>
                <a href="#"> Forget password</a>
            </div>
            <button class="submitBtn" type="submit">Login</button>
        </form>
        <h5 style="text-align: center;margin: 5px auto;color: white">Don't have an account?
            <a href="./registration.php"> Sign up</a>
        </h5>
    </div>

</div>
</body>
</html>

