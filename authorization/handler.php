<?php

    require_once 'connection.php';
    if( $_POST['action'] == 'registration' ) {
        $link = mysqli_connect( $host, $user, $password, $database )
        or die("Ошибка" . mysqli_error($link));

        $sqlRequest = "INSERT INTO `{$_POST['tableName']}`(`Имя пользователя`, `email`, `password`) VALUES ('{$_POST['userName']}', '{$_POST['email']}', '{$_POST['password']} ')";
        $result = mysqli_query($link, $sqlRequest) or die ("Ошибка" . mysqli_error($link));
        if( $result ){
            echo 'Данные добавлены';
        }
    } elseif( $_POST['action'] == 'login' ) {
        $link = mysqli_connect( $host, $user, $password, $database )
        or die("Ошибка" . mysqli_error($link));
        $sqlRequest = "SELECT `email`, `password` FROM `{$_POST['tableName']}`";
        $result = mysqli_query( $link, $sqlRequest ) or die ("Ошибка" . mysqli_error($link));
        
        $json = [];
        while( $row = mysqli_fetch_row($result) ) {
            $json[] = ['email' => $row[0], 'password' => $row[1]];
        }
        $return = json_encode( $json );
        echo $return;
    }
?>
   