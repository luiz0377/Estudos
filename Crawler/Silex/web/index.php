<?php
/**
 * Created by PhpStorm.
 * User: Yoda
 * Date: 30/01/2016
 * Time: 09:23
 */
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;

$app =  new Silex\Application();
$app['debug'] = true;


$app->get('/', function() use ($app){

    $client = new Client();
    $crawler = $client->request('GET', 'http://www.americanas.com.br/produto/125539405/smart-tv-led-android-55-philips-55pug6700-78-ultra-hd-4k-com-conversor-digital-3-hdmi-3-usb-wi-fi-120hz-dual-core?chave=HM_REC1_VT_1&nm_origem=rec_home_tendencia-click-u-test-1&nm_ranking_rec=1&nm_rec_page=home&nm_rec_showcase=tendencia-click-u&nm_rec_vid=1&nm_rec_ranking=1&nm_rec_id=125539405&nm_rec_scenario=test&nm_rec_segment=standard&nm_rec_category=home&WT.mc_id=HM_REC1_VT_1&DCSext.recom=Neemu_home_tendencia-click-u-1');

    /*$form = $crawler->selectButton('ControlGroupSearchView$ButtonSubmit')->form();
    $form['ControlGroupSearchView$AvailabilitySearchInputSearchView$TextBoxMarketOrigin1'] = 'Recife ';
    $form['ControlGroupSearchView$AvailabilitySearchInputSearchView$TextBoxMarketDestination1'] = 'Fortaleza ';
    $form['ControlGroupSearchView$AvailabilitySearchInputSearchView$DropDownListMarketDay1'] = '23';
    $form['ControlGroupSearchView$AvailabilitySearchInputSearchView$DropDownListMarketMonth1'] = '2016-04';
    $form['ControlGroupSearchView$AvailabilitySearchInputSearchView$DropDownListMarketDay2'] = '25';
    $form['ControlGroupSearchView$AvailabilitySearchInputSearchView$DropDownListMarketMonth2'] = '2016-04';
    $crawler->filter('.flash-error')->each(function ($node) {
        print $node->text()."\n";
    });*/

   // $crawler = $client->submit($form);


    foreach ($crawler as $d) {

    }
    $html = $crawler->html();
    $C = $crawler->children();




    var_dump($C);

});

$app->run();


