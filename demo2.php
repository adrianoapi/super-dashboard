<?php
#https://symfony.com/doc/current/components/dom_crawler.html

require "vendor/autoload.php";

use Symfony\Component\DomCrawler\Crawler;

$html = file_get_contents("https://olhardigital.com.br/noticias/recentes");

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$crawler = $crawler->filter('body > p');


debug($crawler);

function debug($data, $status = 0){

	if(is_array($data) || is_object($data)){

		echo "<pre>";
		print_r($data);
		echo "</pre>";

	}else{
		echo $data;
	}

}