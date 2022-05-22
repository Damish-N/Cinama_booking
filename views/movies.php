<?php
include '../controllers/theatersController.php';
// include( "http://localhost/cinama/views../controllers/config.php");

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


    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/addMovie.css">
    <link rel="stylesheet" href="../css/movies.css">

    <title>Movies</title>
</head>
<style>
    .theaterCard {
        display: flex;
        flex-wrap: wrap;
        width: 1200px;
        justify-content: center;
        margin: 0 auto;
    }

    .my-card {
        flex-basis: auto;
        width: 250px;
        height: 400px;
        box-shadow: 0 10px 16px 0 rgb(255 255 255 / 20%), 0 6px 20px 0 rgb(245 248 246 / 19%);
        border-radius: 20px;
        margin: 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .img-place {
        overflow: hidden;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    #card-img {
        width: 100%;
        height: 280px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        /* background-image: url(https://media.timeout.com/images/101852201/750/422/image.jpg); */
        background-repeat: no-repeat;
        background-size: cover;
        transition: 0.5s;
    }

    #card-img:hover {
        width: 300px;
    }

    .card-2-space {
        padding: 0 40px 20px 40px;
    }

    .card-text {
        padding: 5%;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        background-color: #fff;
        color: #000;
        height: 120px;
    }

    .card-text p {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 20px;
    }


    .btn {
        background-color: #0d0d0d;
        color: #ffffff;
        padding: 5px;
        border: 1px solid #1a1a1a;
        border-radius: 8px;
        transition: 0.3s;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 14px;
        text-decoration: none;
    }

    .btn:hover {
        background-color: #bfbfbf;
        color: #0d0d0d;
        border: 1px solid #808080;
        font-weight: 300px;
    }
</style>

<body>

<?php require '../common/header.php'; ?>
<!--<i class="fa-solid fa-angle-right"></i>-->
<div class="category-div">
    <h2>
        <?php echo $type ?> Movies
    </h2>

    <div class="container">

        <div class="theaterCard">
            <?php if (sizeof($movies) == 0): ?>
                <p>No Movies</p>
            <?php else: ?>
                <?php for ($i = 0; $i < sizeof($movies); $i++): ?>
                    <div class="my-card">
                        <div class="card-content">
                            <div class="img-place">
                                <div id="card-img"
                                     style="background-image: url(<?php echo get_url($movies[$i]['url']); ?>)">
                                </div>
                            </div>
                            <div class="card-text">
                                <p><?php echo $movies[$i]['name']; ?></p>
                                <a href="./movieDetial.php?movie_id=<?php echo $movies[$i]['movie_id']; ?>" class="btn"> Book Ticket</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            <?php endif; ?>

        </div>
    </div>

    <?php
    include '../common/footer.php'
    ?>
</body>

</html>