
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
<div class="slide-content">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../../../IMAGE/kenvin.jpg" class="image-slide">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../../../IMAGE/avata.jpg" class="image-slide">
  <div class="text">Caption Two</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../../../IMAGE/logo.png" class="image-slide">
  <div class="text">Caption Three</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>