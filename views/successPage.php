<?php
echo $_GET['movie_id'];
$amount = $_GET['tot'];
$movie_id = $_GET['movie_id'];
$theater_id= $_GET['theater_id'];
$date = $_GET['date'];
$time=$_GET['time'];
$userId = $_GET['userId'];
$odc =$_GET['odc'];
$bal = $_GET['bal'];
$box= $_GET['box'];

require('../controllers/config.php');
require '../controllers/theatersController.php';
$token = $_POST['stripeToken'];



    $data=\Stripe\Charge::create([
        "amount"=>$amount,
        "currency"=>"USD",
        "description"=>"text",
        "source"=>$token
    ]);

//echo '<pre>';
//print_r($data);



$result=createBooking($amount,$theater_id,$movie_id,$date,$time,$odc,$bal,$box,$userId);
if($result){
//    transactionCreate();
   echo "success";
   header("Location:http://localhost/cinama/home.php");
}else{
    echo "fail";
}

?>
