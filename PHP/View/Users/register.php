<?php
 include('../Partials/header.php'); 
?>
<div class="page-register">
<div class="register">
 <div class="form-register">
       <div class="header-register">
           <h1><b class="text-signin">SIGN IN</b></h1>
       </div>
       <form class="body-register" name="registerForm" method="POST" action="../../Controller/Auth/RegisterControll.php">
       <label for="full-name" class="lable-input"><b class="text-tital">full your name:</b><span>(<b style="color: red;">*</b>)</span></label>
       <input type="text" class="text-input-register" name="full_name" required>
       <label for="full-name" class="lable-input"><b>address:</b><span>(<b style="color: red;">*</b>)</span></label>
       <input type="text" class="text-input-register" name="address" required>
       <label for="full-name" class="lable-input"><b>email:</b><span>(<b style="color: red;">*</b>)</span></label>
       <input type="text" class="text-input-register" name="email" required>
       <label for="full-name" class="lable-input"><b>username:</b><span>(<b style="color: red;">*</b>)</span></label>
       <input type="text" class="text-input-register" name="user_name" required>
       <label for="full-name" class="lable-input"><b>passwords:</b><span>(<b style="color: red;">*</b>)</span></label>
       <input type="text" class="text-input-register" name="password" required>
       <label for="full-name" class="lable-input"><b>cofirm password:</b><span>(<b style="color: red;">*</b>)</span></label>
       <input type="text" class="text-input-register" name="pass_again" required>
       <?php
       if(isset($_GET['error'])){
        echo "<b style='color:red;margin-left:25%;'>".$_GET['error']."</b>";
       } 
       ?>
       <button class="btn-signup" name="btn-register">sign up</button>
       </form>
       <div class="bottom-register">
       </div>
 </div>
</div>
</div>
</body>
</html>