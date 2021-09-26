<?php
session_start();
require_once("../Model/database.php");
$connect =  new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
//cart
if (isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
        if (!in_array($_GET['id'], $item_array_id)) {
            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION['cart'][$count] = $item_array;
            echo '<script>window.location="../Controller/index.php?page_layout=cart"</script>';
        } else {
            echo '<script>alert("Product is already Added to cart")</script>';
            echo '<script>window.location="../Controller/index.php?page_layout=cart"</script>';
        }
    } else {
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION['cart'][0] = $item_array;
    }
}

//Xoa
if (isset($_POST['sbm'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['product_id'] == $_POST['sbm']) {
            $showcase1 = $key;
            echo '<script>alert("Xoá thành công")</script>';
            echo '<script>window.location="../Controller/index.php?page_layout=cart"</script>';
        }
    }
    unset($_SESSION['cart'][$showcase1]);
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

    <div class="cart_detail">
        <h2>Shopping Cart</h2>
        <table>
            <?php
            $total = 0;
            if (!empty($_SESSION["cart"])) {
                foreach ($_SESSION["cart"] as $key => $value) { ?>
                    <tr>
                        <th style="padding-left: 10px;">Tên sản phẩm</th>
                        <th style="padding-left: 10px;">Số lượng</th>
                        <th style="padding-left: 10px;">Giá</th>
                        <th style="padding-left: 10px;">Tổng giá</th>
                    </tr>
                    <tr>
                        <th style="padding-left: 10px;"><?php echo $value["item_name"]; ?></th>
                        <th style="padding-left: 10px;"><?php echo $value["item_quantity"]; ?></th>
                        <th style="padding-left: 10px;"><?php echo $value["item_price"]; ?></th>
                        <th style="padding-left: 10px;"><?php echo number_format($value["item_price"] * $value["item_quantity"], 2); ?></th>
                        <form action="" method="post">
                            <input type="hidden" name="sbm" value="<?php echo $value["product_id"]; ?>">
                            <th><input type="submit" value="Xoa"></th>
                        </form>
                    </tr>
                    <?php
                    $total = $total + ($value["item_price"] * $value["item_quantity"]);
                    ?>
            <?php
                }
            }
            ?>
            <tr>
                <th style="padding-left: 77%;">Tổng:<?php echo number_format($total, 2); ?>VND</th>
            </tr>
        </table>
    </div>

    <!--Information ordered-->
    <?php
    $sql_list = "SELECT * FROM ordercart";
    $query_list = mysqli_query($connect, $sql_list);

    if (isset($_POST['buy'])) {
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $note = $_POST['note'];
        $orderDetails = rand();
   
        for ($i = 0; $i < count($_SESSION['cart']); ++$i) {
            $cart = implode(' ', $_SESSION['cart'][$i]);
        }

        foreach ($_SESSION['cart'] as $key => $value){
            $productsql = "INSERT INTO manageOrder values ('$orderDetails', '".$value['item_name']."', '".$value['item_price']."', '".$value['item_quantity']."')";
            $queryproduct = mysqli_query($connect, $productsql);
        }

        foreach ($_SESSION['cart'] as $key => $value){
            $sql = "INSERT INTO ordercart VALUES ('$cart', '$fullname', '$email', '$address', '$phone', '$note', '$total', '$orderDetails')";
            $query = mysqli_query($connect, $sql);
        }
        echo '<script>alert("Buy to successfull")</script>';
        echo '<script>window.location="../Controller/index.php?page_layout=mainscreen"</script>';
        unset($_SESSION['cart']);
    }
    ?>

    <div class="information">
        <h1>Thông tin đặt hàng</h1>
        <form action="" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Họ và tên</label>
                <input type="text" name="fullname" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="address" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Note</label>
                <textarea name="note" class="form-control" placeholder="Gởi ghi chú..."></textarea>
            </div>
            <button name="buy" class="btn btn-success" type="submit">Đặt Hàng</button>
        </form>
    </div>
    </div>
    <div class="footer">
        <?php require_once("footer.php"); ?>
    </div>
</body>

</html>