<?php

require "vendor/autoload.php";

use Symfony\Component\DomCrawler\Crawler;
use Philo\Blade\Blade;

$views = __DIR__ . '/app/views';
$cache = __DIR__ . '/app/cache';

$link = "https://super.abril.com.br/";
$blade = new Blade($views, $cache);

echo $blade->view()->make('index', ['news' => follow_links($link)])->render();


function follow_links($url){

	$options = array('http'=>array('method'=>"GET", 'headers'=>"User-Agent: howBot/0.1\n"));
	$context = stream_context_create($options);
	$doc     = new DOMDocument();

	@$doc->loadHTML(@file_get_contents($url, false, $context));

	$links = $doc->getElementsByTagName("a");
	#$links = $doc->getElementsByTagName("h3");


	$news = array();
	$i=0;
	foreach ($links as $link) {
		$i++;
		if($i > 48 && $i < 63){
			if(trim($link->textContent) != NULL){
				$news[] = array(
					'title' => trim($link->textContent),
					'link'  => 'https://www.google.com/search?q=' . urlencode(trim($link->textContent))
				);
			}
		}

	}
	return $news;
}

function debug($data, $status = 0){

	if(is_array($data) || is_object($data)){

		echo "<pre>";
		print_r($data->textContent);
		echo "</pre>";

	}else{
		echo $data;
	}

}