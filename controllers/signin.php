<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('./../controllers/connection.php');

// session_start();

		
		$errors =array();
		$username= "";
		$email= "";
		
		if (isset($_POST['signin-btn'])){
			// var_dump($_POST);

			$email = $_POST['email'];
			$password = $_POST['password'];
			// echo $email;
			// echo $password;
			// die();
			
			$errors = validationSignin($email, $password);
		
			// var_dump($errors);
			// exit;
			if(empty($errors)){
				
                $sql = "SELECT email, password, type FROM admin WHERE email = '{$email}' 
                        UNION
                        SELECT email, password, type FROM customer WHERE email = '{$email}'
                        union
                        SELECT email, password, type FROM theater_owner WHERE email = '{$email}' LIMIT 1";

				// echo($sql);
				// exit;
    			$result=mysqli_query($connection,$sql);
				
				if(!empty($result)) {
					while($row = mysqli_fetch_assoc($result)) {
						if(password_verify($password, $row['password'])) {
               
							$_SESSION['id']= $row['id'];
							if ($row['type'] == 1) {
								$_SESSION['firstName']= $row['firstName'];
								$_SESSION['lastName']= $row['lastName'];                    
							}
							if ($row['type'] ==  2) {
								$_SESSION['theaterName']= $row['theater_name'];                    
							}
							
							$_SESSION['email']= $row['email'];
							$_SESSION['usertype']= $row['type'];
                            $_SESSION['user_id']= $row['customer_id'];
							$_SESSION['message']= "You are now logged in";
	
							if ($_SESSION['usertype'] == 1) {
								header('Location: ../home.php');
	
							}
							if ($_SESSION['usertype'] == 2) {
								header('Location: ../home.php');
	
							}
							if ($_SESSION['usertype'] == 0) {
								header('Location: dashboard.php');
	
							}
						} 
					  }

					
					
				}else{
					$errors['email']= "You have entered an invalid username or password";
					unset($_POST);
				}
			}
		}
	
	function validationSignin($email, $password) {

        $errors = array();
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email']= "Email adress is invalid";
		}
		if(empty($email)){
			$errors['email']="email required";
		}
		if(empty($password)){
			$errors['password']="password required";
		}else{
			// if(!(preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,}$/',$password))){
			// 	$errors['password']="A minimum 8 characters password contains a combination of uppercase and lowercase letter and number are required.";
			// }
		}
		

		return $errors;
        
	}

	
?>