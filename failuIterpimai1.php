<?php

define('DIR', __DIR__.'\\');

include_once DIR.'\failuIterpimai2.php';

echo 'A';

include_once DIR.'\failuIterpimai2.php';

function abra_kadabra(){
    echo __FUNCTION__;
    echo __FILE__;
}

abra_kadabra();