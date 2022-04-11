<?php

namespace Sts\Models;

if (!defined('URL')){
    header("Location: /");
    exit();
}

class StsCarousel
{
    private $Resultado;

    public function listar()
    {

        //echo "Listar dados <br>";
        //$conexao = new \Sts\Models\helper\StsConn();
        //$conexao->getConn();
        $listar = new \Sts\Models\helper\StsRead();

        //listar contendo todas as informaçoes

        //Teste no BD celke
        //$listar->exeRead('sts_carousels', 'WHERE adms_situacoes_id =:adms_situacoes_id LIMIT :limit', 'adms_situacoes_id=1&limit=4');

        //Teste no BD ipaconli_form
        /* $listar->exeRead('sts_carousels', 'WHERE adms_sit_id =:adms_situacoes_id LIMIT :limit', 'adms_situacoes_id=1&limit=3');
        $this->Resultado['sts_carousels'] = $listar->getResultado(); */
        /* var_dump($this->Resultado);
        die; */
        $listar->fullRead("SELECT car.id, car.nome, car.imagem, car.titulo, car.descricao, car.posicao_text, car.titulo_botao, car.link,
                cors.cor
                FROM sts_carousels car
                INNER JOIN adms_cors cors ON cors.id=car.adms_cor_id
                WHERE adms_sit_id =:adms_situacoes_id ORDER BY ordem ASC LIMIT :limit", 'adms_situacoes_id=1&limit=3');
        $this->Resultado['sts_carousels'] = $listar->getResultado();

        //listar filtrando as palavras nome e link projeto casa
        /* $listar->fullRead("SELECT car.id, car.nome, car.imagem, car.titulo, car.descricao, car.posicao_text, car.titulo_botao, car.link,
                cors.cor
                FROM sts_carousels car
                INNER JOIN adms_cors cors ON cors.id=car.adms_cor_id
                WHERE adms_situacoes_id =:adms_situacoes_id ORDER BY ordem ASC LIMIT :limit", 'adms_situacoes_id=1&limit=4');
        $this->Resultado['sts_carousels'] = $listar->getResultado(); */

        /* var_dump($this->Resultado['sts_carousels']);
        die(); */
        
        //var_dump($this->Resultado['sts_carousels']);
        return $this->Resultado['sts_carousels'];
    }
}