<?php
session_start();

if( $_POST['action'] == 'checkStatus' ) {
    echo $_SESSION['status'];
} elseif( $_POST['action'] == 'entered' ) {
    $_SESSION['status'] = 'logined';
} elseif( $_POST['action'] == 'exit' ) {
    $_SESSION['status'] = 'unlogined';
}
?>