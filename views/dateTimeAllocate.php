<?php
include "../controllers/bookingController.php";

function getArrayOfSchedule($day)
{
    $dayWithSchedule = getScheduleDayByDay(1, 5);


    $Mon = getPatternOfArray($dayWithSchedule[0]['monday'] % 8);
    $Tue = getPatternOfArray($dayWithSchedule[0]['tuesday'] % 8);
    $Wed = getPatternOfArray($dayWithSchedule[0]['wednesday'] % 8);
    $Thu = getPatternOfArray($dayWithSchedule[0]['thursday'] % 8);
    $Fri = getPatternOfArray($dayWithSchedule[0]['friday'] % 8);
    $Sat = getPatternOfArray($dayWithSchedule[0]['saturday'] % 8);
    $Sun = getPatternOfArray($dayWithSchedule[0]['sunday'] % 8);

    if ($day == 'Mon') {
        return $Mon;
    } elseif ($day == 'Tue') {
        return $Tue;
    } elseif ($day == 'Wed') {
        return $Wed;
    } elseif ($day == 'Thu') {
        return $Thu;
    } elseif ($day == 'Fri') {
        return $Fri;
    } elseif ($day == 'Sat') {
        return $Sat;
    } else {
        return $Sun;
    }
}


//echo $Sun[1];


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
    <link rel="stylesheet" href="../css/dateTimeAllocation.css">
    <title>Date and Time Booking</title>
</head>
<body>
<?php include "../common/header.php"; ?>

<div class="container">
    <div class="cinema-detail">
        <div class="input-field">
            <i class="fa fa-film" aria-hidden="true"></i>
            <input disabled value='<?php echo "movie_date" ?>' required type="text" name="movie_name"
                   placeholder="Movie"/>
        </div>
        <div class="input-field">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <input disabled value=<?php echo "theater_id" ?> required type="text" name="theater_id"
                   placeholder="Theater"/>
        </div>
    </div>


    <?php $today = date("Y-m-d"); ?>
    <div class="time-allocation">
        <div class="input-field schedule">
            <h4><?php
                $timestamp = strtotime($today);
                $day = date('D', $timestamp);
                echo $day;;
                $daySchedule=getArrayOfSchedule($day);
                ?></h4>
            <input disabled value="<?php echo $today ?>" type="text" placeholder=""/>
            <div class="btn-area">

                <a href="https://google.com" <?php if ($daySchedule[0] == 0) { ?> style="pointer-events: none" <?php } ?>  >M</a>
                <a href="https://google.com" <?php if ($daySchedule[1] == 0) { ?> style="pointer-events: none" <?php } ?>  >D</a>
                <a href="https://google.com" <?php if ($daySchedule[2] == 0) { ?> style="pointer-events: none" <?php } ?>  >N</a>

            </div>
        </div>
        <div class="input-field schedule">
            <h4><?php
                $today = date_create($today)->modify('1 days')->format('Y-m-d');
                $timestamp = strtotime($today);
                $day = date('D', $timestamp);
                echo $day;;
                $daySchedule=getArrayOfSchedule($day);
                ?></h4>
            <input disabled value="<?php echo $today ?>" type="text" placeholder=""/>
            <div class="btn-area">

                <a href="https://google.com" <?php if ($daySchedule[0] == 0) { ?> style="pointer-events: none" <?php } ?>  >M</a>
                <a href="https://google.com" <?php if ($daySchedule[1] == 0) { ?> style="pointer-events: none" <?php } ?>  >D</a>
                <a href="https://google.com" <?php if ($daySchedule[2] == 0) { ?> style="pointer-events: none" <?php } ?>  >N</a>

            </div>
        </div>

        <div class="input-field schedule">
            <h4><?php
                $today = date_create($today)->modify('1 days')->format('Y-m-d');
                $timestamp = strtotime($today);
                $day = date('D', $timestamp);
                echo $day;;
                $daySchedule=getArrayOfSchedule($day);
                ?></h4>
            <input disabled value="<?php echo $today ?>" type="text" placeholder=""/>
            <div class="btn-area">

                <a href="https://google.com" <?php if ($daySchedule[0] == 0) { ?> style="pointer-events: none" <?php } ?>  >M</a>
                <a href="https://google.com" <?php if ($daySchedule[1] == 0) { ?> style="pointer-events: none" <?php } ?>  >D</a>
                <a href="https://google.com" <?php if ($daySchedule[2] == 0) { ?> style="pointer-events: none" <?php } ?>  >N</a>

            </div>
        </div>

        <div class="input-field schedule">
            <h4><?php
                $today = date_create($today)->modify('1 days')->format('Y-m-d');
                $timestamp = strtotime($today);
                $day = date('D', $timestamp);
                echo $day;;
                $daySchedule=getArrayOfSchedule($day);
                ?></h4>
            <input disabled value="<?php echo $today ?>" type="text" placeholder=""/>
            <div class="btn-area">

                <a href="https://google.com" <?php if ($daySchedule[0] == 0) { ?> style="pointer-events: none" <?php } ?>  >M</a>
                <a href="https://google.com" <?php if ($daySchedule[1] == 0) { ?> style="pointer-events: none" <?php } ?>  >D</a>
                <a href="https://google.com" <?php if ($daySchedule[2] == 0) { ?> style="pointer-events: none" <?php } ?>  >N</a>

            </div>
        </div>

        <div class="input-field schedule">
            <h4><?php
                $today = date_create($today)->modify('1 days')->format('Y-m-d');
                $timestamp = strtotime($today);
                $day = date('D', $timestamp);
                echo $day;;
                $daySchedule=getArrayOfSchedule($day);
                ?></h4>
            <input disabled value="<?php echo $today ?>" type="text" placeholder=""/>
            <div class="btn-area">

                <a href="https://google.com" <?php if ($daySchedule[0] == 0) { ?> style="pointer-events: none" <?php } ?>  >M</a>
                <a href="https://google.com" <?php if ($daySchedule[1] == 0) { ?> style="pointer-events: none" <?php } ?>  >D</a>
                <a href="https://google.com" <?php if ($daySchedule[2] == 0) { ?> style="pointer-events: none" <?php } ?>  >N</a>

            </div>
        </div>

        <div class="input-field schedule">
            <h4><?php
                $today = date_create($today)->modify('1 days')->format('Y-m-d');
                $timestamp = strtotime($today);
                $day = date('D', $timestamp);
                echo $day;;
                $daySchedule=getArrayOfSchedule($day);
                ?></h4>
            <input disabled value="<?php echo $today ?>" type="text" placeholder=""/>
            <div class="btn-area">

                <a href="https://google.com" <?php if ($daySchedule[0] == 0) { ?> style="pointer-events: none" <?php } ?>  >M</a>
                <a href="https://google.com" <?php if ($daySchedule[1] == 0) { ?> style="pointer-events: none" <?php } ?>  >D</a>
                <a href="https://google.com" <?php if ($daySchedule[2] == 0) { ?> style="pointer-events: none" <?php } ?>  >N</a>

            </div>
        </div>

        <div class="input-field schedule">
            <h4><?php
                $today = date_create($today)->modify('1 days')->format('Y-m-d');
                $timestamp = strtotime($today);
                $day = date('D', $timestamp);
                echo $day;;
                $daySchedule=getArrayOfSchedule($day);
                ?></h4>
            <input disabled value="<?php echo   $today?>" type="text" placeholder=""/>
            <div class="btn-area">

                <a href="https://google.com" <?php if ($daySchedule[0] == 0) { ?> style="pointer-events: none" <?php } ?>  >M</a>
                <a href="https://google.com" <?php if ($daySchedule[1] == 0) { ?> style="pointer-events: none" <?php } ?>  >D</a>
                <a href="https://google.com" <?php if ($daySchedule[2] == 0) { ?> style="pointer-events: none" <?php } ?>  >N</a>

            </div>
        </div>

    </div>
</div>


<?php include "../common/footer.php"; ?>
</body>