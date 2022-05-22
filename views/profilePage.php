<?php
include "../controllers/userController.php";
echo $_SESSION['usertype'];
if ($_SESSION['usertype'] == 1) {
    $user = getUser($_SESSION['email']);
    $tickets = getTickets($user[0]['customer_id']);
} else {
    $user = getTheater($_SESSION['email']);

}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/theater.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">

    <link rel="stylesheet" href="../css/profile-page.css">

</head>
<body>
<?php require '../common/header.php' ?>

<div class="container-profile">


    <?php
    if ($_SESSION['usertype'] == 1) {
        ?>
        <h1 style="color: white; text-align: center;font-weight: bolder;padding: 15px 0">
            <?php echo $user[0]['first_name'] . ' ' . $user[0]['last_name'] ?>
        </h1>
        <div class="image-view">
            <img src="../image/logo.png" alt="" srcset="">
        </div>
        <div class="detail-view">
            <div class="row">
                <div class="left">
                    <div class="input-field">
                        <i class="fa fa-user-circle-o"></i>
                        <input required type="text" name="box" placeholder=<?php echo $user[0]['first_name'] ?> />
                    </div>
                </div>
                <div class="right">
                    <div class="input-field">
                        <i class="fa fa-user-circle-o"></i>
                        <input required type="text" name="box" placeholder=<?php echo $user[0]['last_name'] ?> />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="left">
                    <div class="input-field">
                        <i class="fa fa-user-circle-o"></i>
                        <input required type="text" name="box" placeholder=<?php echo $user[0]['contact_no'] ?> />
                    </div>

                </div>
                <div class="right">
                    <div class="input-field">
                        <i class="fa fa-user-circle-o"></i>
                        <input required type="text" name="box" placeholder=<?php echo $user[0]['city'] ?> />
                    </div>
                </div>
            </div>

            <div class="input-field">
                <i class="fa fa-envelope"></i>
                <input required type="text" name="box" placeholder=<?php echo $user[0]['email'] ?> />
            </div>

            <?php
            if (sizeof($tickets) > 0){
            ?>
            <div class="tickets-show">
                <h3 style="padding: 10px; color: white;text-align: center">Booked Tickets</h3>
                <div class="contenido">
                    <?php for ($i=0;$i<sizeof($tickets);$i++) { ?>
                        <div class="details">
                            <div class="tinfo"><?php echo  'No: '.($i+1) ?>
                            </div>
                            <div class="tinfo">
                                Ticket ID : <?php  echo $tickets[$i]['ticket_id'] ?>
                            </div>
                            <div class="tdata">

                                <?php
                                $theater = getTheMovieByIdUser($tickets[$i]['movie_id']);
                                echo '   '. $theater[0]['name'];;
                                ?>
                            </div>
                            <div class="masinfo">
                                <div class="left">
                                    <div class="tinfo">
                                        date
                                    </div>
                                    <div class="tdata nesp">
                                      <?php
                                      $timestamp = strtotime($tickets[$i]['show_date']);
                                      $day = date('D', $timestamp);
                                      echo $day.'   '. $tickets[$i]['show_date'];;
                                      ?>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="tinfo">
                                        location
                                    </div>
                                    <div class="tdata nesp">
                                        <?php
                                        echo $day.'   '. $tickets[$i]['theater_name'];;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                </div>
                <?php } else { ?>
                    <h3 style="text-align: center ;padding: 25px;color: white">No Detail Tickets</h3>
                <?php } ?>


            </div>


        </div>

    <?php } elseif ($_SESSION['usertype'] == 2) { ?>
        <h1 style="color: white; text-align: center;font-weight: bolder;padding: 15px 0">
            <?php echo $user[0]['theater_name'] ?>
        </h1>
        <div class="image-view">
            <img src="../image/logo.png" alt="" srcset="">
        </div>
        <div class="detail-view">
            <div class="row">
                <div class="left">
                    <div class="input-field">
                        <i class="fa fa-user-circle-o"></i>
                        <input required type="text" name="box"
                               placeholder=<?php echo $user[0]['no_balcony_seats'] . ' Balcony seats' ?> />
                    </div>
                </div>
                <div class="right">
                    <div class="input-field">
                        <i class="fa fa-user-circle-o"></i>
                        <input required type="text" name="box"
                               placeholder=<?php echo $user[0]['no_of_box'] . ' Box seats' ?> />
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="left">
                    <div class="input-field">
                        <i class="fa fa-user-circle-o"></i>
                        <input required type="text" name="box"
                               placeholder=<?php echo $user[0]['no_odc_seats'] . ' ODC seats' ?> />
                    </div>

                </div>
                <div class="right">
                    <div class="input-field">
                        <i class="fa fa-user-circle-o"></i>
                        <input required type="text" name="box" placeholder=<?php echo $user[0]['location'] ?> />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="left">
                    <div class="input-field">
                        <i class="fa fa-envelope"></i>
                        <input required type="text" name="box" placeholder=<?php echo $user[0]['email'] ?> />
                    </div>

                </div>
                <div class="right">
                    <div class="input-field">
                        <i class="fa fa-user-circle-o"></i>
                        <input required type="text" name="box" placeholder=<?php echo $user[0]['contact_no'] ?> />
                    </div>
                </div>
            </div>


        </div>
        <div class="tickets-show">
            <h3 style="padding: 10px; color: white;text-align: center">Movies Shown by Theaters</h3>

        </div>
    <?php } ?>


</div>
<?php require '../common/footer.php' ?>


</body>
</html>
