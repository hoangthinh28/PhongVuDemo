<?php
session_start();
require_once("../Model/database.php");

$connect =  new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
//detail product:
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getProduct = "SELECT * FROM product where productID = '$id'";
    $query = mysqli_query($connect, $getProduct);
    $row_product = mysqli_fetch_array($query);
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

    <div class="container">
        <form action="index.php?page_layout=cart&id=<?php echo $row_product['productID']; ?>" method="post" style="display:flex;">

            <div class="productparta">
                <?php echo '<img src="' . $row_product['imageProduct'] . '" alt="Image" width="40%">'; ?>
                <p><?php echo  $row_product['description']; ?></p>
            </div>

            <div class="productpartb">
                <p style="font-size: 25px; font-weight: bold;"><?php echo $row_product['productName']; ?></p>
                <p style="color: red; font-size:30px; ">
                    <?php echo $row_product['price']; ?> VND
                </p>

                <input type="text" name="quantity" value="1">
                <input type="hidden" name="hidden_name" value="<?php echo $row_product['productName']; ?>">
                <input type="hidden" name="hidden_price" value="<?php echo $row_product['price']; ?>">
                <button name="add_to_cart" type="submit">Add To Cart</button>
            </div>
        </form>
    </div>

    </form>
    </div>
    <div class="footer">
        <?php require_once("footer.php"); ?>
    </div>
</body>

</html>