<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Home
{
    private $Dados;

    public function index()
    {

        $listar_car = new \Sts\Models\StsCarousel();
        $this->Dados['sts_carousels'] = $listar_car->listar();

        $carregarView = new \Core\configView("sts/Views/home/home", $this->Dados);
        $carregarView->renderizar();
    }
}
