<?php
    require_once '../authorization/connection.php';
    $link = mysqli_connect( $host, $user, $password, $database )
        or die("Ошибка " . mysqli_error($link));

    if( $_GET['action'] == 'getCategories' ) {
        $sqlRequest = "SELECT `Имя` from `Категория`";
        $result = mysqli_query($link, $sqlRequest) or die ("Ошибка" . mysqli_error($link));
        $json = [];
        while( $row = mysqli_fetch_row($result) ) {
            $json[] = [$row[0]];
        }
        $return = json_encode( $json );
        echo $return;
    } elseif( $_GET['action'] == 'getItems' ) {
        $sqlRequest = "SELECT `Товар`.`ID`, `Товар`.`Наименование товара`, `Товар`.`Артикул`, `Категория`.`Имя`, `Товар`.`Описание`, `Товар`.`Цена, руб.`
        from `Товар`
        INNER JOIN `Категория` on `Товар`.`ID категории` = `Категория`.`ID`";
        $result = mysqli_query($link, $sqlRequest) or die ("Ошибка" . mysqli_error($link));
        $json = [];
        while( $row = mysqli_fetch_row($result) ) {
            $json[] = ['ID' => $row[0],'name' => $row[1], 'article' => $row[2], 'category' => $row[3], 'description' => urldecode($row[4]), 'price' => $row[5]];
        }
        $return = json_encode( $json );
        echo $return;
    }

?>