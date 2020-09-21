<?php
require_once '../Partials/header.php';
require_once '../../Database/CreateTable.php';
?>
<div class="body-admin">
<?php require_once '../Partials/menu_admin.php' ?>
<div class="all-products">
    <h1 class="text-center" style="margin-top:30px;"><b>ALL PRODUCTS</b></h1>
    <div class="titial-table-products">
    <table class="table-products">
        <tbody>
        <tr>
    <th style="width: 8%;">STT</th>
    <th style="width: 20%;">Name</th> 
    <th style="width: 18%;">Image</th>
    <th style="width: 10%;">Quantity</th>
    <th style="width: 20%;">Price</th>
    <th style="width: 12%;"></th>
    <th style="width: 12%;"></th>
  </tr>
    </tbody>
</table>
<div class="table-list-products">
<table class="table-products">
    <?php
    $products='SELECT * FROM products';
    $list_products=mysqli_query($useData,$products);
    $index=0;
    foreach($list_products as $item){
        $index=$index+1;
       echo'<tr style="height: 150px;">
       <td style="width:8%;">'.$index.'</td>
       <td style="width: 20.4%;">'.$item['name_products'].'</td>
       <td style="width: 18.3%;"><img src="../../../IMAGE/'.$item['image_products'].'" style="width: 100%; height: 140px;"></td>
       <td style="width: 10%;">'.$item['quantity_products'].'</td>
       <td style="width: 20.4%;">'.number_format($item['price_products'])." VND".'</td>
       <td style="width: 12.1%;">Smith</td>
       <td style="width: 12%;">50</td>
     </tr>';
    }
    ?>
</table>
    </div>
</div>
</div>
</div>
