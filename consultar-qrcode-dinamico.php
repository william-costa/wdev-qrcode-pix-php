<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/config-pix.php';

use \App\Pix\Api;
use \App\Pix\Payload;
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;

//INSTANCIA DA API PIX
$obApiPix = new Api(API_PIX_URL,
                    API_PIX_CLIENT_ID,
                    API_PIX_CLIENT_SECRET,
                    API_PIX_CERTIFICATE);

//RESPOSTA DA REQUISIÇÃO DE CRIAÇÃO
$response = $obApiPix->consultCob('WDEV1234123412340000000004');

//VERIFICA A EXISTÊNCIA DO ITEM 'LOCATION'
if(!isset($response['location'])){
  echo 'Problemas ao consultar Pix dinâmico';
  echo "<pre>";
  print_r($response);
  echo "</pre>"; exit;
}

//DEBUG DOS DADOS DO RETORNO
echo "<pre>";
print_r($response);
echo "</pre>"; exit;


