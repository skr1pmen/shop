<?php
session_start();
require "../php/db.php";
$item = select('SELECT * FROM products WHERE id = :id',['id' => $_GET['id']]);
?>
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $item[0]['title'] ?></title>
    </head>
    <body>
        <?php require "../modules/header.php"?>
        <div class="item">
            <img class="img" src="data:image/png;base64,<?= $item[0]['cover'] ?>" alt="">
            <span class="price"><?= $item[0]['price'] ?></span>
            <h2 class="title"><?= $item[0]['title'] ?></h2>
            <span class="desc"><?= $item[0]['description'] ?></span>
            <pre class="count"><?= $item[0]['count'] ?></pre>
            <form class="btn" action="../php/add_cart.php" method="post">
                <input type="text" value="<?php echo $_GET['id'] ?>" name="id_item" style="display: none">
                <input type="submit" value="Купить">
            </form>
        </div>
        <style>
            .item{
                display: grid;
                width: 1200px;
                margin: 0 auto;
                grid-template-areas: "img title" "img desc" "img count" "price btn";
            }
            .img{
                grid-area: img;
                background: gray;
                max-width: 250px;
            }
            .price{
                grid-area: price;
            }
            .title{
                grid-area: title;
            }
            .desc{
                grid-area: desc;
            }
            .count{
                grid-area: count;
            }
            .btn{
                grid-area: btn;
            }
        </style>
    </body>
</html>
