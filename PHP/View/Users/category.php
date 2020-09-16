<?php
require_once '../../Database/CreateTable.php';
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

    <div class="body-category">
        <div class="container">
            <?php
 if(isset($_GET['category'])){
    $id_brands=$_GET['category'];
    $select_product="SELECT * FROM products WHERE id_brands=$id_brands";
    $list_product=$useData->query($select_product);
    foreach($list_product as $item){
        if($item['discount']!=null){
              echo '
              <a href="detail.php?products_id='.$item['slug_products'].'" class="link-items"> 
              <div class="card-products">
                  <div class="header-card">
                  <button style=" position: absolute;border-radius: 50%;width: 50px;height: 50px;color:white;margin-left:1%;margin-top:1%;border: 1px solid red;background-color: red;"><b>-'.$item['discount'].'% </b></button>
                  <img src="../../../IMAGE/'.$item['image_products'].'" class="image-products" style="margin-top:5%;margin-left:5%;">
                  </div>
                  <div class="body-card" style="margin-top:5%;">
                    <h4  class="tetx-center"><b>'.$item['name_products'].'</b></h4>
                    <p style="color:black;font-size:11px;"><b style="color:red;font-size:16px;">'.number_format($item['price_products'])." VND".'</b> <strike>'.number_format($item['old_price_products'])." VND".'</strike> </p>
                    <p style="font-size:14px;word-wrap:break-word;">'.$item['description'].'</p>
                    </div>
                  <div class="Footer-card">
                  <p>
                  <i class="fas fa-star" style="color: darkgoldenrod;font-size:18px;"></i>
                  <i class="fas fa-star" style="color: darkgoldenrod;font-size:18px;"></i>
                  <i class="fas fa-star" style="color: darkgoldenrod;font-size:18px;"></i>
                  <i class="fas fa-star-half-alt" style="color: darkgoldenrod;font-size:18px;"></i>
                  <i class="far fa-star" style="color: darkgoldenrod;font-size:18px;"></i>
                  </p>
                  </div>
              </div>
           </a>';
        }else{
            echo '
            <a href="detail.php?products_id='.$item['slug_products'].'" class="link-items"> 
              <div class="card-products">
            
                  <div class="header-card">
                  <img src="../../../IMAGE/'.$item['image_products'].'" class="image-products" style="margin-top:5%;margin-left:5%;">
                  </div>
                  <div class="body-card" style="margin-top:5%;">
                    <h4  class="tetx-center"><b>'.$item['name_products'].'</b></h4>
                    <p><b style="color:red;font-size:16px;">'.number_format($item['price_products'])." VND".'</b></p>
                    <p style="font-size:14px;word-wrap:break-word;">'.$item['description'].'</p>
                  </div>
                  <div class="Footer-card">
                  <p>
                  <i class="fas fa-star" style="color: darkgoldenrod;font-size:18px;"></i>
                  <i class="fas fa-star" style="color: darkgoldenrod;font-size:18px;"></i>
                  <i class="fas fa-star" style="color: darkgoldenrod;font-size:18px;"></i>
                  <i class="fas fa-star-half-alt" style="color: darkgoldenrod;font-size:18px;"></i>
                  <i class="far fa-star" style="color: darkgoldenrod;font-size:18px;"></i>
                  </p>
                  </div>
              </div>
              </a>
              ';
        }
 
    }
}
 ?>
        </div>
    </div>