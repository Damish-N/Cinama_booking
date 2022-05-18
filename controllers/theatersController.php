<?php

include "../controllers/addMovieController.php";

function getAllTheaters(){
    $query = "SELECT * FROM theater_owner;";

    return executeQuery($query);

}

function getTheTheater($id){
    $query = "SELECT * FROM theater_owner WHERE  theater_id='$id'";
    return executeQuery($query);
}

function getTheMoviesViaTheater($id){
    $query = "SELECT movie_id FROM movie_theater where theater_id = $id";
    return executeQuery($query);
}

function getTheMovieById($id){
    $query = "SELECT * FROM movie where movie_id = '$id'";
    return executeQuery($query);
}



?>