<?php
    require_once("../Model/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <?php
    if (isset($_GET['page_layout'])) {
        switch ($_GET['page_layout']) {
            case 'mainscreen':
                require_once('../View/mainscreen.php');
                break;
            case 'addproduct':
                require_once('../View/addproduct.php');
                break;
            case 'listproduct':
                require_once('../View/listproduct.php');
                break;
            case 'detailproduct':
                require_once('../View/detailproduct.php');
                break;
            case 'cart':
                require_once('../View/cart.php');
                break;
            case 'listorder':
                require_once('../View/listorder.php');
                break;
            case 'delete':
                require_once('../View/deleteproduct.php');
                break;
            default:
                require_once('../View/mainscreen.php');
                break;
        }
    }else{
        require_once('../View/mainscreen.php');
    }
    ?>
</body>
</html>