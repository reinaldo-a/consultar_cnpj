<?php
require 'vendor/autoload.php';

    use \App\webservice\Speedio;

    //NOVA INSAATNCIA DE SPEEDIO
    $obSpeedio = new Speedio();

    //CNPJ A SER CONSULTADO
    $cnpj = '00000000000191';

    //CONSULTA O CNPJ NA API DO SPEEDIO
    $resultado = $obSpeedio->consultarCNPJ($cnpj);

    echo "<pre>";
        print_r($resultado);
    echo "</pre>";