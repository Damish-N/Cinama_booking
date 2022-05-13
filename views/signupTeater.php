<?php $errors = array(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="<?php echo BURL.'assets/img/basic/favicon.png'; ?>" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <script type="text/javascript" src="<?php echo BURL.'assets/js/validateLogin.js'; ?>"></script>
    <title></title>
</head>

<body style="background-image: url(../image/h5-slide.jpg);">
    <div class="container">
        
        <div class="login-area">
            <div class="form-area">
                <form action="" method="post" class="sign-in-form">
                    <h2 class="title">Sign up</h2>

                    <?php if(count($errors)>0): ?>
                    <?php if(isset($errors['username'])): ?>
                    <div class="alert error" id="alert00" role="alert">
                        <p><i class="fas fa-exclamation-circle"></i><?php echo $errors['username'];  ?></p>
                    </div>
                    <?php else:  ?>
                    <div class="alert error" id="alert00" role="alert" style="display:none">
                        <p><i class="fas fa-exclamation-circle"></i></p>
                    </div>
                    <?php endif; ?>
                    <?php else:  ?>
                    <div class="alert error" id="alert00" role="alert" style="display:none">
                        <p><i class="fas fa-exclamation-circle"></i></p>
                    </div>
                    <?php endif;  ?>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="First Name"
                            value="<?php if(isset($username)){ echo $username;} ?>"
                            oninput="validateUsername(this, 0,50)" />
                    </div>

                    <?php if(count($errors)>0): ?>
                    <?php if(isset($errors['username'])): ?>
                    <div class="alert error" id="alert00" role="alert">
                        <p><i class="fas fa-exclamation-circle"></i><?php echo $errors['username'];  ?></p>
                    </div>
                    <?php else:  ?>
                    <div class="alert error" id="alert00" role="alert" style="display:none">
                        <p><i class="fas fa-exclamation-circle"></i></p>
                    </div>
                    <?php endif; ?>
                    <?php else:  ?>
                    <div class="alert error" id="alert00" role="alert" style="display:none">
                        <p><i class="fas fa-exclamation-circle"></i></p>
                    </div>
                    <?php endif;  ?>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Last Name"
                            value="<?php if(isset($username)){ echo $username;} ?>"
                            oninput="validateUsername(this, 0,50)" />
                    </div>

                    <?php if(count($errors)>0): ?>
                    <?php if(isset($errors['username'])): ?>
                    <div class="alert error" id="alert00" role="alert">
                        <p><i class="fas fa-exclamation-circle"></i><?php echo $errors['username'];  ?></p>
                    </div>
                    <?php else:  ?>
                    <div class="alert error" id="alert00" role="alert" style="display:none">
                        <p><i class="fas fa-exclamation-circle"></i></p>
                    </div>
                    <?php endif; ?>
                    <?php else:  ?>
                    <div class="alert error" id="alert00" role="alert" style="display:none">
                        <p><i class="fas fa-exclamation-circle"></i></p>
                    </div>
                    <?php endif;  ?>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username"
                            value="<?php if(isset($username)){ echo $username;} ?>"
                            oninput="validateUsername(this, 0,50)" />
                    </div>

                    <?php if(count($errors)>0): ?>
                    <?php if(isset($errors['username'])): ?>
                    <div class="alert error" id="alert00" role="alert">
                        <p><i class="fas fa-exclamation-circle"></i><?php echo $errors['username'];  ?></p>
                    </div>
                    <?php else:  ?>
                    <div class="alert error" id="alert00" role="alert" style="display:none">
                        <p><i class="fas fa-exclamation-circle"></i></p>
                    </div>
                    <?php endif; ?>
                    <?php else:  ?>
                    <div class="alert error" id="alert00" role="alert" style="display:none">
                        <p><i class="fas fa-exclamation-circle"></i></p>
                    </div>
                    <?php endif;  ?>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="City"
                            value="<?php if(isset($username)){ echo $username;} ?>"
                            oninput="validateUsername(this, 0,50)" />
                    </div>

                    <?php if(count($errors)>0): ?>
                    <?php if(isset($errors['username'])): ?>
                    <div class="alert error" id="alert00" role="alert">
                        <p><i class="fas fa-exclamation-circle"></i><?php echo $errors['username'];  ?></p>
                    </div>
                    <?php else:  ?>
                    <div class="alert error" id="alert00" role="alert" style="display:none">
                        <p><i class="fas fa-exclamation-circle"></i></p>
                    </div>
                    <?php endif; ?>
                    <?php else:  ?>
                    <div class="alert error" id="alert00" role="alert" style="display:none">
                        <p><i class="fas fa-exclamation-circle"></i></p>
                    </div>
                    <?php endif;  ?>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Contact Number"
                            value="<?php if(isset($username)){ echo $username;} ?>"
                            oninput="validateUsername(this, 0,50)" />
                    </div>

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

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" value="<?php if(isset($email)){ echo $email;} ?>"
                            placeholder="Email" oninput="validateEmail(this, 0,254)" />
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

                    <div class="input-field" id="input-field-password">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password"
                            value="<?php if(isset($email)){ echo $password;} ?>" placeholder="Password"
                            oninput="validatePassword(this, 0,50)" />
                    </div>

                    <?php if(count($errors)>0): ?>
                    <?php if(isset($errors['password'])): ?>
                    <div class=" alert error" id="alert03" role="alert">
                        <p><i class="fas fa-exclamation-circle"></i><?php echo $errors['passwordConf'];  ?></p>
                    </div>
                    <?php else:  ?>
                    <div class="alert error" id="alert03" role="alert" style="display:none">
                        <p><i class="fas fa-exclamation-circle"></i></p>
                    </div>
                    <?php endif; ?>
                    <?php else:  ?>
                    <div class="alert error" id="alert03" role="alert" style="display:none">
                        <p><i class="fas fa-exclamation-circle"></i></p>
                    </div>
                    <?php endif;  ?>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="passwordConf" placeholder="Confirm Password"
                            value="<?php if(isset($email)){ echo $password;} ?>" placeholder="Password"
                            oninput="validatePasswordConfirm(this, 0,50)" />
                    </div>
                    <input type="submit" name="signup-btn" class="btn" value="Sign up" />

                </form>

                </h5>
            </div>

        </div>

        <div class="rightCont">
            <div class="logo" style="margin-top: 100px;">
                <img src="../image/logo.png" alt="logo-image">
            </div>
            <div>
                <h1 style="text-align: center;color: aliceblue">Welcome</h1>
                <!-- <h2 style="font-weight: bolder; text-align: center;color: white;margin: 0">Welcome Back</h2> -->

            </div>
        </div>
    </div>
</body>

</html>