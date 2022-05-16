<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='cinama';

$connection=mysqli_connect('localhost','root','','cinama');
//checking the connection
if(mysqli_connect_errno()){
    die('Databse connection failed' .mysqli_connect_error());
}?>