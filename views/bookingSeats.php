<?php
session_start();
include '../controllers/theatersController.php';
$email=$_SESSION['email'] ;
$type=$_SESSION['usertype'];
if($type==1){
    $user = getCustomer($email);
}

$movie_id = $_GET['movie_id'];
$theater_id = $_GET['theater_id'];
$date = $_GET['date'];
$timeSlot = $_GET['time'];

$movie = getTheMovieById($movie_id);
$theater = getTheTheater($theater_id);

$seats=getAvailableSeats($date,$movie_id,$theater_id,$timeSlot);

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
    <link rel="stylesheet" href="../css/bookingSeats.css">
    <title>Booking Seats</title>
</head>
<body>
<?php include "../common/header.php"; ?>
<form <?php echo 'action="./payementPage.php?movie_id='.$movie_id.'&theater_id='.$theater_id.'&date='.$date.'&time='.$timeSlot.'&userId='.$user[0]['customer_id'].'"'?> class="add-booking-area" method="post">
    <div class="input-field">
        <i class="fa fa-film" aria-hidden="true"></i>
        <input disabled value='<?php echo $movie[0]['name'].' Movie' ?>' required type="text" name="movie_name" placeholder="Movie"/>
    </div>
    <div class="input-field">
        <i class="fa fa-clock-o" aria-hidden="true"></i>
        <input disabled value=<?php echo $theater[0]['theater_name'].' Theater ' ?> required type="text" name="theater_id" placeholder="Theater"/>
    </div>
    <div class="input-field">
        <i class="fa fa-check-square-o" aria-hidden="true"></i>
        <input disabled value='<?php if ($date==0) {echo "9.00am-12.00am";}elseif ($date==1){echo "2.00pm-5.00pm";}
            else{ echo "7.00pm-10.00pm";}
        ?>' type="text" name="timeToWatch"
               placeholder="Time of Watch"/>
    </div>

    <div class="input-field">
        <i class="fa fa-clock-o" aria-hidden="true"></i>
        <input disabled value='<?php echo $date ?>' type="date" name="date"
               placeholder="Time of Watch"/>
    </div>
    <div class="seats-booking">
        <div class="input-field schedule">
            <h3 style="text-align: center">No Bal. Seats available</h3>
            <input disabled value=<?php echo ( $theater[0]['no_balcony_seats']-$seats[0]['no_balcony_seats']) ?>  type="text" placeholder=""/>
            <input required min="0" max=<?php echo( $theater[0]['no_balcony_seats']-$seats[0]['no_balcony_seats']) ?> type="number" name="noOfBal" placeholder="No of Bal"/>
        </div>
        <div class="input-field schedule">
            <h3 style="text-align: center">No ODC. Seats available</h3>
            <input disabled value=<?php echo ( $theater[0]['no_odc_seats']-$seats[0]['no_odc_seats']) ?>  type="text" placeholder="Time of Watch"/>
            <input required min="0" max=<?php echo ( $theater[0]['no_odc_seats']-$seats[0]['no_odc_seats']) ?>  type="number" name="noOfOdc" placeholder="No of ODC"/>
        </div>
        <div class="input-field schedule">
            <h3 style="text-align: center">No BOXES available</h3>
            <input class="number-input" disabled value=<?php echo ( $theater[0]['no_of_box']-$seats[0]['no_of_box']) ?>   type="text"
                   placeholder="Time of Watch"/>
            <input required min="0" max=<?php echo ( $theater[0]['no_of_box']-$seats[0]['no_of_box']) ?>  type="number" name="noOfBox" placeholder="No of Box"/>
        </div>
    </div>
    <input type="submit" name="signup-btn-on" class="btn" value="Reserve Ticket"/>
</form>
<?php include "../common/footer.php"; ?>

</body>
</html>