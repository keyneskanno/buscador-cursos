<?php

require '../vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new \GuzzleHttp\Client();
$resposta = $client->request('GET', 'http://www.comunica.ufu.br/noticias/');
$html = $resposta->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);
$cursos = $crawler->filter('div.field-name-field-linha-fina');

foreach ($cursos as $curso){
    echo $curso->textContent . PHP_EOL;
}
