<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
    $errors = array();
    require_once('../../controllers/movieController.php');

    ?>

<!DOCTYPE html>
<html>

<head>
    <title>Responsive Admin Dashboard</title>

    <meta name="viewpoint" content="width=device-width,initaial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/dashboard.css" />
    <link rel="stylesheet" type="text/css" href="../../css/style.css" />
</head>

<body>
    <div class="dashcontainer">
        <?php include '../inc/sidebar.php' ?>
        <div class="main">
            <h1>Add New Movie</h1>
            <div class="include">
                <form action="" method="post" class="sign-in-form" enctype="multipart/form-data">
                    <!-- <h2 class="title">Sign up</h2> -->

                    <div class="row">
                        <div class="left">
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" name="moviename" placeholder="Movie Name" value=""
                                    oninput="validateUsername(this, 0,50)" />
                            </div>
                        </div>
                        <div class="right">
                            <div class="input-field">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="lang" value="" placeholder="Language"
                                    oninput="validateEmail(this, 0,254)" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="left">
                            <div class="input-field" id="input-field-password">
                                <i class="fas fa-lock"></i>
                                <input type="date" name="outdate" placeholder="Release Date" value=""
                                    placeholder="Password" oninput="validatePassword(this, 0,50)" />
                            </div>
                        </div>
                        <div class="right">
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="number" name="duration" placeholder="Duration" value=""
                                    placeholder="Password" oninput="validatePasswordConfirm(this, 0,50)" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="left">

                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" name="des" placeholder="Discription"
                                    value="<?php if(isset($username)){ echo $username;} ?>"
                                    oninput="validateUsername(this, 0,50)" />
                            </div>
                        </div>
                        <div class="right">

                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" name="directorName" placeholder="DirectorName"
                                    value="<?php if(isset($username)){ echo $username;} ?>"
                                    oninput="validateUsername(this, 0,50)" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="left">


                            <div class="input-field" id="input-field-password">
                                <i class="fas fa-lock"></i>
                                <input type="file" name="file" placeholder="ODC" value=""
                                    oninput="validatePassword(this, 0,50)" />
                            </div>
                        </div>

                        <div class="right">

                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="number" name="imbd" placeholder="IMBD Value" value=""
                                    placeholder="Password" oninput="validatePasswordConfirm(this, 0,50)" />
                            </div>
                        </div>
                    </div>

                    <input type="submit" name="addmov" class="btn" value="Add Movie" />

                </form>
            </div>
        </div>
    </div>



    <script>
    function toggleMenu() {
        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        toggle.classList.toggle("active");
        navigation.classList.toggle("active");
    }
    </script>
</body>

</html>