<?php
    require_once '../authorization/connection.php';
    $link = mysqli_connect( $host, $user, $password, $database )
        or die("Ошибка " . mysqli_error($link));

    $sqlRequest = mysqli_query( $link, "SELECT `ID`,`Имя` FROM `Категория`" );
    
    while ( $result = mysqli_fetch_array($sqlRequest) ) {
        // echo $result[0];
        echo "<option id='{$result['ID']}'>{$result['Имя']}</option>";
    }
    ?>