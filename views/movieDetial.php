<?php
include '../controllers/theatersController.php';
$movie_id = $_GET['movie_id'];

$movie = getTheMovieById($movie_id);
$theaters = getAllTheatersShowCorrespondingMovie($movie_id);
$theaters_details = Array();
for ($i=0;$i<sizeof($theaters);$i++){
    $theaters_details[]=getTheTheater($theaters[$i]['theater_id']);
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
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!---->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">

    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="../css/movieDetail.css">
    <link rel="stylesheet" href="../css/theater.css">

    <title>movie detail</title>
</head>
<body>
<?php include '../common/header.php' ?>

<div class="movie-container">

    <div class="image-area">
        <?php echo '<img src="' . $movie[0]['url'] . '" alt="single-movie">' ?>
    </div>
    <div class="detail-area">
        <button class="btn">BOOK A TICKET FOR THIS MOVIE</button>
        <i class="fa fa-clock-o" aria-hidden="true"><span
                    style="color: red"><?php echo $movie[0]['duration'] ?> min</span></i>
        <br>
        <h5>Name:<span style="font-weight: lighter"><?php echo $movie[0]['name'] ?></span></h5>
        <h5>Country:<span style="font-weight: lighter"> <?php echo $movie[0]['language'] ?></span></h5>
        <h5>Category:<span style="font-weight: lighter"> <?php echo $movie[0]['language'] ?></span></h5>
        <h5>Release Date:<span style="font-weight: lighter"><?php echo $movie[0]['release_date'] ?></span></h5>
        <h5>Votes:<span style="font-weight: lighter"><?php echo $movie[0]['votes'] ?> </span></h5>
        <h5>Director:<span style="font-weight: lighter"> <?php echo $movie[0]['director_name'] ?></span></h5>
        <h5>Description:<span style="font-weight: lighter">
                <?php echo $movie[0]['description'] ?>
            <ul class="tags">
                <li><a href="#" class="tag">IMDM rate : <span><?php echo $movie[0]['imbm'] ?>/10</span></a> </li>
                <li><a href="#" class="tag">Amarzon : <span>8/10</span></a></li>
            </ul>

            <button class="btn watch-trailer-btn">Watch Trailer</button>

    </div>
</div>

<div class="theaterCard">
    <?php if (sizeof($theaters_details) > 0) {
        for ($i = 0; $i < sizeof($theaters_details); $i++) {
            echo '
            <div class="my-card">
        <div class="card-content">
            <div class="img-place">
                <div id="card-img"></div>
            </div>
            <div class="card-text">
                <p>'.$theaters_details[$i][0]['theater_name'].'-Thetaer</p>
                <a href="../views/dateTimeAllocate.php?movie_id='.$movie_id.'&theater_id='.$theaters[$i]['theater_id'].'" class="btn">Book Now</a>
            </div>
        </div>

    </div>

        ';
        }
    } ?>
</div>

<?php include '../common/footer.php' ?>

</body>
</html>
