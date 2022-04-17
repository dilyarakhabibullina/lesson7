<?php
include "../models/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
</head>
<body>
    <div class="container">
        <?php include "../templates/menu.php"; ?>
    <div class="content">
<h3>Добро пожаловать в наш магазин</h3>
<hr>
<?php
 $goods = goods_all($link);
//  print_r($goods);
 if($goods){
     foreach ($goods as $good){?>
         <div class="item">
         <!-- <a href="item.php?id=<?=$good['id']?>"><img src="<?=$good['small_src']?>" alt="<?=$good['name']?>" title="<?=$good['name']?>"></a> -->
             <a href="item.php?id=<?=$good['id']?>"><img src="<?=$good['small_src']?>" title="<?=$good['title']?>"></a>
             <h3 class="item-name"><a href="item.php?id=<?=$good['id']?>"><?=$good['title']?></a></h3>
             <p class="price"><?=$good['description']?></p>
             <p class="price"><?=$good['price']?>р.</p>
             <p class="add-to-basket"><a href="#" title="Добавить в корзину">Купить</a></p>
             <hr>
         </div>
     <?}
 }
?>
    </div>
</div>
<?=$good['small_src']?>
 

</body>
</html>

