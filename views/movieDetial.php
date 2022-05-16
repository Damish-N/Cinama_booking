<?php
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
    <link rel="stylesheet" href="../css/movieDetail.css">
    <title>movie detail</title>
</head>
<body>
    <?php include '../common/header.php'?>

    <div class="movie-container">

        <div class="image-area">
            <img src="../image/single-movie.jpg" alt="single-movie">
        </div>
        <div class="detail-area">
            <button class="btn">BOOK A TICKET FOR THIS MOVIE</button>
            <i class="fa fa-clock-o" aria-hidden="true"><span style="color: red">169 min</span></i>
            <br>
            <h5>Country:<span style="font-weight: lighter"> New Zeland, USA</span></h5>
            <h5>Year:<span style="font-weight: lighter"> 2019</span></h5>
            <h5>Category:<span style="font-weight: lighter"> Adventure, Fantazy</span></h5>
            <h5>Release Date:<span style="font-weight: lighter"> December 12, 2012</span></h5>
            <h5>Box office:<span style="font-weight: lighter"> $1 017 003 568</span></h5>
            <h5>Director:<span style="font-weight: lighter">  Peter Jackson</span></h5>
            <h5>Description:<span style="font-weight: lighter">
                We use cookies to make sure that our website works properly, as well as some ‘optional’ cookies to personalise content and advertising, provide social media features and analyse how people use our site. By accepting some or all optional cookies you give consent to the processing of your personal data.</span></h5>

            <ul class="tags">
                <li><a href="#" class="tag">IMDM rate : <span>8.5/10</span></a> </li>
                <li><a href="#" class="tag">Amarzon : <span>8/10</span></a></li>
            </ul>

            <button class="btn watch-trailer-btn">Watch Trailer</button>

        </div>
    </div>



    <?php include '../common/footer.php'?>

</body>
</html>
