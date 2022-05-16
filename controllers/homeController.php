<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('connection.php');

//get the recent movies
$today = date("Y-m-d");
$last_week = date_create($today)->modify('-7 days')->format('Y-m-d');
$array_of_recent_post = array();
$query = "SELECT * FROM `movie` WHERE `release_date` >= $last_week LIMIT 4";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $array_of_recent_post[] = $row;
    }

} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

//get the highest rates movies

$query = "SELECT * FROM `movie` ORDER BY imbm DESC LIMIT 3";
$result = mysqli_query($connection, $query);
$array_of_imbm_movies = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $array_of_imbm_movies[] = $row;
    }

} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}





mysqli_close($connection);
unset($_POST);


?>
