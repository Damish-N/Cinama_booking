
<?php
include '../controllers/userController.php';

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

<div class="add-movie-container">
    <div class="add-movie-form">
        <h5 class="title" style="text-align: center;font-size: 1.5rem;padding-top: 10px;">Add Movie</h5>
        <form action="./schedulePage.php" method="post" class="sign-in-form">
            <div class="basic-detail">
                <div class="input-field">
                    <i class="fa fa-film" aria-hidden="true"></i>
                    <select required class="select-movie" name="movieName" id="cars">
                        <?php
                            require_once ('../controllers/addMovieController.php');
                            session_start();

                            $email=$_SESSION['email'];

                            $theater = getTheater($email);
                            $options = getAllMovies($theater[0]['theater_id']);
                            for ($i=0;$i<count($options);$i++){
                                echo '<option value='.$options[$i]['movie_id'].'>'.$options[$i]['name'].'</option>';
                            }
                        ?>
                    </select>

                </div>
<!--                --><?php
//                session_start();
//                echo '<h3> dsasa' .$_SESSION['email'].' </h3>';
//                ?>
                <div class="input-field">
                    <i class="fa fa-rss" aria-hidden="true"></i>
                    <input required type="date" name="date" placeholder="Date publish"/>
                </div>
                <div class="input-field">
                    <i class="fa fa-rss" aria-hidden="true"></i>
                    <input required type="number" name="noOfDates" placeholder="No of Dates"/>
                </div>
            </div>
            <input type="submit" name="signup-btn-on" class="btn" value="Next"/>
        </form>
    </div>
</div>


<?php require '../common/footer.php' ?>

</body>
</html>

