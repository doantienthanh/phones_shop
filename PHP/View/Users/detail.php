<?php
require_once '../../Database/CreateTable.php';
include_once('../Partials/header.php');
include_once('../Partials/logo.php');
include_once('../Partials/menu.php');

if(isset($_GET['products_id'])){
    $id_products=$_GET['products_id'];
    // echo $id_products;
// SELECT * FROM products,brands,categories,details WHERE products.id=1 AND products.id=details.id_products AND products.id_categories=categories.id AND products.id_brands=brands.id;
$products_detail="SELECT * FROM products,brands,categories,details WHERE products.slug_products='$id_products' AND products.id=details.id_products AND products.id_categories=categories.id AND products.id_brands=brands.id";
$products_query=$useData->query($products_detail);
foreach($products_query as $item){
    echo '
    <div class="detail-products">
<div class="name-products-detail"><h1><b>'.$item['name_products'].'</b></h1></div>
<div class="content-products-detail">
<div class="left-content-products-detail">
  <div class="image-products-detail" style="background: #ffffff;">
      <img src="../../../IMAGE/'.$item['image_products'].'" style="width: 70%;margin-left: 15%;height: 450px;">
  </div>
  <div class="list-image-products-detail" >
 list products
  </div>
</div>
<div class="right-content-products-detail">
<p><b class="price-products-details">'.number_format($item['price_products'])." VND".'</b><span>&ensp;<strike>'.number_format($item['old_price_products'])." VND".'</strike></span><button class="discount-products-detail">'.number_format($item['discount'])." %".'</button></p>
<p><b>HÃNG:&ensp;</b>'.$item['name_brands'].'</p>
<div>
<table class="table-detail-products">
  <tr>
    <th colspan="2"><b>Thông số kĩ thuật</b></th>
  </tr>
  <tr>
    <td class="item-tital"><b>Màu sắc:</b></td>
    <td class="item-content">'.$item['color_phone'].'</td>
  </tr>
  <tr>
    <td class="item-tital"><b>Kích thước màn hình:</b></td>
    <td class="item-content">'.$item['size_screen_phone'].'</td>
  </tr>
  <tr>
    <td class="item-tital"><b>Độ phun giải:</b></td>
    <td class="item-content">'.$item['resolution_phone'].'</td>
  </tr>
  <tr>
    <td class="item-tital"><b>Trọng lượng:</b></td>
    <td class="item-content">'.$item['weight_phone'].'</td>
  </tr>
  <tr>
    <td class="item-tital"><b>Bộ nhớ trong:</b></td>
    <td class="item-content">'.$item['memory_phone'].'</td>
  </tr>
  <tr>
    <td class="item-tital"><b>Hệ điều hành:</b></td>
    <td class="item-content">'.$item['operating_system'].'</td>
  </tr>
  <tr>
    <td class="item-tital"><b>Máy ảnh:</b></td>
    <td class="item-content">'.$item['camera_phone'].'</td>
  </tr>
  <tr>
    <td class="item-tital"><b>Pin:</b></td>
    <td class="item-content">'.$item['pin_phone'].'</td>
  </tr>
  <tr>
    <td class="item-tital"><b>Mô tả:</b></td>
    <td class="item-content">'.$item['description_phone'].'</td>
  </tr>
</table>
</div>
</div>
</div>
<div><button class="btn-order-products">THÊM VÀO GIỎ HÀNGS</button></div>
</div>';
}
}else{
    echo 'detail';
}
?>
<div style="width: 100%;"> 
    sadklasdol
</div>