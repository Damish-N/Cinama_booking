<?php
include '../controllers/theatersController.php';
require_once('../controllers/movieController.php');

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!---->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/theater.css">


    <title>movie detail</title>
</head>

<body>
    <?php include '../common/header.php' ?>

    <div style="width: 1200px; margin: 0 auto; ">
        <?php foreach($movieList as $key=>$value): //var_dump($value); ?>
        <?php if($_GET['movie_id'] == $value['movie_id']): //var_dump($value); ?>
        <div class="card " style="background-color: #0e0d12">
            <div class="row">
                <aside class="col-sm-5 border-right" >
                    <article class="gallery-wrap" >
                        <div class="img-big-wrap mt-5 mx-5" >
                            <div > <a href="#"><img style="width: 400px; height: 550px; object-fit: cover;"
                                        src="../<?php echo $value['url']; ?>"> </a></div>
                        </div> <!-- slider-product.// -->
                    </article> <!-- gallery-wrap .end// -->
                </aside>
                <aside class="col-sm-7 text-white" style="border-left: 1px solid #fff;">
                    <article class="card-body mt-5">
                        <h3 class="title mb-3"> <?php echo $value['name']; ?>

                        </h3>
<!--                        <a href="" class="btn btn-outline-primary text-uppercase m-2 " style="width: 150px">Trailer</a>-->

                        <dl class="item-property">
                            <dt>Language</dt>
                            <dd>
                                <p><?php echo $value['language']; ?> </p>
                            </dd>
                        </dl>
                        <dl class="item-property">
                            <dt>Description</dt>
                            <dd>
                                <p><?php echo $value['description']; ?> </p>
                            </dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Release Date</dt>
                            <dd><?php echo $value['release_date']; ?></dd>
                        </dl> <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>Duration</dt>
                            <dd><?php echo $value['duration']; ?> Minutes</dd>
                        </dl> <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>Director</dt>
                            <dd><?php echo $value['director_name']; ?> </dd>
                        </dl> <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>IMBD </dt>
                            <dd>#<?php echo $value['imbm']; ?> </dd>
                        </dl> <!-- item-property-hor .// -->

                        <form action="" method="post" class="">
                            <input type="text" value="<?php echo $value['movie_id']; ?> " name="id" hidden>
                            <?php if($value['on_screening'] == 0): //var_dump($value); ?>
                            <input type="submit" name="mode1" class="btn btn-outline-success text-uppercase mx-2 "
                                style="width: 150px" value="Trailer">
                            <?php else: ?>

                            <?php endif; ?>

                        </form>

                    </article> <!-- card-body.// -->
                </aside> <!-- col.// -->
            </div> <!-- row.// -->
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
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