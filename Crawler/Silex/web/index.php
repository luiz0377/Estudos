<?php
/**
 * Created by PhpStorm.
 * User: Yoda
 * Date: 30/01/2016
 * Time: 09:23
 */
require_once __DIR__ . '/../vendor/autoload.php';

use Goutte\Client;

$app = new Silex\Application();
$app['debug'] = true;


$app->get('/', function () use ($app) {

    $client = new Client();
    $crawler = $client->request('POST', 'https://buscamilhas.com/buscar-voos/?token=9cfeaaf8480cdb67e953aae5caff2cbd22f37384');

    $form = $crawler->selectButton('buscar')->form();
    $form['voo'] = '0';
    $form['origem[0]'] = 'REC';
    $form['str_origem[0]'] = 'Recife+(REC)';
    $form['destino[0]'] = 'FOR';
    $form['str_destino[0]'] = 'Fortaleza+(FOR)';
    $form['data-origem[0]'] = '29/04/2016';
    $form['adult'] = '1';
    $form['child'] = '0';
    $form['baby'] = '0';
    $form['cias'] = 'azul';
    $crawler = $client->submit($form);

    $html = $crawler->html();


    return $html;
});

$app->run();


