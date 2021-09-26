<?php 
require_once('../Model/database.php');
$connect =  new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
$id = $_GET['id'];
$sql = "DELETE FROM product WHERE productID = $id";
$query = mysqli_query($connect, $sql);
header('location: ../Controller/index.php?page_layout=listproduct');
?>