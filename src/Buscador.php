<?php

namespace UFU\BuscadorDeCursos;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    private $crawler;
    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        
    }
}