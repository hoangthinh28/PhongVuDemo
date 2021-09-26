<?php 
require_once("../Model/database.php");
$connect =  new mysqli(HOST, USERNAME, PASSWORD, DATABASE);

$sql = "SELECT * from product where productType = 'Máy Tính Bảng' order by product.price DESC";
$result = mysqli_query($connect, $sql);
if (!$result) {
    die("Cau truy van sai!");
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
    <div class='container'>
        <?php
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <a href="index.php?page_layout=detailproduct&id=<?php echo $row['productID']; ?>">
                <?php echo ' <div class="col-md-3">
                        <img src="' . $row['imageProduct'] . '" alt="Image" width="80%">
                        <p>' . $row['productName'] . '</p>
                        <p>' . $row['price'] . ' VND</del></p>
                        <p> Mã sản phẫm:' . $row['productID'] . '</p>
                    </div>';
                ?>
            </a>
        <?php } ?>
    </div>

    <div class="footer">
        <?php require_once("footer.php"); ?>
    </div>
</body>

</html>