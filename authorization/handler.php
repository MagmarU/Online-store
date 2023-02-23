<?php

    require_once 'connection.php';
    $link = mysqli_connect( $host, $user, $password, $database )
        or die("Ошибка" . mysqli_error($link));

    print_r( "INSERT INTO `{$_POST['tableName']}` VALUES ('{$_POST['']}')" );