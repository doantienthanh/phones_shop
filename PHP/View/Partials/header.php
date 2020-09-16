<?php
require_once('../index.php');
?>
<div class="header-homePage">
 <ul class="left-header">
 <a href="../Users/homePage.php" class="link-romove-home" style="color:white;"><p class="name-shop">thanhdoanShops</p></a>
 </ul>
 <ul class="right-header">
<?php
require_once('../../Database/CreateTable.php');
if (isset($_COOKIE['id_user'])) {
    $id_cookie=$_COOKIE['id_user'];
    $id_enCode=base64_decode($id_cookie);
    $id_user=json_decode($id_enCode);
    $getUser="SELECT * FROM users WHERE id=$id_user";
    $resultUser = $useData->query($getUser);
    if ($resultUser) {
        while ($user = $resultUser->fetch_assoc()) {
          if($user['picture']!=null){
            echo '<img src="../../../IMAGE/'.$user["picture"].'" class="image-user">&nbsp;&nbsp;';
          }else{
            echo '<img src="../../../IMAGE/avata.jpg" class="image-user">&nbsp;&nbsp;';
          }
          echo $user['user_name'].'&nbsp;&nbsp;';
          echo '<form action="../../Controller/Auth/loginControll.php" method="POST" class="form-login"><button class="btn-logout" type="submit" id="btnLogout" name="btnLogout"><i class="fas fa-sign-out-alt icons-logout" ></i></button></form>';
        }
    }
}else{
  echo '<a href="../Users/login.php" class="link-headers" style="color:white;"><i class="fas fa-user-alt btnLogin" id="btnLogin" name="btnLogin"></i></a>
  <a href="../Users/register.php" class="link-headers" style="color:white;"><i class="fa fa-sign-in btnSingin" id="btnLogout"></i></a>';
}
?>
</ul>
</div>
