<?php
require_once("../Model/database.php");
$connect =  new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
//list product:
$sql = "SELECT * FROM product ORDER BY product.price DESC";
$query = executeResult($sql);
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
    <link rel="stylesheet" href="style.css">
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

    <div class="container">
        <h2>Danh Sách Sản Phẩm</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID product</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Product Type</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query as $key => $value) : ?>
                    <tr>
                        <td><?php echo $value['productID']; ?></td>
                        <td><?php echo $value['productName']; ?></td>
                        <td><?php echo $value['description']; ?></td>
                        <td><?php echo $value['productType']; ?></td>
                        <td><?php echo $value['price']; ?></td>
                        <td><a href="index.php?page_layout=delete&id=<?php echo $value['productID']; ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <?php require_once("footer.php"); ?>
    </div>
</body>

</html>