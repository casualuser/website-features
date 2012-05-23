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
include('nokogiri.php');
include('massurls.php');
include('features.php');

$stringArg[] = "url:";

$webURL = getopt('', $stringArg) or die("\n" . 'please provide website url like this: "--url google.com"' . "\n\n");

//$webHARs = file_get_contents("http://browserhistory.beget.ru/2012/4/22/18_27_55_www.joomla.org.har");
//$webHAR = json_decode($webHARs, true);
//$webPage = $webHAR["log"]["entries"]["0"]["response"]["content"]["text"];

//foreach ($urls as $webURL[url]) {

$webPage = file_get_contents('http://' . "$webURL[url]") or die("\n" . 'this is not a valid url!' . "\n\n");

//$webDOM = new simple_html_dom();
//$webDOM->load($webPage);
//$meta = $webDOM->find('meta');
###$meta = get_meta_tags('http://' . "$webURL[url]") or die("\n" . 'this is not a valid key format!' . "\n\n");
#var_dump($meta);

$webDOM = new nokogiri($webPage);

$meta = $webDOM->get('meta');

foreach ($meta as $value) {

    if (strtolower($value[name]) == 'copyright' || strtolower($value[name]) == 'generator' ||
        strtolower($value[name]) == 'powered-by' || strtolower($value[name]) == 'author'
    ) {

//        var_dump($value);

        $val = $value[content];

        foreach ($features[meta] as $feature => $match) {

            $trigger = preg_match($match, $val);
            if ($trigger) {
                $webSite["$webURL[url]"][$feature] = 'true';
            }
            ;
        }
        ;
    } elseif (strtolower($value[name]) == 'elggrelease') {

        $webSite["$webURL[url]"][Elgg] = 'true';

    }
    ;

}

$script = $webDOM->get('script');

foreach ($script as $value) {

    if (strtolower($value[type]) == 'text/javascript' && strtolower($value[src]) != '') {

        $val = $value[src];

        foreach ($features[script] as $feature => $match) {

            $trigger = preg_match($match, $val);
            if ($trigger) {
                $webSite["$webURL[url]"][$feature] = 'true';
            }
            ;
        }
    }

}

print "\n" . $webCMS . " - " . $webURL[url] . "\n\n";

print_r($webSite["$webURL[url]"]);
//print_r($GLOBALS['http_response_header']);

#var_dump($webHAR["log"]["entries"]["0"]["request"]["url"]);

//$webPage->clear();
//    unset ($webPage);

//}

function get_data($url)
{
    $ch = curl_init();
    $timeout = 9;
    $userAgent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)';
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}