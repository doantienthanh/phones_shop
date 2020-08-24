<?php
$servername = "localhost";
$username = "root";
$password = "";
// create  Connect data 
$connection= new mysqli($servername, $username, $password);
// check db
if(!$connection){
die('Connect Error: '.$connection->connect_error());
}else{
echo 'Connected successfully !</br>' ;
}

$databaseName="CREATE DATABASE IF NOT EXISTS phones_shop";
if($connection->query($databaseName)===true){
echo 'Created name database success !</br>';
}else{
echo 'create name database error ! </br>'. $connection->error;
}
?>