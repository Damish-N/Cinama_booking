<?php require_once ('./controllers/homeController.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <link rel="stylesheet" href="./css/movie.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Home</title>
</head>

<body>
    <?php include './common/hero.php' ?>


    <h2 style="color: #fff; text-align: center; margin: 30px;">Latest Movies</h2>

    <?php
    $retrieve_data_post = $array_of_recent_post;
    include './common/movies.php';
    ?>

    <h2 style="color: #fff; text-align: center; margin: 30px;">Top IMBD Movies</h2>

    <?php
    $retrieve_data_imdm_movies = $array_of_imbm_movies;
    include './common/movieCard.php' ?>

    <h2 style="color: #fff; text-align: center; margin: 30px;">Movies Trailers</h2>

    <?php
    $retrieve_data_post = $array_of_recent_post;
    include './common/movies.php' ?>
    
    <?php include './common/footer.php' ?>
</body>

</html>


