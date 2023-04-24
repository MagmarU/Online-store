<?php
session_start();

if( $_POST['action'] == 'checkStatus' ) {
    if( isset($_SESSION['status']) ) {
        echo $_SESSION['status'];
    } else {
        echo 'unlogined';
    }
} elseif( $_POST['action'] == 'entered' ) {
    $_SESSION['status'] = 'logined';
} elseif( $_POST['action'] == 'exit' ) {
    $_SESSION['status'] = 'unlogined';
}
?>