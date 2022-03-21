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

        $home = new \Sts\Models\StsHome();
        $home->index();

        $carregarView = new \Core\configView("sts/Views/home/home");
        $carregarView->renderizar();
    }
}