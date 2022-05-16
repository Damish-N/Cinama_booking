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



    <link rel="stylesheet" href="../css/movie.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/addMovie.css">

    <title>Add a movie</title>
</head>
<body>
    <?php require '../common/header.php'?>

    <div class="add-movie-container">
        <div class="add-movie-form">
            <h5 class="title" style="text-align: center;font-size: 1.5rem;padding-top: 10px;">Add Movie</h5>
            <form action="#" method="post" class="sign-in-form">
                <div class="basic-detail">
                    <div class="input-field">
                        <i class="fa fa-film" aria-hidden="true"></i>
                        <input type="text" name="movieName" placeholder="Movie Name"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="directorName" placeholder="Director Name"/>
                    </div>
                    <div class="input-field">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <input type="number" name="duration" placeholder="Duration"/>
                    </div>
                    <div class="input-field">
                        <i class="fa fa-rss" aria-hidden="true"></i>
                        <input type="date" name="year" placeholder="Date publish"/>
                    </div>
                    <div class="input-field">
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <input type="number" name="ratings" placeholder="Ratings"/>
                    </div>
                    <div class="input-field">
                        <i class="fa fa-address-card-o" aria-hidden="true"></i>
                        <input type="text" name="description" placeholder="Description"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="number" name="showNoOfDays" placeholder="Showing Dates"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="number" name="other" placeholder="Other"/>
                    </div>

                </div>
                <div class="schedule-details">
                    <div class="input-field schedule">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <div class="time-slots">
                            <h5 >MON</h5>
                            <div class="slot">
                                <input type="checkbox" id="monMt">
                                <label for="monMt">MT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="monDt">
                                <label for="monDt">DT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="monNt">
                                <label for="monNt">NT</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-field schedule">
                        <i class="fa fa-calendar" aria-hidden="true"></i>

                        <div class="time-slots">
                            <h5 >TUE</h5>
                            <div class="slot">
                                <input type="checkbox" id="tueMt">
                                <label for="tueMt">MT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="tueDt">
                                <label for="tueDt">DT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="tueNt">
                                <label for="tueNt">NT</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-field schedule">
                        <i class="fa fa-calendar" aria-hidden="true"></i>

                        <div class="time-slots">
                            <h5 >WED</h5>
                            <div class="slot">
                                <input type="checkbox" id="wedMt">
                                <label for="wedMt">MT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="wedDt">
                                <label for="wedDt">DT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="wedNt">
                                <label for="wedNt">NT</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-field schedule">
                        <i class="fa fa-calendar" aria-hidden="true"></i>

                        <div class="time-slots">
                            <h5 >THU</h5>
                            <div class="slot">
                                <input type="checkbox" id="thuMt">
                                <label for="thuMt">MT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="thuDt">
                                <label for="thuDt">DT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="thuNt">
                                <label for="thuNt">NT</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-field schedule">
                        <i class="fa fa-calendar" aria-hidden="true"></i>

                        <div class="time-slots">
                            <h5 >FRI</h5>
                            <div class="slot">
                                <input type="checkbox" id="friMt">
                                <label for="friMt">MT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="friDt">
                                <label for="friDt">DT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="friNt">
                                <label for="friNt">NT</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-field schedule">
                        <i class="fa fa-calendar" aria-hidden="true"></i>

                        <div class="time-slots">
                            <h5 >SAT</h5>
                            <div class="slot">
                                <input type="checkbox" id="satMt">
                                <label for="satMt">MT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="satDt">
                                <label for="satDt">DT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="html">
                                <label for="html">NT</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-field schedule">
                        <i class="fa fa-calendar" aria-hidden="true"></i>

                        <div class="time-slots">
                            <h5 >SUN</h5>
                            <div class="slot">
                                <input type="checkbox" id="sunMT">
                                <label for="sunMT">MT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="sunDt">
                                <label for="sunDt">DT</label>
                            </div>
                            <div class="slot">
                                <input type="checkbox" id="html">
                                <label for="html">NT</label>
                            </div>
                        </div>
                    </div>

                    <input type="submit" name="signup-btn" class="btn" value="Submit Movie" />
                </div>
            </form>
        </div>
    </div>


    <?php require '../common/footer.php'?>

</body>
</html>