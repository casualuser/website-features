<?php
/**
 * Created by JetBrains PhpStorm.
 * User: aleksei
 * Date: 5/17/12
 * Time: 1:40 PM
 * To change this template use File | Settings | File Templates.
 */

error_reporting(0);

include('features.php');
include('massurls.php');

//include('misc.php');

$stringArg[] = "url:";

//$webURL = getopt('', $stringArg) or die("\n" . 'please provide website url like this: "--url google.com"' . "\n\n");

//$webHARs = file_get_contents("http://browserhistory.beget.ru/2012/4/22/18_27_55_www.joomla.org.har");
//$webHAR = json_decode($webHARs, true);
//$webPage = $webHAR["log"]["entries"]["0"]["response"]["content"]["text"];

foreach ($urls as $webURL['url']) {

$webPage = file_get_contents('http://' . $webURL['url']) or die("\n" . 'this is not a valid url!' . "\n\n");
//$webPage = get_data('http://' . "$webURL[url]") or die("\n" . 'this is not a valid url!' . "\n\n");

$metasss = get_meta_tags('http://' . "$webURL[url]") or die("\n" . 'this is not a valid key format!' . "\n\n");

var_dump($metasss);

$config = array(
    'indent'         => true,
    'output-xhtml'   => true,
    'wrap'           => 200);

$tidy = new tidy;
$tidy->parseString($webPage, $config, 'utf8');
$tidy->cleanRepair();

$dom = new DOMDocument();
$dom->loadHTML($tidy);

$webDOM = new DOMXPath($dom);

// ----------------------------------------

//$webDOM = new nokogiri($webPage);

checkMeta($webDOM);
checkScript($webDOM);

print "\n" . "$webCMS" . " - " . $webURL['url'] . "\n\n";

print_r($webSite[$webURL['url']]);

//print_r($GLOBALS['http_response_header']);

#var_dump($webHAR["log"]["entries"]["0"]["request"]["url"]);

//$webPage->clear();
//    unset ($webPage);

//}

//$qp = qp($webPage)->find('script');

//foreach ($qp as $item) {

//var_dump($item->html());

}

//-----------------------------------------------

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