<?php
include '../controllers/theatersController.php';

$movie_id =  $_GET['movie_id'];
$theater_id = $_GET['theater_id'];
$date = $_GET['date'];
$time = $_GET['time'];
$temp_no_odc_seat= (int)$_POST['noOfOdc'];
$temp_no_bal_seat =(int) $_POST['noOfBal'];
$temp_no_box_seat = (int)$_POST['noOfBox'];
var_dump($_POST);
echo ($temp_no_odc_seat);
echo ($temp_no_bal_seat);
echo ($temp_no_box_seat);



$tot = makeTotal($temp_no_odc_seat,$temp_no_bal_seat,$temp_no_box_seat);
$movie = getTheMovieById($movie_id);
$theater = getTheTheater($theater_id);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


    <link rel="stylesheet" href="../css/movie.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/payementPage.css">

    <title>Payment Page</title>
</head>
<body>
    <?php require '../common/header.php' ?>
    <div class="container-payment">
        <h2 style="text-align: center;margin: 20px 5px">Your Allocation BooKing</h2>
        <div class="input-field payment">
            <input style="width: 100%" disabled value='' required type="text" name="movie_name" placeholder='<?php echo $movie[0]['name'].' Movie' ?>'/>
        </div>
        <div class="input-field payment">
            <input disabled value='' required type="text" name="NO_ODC" placeholder="NO ODC SEATS ->"/>
            <input disabled value='' required type="text" name="movie_name" placeholder='<?php echo $temp_no_odc_seat ?>'/>
        </div>
        <div class="input-field payment">
            <input disabled value='' required type="text" name="NO_ODC" placeholder="NO BAL SEATS ->"/>
            <input disabled value='' required type="text" name="movie_name" placeholder='<?php echo $temp_no_bal_seat ?>'/>
        </div>
        <div class="input-field payment">
            <input disabled value='' required type="text" name="NO_ODC" placeholder="NO BOXES ->"/>
            <input disabled value='' required type="text" name="movie_name" placeholder='<?php echo $temp_no_box_seat ?>'/>
        </div>
        <div class="input-field payment">
            <input disabled value='' required type="text" name="NO_ODC" placeholder="TOTAL ->"/>
            <input disabled value='' required type="text" name="movie_name" placeholder='<?php
            echo $tot ?>'/>
        </div>
    </div>
    <?php
    $total = $tot;
    $temp_no_odc_seat_stripe = $temp_no_odc_seat;
    $temp_no_bal_seat_stripe = $temp_no_bal_seat;
    $temp_no_box_stripe = $temp_no_box_seat;
    require '../views/testStripe.php'?>
    <?php

    require  '../common/footer.php'
    ?>


</body>
</html>
