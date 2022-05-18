<?php
    $id = $_GET['theater_id'];
    include "../controllers/theatersController.php";

    $theater =getTheTheater($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/header.css">
    <title>Theaters Page</title>
</head>

<body>
    <?php
    include '../common/header.php' ;
    ?>


    <div class="col-md-12 mt-4 text-white">

        <div class="inner_page">


            <div id="system-message-container">
            </div>


            <div class="theater_info_mainwrp">
                <div class="container">
                    <div class="theater_inner_wrp">
                        <div class="row">
                            <div class="col-sm-8">
                                <h3> <?php echo $theater[0]['theater_name']?>  - <?php echo $theater[0]['location']?></h3>
                            </div>
                            <div class="col-sm-8">
                                <div class="theater_slider">
                                    <img src="https://media.timeout.com/images/101852201/750/422/image.jpg";
"
                                        class="img-responsive" alt="EAP Theater" style="width: 100%;">
                                    <p></p>
                                    <p><?php echo $theater[0]['theater_name']?>  - <?php echo $theater[0]['location']?></p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="theaterinfo_right">
                                    <div class="theater_contact_info">
                                        <h5>Contact Details</h5>
                                        <table class="100%">
                                            <tbody>
                                                <tr>
                                                    <td width="30%">Address : </td>
                                                    <td width="70%"><?php echo $theater[0]['location']?></td>
                                                </tr>
                                                <tr height="10"></tr>
                                                <tr>
                                                    <td>Telephone : </td>
                                                    <td><a href="tel:+94117021443"><?php echo $theater[0]['contact_no']?></a> </td>
                                                </tr>
                                                <tr height="10"></tr>
                                                <tr>
                                                    <td>Email :</td>
                                                    <td><a
                                                            href="mailto:savoymaharagama@eapmovies.com"><?php echo $theater[0]['email']?></a>
                                                    </td>
                                                </tr>
                                                <tr height="20"></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="facilities_wrp">
                                        <h5>Facilities</h5>
                                        <div class="facilities_item">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <img src="../image/parking_icon.jpg" class="img-responsive"
                                                        alt="EAP Theater Facilities">
                                                </div>
                                                <div class="col-sm-8">
                                                    <h6>Car Parking</h6>
                                                    <p>Car parking available for customers.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="facilities_item">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <img src="../image/snack_icon.jpg" class="img-responsive"
                                                        alt="EAP Theater Facilities">
                                                </div>
                                                <div class="col-sm-8">
                                                    <h6>Snack Shop</h6>
                                                    <p>Enjoty snacks and special offers at our snack shop.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="facilities_item">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <img src="../image/restaurant_icon.jpg" class="img-responsive"
                                                        alt="EAP Theater Facilities">
                                                </div>
                                                <div class="col-sm-8">
                                                    <h6>Restaurant</h6>
                                                    <p>Enjoy our delicious meals and great hospitality at our
                                                        restaurants.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>