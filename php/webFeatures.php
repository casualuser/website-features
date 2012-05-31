<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Aleksei Tcelishchev
 * Account: @casualuser
 */

error_reporting(0);

class webFeatures
{

    public $webSite, $webPage, $webURL, $webDOM, $features;

    function __construct()
    {

        $this->features['meta'] = array(
        //  meta
            "Joomla" => '/joomla!?\s*([\d\.]+)?/i',
            "vBulletin" => '/vBulletin\s*(.*)/i',
            "WordPress" => 'WordPress\s*(.*)/i',
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
            "Sitefinity" => '/Sitefinity\s+(.*)/i',
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
//            "Elgg" => '/.+/',
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
            "AdSense" => '/pagead\/show_ads\.js/i',
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
#            "Magento" => '/var BLANK_URL = '[^>]+js\/blank\.html'/i',
#            "Tumblr" => '/<iframe src=("|')http:\/\/\S+\.tumblr\.com/i',
#            "WordPress" => '/<link rel=("|')stylesheet("|') [^>]+wp-content/i',
            "Closure" => '/<script[^>]*>.*goog\.require/i',
            "Liferay" => '/<script[^>]*>.*LifeRay\.currentURL/i',
            "vBulletin" => '/vbmenu_control/i',
#            "MODx" => '/(<a[^>]+>Powered by MODx<\/a>|var el= \$\('modxhost'\);|<script type=("|')text\/javascript("|')>var MODX_MEDIA_PATH = "media";)/i',
#            "miniBB" => '/<a href=("|')[^>]+minibb.+\s*<!--End of copyright link/i',
#            "PHP-Fusion" => '/(href|src)=["']?infusions\//i', // @todo => 'recheck this pattern again
#            "OpenX" => '/(href|src)=["'].*delivery\/(afr|ajs|avw|ck)\.php[^"']*/',
            "GetSatisfaction" => '/asset_host\s*\+\s*"javascripts\/feedback.*\.js/im', // better recognization
            "Fatwire" => '/\/Satellite\?|\/ContentServer\?/',
            "Contao" => '/powered by (TYPOlight|Contao)/i',
            "Moodle" => '/<link[^>]*\/theme\/standard\/styles.php".*>|<link[^>]*\/theme\/styles.php\?theme=.*".*>/',
            "1c-bitrix" => '/<link[^>]*\/bitrix\/.*?>/i',
            "OpenCMS" => '/<link[^>]*\.opencms\..*?>/i',
#            "HumansTxt" => '/<link[^>]*rel=['"]?author['"]?/i',
#            "GoogleFontApi" => '/ref=["']?http:\/\/fonts.googleapis.com\//i',
            "Prostores" => '/-legacycss\/Asset">/',
            "osCommerce" => '/(product_info\.php\?products_id|_eof \/\/-->)/',
            "OpenCart" => '/index.php\?route=product\/product/',
            "Shibboleth" => '/<form action="\/idp\/Authn\/UserPassword" method="post">/',
        );

    }

    function file_get_contents_curl($url)
    {
        $ch = curl_init();
        $timeout = 9;

//        $userAgent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.0.11) Gecko/2009060215 Firefox/3.0.11';
//        $userAgent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)';
        $userAgent = 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.52 Safari/536.5';

        curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
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

    function checkMeta($xpath)
    {

        $meta = $xpath->query('//meta/@content');

        foreach ($meta as $value) {

            foreach ($this->features['meta'] as $feature => $match) {

                $trigger = preg_match($match, $value->value);
                if ($trigger) {
                    $this->webSite[$this->webURL][$feature] = 'true';
                }
            }
        }

    }

    function checkScript($xpath)
    {

        $script = $xpath->query('//script | //script/@src');

        foreach ($script as $value) {

            foreach ($this->features['script'] as $feature => $match) {

                $trigger = preg_match($match, $value->nodeValue);
                if ($trigger) {
                    $this->webSite[$this->webURL][$feature] = 'true';
                }
            }
        }

    }

    function checkBody($xpath)
    {

        $body = $xpath->query('//body');

        foreach ($body as $value) {

            foreach ($this->features['body'] as $feature => $match) {

                $val = $value->nodeValue;

                $trigger = preg_match($match, $val);
                if ($trigger) {
                    $this->webSite[$this->webURL][$feature] = 'true';
                }
            }

        }
    }

    function webDataGet()
    {

        $harFiles = scandir('./har');

        foreach ($harFiles as $path) {

            if ($path != '.' && $path != '..') {

                $webHARs = file_get_contents('./har/' . $path);
                $webHAR = json_decode($webHARs, true);
                $this->webURL = $webHAR["log"]["entries"]["0"]["request"]["headers"]["0"]["value"];
                $this->webPage[$this->webURL] = $webHAR["log"]["entries"]["0"]["response"]["content"]["text"];

            }
        }
    }

    function webDataGetDOM()
    {

        $config = array(
            'indent' => true,
            'output-xhtml' => true,
            'wrap' => 200);

        $tidy = new tidy;
        $tidy->parseString($this->webDOM, $config, 'utf8');
        $tidy->cleanRepair();

        $dom = new DOMDocument();
        $dom->loadHTML($tidy);

        $this->webDOM = new DOMXPath($dom);
    }

    function webDataProcess()
    {

        foreach ($this->webPage as $this->webURL => $this->webDOM) {

            $this->webDataGetDOM();
            $this->checkMeta($this->webDOM);
            $this->checkScript($this->webDOM);
            $this->checkBody($this->webDOM);
        }

    }

    function webDataReport()
    {
        print_r($this->webSite);

    }

}

$webReport = new webFeatures();
$webReport->webDataGet();
$webReport->webDataProcess();
$webReport->webDataReport();

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