<?php
require_once('../../Database/CreateTable.php');
$brands='SELECT * FROM brands';
$result_brands=mysqli_query($useData, $brands);
echo"<ul>";
foreach($result_brands as $element){
    echo "<li class='category-item'><b>".$element['name_brands']. "</b></li>";
    echo"<hr />";
}
echo"</ul>";
?>