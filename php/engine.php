<?php
/**
 * Created by JetBrains PhpStorm.
 * User: aleksei
 * Date: 5/17/12
 * Time: 1:40 PM
 * To change this template use File | Settings | File Templates.
 */

class webFeatures {

function webFeatures () {

include('features.php');

//include('massurls.php');
//include('misc.php');

// ----------------------------------------

checkMeta($webDOM);
checkScript($webDOM);
checkBody($webDOM);

// ----------------------------------------

print "\n" . "$webCMS" . " - " . $webURL['url'] . "\n\n";

print_r($webSite[$webURL['url']]);

//print_r($GLOBALS['http_response_header']);

#var_dump($webHAR["log"]["entries"]["0"]["request"]["url"]);

  }

function webDataConnect () {

//$stringArg[] = "url:";

//$webURL = getopt('', $stringArg) or die("\n" . 'please provide website url like this: "--url google.com"' . "\n\n");

    $harFiles = scandir('./har');

foreach ($harFiles as $path) {

    if ($path != '.' && $path != '..') {

        $webHARs = file_get_contents('./har/'.$path);
        $webHAR = json_decode($webHARs, true);
        $webPage = $webHAR["log"]["entries"]["0"]["response"]["content"]["text"];
        $webURL['url'] = $webHAR["log"]["entries"]["0"]["request"]["headers"]["0"]["value"];

//foreach ($urls as $webURL['url']) {

//$webPage = file_get_contents('http://' . $webURL['url']) or die("\n" . 'this is not a valid url!' . "\n\n");
//$webPage = get_data('http://' . "$webURL[url]") or die("\n" . 'this is not a valid url!' . "\n\n");

//$metasss = get_meta_tags('http://' . "$webURL[url]") or die("\n" . 'this is not a valid key format!' . "\n\n");
//var_dump($metasss);


        $config = array(
            'indent'         => true,
            'output-xhtml'   => true,
            'wrap'           => 200);

        $tidy = new tidy;
        $tidy->parseString($webPage, $config, 'utf8');
        $tidy->cleanRepair();

        $dom = new DOMDocument();
        $dom->loadHTML($tidy);
//$dom->loadHTML($webPage);

        $webDOM = new DOMXPath($dom);

}
}
}

function webDataGet () {



}

}

$webReport = new webFeatures();
$webReport->webDataConnect();
$webReport->webDataGet();

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
 * Yandex.Metrika
 *
 */