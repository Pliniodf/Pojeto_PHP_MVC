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
        /* var_dump($this->Dados['sts_carousels']);
        die; */
        $listar_var = new \Sts\Models\StsServico();
        $this->Dados['sts_servicos'] = $listar_var->listar();

        $carregarView = new \Core\configView("sts/Views/home/home", $this->Dados);
        $carregarView->renderizar();
    }
}
