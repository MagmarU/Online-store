<?php
    require_once '../authorization/connection.php';
    $link = mysqli_connect( $host, $user, $password, $database )
        or die("Ошибка" . mysqli_error($link));

    if( $_POST['action'] == 'load' ) {
        $sqlRequest = "SELECT * FROM `Элемент корзины` WHERE `ID покупателя` = {$_POST['id']}";
        $result = mysqli_query($link, $sqlRequest) or die ("Ошибка" . mysqli_error($link));
        $json = [];
        while( $row = mysqli_fetch_row($result) ) {
            $json[] = ['ID' => $row[0],
            'ID покупателя' => $row[1],
            'ID товара' => $row[2],
            'Количество' => $row[3]];
        }
        $return = json_encode( $json );
        echo $return;
    } elseif( $_POST['action'] == 'add' ) {

        $sql = "SELECT `ID` from `Элемент корзины` where `ID покупателя` = {$_POST['userId']} AND `ID товара` = {$_POST['itemId']}";
        $itemField = mysqli_query($link, $sql) or die ("Ошибка" . mysqli_error($link));
        $rows = array();
        while( $row = mysqli_fetch_array( $itemField ) ) {
            $rows[] = $row[0];
        }
        $itemField_result = $rows ? implode( ", ", $rows ) : 'null';

        $sqlRequest = "INSERT INTO `Элемент корзины` (`ID`, `ID покупателя`, `ID товара`, `Количество`)
        VALUES ({$itemField_result}, {$_POST['userId']}, {$_POST['itemId']}, 1)
        ON DUPLICATE KEY UPDATE `Количество` = `Количество` + 1;";


        $result = mysqli_query($link, $sqlRequest) or die ("Ошибка" . mysqli_error($link));
    } elseif( $_POST['action'] = 'delete' ) {
        $sqlRequest = "UPDATE `Элемент корзины` 
        SET `Количество` = CASE 
                              WHEN `Количество` > 1 THEN `Количество` - 1 
                              ELSE 0 
                          END
        WHERE `ID покупателя` = {$_POST['userId']} AND `ID товара` = {$_POST['itemId']};
        
        DELETE FROM `Элемент корзины`
        WHERE `ID покупателя` = {$_POST['userId']} AND `ID товара` = {$_POST['itemId']} AND `Количество` = 0;";
        $result = mysqli_multi_query( $link, $sqlRequest ) or die ("Ошибка" . mysqli_error($link));

    }
    
?>