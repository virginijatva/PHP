<?php
session_start();
$users = json_decode(file_get_contents(__DIR__.'/users.json'), 1);

$msg = '';
if(isset($_SESSION['message'])) {
    $msg = $_SESSION['message'];
    $msgType = $_SESSION['msg_type'] == 'ok' ? 'success' : 'danger';
    unset($_SESSION['message'], $_SESSION['msg_type']);
}
