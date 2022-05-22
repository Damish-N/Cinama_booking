<?php
session_start();
include '../controllers/addMovieController.php';
//include '../controllers/userController.php';
$movie_id = $_POST['movieName'];
$movie_date = $_POST['date'];
$no_of_dates = $_POST['noOfDates'];


if (isset($_POST['signup-btn'])) {
    $id = $_POST['movieId'];
    $date = $_POST['date'];
    $datesNO = $_POST['noOfDates'];
    $theater_email=$_SESSION['email'];
    $theater = getTheaterFrom($theater_email);
    $theater_id=$theater[0]['theater_id'];
    $monday_day_pattern = checkDataDay($_POST['monMt']) . checkDataDay($_POST['monDt']) . checkDataDay($_POST['monNt']);
    $monday_pattern = scheduling_days($monday_day_pattern);
    $monday_day_pattern_id = getPatternId(0, $monday_pattern);

    $tuesday_day_pattern = checkDataDay($_POST['tueMt']) . checkDataDay($_POST['tueDt']) . checkDataDay($_POST['tueNt']);
    $tuesday_pattern = scheduling_days($tuesday_day_pattern);
    $tuesday_day_pattern_id = getPatternId(1, $tuesday_pattern);

    $wednesday_day_pattern = checkDataDay($_POST['wedMt']) . checkDataDay($_POST['wedDt']) . checkDataDay($_POST['wedNt']);
    $wednesday_pattern = scheduling_days($wednesday_day_pattern);
    $wednesday_day_pattern_id = getPatternId(2, $wednesday_pattern);

    $thursday_day_pattern = checkDataDay($_POST['thuMt']) . checkDataDay($_POST['thuDt']) . checkDataDay($_POST['thuNt']);
    $thursday_pattern = scheduling_days($thursday_day_pattern);
    $thursday_day_pattern_id = getPatternId(3, $thursday_pattern);

    $friday_day_pattern = checkDataDay($_POST['friMt']) . checkDataDay($_POST['friDt']) . checkDataDay($_POST['friNt']);
    $friday_pattern = scheduling_days($friday_day_pattern);
    $friday_day_pattern_id = getPatternId(4, $friday_pattern);


    $saturday_day_pattern = checkDataDay($_POST['satMt']) . checkDataDay($_POST['satDt']) . checkDataDay($_POST['satNt']);
    $saturday_pattern = scheduling_days($saturday_day_pattern);
    $saturday_day_pattern_id = getPatternId(5, $saturday_pattern);


    $sunday_day_pattern = checkDataDay($_POST['sunMt']) . checkDataDay($_POST['sunDt']) . checkDataDay($_POST['sunNt']);
    $sunday_pattern = scheduling_days($sunday_day_pattern);
    $sunday_day_pattern_id = getPatternId(6, $sunday_pattern);

    executeSchedule($id, $date, $datesNO, $monday_day_pattern_id
        , $tuesday_day_pattern_id, $wednesday_day_pattern_id, $thursday_day_pattern_id, $friday_day_pattern_id,
        $saturday_day_pattern_id, $sunday_day_pattern_id,$theater_id);

}


//    echo $data_movie;
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
    <link rel="stylesheet" href="../css/addMovie.css">

    <title>Add a movie</title>
</head>
<body>
<?php require '../common/header.php' ?>
<form class="add-movie-container" method="post">
    <div class="schedule-details">
        <h5 class="title" style="text-align: center;font-size: 1.5rem;padding-top: 10px;">Add Shedule</h5>
        <input hidden value=<?php echo $movie_date ?> required type="date" name="date" placeholder="Date publish"/>
        <input hidden value=<?php echo $movie_id ?> required type="number" name="movieId" placeholder="Date publish"/>
        <input hidden value=<?php echo $no_of_dates ?>  type="number" name="noOfDates" placeholder="No of Dates"/>
        <div class="input-field schedule">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <div class="time-slots">
                <h5>MON</h5>
                <div class="slot">
                    <input name="monMt" type="checkbox" id="monMt">
                    <label for="monMt">MT</label>
                </div>
                <div class="slot">
                    <input name="monDt" type="checkbox" id="monDt">
                    <label for="monDt">DT</label>
                </div>
                <div class="slot">
                    <input name="monNt" type="checkbox" id="monNt">
                    <label for="monNt">NT</label>
                </div>
            </div>
        </div>
        <div class="input-field schedule">
            <i class="fa fa-calendar" aria-hidden="true"></i>

            <div class="time-slots">
                <h5>TUE</h5>
                <div class="slot">
                    <input name="tueMt" type="checkbox" id="tueMt">
                    <label for="tueMt">MT</label>
                </div>
                <div class="slot">
                    <input name="tueDt" type="checkbox" id="tueDt">
                    <label for="tueDt">DT</label>
                </div>
                <div class="slot">
                    <input name="tueNt" type="checkbox" id="tueNt">
                    <label for="tueNt">NT</label>
                </div>
            </div>
        </div>
        <div class="input-field schedule">
            <i class="fa fa-calendar" aria-hidden="true"></i>

            <div class="time-slots">
                <h5>WED</h5>
                <div class="slot">
                    <input name="wedMt" type="checkbox" id="wedMt">
                    <label for="wedMt">MT</label>
                </div>
                <div class="slot">
                    <input name="wedDt" type="checkbox" id="wedDt">
                    <label for="wedDt">DT</label>
                </div>
                <div class="slot">
                    <input name="wedNt" type="checkbox" id="wedNt">
                    <label for="wedNt">NT</label>
                </div>
            </div>
        </div>
        <div class="input-field schedule">
            <i class="fa fa-calendar" aria-hidden="true"></i>

            <div class="time-slots">
                <h5>THU</h5>
                <div class="slot">
                    <input name="thuDt" type="checkbox" id="thuMt">
                    <label for="thuMt">MT</label>
                </div>
                <div class="slot">
                    <input name="thuDt" type="checkbox" id="thuDt">
                    <label for="thuDt">DT</label>
                </div>
                <div class="slot">
                    <input name="thuNt" type="checkbox" id="thuNt">
                    <label for="thuNt">NT</label>
                </div>
            </div>
        </div>
        <div class="input-field schedule">
            <i class="fa fa-calendar" aria-hidden="true"></i>

            <div class="time-slots">
                <h5>FRI</h5>
                <div class="slot">
                    <input name="friMt" type="checkbox" id="friMt">
                    <label for="friMt">MT</label>
                </div>
                <div class="slot">
                    <input name="friDt" type="checkbox" id="friDt">
                    <label for="friDt">DT</label>
                </div>
                <div class="slot">
                    <input name="friNt" type="checkbox" id="friNt">
                    <label for="friNt">NT</label>
                </div>
            </div>
        </div>
        <div class="input-field schedule">
            <i class="fa fa-calendar" aria-hidden="true"></i>

            <div class="time-slots">
                <h5>SAT</h5>
                <div class="slot">
                    <input name="satMt" type="checkbox" id="satMt">
                    <label for="satMt">MT</label>
                </div>
                <div class="slot">
                    <input name="satDt" type="checkbox" id="satDt">
                    <label for="satDt">DT</label>
                </div>
                <div class="slot">
                    <input name="satNt" type="checkbox" id="html">
                    <label for="html">NT</label>
                </div>
            </div>
        </div>
        <div class="input-field schedule">
            <i class="fa fa-calendar" aria-hidden="true"></i>

            <div class="time-slots">
                <h5>SUN</h5>
                <div class="slot">
                    <input name="sunMt" type="checkbox" id="sunMT">
                    <label for="sunMT">MT</label>
                </div>
                <div class="slot">
                    <input name="sunDt" type="checkbox" id="sunDt">
                    <label for="sunDt">DT</label>
                </div>
                <div class="slot">
                    <input name="sunNt" type="checkbox" id="html">
                    <label for="html">NT</label>
                </div>
            </div>
        </div>
        <input type="submit" name="signup-btn" class="btn" value="Submit Movie"/>
    </div>

</form>


<?php require '../common/footer.php' ?>

</body>
