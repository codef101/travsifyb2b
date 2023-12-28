<?php
$settings = session()->get('settings');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= site_url('themes/focus2/images/favicon.png') ?>">
    <meta property="visitor" content="prospect">
    <title><?= $settings['title'] ?? '' ?></title>
    <meta property="og:image:alt" content="">
    <meta property="og:locale" content="nl_NL">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://travsifyb2b.com/">
    <meta property="og:image" content="../assets2/images/salesforce-logo.jpg">
    <meta property="og:description" content="<?= $settings['seo_description'] ?? '' ?>">
    <meta property="og:title" content="Travsify B2B">
    <meta property="og:site_name" content="Travsify B2B">
    <meta property="twitter:site" content="">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://travsifyb2b.com/">
    <meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1">
    <meta name="description" content="<?= $settings['seo_description'] ?? '' ?>">
    <link rel="canonical" href="https://travsifyb2b.com/">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Salesforce",
            "url": "https://www.salesforce.com"
        }
    </script>


    <link rel="preconnect" href="//a.sfdcstatic.com">
    <link rel="preconnect" href="//www.googletagmanager.com">
    <link rel="preconnect" href="//www.google-analytics.com">
    <link rel="preconnect" href="//wp.salesforce.com">
    <link rel="preconnect" href="//service.force.com">
    <link rel="preconnect" href="//geolocation.onetrust.com">
    <link rel="preconnect" href="//cdn.krxd.net">
    <link rel="preconnect" href="//org62.my.salesforce.com">
    <link rel="preconnect" href="//dpm.demdex.net">
    <link rel="preconnect" href="//cdn.evgnet.com">
    <link rel="preconnect" href="//salesforce.us-1.evergage.com">
    <link rel="preconnect" href="//api.company-target.com">
    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preload" as="font" href="//a.sfdcstatic.com/shared/fonts/salesforce-sans/SalesforceSans-Regular.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="//a.sfdcstatic.com/shared/fonts/salesforce-sans/SalesforceSans-Italic.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="//a.sfdcstatic.com/shared/fonts/salesforce-sans/SalesforceSans-Bold.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="//a.sfdcstatic.com/shared/fonts/salesforce-icons/salesforce-icons.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="//a.sfdcstatic.com/shared/fonts/avant-garde/AvantGardeForSalesforceW05-Dm.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="style" href="/c/public/exp/pbc/server/css/style.4dfe2eaf7eb5276d9774.css">
    <link rel="stylesheet" href="../assets2/css/style.4dfe2eaf7eb5276d9774.css" media="screen">
    <link rel="stylesheet" href="../assets2/css/header.css" media="screen">
    <script>
        window.sfdcBase = Object.assign(window.sfdcBase || {}, {
            "env": "PROD",
            "locale": "nl-nl",
            "personalizationEnabled": true,
            "ssoEnabled": true,
            "page": {
                "pagename": "SFDC:nl:homepage",
                "type": "Home Page",
                "locale": "nl",
                "segment": "non-customer:nl",
                "sitesection": "nl:homepage",
                "uiframework": "Page Builder"
            },
            "clientErrorThreshold": 10,
            "clientErrorEndpoint": "https://www.salesforce.com/c/clerr",
            "optimizely": {
                "enabled": true,
                "cdnUrl": "https://cdn.optimizely.com/../assets2/js/24776530927.js"
            }
        })
    </script>
    <script type="text/javascript" src="../assets2/js/top.js"></script>
    <script async="" type="text/javascript" src="../assets2/js/otSDKStub.js" data-domain-script="8e783e8c-0ad0-475d-8fca-4a03afa0a02a" crossorigin=""></script>
    <script defer="" type="text/javascript" src="../assets2/js/bottom.js"></script>
    <script defer="" type="text/javascript" src="../assets2/js/ot-ext.js"></script>
    <script defer="" type="text/javascript" src="../assets2/js/comp-data.js"></script>
    <script defer="" type="text/javascript" src="../assets2/js/legacy.js"></script>
    <script async="" type="text/javascript" src="../assets2/js/bundle.eac8db148673d3d61ce7.js" id="pal-script" data-dataset="sf_shared_prod"></script>
    <script type="module" src="../assets2/js/navs.js"></script>
    <script defer="" type="module" src="../assets2/js/prod.f2188467.js"></script>
    <script defer="" type="text/javascript" src="../assets2/js/templates.9af351a3.js"></script>
    <script defer="" type="text/javascript" src="../assets2/js/nunjucks-slim.min.js"></script>
    <script defer="" type="text/javascript" src="../assets2/js/scripts.bd067cfb6df2342318f0.js"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= site_url('/themes/startbootstrap/css/styles.css');?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= site_url('assets/vendor/cookieconsent/dist/cookieconsent.css'); ?>" media="print" onload="this.media='all'">

    <script>
        (window.BOOMR_mq = window.BOOMR_mq || []).push(["addVar", {
            "rua.upush": "false",
            "rua.cpush": "false",
            "rua.upre": "false",
            "rua.cpre": "false",
            "rua.uprl": "false",
            "rua.cprl": "false",
            "rua.cprf": "false",
            "rua.trans": "",
            "rua.cook": "false",
            "rua.ims": "false",
            "rua.ufprl": "false",
            "rua.cfprl": "false",
            "rua.isuxp": "false",
            "rua.texp": "norulematch"
        }]);
    </script>
    <script>
        // ! function(e) {
        //     var n = "https://s.go-mpulse.net/boomerang/";
        //     if ("False" == "True") e.BOOMR_config = e.BOOMR_config || {}, e.BOOMR_config.PageParams = e.BOOMR_config.PageParams || {}, e.BOOMR_config.PageParams.pci = !0, n = "https://s2.go-mpulse.net/boomerang/";
        //     if (window.BOOMR_API_key = "NCPYV-VGJPP-N4J93-8HN3B-8B6S3", function() {
        //             function e() {
        //                 if (!o) {
        //                     var e = document.createElement("script");
        //                     e.id = "boomr-scr-as", e.src = window.BOOMR.url, e.async = !0, i.parentNode.appendChild(e), o = !0
        //                 }
        //             }

        //             function t(e) {
        //                 o = !0;
        //                 var n, t, a, r, d = document,
        //                     O = window;
        //                 if (window.BOOMR.snippetMethod = e ? "if" : "i", t = function(e, n) {
        //                         var t = d.createElement("script");
        //                         t.id = n || "boomr-if-as", t.src = window.BOOMR.url, BOOMR_lstart = (new Date).getTime(), e = e || d.body, e.appendChild(t)
        //                     }, !window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]\./)) return window.BOOMR.snippetMethod = "s", void t(i.parentNode, "boomr-async");
        //                 a = document.createElement("IFRAME"), a.src = "about:blank", a.title = "", a.role = "presentation", a.loading = "eager", r = (a.frameElement || a).style, r.width = 0, r.height = 0, r.border = 0, r.display = "none", i.parentNode.appendChild(a);
        //                 try {
        //                     O = a.contentWindow, d = O.document.open()
        //                 } catch (_) {
        //                     n = document.domain, a.src = "javascript:var d=document.open();d.domain='" + n + "';void(0);", O = a.contentWindow, d = O.document.open()
        //                 }
        //                 if (n) d._boomrl = function() {
        //                     this.domain = n, t()
        //                 }, d.write("<bo" + "dy onload='document._boomrl();'>");
        //                 else if (O._boomrl = function() {
        //                         t()
        //                     }, O.addEventListener) O.addEventListener("load", O._boomrl, !1);
        //                 else if (O.attachEvent) O.attachEvent("onload", O._boomrl);
        //                 d.close()
        //             }

        //             function a(e) {
        //                 window.BOOMR_onload = e && e.timeStamp || (new Date).getTime()
        //             }
        //             if (!window.BOOMR || !window.BOOMR.version && !window.BOOMR.snippetExecuted) {
        //                 window.BOOMR = window.BOOMR || {}, window.BOOMR.snippetStart = (new Date).getTime(), window.BOOMR.snippetExecuted = !0, window.BOOMR.snippetVersion = 12, window.BOOMR.url = n + "NCPYV-VGJPP-N4J93-8HN3B-8B6S3";
        //                 var i = document.currentScript || document.getElementsByTagName("script")[0],
        //                     o = !1,
        //                     r = document.createElement("link");
        //                 if (r.relList && "function" == typeof r.relList.supports && r.relList.supports("preload") && "as" in r) window.BOOMR.snippetMethod = "p", r.href = window.BOOMR.url, r.rel = "preload", r.as = "script", r.addEventListener("load", e), r.addEventListener("error", function() {
        //                     t(!0)
        //                 }), setTimeout(function() {
        //                     if (!o) t(!0)
        //                 }, 3e3), BOOMR_lstart = (new Date).getTime(), i.parentNode.appendChild(r);
        //                 else t(!1);
        //                 if (window.addEventListener) window.addEventListener("load", a, !1);
        //                 else if (window.attachEvent) window.attachEvent("onload", a)
        //             }
        //         }(), "".length > 0)
        //         if (e && "performance" in e && e.performance && "function" == typeof e.performance.setResourceTimingBufferSize) e.performance.setResourceTimingBufferSize();
        //     ! function() {
        //         if (BOOMR = e.BOOMR || {}, BOOMR.plugins = BOOMR.plugins || {}, !BOOMR.plugins.AK) {
        //             var n = "" == "true" ? 1 : 0,
        //                 t = "",
        //                 a = "yjlr743in27rwzkxpmia-f-32c34bbea-clientnsv4-s.akamaihd.net",
        //                 i = "false" == "true" ? 2 : 1,
        //                 o = {
        //                     "ak.v": "36",
        //                     "ak.cp": "1410510",
        //                     "ak.ai": parseInt("638429", 10),
        //                     "ak.ol": "0",
        //                     "ak.cr": 12,
        //                     "ak.ipv": 4,
        //                     "ak.proto": "http/1.1",
        //                     "ak.rid": "7860de",
        //                     "ak.r": 43444,
        //                     "ak.a2": n,
        //                     "ak.m": "dsca",
        //                     "ak.n": "essl",
        //                     "ak.bpcip": "194.87.31.0",
        //                     "ak.cport": 41746,
        //                     "ak.gh": "23.72.253.155",
        //                     "ak.quicv": "",
        //                     "ak.tlsv": "tls1.3",
        //                     "ak.0rtt": "",
        //                     "ak.csrc": "-",
        //                     "ak.acc": "bbr",
        //                     "ak.t": "1700231952",
        //                     "ak.ak": "hOBiQwZUYzCg5VSAfCLimQ==H+uhRB8ZODKYPmVZVAQ34f5BlSG41b0H5h0Xjsth/XxGjFA4cdgLCcqKXJLnsflGuyla/FD9aWbPlGAYy15wg2U9AW5+enkrF/WP6zjlg0a96E246NME0lKamoBTdkLSOfiPGPrtX/N+9QCra8pWPPuPXJwfShMctkrWPbwEBoXiEOBCeONDJekzOeFoxef1QdeolU07T2/MVq5UY4zKFCRFinxCj0zoMnluoLuUKiuWKk+d6KDp3oynNQiz8I5weEiFK78WZZQ4IB2Bs5X0dT/aCquOgk/OPGqdOuu3TErlbEc/S6q8wLIHpQXJoCV9k9wuwJJV5y8yvQanrCa7IT6wa4YoYwGjMLvXWgLmZHqZ8H0kOLi7OOMQyD8srYUG/b/+/KjyZQcqRgJ45BNWaXwTsmxNswLIpcJy0V3qFRc=",
        //                     "ak.pv": "436",
        //                     "ak.dpoabenc": "",
        //                     "ak.tf": i
        //                 };
        //             if ("" !== t) o["ak.ruds"] = t;
        //             var r = {
        //                 i: !1,
        //                 av: function(n) {
        //                     var t = "http.initiator";
        //                     if (n && (!n[t] || "spa_hard" === n[t])) o["ak.feo"] = void 0 !== e.aFeoApplied ? 1 : 0, BOOMR.addVar(o)
        //                 },
        //                 rv: function() {
        //                     var e = ["ak.bpcip", "ak.cport", "ak.cr", "ak.csrc", "ak.gh", "ak.ipv", "ak.m", "ak.n", "ak.ol", "ak.proto", "ak.quicv", "ak.tlsv", "ak.0rtt", "ak.r", "ak.acc", "ak.t", "ak.tf"];
        //                     BOOMR.removeVar(e)
        //                 }
        //             };
        //             BOOMR.plugins.AK = {
        //                 akVars: o,
        //                 akDNSPreFetchDomain: a,
        //                 init: function() {
        //                     if (!r.i) {
        //                         var e = BOOMR.subscribe;
        //                         e("before_beacon", r.av, null, null), e("onbeacon", r.rv, null, null), r.i = !0
        //                     }
        //                     return this
        //                 },
        //                 is_complete: function() {
        //                     return !0
        //                 }
        //             }
        //         }
        //     }()
        // }(window);
    </script>
</head>

<body>

    <script>
        var wpdata = {
            navigation: {
                "top-navigation-c360": [{
                        "ID": 0,
                        "title": "About",
                        "showIcon": true,
                        "navigationItems": [{
                            "ID": 1,
                            "buttonlink": {
                                "label": "About Us",
                                "url": "/site/about",
                                "target": "_self"
                            }
                        }]
                    },
                    {
                        "ID": 2,
                        "title": "Contact",
                        "showIcon": true,
                        "navigationItems": [{
                            "ID": 1,
                            "buttonlink": {
                                "label": "Contact Us",
                                "url": "/site/contact",
                                "target": "_self"
                            }
                        }]
                    },
                    {
                        "ID": 3,
                        "title": "Pricing",
                        "showIcon": true,
                        "navigationItems": [{
                            "ID": 1,
                            "buttonlink": {
                                "label": "Our Prices",
                                "url": "/site/pricing",
                                "target": "_self"
                            }
                        }]
                    },
                    {
                        "ID": 4,
                        "title": "FAQ",
                        "showIcon": true,
                        "navigationItems": [{
                            "ID": 1,
                            "buttonlink": {
                                "label": "Frequently Asked Questions",
                                "url": "/site/faq",
                                "target": "_self"
                            }
                        }]
                    },
                    {
                        "ID": 5,
                        "title": "Blog",
                        "showIcon": true,
                        "navigationItems": [{
                                "ID": 1,
                                "buttonlink": {
                                    "label": "Blog Home",
                                    "url": "/site/blog_home",
                                    "target": "_self"
                                }
                            },
                            {
                                "ID": 2,
                                "buttonlink": {
                                    "label": "Blog Post",
                                    "url": "/site/blog_post",
                                    "target": "_self"
                                }
                            }
                        ]
                    },
                    {
                        "ID": 6,
                        "title": "Documentation",
                        "showIcon": true,
                        "navigationItems": [{
                            "ID": 1,
                            "buttonlink": {
                                "label": "Our Documentation",
                                "url": "/documentation",
                                "target": "_self"
                            }
                        }]
                    }
                ],
                "utility-navigation-c360": {
                    "labelBack": "Back",
                    "logoAlt": "Travsify B2B Home",
                    "labelMore": "labelMore",
                    "contact": {
                        "title": "Contact",
                        "firstSubtitle": "Telephone",
                        "lock": {
                            "move": false,
                            "remove": false
                        },
                        "links": [{
                                "label": "Contact Page",
                                "url": "/site/contact",
                                "target": "_self"
                            },
                            {
                                "label": "api@travsifyb2b.com",
                                "url": "mailto:api@travsifyb2b.com",
                                "target": "_self"
                            },
                            {
                                "label": "Address: 635 Pine Ave, Pacific Grove, California, U.S.A",
                                "url": "/site/contact",
                                "target": "_self"
                            }
                        ],
                        "secondSubtitle": "Online",
                        "phones": [{
                                "url": "tel:2347040185146 ",
                                "label": "+2347040185146 ",
                                "target": "_self",
                                "ariaLabel": ""
                            },
                            {
                                "url": "tel:12134686786",
                                "label": "+12134686786",
                                "target": "_self",
                                "ariaLabel": ""
                            }
                        ]
                    },
                    "login": {
                        "labelLogin": "<?php if (empty(session()->get('token'))) {
                                            echo 'Login';
                                        } else {
                                            echo 'Dashboard';
                                        } ?>",
                        "labelMyAccounts": "Mijn accounts",
                        "authBackgroundImage": {
                            "src": null,
                            "alt": null,
                            "title": "",
                            "sizes": false,
                            "width": null,
                            "height": null
                        },
                        "labelProducts": "Link",
                        "loginSalesforce": {
                            "label": "<?php if (empty(session()->get('token'))) {
                                            echo 'Login';
                                        } else {
                                            echo 'Dashboard';
                                        } ?>",
                            "url": "<?php if (empty(session()->get('token'))) {
                                        echo '/login';
                                    } else {
                                        echo '/dashboard';
                                    } ?>",
                            "target": "_self",
                            "ariaLabel": "Travsify B2B label"
                        }
                    }
                },
                "isPreview": false
            }
        };
    </script>

    <div class="globalnav-wrapper-c360">
        <a class="screen-reader-text skip-to-content-c360" href="#main-content">
            <div class="screen-reader-container">Skip to content</div>
        </a>
        <hgf-c360nav locale="us" search="true" show-region-selector="true" context-nav-enabled="false" hide-login="false" truly-hide-login="false" show-button-main="true" show-button-secondary="false" hide-contact="false" origin="https://wp.sfdcdigital.com/en-us/wp-json">

        </hgf-c360nav>


    </div>