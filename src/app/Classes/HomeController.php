<?php

namespace App\Classes;

use App\Models\User;
use PDO;
use App\App;
//Z
class HomeController
{
    public function index():string
    {
        $db = App::db();

//        $userModel = new User();

//        $query = 'SELECT * FROM users';
//
//        foreach ($db->query($query) as $user){
//            echo '<pre>';
//            var_dump($user);
//            echo '<pre>';
//        }
        return 'Home';
    }
}