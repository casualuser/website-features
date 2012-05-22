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

$urls = array(

    'forums.mozillazine.org',
    'community.elgg.org',
    'blog.s9y.org',
    'demo.avactis.com',
    'joomla.org',
    'vbulletin.com/forum',
    'wordpress.org/news',
    'xoops.org',
    'eurotux.com',
    'mediawiki.org',
    'cmsmadesimple.org',
    'silverstripe.com',
    'movabletype.org',
    'dream4.de',
    'bbpress.org/forums',
    'dokuwiki.org',
    'typo3.org',
    'phpnuke.org',
    'dotnetnuke.com',
    'sitefinity.com',
    'webgui.org',
    'ez.no',
    'bigace.de',
    'everything.typepad.com',
    'blogsofnote.blogspot.com',
    'demo-store.prestashop.com',
    'sharepoint.microsoft.com',
    'jalios.com',
    'demo.opensourcecms.com/zencart',
    'wpml.org',
    'pivotx.net',
    'openacs.org',
    'concrete5.org',
    'webnode.com',
    'get-simple.info',
    'dle-news.ru',
    'csphere.eu'
);

$stringArg[] = "url:";

//$webURL = getopt("", $stringArg) or die("\n" . 'please provide website url like this: "--url google.com"' . "\n\n");

/*
foreach ($webDOM->find('meta') as $meta) {
    switch ($meta) {
        case preg_match('/copyright/', $meta) && preg_match('/phpBB/', $meta): $webCMS = "phpBB"; break;
#       case preg_match('/ElggRelease/', $meta) && preg_match('/Elgg/', $meta): $webCMS = "Elgg"; break;
        case $meta->find('ElggRelease') && preg_match('/Elgg/', $meta): $webCMS = "Elgg";
}
#    print $meta."\n\n";
}

*/

foreach ($urls as $webURL[url]) {

$webHARs = file_get_contents("http://browserhistory.beget.ru/2012/4/21/18_26_59_www.joomla.org.har");
$webHAR = json_decode($webHARs, true);

//$webPage = $webHAR["log"]["entries"]["0"]["response"]["content"]["text"];
#$webPage = $webHAR->log->entries->{0}->response->content->text;

$webPage = file_get_contents('http://'."$webURL[url]") or die("\n".'this is not a valid url!'."\n\n");

//$webDOM = new simple_html_dom();
//$webDOM->load($webPage);

//$meta = $webDOM->find('meta');

###$meta = get_meta_tags('http://' . "$webURL[url]") or die("\n" . 'this is not a valid key format!' . "\n\n");
#var_dump($meta);

$webDOM = new nokogiri($webPage);

$meta = $webDOM->get('meta');

foreach ($meta as $value) {

    $val = $value[content];

    switch (true) {
        case (preg_match('/Avactis Team/i', $val)):
            $webCMS = "Avactis";
            $webCMSver = $val;
            break;
        case (preg_match('/Webnode/i', $val)):
            $webCMS = "Webnode";
            $webCMSver = $val;
            break;
        case (preg_match('/phpBB/i', $val)): 
            $webCMS = "phpBB";
            $webCMSver = $val;
            break;
        case (preg_match('/ElggRelease/i', $val)):
            $webCMS = "Elgg";
            $webCMSver = $val;
            break;
        case (preg_match('/Joomla/i', $val)):
            $webCMS = "Joomla";
            $webCMSver = $val;
            break;
        case (preg_match('/vBulletin/i', $val)):
            $webCMS = "vBulletin";
            $webCMSver = $val;
            break;
        case (preg_match('/WordPress/i', $val)):
            $webCMS = "WordPress";
            $webCMSver = $val;
            break;
        case (preg_match('/XOOPS/i', $val)):
            $webCMS = "XOOPS";
            $webCMSver = $val;
            break;
        case (preg_match('/Plone/i', $val)):
            $webCMS = "Plone";
            $webCMSver = $val;
            break;
        case (preg_match('/MediaWiki/i', $val)):
            $webCMS = "MediaWiki";
            $webCMSver = $val;
            break;
        case (preg_match('/CMS Made Simple/i', $val)):
            $webCMS = "CMSMadeSimple";
            $webCMSver = $val;
            break;
        case (preg_match('/SilverStripe/i', $val)):
            $webCMS = "SilverStripe";
            $webCMSver = $val;
            break;
        case (preg_match('/Movable Type/i', $val)):
            $webCMS = "Movable Type";
            $webCMSver = $val;
            break;
        case (preg_match('/Amiro/i', $val)):
            $webCMS = "Amiro.CMS";
            $webCMSver = $val;
            break;
        case (preg_match('/Koobi/i', $val)):
            $webCMS = "Koobi";
            $webCMSver = $val;
            break;
        case (preg_match('/bbPress/i', $val)):
            $webCMS = "bbPress";
            $webCMSver = $val;
            break;
        case (preg_match('/DokuWiki/i', $val)):
            $webCMS = "DokuWiki";
            $webCMSver = $val;
            break;
        case (preg_match('/TYPO3/i', $val)):
            $webCMS = "TYPO3";
            $webCMSver = $val;
            break;
        case (preg_match('/PHP-Nuke/i', $val)):
            $webCMS = "PHP-Nuke";
            $webCMSver = $val;
            break;
        case (preg_match('/DotNetNuke/i', $val)):
            $webCMS = "DotNetNuke";
            $webCMSver = $val;
            break;
        case (preg_match('/Sitefinity/i', $val)):
            $webCMS = "Sitefinity";
            $webCMSver = $val;
            break;
        case (preg_match('/WebGUI/i', $val)):
            $webCMS = "WebGUI";
            $webCMSver = $val;
            break;
        case (preg_match('/eZ Publish/i', $val)):
            $webCMS = "eZ Publish";
            $webCMSver = $val;
            break;
        case (preg_match('/BIGACE/i', $val)):
            $webCMS = "BIGACE";
            $webCMSver = $val;
            break;
        case (preg_match('/typepad.com/i', $val)):
            $webCMS = "TypePad";
            $webCMSver = $val;
            break;
        case (preg_match('/blogger/i', $val)):
            $webCMS = "Blogger";
            $webCMSver = $val;
            break;
        case (preg_match('/PrestaShop/i', $val)):
            $webCMS = "PrestaShop";
            $webCMSver = $val;
            break;
        case (preg_match('/Microsoft SharePoint/i', $val)):
            $webCMS = "Microsoft SharePoint";
            $webCMSver = $val;
            break;
        case (preg_match('/Jalios JCMS/i', $val)):
            $webCMS = "Jalios JCMS";
            $webCMSver = $val;
            break;
        case (preg_match('/zen-cart/i', $val)):
            $webCMS = "ZenCart";
            $webCMSver = $val;
            break;
        case (preg_match('/WPML/i', $val)):
            $webCMS = "WPML";
            $webCMSver = $val;
            break;
        case (preg_match('/PivotX/i', $val)):
            $webCMS = "PivotX";
            $webCMSver = $val;
            break;
        case (preg_match('/OpenACS/i', $val)):
            $webCMS = "OpenACS";
            $webCMSver = $val;
            break;
        case (preg_match('/concrete5/i', $val)):
            $webCMS = "concrete5";
            $webCMSver = $val;
            break;
        case (preg_match('/GetSimple/i', $val)):
            $webCMS = "GetSimple";
            $webCMSver = $val;
            break;
        case (preg_match('/DataLife Engine/i', $val)):
            $webCMS = "DataLifeEngine";
            $webCMSver = $val;
            break;
        case (preg_match('/ClanSphere/i', $val)):
            $webCMS = "ClanSphere";
            $webCMSver = $val;
            break;
        case (preg_match('/Serendipity/i', $val)):
            $webCMS = "Serendipity";
            $webCMSver = $val;
            break;
    }
}

$script = $webDOM->get('script');

foreach ($script as $value) {

    $val = $value[content];

    switch (true) {
        case (preg_match('/google-analytics.com\/(ga|urchin).js/i', $val)):
            $webCMS = "Google Analytics";
            $webCMSver = $val;
            break;
            $tmp = preg_match('/quantserve\.com\/quant\.js/i', $val);
        case ($tmp):
//        case (preg_match('/quantserve\.com\/quant\.js/i', $val)):
            $webCMS = "Quantcast";
            $webCMSver = $val;
            break;
        case (preg_match('/prototype\.js/i', $val)):
            $webCMS = "Prototype";
            $webCMSver = $val;
            break;
        case (preg_match('/\/components\/com_/', $val)):
            $webCMS = "Joomla";
            $webCMSver = $val;
            break;
        case (preg_match('/ubercart/i', $val)):
            $webCMS = "Ubercart";
            $webCMSver = $val;
            break;
        case (preg_match('/\/goog\/base\.js/i', $val)):
            $webCMS = "Closure";
            $webCMSver = $val;
            break;
        case (preg_match('/\/min\/b=.*f=.*/', $val)):
            $webCMS = "MODx";
            $webCMSver = $val;
            break;
        case (preg_match('/mootools/i', $val)):
            $webCMS = "MooTools";
            $webCMSver = $val;
            break;
        case (preg_match('/dojo(\.xd)?\.js/i', $val)):
            $webCMS = "Dojo";
            $webCMSver = $val;
            break;
        case (preg_match('/scriptaculous\.js/i', $val)):
            $webCMS = "script.aculo.us";
            $webCMSver = $val;
            break;
        case (preg_match('/disqus.com\/forums/i', $val)):
            $webCMS = "Disqus";
            $webCMSver = $val;
            break;
        case (preg_match('/getsatisfaction\.com\/feedback/i', $val)):
            $webCMS = "GetSatisfaction";
            $webCMSver = $val;
            break;
        case (preg_match('/wibiya\.com\/Loaders\//i', $val)):
            $webCMS = "Wibiya";
            $webCMSver = $val;
            break;
        case (preg_match('/(google\.com\/recaptcha|api\.recaptcha\.net\/)/i', $val)):
            $webCMS = "reCaptcha";
            $webCMSver = $val;
            break;
        case (preg_match('/mollom\/mollom\.js/i', $val)):
            $webCMS = "Mollom";
            $webCMSver = $val;
            break;
        case (preg_match('/zp-core\/js/i', $val)):
            $webCMS = "ZenPhoto";
            $webCMSver = $val;
            break;
        case (preg_match('/main\.php\?.*g2_.*/i', $val)):
            $webCMS = "Gallery2";
            $webCMSver = $val;
            break;
        case (preg_match('/pagead\/show_ads\.js/', $val)):
            $webCMS = "AdSense";
            $webCMSver = $val;
            break;
        case (preg_match('/js\/xenforo\//i', $val)):
            $webCMS = "XenForo";
            $webCMSver = $val;
            break;
        case (preg_match('/Frameworks\/Objective-J\/Objective-J\.js/', $val)):
            $webCMS = "Cappuccino";
            $webCMSver = $val;
            break;
        case (preg_match('/\/avactis-themes\//i', $val)):
            $webCMS = "Avactis";
            $webCMSver = $val;
            break;
        case (preg_match('/a\/j\/javascripts\.js/', $val)):
            $webCMS = "Volusion";
            $webCMSver = $val;
            break;
        case (preg_match('/addthis\.com\/js/', $val)):
            $webCMS = "AddThis";
            $webCMSver = $val;
            break;
        case (preg_match('/buysellads.com\/.*bsa\.js/', $val)):
            $webCMS = "BuySellAds";
            $webCMSver = $val;
            break;
        case (preg_match('/weebly\.com\/weebly\//', $val)):
            $webCMS = "Weebly";
            $webCMSver = $val;
            break;
        case (preg_match('/bootstrap-.*\.js/', $val)):
            $webCMS = "Bootstrap";
            $webCMSver = $val;
            break;
        case (preg_match('/javascripts\/asterion\.js/', $val)):
            $webCMS = "Jigsy";
            $webCMSver = $val;
            break;
        case (preg_match('/analytics\.yola\.net/', $val)):
            $webCMS = "Yola";
            $webCMSver = $val;
            break;
        case (preg_match('/(alfresco)+(-min)?(\/scripts\/menu)?\.js/', $val)):
            $webCMS = "Alfresco";
            $webCMSver = $val;
            break;
                }
    }

print "\n" . $webCMS . " - " . $webURL[url] . "\n\n";

#var_dump($webHAR["log"]["entries"]["0"]["request"]["url"]);

#var_dump($webHAR);

//$webPage->clear();

    unset ($webPage);

}

