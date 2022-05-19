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
            <h1>Movie View </h1>
            <div class="include m-4">
                <table class="table text-white ">
                    <thead>
                        <tr>
                            <th scope="col">Release Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Language</th>
                            <th scope="col">Mode</th>
                            <th scope="col">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($movieList as $key=>$value): //var_dump($value); ?>

                        <tr>
                            <td> <?php echo $value['release_date']; ?>
                            </td>
                            <td> <?php echo $value['name']; ?>
                            </td>
                            <td> <?php echo $value['language']; ?>
                            </td>
                            <td>
                                <?php if($value['on_screening'] == 1): //var_dump($value); ?>
                                Showing
                                <?php endif; ?>
                                <?php if($value['on_screening'] == 2): //var_dump($value); ?>
                                Stop
                                <?php endif; ?>
                                <?php if($value['on_screening'] == 0): //var_dump($value); ?>
                                Trailer
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="movieView.php?movie_id=<?php echo $value['movie_id']; ?>"
                                    class="btn btn-labeled btn-success">
                                    <span class="btn-label"></span>View
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>