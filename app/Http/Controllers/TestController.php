<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class TestController extends BaseController {
    //
    public function getIndex($name = 'shapolang' ) {
        echo 'Test Lumen ' . $name;
    }
}
