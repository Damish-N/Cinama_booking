<?php 
require_once('connection.php');

$sql = "SELECT * FROM theater_owner";
$theater = mysqli_query($connection,$sql);
if($theater) {
    $theaterList = mysqli_fetch_all($theater,MYSQLI_ASSOC);
    // var_dump($movieList);
}
else {
    echo "Database Query Failed";
} 

if (isset($_POST['delTht'])){

    $sql = "DELETE FROM theater_owner WHERE theater_id= '{$_POST['id']}'";
        // echo $sql;
    // exit;
    if (mysqli_query($connection, $sql)) {
        // echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($connection);
      }
      header('Location: theaterList.php');

      unset($_POST);
      
}

if (isset($_POST['ThtVery'])){

    $sql = "UPDATE theater_owner SET isReg = 1 WHERE theater_id = '{$_POST['id']}';";
    // echo $sql;
    // exit;
    if (mysqli_query($connection, $sql)) {
        // echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($connection);
      }
      unset($_POST);

}

?>