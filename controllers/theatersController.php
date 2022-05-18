<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../controllers/addMovieController.php";

function getAllTheaters()
{
    $query = "SELECT * FROM theater_owner;";

    return executeQuery($query);

}

function getTheTheater($id)
{
    $query = "SELECT * FROM theater_owner WHERE  theater_id='$id'";
    return executeQuery($query);
}

function getTheMoviesViaTheater($id)
{
    $query = "SELECT movie_id FROM movie_theater where theater_id = $id";
    return executeQuery($query);
}

function getTheMovieById($id)
{
    $query = "SELECT * FROM movie where movie_id = '$id'";
    return executeQuery($query);
}

function getAvailableSeats($date, $movie_id, $theater_id, $show_time)
{
    $query = "SELECT SUM(no_balcony_seats) as no_balcony_seats ,SUM(no_odc_seats) as no_odc_seats,SUM(no_of_box) as no_of_box
FROM ticket WHERE show_date='$date' AND movie_id = '$movie_id' AND theater_owner = '$theater_id' and show_time='$show_time';";
    return executeQuery($query);
}

function getAllTheMoviesTypeVice($type)
{
    $query = "SELECT * FROM movie WHERE language = '$type' AND on_screening=1;";
    return executeQuery($query);
}

function getAllTheatersShowCorrespondingMovie($movie_id)
{
    $query = "SELECT theater_id FROM movie_theater WHERE movie_id = '$movie_id';";
    return executeQuery($query);
}


?>