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



?>