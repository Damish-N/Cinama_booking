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
    <link rel="stylesheet" href="../css/bookingSeats.css">
    <title>Seat Booking</title>
</head>
<body>
<?php include "../common/header.php"; ?>

<form class="add-booking-area" method="post">
    <div class="input-field">
        <i class="fa fa-film" aria-hidden="true"></i>
        <input disabled value=<?php echo "movie_date" ?> required type="text" name="movie_name" placeholder="Movie"/>
    </div>
    <div class="input-field">
        <i class="fa fa-clock-o" aria-hidden="true"></i>
        <input disabled value=<?php echo "theater_id" ?> required type="text" name="theater_id" placeholder="Theater"/>
    </div>
    <div class="input-field">
        <i class="fa fa-check-square-o" aria-hidden="true"></i>
        <input disabled value=<?php echo "7.00pm-10.00pm" ?>  type="text" name="timeToWatch"
               placeholder="Time of Watch"/>
    </div>

    <div class="seats-booking">
        <div class="input-field schedule">
            <i class="fa fa-child" aria-hidden="true"></i>
            <input  disabled value=<?php echo "15-ODC" ?>  type="text" placeholder=""/>
            <input  min="0" max="15" type="number" name="noOfDates" placeholder="No of ODC"/>
        </div>
        <div class="input-field schedule">
            <i class="fa fa-child" aria-hidden="true"></i>
            <input disabled value=<?php echo "15-BALCONY-SEATS" ?>  type="text" placeholder="Time of Watch"/>
            <input required min="0" max="15" type="number" name="noOfDates" placeholder="No of ODC"/>
        </div>
        <div class="input-field schedule">
            <i class="fa fa-child" aria-hidden="true"></i>
            <input class="number-input" disabled value=<?php echo "5-BOXES" ?>  type="text"
                   placeholder="Time of Watch"/>
            <input min="0" max="15 type="number" name="noOfDates" placeholder="No of ODC"/>
        </div>
    </div>
    <input type="submit" name="signup-btn-on" class="btn" value="Reserve Ticket"/>
</form>
<?php include "../common/footer.php"; ?>

</body>
</html>