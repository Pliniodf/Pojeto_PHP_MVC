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

        //Teste no BD celke
        $listar->exeRead('sts_carousels', 'WHERE adms_situacoes_id =:adms_situacoes_id LIMIT :limit', 'adms_situacoes_id=1&limit=4');

        //Teste no BD ipaconli_form
        //$listar->exeRead('sts_carousels', 'WHERE adms_sit_id =:adms_situacoes_id LIMIT :limit', 'adms_situacoes_id=1&limit=3');

        //listar filtrando as palavras nome e link
        //$listar->fullRead("SELECT nome, imagem, titulo, descricao, posicao_text, titulo_botao, link, FROM sts_carousels WHERE adms_situacoes_id =:adms_situacoes_id ORDER BY id LIMIT :limit", 'adms_situacoes_id=1&limit=4');
        $this->Resultado['sts_carousels'] = $listar->getResultado();

        /* var_dump($this->Resultado['sts_carousels']);
        die(); */
        
        //var_dump($this->Resultado['sts_carousels']);
        return $this->Resultado['sts_carousels'];
    }
}