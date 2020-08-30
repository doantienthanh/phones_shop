<?php
require_once('CreateTable.php');
// INSEART USERS TABLE
$fullName=['Đoàn Tiến Thành','Nguyễn Văn A','Nguyễn Văn B','Nguyễn Văn C','Nguyễn Văn D'];
$dob= $today = date("d/m/Y");
$addresses=['Quảng Bình','Đà Nẵng','Hà Nội','HCM','Nghệ An'];
$userName=['admin','user1','user2','user3','user4'];
$password=base64_encode('12345');
$email=['admin@gmail.com','user1@gmail.com','user2@gmail.com','user3@gmail.com','user4@gmail.com'];
  $listData="INSERT INTO users(full_name,address,email,user_name,password,position)
  VALUES ('$fullName[0]','$addresses[0]','$email[0]','$userName[0]','$password','admin'),
  ('$fullName[1]','$addresses[1]','$email[1]','$userName[1]','$password','user'),
  ('$fullName[2]','$addresses[2]','$email[2]','$userName[2]','$password','user'),
  ('$fullName[3]','$addresses[3]','$email[3]','$userName[3]','$password','user'),
  ('$fullName[4]','$addresses[4]','$email[4]','$userName[4]','$password','user')
  ";
if ($useData->query($listData) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $listData . "<br>" . $useData->error;
}
?>