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
    $password_enCode=base64_encode($password);
    $selectUser = "SELECT * FROM users WHERE email='$userName' OR user_name='$userName' AND password='$password_enCode'";
    $result = $useData->query($selectUser);
    if ($result->num_rows > 0) {
        while ($user = $result->fetch_assoc()) {
                $id_user=json_encode($user['id']);
                $id_enCode=base64_encode($id_user);
                $cookie_name='id_user';
                setcookie($cookie_name,$id_enCode,time() + 3600, '/');
                if($user['position']=='admin'){
                    header('location:../../View/Admin/dashboard.php');
                }else{
                  header('location:../../View/Users/homePage.php');
                }
        }
    } else {
        $errors="Login failed !";
        header("location:../../View/Users/login.php?errors=$errors");
    }
}

// logout
if(isset($_POST['btnLogout'])){
    unset($_COOKIE['id_user']); 
    setcookie('id_user', null, -1, '/'); 
    unset($_SESSION['userName']);
    header('location:../../View/Users/homePage.php');
}