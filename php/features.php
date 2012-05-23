<?php
/**
 * Created by JetBrains PhpStorm.
 * User: aleksei
 * Date: 5/22/12
 * Time: 5:28 PM
 * To change this template use File | Settings | File Templates.
 */

$features[meta] = array(
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
    "JaliosJCMS" => '/Jalios JCMS/i',
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

$features[script] = array(
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

$features[body] = array(
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
    "GetSatisfaction" => '/asset_host\s*\+\s*"javascripts\/feedback.*\.js/igm', // better recognization
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