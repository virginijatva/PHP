<?php
use App\Controllers\DeleteController;
use App\Controllers\ListController;

define('INSTALL_URL', '/bebras/mvc/');
define('DIR', __DIR__); //tam, kad visu file'u viduje ir isoreje, kelias butu vienodas.

require __DIR__.'/vendor/autoload.php';

//Routing

$path = str_replace(INSTALL_URL, '', $_SERVER['REQUEST_URI']);

$path = explode('/', $path);


if ($path[0] == 'delete') {

    if($path[1] == 'id'){
        return (new DeleteController)->byId($path[2] ?? null);
    }

    if($path[1] == 'name'){
        return (new DeleteController)->byName($path[2] ?? null);
    }
   
} elseif ($path[0] == 'list') {
   return new ListController;
} else {
    echo '404';
}
