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
                $id_user=json_encode($user['id']);
                $id_enCode=base64_encode($id_user);
                $cookie_name='id_user';
                setcookie($cookie_name,$id_enCode,time() + 3600, '/');
                if($user['position']=='admin'){
                }else{
                  header('location:../../View/Users/homePage.php');
                }
        }
    } else {
        echo '<script language="javascript">';
        echo 'alert("Không tìm thấy tài khoản của bạn!")';
        echo '</script>';
        header('location:../../View/Users/homePage.php');
    }
}
     

// logout
if(isset($_POST['btnLogout'])){
    unset($_COOKIE['id_user']); 
    setcookie('id_user', null, -1, '/'); 
    unset($_SESSION['userName']);
    header('location:../../View/Users/homePage.php');
}