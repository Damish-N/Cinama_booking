<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/theater.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>Theaters</title>

</head>

<body>
    <?php
        include '../controllers/theatersController.php';
           $all_theaters = getAllTheaters();
    ?>
    <?php require '../common/header.php'; ?>
    <div class="slidecontainer">
        <img class="zoomImgage" src="../image/b1.jpg" alt="beach side city view">
        <div class="bottom-left">
            <h1>Theaters</h1>
        </div>
    </div>
    <div class="theaterCard">
        <?php
            for ($i=0;$i<sizeof($all_theaters);$i++){
                echo '
                    <div class="my-card">
            <div class="card-content">
                <div class="img-place">
                    <div id="card-img"></div>
                </div>
                <div class="card-text">
                    <p>'.$all_theaters[$i]['theater_name'].'</p>
                    <a href="./theaterView.php?theater_id='.$all_theaters[$i]['theater_id'].'" class="btn">See more</a>
                </div>
            </div>
        </div>
                ';
            }

        ?>

    </div>
</body>

</html>