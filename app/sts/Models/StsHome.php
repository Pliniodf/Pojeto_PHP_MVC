<?php

namespace Sts\Models;

if (!defined('URL')){
    header("Location: /");
    exit();
}

class StsHome
{
    public function index()
    {
        //echo "Listar dados <br>";
        //$conexao = new \Sts\Models\helper\StsConn();
        //$conexao->getConn();
        $listar = new \Sts\Models\helper\StsRead();
        $listar->exeRead('sts_carousels', 'WHERE adms_situacoes_id =:adms_situacoes_id LIMIT :limit', 'adms_situacoes_id=1&limit=4');
    }
}