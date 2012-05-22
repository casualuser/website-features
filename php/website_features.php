<?php
    /**
     * Created by JetBrains PhpStorm.
     * User: aleksei
     * Date: 5/17/12
     * Time: 1:39 PM
     * To change this template use File | Settings | File Templates.
     */
    class website_features
    {
    }


    },

    }
    }
    ;


    var
    scripts = doc . getElementsByTagName("script");
    var script_tests = {
		'Google Analytics': /google - analytics . com\/(ga | urchin) . js / i,
		'Quantcast': /quantserve\.com\/quant\.js / i,
		'Prototype': /prototype\.js / i,
		'Joomla': /\/components\/com_ /,
		'Ubercart': /uc_cart / i,
		'Closure': /\/goog\/base\.js / i,
		'MODx': /\/min\/b =.*f =.*/,
		'MooTools': /mootools / i,
		'Dojo': /dojo(\.xd)?\.js / i,
		'script.aculo.us': /scriptaculous\.js / i,
		'Disqus': /disqus . com\/forums / i,
		'GetSatisfaction': /getsatisfaction\.com\/feedback / i,
		'Wibiya': /wibiya\.com\/Loaders\ //i,
    'reCaptcha': /(google\.com\/recaptcha | api\.recaptcha\.net\/)/i,
		'Mollom': /mollom\/mollom\.js / i, // only work on Drupal now
		'ZenPhoto': /zp - core\/js / i,
		'Gallery2': /main\.php\? .*g2_ .*/i,
		'AdSense': /pagead\/show_ads\.js /,
		'XenForo': /js\/xenforo\ //i,
    'Cappuccino': /Frameworks\/Objective - J\/Objective - J\.js /,
		'Avactis': /\/avactis - themes\ //i,
    'Volusion': /a\/j\/javascripts\.js /,
		'AddThis': /addthis\.com\/js /,
		'BuySellAds': /buysellads . com\/ .*bsa\.js /,
		'Weebly': /weebly\.com\/weebly\ //,
    'Bootstrap': /bootstrap -.*\.js /,
		'Jigsy': /javascripts\/asterion\.js /, // may change later
		'Yola': /analytics\.yola\.net /, // may change later
		'Alfresco': /(alfresco) + (-min) ?(\/scripts\/menu)?\.js / // both Alfresco Share and Explorer apps
	};

	var text = document . documentElement . outerHTML;
	var text_tests = {
		'SMF': /<script . +\s +var smf_ / i,
		'Magento': /var BLANK_URL = '[^>]+js\/blank\.html' / i,
		'Tumblr': /<iframe src = ("|')http:\/\/\S+\.tumblr\.com/i,
		'WordPress': /<link rel=(" | ')stylesheet("|') [^>]+wp - content / i,
		'Closure': /<script[^>]*>.*goog\.require/i,
		'Liferay': /<script[^>]*>.*LifeRay\.currentURL / i,
		'vBulletin': /vbmenu_control / i,
		'MODx': /(<a[^>]+>Powered by MODx < \/a >|var el = \$\('modxhost'\);|<script type =("|')text\/javascript(" | ')>var MODX_MEDIA_PATH = "media";)/i,
		'miniBB': /<a href=("|')[^>]+minibb .+\s *<!--End of copyright link / i,
		'PHP-Fusion': /(href | src) =["']?infusions\//i, // @todo: recheck this pattern again
		'OpenX': /(href|src)=["'].*delivery\/(afr|ajs|avw|ck)\.php[^"']*/,
		'GetSatisfaction': /asset_host\s * \+\s * "javascripts\/feedback.*\.js/igm, // better recognization
		'Fatwire': /\/Satellite\?|\/ContentServer\?/,
		'Contao': /powered by (TYPOlight|Contao)/i,
		'Moodle' : /<link[^>]*\/theme\/standard\/styles.php" .*>|<link[^>]*\/theme\/styles . php\?theme =.*".*>/,
		'1c-bitrix' : /<link[^>]*\/bitrix\/.*?>/i,
		'OpenCMS' : /<link[^>]*\.opencms\..*?>/i,
		'HumansTxt': /<link[^>]*rel=['"]?author['"]?/i,
		'GoogleFontApi': /ref=["']?http:\/\/fonts . googleapis . com\ //i,
    'Prostores' : /-legacycss\/Asset">/,
		'osCommerce': /(product_info\.php\?products_id|_eof \/\/-->)/,
		'OpenCart': /index.php\?route=product\/product/,
		'Shibboleth': /<form action="\/idp\/Authn\/UserPassword" method="post">/
	};

	var js_tests = {
		'Drupal': function() {
			return window.Drupal != null;
		},
		'TomatoCMS': function() {
			return window.Tomato != null;
		},
		'MojoMotor': function() {
			return window.Mojo != null;
		},
		'ErainCart': function() {
			return window.fn_register_hooks != null;
		},
		'SugarCRM': function() {
			return window.SUGAR != null;
		},
		'YUI': function() {
			return window.YAHOO|window.YUI != null;
		},
		'jQuery': function() {
			return window.jQuery != null;
		},
		'jQuery UI': function() {
			return window.jQuery != null && window.jQuery.ui != null;
		},
		'Typekit': function() {
			return window.Typekit != null;
		},
		'Facebook': function() {
			return window.FB != null && window.FB.api != null;
		},
		'ExtJS': function() {
			return window.Ext != null;
		},
		'Modernizr': function() {
			return window.Modernizr != null;
		},
		'Raphael': function() {
			return window.Raphael != null;
		},
		'Cufon': function() {
			return window.Cufon != null;
		},
		'sIFR': function() {
			return window.sIFR != null;
		},
		'Xiti': function() {
			return window.xtsite != null && window.xtpage != null;
		},
		'Piwik': function() {
			return window.Piwik != null;
		},
		'IPB': function() {
			return window.IPBoard != null;
		},
		'MyBB': function() {
			return window.MyBB != null;
		},
		'Clicky': function() {
			return window.clicky != null;
		},
		'Woopra': function() {
			return window.woopraTracker != null;
		},
		'RightJS': function() {
			return window.RightJS != null;
		},
		'OpenWebAnalytics': function() {
			return window.owa_baseUrl != null;
		},
		'Prettify': function() {
			return window.prettyPrint != null;
		},
		'SiteCatalyst': function() {
			return window.s_account != null;
		},
		'Twitter': function() {
			return window.twttr != null;
		},
		'Coremetrics': function() {
			return window.cmCreatePageviewTag != null;
		},
		'Buzz': function() {
			return window.google_buzz__base_url != null;
		},
		'Plus1': function() {
			return window.gapi && window.gapi.plusone;
		},
		'Google Loader': function() {
			return window.google && window.google.load != null;
		},
		'GoogleMapApi': function() {
			return window.google && window.google.maps != null;
		},
		'Head JS': function() {
			return window.head && window.head.js != null;
		},
		'SWFObject': function() {
			return window.swfobject != null;
		},
		'Chitika': function() {
			return window.ch_client && window.ch_write_iframe;
		},
		'Jimdo': function() {
			return window.jimdoData != null;
		},
		'Webs': function() {
			return window.webs != null;
		},
		'Backbone.js': function() {
			return window.Backbone && typeof(window.Backbone.sync) === 'function';
		},
		'Underscore.js': function() {
			return window._ && typeof(window._.identity) === 'function'
				&& window._.identity('abc') === 'abc';
		},
		'Spine': function() {
			return window.Spine != null;
		}
	};


	var js_versions = {
		'Prototype': function() {
			if('Prototype' in window && Prototype.Version!=undefined)
				return window.Prototype.Version
		},
		'script.aculo.us': function() {
			if('Scriptaculous' in window && Scriptaculous.Version!=undefined)
				return window.Scriptaculous.Version
		},
		'jQuery': function() {
			if(typeof jQuery == 'function' && jQuery.prototype.jquery!=undefined )
				return jQuery.prototype.jquery
		},
		'jQuery UI': function() {
			if(typeof jQuery == 'function' && jQuery.ui && jQuery.ui.version!=undefined )
				return jQuery.ui.version
		},
		'Dojo': function() {
			if(typeof dojo == 'object' && dojo.version.toString()!=undefined)
				return dojo.version
		},
		'YUI': function() {
			if(typeof YAHOO == 'object' && YAHOO.VERSION!=undefined )
				return YAHOO.VERSION
			if('YUI' in window && typeof YUI == 'function' && YUI().version!=undefined)
				return YUI().version
		},
		'MooTools': function() {
			 if(typeof MooTools == 'object' && MooTools.version!=undefined)
				return MooTools.version
		},
		'ExtJS': function() {
			if(typeof Ext === 'object' && Ext.version!=undefined)
				return Ext.version
		},
		'RightJS': function() {
			if('RightJS' in window && RightJS.version!=undefined)
				return RightJS.version
		},
		'Modernizr': function() {
			if(window.Modernizr != null && Modernizr._version!=undefined)
				return Modernizr._version
		},
		'Raphael': function() {
			if(window.Raphael != null && Raphael.version!=undefined)
				return Raphael.version
		},
		'Backbone.js': function() {
			if (window.Backbone && window.Backbone.VERSION)
				return window.Backbone.VERSION;
		},
		'Underscore.js': function() {
			if (window._ && window._.VERSION)
				return window._.VERSION;
		},
		'Spine': function() {
			if(window.Spine && window.Spine.version)
				return window.Spine.version;
		}
	};