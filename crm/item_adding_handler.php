<?php
    require_once '../authorization/connection.php';

    $link = mysqli_connect( $host, $user, $password, $database )
        or die("Ошибка" . mysqli_error($link));
    
    $sqlRequest = "INSERT INTO `Товар`(`Наименование товара` , `Артикул`, `image`, `ID категории`, `Описание`, `Цена, руб.`) VALUES ('{$_POST['name']}', '{$_POST['article']}', '{$_POST['img']}', '{$_POST['item_category']}', '{$_POST['description']}', '{$_POST['price']}')";

    $result = mysqli_query($link, $sqlRequest) or die ("Ошибка" . mysqli_error($link));
    if( $result ){
    }
    echo( $sqlRequest );
?>