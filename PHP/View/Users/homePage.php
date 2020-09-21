<?php 
include_once('../Partials/header.php');
include_once('../Partials/logo.php');
include_once('../Partials/menu.php');
?>
<div class="body-homepage">
    <div class="list-brands">
        <div class="header-list-brands">
            <div class="item-header icon-globe"><i class="fas fa-globe"></i></div>
            <div class="item-header"><b>CATEGORY</b></div>
        </div>
        <?php
include_once('../Partials/brands.php');
?>
    </div>
<div class="slide-products">
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../../IMAGE/iphone11pro.jpg" width="50%" height="700px"> 
    </div>
    <div class="carousel-item">
      <img src="../../../IMAGE/oppo.jpg" width="50%" height="700px">
        
    </div>
    <div class="carousel-item">
      <img src="../../../IMAGE/xiaomi.png" width="50%" height="700px">   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>