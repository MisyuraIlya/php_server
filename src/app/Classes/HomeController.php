<?php

namespace App\Classes;

use PDO;
use App\App;
//Z
class HomeController
{
    public function index():string
    {
        $db = App::db();
        $query = 'SELECT * FROM users';

        foreach ($db->query($query) as $user){
            echo '<pre>';
            var_dump($user);
            echo '<pre>';
        }
        return 'Home';
    }
}