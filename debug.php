<?php
include 'PhpConsole/__autoload.php';
function _dd($d)
{
    echo '<pre style="background:black; padding:20px 20px 20px 200px; color:white;">';
    print_r($d);
    echo '</pre>';
    die();
}
function _dc($d)
{
    echo '<pre style="background:black; padding:20px 20px 20px 200px; color:white;">';
    print_r($d);
    echo '</pre>';
}
PhpConsole\Helper::register(); // it will register global PC class
function _d($var, $tags = null) {
    PhpConsole\Connector::getInstance()->getDebugDispatcher()->dispatchDebug($var, $tags, 1);
}