<?php 
require_once('connection.php');

$sql = "SELECT * FROM movie";
$movie = mysqli_query($connection,$sql);
if($movie) {
    $movieList = mysqli_fetch_all($movie,MYSQLI_ASSOC);
    // var_dump($movieList);
}
else {
    echo "Database Query Failed";
} 

if (isset($_POST['addmov'])){
    // var_dump($_POST);
    // exit;

    $movie_name = $_POST['moviename'];
    $language = $_POST['lang'];
    $date = $_POST['outdate'];
    $time = $_POST['duration'];
    $dsc = $_POST['des'];
    $director = $_POST['directorName'];
    $imbd = $_POST['imbd'];

    $file = $_FILES['file'];
            // print_r($file);
            // exit();
        
    $filename = $_FILES['file']['name'];
    $filetmp_name = $_FILES['file']['tmp_name'];
            // echo  $filetmp_name;
            // exit();
    $filesize = $_FILES['file']['size'];
    $fileerror = $_FILES['file']['error'];
    $filetype = $_FILES['file']['type'];
        
    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));
            // echo $fileActualExt;
    $allowed = array('jpg', 'jpeg', 'png' );
        
    if (in_array($fileActualExt, $allowed)) {
        if ($fileerror === 0) {
            if ($filesize < 1000000) {
                $fileNewName = str_replace(' ', '_', $movie_name).".".$fileActualExt;
                // echo $fileNewName;
                $path = __DIR__.'/../image/movies/'.$fileNewName;
                // echo $path;
                // exit();
                if (file_exists( __DIR__.'/../image/movies/'.$fileNewName)) {
                    unlink( __DIR__.'/../image/movies/'.$fileNewName);
                    
                }
                    move_uploaded_file($filetmp_name, $path);
                    $imgP = './image/movies/'.$fileNewName;
                    $query = "INSERT INTO movie (`movie_id`, `name`, `release_date`, `director_name`, `language`, `on_screening`, `description`, `url`, `imbm`, `duration` ) 
                    VALUES ( NULL,'{$movie_name}', '{$date}', '{$director}', '{$language}', 0, '{$dsc}', '{$imgP}', '{$imbd}', '{$time}')";
            
                    // echo $query;
                    // exit;
                      $result = mysqli_query($connection, $query);
                   

            }else{
                echo "noo";
            }
        
        }else{
            echo "Your file too big";
        }
    }else{
            echo "There was an error";
    }
      
        
        // header('location: .php');
}

if (isset($_POST['mode1'])){

    $sql = "UPDATE movie SET on_screening = 0 WHERE movie_id = '{$_POST['id']}';";
    // echo $sql;
    // exit;
    if (mysqli_query($connection, $sql)) {
        // echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($connection);
      }
    unset($_POST);
}

if (isset($_POST['mode2'])){

    $sql = "UPDATE movie SET on_screening = 1 WHERE movie_id = '{$_POST['id']}';";
    // echo $sql;
    // exit;
    if (mysqli_query($connection, $sql)) {
        // echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($connection);
      }
      unset($_POST);

}

if (isset($_POST['mode3'])){

    $sql = "UPDATE movie SET on_screening = 2 WHERE movie_id = '{$_POST['id']}';";
    // echo $sql;
    // exit;
    if (mysqli_query($connection, $sql)) {
        // echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($connection);
      }
      unset($_POST);

}

if (isset($_POST['delMov'])){

    $sql = "DELETE FROM movie WHERE movie_id= '{$_POST['id']}'";
        // echo $sql;
    // exit;
    if (mysqli_query($connection, $sql)) {
        // echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($connection);
      }
      header('Location: movieList.php');

      unset($_POST);
      
}
?>