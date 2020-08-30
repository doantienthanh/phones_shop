<?php
require_once('../../Database/CreateTable.php');
if(isset($_POST['btn-register'])){
    createUser($useData);
}
function createUser($useData)
{
    $full_name=$_POST['full_name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $check_email="SELECT * FROM users WHERE email='$email'";
    $resultCheckEmail = $useData->query($check_email);
    $user_name=$_POST['user_name'];
    $check_username="SELECT * FROM users WHERE user_name='$user_name'";
    $result_check_username = $useData->query($check_username);
    $password=$_POST['password'];
    $pass_again=$_POST['pass_again'];
    if($password!=$pass_again){
        $error='password incorrect!';
        header("location:../../View/Users/register.php?error=$error");
    }
    elseif ($resultCheckEmail->num_rows > 0) {
        $error='This email already exist!';
        header("location:../../View/Users/register.php?error=$error");
    } elseif ($result_check_username->num_rows > 0) {
        $error='This username already exist! !';
        header("location:../../View/Users/register.php?error=$error");
    } else {
        $pass_encode=base64_encode($password);
        $dataUser="INSERT INTO users(full_name,address,email,user_name,password,position)
        VALUES ('$full_name','$$address','$email','$user_name','$pass_encode','user')";
            if ($useData->query($dataUser) === TRUE) {
                getIdUserRegister($email,$useData);
            } else {
              $error='Create new account error try again !';
              header("location:../../View/Users/register.php?error=$error");
            }
        }
    }
    function getIdUserRegister($email,$useData){
        $users="SELECT * FROM users WHERE email='$email'";
        $result_user = $useData->query($users);
            while ($user = $result_user->fetch_assoc()) {
                $id_enCode=base64_encode($user['id']);
                $cookie_name='id_user';
                setcookie($cookie_name,$id_enCode,time() + 3600, '/');
            }
             header("location:../../View/Users/homePage.php");
    }
?>