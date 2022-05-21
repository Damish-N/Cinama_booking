<?php require_once('../controllers/signup.php');
$errors = array();  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--    <link rel="icon" type="image/png" href="--><?php //echo BURL.'assets/img/basic/favicon.png'; ?><!--" />-->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
<!--    <script type="text/javascript" src="--><?php //echo BURL.'assets/js/validateLogin.js'; ?><!--"></script>-->
    <title></title>
</head>

<body style="background-image: url(../image/41.jpg);  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; height: 100vh;">
    <div class="container">
        <form action="" method="post" class="sign-in-form">
            <h2 class="title">Sign up</h2>

            <div class="row">
                <div class="left">
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
                        <input required  type="text" name="theatername" placeholder="Theater Name"
                            value="<?php if(isset($username)){ echo $username;} ?>"
                            oninput="validateUsername(this, 0,50)" />
                    </div>
                </div>
                <div class="right">
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
                        <input required type="email" name="email" value="<?php if(isset($email)){ echo $email;} ?>"
                            placeholder="Email" oninput="validateEmail(this, 0,254)" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="left">
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
                        <input required type="password" name="password" placeholder="Password"
                            value="<?php if(isset($email)){ echo $password;} ?>" placeholder="Password"
                            oninput="validatePassword(this, 0,50)" />
                    </div>
                </div>
                <div class="right">
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
                        <input required type="password" name="passwordConf" placeholder="Confirm Password"
                            value="<?php if(isset($email)){ echo $password;} ?>" placeholder="Password"
                            oninput="validatePasswordConfirm(this, 0,50)" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="left">
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
                        <input required type="text" name="contactNo" placeholder="Contact Number"
                            value="<?php if(isset($username)){ echo $username;} ?>"
                            oninput="validateUsername(this, 0,50)" />
                    </div>
                </div>
                <div class="right">
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
                        <input required type="text" name="location" placeholder="City"
                            value="<?php if(isset($username)){ echo $username;} ?>"
                            oninput="validateUsername(this, 0,50)" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="left">
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
                        <input required type="number" name="odc" placeholder="ODC"
                            value="<?php if(isset($email)){ echo $password;} ?>" placeholder="Password"
                            oninput="validatePassword(this, 0,50)" />
                    </div>
                </div>
                <div class="left">
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
                        <input required type="number" name="balkeny" placeholder="Balkeny"
                            value="<?php if(isset($email)){ echo $password;} ?>" placeholder="Password"
                            oninput="validatePassword(this, 0,50)" />
                    </div>
                </div>
                <div class="right">
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
                        <input required type="number" name="box" placeholder="Box Type"
                            value="<?php if(isset($email)){ echo $password;} ?>" placeholder="Password"
                            oninput="validatePasswordConfirm(this, 0,50)" />
                    </div>
                </div>
            </div>




            <input type="submit" name="signup2-btn" class="btn" value="Sign up" />

        </form>
    </div>
</body>

</html>