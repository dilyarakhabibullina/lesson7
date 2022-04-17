<?php
include "../config/config.php";

$link = mysqli_connect(SERVER, USER, PASSWORD, DB) or die ("Ошибка соединения:".mysqli_error($link));

?>