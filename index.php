<?php
require "vendor/autoload.php";

use Symfony\Component\DomCrawler\Crawler; // For navigating and querying HTML and XML documents
use Symfony\Component\CssSelector\CssSelectorConverter;



// Here is the url to parse
$url = 'your.chosen.url';

// Getting the content from the page
$html = file_get_contents($url);

// Create a new Symfony DomCrawler
$crawler = new Crawler($html);

// Extracting all links using css selector
$links = $crawler->filter('a')->extract(['href']);

// Printing the links
foreach ($links as $link) {
    echo $link . "\n";
}
?>