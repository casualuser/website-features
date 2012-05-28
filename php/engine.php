<?php
/**
 * Created by JetBrains PhpStorm.
 * User: aleksei
 * Date: 5/17/12
 * Time: 1:40 PM
 * To change this template use File | Settings | File Templates.
 */

//error_reporting(0);

//require ('features.php');

class webFeatures {

public $webSite, $webURL, $webDOM, $webPage, $features;

function __construct () {

//include('massurls.php');
//include('misc.php');

// ----------------------------------------

    $this->features['meta'] = array(
//  meta
        "Joomla" => '/Joomla/i',
        "vBulletin" => '/vBulletin/i',
        "WordPress" => '/WordPress/i',
        "XOOPS" => '/xoops/i',
        "Plone" => '/plone/i',
        "MediaWiki" => '/MediaWiki/i',
        "CMSMadeSimple" => '/CMS Made Simple/i',
        "SilverStripe" => '/SilverStripe/i',
        "Movable Type" => '/Movable Type/i',
        "Amiro.CMS" => '/Amiro/i',
        "Koobi" => '/koobi/i',
        "bbPress" => '/bbPress/i',
        "DokuWiki" => '/dokuWiki/i',
        "TYPO3" => '/TYPO3/i',
        "PHP-Nuke" => '/PHP-Nuke/i',
        "DotNetNuke" => '/DotNetNuke/i',
        "Sitefinity" => '/Sitefinity/i',
        "WebGUI" => '/WebGUI/i',
        "ez Publish" => '/eZ\s*Publish/i',
        "BIGACE" => '/BIGACE/i',
        "TypePad" => '/typepad\.com/i',
        "Blogger" => '/blogger/i',
        "PrestaShop" => '/PrestaShop/i',
        "SharePoint" => '/SharePoint/',
        "Jalios JCMS" => '/Jalios JCMS/i',
        "ZenCart" => '/zen-cart/i',
        "WPML" => '/WPML/i',
        "PivotX" => '/PivotX/i',
        "OpenACS" => '/OpenACS/i',
        "AlphaCMS" => '/alphacms\s+(.*)/i',
        "concrete5" => '/concrete5 -\s*(.*)$/',
        "Webnode" => '/Webnode/',
        "GetSimple" => '/GetSimple/',
        "DataLifeEngine" => '/DataLife Engine/',
        "ClanSphere" => '/ClanSphere/',
        "phpBB" => '/phpBB/i',
//    "Elgg" => '/.+/',
        "Serendipity" => '/Serendipity/i',
        "Avactis" => '/Avactis Team/i',
    );

    $this->features['script'] = array(
//  script
        "Google Analytics" => '/google-analytics.com\/(ga|urchin).js/i',
        "Quantcast" => '/quantserve\.com\/quant\.js/i',
        "Prototype" => '/prototype\.js/i',
        "Joomla" => '/\/components\/com_/',
        "Ubercart" => '/uc_cart/i',
        "Closure" => '/\/goog\/base\.js/i',
        "MODx" => '/\/min\/b=.*f=.*/',
        "MooTools" => '/mootools/i',
        "Dojo" => '/dojo(\.xd)?\.js/i',
        "script.aculo.us" => '/scriptaculous\.js/i',
        "Disqus" => '/disqus.com\/forums/i',
        "GetSatisfaction" => '/getsatisfaction\.com\/feedback/i',
        "Wibiya" => '/wibiya\.com\/Loader\//i',
        "reCaptcha" => '/(google\.com\/recaptcha|api\.recaptcha\.net\/)/i',
        "Mollom" => '/mollom\/mollom\.js/i',
        "ZenPhoto" => '/zp-core\/js/i',
        "Gallery2" => '/main\.php\?.*g2_.*/i',
        "AdSense" => '/pagead\/show_ads\.js/',
        "XenForo" => '/js\/xenforo\//i',
        "Cappuccino" => '/Frameworks\/Objective-J\/Objective-J\.js/',
        "Avactis" => '/\/avactis-themes\//i',
        "Volusion" => '/a\/j\/javascripts\.js/',
        "AddThis" => '/addthis\.com\/js/',
        "BuySellAds" => '/buysellads.com\/.*bsa\.js/',
        "Weebly" => '/weebly\.com\/weebly\//',
        "Bootstrap" => '/bootstrap-.*\.js/',
        "Jigsy" => '/javascripts\/asterion\.js/',
        "Yola" => '/analytics\.yola\.net/',
        "Alfresco" => '/(alfresco)+(-min)?(\/scripts\/menu)?\.js/',
    );

    $this->features['body'] = array(
//  html
        "SMF" => '/<script .+\s+var smf_/i',
        "Magento" => '/var BLANK_URL = "[^>]+js\/blank\.html"/i',
        "Tumblr" => '/<iframe src=("|")http:\/\/\S+\.tumblr\.com/i',
        "WordPress" => '/<link rel=("|")stylesheet("|") [^>]+wp-content/i',
        "Closure" => '/<script[^>]*>.*goog\.require/i',
        "Liferay" => '/<script[^>]*>.*LifeRay\.currentURL/i',
        "vBulletin" => '/vbmenu_control/i',
        "MODx" => '/(<a[^>]+>Powered by MODx<\/a>|var el= \$\("modxhost"\);|<script type=("|")text\/javascript("|")>var MODX_MEDIA_PATH = "media";)/i',
        "miniBB" => '/<a href=("|")[^>]+minibb.+\s*<!--End of copyright link/i',
        "PHP-Fusion" => '/(href|src)=[""]?infusions\//i', // @todo => 'recheck this pattern again
        "OpenX" => '/(href|src)=[""].*delivery\/(afr|ajs|avw|ck)\.php[^""]*/',
        "GetSatisfaction" => '/asset_host\s*\+\s*"javascripts\/feedback.*\.js/im', // better recognization
        "Fatwire" => '/\/Satellite\?|\/ContentServer\?/',
        "Contao" => '/powered by (TYPOlight|Contao)/i',
        "Moodle" => '/<link[^>]*\/theme\/standard\/styles.php".*>|<link[^>]*\/theme\/styles.php\?theme=.*".*>/',
        "1c-bitrix" => '/<link[^>]*\/bitrix\/.*?>/i',
        "OpenCMS" => '/<link[^>]*\.opencms\..*?>/i',
        "HumansTxt" => '/<link[^>]*rel=[""]?author[""]?/i',
        "GoogleFontApi" => '/ref=[""]?http:\/\/fonts.googleapis.com\//i',
        "Prostores" => '/-legacycss\/Asset">/',
        "osCommerce" => '/(product_info\.php\?products_id|_eof \/\/-->)/',
        "OpenCart" => '/index.php\?route=product\/product/',
        "Shibboleth" => '/<form action="\/idp\/Authn\/UserPassword" method="post">/',
    );

// ----------------------------------------

//print_r($GLOBALS['http_response_header']);
#var_dump($webHAR["log"]["entries"]["0"]["request"]["url"]);

}

function checkMeta ($xpath) {

//        global $webSite, $webURL;

        $meta = $xpath->query('//meta/@content');

        if (is_array($meta)) { echo ("array!");}

        foreach ($meta as $value) {

//        if (strtolower($value[name]) == 'copyright' || strtolower($value[name]) == 'generator' ||
//            strtolower($value[name]) == 'powered-by' || strtolower($value[name]) == 'author') {

            foreach ($this->features['meta'] as $feature => $match) {

                $trigger = preg_match($match, $value->value);
                if ($trigger) {
                    $this->webSite[$webURL['url']][$feature] = 'true';
                }
            }
            /*
                   elseif (strtolower($value[name]) == 'elggrelease') {
                         $webSite["$webURL[url]"][Elgg] = 'true';
                    };
            */

        }

    }

function checkScript ($xpath) {

//        global $webSite, $webURL;

        $script = $xpath->query('//script | //script/@src');

        foreach ($script as $value) {

//    if (strtolower($value[type]) == 'text/javascript' && strtolower($value[src]) != '') {

            foreach ($this->features['script'] as $feature => $match) {

                $trigger = preg_match($match, $value->nodeValue);
                if ($trigger) {
                    $this->webSite[$webURL['url']][$feature] = 'true';
                }
            }
        }

    }

function checkBody ($xpath) {

//        global $webSite, $webURL;

        $body = $xpath->query('//body');

        foreach ($body as $value) {

//            var_dump($features['body']);

            foreach ($this->features['body'] as $feature => $match) {

                $val = $value->nodeValue;

                $trigger = preg_match($match, $val);
                if ($trigger) {
                    $this->webSite[$webURL['url']][$feature] = 'true';
                }

//            var_dump($value);
//            print_r("\n".'-------------------------------------'."\n\n");

            }

        }
    }

function webDataConnect () {

//$stringArg[] = "url:";

//$webURL = getopt('', $stringArg) or die("\n" . 'please provide website url like this: "--url google.com"' . "\n\n");

    $harFiles = scandir('./har');

foreach ($harFiles as $path) {

    if ($path != '.' && $path != '..') {

        $webHARs = file_get_contents('./har/'.$path);
        $webHAR = json_decode($webHARs, true);
        $this->webURL['url'] = $webHAR["log"]["entries"]["0"]["request"]["headers"]["0"]["value"];
        $this->webPage = $webHAR["log"]["entries"]["0"]["response"]["content"]["text"];

//foreach ($urls as $webURL['url']) {

//$webPage = file_get_contents('http://' . $webURL['url']) or die("\n" . 'this is not a valid url!' . "\n\n");
//$webPage = get_data('http://' . "$webURL[url]") or die("\n" . 'this is not a valid url!' . "\n\n");


}
}

    return $this->webPage or die("Data access failed for domain: ". $this->webURL['url']);
}

function webDataGetDOM () {

//$metasss = get_meta_tags('http://' . "$webURL[url]") or die("\n" . 'this is not a valid key format!' . "\n\n");
//var_dump($metasss);

    $config = array(
        'indent'         => true,
        'output-xhtml'   => true,
        'wrap'           => 200);

    $tidy = new tidy;
    $tidy->parseString($this->webPage, $config, 'utf8');
    $tidy->cleanRepair();

    var_dump($tidy);

    $dom = new DOMDocument();
    $dom->loadHTML($tidy);
//    $dom->loadHTML($this->webPage);

    var_dump($dom);

    $this->webDOM = new DOMXPath($dom);

    return $this->webDOM or die("DOM extracting terminated for domain: ". $this->webURL);
}

function webDataProcess () {

    $this->checkMeta($this->webDOM);
    $this->checkScript($this->webDOM);
    $this->checkBody($this->webDOM);
}

function webDataReport () {

    print "\n" . "webCMS" . " - " . $this->webURL['url'] . "\n\n";

    print_r($this->webSite[$this->webURL['url']]);

}

}

$webReport = new webFeatures();
$webReport->webDataConnect();
$webReport->webDataGetDOM();

//var_dump($webReport->webDOM);

$webReport->webDataProcess();

var_dump($webReport->webSite);
var_dump($webReport->webURL);

//$webReport->webDataReport();

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