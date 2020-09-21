<?php
require_once('../../Database/CreateTable.php');
$brands='SELECT * FROM brands';
$result_brands=mysqli_query($useData, $brands);
echo"<ul>";
foreach($result_brands as $element){
    if(isset($_GET['category'])){
    $id_brands=$_GET['category'];
        if($id_brands==$element['id']){
            echo "<a href='../Users/category.php?category=".$element['id']."'  class='link-items'><li class='Category-item'><b>".$element['name_brands']."</b></li></a>";
            echo"<hr style='height:5px;border-width:0;color:gray;background-color:red'/>";  
        }else{
            echo "<a href='../Users/category.php?category=".$element['id']."' class='link-items'><li class='Category-item'><b>".$element['name_brands']."</b></li></a>";
            echo"<hr />";
        }
    }else{
        echo "<a href='../Users/category.php?category=".$element['id']."' class='link-items'><li class='Category-item'><b>".$element['name_brands']."</b></li></a>";
        echo"<hr />";
    }
}
echo"</ul>";
?>