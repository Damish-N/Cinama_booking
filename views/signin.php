<?php 
require_once('../controllers/signup.php');
$errors = array(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="<?php echo BURL.'assets/img/basic/favicon.png'; ?>" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="<?php echo BURL.'assets/js/validateLogin.js'; ?>"></script>
    <title></title>
</head>

<body style="background-image: url(../image/h7-slide6.jpg);">

    <div class="login-area">

        <div class="logo">
            <img src="../image/logo2.png" alt="logo-image">
        </div>
        <div>
            <h1 style="text-align: center;color: aliceblue">QUICK TICKET</h1>
            <h2 style="font-weight: bolder; text-align: center;color: white;margin: 0">Welcome Back</h2>

        </div>

        <div class="form-area">
            <form action="" method="post" class="sign-in-form">
                <h2 class="title">Sign in</h2>


                <?php //var_dump($errors); ?>
                <?php if(count($errors)>0): ?>
                <?php if(isset($errors['email'])): ?>
                <div class="alert error" id="alert01" role="alert">
                    <p><i class="fas fa-exclamation-circle"></i><?php echo $errors['email'];  ?></p>
                </div>
                <?php else:  ?>
                <div class="alert error" id="alert01" role="alert" style="display:none">
                    <p><i class="fas fa-exclamation-circle"></i></p>
                </div>
                <?php endif; ?>
                <?php else:  ?>
                <div class="alert error" id="alert01" role="alert" style="display:none">
                    <p><i class="fas fa-exclamation-circle"></i></p>
                </div>
                <?php endif;  ?>

                <div class="input-field" id="input-field-01">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" value="" placeholder="Email"
                        oninput="validateEmail(this, 0,254)" />
                </div>

                <?php if(count($errors)>0): ?>
                <?php if(isset($errors['password'])): ?>
                <div class=" alert error" id="alert02" role="alert">
                    <p><i class="fas fa-exclamation-circle"></i><?php echo $errors['password'];  ?></p>
                </div>
                <?php else:  ?>
                <div class="alert error" id="alert02" role="alert" style="display:none">
                    <p><i class="fas fa-exclamation-circle"></i></p>
                </div>
                <?php endif; ?>
                <?php else:  ?>
                <div class="alert error" id="alert02" role="alert" style="display:none">
                    <p><i class="fas fa-exclamation-circle"></i></p>
                </div>
                <?php endif;  ?>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" value="" placeholder="Password"
                        oninput="validatePassword(this, 0,50)" />
                </div>

                <input type="submit" value="Sign In" name="signin-btn" class="btn solid" />
            </form>

            </h5>
        </div>

    </div>
</body>

</html>