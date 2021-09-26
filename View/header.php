<?php
require_once("../Model/database.php");
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
    <header>
        <div class="logo">
            <a href="../Controller/index.php" style="text-decoration: none;">Phong Vu</a>
        </div>
        <div class="navbar">
            <ul>
                <?php
                $connect = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
                $queryMenu = "SELECT * FROM menunavbar";
                $executeMenu = mysqli_query($connect, $queryMenu);
                while ($row = mysqli_fetch_assoc($executeMenu)) { ?>
                    <?php foreach ($executeMenu as $key => $value) : ?>
                        <li><a href="<?php echo $value['url']; ?>"><?php echo $value['menuproduct']; ?></a></li>
                    <?php endforeach; ?>
                <?php } ?>
            </ul>

            <div class="box">
                <form action="" method="get">
                    <input type="text" name="q" placeholder="Search..." value="<?php if (isset($_GET['q'])) {
                                                                                    echo $_GET['q'];
                                                                      }  ?>">
                    <input type="submit" name="submit" value="Find">
                </form>
            </div>
        </div>
    </header>
</body>

</html>