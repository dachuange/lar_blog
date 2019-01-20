<?php
/**
 * Created by PhpStorm.
 * User: mc
 * Date: 2018-12-22
 * Time: 15:55
 */

namespace App\Http\Controllers\Index;


class IndexController
{
    public function index(){
        return view('User.index', ['name' => 'James']);
    }
}

