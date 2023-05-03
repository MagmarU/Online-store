<?php
session_start();

if( $_POST['action'] == 'checkStatus' ) {
    if( isset($_SESSION['status']) ) {
        echo json_encode( $_SESSION['user'] );
    } else {
        echo 'unlogined';
    }
} elseif( $_POST['action'] == 'entered' ) {
    $_SESSION['status'] = 'logined';
    $_SESSION['user'] = $_POST['user'];
} elseif( $_POST['action'] == 'exit' ) {
    $_SESSION['status'] = 'unlogined';
    $_SESSION['user'] = null;
    echo $_SESSION['status'];
}
?>