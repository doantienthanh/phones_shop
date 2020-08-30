
<?php
 include('../Partials/header.php'); 
?>
<div class="login-page">
<div class='content-login'>
<div class='header-formLogin'>
 <div class='content-header'>
<i class='fas fa-user-alt icon-users'></i>
 </div>
</div>
<form action="../../Controller/Auth/loginControll.php"  method="POST" class='body-form'>
 <span class='text-group'><i class="fas fa-user-alt icons-text"></i>&ensp;&ensp;<input class='text-input' type="text" name="userName"></span>
 <span class='text-group'><i class="fas fa-lock icons-text"></i>&ensp;&ensp;<input class='text-input' type="password" name="password"></span>
 <?php
  if(isset($_GET['errors'])){
    echo "<b style='color:red;margin-left:5%;'>".$_GET['errors']."</b>";
   } 
 ?>
 <button class='btn-login' name="btnLogin" type="submit">Login</button>
 </form>
 <div class='footer-formLogin'>
 </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>