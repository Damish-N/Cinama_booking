<?php
    require_once('../../controllers/movieController.php');

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/dashboard.css" />
    <title>Document</title>
</head>

<body>
    <div class="dashcontainer">
        <?php include '../inc/sidebar.php' ?>
        <div class="main">
            <h1>Movie View</h1>
            <div class="include m-4">
                <?php foreach($movieList as $key=>$value): //var_dump($value); ?>
                <?php if($_GET['movie_id'] == $value['movie_id']): //var_dump($value); ?>
                <div class="card " style="background-color: #0e0d12">
                    <div class="row">
                        <aside class="col-sm-5 border-right">
                            <article class="gallery-wrap">
                                <div class="img-big-wrap mt-5 mx-5">
                                    <div> <a href="#"><img style="width: 340px; height: 420px; object-fit: cover;"
                                                src="../../<?php echo $value['url']; ?>"> </a></div>
                                </div> <!-- slider-product.// -->
                            </article> <!-- gallery-wrap .end// -->
                        </aside>
                        <aside class="col-sm-7 text-white">
                            <article class="card-body p-5">
                                <h3 class="title mb-3"> <?php echo $value['name']; ?>

                                </h3>
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
                                <hr>
                                <dl class="param param-feature">
                                    <dt>Select The Mode</dt>
                                </dl> <!-- item-property-hor .// -->
                                <form action="" method="post" class="">
                                    <input type="text" value="<?php echo $value['movie_id']; ?> " name="id" hidden>
                                    <?php if($value['on_screening'] == 0): //var_dump($value); ?>
                                        <input type="submit" name="mode1"
                                        class="btn btn-outline-success text-uppercase mx-2 " style="width: 150px"
                                        value="Trailer">
                                    <?php else: ?>
                                        <input type="submit" name="mode1"
                                        class="btn btn-outline-primary text-uppercase mx-2 " style="width: 150px"
                                        value="Trailer">
                                    <?php endif; ?>

                                    <?php if($value['on_screening'] == 1): //var_dump($value); ?>
                                        <input type="submit" name="mode2"
                                        class="btn btn-outline-success text-uppercase mx-2" style="width: 150px"
                                        value="Showing">
                                    <?php else: ?>
                                        <input type="submit" name="mode2"
                                        class="btn btn-outline-primary text-uppercase mx-2" style="width: 150px"
                                        value="Showing">
                                    <?php endif; ?>

                                    <?php if($value['on_screening'] == 2): //var_dump($value); ?>
                                        <input type="submit" name="mode3"
                                        class="btn btn-outline-success text-uppercase mx-2" style="width: 150px"
                                        value="Expired">
                                    <?php else: ?>
                                        <input type="submit" name="mode3"
                                        class="btn btn-outline-primary text-uppercase mx-2" style="width: 150px"
                                        value="Expired">
                                    <?php endif; ?>
                                    
                                </form>
                                <hr>

                                <form action="" method="post" class="">
                                    <input type="text" value="<?php echo $value['movie_id']; ?> " name="id" hidden>
                                    <a href="#" class="btn btn-lg btn-warning text-uppercase mx-2"> UPDATE </a>
                                    <input type="submit" name="delMov" class="btn btn-danger text-uppercase mx-2"
                                        style="width: 120px; padding: 11px;" value="DELETE">
                                </form>

                            </article> <!-- card-body.// -->
                        </aside> <!-- col.// -->
                    </div> <!-- row.// -->
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</body>

</html>