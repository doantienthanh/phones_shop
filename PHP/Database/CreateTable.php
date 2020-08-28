<?php
require_once('ConnectData.php');
$nameDataBase='phones_shop';
$useData=new mysqli($servername, $username, $password,$nameDataBase);
$create_users_table='CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    full_name VARCHAR(100),
    address VARCHAR(200) NOT NULL,
    dob DATE,
    picture VARCHAR(100),
    email   VARCHAR(200) NOT NULL UNIQUE,
    user_name VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(300) NOT NULL,
    position VARCHAR(20) NOT NULL,
    registion_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   
)';
$check_users_table = mysqli_query($useData,'select * from users LIMIT 1');
if($check_users_table === FALSE)
{
    if (mysqli_query($useData,$create_users_table) === TRUE) {
        echo "Table users created successfully ! </br>";
      } else {
        echo "Error creating table: " .mysqli_error($useData);
      }
      mysqli_close($useData);
}
?>