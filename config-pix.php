<?php
/**
 * Configurações do projeto Pix
 */

//DADOS GERAIS DO PIX (DINÂMICO E ESTÁTICO)
define('PIX_KEY','12345678909');
define('PIX_MERCHANT_NAME','Fulano de Tal');
define('PIX_MERCHANT_CITY','SAO PAULO');

//DADOS DA API PIX (DINÂMICO)
define('API_PIX_URL','https://api-pix-h.urldoseupsp.com.br"');
define('API_PIX_CLIENT_ID','Client_id_100120310230123012301230120312');
define('API_PIX_CLIENT_SECRET','Client_secret_100120310230123012301230120312');
define('API_PIX_CERTIFICATE',__DIR__.'/files/certificates/certificado.pem');
