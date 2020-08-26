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
        }
    } else {
        echo '<script language="javascript">';
        echo 'alert("Không tìm thấy tài khoản của bạn!")';
        echo '</script>';
    }
}
if(isset($_COOKIE['id_user'])){
  getUser($useData);
}
function getUser($useData){
    $id_cookie=$_COOKIE['id_user'];
    $id_enCode=base64_decode($id_cookie);
    $id_user=json_decode($id_enCode);
    $getUser="SELECT * FROM users WHERE id=$id_user";
    $resultUser = $useData->query($getUser);
    if($resultUser){
        while ($user = $resultUser->fetch_assoc()) {
            $inforuser= (object)[
                'name'=> $user['full_name'],
                'userName'=>$user['user_name'],
                'address'=>$user['address'],
                'picture'=>$user['picture']
            ];
            $_SESSION['getUser']=json_encode($inforuser);
            echo  json_decode(json_encode( $_SESSION['getUser'])->name);  
            // if($user['position']=='admin'){
            //     header('location: ../../View/Admin/dashboard.php');
            // }else{
            //     header('location: ../../View/Users/homePage.php');
            // }
        }
    }else{
       echo 'khong tim thay';
    }
}