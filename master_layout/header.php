<?php
ob_start();
session_start();

require('./master_layout/Function.php');
?>
<?php include_once('./master_layout/Function.php') ;
require "connect.php";
?>
<!DOCTYPE html>
<!--[if IE 9 ]>
<html lang="vi" class="ie9 loading-site no-js">
	<![endif]-->
<!--[if IE 8 ]>
	<html lang="vi" class="ie8 loading-site no-js">
		<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
		<!-->
<html lang="vi" class="loading-site no-js">
  <!--
			<![endif]-->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="https://demo.tamnguyen.vn/xkld2/xmlrpc.php" />
    <script>
      (function(html) {
        html.className = html.className.replace(/\bno-js\b/, 'js')
      })(document.documentElement);
    </script>
    <title>jinsung</title>
    <meta name='robots' content='noindex, nofollow' />
    <link rel="alternate" type="application/rss+xml" title="Dòng thông tin jinsung &raquo;" href="https://demo.tamnguyen.vn/xkld2/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Dòng phản hồi jinsung &raquo;" href="https://demo.tamnguyen.vn/xkld2/comments/feed/" />
    <link rel="alternate" type="application/rss+xml" title="jinsung &raquo; Trang chủ Dòng phản hồi" href="https://demo.tamnguyen.vn/xkld2/trang-chu/feed/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
      window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
          "concatemoji": "https:\/\/demo.tamnguyen.vn\/xkld2\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.7"
        }
      };
      /*! This file is auto-generated */
      ! function(e, a, t) {
        var n, r, o, i = a.createElement("canvas"),
          p = i.getContext && i.getContext("2d");

        function s(e, t) {
          var a = String.fromCharCode,
            e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
          return p.clearRect(0, 0, i.width, i.height),
            p.fillText(a.apply(this, t), 0, 0),
            e === i.toDataURL()
        }

        function c(e) {
          var t = a.createElement("script");
          t.src = e,
            t.defer = t.type = "text/javascript",
            a.getElementsByTagName("head")[0].appendChild(t)
        }
        for (o = Array("flag", "emoji"), t.supports = {
            everything: !0,
            everythingExceptFlag: !0
          }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
            if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
              case "flag":
                return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
              case "emoji":
                return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
            }
            return !1
          }(o[r]),
          t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
        t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag,
          t.DOMReady = !1,
          t.readyCallback = function() {
            t.DOMReady = !0
          },
          t.supports.everything || (n = function() {
              t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
              "complete" === a.readyState && t.readyCallback()
            })),
            (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)))
      }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
      img.wp-smiley,
      img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
      }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='<?php echo base_url() ?>wp-includes/css/dist/block-library/style.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='classic-theme-styles-css' href='<?php echo base_url() ?>wp-includes/css/classic-themes.min.css' type='text/css' media='all' />
    <style id='global-styles-inline-css' type='text/css'>
      body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
      }

      :where(.is-layout-flex) {
        gap: 0.5em;
      }

      body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
      }

      body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
      }

      body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
      }

      body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
      }

      body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
      }

      body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
      }

      body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
      }

      body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
      }

      body .is-layout-flex {
        display: flex;
      }

      body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
      }

      body .is-layout-flex>* {
        margin: 0;
      }

      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }

      .has-black-color {
        color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-color {
        color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
      }

      .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
      }

      .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
      }

      .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
      }

      .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
      }

      .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
      }

      .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
      }

      .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
      }

      .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
      }

      .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
      }

      .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
      }

      .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
      }

      .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
      }

      .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
      }

      .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
      }

      .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
      }

      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }

      .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
      }
    </style>
    <link rel='stylesheet' id='contact-form-7-css' href='<?php echo base_url() ?>wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-four-css' href='<?php echo base_url() ?>wp-content/plugins/font-awesome-4-menus/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-main-css' href='<?php echo base_url() ?>wp-content/themes/flatsome/assets/css/flatsome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-style-css' href='<?php echo base_url() ?>wp-content/themes/xkld/style.css' type='text/css' media='all' />
    <script type='text/javascript' src='<?php echo base_url() ?>wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'></script>
    <script type='text/javascript' src='<?php echo base_url() ?>wp-includes/js/jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="https://demo.tamnguyen.vn/xkld2/wp-json/" />
    <link rel="alternate" type="application/json" href="https://demo.tamnguyen.vn/xkld2/wp-json/wp/v2/pages/2" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.tamnguyen.vn/xkld2/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://demo.tamnguyen.vn/xkld2/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.1.7" />
    <link rel="canonical" href="<?php echo base_url() ?>" />
    <link rel='shortlink' href='<?php echo base_url() ?>' />
    <link rel="alternate" type="application/json+oembed" href="https://demo.tamnguyen.vn/xkld2/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.tamnguyen.vn%2Fxkld2%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://demo.tamnguyen.vn/xkld2/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.tamnguyen.vn%2Fxkld2%2F&#038;format=xml" />
    <style>
      .bg {
        opacity: 0;
        transition: opacity 1s;
        -webkit-transition: opacity 1s;
      }

      .bg-loaded {
        opacity: 1;
      }
    </style>
    <!--[if IE]>
				<link rel="stylesheet" type="text/css" href="https://demo.tamnguyen.vn/xkld2/wp-content/themes/flatsome/assets/css/ie-fallback.css">
					<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>
					<script>var head = document.getElementsByTagName('head')[0],style = document.createElement('style');style.type = 'text/css';style.styleSheet.cssText = ':before,:after{content:none !important';head.appendChild(style);setTimeout(function(){head.removeChild(style);}, 0);</script>
					<script src="https://demo.tamnguyen.vn/xkld2/wp-content/themes/flatsome/assets/libs/ie-flexibility.js"></script>
					<![endif]-->
    <script type="text/javascript">
      WebFontConfig = {
        google: {
          families: ["Roboto:regular,500", "Roboto:regular,regular", "Roboto:regular,regular", "Dancing+Script:regular,400", ]
        }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();
    </script>
    <link rel="icon" href="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/cropped-logo-p-techno-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/cropped-logo-p-techno-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/cropped-logo-p-techno-180x180.png" />
    <meta name="msapplication-TileImage" content="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/cropped-logo-p-techno-270x270.png" />
    <style id="custom-css" type="text/css">
      :root {
        --primary-color: #003082;
      }

      /* Site Width */
      .full-width .ubermenu-nav,
      .container,
      .row {
        max-width: 1170px
      }

      .row.row-collapse {
        max-width: 1140px
      }

      .row.row-small {
        max-width: 1162.5px
      }

      .row.row-large {
        max-width: 1200px
      }

      .header-main {
        height: 90px
      }

      #logo img {
        max-height: 90px
      }

      #logo {
        width: 218px;
      }

      #logo img {
        padding: 2px 0;
      }

      .header-bottom {
        min-height: 45px
      }

      .header-top {
        min-height: 30px
      }

      .transparent .header-main {
        height: 30px
      }

      .transparent #logo img {
        max-height: 30px
      }

      .has-transparent+.page-title:first-of-type,
      .has-transparent+#main>.page-title,
      .has-transparent+#main>div>.page-title,
      .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
        padding-top: 110px;
      }

      .header.show-on-scroll,
      .stuck .header-main {
        height: 70px !important
      }

      .stuck #logo img {
        max-height: 70px !important
      }

      .search-form {
        width: 87%;
      }

      .header-bg-color,
      .header-wrapper {
        background-color: rgba(255, 255, 255, 0.9)
      }

      .header-bottom {
        background-color: #003082
      }

      .header-main .nav>li>a {
        line-height: 16px
      }

      .stuck .header-main .nav>li>a {
        line-height: 50px
      }

      .header-bottom-nav>li>a {
        line-height: 25px
      }

      @media (max-width: 549px) {
        .header-main {
          height: 70px
        }

        #logo img {
          max-height: 70px
        }
      }

      .main-menu-overlay {
        background-color: #003082
      }

      .nav-dropdown {
        font-size: 100%
      }

      .header-top {
        background-color: #fba646 !important;
      }

      /* Color */
      .accordion-title.active,
      .has-icon-bg .icon .icon-inner,
      .logo a,
      .primary.is-underline,
      .primary.is-link,
      .badge-outline .badge-inner,
      .nav-outline>li.active>a,
      .nav-outline>li.active>a,
      .cart-icon strong,
      [data-color='primary'],
      .is-outline.primary {
        color: #003082;
      }

      /* Color !important */
      [data-text-color="primary"] {
        color: #003082 !important;
      }

      /* Background */
      .scroll-to-bullets a,
      .featured-title,
      .label-new.menu-item>a:after,
      .nav-pagination>li>.current,
      .nav-pagination>li>span:hover,
      .nav-pagination>li>a:hover,
      .has-hover:hover .badge-outline .badge-inner,
      button[type="submit"],
      .button.wc-forward:not(.checkout):not(.checkout-button),
      .button.submit-button,
      .button.primary:not(.is-outline),
      .featured-table .title,
      .is-outline:hover,
      .has-icon:hover .icon-label,
      .nav-dropdown-bold .nav-column li>a:hover,
      .nav-dropdown.nav-dropdown-bold>li>a:hover,
      .nav-dropdown-bold.dark .nav-column li>a:hover,
      .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
      .is-outline:hover,
      .tagcloud a:hover,
      .grid-tools a,
      input[type='submit']:not(.is-form),
      .box-badge:hover .box-text,
      input.button.alt,
      .nav-box>li>a:hover,
      .nav-box>li.active>a,
      .nav-pills>li.active>a,
      .current-dropdown .cart-icon strong,
      .cart-icon:hover strong,
      .nav-line-bottom>li>a:before,
      .nav-line-grow>li>a:before,
      .nav-line>li>a:before,
      .banner,
      .header-top,
      .slider-nav-circle .flickity-prev-next-button:hover svg,
      .slider-nav-circle .flickity-prev-next-button:hover .arrow,
      .primary.is-outline:hover,
      .button.primary:not(.is-outline),
      input[type='submit'].primary,
      input[type='submit'].primary,
      input[type='reset'].button,
      input[type='button'].primary,
      .badge-inner {
        background-color: #003082;
      }

      /* Border */
      .nav-vertical.nav-tabs>li.active>a,
      .scroll-to-bullets a.active,
      .nav-pagination>li>.current,
      .nav-pagination>li>span:hover,
      .nav-pagination>li>a:hover,
      .has-hover:hover .badge-outline .badge-inner,
      .accordion-title.active,
      .featured-table,
      .is-outline:hover,
      .tagcloud a:hover,
      blockquote,
      .has-border,
      .cart-icon strong:after,
      .cart-icon strong,
      .blockUI:before,
      .processing:before,
      .loading-spin,
      .slider-nav-circle .flickity-prev-next-button:hover svg,
      .slider-nav-circle .flickity-prev-next-button:hover .arrow,
      .primary.is-outline:hover {
        border-color: #003082
      }

      .nav-tabs>li.active>a {
        border-top-color: #003082
      }

      .widget_shopping_cart_content .blockUI.blockOverlay:before {
        border-left-color: #003082
      }

      .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
        border-left-color: #003082
      }

      /* Fill */
      .slider .flickity-prev-next-button:hover svg,
      .slider .flickity-prev-next-button:hover .arrow {
        fill: #003082;
      }

      /* Background Color */
      [data-icon-label]:after,
      .secondary.is-underline:hover,
      .secondary.is-outline:hover,
      .icon-label,
      .button.secondary:not(.is-outline),
      .button.alt:not(.is-outline),
      .badge-inner.on-sale,
      .button.checkout,
      .single_add_to_cart_button {
        background-color: #fba646;
      }

      /* Color */
      .secondary.is-underline,
      .secondary.is-link,
      .secondary.is-outline,
      .stars a.active,
      .star-rating:before,
      .woocommerce-page .star-rating:before,
      .star-rating span:before,
      .color-secondary {
        color: #fba646
      }

      /* Color !important */
      [data-text-color="secondary"] {
        color: #fba646 !important;
      }

      /* Border */
      .secondary.is-outline:hover {
        border-color: #fba646
      }

      body {
        font-size: 95%;
      }

      @media screen and (max-width: 549px) {
        body {
          font-size: 100%;
        }
      }

      body {
        font-family: "Roboto", sans-serif
      }

      body {
        font-weight: 0
      }

      body {
        color: #1e1e1e
      }

      .nav>li>a {
        font-family: "Roboto", sans-serif;
      }

      .nav>li>a {
        font-weight: 0;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      .heading-font,
      .off-canvas-center .nav-sidebar.nav-vertical>li>a {
        font-family: "Roboto", sans-serif;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      .heading-font,
      .banner h1,
      .banner h2 {
        font-weight: 500;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      .heading-font {
        color: #0a0a0a;
      }

      .alt-font {
        font-family: "Dancing Script", sans-serif;
      }

      .alt-font {
        font-weight: 400 !important;
      }

      .header:not(.transparent) .header-nav.nav>li>a {
        color: #ffffff;
      }

      .header:not(.transparent) .header-bottom-nav.nav>li>a {
        color: #ffffff;
      }

      .header:not(.transparent) .header-bottom-nav.nav>li>a:hover,
      .header:not(.transparent) .header-bottom-nav.nav>li.active>a,
      .header:not(.transparent) .header-bottom-nav.nav>li.current>a,
      .header:not(.transparent) .header-bottom-nav.nav>li>a.active,
      .header:not(.transparent) .header-bottom-nav.nav>li>a.current {
        color: #fba646;
      }

      .header-bottom-nav.nav-line-bottom>li>a:before,
      .header-bottom-nav.nav-line-grow>li>a:before,
      .header-bottom-nav.nav-line>li>a:before,
      .header-bottom-nav.nav-box>li>a:hover,
      .header-bottom-nav.nav-box>li.active>a,
      .header-bottom-nav.nav-pills>li>a:hover,
      .header-bottom-nav.nav-pills>li.active>a {
        color: #FFF !important;
        background-color: #fba646;
      }

      a {
        color: #003082;
      }

      .absolute-footer,
      html {
        background-color: #fba646
      }

      /* Custom CSS */
      .fa {
        padding-right: 5px
      }

      .nav>li>a>i {
        color: #fba646
      }

      #header-contact li a {
        text-transform: none;
        font-weight: 500;
        font-size: 15px;
        color: #003082
      }

      .nav-small.nav>li.html {
        font-size: 13px
      }

      .searchform-wrapper input {
        height: 36px;
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px
      }

      .searchform-wrapper:not(.form-flat) .submit-button {
        width: 36px;
        height: 36px !important;
        border-top-right-radius: 3px !important;
        border-bottom-right-radius: 3px
      }

      .nav-dropdown-default {
        padding: 0;
        border: 0
      }

      .nav-dropdown-has-arrow li.has-dropdown:before {
        border-bottom-color: #003082
      }

      .slider-nav-circle .flickity-prev-next-button .arrow,
      .slider-nav-circle .flickity-prev-next-button svg {
        border: 0;
        background: #003082
      }

      .nav-dropdown>li>a {
        padding: 8px 20px;
        color: #003082
      }

      .nav-dropdown.nav-dropdown-default>li>a {
        border-bottom: 1px solid #fbfbfb
      }

      .nav-dropdown>li>a:hover {
        color: #fba646
      }

      .gioi-thieu-section .gioi-thieu {
        border-radius: 3px;
        padding: 15px;
        background: #fff
      }

      .gioi-thieu-section .gioi-thieu ul li {
        margin-bottom: 0
      }

      b,
      strong {
        font-weight: 500
      }

      .gioi-thieu-section .gioi-thieu p,
      .gioi-thieu-section .gioi-thieu ul {
        margin-bottom: 6px
      }

      .slider-nav-push:not(.slider-nav-simple) .flickity-prev-next-button svg {
        margin-top: 0
      }

      .box-blog-post .is-divider {
        height: 1px;
        max-width: 100%
      }

      .gioi-thieu-section .cot4 .box-hotro {
        background: #e00000;
        padding: 10px;
        color: #fff;
        border-radius: 3px
      }

      .gioi-thieu-section .cot4 .box-hotro p {
        margin-bottom: 5px
      }

      .gioi-thieu-section ul li.bullet-star {
        border-bottom: 1px dashed #f31d1d
      }

      .cau-hoi .cot8 .col-inner,
      .gioi-thieu-section .cot8 .tabbed-content {
        border: 1px solid #e2e2e2
      }

      .gioi-thieu-section ul li.bullet-checkmark:before,
      ul li.bullet-arrow:before,
      ul li.bullet-star:before {
        color: #fff
      }

      .gioi-thieu-section .cot8 .tabbed-content .nav {
        background: #003082;
        padding: 2px 10px
      }

      .gioi-thieu-section .cot8 .tab-panels {
        padding-top: 0;
        background: #fff
      }

      .gioi-thieu-section .cot8 .tabbed-content .nav li a {
        color: #fff;
        font-size: 15px;
        font-weight: 500;
        padding: 7px 10px
      }

      .gioi-thieu-section .cot8 .tabbed-content .nav li.active>a {
        color: #fba646
      }

      .gioi-thieu-section .tabbed-content .post-item {
        border-bottom: 1px solid #e2e2e2;
        padding-bottom: 7px;
        padding-top: 7px
      }

      .gioi-thieu-section .tabbed-content .tab-panels .row-small {
        margin-left: 0;
        margin-right: 0
      }

      .gioi-thieu-section .tabbed-content .post-item .box-vertical .box-text {
        padding-right: 0;
        padding-top: 9px;
        padding-bottom: 9px
      }

      .gioi-thieu-section .tabbed-content .post-item .box-blog-post .is-divider {
        display: none
      }

      .gioi-thieu-section .tabbed-content .post-item:nth-child(2n+1) {
        border-right: 1px solid #e2e2e2
      }

      .gioi-thieu-section .tabbed-content .post-item .post-title {
        margin-top: 0;
        margin-bottom: 10px;
        font-size: 15px
      }

      .gioi-thieu-section .cot4 .thong-tin-lien-he .hotline1 {
        display: inline-block;
        background: #003082;
        width: 100%;
        height: 43px;
        color: #fff;
        line-height: 43px;
        padding: 0 10px;
        font-size: 20px;
        text-align: center
      }

      .tin-moi .flickity-prev-next-button {
        display: none
      }

      .gioi-thieu-section .col {
        padding-bottom: 0
      }

      .gioi-thieu-section .cot4 .col-inner {
        border: 1px solid #e2e2e2;
        background: #fff
      }

      .gioi-thieu-section .cot4 .col-inner p {
        margin-bottom: 0
      }

      .cau-hoi .title {
        height: 44px;
        line-height: 44px;
        padding: 0 10px;
        color: #fff;
        background: #003082
      }

      .cau-hoi .title h3 {
        color: #fff;
        display: inline;
        font-size: 16px;
        text-transform: uppercase
      }

      .cau-hoi .cot8 .col-inner .box-blog-post .is-divider,
      .cau-hoi .tabbed-content .box-blog-post .is-divider {
        display: none
      }

      .cau-hoi .cot8 .col-inner .cot2 .post-item .box-vertical .box-text .post-title,
      .cau-hoi .cot8 .col-inner .cot6 .post-item .box-vertical .box-text .post-title {
        font-size: 15px
      }

      .cau-hoi .cot8 .col-inner .col .col-inner {
        border: 0
      }

      .cau-hoi .cot8 .col-inner .cot6 .col-inner {
        padding-top: 5px;
        padding-right: 10px
      }

      .cau-hoi .cot8 .col-inner .cot6 .post-item {
        padding-bottom: 0
      }

      .cau-hoi .cot8 .col-inner .cot6 .post-item .box-text {
        padding-bottom: 5px
      }

      .cau-hoi .cot8 .col-inner .cot6 .post-item .box-vertical .box-text {
        padding-left: 10px;
        padding-right: 0
      }

      .cau-hoi .cot8 .col-inner .cot6 .post-item .box-vertical .box-text .op-8,
      .op-8 {
        color: #bdbdbd
      }

      .cau-hoi .cot8 .col-inner .cot2 .col-inner {
        padding-top: 8px;
        padding-left: 5px
      }

      .cau-hoi .cot8 .col-inner .cot2 .post-item {
        padding-bottom: 0
      }

      .cau-hoi .cot8 .col-inner .cot2 .post-item .box-vertical .box-text {
        padding-right: 0;
        padding-left: 10px;
        padding-bottom: 5px
      }

      .cau-hoi .cot8 .col-inner .col {
        padding-bottom: 10px
      }

      .cau-hoi .tabbed-content .tab-panels .post-item .box-text {
        padding-bottom: 0
      }

      .cau-hoi .tabbed-content .tab-panels {
        padding: 10px;
        list-style: none;
        counter-reset: li
      }

      .cau-hoi .tabbed-content .tab-panels .post-item::before {
        content: counter(li);
        color: #fba646;
        display: inline-block;
        width: 30px;
        margin-left: 0;
        float: left;
        line-height: 56px;
        font-size: 25px;
        font-weight: 400
      }

      .cau-hoi .tabbed-content .tab-panels .post-item:last-child {
        border-bottom: 0
      }

      .cau-hoi .tabbed-content .tab-panels .post-item {
        counter-increment: li;
        border-bottom: 1px solid #e2e2e2;
        padding-bottom: 10.7px
      }

      .cau-hoi .tabbed-content .tab-panels .post-item .post-title {
        font-size: 15px
      }

      .cau-hoi .tabbed-content .tab-panels .post-item .op-8 {
        color: #cacaca
      }

      .cau-hoi .cot4 .nav-tabs>li.active>a {
        border-top-color: #003082;
        color: #003082
      }

      .cau-hoi .cot4 .nav-tabs>li>a {
        text-transform: uppercase;
        font-size: 16px;
        font-weight: 500;
        color: #848484;
        padding: 7px 10px;
        letter-spacing: 0
      }

      .cau-hoi .cot4 .tabbed-content form,
      .cau-hoi .cot4 .tabbed-content form input[type=submit] {
        margin-bottom: 5px
      }

      .cau-hoi .cot4 .tabbed-content p {
        margin-bottom: 10px
      }

      .vanhoa-amthuc .title {
        height: 44px;
        line-height: 44px;
        padding: 0 10px;
        color: #fff;
        background: #003082
      }

      .vanhoa-amthuc .title h3 {
        color: #fff;
        display: inline;
        font-size: 16px;
        text-transform: uppercase
      }

      .blog-single .entry-category,
      .blog-single .entry-image,
      .blog-single .html-before-comments .post-item .is-divider,
      .blog-single .post-sidebar .post-item p,
      .vanhoa-amthuc .cot8 .col-inner .box-blog-post .is-divider {
        display: none
      }

      .vanhoa-amthuc .cot4 .post-item .post-title,
      .vanhoa-amthuc .cot8 .box-text .post-title,
      .vanhoa-amthuc .cot8 .post-item {
        font-size: 15px
      }

      .vanhoa-amthuc .cot8 .col-inner {
        background: #fff;
        border: 1px solid #ececec
      }

      .vanhoa-amthuc .cot8 .col-inner .row .col .col-inner {
        border: 0
      }

      .vanhoa-amthuc .cot8 .col-inner .cot6 .col-inner {
        padding-left: 10px;
        padding-top: 10px
      }

      .vanhoa-amthuc .cot8 .col-inner .cot6 .col-inner .col .col-inner {
        padding: 0
      }

      .vanhoa-amthuc .cot8 .col-inner .cot2 .col-inner {
        padding-right: 10px;
        padding-top: 10px
      }

      .vanhoa-amthuc .cot8 .col-inner .cot2 .col-inner .col .col-inner {
        padding: 0
      }

      .vanhoa-amthuc .cot8 .box-text,
      .vanhoa-amthuc .cot8 .post-item {
        padding-bottom: 5px
      }

      .vanhoa-amthuc .cot8 .col-inner .cot2 .post-item .box-vertical .box-text,
      .vanhoa-amthuc .cot8 .col-inner .cot6 .post-item .box-vertical .box-text {
        padding-left: 10px;
        padding-right: 0
      }

      .vanhoa-amthuc .cot8 .col-inner .cot2,
      .vanhoa-amthuc .cot8 .col-inner .cot6 {
        padding-bottom: 10px
      }

      .vanhoa-amthuc .cot4 .post-item .col-inner {
        border: 0;
        padding: 10px 0 0
      }

      .vanhoa-amthuc .cot4 .post-item,
      .vanhoa-amthuc .cot4 .post-item .box-text {
        padding-bottom: 0
      }

      .vanhoa-amthuc .cot4 .col-inner {
        background: #fff;
        border: 1px solid #e2e2e2;
        padding: 10px
      }

      .vanhoa-amthuc .cot4 .col-inner .img {
        margin-bottom: 0
      }

      .section-title-center span {
        font-weight: 700
      }

      .header:not(.transparent) .header-bottom-nav.nav>li>a {
        text-transform: uppercase;
        font-weight: 500
      }

      #breadcrumbs,
      .button {
        font-weight: 400
      }

      .footer-section .y-kien-dong-gop {
        border: 1px dashed #fff;
        border-radius: 3px;
        background: #0a409c;
        font-size: 14px;
        padding: 10px
      }

      .footer-section .col {
        padding-bottom: 0
      }

      .absolute-footer {
        color: #fff
      }

      .img .caption {
        background-color: rgba(0, 0, 0, .73);
        max-width: 420px;
        right: 0;
        bottom: 0;
        padding: 15px
      }

      .img:hover .caption {
        transform: none
      }

      .blog-single .article-inner h2,
      .page-inner h2 {
        border-radius: 3px;
        background: #dff7ff;
        border: 1px dashed #1c617b;
        text-align: justify;
        font-size: 15px;
        line-height: 23px;
        padding: 10px;
        margin-bottom: 20px
      }

      .blog-single .entry-header-text {
        padding-bottom: 0
      }

      .blog-single .entry-content {
        padding-top: 0
      }

      .blog-single .is-divider {
        height: 1px;
        margin: 10px 0;
        max-width: 100%
      }

      .blog-single .post {
        border: 1px solid #e6e6e6;
        padding: 15px
      }

      .blog-single .info-bai-viet .luot-xem,
      .blog-single .info-bai-viet .time-update-post,
      .blog-single .large-9 {
        padding-right: 20px
      }

      #breadcrumbs {
        margin-bottom: 10px;
        font-size: 14px;
        color: gray;
        text-transform: none
      }

      .breadcrumbs a {
        color: #fba646
      }

      .blog-single .info-bai-viet {
        margin-bottom: 15px;
        font-size: 14px;
        color: gray
      }

      .chia-se-facebook {
        padding-right: 10px
      }

      .blog-single footer.entry-meta {
        font-size: 15px
      }

      .blog-single footer.entry-meta .danh-muc {
        margin-bottom: 10px
      }

      .blog-single .the-tim-kiem a {
        background: #fba646;
        padding: 5px 10px;
        border-radius: 3px;
        color: #fff;
        margin-right: 5px
      }

      .blog-single .the-tim-kiem a:hover {
        background: #003082
      }

      footer.entry-meta {
        border-bottom: 0
      }

      .entry-content {
        padding-bottom: 10px
      }

      .blog-single .html-before-comments {
        padding: 10px;
        border: 1px solid #e6e6e6
      }

      .blog-single .html-before-comments .post-item {
        padding-bottom: 0
      }

      .blog-single .post-sidebar {
        top: -25px;
        padding-left: 0
      }

      .blog-single .cau-hoi,
      .blog-single .gioi-thieu-section,
      .blog-single .vanhoa-amthuc {
        padding: 0
      }

      .blog-single .post-sidebar .gioi-thieu-section p {
        display: block
      }

      .page-right-sidebar .large-9 {
        padding-right: 20px
      }

      .page-right-sidebar .page-inner {
        border: 1px solid #e2e2e2;
        padding: 15px
      }

      .blog-archive .post-sidebar,
      .page-right-sidebar .large-3 {
        padding-left: 0;
        top: -25px
      }

      .blog-archive .post-sidebar .cau-hoi,
      .blog-archive .post-sidebar .gioi-thieu-section,
      .blog-archive .post-sidebar .vanhoa-amthuc,
      .page-right-sidebar .large-3 .cau-hoi,
      .page-right-sidebar .large-3 .gioi-thieu-section,
      .page-right-sidebar .vanhoa-amthuc {
        padding: 0
      }

      .blog-archive .badge.post-date,
      .blog-archive .post-sidebar .cau-hoi p,
      .blog-archive .post-sidebar .vanhoa-amthuc p,
      .page-right-sidebar .large-3 .cau-hoi .post-item p,
      .page-right-sidebar .vanhoa-amthuc .post-item p {
        display: none
      }

      .blog-archive .large-9 {
        padding-right: 20px
      }

      .blog-archive .post-sidebar {
        padding-left: 0
      }

      table tbody tr th {
        width: 25%;
        background: #efefef;
        padding-left: 10px !important;
        border-bottom: 1px solid #dcdcdc;
        text-transform: none;
        font-weight: normal;
        padding-top: 10px;
        padding-bottom: 10px
      }

      .thong-tin-lien-he .col {
        padding-bottom: 0
      }

      .thong-tin-lien-he form {
        margin-bottom: 0
      }

      .thong-tin-lien-he input[type='submit'] {
        margin-bottom: 0
      }

      .nav-dropdown>li.nav-dropdown-col {
        display: block;
        width: auto
      }

      .nav-dropdown .menu-item-has-children>a {
        text-transform: none;
        font-size: 15px;
        font-weight: normal;
        color: #003082;
      }

      .nav-dropdown li ul {
        display: none
      }

      .nav-dropdown li:hover ul {
        display: block !important;
        position: absolute;
        left: 100%;
        top: 0;
        background: white;
      }

      .tin-moi .page-box .box-text {
        padding-bottom: 9px
      }

      .gioi-thieu-section .tab-panels p,
      .gioi-thieu-section .tab-panels h3 {
        padding: 6px 15px;
        margin: 0
      }

      .cau-hoi .tabbed-content .tab-panels #tab_du-học-nhật-bản .post-item::before {
        display: none
      }

      .cau-hoi .tabbed-content .tab-panels #tab_du-học-nhật-bản .post-item {
        border-bottom: 0
      }

      input[type='submit'] {
        margin-bottom: 0
      }

      .icon-box-center .icon-box-img {
        margin-bottom: 0
      }

      .blog-archive .post-item .box-image {
        width: 25% !important
      }

      .blog-archive .from_the_blog_excerpt,
      .blog-archive .box-blog-post .is-divider {
        display: none
      }

      .blog-archive .post-item .post-title {
        margin-bottom: 8px;
        color: #003082;
      }

      .blog-archive .xem-them {
        display: inline-block;
        text-align: right;
        color: #003082;
      }

      .blog-archive .xem-them span {
        background: #003082;
        padding: 6px 10px;
        border-radius: 3px;
        color: white;
      }

      .blog-archive table tbody {
        font-size: 15px
      }

      .blog-archive table {
        border-color: #ececec;
        border: 1px solid #ececec;
        background: #fbfbfb;
        color: black
      }

      td {
        color: black
      }

      .category-tin-tuc .from_the_blog_excerpt,
      .category-thac-mac-giai-dap .from_the_blog_excerpt,
      .category-du-hoc-nhat-ban .from_the_blog_excerpt,
      .category-tuyen-dung .from_the_blog_excerpt {
        display: block;
        margin-bottom: 15px
      }

      .category-tin-tuc .thong-tin-them,
      .category-thac-mac-giai-dap .thong-tin-them,
      .category-du-hoc-nhat-ban .thong-tin-them,
      .category-tuyen-dung .thong-tin-them {
        display: none
      }

      .blog-single .thong-tin-them {
        display: block
      }

      th:first-child,
      td:first-child {
        border-right: 1px solid #ececec;
        padding-left: 5px;
      }

      .blog-single .thong-tin-them table {
        width: 100%;
        margin-bottom: 1em;
        border-color: #ececec;
        border-spacing: 0;
        border: 1px solid #ececec;
        font-size: 17px;
      }

      .blog-single th,
      .blog-single td {
        padding: 10px
      }

      .blog-single th {
        letter-spacing: 0;
        font-weight: 500;
        color: #003082;
      }

      .blog-single .ung-tuyen {
        display: block;
        width: 100%;
        margin-bottom: 30px;
        text-align: center
      }

      .blog-single .ung-tuyen a {
        background: #003082;
        padding: 8px 14px;
        border-radius: 3px;
        color: white
      }

      .gioi-thieu-section .tabbed-content .post-item .thong-tin-them,
      .gioi-thieu-section .tabbed-content .post-item .xem-them {
        display: none
      }

      .gioi-thieu-section .tabbed-content .post-item .from_the_blog_excerpt {
        padding-left: 0
      }

      /* Custom CSS Tablet */
      @media (max-width: 849px) {
        .tin-moi .flickity-slider .post-item {
          flex-basis: 33.33%;
          max-width: 33.33%
        }

        .vanhoa-amthuc .cot4 .post-item {
          flex-basis: 50%;
          max-width: 50%
        }
      }

      /* Custom CSS Mobile */
      @media (max-width: 549px) {
        .nav-small.nav>li.html {
          text-align: center
        }

        .cau-hoi .cot8 .col-inner .cot2 .post-item,
        .gioi-thieu-section .tabbed-content .post-item,
        .tin-moi .flickity-slider .post-item,
        .vanhoa-amthuc .cot4 .post-item,
        .vanhoa-amthuc .cot8 .cot2 .row-xsmall .post-item,
        .vanhoa-amthuc .cot8 .cot6 .row-xsmall .post-item {
          flex-basis: 50%;
          max-width: 50%
        }

        .cau-hoi .cot4 .nav-tabs>li>a {
          font-size: 14px
        }
      }

      .label-new.menu-item>a:after {
        content: "New";
      }

      .label-hot.menu-item>a:after {
        content: "Hot";
      }

      .label-sale.menu-item>a:after {
        content: "Sale";
      }

      .label-popular.menu-item>a:after {
        content: "Popular";
      }
    </style>
  </head>
  <body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-2 header-shadow lightbox lazy-icons nav-dropdown-has-arrow">
    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
    <div id="wrapper">
      <header id="header" class="header has-sticky sticky-jump">
        <div class="header-wrapper">
          <div id="top-bar" class="header-top hide-for-sticky nav-dark">
            <div class="flex-row container">
              <div class="flex-col hide-for-medium flex-left">
                <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                  <li class="html custom html_topbar_left">Chào mừng bạn đến Website Công ty TNHH Jin Sung Press</li>
                </ul>
              </div>
              <!-- flex-col left -->
              <div class="flex-col hide-for-medium flex-center">
                <ul class="nav nav-center nav-small  nav-divided"></ul>
              </div>
              <!-- center -->
              <div class="flex-col hide-for-medium flex-right">
                <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                  <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item active  menu-item-44">
                    <a href="<?php echo base_url() ?>" class="nav-top-link">Trang chủ</a>
                  </li>
                  <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-43">
                    <a href="<?php echo base_url()?>gioithieu.php" class="nav-top-link">Giới thiệu</a>
                  </li>
                  <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-42">
                  <?php
                  $sql = "SELECT * FROM posts WHERE category_id = 6 ORDER BY ID DESC LIMIT 1";
                  $result = mysqli_query($conn, $sql);
               

                  while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $category_id = $row['category_id']; ?>
                    <a href="post-lienhe.php?id=<?php echo $id?>&category_id=<?php echo $category_id?>" class="nav-top-link">Liên hệ</a>
                    <?php } ?>
                  </li>
                  <li class="html header-social-icons ml-0">
                    <div class="social-icons follow-icons ">
                      <a href="http://url" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="Follow on Facebook">
                        <i class="fa fa-facebook"></i>
                      </a>
                      <a href="http://url" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram" class="icon plain  instagram tooltip" title="Follow on Instagram">
                        <i class="fa fa-instagram"></i>
                      </a>
                      <a href="http://url" target="_blank" data-label="Twitter" rel="noopener noreferrer nofollow" class="icon plain  twitter tooltip" title="Follow on Twitter">
                        <i class="fa fa-twitter"></i>
                      </a>
                      <a href="mailto:your@email" data-label="E-mail" rel="nofollow" class="icon plain  email tooltip" title="Send us an email">
                        <i class="fa fa-envelope"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- .flex-col right -->
              <div class="flex-col show-for-medium flex-grow">
                <ul class="nav nav-center nav-small mobile-nav  nav-divided">
                  <li class="html custom html_topbar_left">Chào mừng bạn đến Website Công ty TNHH Jin Sung Press</li>
                </ul>
              </div>
            </div>
            <!-- .flex-row -->
          </div>
          <!-- #header-top -->
          <div id="masthead" class="header-main hide-for-sticky">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
              <!-- Logo -->
              <div id="logo" class="flex-col logo">
                <!-- Header logo -->
                <a href="<?php echo base_url() ?>" title="jin sung press" rel="home">
                  <img width="218" height="90" src="<?php echo base_url() ?>image/logo.jpg" class="header_logo header-logo" alt="jin sung press" />
                  <img width="218" height="90" src="<?php echo base_url() ?>image/logo.jpg" class="header-logo-dark" alt="jin sung press" />
                </a>
              </div>
              <!-- Mobile Left Elements -->
              <div class="flex-col show-for-medium flex-left">
                <ul class="mobile-nav nav nav-left ">
                  <li class="nav-icon has-icon">
                    <a href="#" data-open="#main-menu" data-pos="center" data-bg="main-menu-overlay" data-color="dark" class="is-small" aria-controls="main-menu" aria-expanded="false">
                      <i class="icon-menu"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Left Elements -->
              <div class="flex-col hide-for-medium flex-left
            flex-grow">
                <ul class="header-nav header-nav-main nav nav-left  nav-size-medium nav-spacing-medium">
                  <li class="header-block">
                    <div class="title" style="text-align: center">
                        <p style="
                                  display: inline;
                                  font-size: 25px;
                                  text-transform: uppercase;
                                  font-family: &quot;Roboto&quot;, sans-serif; 
                                  text-align: center;
                                  font-weight: 700;    
                                  color: #003082;">Công ty TNHH Jin Sung Press <br></p>
                        <p style="
                                  display: inline;
                                  font-size: 25px;
                                  text-transform: uppercase;
                                  font-family: &quot;Roboto&quot;, sans-serif; 
                                  text-align: center;
                                  font-weight: 700;    
                                  color: #f7921e;">(진성프레스 )</p>
                    </div>
                    <!-- <div class="header-block-block-1">
                      <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1499331167">
                        <div class="img-inner dark">
                          <img width="523" height="78" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/HEADER.png" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/HEADER.png 523w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/HEADER-300x45.png 300w" sizes="(max-width: 523px) 100vw, 523px" />
                        </div>
                        <style scope="scope">
                          #image_1499331167 {
                            width: 90%;
                          }
                        </style>
                      </div>
                    </div> -->
                  </li>
                </ul>
              </div>
              <!-- Right Elements -->
              <div class="flex-col hide-for-medium flex-right">
                <ul class="header-nav header-nav-main nav nav-right  nav-size-medium nav-spacing-medium">
                  <li class="header-contact-wrapper">
                    <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">
                      <li class="">
                        <a href="mailto:demo@gmail.com" class="tooltip" title="demo@gmail.com">
                          <i class="fa fa-envelope icon1" style="font-size:30px;"></i>
                          <span>demo@gmail.com </span>
                        </a>
                      </li>
                      <li class="">
                        <a href="tel:0848172333" class="tooltip" title="0848172333">
                          <i class="fa fa-phone icon1" style="font-size:30px;"></i>
                          <span>0848172333</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <!-- Mobile Right Elements -->
              <div class="flex-col show-for-medium flex-right">
                <ul class="mobile-nav nav nav-right "></ul>
              </div>
            </div>
            <!-- .header-inner -->
          </div>
          <?php 
            // require_once(realpath(dirname(__FILE__) . "./menu.php")); 
            include_once('./master_layout/menu.php');
            ?>
          <!-- .header-bg-container -->
        </div>
        <!-- header-wrapper-->
      </header>
    <!-- preloader end -->