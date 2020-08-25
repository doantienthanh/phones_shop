<?php
session_start();
require_once '../../Database/CreateTable.php';
if (isset($_POST['btnLogin'])) {
    login($useData);
}
function login($useData)
{
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $selectUser = "SELECT * FROM users WHERE email='$userName' OR user_name='$userName' AND password='$password'";
    $result = $useData->query($selectUser);
    if ($result->num_rows > 0) {
        while ($user = $result->fetch_assoc()) {
            if ($user['position'] == 'user') {
                header('location: homePage.php');
            } elseif ($user['position'] == 'admin') {
                header('location:../Admin/dashboard.php');
            }
        }
    } else {
        header('location:login.php');
        echo '<script language="javascript">';
        echo 'alert("Không tìm thấy tài khoản của bạn!")';
        echo '</script>';
        
    }
}
