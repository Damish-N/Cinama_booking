<?php
include "../controllers/userController.php";

// echo $_SESSION['usertype'];
if ($_SESSION['usertype'] == 1) {
    
    $user = getUser($_SESSION['email']);
    $tickets = getTickets($user[0]['customer_id']);
    // echo (sizeof($tickets));
    // exit;
    
} else {
    $user = getTheater($_SESSION['email']);
    $movies = getTheMovieByIdUser($user[0]['theater_id']);

//    $theater = getTheTheater($id);
    $movie_ids = getTheMoviesViaTheaterUser($user[0]['theater_id']);

    $movies = array();
    for ($i = 0; $i < sizeof($movie_ids); $i++) {
//    echo $movie_ids[$i];
        $movies[] = getTheMovieByIdUser($movie_ids[$i]['movie_id']);
    }


}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/theater.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/profile-page.css">
    <title>Profile</title>

</head>

<body>
    <?php require '../common/header.php' ?>

    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center mx-auto">
                <div class="col-xl-12 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        <img src="https://cdn-icons-png.flaticon.com/512/1177/1177568.png"
                                            class="img-radius" style="width: 150px;" alt="User-Profile-Image">
                                    </div>
                                    <h6 class="f-w-600">
                                        <?php echo $user[0]['first_name'] . ' ' . $user[0]['last_name'] ?></h6>
                                    <p><?php echo $user[0]['city'] ?></p>
                                    <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 class="text-muted f-w-400"><?php echo $user[0]['email'] ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Phone</p>
                                            <h6 class="text-muted f-w-400"><?php echo $user[0]['contact_no'] ?></h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Ticket Details</h6>

                                    <?php if (isset($_SESSION['usertype'])): ?>
                                    <?php if ($_SESSION['usertype'] == 1): ?>
                                    <?php if (sizeof($tickets) > 0):  ?>
                                    <div class="tickets-show">
                                        <?php for ($i = 0; $i < sizeof($tickets); $i++) { ?>
                                        <div class="details">
                                            <div class="tinfo">
                                                <p>Number Of Tickets: <?php echo ($i + 1) ?></p>
                                            </div>
                                            <div class="tinfo">
                                                <p>Ticket ID :<?php echo $tickets[$i]['ticket_id'] ?></p>

                                            </div>
                                            <div class="tinfo">
                                                <p>Movie Name :
                                                    <?php  $theater = getTheMovieByIdUser($tickets[$i]['movie_id']);  echo '   ' . $theater[0]['name'];; ?>
                                                </p>

                                            </div>
                                            <div class="tinfo">
                                                <p>Date :
                                                    <?php $timestamp = strtotime($tickets[$i]['show_date']); $day = date('D', $timestamp); echo $day . '   ' . $tickets[$i]['show_date'];; ?>
                                                </p>
                                            </div>
                                        
                                        </div>
                                        <?php } ?>
                                        <?php else: ?>
                                        <h3 style="text-align: center ;padding: 25px;">No Detail Tickets
                                        </h3>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-profile">



        <?php require '../common/footer.php' ?>


</body>

</html>