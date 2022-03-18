<?php

namespace Sts\Controllers;

if (!defined('URL')){
    header("Location: /");
    exit();
}

class Home
{
    public function index()
    {
        echo "Pagina Home";
    }
}