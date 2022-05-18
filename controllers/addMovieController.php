<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//function for get all the movies
function getAllMovies()
{


    $query_1 = "SELECT movie_id FROM `movie_theater`where theater_id = 1";
    $already_added_movies = executeQuery($query_1);
    if (sizeof($already_added_movies) == 0) {
        $query_2 = "SELECT * FROM `movie` WHERE movie_id";
        return executeQuery($query_2);
    } elseif (sizeof($already_added_movies) == 1) {
        $query_2 = "SELECT * FROM `movie` WHERE movie_id not in (" . $already_added_movies[0]['movie_id'] . ")";
        return executeQuery($query_2);
    } else {
        $array_id = array();
        for ($i = 0; $i < count($already_added_movies); $i++) {
            $array_id[] = $already_added_movies[$i]['movie_id'];
        }
        $ids = array_filter($array_id, function ($n) {
            return (is_numeric($n));
        });
        $ids = implode(', ', $ids);
        $query_2 = "SELECT * FROM `movie` WHERE movie_id NOT IN ({$ids})";
        return executeQuery($query_2);
    }


}

function scheduling_days($data)
{

    if ($data == '000') {
        return 1;
    }elseif ($data == '001'){
        return 2;
    }elseif ($data == '010'){
        return 3;
    }elseif ($data == '100'){
        return 4;
    }elseif ($data == '011'){
        return 5;
    }elseif ($data == '101'){
        return 6;
    }elseif ($data == '110'){
        return 7;
    }elseif ($data == '111'){
        return 8;
    }
    

}

function checkDataDay($data){
    if($data){
        return 1;
    }else{
        return  0;
    }
}

function getPatternId($day,$pattern){
    return ($day*8)+$pattern;
}

function executeSchedule($data_movie_id, $data_date, $data_no_of_dates, $monday_day_pattern_id, $tuesday_day_pattern_id, $wednesday_day_pattern_id, $thursday_day_pattern_id, $friday_day_pattern_id, $saturday_day_pattern_id, $sunday_day_pattern_id)
{
    $query = "INSERT INTO `movie_theater`(`movie_id`, `theater_id`)
                VALUES ('$data_movie_id',1)";

    executeQueryInsert($query,0);

    $query_1 = "INSERT INTO `shedule`(`monday`, `tuesday`, `wendesday`, `thursday`, `friday`,
                      `saturday`, `sunday`, `no_of_showing_dates`, `date_start`, `movie_id`,
                      `theater_id`, `is_showing`)
                       VALUES ('$monday_day_pattern_id','$tuesday_day_pattern_id','$wednesday_day_pattern_id',
                               '$thursday_day_pattern_id','$friday_day_pattern_id','$saturday_day_pattern_id',
                                                       '$sunday_day_pattern_id','$data_no_of_dates','$data_date',
                                                                               '$data_movie_id',1,1)";
    executeQueryInsert($query_1,1);

}


function executeQueryInsert($query,$final){
    require('connection.php');
    $result = mysqli_query($connection, $query);
    if($result && $final==1){
        echo '<script>alert("Success"); </script>';
    }
    mysqli_close($connection);
    unset($_POST);
}



function executeQuery($query)
{
    require('connection.php');
    $result = mysqli_query($connection, $query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $all_the_movies = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $all_the_movies[] = $row;
            }

            return $all_the_movies;
        } else {
            return array();
        }
    } else {
        echo 'error';
    }

    mysqli_close($connection);
    unset($_POST);

//    return array();
}


?>