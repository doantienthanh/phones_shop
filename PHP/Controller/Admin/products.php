 <?php
 require_once '../../Database/CreateTable.php';
if(isset($_GET['proDelete'])){
    deleteProduct($_GET['proDelete'],$useData);
}
function deleteProduct($id,$useData){
$delete_products="DELETE FROM products WHERE slug_products='$id'";
$result=$useData->query($delete_products);
echo '<script language="javascript">';
echo 'alert("delete successfully")';
echo '</script>';
header("location:../../View/Admin/allProducts.php");
}
?>