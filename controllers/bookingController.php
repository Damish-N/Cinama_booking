<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include "../controllers/addMovieController.php";
//
//function get

//get the films with theater schedule
function getScheduleDayByDay($theaterId,$movieId){
    $query = "SELECT * FROM shedule WHERE theater_id = '$theaterId 'AND movie_id= '$movieId' AND is_showing=1";


    return executeQuery($query);
}

function getTheTheaterBookingPage($id){
    $query = "SELECT * FROM theater_owner WHERE  theater_id='$id'";
    return executeQuery($query);
}

function getTheMovieByIdBookingPage($id){
    $query = "SELECT * FROM movie where movie_id = '$id'";
    return executeQuery($query);
}


function getPatternOfArray($pattern){
    $arr = Array();
    if($pattern==0){
        $arr[]= 1;
        $arr[]= 1;
        $arr[]= 1;
        return $arr;
    }elseif ($pattern==1){
        $arr[]= 0;
        $arr[]= 0;
        $arr[]= 0;
        return $arr;
    }elseif ($pattern==2){
        $arr[]= 0;
        $arr[]= 0;
        $arr[]= 1;
        return $arr;
    }elseif ($pattern==3){
        $arr[]= 0;
        $arr[]= 1;
        $arr[]= 0;
        return $arr;
    }elseif ($pattern==4){
        $arr[]= 1;
        $arr[]= 0;
        $arr[]= 0;
        return $arr;
    }elseif ($pattern==5){
        $arr[]= 0;
        $arr[]= 1;
        $arr[]= 1;
        return $arr;
    }elseif ($pattern==6){
        $arr[]= 1;
        $arr[]= 0;
        $arr[]= 1;
        return $arr;
    }elseif ($pattern==7){
        $arr[]= 1;
        $arr[]= 1;
        $arr[]= 0;
        return $arr;
    }
}


?>