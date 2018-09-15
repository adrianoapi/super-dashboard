<?php
#https://symfony.com/doc/current/components/dom_crawler.html


$dom = new DomDocument();
$dom->load(file_get_contents("https://super.abril.com.br/"));
$finder = new DomXPath($dom);
$classname="bookmark";
$nodes = $finder->query("//*[contains(@class, '$classname')]");

print_r($nodes);