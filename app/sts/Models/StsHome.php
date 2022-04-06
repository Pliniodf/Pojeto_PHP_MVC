<?php

namespace Sts\Models;

if (!defined('URL')){
    header("Location: /");
    exit();
}

class StsHome
{
    private $Resultado;

    public function index()
    {

        //echo "Listar dados <br>";
        //$conexao = new \Sts\Models\helper\StsConn();
        //$conexao->getConn();
        $listar = new \Sts\Models\helper\StsRead();

        //listar contendo todas as informaçoes
        $listar->exeRead('sts_carousels', 'WHERE adms_situacoes_id =:adms_situacoes_id LIMIT :limit', 'adms_situacoes_id=1&limit=4');

        //listar filtrando as palavras nome e link
        //$listar->fullRead("SELECT nome, link FROM sts_carousels WHERE adms_situacoes_id =:adms_situacoes_id LIMIT :limit", 'adms_situacoes_id=1&limit=4');
        $this->Resultado['sts_carousels'] = $listar->getResultado();
        //var_dump($this->Resultado['sts_carousels']);
        return $this->Resultado['sts_carousels'];
    }
}