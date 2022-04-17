<?php

include "link.php";

function goods_all($link){
    $query = "SELECT * FROM goods order by id desc";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $goods = [];

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $goods[] = $row;
    }
    return $goods;
}

function goods_get($link, $id){
    $query = sprintf("SELECT * FROM goods where id=%d ",(int)$id);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $good = mysqli_fetch_assoc($result);

    return $good;
}

?>


