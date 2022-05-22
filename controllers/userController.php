<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../controllers/addMovieController.php";


function getUser($email)
{
    $query = "SELECT * FROM `customer` WHERE  `email` = '$email'";
    return executeQuery($query);
}

function getTheater($email)
{
    $query = "SELECT * FROM `theater_owner` WHERE  `email` = '$email'";
    return executeQuery($query);
}

function getTickets($userId)
{
    $query = "Select * from ticket inner join customer on customer.customer_id =ticket.customer_id inner join theater_owner on ticket.theater_owner = theater_owner.theater_id WHERE ticket.customer_id='$userId' ORDER BY ticket.show_date ASC;";
    return executeQuery($query);

}

function getTheMovieByIdUser($id)
{
    $query = "SELECT * FROM movie where movie_id = '$id'";
    return executeQuery($query);
}

function getTheMoviesViaTheaterUser($id)
{
    $query = "SELECT movie_id FROM movie_theater where theater_id = $id";
    return executeQuery($query);
}





?>

