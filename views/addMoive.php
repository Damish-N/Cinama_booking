<?php  ?>

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

<div class="add-movie-container">
    <div class="add-movie-form">
        <h5 class="title" style="text-align: center;font-size: 1.5rem;padding-top: 10px;">Add Movie</h5>
        <form action="./schedulePage.php" method="post" class="sign-in-form">
            <div class="basic-detail">
                <div class="input-field">
                    <i class="fa fa-film" aria-hidden="true"></i>
                    <input type="text" name="movieName" placeholder="Movie Name"/>
                </div>
                <div class="input-field">
                    <i class="fa fa-rss" aria-hidden="true"></i>
                    <input type="date" name="year" placeholder="Date publish"/>
                </div>
            </div>
            <input type="submit" name="signup-btn" class="btn" value="Next"/>
        </form>
    </div>
</div>


<?php require '../common/footer.php' ?>

</body>
</html>

