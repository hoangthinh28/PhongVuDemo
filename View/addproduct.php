<?php
require_once("../Model/database.php");

$connect =  new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
$sql_list = "SELECT * FROM product";
$query_list = mysqli_query($connect, $sql_list);

if (isset($_POST['sbm'])) {
    $productID = $_POST['productID'];
    $imageProduct = $_POST['imageProduct'];
    $productName = $_POST['productName'];
    $description = $_POST['description'];
    $productType = $_POST['productType'];
    $price = $_POST['price'];

    $sql = "INSERT INTO product(productID, imageProduct, productName, description, productType, price) VALUES('$productID', '$imageProduct', '$productName', '$description', '$productType', '$price')";
    $query = mysqli_query($connect, $sql);
    header('location: ../Controller/index.php?page_layout=listproduct');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Phi Long</title>
</head>

<body>
    <div class="function">
        <a href="index.php?page_layout=addproduct">Thêm Sản Phẩm</a>
        <a href="index.php?page_layout=listproduct" style="padding-left: 20px;">Danh Sách</a>
        <a href="index.php?page_layout=listorder" style="padding-left: 20px;">Đơn đặt hàng</a>
    </div>

    <div class="header">
        <?php require_once("header.php"); ?>
    </div>
    <div class="container-fluid">
        <div class="card-header">
            <h2>Add Product</h2>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Product ID</label>
                    <input type="text" name="productID" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Thumbnail Product(Link image)</label>
                    <input type="text" name="imageProduct" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="productName" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Product Type</label>
                    <input type="text" name="productType" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" class="form-control" required>
                </div>

                <button name="sbm" class="btn btn-success" type="submit">Add</button>
            </form>
        </div>
    </div>

    <div class="footer">
        <?php require_once("footer.php"); ?>
    </div>
</body>

</html>