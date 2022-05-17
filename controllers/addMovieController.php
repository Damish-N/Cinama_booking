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


//    echo $ids;


}

function executeQuery($query)
{
    require('connection.php');
    echo "hello";
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

//    return array();
}


?>