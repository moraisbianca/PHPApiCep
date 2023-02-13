<?php

namespace App\Controller;

include 'Controller.php';

class EnderecoController extends Controller
{
    public static function teste()
    {
        //var_dump("oi");
        //parent::getResponseAsJSON("OI");

        $cidades = ['Jaú', 'Bariri', 'Itapuí', 'Dois Córregos'];

        parent::getResponseAsJSON($cidades);
    }
    
}