<?php require 'ManagerData.php'?>

<?php
$messageSuccess = null;
$id = $_GET['id'];
$product = new ManagerData();
    $product->deleteOne($id);

?>
