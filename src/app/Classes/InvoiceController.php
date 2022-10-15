<?php

namespace App\Classes;

class InvoiceController
{
    public function index():string
    {
        var_dump($_GET);
        echo '<pre>';
        var_dump($_POST);
        echo '<pre>';
        return 'invoces';
    }

    public function create():string
    {
        return 'create Invoice';
    }
}