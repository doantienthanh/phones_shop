<?php
require_once('ConnectData.php');
$nameDataBase='phones_shop';
$useData=new mysqli($servername, $username, $password,$nameDataBase);
// table users
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
mysqli_query($useData,$create_users_table);
// create table category
$create_category_table='CREATE TABLE IF NOT EXISTS categories(
   id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
   name_category VARCHAR(100) NOT NULL UNIQUE,
   date_start DATE
)';
mysqli_query($useData,$create_category_table);
//  table Brands
$create_brands_table='CREATE TABLE IF NOT EXISTS brands(
  id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
   name_brands VARCHAR(100) NOT NULL UNIQUE,
   date_start DATE
)';
mysqli_query($useData,$create_brands_table);
// table products
$create_products_table='CREATE TABLE IF NOT EXISTS products(
      id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
      id_categories INT NOT NULL,
      id_brands INT NOT NULL,
      slug_products VARCHAR(200)NOT NULL UNIQUE,
      name_products VARCHAR(200)NOT NULL UNIQUE,
      image_products VARCHAR(200)NOT NULL UNIQUE,
      quantity_products INT NOT NULL,
      price_products float NOT NULL,
      old_price_products float,
      discount int,
      description VARCHAR(100),
      status BOOLEAN,
      date_start DATE NOT NULL,
      FOREIGN KEY (id_categories) REFERENCES categories(id) ON DELETE CASCADE ,
      FOREIGN KEY (id_brands) REFERENCES brands(id) ON DELETE CASCADE 
)';
mysqli_query($useData,$create_products_table);
// Table detail products 
$create_details_table='CREATE TABLE IF NOT EXISTS details(
   id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
   id_products INT NOT NULL UNIQUE,
   FOREIGN KEY (id_products) REFERENCES products(id) ON DELETE CASCADE,
   color_phone VARCHAR(220),
   size_screen_phone VARCHAR(255),
   resolution_phone VARCHAR(255),
   weight_phone VARCHAR(255),
   memory_phone VARCHAR(255),
   operating_system VARCHAR(220) NOT NULL,
   camera_phone VARCHAR (300),
   pin_phone VARCHAR (200),
   description_phone VARCHAR(255) 
)';
mysqli_query($useData,$create_details_table);

?>