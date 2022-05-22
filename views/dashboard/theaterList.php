<?php
    require_once('../../controllers/theaterRegController.php');

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
        <?php include './inc/sidebar.php' ?>
        <div class="main">
            <h1>Unregistered List </h1>
            <div class="include m-4">
                <table class="table text-white ">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact No</th>
                            <th scope="col">Seats</th>
                            <th scope="col">Verify</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($theaterList as $key=>$value): //var_dump($value); ?>
                        <?php if($value['isReg'] == 0): //var_dump($value); ?>

                        <tr>

                            <td> <?php echo $value['theater_name']; ?>
                            </td>
                            <td> <?php echo $value['location']; ?>
                            </td>
                            <td> <?php echo $value['email']; ?>
                            </td>
                            <td> <?php echo $value['contact_no']; ?>
                            </td>
                            <td>
                                <?php echo $value['no_balcony_seats']+ $value['no_of_box'] + $value['no_odc_seats']; ?>
                            </td>
                            <td>
                                <form action="" method="post" class="">
                                    <input type="text" value="<?php echo $value['theater_id']; ?> " name="id" hidden>
                                    <input type="submit" name="ThtVery" class="btn btn-primary text-uppercase "
                                        style="width: 90px;" value="Verify">
                                </form>
                            </td>
                            <td>
                                <form action="" method="post" class="">
                                    <input type="text" value="<?php echo $value['theater_id']; ?> " name="id" hidden>
                                    <input type="submit" name="delTht" class="btn btn-danger text-uppercase "
                                        style="width: 90px;" value="Delete">
                                </form>
                            </td>
                        </tr>
                        <?php endif; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>

            <h1>Registered List </h1>
            <div class="include m-4">
                <table class="table text-white ">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact No</th>
                            <th scope="col">Seats</th>
                            <!-- <th scope="col">Verify</th> -->
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($theaterList as $key=>$value): //var_dump($value); ?>
                        <?php if($value['isReg'] == 1): //var_dump($value); ?>

                        <tr>

                            <td> <?php echo $value['theater_name']; ?>
                            </td>
                            <td> <?php echo $value['location']; ?>
                            </td>
                            <td> <?php echo $value['email']; ?>
                            </td>
                            <td> <?php echo $value['contact_no']; ?>
                            </td>
                            <td>
                                <?php echo $value['no_balcony_seats']+ $value['no_of_box'] + $value['no_odc_seats']; ?>
                            </td>
                            <!-- <td>
                                <form action="" method="post" class="">
                                    <input type="text" value="<?php echo $value['theater_id']; ?> " name="id" hidden>
                                    <input type="submit" name="ThtVery" class="btn btn-primary text-uppercase "
                                        style="width: 90px;" value="Verify">
                                </form>
                            </td> -->
                            <td>
                                <form action="" method="post" class="">
                                    <input type="text" value="<?php echo $value['theater_id']; ?> " name="id" hidden>
                                    <input type="submit" name="delTht" class="btn btn-danger text-uppercase "
                                        style="width: 90px;" value="Delete">
                                </form>
                            </td>
                        </tr>
                        <?php endif; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>