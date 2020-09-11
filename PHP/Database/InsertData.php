<?php
require_once('CreateTable.php');
// INSEART USERS TABLE
$fullName = ['Đoàn Tiến Thành', 'Nguyễn Văn A', 'Nguyễn Văn B', 'Nguyễn Văn C', 'Nguyễn Văn D'];
$dob = $today = date("d/m/Y");
$addresses = ['Quảng Bình', 'Đà Nẵng', 'Hà Nội', 'HCM', 'Nghệ An'];
$userName = ['admin', 'user1', 'user2', 'user3', 'user4'];
$password = base64_encode('12345');
$email = ['admin@gmail.com', 'user1@gmail.com', 'user2@gmail.com', 'user3@gmail.com', 'user4@gmail.com'];
$list_data_users = "INSERT INTO users(full_name,address,email,user_name,password,position)
  VALUES ('$fullName[0]','$addresses[0]','$email[0]','$userName[0]','$password','admin'),
  ('$fullName[1]','$addresses[1]','$email[1]','$userName[1]','$password','user'),
  ('$fullName[2]','$addresses[2]','$email[2]','$userName[2]','$password','user'),
  ('$fullName[3]','$addresses[3]','$email[3]','$userName[3]','$password','user'),
  ('$fullName[4]','$addresses[4]','$email[4]','$userName[4]','$password','user')
  ";
$check_data_users = 'SELECT * FROM users';
$re_check_users = array(mysqli_query($useData, $check_data_users));
if (count($re_check_users) <= 1) {
    mysqli_query($useData, $list_data_users);
} else {
    echo "Data users already exists !";
}
// INSERT INTO CATEGORY
$list_data_categories = "INSERT INTO categories(name_category,date_start)
VALUES ('SMART PHONE','2000-05-20'),
('PHỤ KIỆN','2000-05-20')";
    mysqli_query($useData, $list_data_categories);

// INSERT INTO BRANDS
$list_data_brands = "INSERT INTO brands(name_brands,date_start)
VALUES ('APPLE','2000-05-20'),
('OPPO','2000-05-20'),
('XIAOMI','2000-05-20'),
('SAM SUNG','2000-05-20'),
('SONY','2000-05-20'),
('NOKIA','2000-05-20')";
 mysqli_query($useData, $list_data_brands);
// INSERT INTO PRODUCTS
$list_data_products = "INSERT INTO products(id_brands,id_categories,name_products,image_products,quantity_products,price_products,status,date_start)
VALUES (1,1,'IPHONE 11 PRO','iphone11.png',10,18000000,1,'2000-05-20'),
(1,1,'IPHONE 10 PRO','iphone10.png',10,15000000,1,'2000-05-20'),
(2,1,'OPPO A65','oppo.png',10,15000000,1,'2000-05-20'),
(3,1,'XIAOMI  X PRO','xiaomi.png',10,15000000,1,'2000-05-20')";
 mysqli_query($useData, $list_data_products);
