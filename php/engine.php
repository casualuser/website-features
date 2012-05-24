<?php
/**
 * Created by JetBrains PhpStorm.
 * User: aleksei
 * Date: 5/17/12
 * Time: 1:40 PM
 * To change this template use File | Settings | File Templates.
 */

error_reporting(0);

//include('simplehtmldom/simple_html_dom.php');
include('nokogiri/nokogiri.php');

require 'QueryPath/src/QueryPath/QueryPath.php';

include('features.php');
include('massurls.php');
//include('misc.php');

$stringArg[] = "url:";

$webURL = getopt('', $stringArg) or die("\n" . 'please provide website url like this: "--url google.com"' . "\n\n");

//$webHARs = file_get_contents("http://browserhistory.beget.ru/2012/4/22/18_27_55_www.joomla.org.har");
//$webHAR = json_decode($webHARs, true);
//$webPage = $webHAR["log"]["entries"]["0"]["response"]["content"]["text"];

//foreach ($urls as $webURL[url]) {

$webPage = file_get_contents('http://' . "$webURL[url]") or die("\n" . 'this is not a valid url!' . "\n\n");
//$webPage = get_data('http://' . "$webURL[url]") or die("\n" . 'this is not a valid url!' . "\n\n");

//$webDOM = new simple_html_dom();
//$webDOM->load($webPage);
//$meta = $webDOM->find('meta');
###$meta = get_meta_tags('http://' . "$webURL[url]") or die("\n" . 'this is not a valid key format!' . "\n\n");
#var_dump($meta);

$dom = new DOMDocument();
$dom->loadHTML($webPage);

$xpath = new DOMXPath($dom);

$tagscript = $xpath->query('//script | //script/@src');
$tagmeta = $xpath->query('//meta/@content');

// ----------------------------------------

$webDOM = new nokogiri($webPage);

checkMeta($webDOM);

checkScript($webDOM);

print "\n" . $webCMS . " - " . $webURL[url] . "\n\n";

print_r($webSite["$webURL[url]"]);

//print_r($GLOBALS['http_response_header']);

#var_dump($webHAR["log"]["entries"]["0"]["request"]["url"]);

//$webPage->clear();
//    unset ($webPage);

//}

$qp = qp($webPage)->find('script');

foreach ($qp as $item) {

//var_dump($item->html());

}

//-----------------------------------------------

/*

echo ("------------------------------------------------------------" . "\n\n");

foreach ($tagscript as $tag) {
    var_dump(trim($tag->nodeValue));

    echo ('-----------------------------------111111' . "\n\n");

}

foreach ($tagmeta as $tag) {
    var_dump(trim($tag->nodeValue));

    echo ('-----------------------------------222222' . "\n\n");

}

echo ("------------------------------------------------------------" . "\n\n");


*/

/*
 * jQuery
 * jQuery UI
 * Facebook
 * YUI
 * G+
 * SWFObject
 * HumansTXT
 * Twitter
 * Google Loader
 * Piwik
 * MS .NET
 * Modernizr
 * Google Font API
 * Mint
 * YouTube
 * Cufon
 * Drupal
 * MODx
 * Crazzy Egg
 * Clicky
 * Google Code Prettify
 *
 */
