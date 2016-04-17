<?php
/**
 * Created by PhpStorm.
 * User: Yoda
 * Date: 30/01/2016
 * Time: 09:23
 */
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$app = new Silex\Application();
$app['debug'] = true;


$app->get('/', function () use ($app) {

    try {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://www.submarinoviagens.com.br/passagens/selecionarvoo/Guararapes%20Intl,%20Recife,%20PE,%20Brasil%20REC;AirBrPeGuara279/Fernando%20De%20Noronha%20Aeroporto,%20Fernando%20De%20Noronha,%20FN,%20Brasil%20FEN;AirBrPeAerop860/roundtrip/20-4-2016/22-5-2016/1/0/0/');
        $result = $response->getBody();

        return $result;

    } catch (\Exception $e) {
        die($e->getMessage());
    }

});

$app->run();


