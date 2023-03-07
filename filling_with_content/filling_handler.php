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
        $sqlRequest = "SELECT `Товар`.`Наименование товара`, `Товар`.`Артикул`, `Категория`.`Имя`, `Товар`.`Описание`, `Товар`.`Цена, руб.`
        from `Товар`
        INNER JOIN `Категория` on `Товар`.`ID категории` = `Категория`.`ID`";
        $result = mysqli_query($link, $sqlRequest) or die ("Ошибка" . mysqli_error($link));
        $json = [];
        while( $row = mysqli_fetch_row($result) ) {
            $json[] = ['name' => $row[0], 'article' => $row[1], 'category' => $row[2], 'description' => $row[3], 'price' => $row[4]];
        }
        $return = json_encode( $json );
        echo $return;
    }


    //SELECT `Товар`.`Артикул` ,`Категория`.`Имя` 
    // FROM `Товар`
    // inner join `Категория` on `Товар`.`ID категории` = `Категория`.`ID`



    // $result = mysqli_query($link, $sqlRequest) or die ("Ошибка" . mysqli_error($link));

?>