<?php
include '../controllers/theatersController.php';
$type = $_GET['movie_type'];

$movies = getAllTheMoviesTypeVice($type);

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
    <link rel="stylesheet" href="../css/movies.css">

    <title>Movies</title>
</head>
<body>

<?php require '../common/header.php'; ?>
<!--<i class="fa-solid fa-angle-right"></i>-->
<div class="category-div">
    <h2>
        <?php echo $type ?> Movies
    </h2>

    <div class="container">
        <div class="horizontal-scroll">
            <button class="btn-scroll" id="btn-scroll-left" onclick="scrollHorizontal(1)"><i
                        class="fas fa-angle-left"></i>
            </button>
            <button class="btn-scroll" id="btn-scroll-right" onclick="scrollHorizontal(-1)"><i
                        class="fas fa-angle-right"></i></i></button>


            <div class="movies-container">
                <?php
                if (sizeof($movies) == 0) {
                    echo 'no movies ';
                } else {
                    for ($i = 0; $i < sizeof($movies); $i++) {
                        echo '
                         <div class="story-div">
                    <div class="header">
                        <h3>' . $movies[$i]['name'] . '</h3>
                    </div>
                    <img src=' . $movies[$i]['url'] . ' alt="">
                    <div class="bottom-bar">
                        <button class="view-btn">
                        <a style="text-decoration: none;color: white" href="./movieDetial.php?movie_id=' . $movies[$i]['movie_id'] . '">
                            More Datail
                        </a>
                        </button>
                    </div>
                </div>
                        ';
                    }
                }
                ?>


            </div>

        </div>
    </div>
    <script src="../js/scroll_bar.js"></script>
</div>

<?php
include '../common/footer.php'
?>
</body>
</html>


