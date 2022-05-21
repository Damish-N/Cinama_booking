<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include(dirname(__FILE__) . "/config.php");


require_once('./../controllers/connection.php');

// var_dump($_POST);
if (isset($_POST['signup-btn'])) {
    // echo(1);
    // exit;
    $errors = array();

    if (empty($errors)) {
        $firstName = mysqli_real_escape_string($connection, $_POST['firstname']);
        $lastName = mysqli_real_escape_string($connection, $_POST['lastname']);
        $userName = mysqli_real_escape_string($connection, $_POST['username']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $city = mysqli_real_escape_string($connection, $_POST['city']);
        $contact = mysqli_real_escape_string($connection, $_POST['contactNo']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $passwordConf = mysqli_real_escape_string($connection, $_POST['passwordConf']);


        $query = "INSERT INTO customer ( password, first_name, last_name, email, city, contact_no) VALUES('{$hashed_password}','{$firstName}', '{$lastName}', '{$email}','{$city}','{$contact}');";

        // echo($query);
        // exit;

        if (mysqli_query($connection, $query)) {
            // echo "New record created successfully";
            header('Location:http://localhost/cinama/views/signin.php');

        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }

        mysqli_close($connection);
        unset($_POST);
    }
}

if (isset($_POST['signup2-btn'])) {
    // echo(1);
    // exit;
    $errors = array();

    if (empty($errors)) {
        $theaterName = mysqli_real_escape_string($connection, $_POST['theatername']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $location = mysqli_real_escape_string($connection, $_POST['location']);
        $contact = mysqli_real_escape_string($connection, $_POST['contactNo']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $odc = mysqli_real_escape_string($connection, $_POST['odc']);
        $balkeny = mysqli_real_escape_string($connection, $_POST['balkeny']);
        $box = mysqli_real_escape_string($connection, $_POST['box']);


        $query = "INSERT INTO `theater_owner`( `theater_name`, `email`, `password`, `location`, `contact_no`, `no_balcony_seats`, `no_odc_seats`, `no_of_box`, `open_time`, `type`, `isReg`) 
VALUES ('$theaterName','$email','$hashed_password','$location','$contact','$balkeny','$odc','$box','2022-05-10 08:35:50',2,0)";

        // echo($query);
        // exit;

        if (mysqli_query($connection, $query)) {
            header('Location:http://localhost/cinama/views/signin.php');
            // echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }

        mysqli_close($connection);
        unset($_POST);
    }
}

?>