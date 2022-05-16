<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once('./../controllers/connection.php');

// var_dump($_POST);
if(isset($_POST['signup-btn'])){
    // echo(1);
    // exit;
    $errors=array();
       
    if(empty($errors)){
        $firstName =mysqli_real_escape_string($connection,$_POST['firstname']);
        $lastName =mysqli_real_escape_string($connection,$_POST['lastname']);
        $userName =mysqli_real_escape_string($connection,$_POST['username']);
        $email =mysqli_real_escape_string($connection,$_POST['email']);
        $city =mysqli_real_escape_string($connection,$_POST['city']);
        $contact =mysqli_real_escape_string($connection,$_POST['contactNo']);
        $password =mysqli_real_escape_string($connection,$_POST['password']);
        $hashed_password=password_hash($password,PASSWORD_DEFAULT);
        $passwordConf =mysqli_real_escape_string($connection,$_POST['passwordConf']);
        

        $query="INSERT INTO customer (customer_id , user_name, password, first_name, last_name, email, city, contact_no) VALUES(NULL,'{$userName}', '{$hashed_password}','{$firstName}', '{$lastName}', '{$email}','{$city}','{$contact}');";
               
        // echo($query);
        // exit;
      
         if (mysqli_query($connection, $query)) {
            // echo "New record created successfully";
          } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
          }
          
          mysqli_close($connection);
          unset($_POST);
    }
}

if(isset($_POST['signup2-btn'])){
    // echo(1);
    // exit;
    $errors=array();
       
    if(empty($errors)){
        $theaterName =mysqli_real_escape_string($connection,$_POST['theatername']);
        $email =mysqli_real_escape_string($connection,$_POST['email']);
        $location =mysqli_real_escape_string($connection,$_POST['location']);
        $contact =mysqli_real_escape_string($connection,$_POST['contactNo']);
        $password =mysqli_real_escape_string($connection,$_POST['password']);
        $hashed_password=password_hash($password,PASSWORD_DEFAULT);
        $odc =mysqli_real_escape_string($connection,$_POST['odc']);
        $balkeny =mysqli_real_escape_string($connection,$_POST['balkeny']);
        $box =mysqli_real_escape_string($connection,$_POST['box']);
        

        $query="INSERT INTO theater_owner (theater_id , theater_name,email, password, location, contact_no, no_balcony_seats, no_odc_seats, no_of_box) VALUES(NULL,'{$theaterName}','{$email}', '{$hashed_password}', '{$location }',{$contact}, {$odc}, {$balkeny}, {$box});";
               
        // echo($query);
        // exit;
      
         if (mysqli_query($connection, $query)) {
            // echo "New record created successfully";
          } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
          }
          
          mysqli_close($connection);
          unset($_POST);
    }
}

?>