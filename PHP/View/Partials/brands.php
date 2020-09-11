<?php
require_once('../../Database/CreateTable.php');
$brands='SELECT * FROM brands';
$result_brands=mysqli_query($useData, $brands);
foreach($result_brands as $element){
    echo "<button class='category-item'><b>".$element['name_brands']. "</b></button>";
}
?>