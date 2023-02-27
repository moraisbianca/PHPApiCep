<?php

namespace App\DAO\EnderecoDAO;

class CidadeModel extends Model
{
    public $id_cidade, $descricao, $uf, $codigo_ibge, $ddd;

    public function getCidadeByUf($uf)
    {
        $dao = new EnderecoDAO();

        $this->rows = $dao->selectedCidadesByUf($uf);
    }
}