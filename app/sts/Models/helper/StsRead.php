<?php

namespace Sts\Models\helper;

use Exception;
use PDO;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class StsRead extends StsConn
{
    private $Select;
    private $Value;
    private $Resultado;
    private $Query;
    private $Conn;

    function getResultado()
    {
        return $this->Resultado;
    }

    public function exeRead($Tabela, $Termos = null, $ParseString = null)
    {
        if (!empty($ParseString)) {
            parse_str($ParseString, $this->Value);
        }
        $this->Select = "SELECT * FROM {$Tabela} {$Termos}";
        //echo ": {$this->Select}";
        $this->exeInstrucao();
    }

    public function fullRead($Query, $ParseString = null)
    {
        $this->Select = (string) $Query;
        if (!empty($ParseString)) {
            parse_str($ParseString, $this->Value);
        }
        $this->exeInstrucao();
    }

    private function exeInstrucao()
    {
        $this->conexao();
        try {
            $this->getInstrucao();
            $this->Query->execute();
            $this->Resultado = $this->Query->fetchAll();
            //var_dump($this->Resultado);
        } catch (Exception $ex) {
            $this->Resultado = null;
        }
    }

    private function conexao()
    {
        $this->Conn = parent::getConn();
        $this->Query = $this->Conn->prepare($this->Select);
        $this->Query->setFetchMode(PDO::FETCH_ASSOC);
    }

    private function getInstrucao()
    {
        if ($this->Value) {
            foreach ($this->Value as $Link => $Valor) {
                if ($Link == 'limit' || $Link == 'offset') {
                    $Valor = (int) $Valor;
                }
                $this->Query->bindValue(":{$Link}", $Valor, (is_int($Valor) ? PDO::PARAM_INT : PDO::PARAM_STR));
            }
        }
    }
}
