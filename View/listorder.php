<?php
require_once("../Model/database.php");
$connect =  new mysqli(HOST, USERNAME, PASSWORD, DATABASE);

$sql = "SELECT * FROM ordercart";
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

    <div class="container">
        <h2>Danh Sách Đơn Đặt Hàng</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Đơn Hàng</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Note</th>
                    <th>Tổng giá</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query as $key => $value) : ?>
                    <tr>
                        <td><?php echo $value['cart']; ?></td>
                        <td><?php echo $value['fullname']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['address']; ?></td>
                        <td><?php echo $value['phone']; ?></td>
                        <td><?php echo $value['note']; ?></td>
                        <td><?php echo $value['price']; ?>VND</td>
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