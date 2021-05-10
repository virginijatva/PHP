<?php

namespace App\Controllers;

class DeleteController {

    public function byId($id = 0){

        return include DIR.'/views/by_id.php';
    }

    public function byName($name = ''){
        return include DIR.'/views/delete_name.php';
    }

}





