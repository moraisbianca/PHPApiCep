<?php

namespace App\DAO;

use App\Model\EnderecoModel;

class EnderecoDAO extends DAO
{
    public function __construct();
    {
        parent::__construct();
    }

    public function selectByCep(int $cep)
    {
        $sql = "SELECT * FROM logradouro WHERE cep = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $cep);
        $stmt->execute();

        $endereco_obj = $stmt->fetchObject("App\Model\EnderecoModel");
        $endereco_obj->arr_cidades = $this->selectedCidadesByUf($endereco_obj->UF);

        return $endereco_obj;

    }

    public function selectedCidadesByUf($uf)
    {
        $sql = "SELECT * FROM cidade WHERE uf = ? ORDER BY descricao";
    }
}