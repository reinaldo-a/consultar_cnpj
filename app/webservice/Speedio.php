<?php

    namespace App\webservice;

    class Speedio{

        /* URL base da API*/
        const URL_BASE = 'https://api-publica.speedio.com.br/';

        // Metodo para consultar CNPJ
        public function consultarCNPJ($cnpj) {
            return $this->get('/buscarcnpj?cnpj='.$cnpj);
        }

        //METODO RESPONSAVEL PARA CONSULTAR A API SPEEDIO
        public function get($resource) {
            //ENDPOINT COMPLETO DA API
            $endpoint = self::URL_BASE.$resource;

            //INICIA O CURL
            $curl = curl_init();

            //CONFIGURAÇÕES DO CURL
            curl_setopt_array($curl,[
                CURLOPT_URL            => $endpoint,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST   => 'GET'
            ]);

            //EXECUTA A REQUISIÇÃO
            $response = curl_exec($curl);

            //FECHAR A EXECULÇÃO
            curl_close($curl);

            //RESPONSE EM ARRAY
            $responseArray = json_decode($response, true);
            
            return is_array($responseArray) ? $responseArray : [];
        }

    }

