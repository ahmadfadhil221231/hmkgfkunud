<!DOCTYPE html>
<html lang="en-US" data-save-color-scheme="yes" data-kenta-blog-id="kenta-blog" data-kenta-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <title>HMKG FK Unud &#8211; Himpunan Mahasiswa Kedokteran Gigi Universitas Udayana</title>
  <meta name='robots' content='max-image-preview:large' />
  <link rel="alternate" type="application/rss+xml" title="HMKG FK Unud &raquo; Feed" href="https://hmkg.fkunud.com/feed/" />
  <link rel="alternate" type="application/rss+xml" title="HMKG FK Unud &raquo; Comments Feed" href="https://hmkg.fkunud.com/comments/feed/" />
  <!-- This site uses the Google Analytics by MonsterInsights plugin v8.11.0 - Using Analytics tracking - https://www.monsterinsights.com/ -->
  <script src="//www.googletagmanager.com/gtag/js?id=G-GVMPGHEB97" data-cfasync="false" data-wpfc-render="false" async></script>
  <script data-cfasync="false" data-wpfc-render="false">
    var mi_version = '8.11.0';
    var mi_track_user = true;
    var mi_no_track_reason = '';
    var disableStrs = ['ga-disable-G-GVMPGHEB97', ];
    /* Function to detect opted out users */
    function __gtagTrackerIsOptedOut() {
      for (var index = 0; index < disableStrs.length; index++) {
        if (document.cookie.indexOf(disableStrs[index] + '=true') > -1) {
          return true;
        }
      }
      return false;
    }
    /* Disable tracking if the opt-out cookie exists. */
    if (__gtagTrackerIsOptedOut()) {
      for (var index = 0; index < disableStrs.length; index++) {
        window[disableStrs[index]] = true;
      }
    }
    /* Opt-out function */
    function __gtagTrackerOptout() {
      for (var index = 0; index < disableStrs.length; index++) {
        document.cookie = disableStrs[index] + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
        window[disableStrs[index]] = true;
      }
    }
    if ('undefined' === typeof gaOptout) {
      function gaOptout() {
        __gtagTrackerOptout();
      }
    }
    window.dataLayer = window.dataLayer || [];
    window.MonsterInsightsDualTracker = {
      helpers: {},
      trackers: {},
    };
    if (mi_track_user) {
      function __gtagDataLayer() {
        dataLayer.push(arguments);
      }

      function __gtagTracker(type, name, parameters) {
        if (!parameters) {
          parameters = {};
        }
        if (parameters.send_to) {
          __gtagDataLayer.apply(null, arguments);
          return;
        }
        if (type === 'event') {
          parameters.send_to = monsterinsights_frontend.v4_id;
          var hookName = name;
          if (typeof parameters['event_category'] !== 'undefined') {
            hookName = parameters['event_category'] + ':' + name;
          }
          if (typeof MonsterInsightsDualTracker.trackers[hookName] !== 'undefined') {
            MonsterInsightsDualTracker.trackers[hookName](parameters);
          } else {
            __gtagDataLayer('event', name, parameters);
          }
        } else {
          __gtagDataLayer.apply(null, arguments);
        }
      }
      __gtagTracker('js', new Date());
      __gtagTracker('set', {
        'developer_id.dZGIzZG': true,
      });
      __gtagTracker('config', 'G-GVMPGHEB97', {
        "forceSSL": "true",
        "link_attribution": "true"
      });
      window.gtag = __gtagTracker;
      (function() {
        /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
        /* ga and __gaTracker compatibility shim. */
        var noopfn = function() {
          return null;
        };
        var newtracker = function() {
          return new Tracker();
        };
        var Tracker = function() {
          return null;
        };
        var p = Tracker.prototype;
        p.get = noopfn;
        p.set = noopfn;
        p.send = function() {
          var args = Array.prototype.slice.call(arguments);
          args.unshift('send');
          __gaTracker.apply(null, args);
        };
        var __gaTracker = function() {
          var len = arguments.length;
          if (len === 0) {
            return;
          }
          var f = arguments[len - 1];
          if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
            if ('send' === arguments[0]) {
              var hitConverted, hitObject = false,
                action;
              if ('event' === arguments[1]) {
                if ('undefined' !== typeof arguments[3]) {
                  hitObject = {
                    'eventAction': arguments[3],
                    'eventCategory': arguments[2],
                    'eventLabel': arguments[4],
                    'value': arguments[5] ? arguments[5] : 1,
                  }
                }
              }
              if ('pageview' === arguments[1]) {
                if ('undefined' !== typeof arguments[2]) {
                  hitObject = {
                    'eventAction': 'page_view',
                    'page_path': arguments[2],
                  }
                }
              }
              if (typeof arguments[2] === 'object') {
                hitObject = arguments[2];
              }
              if (typeof arguments[5] === 'object') {
                Object.assign(hitObject, arguments[5]);
              }
              if ('undefined' !== typeof arguments[1].hitType) {
                hitObject = arguments[1];
                if ('pageview' === hitObject.hitType) {
                  hitObject.eventAction = 'page_view';
                }
              }
              if (hitObject) {
                action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject.eventAction;
                hitConverted = mapArgs(hitObject);
                __gtagTracker('event', action, hitConverted);
              }
            }
            return;
          }

          function mapArgs(args) {
            var arg, hit = {};
            var gaMap = {
              'eventCategory': 'event_category',
              'eventAction': 'event_action',
              'eventLabel': 'event_label',
              'eventValue': 'event_value',
              'nonInteraction': 'non_interaction',
              'timingCategory': 'event_category',
              'timingVar': 'name',
              'timingValue': 'value',
              'timingLabel': 'event_label',
              'page': 'page_path',
              'location': 'page_location',
              'title': 'page_title',
            };
            for (arg in args) {
              if (!(!args.hasOwnProperty(arg) || !gaMap.hasOwnProperty(arg))) {
                hit[gaMap[arg]] = args[arg];
              } else {
                hit[arg] = args[arg];
              }
            }
            return hit;
          }
          try {
            f.hitCallback();
          } catch (ex) {}
        };
        __gaTracker.create = newtracker;
        __gaTracker.getByName = newtracker;
        __gaTracker.getAll = function() {
          return [];
        };
        __gaTracker.remove = noopfn;
        __gaTracker.loaded = true;
        window['__gaTracker'] = __gaTracker;
      })();
    } else {
      console.log("");
      (function() {
        function __gtagTracker() {
          return null;
        }
        window['__gtagTracker'] = __gtagTracker;
        window['gtag'] = __gtagTracker;
      })();
    }
  </script>
  <!-- / Google Analytics by MonsterInsights -->
  <script>
    window._wpemojiSettings = {
      "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
      "ext": ".png",
      "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
      "svgExt": ".svg",
      "source": {
        "concatemoji": "https:\/\/hmkg.fkunud.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.4"
      }
    };
    /*! This file is auto-generated */
    ! function(i, n) {
      var o, s, e;

      function c(e) {
        try {
          var t = {
            supportTests: e,
            timestamp: (new Date).valueOf()
          };
          sessionStorage.setItem(o, JSON.stringify(t))
        } catch (e) {}
      }

      function p(e, t, n) {
        e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
        var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
          r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
        return t.every(function(e, t) {
          return e === r[t]
        })
      }

      function u(e, t, n) {
        switch (t) {
          case "flag":
            return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
          case "emoji":
            return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
        }
        return !1
      }

      function f(e, t, n) {
        var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
          a = r.getContext("2d", {
            willReadFrequently: !0
          }),
          o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
        return e.forEach(function(e) {
          o[e] = t(a, e, n)
        }), o
      }

      function t(e) {
        var t = i.createElement("script");
        t.src = e, t.defer = !0, i.head.appendChild(t)
      }
      "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
        everything: !0,
        everythingExceptFlag: !0
      }, e = new Promise(function(e) {
        i.addEventListener("DOMContentLoaded", e, {
          once: !0
        })
      }), new Promise(function(t) {
        var n = function() {
          try {
            var e = JSON.parse(sessionStorage.getItem(o));
            if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
          } catch (e) {}
          return null
        }();
        if (!n) {
          if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
            var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
              r = new Blob([e], {
                type: "text/javascript"
              }),
              a = new Worker(URL.createObjectURL(r), {
                name: "wpTestEmojiSupports"
              });
            return void(a.onmessage = function(e) {
              c(n = e.data), a.terminate(), t(n)
            })
          } catch (e) {}
          c(n = f(s, u, p))
        }
        t(n)
      }).then(function(e) {
        for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
        n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
          n.DOMReady = !0
        }
      }).then(function() {
        return e
      }).then(function() {
        var e;
        n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
      }))
    }((window, document), window._wpemojiSettings);
  </script>
  <link rel='stylesheet' id='sbi_styles-css' href='https://hmkg.fkunud.com/wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=6.1' media='all' />
  <style id='wp-emoji-styles-inline-css'>
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
  <link rel='stylesheet' id='wp-block-library-css' href='https://hmkg.fkunud.com/wp-includes/css/dist/block-library/style.min.css?ver=6.4.4' media='all' />
  <link rel='stylesheet' id='fontawesome-css' href='https://hmkg.fkunud.com/wp-content/plugins/kenta-blocks/assets/fontawesome/css/all.min.css?ver=1.3.7' media='all' />
  <link rel='stylesheet' id='kenta-blocks-style-css' href='https://hmkg.fkunud.com/wp-content/plugins/kenta-blocks/dist/blocks.style.min.css?ver=1.3.7' media='all' />
  <style id='global-styles-inline-css'>
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
      --wp--preset--color--kenta-primary: var(--kenta-primary-color);
      --wp--preset--color--kenta-primary-active: var(--kenta-primary-active);
      --wp--preset--color--kenta-accent: var(--kenta-accent-color);
      --wp--preset--color--kenta-accent-active: var(--kenta-accent-active);
      --wp--preset--color--kenta-base: var(--kenta-base-color);
      --wp--preset--color--kenta-base-50: var(--kenta-base-50);
      --wp--preset--color--kenta-base-100: var(--kenta-base-100);
      --wp--preset--color--kenta-base-200: var(--kenta-base-200);
      --wp--preset--color--kenta-base-300: var(--kenta-base-300);
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
      --wp--preset--font-size--small: 13px;
      --wp--preset--font-size--medium: clamp(14px, 0.875rem + ((1vw - 3.2px) * 0.682), 20px);
      --wp--preset--font-size--large: clamp(22.041px, 1.378rem + ((1vw - 3.2px) * 1.586), 36px);
      --wp--preset--font-size--x-large: clamp(25.014px, 1.563rem + ((1vw - 3.2px) * 1.93), 42px);
      --wp--preset--font-size--kenta-font-tiny: clamp(10px, 0.625rem + ((1vw - 3.2px) * 0.227), 12px);
      --wp--preset--font-size--kenta-font-xxsmall: clamp(12px, 0.75rem + ((1vw - 3.2px) * 0.227), 14px);
      --wp--preset--font-size--kenta-font-xsmall: clamp(14px, 0.875rem + ((1vw - 3.2px) * 0.227), 16px);
      --wp--preset--font-size--kenta-font-small: clamp(16px, 1rem + ((1vw - 3.2px) * 0.227), 18px);
      --wp--preset--font-size--kenta-font-medium: clamp(18px, 1.125rem + ((1vw - 3.2px) * 0.227), 20px);
      --wp--preset--font-size--kenta-font-large: clamp(24px, 1.5rem + ((1vw - 3.2px) * 0.909), 32px);
      --wp--preset--font-size--kenta-font-xlarge: clamp(32px, 2rem + ((1vw - 3.2px) * 1.818), 48px);
      --wp--preset--font-size--kenta-font-xxlarge: clamp(40px, 2.5rem + ((1vw - 3.2px) * 2.727), 64px);
      --wp--preset--spacing--20: 0.44rem;
      --wp--preset--spacing--30: 0.67rem;
      --wp--preset--spacing--40: 1rem;
      --wp--preset--spacing--50: 1.5rem;
      --wp--preset--spacing--60: 2.25rem;
      --wp--preset--spacing--70: 3.38rem;
      --wp--preset--spacing--80: 5.06rem;
      --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
      --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
      --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    body {
      margin: 0;
      --wp--style--global--content-size: 1140px;
      --wp--style--global--wide-size: 1200px;
    }

    .wp-site-blocks>.alignleft {
      float: left;
      margin-right: 2em;
    }

    .wp-site-blocks>.alignright {
      float: right;
      margin-left: 2em;
    }

    .wp-site-blocks>.aligncenter {
      justify-content: center;
      margin-left: auto;
      margin-right: auto;
    }

    :where(.wp-site-blocks)>* {
      margin-block-start: 24px;
      margin-block-end: 0;
    }

    :where(.wp-site-blocks)> :first-child:first-child {
      margin-block-start: 0;
    }

    :where(.wp-site-blocks)> :last-child:last-child {
      margin-block-end: 0;
    }

    body {
      --wp--style--block-gap: 24px;
    }

    :where(body .is-layout-flow)> :first-child:first-child {
      margin-block-start: 0;
    }

    :where(body .is-layout-flow)> :last-child:last-child {
      margin-block-end: 0;
    }

    :where(body .is-layout-flow)>* {
      margin-block-start: 24px;
      margin-block-end: 0;
    }

    :where(body .is-layout-constrained)> :first-child:first-child {
      margin-block-start: 0;
    }

    :where(body .is-layout-constrained)> :last-child:last-child {
      margin-block-end: 0;
    }

    :where(body .is-layout-constrained)>* {
      margin-block-start: 24px;
      margin-block-end: 0;
    }

    :where(body .is-layout-flex) {
      gap: 24px;
    }

    :where(body .is-layout-grid) {
      gap: 24px;
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

    body .is-layout-grid {
      display: grid;
    }

    body .is-layout-grid>* {
      margin: 0;
    }

    body {
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 0px;
      padding-left: 0px;
    }

    a:where(:not(.wp-element-button)) {
      text-decoration: underline;
    }

    .wp-element-button,
    .wp-block-button__link {
      background-color: #32373c;
      border-width: 0;
      color: #fff;
      font-family: inherit;
      font-size: inherit;
      line-height: inherit;
      padding: calc(0.667em + 2px) calc(1.333em + 2px);
      text-decoration: none;
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

    .has-kenta-primary-color {
      color: var(--wp--preset--color--kenta-primary) !important;
    }

    .has-kenta-primary-active-color {
      color: var(--wp--preset--color--kenta-primary-active) !important;
    }

    .has-kenta-accent-color {
      color: var(--wp--preset--color--kenta-accent) !important;
    }

    .has-kenta-accent-active-color {
      color: var(--wp--preset--color--kenta-accent-active) !important;
    }

    .has-kenta-base-color {
      color: var(--wp--preset--color--kenta-base) !important;
    }

    .has-kenta-base-50-color {
      color: var(--wp--preset--color--kenta-base-50) !important;
    }

    .has-kenta-base-100-color {
      color: var(--wp--preset--color--kenta-base-100) !important;
    }

    .has-kenta-base-200-color {
      color: var(--wp--preset--color--kenta-base-200) !important;
    }

    .has-kenta-base-300-color {
      color: var(--wp--preset--color--kenta-base-300) !important;
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

    .has-kenta-primary-background-color {
      background-color: var(--wp--preset--color--kenta-primary) !important;
    }

    .has-kenta-primary-active-background-color {
      background-color: var(--wp--preset--color--kenta-primary-active) !important;
    }

    .has-kenta-accent-background-color {
      background-color: var(--wp--preset--color--kenta-accent) !important;
    }

    .has-kenta-accent-active-background-color {
      background-color: var(--wp--preset--color--kenta-accent-active) !important;
    }

    .has-kenta-base-background-color {
      background-color: var(--wp--preset--color--kenta-base) !important;
    }

    .has-kenta-base-50-background-color {
      background-color: var(--wp--preset--color--kenta-base-50) !important;
    }

    .has-kenta-base-100-background-color {
      background-color: var(--wp--preset--color--kenta-base-100) !important;
    }

    .has-kenta-base-200-background-color {
      background-color: var(--wp--preset--color--kenta-base-200) !important;
    }

    .has-kenta-base-300-background-color {
      background-color: var(--wp--preset--color--kenta-base-300) !important;
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

    .has-kenta-primary-border-color {
      border-color: var(--wp--preset--color--kenta-primary) !important;
    }

    .has-kenta-primary-active-border-color {
      border-color: var(--wp--preset--color--kenta-primary-active) !important;
    }

    .has-kenta-accent-border-color {
      border-color: var(--wp--preset--color--kenta-accent) !important;
    }

    .has-kenta-accent-active-border-color {
      border-color: var(--wp--preset--color--kenta-accent-active) !important;
    }

    .has-kenta-base-border-color {
      border-color: var(--wp--preset--color--kenta-base) !important;
    }

    .has-kenta-base-50-border-color {
      border-color: var(--wp--preset--color--kenta-base-50) !important;
    }

    .has-kenta-base-100-border-color {
      border-color: var(--wp--preset--color--kenta-base-100) !important;
    }

    .has-kenta-base-200-border-color {
      border-color: var(--wp--preset--color--kenta-base-200) !important;
    }

    .has-kenta-base-300-border-color {
      border-color: var(--wp--preset--color--kenta-base-300) !important;
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

    .has-kenta-font-tiny-font-size {
      font-size: var(--wp--preset--font-size--kenta-font-tiny) !important;
    }

    .has-kenta-font-xxsmall-font-size {
      font-size: var(--wp--preset--font-size--kenta-font-xxsmall) !important;
    }

    .has-kenta-font-xsmall-font-size {
      font-size: var(--wp--preset--font-size--kenta-font-xsmall) !important;
    }

    .has-kenta-font-small-font-size {
      font-size: var(--wp--preset--font-size--kenta-font-small) !important;
    }

    .has-kenta-font-medium-font-size {
      font-size: var(--wp--preset--font-size--kenta-font-medium) !important;
    }

    .has-kenta-font-large-font-size {
      font-size: var(--wp--preset--font-size--kenta-font-large) !important;
    }

    .has-kenta-font-xlarge-font-size {
      font-size: var(--wp--preset--font-size--kenta-font-xlarge) !important;
    }

    .has-kenta-font-xxlarge-font-size {
      font-size: var(--wp--preset--font-size--kenta-font-xxlarge) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
      color: inherit;
    }

    .wp-block-pullquote {
      font-size: clamp(0.984em, 0.984rem + ((1vw - 0.2em) * 0.938), 1.5em);
      line-height: 1.6;
    }
  </style>
  <link rel='stylesheet' id='social_share_with_floating_bar-frontend-css' href='https://hmkg.fkunud.com/wp-content/plugins/social-share-with-floating-bar/assets/css/frontend.min.css?ver=1.0.0' media='all' />
  <link rel='stylesheet' id='kenta-cmp-style-css' href='https://hmkg.fkunud.com/wp-content/plugins/kenta-companion/assets/css/kenta-companion.min.css?ver=1.2.1' media='all' />
  <link rel='stylesheet' id='lotta-fontawesome-css' href='https://hmkg.fkunud.com/wp-content/themes/kenta/lotta-framework/dist/vendor/fontawesome/css/all.min.css?ver=2.0.13' media='all' />
  <link rel='stylesheet' id='kenta-style-css' href='https://hmkg.fkunud.com/wp-content/themes/kenta/dist/css/style.min.css?ver=1.2.7.1' media='all' />
  <style id='kenta-dynamic-vars-inline-css'>
    :root {
      --kenta-transparent: rgba(0, 0, 0, 0);
      --kenta-light-primary-color: #604B87;
      --kenta-light-primary-active: #604B87;
      --kenta-light-accent-color: #2C173F;
      --kenta-light-accent-active: #2C173F;
      --kenta-light-base-color: #ffffff;
      --kenta-light-base-100: #f6e8ff;
      --kenta-light-base-200: #242835;
      --kenta-light-base-300: #2C173F;
      --kenta-dark-primary-color: #ffffff;
      --kenta-dark-primary-active: #ffffff;
      --kenta-dark-accent-color: #ffffff;
      --kenta-dark-accent-active: #ffffff;
      --kenta-dark-base-color: #ffffff;
      --kenta-dark-base-100: #ffffff;
      --kenta-dark-base-200: #ffffff;
      --kenta-dark-base-300: #ffffff;
      --kenta-content-base-color: var(--kenta-accent-active);
      --kenta-content-drop-cap-color: var(--kenta-accent-color);
      --kenta-link-initial-color: var(--kenta-primary-color);
      --kenta-link-hover-color: var(--kenta-primary-active);
      --kenta-headings-color: var(--kenta-accent-color);
    }
  </style>
  <style id='kenta-dynamic-inline-css'>
    :root {
      font-family: Inter;
      font-weight: 400;
      font-size: 18px;
      --kenta-form-control-radius: 18px;
    }

    .kenta-body {
      background-color: rgba(0, 0, 0, 0);
      background-size: auto;
      background-repeat: repeat;
      background-attachment: scroll;
      background-image: url();
      background-position: 0% 0%;
    }

    .kenta-site-wrap {
      font-family: Inter;
      font-weight: 400;
      font-size: 18px;
      background-color: var(--kenta-base-100);
      background-image: none;
      box-shadow: var(--kenta-base-300) 0px 0px 0px 1px;
      --kenta-site-wrap-width: 1600px;
      margin: 0 auto;
    }

    .kenta-archive-header {
      text-align: center;
      background-color: var(--kenta-accent-active);
      background-image: none;
    }

    .kenta-archive-header .container {
      padding: 24px 24px 24px 24px;
    }

    .kenta-archive-header .archive-title {
      font-family: inherit;
      font-weight: 600;
      font-size: 1.45rem;
      line-height: 2;
      text-transform: capitalize;
      color: var(--kenta-base-color);
    }

    .kenta-archive-header .archive-description {
      font-family: inherit;
      font-weight: 400;
      font-size: 0.875rem;
      line-height: 1.5;
      color: var(--kenta-base-200);
    }

    .kenta-archive-header::after {
      opacity: 0.6;
      background-color: var(--kenta-accent-color);
      background-image: none;
    }

    .kenta-pagination {
      --kenta-pagination-button-border: 2px solid var(--lotta-border---kenta-pagination-button-border-initial-color);
      --lotta-border-initial-color: var(--kenta-base-300);
      --lotta-border---kenta-pagination-button-border-initial-color: var(--kenta-base-300);
      --kenta-pagination-initial-color: var(--kenta-accent-active);
      --kenta-pagination-active-color: var(--kenta-base-color);
      --kenta-pagination-accent-color: var(--kenta-primary-color);
      --kenta-pagination-button-radius: 2px;
      font-family: inherit;
      font-weight: 400;
      font-size: 0.875rem;
      line-height: 1;
      justify-content: center;
    }

    .kenta-sidebar .kenta-widget {
      border: 2px solid var(--kenta-base-300);
      background: var(--kenta-base-color);
      box-shadow: var(--kenta-base-200) 10px 10px 0px 0px;
      padding: 24px 24px 24px 24px;
      border-radius: 18px 18px 18px 18px;
    }

    .kenta-sidebar {
      font-family: inherit;
      font-weight: 400;
      font-size: 0.875rem;
      line-height: 1.5em;
      --kenta-widgets-text-color: var(--kenta-accent-color);
      --kenta-widgets-link-initial: var(--kenta-primary-color);
      --kenta-widgets-link-hover: var(--kenta-primary-active);
      --kenta-sidebar-width: 27%;
      --kenta-sidebar-gap: 24px;
      --kenta-widgets-spacing: 24px;
    }

    .kenta-sidebar .widget-title {
      font-family: inherit;
      font-weight: 600;
      font-size: 0.875rem;
      line-height: 1.5em;
      text-transform: uppercase;
      color: var(--kenta-accent-active);
      --kenta-heading-indicator: var(--kenta-primary-color);
    }

    [type="submit"],
    .woocommerce a.button,
    .woocommerce button.button,
    .wp-block-search__button,
    .wc-block-product-search__button,
    .kenta-article-content .wp-block-button,
    .kenta-article-content button,
    .kenta-prose .wp-block-button,
    .kenta-prose button {
      --kenta-button-height: 42px;
      --kenta-button-shadow: none;
      --kenta-button-shadow-active: var(--kenta-primary-color) 4px 4px 0px 0px;
      font-family: inherit;
      font-weight: 500;
      font-size: 0.75rem;
      line-height: 1;
      text-transform: capitalize;
      --kenta-button-border: 1px solid var(--lotta-border---kenta-button-border-initial-color);
      --lotta-border-initial-color: var(--kenta-accent-color);
      --lotta-border---kenta-button-border-initial-color: var(--kenta-accent-color);
      --lotta-border-hover-color: var(--kenta-accent-active);
      --lotta-border---kenta-button-border-hover-color: var(--kenta-accent-active);
      --kenta-button-padding: 0.85em 1.25em 0.85em 1.25em;
      --kenta-button-radius: 999px 999px 999px 999px;
      --kenta-button-text-initial-color: var(--kenta-base-color);
      --kenta-button-text-hover-color: var(--kenta-base-color);
      --kenta-button-initial-color: var(--kenta-accent-color);
      --kenta-button-hover-color: var(--kenta-accent-active);
    }

    .kenta-form,
    form,
    [type="submit"] {
      font-family: inherit;
      font-weight: 400;
      font-size: 0.85rem;
      line-height: 2;
    }

    .kenta-form-classic,
    .kenta-form-modern {
      --kenta-form-background-color: var(--kenta-base-color);
      --kenta-form-border-color: var(--kenta-base-300);
      --kenta-form-active-color: var(--kenta-primary-color);
    }

    .kenta-form-modern {
      --kenta-form-border-top: none;
      --kenta-form-border-right: none;
      --kenta-form-border-left: none;
      --kenta-form-border-bottom: 2px solid var(--kenta-form-border-color);
      --kenta-form-checkbox-border-top: 2px solid var(--kenta-form-background-color);
      --kenta-form-checkbox-border-right: 2px solid var(--kenta-form-background-color);
      --kenta-form-checkbox-border-left: 2px solid var(--kenta-form-background-color);
      --kenta-form-checkbox-border-bottom: 2px solid var(--kenta-form-border-color);
    }

    .kenta-cookies-consent-container {
      z-index: 99;
    }

    .kenta-cookies-consent {
      color: var(--kenta-accent-active);
      --kenta-link-initial-color: var(--kenta-primary-color);
      --kenta-link-hover-color: var(--kenta-primary-active);
      background-color: var(--kenta-base-color);
      background-image: none;
      box-shadow: rgba(44, 62, 80, 0.15) 0px 0px 24px 0px;
    }

    .kenta-cookies-consent .accept-button {
      --kenta-button-text-initial-color: var(--kenta-base-color);
      --kenta-button-text-hover-color: var(--kenta-base-color);
      --kenta-button-initial-color: var(--kenta-primary-color);
      --kenta-button-hover-color: var(--kenta-accent-color);
    }

    .kenta-cookies-consent .decline-button {
      --kenta-button-text-initial-color: var(--kenta-accent-color);
      --kenta-button-text-hover-color: var(--kenta-accent-color);
      --kenta-button-initial-color: var(--kenta-base-200);
      --kenta-button-hover-color: var(--kenta-base-300);
    }

    .card {
      --kenta-card-radius: 18px;
    }

    .kenta-to-top {
      box-shadow: rgba(44, 62, 80, 0.15) 0px 10px 20px 0px;
      border-radius: 999px 999px 999px 999px;
      padding: 16px 16px 16px 16px;
      --kenta-to-top-icon-initial: var(--kenta-base-color);
      --kenta-to-top-icon-hover: var(--kenta-base-color);
      --kenta-to-top-background-initial: var(--kenta-accent-active);
      --kenta-to-top-background-hover: var(--kenta-primary-color);
      --kenta-to-top-icon-size: 14px;
      --kenta-to-top-bottom-offset: 48px;
      --kenta-to-top-side-offset: 48px;
    }

    .kenta-off-canvas .kenta-modal-inner {
      box-shadow: rgba(44, 62, 80, 0.35) 0px 0px 70px 0px;
      background-color: var(--kenta-base-color);
      background-image: none;
      --kenta-modal-action-initial: var(--kenta-accent-color);
      --kenta-modal-action-hover: var(--kenta-primary-color);
    }

    .kenta-off-canvas {
      background-color: rgba(0, 0, 0, 0);
      background-image: none;
    }

    .kenta_header_el_collapsable_menu {
      font-family: inherit;
      font-weight: 700;
      font-size: 1rem;
      line-height: 1.5em;
      --menu-items-divider: 1px solid var(--lotta-border---menu-items-divider-initial-color);
      --lotta-border-initial-color: var(--kenta-base-200);
      --lotta-border---menu-items-divider-initial-color: var(--kenta-base-200);
      --menu-text-initial-color: var(--kenta-accent-active);
      --menu-text-hover-color: var(--kenta-accent-active);
      --menu-text-active-color: var(--kenta-accent-color);
      --menu-dropdown-toggle-border: 1px solid var(--lotta-border---menu-dropdown-toggle-border-initial-color);
      --lotta-border---menu-dropdown-toggle-border-initial-color: var(--kenta-base-200);
    }

    .kenta_header_builder_col_modal_0_desktop {
      width: 100%;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      --kenta-builder-elements-gap: 12px;
      padding: 0px 0px 0px 0px;
    }

    .kenta_header_builder_col_modal_0_mobile {
      width: 100%;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      --kenta-builder-elements-gap: 24px;
      padding: 0px 0px 0px 0px;
    }

    .kenta-header-row-top_bar {
      z-index: 100;
      display: block;
      background-color: #edcaf4;
      background-image: none;
      box-shadow: none;
      border-top: none;
      --lotta-border-initial-color: var(--kenta-base-300);
      --lotta-border-border-top-initial-color: var(--kenta-base-300);
      border-bottom: none;
      --lotta-border-border-bottom-initial-color: var(--kenta-base-300);
    }

    .kenta-header-row-top_bar .container {
      min-height: 100px;
    }

    .kenta_header_el_socials {
      --kenta-social-icons-size: 18px;
      --kenta-social-icons-spacing: 16px;
      padding: 0px 0px 0px 0px;
      --kenta-social-icon-initial-color: var(--kenta-accent-color);
      --kenta-social-icon-hover-color: var(--kenta-primary-color);
      --kenta-social-bg-initial-color: var(--kenta-base-200);
      --kenta-social-bg-hover-color: var(--kenta-primary-color);
      --kenta-social-border-initial-color: var(--kenta-base-200);
      --kenta-social-border-hover-color: var(--kenta-primary-color);
    }

    .kenta_header_builder_col_top_bar_0_desktop {
      width: 25%;
      flex-direction: row;
      justify-content: flex-start;
      align-items: center;
      --kenta-builder-elements-gap: 12px;
      padding: 0px 0px 0px 0px;
    }

    .kenta_header_el_logo {
      --logo-max-width: 109px;
      --logo-spacing: 12px;
      text-align: center;
    }

    .kenta_header_el_logo .site-title {
      font-family: inherit;
      font-weight: 700;
      font-size: 48px;
      line-height: 1.50;
      letter-spacing: 0px;
      text-transform: uppercase;
      --text-color: var(--kenta-accent-color);
      --hover-color: var(--kenta-primary-color);
    }

    .kenta_header_el_logo .site-tagline {
      font-family: Lato;
      font-weight: 400i;
      font-size: 20px;
      line-height: 1.50;
      letter-spacing: 0px;
      text-transform: capitalize;
      --text-color: var(--kenta-accent-active);
    }

    .kenta_header_builder_col_top_bar_1_desktop {
      width: 50%;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      --kenta-builder-elements-gap: 12px;
      padding: 0px 0px 0px 0px;
    }

    .kenta_header_el_search {
      width: 164px;
    }

    .kenta_header_builder_col_top_bar_2_desktop {
      width: 25%;
      flex-direction: row;
      justify-content: flex-end;
      align-items: center;
      --kenta-builder-elements-gap: 12px;
      padding: 0px 0px 0px 0px;
    }

    .kenta_header_builder_col_top_bar_0_mobile {
      width: 50%;
      flex-direction: row;
      justify-content: flex-start;
      align-items: center;
      --kenta-builder-elements-gap: 12px;
      padding: 0px 0px 0px 0px;
    }

    .kenta_header_builder_col_top_bar_1_mobile {
      width: 50%;
      flex-direction: row;
      justify-content: flex-start;
      align-items: center;
      --kenta-builder-elements-gap: 12px;
      padding: 0px 0px 0px 0px;
    }

    .kenta-header-row-primary_navbar {
      z-index: 110;
      display: block;
      box-shadow: none;
      border-top: 1px solid var(--lotta-border-border-top-initial-color);
      --lotta-border-initial-color: #000000;
      --lotta-border-border-top-initial-color: #000000;
      --lotta-border-hover-color: rgba(0, 0, 0, 0);
      --lotta-border-border-top-hover-color: rgba(0, 0, 0, 0);
      border-bottom: 1px solid var(--lotta-border-border-bottom-initial-color);
      --lotta-border-border-bottom-initial-color: #000000;
      --lotta-border-border-bottom-hover-color: rgba(0, 0, 0, 0);
      --kenta-primary-color: #604B87;
      --kenta-primary-active: #604B87;
      --kenta-accent-color: #604B87;
      --kenta-accent-active: #604B87;
      --kenta-base-color: #ffffff;
      --kenta-base-100: #ffffff;
      --kenta-base-200: #ffffff;
      --kenta-base-300: #ffffff;
    }

    .kenta-header-row-primary_navbar .container {
      min-height: 50px;
    }

    .kenta_header_el_menu_1>li {
      font-family: inherit;
      font-weight: 500;
      font-size: 0.85rem;
      line-height: 1;
      text-transform: capitalize;
    }

    .kenta_header_el_menu_1 {
      --menu-items-height: 15%;
      --dropdown-width: 140px;
      --menu-text-initial-color: var(--kenta-accent-color);
      --menu-text-hover-color: var(--kenta-primary-color);
      --menu-text-active-color: var(--kenta-primary-color);
      --menu-background-initial-color: var(--kenta-transparent);
      --menu-background-hover-color: var(--kenta-transparent);
      --menu-background-active-color: var(--kenta-transparent);
      --menu-items-margin: 0px 6px 0px 6px;
      --menu-items-padding: 4px 8px 4px 8px;
      --menu-items-radius: 999px 999px 999px 999px;
      --menu-items-border-top: none;
      --lotta-border-initial-color: var(--kenta-base-300);
      --lotta-border---menu-items-border-top-initial-color: var(--kenta-transparent);
      --menu-items-border-top-active: none;
      --lotta-border---menu-items-border-top-active-initial-color: var(--kenta-primary-color);
      --menu-items-border-bottom: none;
      --lotta-border---menu-items-border-bottom-initial-color: var(--kenta-transparent);
      --menu-items-border-bottom-active: none;
      --lotta-border---menu-items-border-bottom-active-initial-color: var(--kenta-primary-color);
      --dropdown-text-initial-color: var(--kenta-accent-color);
      --dropdown-text-hover-color: var(--kenta-base-color);
      --dropdown-text-active-color: var(--kenta-base-color);
      --dropdown-background-initial-color: var(--kenta-base-color);
      --dropdown-background-active-color: var(--kenta-primary-color);
      --dropdown-item-padding: 1px 1px 1px 1px;
      --dropdown-radius: 1px 1px 1px 1px;
      --dropdown-box-shadow: rgba(44, 62, 80, 0.2) 0px 0px 4px 0px;
      --dropdown-divider: 1px solid var(--lotta-border---dropdown-divider-initial-color);
      --lotta-border---dropdown-divider-initial-color: var(--kenta-base-300);
    }

    .kenta_header_builder_col_primary_navbar_0_desktop {
      width: 100%;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      --kenta-builder-elements-gap: 16px;
      padding: 0px 0px 0px 0px;
    }

    .kenta_header_builder_col_primary_navbar_0_mobile {
      width: 100%;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      --kenta-builder-elements-gap: 12px;
      padding: 0px 0px 0px 0px;
    }

    .kenta-header-row-bottom_row {
      z-index: 110;
      display: block;
      background-color: #ccc;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: scroll;
      background-image: url(http://hmkg.fkunud.com/wp-content/uploads/2024/02/HEADER-WEB-2-HMKG-e1706956957375-1.png);
      background-position: 50% 85%;
      box-shadow: var(--kenta-base-300) 0px 1px 0px 0px;
      border-top: 1px solid var(--lotta-border-border-top-initial-color);
      --lotta-border-initial-color: var(--kenta-base-300);
      --lotta-border-border-top-initial-color: var(--kenta-base-300);
      border-bottom: none;
      --lotta-border-border-bottom-initial-color: var(--kenta-base-300);
      --kenta-primary-color: #604B87;
      --kenta-primary-active: #604B87;
      --kenta-accent-color: #604B87;
      --kenta-accent-active: #604B87;
      --kenta-base-color: #ffffff;
      --kenta-base-100: #ffffff;
      --kenta-base-200: #ffffff;
      --kenta-base-300: #604B87;
    }

    .kenta-header-row-bottom_row .container {
      min-height: 390px;
    }

    .kenta_header_builder_col_bottom_row_0_desktop {
      width: 100%;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      --kenta-builder-elements-gap: 12px;
      padding: 0px 0px 0px 0px;
    }

    .kenta_header_el_theme_switch {
      --kenta-icon-button-icon-initial-color: var(--kenta-base-color);
      --kenta-icon-button-icon-hover-color: var(--kenta-base-color);
      --kenta-icon-button-bg-initial-color: var(--kenta-primary-color);
      --kenta-icon-button-bg-hover-color: var(--kenta-accent-color);
      --kenta-icon-button-border-initial-color: var(--kenta-primary-color);
      --kenta-icon-button-border-hover-color: var(--kenta-accent-color);
      --kenta-icon-button-size: 18px;
      font-size: 18px;
    }

    .kenta_header_builder_col_bottom_row_0_mobile {
      width: 20%;
      flex-direction: row;
      justify-content: flex-start;
      align-items: center;
      --kenta-builder-elements-gap: 16px;
      padding: 0px 0px 0px 0px;
    }

    .kenta_header_builder_col_bottom_row_1_mobile {
      width: 60%;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      --kenta-builder-elements-gap: 16px;
      padding: 0px 0px 0px 0px;
    }

    .kenta_header_builder_col_bottom_row_2_mobile {
      width: 20%;
      flex-direction: row;
      justify-content: flex-end;
      align-items: center;
      --kenta-builder-elements-gap: 16px;
      padding: 0px 0px 0px 0px;
    }

    .kenta-footer-row-top {
      z-index: 100;
      padding-top: 27px;
      padding-bottom: 27px;
      display: block;
      background-color: var(--kenta-base-color);
      background-image: none;
      border-top: none;
      --lotta-border-initial-color: var(--kenta-base-300);
      --lotta-border-border-top-initial-color: var(--kenta-base-300);
    }

    .kenta_footer_el_logo {
      --logo-max-width: 75px;
      --logo-spacing: 12px;
      text-align: center;
    }

    .kenta_footer_el_logo .site-title {
      font-family: inherit;
      font-weight: 700;
      font-size: 18px;
      line-height: 1.50;
      letter-spacing: 0px;
      text-transform: uppercase;
      --text-color: var(--kenta-accent-color);
      --hover-color: var(--kenta-primary-color);
    }

    .kenta_footer_el_logo .site-tagline {
      font-family: Lato;
      font-weight: 400i;
      font-size: 16px;
      line-height: 1.5;
      text-transform: capitalize;
      --text-color: var(--kenta-accent-active);
    }

    .kenta_footer_builder_col_top_0_all {
      width: 40%;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      --kenta-builder-elements-gap: 12px;
      padding: 0px 0px 0px 0px;
    }

    .kenta_footer_el_widgets_1 .kenta-widget {
      background: var(--kenta-base-color);
      border: none;
      box-shadow: none;
      padding: 0px 0px 0px 0px;
      border-radius: 0px 0px 0px 0px;
    }

    .kenta_footer_el_widgets_1 {
      font-family: inherit;
      font-weight: 400;
      font-size: 0.875rem;
      line-height: 1.5em;
      --kenta-widgets-text-color: var(--kenta-accent-color);
      --kenta-widgets-link-initial: var(--kenta-primary-color);
      --kenta-widgets-link-hover: var(--kenta-primary-active);
      width: 100%;
      --kenta-widgets-spacing: 3px;
    }

    .kenta_footer_el_widgets_1 .widget-title {
      font-family: inherit;
      font-weight: 600;
      font-size: 0.875rem;
      line-height: 1.5em;
      text-transform: uppercase;
      color: var(--kenta-accent-active);
      --kenta-heading-indicator: var(--kenta-primary-color);
    }

    .kenta_footer_builder_col_top_1_all {
      width: 40%;
      flex-direction: column;
      justify-content: flex-end;
      align-items: flex-end;
      --kenta-builder-elements-gap: 12px;
      padding: 0px 0px 0px 0px;
    }

    .kenta_footer_el_socials {
      --kenta-social-icons-size: 20px;
      --kenta-social-icons-spacing: 20px;
      padding: 0px 0px 0px 0px;
      --kenta-social-icon-initial-color: var(--kenta-accent-color);
      --kenta-social-icon-hover-color: var(--kenta-primary-color);
      --kenta-social-bg-initial-color: var(--kenta-base-200);
      --kenta-social-bg-hover-color: var(--kenta-primary-color);
      --kenta-social-border-initial-color: var(--kenta-base-200);
      --kenta-social-border-hover-color: var(--kenta-primary-color);
    }

    .kenta_footer_builder_col_top_2_all {
      width: 20%;
      flex-direction: row;
      justify-content: flex-start;
      align-items: center;
      --kenta-builder-elements-gap: 12px;
      padding: 0px 0px 0px 0px;
    }

    .kenta-footer-row-middle {
      z-index: 110;
      padding-top: 17px;
      padding-bottom: 17px;
      display: block;
      background-color: var(--kenta-base-200);
      background-image: none;
      border-top: none;
      --lotta-border-initial-color: var(--kenta-base-300);
      --lotta-border-border-top-initial-color: var(--kenta-base-300);
    }

    .kenta_footer_builder_col_middle_0_all {
      width: 25%;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      --kenta-builder-elements-gap: 12px;
      padding: 12px 12px 12px 12px;
    }

    .kenta_footer_builder_col_middle_1_all {
      width: 25%;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      --kenta-builder-elements-gap: 33px;
      padding: 12px 12px 12px 12px;
    }

    .kenta_footer_builder_col_middle_2_all {
      width: 25%;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      --kenta-builder-elements-gap: 12px;
      padding: 12px 12px 12px 12px;
    }

    .kenta_footer_builder_col_middle_3_all {
      width: 25%;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      --kenta-builder-elements-gap: 12px;
      padding: 12px 12px 12px 12px;
    }

    .kenta_footer_builder_col_bottom_0_all {
      width: 100%;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      --kenta-builder-elements-gap: 24px;
      padding: 10px 10px 10px 10px;
    }

    @media (max-width: 1024px) {
      .kenta-archive-header .archive-title {
        font-size: 1.25rem;
      }

      .kenta-archive-header .archive-description {
        font-size: 0.875rem;
      }

      .kenta-header-row-top_bar {
        display: block;
      }

      .kenta_header_el_logo .site-title {
        font-size: 42px;
      }

      .kenta_header_el_logo .site-tagline {
        font-size: 21px;
      }

      .kenta-header-row-primary_navbar {
        display: block;
      }

      .kenta-header-row-bottom_row {
        display: block;
        background-color: #ccc;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-image: url(http://hmkg.fkunud.com/wp-content/uploads/2024/02/HEADER-WEB-2-HMKG-e1706956957375-1.png);
        background-position: 50% 60%;
      }

      .kenta-footer-row-top {
        display: block;
      }

      .kenta-footer-row-middle {
        display: none;
      }

      .kenta_footer_builder_col_middle_0_all {
        width: 50%;
      }

      .kenta_footer_builder_col_middle_1_all {
        width: 50%;
      }

      .kenta_footer_builder_col_middle_2_all {
        width: 50%;
      }

      .kenta_footer_builder_col_middle_3_all {
        width: 50%;
      }

      .kenta_footer_builder_col_bottom_0_all {
        width: 100%;
        justify-content: center;
      }
    }

    @media (max-width: 768px) {
      .kenta-archive-header .archive-title {
        font-size: 1rem;
      }

      .kenta-archive-header .archive-description {
        font-size: 0.75em;
      }

      .kenta-header-row-top_bar {
        display: block;
      }

      .kenta_header_el_logo {
        --logo-max-width: 63px;
      }

      .kenta_header_el_logo .site-title {
        font-size: 19px;
      }

      .kenta_header_el_logo .site-tagline {
        font-size: 10px;
        letter-spacing: 0px;
      }

      .kenta_header_el_search {
        width: 92px;
      }

      .kenta-header-row-primary_navbar {
        display: block;
      }

      .kenta-header-row-bottom_row {
        display: block;
      }

      .kenta-footer-row-top {
        display: block;
      }

      .kenta-footer-row-middle {
        display: none;
      }

      .kenta_footer_builder_col_middle_0_all {
        width: 100%;
      }

      .kenta_footer_builder_col_middle_1_all {
        width: 100%;
      }

      .kenta_footer_builder_col_middle_2_all {
        width: 100%;
      }

      .kenta_footer_builder_col_middle_3_all {
        width: 100%;
      }

      .kenta_footer_builder_col_bottom_0_all {
        width: 100%;
        justify-content: center;
      }
    }

    .kenta-site-wrap {
      --kenta-max-w-content: auto;
      --kenta-content-area-spacing: 48px;
      --wp-admin-bar-height: 0px;
    }

    .card-list {
      --card-gap: 24px;
    }

    .card-wrapper {
      width: 50.00%;
    }

    .card {
      text-align: left;
      --card-thumbnail-spacing: 0px;
      --card-content-spacing: 25px;
      border: 2px solid var(--kenta-base-300);
      background: var(--kenta-base-color);
      box-shadow: var(--kenta-base-200) 10px 10px 0px 0px;
    }

    .card .entry-title {
      font-family: inherit;
      font-weight: 700;
      font-size: 1.25rem;
      line-height: 1.5;
      --kenta-initial-color: var(--kenta-accent-color);
      --kenta-hover-color: var(--kenta-primary-color);
    }

    .card .entry-metas {
      font-family: inherit;
      font-weight: 400;
      font-size: 0.65rem;
      line-height: 1.5;
      text-transform: capitalize;
      --kenta-meta-link-initial-color: var(--kenta-accent-color);
      --kenta-meta-link-hover-color: var(--kenta-primary-color);
    }

    .card .entry-categories {
      font-family: inherit;
      font-weight: 700;
      font-size: 0.75rem;
      line-height: 1.5;
      --kenta-tax-text-initial: var(--kenta-base-color);
      --kenta-tax-text-hover: var(--kenta-base-color);
      --kenta-tax-bg-initial: var(--kenta-primary-color);
      --kenta-tax-bg-hover: var(--kenta-accent-color);
    }

    .card .entry-tags {
      font-family: inherit;
      font-weight: 700;
      font-size: 0.75rem;
      line-height: 1.5;
      --kenta-tax-bg-initial: var(--kenta-transparent);
      --kenta-tax-bg-hover: var(--kenta-transparent);
      --kenta-tax-text-initial: var(--kenta-primary-color);
      --kenta-tax-text-hover: var(--kenta-primary-active);
    }

    .card .entry-excerpt {
      font-family: inherit;
      font-weight: 400;
      font-size: 0.875rem;
      line-height: 1.5;
      color: var(--kenta-accent-color);
    }

    .card .entry-thumbnail {
      height: 180px;
    }

    .card .entry-divider {
      --entry-divider: 1px solid var(--lotta-border---entry-divider-initial-color);
      --lotta-border-initial-color: var(--kenta-base-300);
      --lotta-border---entry-divider-initial-color: var(--kenta-base-300);
    }

    .card .entry-read-more {
      --kenta-button-height: 32px;
      box-shadow: none;
      font-family: inherit;
      font-weight: 500;
      font-size: 0.75rem;
      line-height: 1;
      text-transform: capitalize;
      --kenta-button-padding: 0.85em 1.25em 0.85em 1.25em;
      --kenta-button-radius: 999px 999px 999px 999px;
      --kenta-button-text-initial-color: var(--kenta-base-color);
      --kenta-button-text-hover-color: var(--kenta-base-color);
      --kenta-button-initial-color: var(--kenta-accent-color);
      --kenta-button-hover-color: var(--kenta-accent-active);
      --kenta-button-border: 1px solid var(--lotta-border---kenta-button-border-initial-color);
      --lotta-border-initial-color: var(--kenta-accent-color);
      --lotta-border---kenta-button-border-initial-color: var(--kenta-accent-color);
      --lotta-border-hover-color: var(--kenta-accent-active);
      --lotta-border---kenta-button-border-hover-color: var(--kenta-accent-active);
    }

    .card .entry-read-more:hover {
      box-shadow: var(--kenta-primary-color) 4px 4px 0px 0px;
    }

    @media (max-width: 1024px) {
      .card-wrapper {
        width: 50.00%;
      }

      .card .entry-title {
        font-size: 1rem;
      }

      .card .entry-metas {
        font-size: 0.65rem;
      }
    }

    @media (max-width: 768px) {
      .card-wrapper {
        width: 100.00%;
      }

      .card .entry-title {
        font-size: 1rem;
      }

      .card .entry-metas {
        font-size: 0.65rem;
      }
    }
  </style>
  <link rel='stylesheet' id='kenta_fonts-css' href='https://hmkg.fkunud.com/wp-content/fonts/33536444c3c62324cefa249e738cab0b.css?ver=1.2.7.1' media='all' />
  <link rel='stylesheet' id='booster-extension-social-icons-css' href='https://hmkg.fkunud.com/wp-content/plugins/booster-extension/assets/css/social-icons.min.css?ver=6.4.4' media='all' />
  <link rel='stylesheet' id='booster-extension-style-css' href='https://hmkg.fkunud.com/wp-content/plugins/booster-extension/assets/css/style.css?ver=6.4.4' media='all' />
  <style id='kenta-blocks-frontend-sidebar-styles-inline-css'>
    :root {
      --kb-primary-color: var(--kenta-primary-color);
      --kb-primary-active: var(--kenta-primary-active);
      --kb-accent-color: var(--kenta-accent-color);
      --kb-accent-active: var(--kenta-accent-active);
      --kb-base-300: var(--kenta-base-300);
      --kb-base-200: var(--kenta-base-200);
      --kb-base-100: var(--kenta-base-100);
      --kb-base-color: var(--kenta-base-color);
    }

    .kb-section.kb-section-aa5e7a3e {
      align-items: flex-start;
      flex-wrap: wrap;
      padding: 12px 12px 12px 12px;
      --kb-columns-gap: 12px;
      border: none;
      --kb-border-initial-color: var(--kb-base-300);
      --kb-border-border-initial-color: var(--kb-base-300);
      box-shadow: none;
    }

    .kb-section-aa5e7a3e .kb-shape-divider {
      display: none;
    }

    .kb-column-wrapper-446932ac {
      --kb-column-flex-grow: 1;
    }

    .kb-column-446932ac {
      border: none;
      --kb-border-initial-color: var(--kb-base-300);
      --kb-border-border-initial-color: var(--kb-base-300);
      box-shadow: none;
    }

    .kb-column-446932ac .kb-shape-divider {
      display: none;
    }
  </style>
  <link rel='stylesheet' id='kenta-groovy-blog-style-css' href='https://hmkg.fkunud.com/wp-content/themes/kenta-groovy-blog/style.css?ver=1.0.0' media='all' />
  <script src="https://hmkg.fkunud.com/wp-content/plugins/google-analytics-for-wordpress/assets/js/frontend-gtag.min.js?ver=8.11.0" id="monsterinsights-frontend-script-js"></script>
  <script data-cfasync="false" data-wpfc-render="false" id='monsterinsights-frontend-script-js-extra'>
    var monsterinsights_frontend = {
      "js_events_tracking": "true",
      "download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx",
      "inbound_paths": "[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]",
      "home_url": "https:\/\/hmkg.fkunud.com",
      "hash_tracking": "false",
      "ua": "",
      "v4_id": "G-GVMPGHEB97"
    };
  </script>
  <script src="https://hmkg.fkunud.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
  <script src="https://hmkg.fkunud.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
  <script id="pirate-forms-custom-spam-js-extra">
    var pf = {
      "spam": {
        "label": "I'm human!",
        "value": "be160f5bca"
      }
    };
  </script>
  <script src="https://hmkg.fkunud.com/wp-content/plugins/pirate-forms/public/js/custom-spam.js?ver=6.4.4" id="pirate-forms-custom-spam-js"></script>
  <script src="https://hmkg.fkunud.com/wp-content/plugins/kenta-companion/assets/js/kenta-companion.min.js?ver=1.2.1" id="kenta-cmp-script-js"></script>
  <script src="https://hmkg.fkunud.com/wp-content/themes/kenta/dist/vendor/scrollreveal/scrollreveal.min.js?ver=1.2.7.1" id="scrollreveal-js"></script>
  <link rel="https://api.w.org/" href="https://hmkg.fkunud.com/wp-json/" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://hmkg.fkunud.com/xmlrpc.php?rsd" />
  <meta name="generator" content="WordPress 6.4.4" />
  <style></style>
  <style id="kenta-preloader-selective-css"></style>
  <style id="kenta-global-selective-css"></style>
  <style id="kenta-woo-selective-css"></style>
  <style id="kenta-header-selective-css"></style>
  <style id="kenta-footer-selective-css"></style>
  <style id="kenta-transparent-selective-css"></style>
  <link rel="icon" href="https://hmkg.fkunud.com/wp-content/uploads/2019/03/pkUR-5Bu_400x400-150x150.png" sizes="32x32" />
  <link rel="icon" href="https://hmkg.fkunud.com/wp-content/uploads/2019/03/pkUR-5Bu_400x400.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="https://hmkg.fkunud.com/wp-content/uploads/2019/03/pkUR-5Bu_400x400.png" />
  <meta name="msapplication-TileImage" content="https://hmkg.fkunud.com/wp-content/uploads/2019/03/pkUR-5Bu_400x400.png" />
  <!-- ## NXS/OG ## --><!-- ## NXSOGTAGS ## --><!-- ## NXS/OG ## -->
</head>

<body class="home blog wp-embed-responsive booster-extension kenta-body overflow-x-hidden kenta-form-modern hfeed" data-kenta-scroll-reveal="{&quot;delay&quot;:200,&quot;duration&quot;:600,&quot;interval&quot;:200,&quot;opacity&quot;:0,&quot;scale&quot;:1,&quot;origin&quot;:&quot;bottom&quot;,&quot;distance&quot;:&quot;200px&quot;}">
  <a class="skip-link screen-reader-text" href="#content"> Skip to content</a>
  <div data-sticky-container class="kenta-site-wrap kenta-has-site-wrap z-[1]">
    <header class="kenta-site-header text-accent">
      <div id="kenta-off-canvas-modal" class="kenta-off-canvas kenta-modal" data-toggle-behaviour="toggle">
        <div class="kenta-modal-inner">
          <div class="kenta-modal-actions">
            <button id="kenta-close-off-canvas-modal" class="kenta-close-modal" data-toggle-target="#kenta-off-canvas-modal" type="button">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <div class="kenta-modal-content" data-redirect-focus="#kenta-close-off-canvas-modal">
            <div class="kenta-builder-column kenta-builder-column-0 kenta-builder-column-desktop kenta-builder-column-desktop-dir-column kenta-builder-column-tablet-dir-column kenta-builder-column-mobile-dir-column kenta_header_builder_col_modal_0_desktop">
              <div data-builder-element="collapsable-menu" class="kenta-collapsable-menu h-full kenta_header_el_collapsable_menu_wrap">
                <ul id="menu-menu-utama" class="kenta-collapsable-menu kenta_header_el_collapsable_menu collapsable kenta-menu-has-arrow">
                  <li id="menu-item-475" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-475"><a href="http://hmkg.fkunud.com/" aria-current="page">Home<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                  <li id="menu-item-480" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-480"><a href="http://hmkg.fkunud.com/category/news/">News<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                  <li id="menu-item-1912" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1912"><a href="https://hmkg.fkunud.com/latar-belakang-hmkg/">TENTANG HMKG<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a>
                    <ul class="sub-menu">
                      <li id="menu-item-1899" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1899"><a href="https://hmkg.fkunud.com/latar-belakang-hmkg/">Latar Belakang HMKG<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                      <li id="menu-item-1904" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1904"><a href="https://hmkg.fkunud.com/lambang-hmkg/">Lambang HMKG<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                      <li id="menu-item-1892" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1892"><a href="https://hmkg.fkunud.com/visi-misi-hmkg-abipraya-atyasa/">Visi Misi HMKG Abipraya Atyasa<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                    </ul>
                  </li>
                  <li id="menu-item-652" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-652"><a href="http://hmkg.fkunud.com/category/susunan-pengurus">Kepengurusan HMKG<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a>
                    <ul class="sub-menu">
                      <li id="menu-item-658" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-658"><a href="https://hmkg.fkunud.com/pengurus-inti-hmkg-abipraya-atyasa/">Pengurus Inti<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                      <li id="menu-item-622" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-622"><a href="https://hmkg.fkunud.com/bidang-i-psdm/">Bidang PSDM<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                      <li id="menu-item-623" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-623"><a href="https://hmkg.fkunud.com/bidang-ii-khik/">Bidang KHIK<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                      <li id="menu-item-624" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-624"><a href="https://hmkg.fkunud.com/bidang-iii-pengmas/">Bidang PENGMAS<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                      <li id="menu-item-625" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-625"><a href="https://hmkg.fkunud.com/bidang-iv-prodanus/">Bidang PRODANUS<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                      <li id="menu-item-1862" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1862"><a href="https://hmkg.fkunud.com/bidang-v-pendpro/">Bidang PENDPRO<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                      <li id="menu-item-1881" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1881"><a href="https://hmkg.fkunud.com/bidang-vi-adkesma/">Bidang ADKESMA<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                    </ul>
                  </li>
                  <li id="menu-item-809" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-809"><a href="http://hmkg.fkunud.com/" aria-current="page">Informasi<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a>
                    <ul class="sub-menu">
                      <li id="menu-item-810" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-810"><a href="http://hmkg.fkunud.com" aria-current="page">Kegiatan<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a>
                        <ul class="sub-menu">
                          <li id="menu-item-1522" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1522"><a href="https://hmkg.fkunud.com/category/kegiatan-external/">Eksternal<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                          <li id="menu-item-1521" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1521"><a href="https://hmkg.fkunud.com/category/kegiatan-internal/">Internal<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                        </ul>
                      </li>
                      <li id="menu-item-811" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-811"><a href="http://hmkg.fkunud.com" aria-current="page">Beasiswa<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                      <li id="menu-item-814" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-814"><a href="http://hmkg.fkunud.com" aria-current="page">Kotak Saran<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                      <li id="menu-item-812" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-812"><a href="http://hmkg.fkunud.com" aria-current="page">Lomba<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                    </ul>
                  </li>
                  <li id="menu-item-1527" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-1527"><a href="http://hmkg.fkunud.com/" aria-current="page">Program Studi<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a>
                    <ul class="sub-menu">
                      <li id="menu-item-815" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-815"><a href="http://hmkg.fkunud.com" aria-current="page">Pengumuman<button type="button" class="kenta-dropdown-toggle"><span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></button></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="kenta-header-row kenta-header-row-top_bar" data-row="top_bar">
        <div class="container mx-auto text-xs px-gutter flex flex-wrap items-stretch">
          <div class="kenta-builder-column kenta-builder-column-0 kenta-builder-column-desktop kenta-builder-column-desktop-dir-row kenta-builder-column-tablet-dir-row kenta-builder-column-mobile-dir-row kenta_header_builder_col_top_bar_0_desktop">
            <div data-builder-element="socials" class="kenta_header_el_socials">
              <div class="kenta-socials kenta-socials-custom kenta-socials-none">
                <a class="kenta-social-link" target="_blank" rel="nofollow" style="--kenta-official-color: #000000;" href="https://x.com/HMKG_UNUD?s=20">
                  <span class="kenta-social-icon">
                    <i class="fab fa-x-twitter"></i> </span>
                </a>
                <a class="kenta-social-link" target="_blank" rel="nofollow" style="--kenta-official-color: #ed1376;" href="https://www.instagram.com/hmkgudayana?utm_source=ig_web_button_share_sheet&#038;igsh=ZDNlZDc0MzIxNw==">
                  <span class="kenta-social-icon">
                    <i class="fab fa-instagram"></i> </span>
                </a>
                <a class="kenta-social-link" target="_blank" rel="nofollow" style="--kenta-official-color: #f42e53;" href="https://www.tiktok.com/@hmkgudayana?is_from_webapp=1&#038;sender_device=pc">
                  <span class="kenta-social-icon">
                    <i class="fab fa-tiktok"></i> </span>
                </a>
                <a class="kenta-social-link" target="_blank" rel="nofollow" style="--kenta-official-color: var(--kenta-primary-active);" href="https://youtube.com/@hmkgudayana?si=0nfJb1-gO_xM16gF">
                  <span class="kenta-social-icon">
                    <i class="fab fa-youtube"></i> </span>
                </a>
              </div>
            </div>
          </div>
          <div class="kenta-builder-column kenta-builder-column-1 kenta-builder-column-desktop kenta-builder-column-desktop-dir-row kenta-builder-column-tablet-dir-row kenta-builder-column-mobile-dir-row kenta_header_builder_col_top_bar_1_desktop">
            <div data-builder-element="logo" class="kenta-site-branding kenta_header_el_logo" data-logo="left">
              <a class="site-logo" href="https://hmkg.fkunud.com">
                <img class="kenta-logo" src="http://hmkg.fkunud.com/wp-content/uploads/2024/01/LOGO_HMKG_NEW__1_-removebg-preview-2.png" alt="HMKG FK Unud" />
              </a>
              <div class="site-identity">
                <span class="site-title">
                  <a href="https://hmkg.fkunud.com">HMKG FK Unud</a>
                </span>
                <span class="site-tagline"> Himpunan Mahasiswa Kedokteran Gigi Universitas Udayana </span>
              </div>
            </div>
          </div>
          <div class="kenta-builder-column kenta-builder-column-2 kenta-builder-column-desktop kenta-builder-column-desktop-dir-row kenta-builder-column-tablet-dir-row kenta-builder-column-mobile-dir-row kenta_header_builder_col_top_bar_2_desktop">
            <div data-builder-element="search" class=" kenta-search-wrap kenta-form relative kenta_header_el_search">
              <form role="search" method="get" action="https://hmkg.fkunud.com/" class="search-form">
                <div class="relative">
                  <label class="flex items-center flex-grow mb-0" for="search-form-662294c4b08e0">
                    <span class="screen-reader-text">Search for:</span>
                    <input type="search" id="search-form-662294c4b08e0" placeholder="Search" value="" name="s" class="search-input" />
                  </label>
                </div>
              </form>
            </div>
          </div>
          <div class="kenta-builder-column kenta-builder-column-0 kenta-builder-column-mobile kenta-builder-column-desktop-dir-row kenta-builder-column-tablet-dir-row kenta-builder-column-mobile-dir-row kenta_header_builder_col_top_bar_0_mobile">
            <div data-builder-element="logo" class="kenta-site-branding kenta_header_el_logo" data-logo="left">
              <a class="site-logo" href="https://hmkg.fkunud.com">
                <img class="kenta-logo" src="http://hmkg.fkunud.com/wp-content/uploads/2024/01/LOGO_HMKG_NEW__1_-removebg-preview-2.png" alt="HMKG FK Unud" />
              </a>
              <div class="site-identity">
                <span class="site-title">
                  <a href="https://hmkg.fkunud.com">HMKG FK Unud</a>
                </span>
                <span class="site-tagline"> Himpunan Mahasiswa Kedokteran Gigi Universitas Udayana </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="kenta-header-row kenta-header-row-primary_navbar" data-row="primary_navbar">
        <div class="container mx-auto text-xs px-gutter flex flex-wrap items-stretch">
          <div class="kenta-builder-column kenta-builder-column-0 kenta-builder-column-desktop kenta-builder-column-desktop-dir-row kenta-builder-column-tablet-dir-row kenta-builder-column-mobile-dir-row kenta_header_builder_col_primary_navbar_0_desktop">
            <div data-builder-element="menu-1" class="kenta-menu-wrap h-full kenta_header_el_menu_1_wrap">
              <ul id="menu-menu-utama-1" class="sf-menu clearfix kenta-menu kenta_header_el_menu_1 kenta-menu-has-arrow">
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-475"><a href="http://hmkg.fkunud.com/" aria-current="page">Home<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-480"><a href="http://hmkg.fkunud.com/category/news/">News<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1912"><a href="https://hmkg.fkunud.com/latar-belakang-hmkg/">TENTANG HMKG<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1899"><a href="https://hmkg.fkunud.com/latar-belakang-hmkg/">Latar Belakang HMKG<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1904"><a href="https://hmkg.fkunud.com/lambang-hmkg/">Lambang HMKG<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1892"><a href="https://hmkg.fkunud.com/visi-misi-hmkg-abipraya-atyasa/">Visi Misi HMKG Abipraya Atyasa<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                  </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-652"><a href="http://hmkg.fkunud.com/category/susunan-pengurus">Kepengurusan HMKG<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-658"><a href="https://hmkg.fkunud.com/pengurus-inti-hmkg-abipraya-atyasa/">Pengurus Inti<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-622"><a href="https://hmkg.fkunud.com/bidang-i-psdm/">Bidang PSDM<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-623"><a href="https://hmkg.fkunud.com/bidang-ii-khik/">Bidang KHIK<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-624"><a href="https://hmkg.fkunud.com/bidang-iii-pengmas/">Bidang PENGMAS<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-625"><a href="https://hmkg.fkunud.com/bidang-iv-prodanus/">Bidang PRODANUS<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1862"><a href="https://hmkg.fkunud.com/bidang-v-pendpro/">Bidang PENDPRO<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1881"><a href="https://hmkg.fkunud.com/bidang-vi-adkesma/">Bidang ADKESMA<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                  </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-809"><a href="http://hmkg.fkunud.com/" aria-current="page">Informasi<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-810"><a href="http://hmkg.fkunud.com" aria-current="page">Kegiatan<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a>
                      <ul class="sub-menu">
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1522"><a href="https://hmkg.fkunud.com/category/kegiatan-external/">Eksternal<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1521"><a href="https://hmkg.fkunud.com/category/kegiatan-internal/">Internal<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                      </ul>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-811"><a href="http://hmkg.fkunud.com" aria-current="page">Beasiswa<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-814"><a href="http://hmkg.fkunud.com" aria-current="page">Kotak Saran<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-812"><a href="http://hmkg.fkunud.com" aria-current="page">Lomba<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                  </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-1527"><a href="http://hmkg.fkunud.com/" aria-current="page">Program Studi<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-815"><a href="http://hmkg.fkunud.com" aria-current="page">Pengumuman<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="kenta-builder-column kenta-builder-column-0 kenta-builder-column-mobile kenta-builder-column-desktop-dir-row kenta-builder-column-tablet-dir-row kenta-builder-column-mobile-dir-row kenta_header_builder_col_primary_navbar_0_mobile">
            <div data-builder-element="menu-1" class="kenta-menu-wrap h-full kenta_header_el_menu_1_wrap">
              <ul id="menu-menu-utama-2" class="sf-menu clearfix kenta-menu kenta_header_el_menu_1 kenta-menu-has-arrow">
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-475"><a href="http://hmkg.fkunud.com/" aria-current="page">Home<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-480"><a href="http://hmkg.fkunud.com/category/news/">News<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1912"><a href="https://hmkg.fkunud.com/latar-belakang-hmkg/">TENTANG HMKG<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1899"><a href="https://hmkg.fkunud.com/latar-belakang-hmkg/">Latar Belakang HMKG<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1904"><a href="https://hmkg.fkunud.com/lambang-hmkg/">Lambang HMKG<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1892"><a href="https://hmkg.fkunud.com/visi-misi-hmkg-abipraya-atyasa/">Visi Misi HMKG Abipraya Atyasa<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                  </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-652"><a href="http://hmkg.fkunud.com/category/susunan-pengurus">Kepengurusan HMKG<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-658"><a href="https://hmkg.fkunud.com/pengurus-inti-hmkg-abipraya-atyasa/">Pengurus Inti<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-622"><a href="https://hmkg.fkunud.com/bidang-i-psdm/">Bidang PSDM<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-623"><a href="https://hmkg.fkunud.com/bidang-ii-khik/">Bidang KHIK<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-624"><a href="https://hmkg.fkunud.com/bidang-iii-pengmas/">Bidang PENGMAS<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-625"><a href="https://hmkg.fkunud.com/bidang-iv-prodanus/">Bidang PRODANUS<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1862"><a href="https://hmkg.fkunud.com/bidang-v-pendpro/">Bidang PENDPRO<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1881"><a href="https://hmkg.fkunud.com/bidang-vi-adkesma/">Bidang ADKESMA<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                  </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-809"><a href="http://hmkg.fkunud.com/" aria-current="page">Informasi<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-810"><a href="http://hmkg.fkunud.com" aria-current="page">Kegiatan<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a>
                      <ul class="sub-menu">
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1522"><a href="https://hmkg.fkunud.com/category/kegiatan-external/">Eksternal<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1521"><a href="https://hmkg.fkunud.com/category/kegiatan-internal/">Internal<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                      </ul>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-811"><a href="http://hmkg.fkunud.com" aria-current="page">Beasiswa<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-814"><a href="http://hmkg.fkunud.com" aria-current="page">Kotak Saran<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-812"><a href="http://hmkg.fkunud.com" aria-current="page">Lomba<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                  </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-1527"><a href="http://hmkg.fkunud.com/" aria-current="page">Program Studi<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-815"><a href="http://hmkg.fkunud.com" aria-current="page">Pengumuman<span class="kenta-menu-icon"><i class="fas fa-angle-down"></i></span></a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div data-builder-element="search" class=" kenta-search-wrap kenta-form relative kenta_header_el_search">
              <form role="search" method="get" action="https://hmkg.fkunud.com/" class="search-form">
                <div class="relative">
                  <label class="flex items-center flex-grow mb-0" for="search-form-662294c4b1876">
                    <span class="screen-reader-text">Search for:</span>
                    <input type="search" id="search-form-662294c4b1876" placeholder="Search" value="" name="s" class="search-input" />
                  </label>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="kenta-header-row kenta-header-row-bottom_row" data-row="bottom_row">
        <div class="container mx-auto text-xs px-gutter flex flex-wrap items-stretch">
          <div class="kenta-builder-column kenta-builder-column-0 kenta-builder-column-mobile kenta-builder-column-desktop-dir-row kenta-builder-column-tablet-dir-row kenta-builder-column-mobile-dir-row kenta_header_builder_col_bottom_row_0_mobile"> <button type="button" data-builder-element="theme-switch" class="kenta-theme-switch kenta-icon-button kenta-icon-button-rounded kenta-icon-button-solid kenta_header_el_theme_switch">
              <span class="light-mode">
                <i class="fas fa-sun"></i> </span>
              <span class="dark-mode">
                <i class="fas fa-moon"></i> </span>
            </button>
          </div>
        </div>
      </div>
    </header>
    <div class="kenta-posts-container kenta-container lg:flex flex-grow z-[1] container mx-auto px-gutter kenta-right-sidebar lg:flex-row">
      <div id="content" class="kenta-posts flex-grow max-w-full">
        <div class="flex flex-wrap card-list" data-card-layout="">
          <div class="card-wrapper w-full">
            <article id="post-1914" class="card overflow-hidden h-full post-1914 post type-post status-publish format-standard sticky hentry category-news kenta-scroll-reveal" data-card-layout="">
              <div class="card-content flex-grow">
                <div class="entry-categories cat-taxonomies break-words mb-2 last:mb-0" data-tax-type="badge"><a class="entry-tax-item mr-2 last:mr-0" href="https://hmkg.fkunud.com/category/news/" rel="category tag">News</a></div>
                <h2 class="entry-title mb-half-gutter last:mb-0"><a class="link" href="https://hmkg.fkunud.com/viral-seorang-dokter-gigi-diduga-melakukan-praktik-aborsi-bagaimana-menurut-kodekgi/" rel="bookmark">VIRAL SEORANG DOKTER GIGI DIDUGA MELAKUKAN PRAKTIK ABORSI :<br>BAGAIMANA MENURUT KODEKGI?</a> </h2>
                <div class="entry-metas mb-half-gutter last:mb-0">
                  <span class="byline meta-item"> <a class="entry-meta-link" href="https://hmkg.fkunud.com/author/hmkg/">HMKG FK Unud</a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span><span class="meta-item posted-on"><a class="entry-meta-link" href="https://hmkg.fkunud.com/viral-seorang-dokter-gigi-diduga-melakukan-praktik-aborsi-bagaimana-menurut-kodekgi/" rel="bookmark"><span class="entry-date"><time class="published" datetime="2023-06-07T15:28:50+08:00">Jun 7, 2023</time><time class="updated hidden" datetime="2023-06-07T15:36:13+08:00">Jun 7, 2023</time></span></a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span>
                </div>
                <div class="entry-excerpt mb-gutter last:mb-0"> VIRAL SEORANG DOKTER GIGI DIDUGA MELAKUKAN PRAKTIK ABORSI : BAGAIMANA MENURUT KODEKGI? WHAT’S THE ISSUE ?Ditreskrimsus Polda Bali membongkar praktik... </div>
                <div class="entry-divider full-width"></div>
                <div class="mb-gutter last:mb-0">
                  <a class="kenta-button kenta-button-right entry-read-more" href="https://hmkg.fkunud.com/viral-seorang-dokter-gigi-diduga-melakukan-praktik-aborsi-bagaimana-menurut-kodekgi/" rel="bookmark">
                    <span class="kenta-button-icon"><i class="fas fa-arrow-right"></i></span> <span class="kenta-button-text"> Read More </span>
                  </a>
                </div>
            </article>
          </div>
          <div class="card-wrapper w-full">
            <article id="post-1246" class="card overflow-hidden h-full post-1246 post type-post status-publish format-standard sticky hentry category-news kenta-scroll-reveal" data-card-layout="">
              <div class="card-content flex-grow">
                <div class="entry-categories cat-taxonomies break-words mb-2 last:mb-0" data-tax-type="badge"><a class="entry-tax-item mr-2 last:mr-0" href="https://hmkg.fkunud.com/category/news/" rel="category tag">News</a></div>
                <h2 class="entry-title mb-half-gutter last:mb-0"><a class="link" href="https://hmkg.fkunud.com/jejak-pendapat-kesiapan-perkuliahan-tatap-muka-mahasiswa-tingkat-sarjana-angkatan-2017-2020/" rel="bookmark">Jejak Pendapat Kesiapan Perkuliahan Tatap Muka Mahasiswa Tingkat Sarjana Angkatan 2017-2020</a> </h2>
                <div class="entry-metas mb-half-gutter last:mb-0">
                  <span class="byline meta-item"> <a class="entry-meta-link" href="https://hmkg.fkunud.com/author/adinatatan/">Adinata Tan</a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span><span class="meta-item posted-on"><a class="entry-meta-link" href="https://hmkg.fkunud.com/jejak-pendapat-kesiapan-perkuliahan-tatap-muka-mahasiswa-tingkat-sarjana-angkatan-2017-2020/" rel="bookmark"><span class="entry-date"><time class="published" datetime="2021-07-01T23:24:50+08:00">Jul 1, 2021</time><time class="updated hidden" datetime="2021-07-01T23:24:54+08:00">Jul 1, 2021</time></span></a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span>
                </div>
                <div class="entry-excerpt mb-gutter last:mb-0"> Halo civitas akademika PSSKGPDG Angkatan 2017-2020 🤗✨ Bidang KHIK HMKG ingin menyaring pendapat, aspirasi, dan saran terkait kesiapan perkuliahan tatap... </div>
                <div class="entry-divider full-width"></div>
                <div class="mb-gutter last:mb-0">
                  <a class="kenta-button kenta-button-right entry-read-more" href="https://hmkg.fkunud.com/jejak-pendapat-kesiapan-perkuliahan-tatap-muka-mahasiswa-tingkat-sarjana-angkatan-2017-2020/" rel="bookmark">
                    <span class="kenta-button-icon"><i class="fas fa-arrow-right"></i></span> <span class="kenta-button-text"> Read More </span>
                  </a>
                </div>
            </article>
          </div>
          <div class="card-wrapper w-full">
            <article id="post-2498" class="card overflow-hidden h-full post-2498 post type-post status-publish format-standard hentry category-news kenta-scroll-reveal" data-card-layout="">
              <div class="card-content flex-grow">
                <div class="entry-categories cat-taxonomies break-words mb-2 last:mb-0" data-tax-type="badge"><a class="entry-tax-item mr-2 last:mr-0" href="https://hmkg.fkunud.com/category/news/" rel="category tag">News</a></div>
                <h2 class="entry-title mb-half-gutter last:mb-0"><a class="link" href="https://hmkg.fkunud.com/wujudkan-senyum-sehat-menyeluruh-pemerintah-targetkan-indonesia-bebas-karies-2030/" rel="bookmark">WUJUDKAN SENYUM SEHAT MENYELURUH : PEMERINTAH TARGETKAN INDONESIA BEBAS KARIES 2030</a> </h2>
                <div class="entry-metas mb-half-gutter last:mb-0">
                  <span class="byline meta-item"> <a class="entry-meta-link" href="https://hmkg.fkunud.com/author/hmkg/">HMKG FK Unud</a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span><span class="meta-item posted-on"><a class="entry-meta-link" href="https://hmkg.fkunud.com/wujudkan-senyum-sehat-menyeluruh-pemerintah-targetkan-indonesia-bebas-karies-2030/" rel="bookmark"><span class="entry-date"><time class="published" datetime="2024-04-12T09:00:00+08:00">Apr 12, 2024</time><time class="updated hidden" datetime="2024-04-12T07:27:32+08:00">Apr 12, 2024</time></span></a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span>
                </div>
                <div class="entry-excerpt mb-gutter last:mb-0"> WHAT’S THE ISSUE? Kesehatan gigi dan mulut sering kali diabaikan oleh masyarakat Indonesia. Masyarakat Indonesia beranggapan masalah pada gigi tidak... </div>
                <div class="entry-divider full-width"></div>
                <div class="mb-gutter last:mb-0">
                  <a class="kenta-button kenta-button-right entry-read-more" href="https://hmkg.fkunud.com/wujudkan-senyum-sehat-menyeluruh-pemerintah-targetkan-indonesia-bebas-karies-2030/" rel="bookmark">
                    <span class="kenta-button-icon"><i class="fas fa-arrow-right"></i></span> <span class="kenta-button-text"> Read More </span>
                  </a>
                </div>
            </article>
          </div>
          <div class="card-wrapper w-full">
            <article id="post-2474" class="card overflow-hidden h-full post-2474 post type-post status-publish format-standard hentry category-kegiatan-internal kenta-scroll-reveal" data-card-layout="">
              <div class="card-content flex-grow">
                <div class="entry-categories cat-taxonomies break-words mb-2 last:mb-0" data-tax-type="badge"><a class="entry-tax-item mr-2 last:mr-0" href="https://hmkg.fkunud.com/category/kegiatan-internal/" rel="category tag">Kegiatan Internal Kampus</a></div>
                <h2 class="entry-title mb-half-gutter last:mb-0"><a class="link" href="https://hmkg.fkunud.com/menciptakan-senyum-yang-berkilau-dan-pemeliharaan-kesehatan-mulut-bersama-world-oral-health-day-2024/" rel="bookmark">Menciptakan Senyum yang Berkilau dan Pemeliharaan Kesehatan Mulut Bersama World Oral Health Day 2024</a> </h2>
                <div class="entry-metas mb-half-gutter last:mb-0">
                  <span class="byline meta-item"> <a class="entry-meta-link" href="https://hmkg.fkunud.com/author/hmkg/">HMKG FK Unud</a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span><span class="meta-item posted-on"><a class="entry-meta-link" href="https://hmkg.fkunud.com/menciptakan-senyum-yang-berkilau-dan-pemeliharaan-kesehatan-mulut-bersama-world-oral-health-day-2024/" rel="bookmark"><span class="entry-date"><time class="published" datetime="2024-03-30T05:02:03+08:00">Mar 30, 2024</time><time class="updated hidden" datetime="2024-03-30T05:02:04+08:00">Mar 30, 2024</time></span></a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span>
                </div>
                <div class="entry-excerpt mb-gutter last:mb-0"> World Oral Health Day (WOHD) merupakan peringatan hari kesehatan oral dunia yang diperingati setiap tanggal 20 Maret. Hari kesehatan oral... </div>
                <div class="entry-divider full-width"></div>
                <div class="mb-gutter last:mb-0">
                  <a class="kenta-button kenta-button-right entry-read-more" href="https://hmkg.fkunud.com/menciptakan-senyum-yang-berkilau-dan-pemeliharaan-kesehatan-mulut-bersama-world-oral-health-day-2024/" rel="bookmark">
                    <span class="kenta-button-icon"><i class="fas fa-arrow-right"></i></span> <span class="kenta-button-text"> Read More </span>
                  </a>
                </div>
            </article>
          </div>
          <div class="card-wrapper w-full">
            <article id="post-2408" class="card overflow-hidden h-full post-2408 post type-post status-publish format-standard hentry category-kegiatan-internal kenta-scroll-reveal" data-card-layout="">
              <div class="card-content flex-grow">
                <div class="entry-categories cat-taxonomies break-words mb-2 last:mb-0" data-tax-type="badge"><a class="entry-tax-item mr-2 last:mr-0" href="https://hmkg.fkunud.com/category/kegiatan-internal/" rel="category tag">Kegiatan Internal Kampus</a></div>
                <h2 class="entry-title mb-half-gutter last:mb-0"><a class="link" href="https://hmkg.fkunud.com/upgrading-bikin-merinding-yuk-intip-keseruan-upgrading-hmkg-2024/" rel="bookmark">Upgrading Bikin Merinding? Yuk, Intip Keseruan Upgrading HMKG 2024!</a> </h2>
                <div class="entry-metas mb-half-gutter last:mb-0">
                  <span class="byline meta-item"> <a class="entry-meta-link" href="https://hmkg.fkunud.com/author/hmkg/">HMKG FK Unud</a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span><span class="meta-item posted-on"><a class="entry-meta-link" href="https://hmkg.fkunud.com/upgrading-bikin-merinding-yuk-intip-keseruan-upgrading-hmkg-2024/" rel="bookmark"><span class="entry-date"><time class="published" datetime="2024-03-18T10:38:55+08:00">Mar 18, 2024</time><time class="updated hidden" datetime="2024-03-18T10:38:56+08:00">Mar 18, 2024</time></span></a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span>
                </div>
                <div class="entry-excerpt mb-gutter last:mb-0"> Seperti kata Jose Manuel Barroso, &#8220;Tidak ada stabilitas tanpa solidaritas dan tidak ada solidaritas tanpa stabilitas.” Maka dari itu, Upgrading... </div>
                <div class="entry-divider full-width"></div>
                <div class="mb-gutter last:mb-0">
                  <a class="kenta-button kenta-button-right entry-read-more" href="https://hmkg.fkunud.com/upgrading-bikin-merinding-yuk-intip-keseruan-upgrading-hmkg-2024/" rel="bookmark">
                    <span class="kenta-button-icon"><i class="fas fa-arrow-right"></i></span> <span class="kenta-button-text"> Read More </span>
                  </a>
                </div>
            </article>
          </div>
          <div class="card-wrapper w-full">
            <article id="post-2439" class="card overflow-hidden h-full post-2439 post type-post status-publish format-standard hentry category-kegiatan-internal kenta-scroll-reveal" data-card-layout="">
              <div class="card-content flex-grow">
                <div class="entry-categories cat-taxonomies break-words mb-2 last:mb-0" data-tax-type="badge"><a class="entry-tax-item mr-2 last:mr-0" href="https://hmkg.fkunud.com/category/kegiatan-internal/" rel="category tag">Kegiatan Internal Kampus</a></div>
                <h2 class="entry-title mb-half-gutter last:mb-0"><a class="link" href="https://hmkg.fkunud.com/matur-piuning-kepengurusan-hmkg-kabinet-laterna-2024-2025/" rel="bookmark">Matur Piuning Kepengurusan HMKG Kabinet Laterna 2024/2025</a> </h2>
                <div class="entry-metas mb-half-gutter last:mb-0">
                  <span class="byline meta-item"> <a class="entry-meta-link" href="https://hmkg.fkunud.com/author/hmkg/">HMKG FK Unud</a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span><span class="meta-item posted-on"><a class="entry-meta-link" href="https://hmkg.fkunud.com/matur-piuning-kepengurusan-hmkg-kabinet-laterna-2024-2025/" rel="bookmark"><span class="entry-date"><time class="published" datetime="2024-03-16T19:48:22+08:00">Mar 16, 2024</time><time class="updated hidden" datetime="2024-03-17T03:23:47+08:00">Mar 17, 2024</time></span></a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span>
                </div>
                <div class="entry-excerpt mb-gutter last:mb-0"> Secara etimologi, Matur Piuning berasal dari bahasa Jawa Kuno, yakni dari kata Matur dan Piuning. Kata Matur memiliki arti menghadap,... </div>
                <div class="entry-divider full-width"></div>
                <div class="mb-gutter last:mb-0">
                  <a class="kenta-button kenta-button-right entry-read-more" href="https://hmkg.fkunud.com/matur-piuning-kepengurusan-hmkg-kabinet-laterna-2024-2025/" rel="bookmark">
                    <span class="kenta-button-icon"><i class="fas fa-arrow-right"></i></span> <span class="kenta-button-text"> Read More </span>
                  </a>
                </div>
            </article>
          </div>
          <div class="card-wrapper w-full">
            <article id="post-2288" class="card overflow-hidden h-full post-2288 post type-post status-publish format-standard has-post-thumbnail hentry category-news kenta-scroll-reveal" data-card-layout="">
              <a href="https://hmkg.fkunud.com/dokter-gigi-vs-tukang-gigi-pentingnya-pilihan-profesionalisme-dalam-perawatan-gigi-dan-mulut/" class="card-thumbnail entry-thumbnail last:mb-0">
                <img width="614" height="396" src="https://hmkg.fkunud.com/wp-content/uploads/2024/02/WhatsApp-Image-2024-02-03-at-20.13.01a-4-e1707011314812.jpeg" class="w-full h-full wp-post-image" alt="" decoding="async" fetchpriority="high" srcset="https://hmkg.fkunud.com/wp-content/uploads/2024/02/WhatsApp-Image-2024-02-03-at-20.13.01a-4-e1707011314812.jpeg 614w, https://hmkg.fkunud.com/wp-content/uploads/2024/02/WhatsApp-Image-2024-02-03-at-20.13.01a-4-e1707011314812-300x193.jpeg 300w" sizes="(max-width: 614px) 100vw, 614px" /> </a>
              <div class="card-content flex-grow">
                <div class="entry-categories cat-taxonomies break-words mb-2 last:mb-0" data-tax-type="badge"><a class="entry-tax-item mr-2 last:mr-0" href="https://hmkg.fkunud.com/category/news/" rel="category tag">News</a></div>
                <h2 class="entry-title mb-half-gutter last:mb-0"><a class="link" href="https://hmkg.fkunud.com/dokter-gigi-vs-tukang-gigi-pentingnya-pilihan-profesionalisme-dalam-perawatan-gigi-dan-mulut/" rel="bookmark">DOKTER GIGI VS TUKANG GIGI : PENTINGNYA PILIHAN PROFESIONALISME DALAM PERAWATAN GIGI DAN MULUT</a> </h2>
                <div class="entry-metas mb-half-gutter last:mb-0">
                  <span class="byline meta-item"> <a class="entry-meta-link" href="https://hmkg.fkunud.com/author/hmkg/">HMKG FK Unud</a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span><span class="meta-item posted-on"><a class="entry-meta-link" href="https://hmkg.fkunud.com/dokter-gigi-vs-tukang-gigi-pentingnya-pilihan-profesionalisme-dalam-perawatan-gigi-dan-mulut/" rel="bookmark"><span class="entry-date"><time class="published" datetime="2024-02-04T09:00:00+08:00">Feb 4, 2024</time><time class="updated hidden" datetime="2024-02-04T09:48:47+08:00">Feb 4, 2024</time></span></a></span><span class="meta-divider"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                      <path d="M9,17.2l5.1-10.9L15,6.8L9.9,17.6L9,17.2z" />
                    </svg></span>
                </div>
                <div class="entry-excerpt mb-gutter last:mb-0"> WHAT’S THE ISSUE? Praktik tukang gigi hingga saat ini kian menjamur di berbagai tempat. Hal ini menunjukkan bahwa masih banyak... </div>
                <div class="entry-divider full-width"></div>
                <div class="mb-gutter last:mb-0">
                  <a class="kenta-button kenta-button-right entry-read-more" href="https://hmkg.fkunud.com/dokter-gigi-vs-tukang-gigi-pentingnya-pilihan-profesionalisme-dalam-perawatan-gigi-dan-mulut/" rel="bookmark">
                    <span class="kenta-button-icon"><i class="fas fa-arrow-right"></i></span> <span class="kenta-button-text"> Read More </span>
                  </a>
                </div>
            </article>
          </div>
        </div>
        <nav class="kenta-pagination kenta-scroll-reveal" data-pagination-type="prev-next" data-pagination-max-pages="13"><a href="https://hmkg.fkunud.com/page/2/" class="kenta-btn kenta-next-btn kenta-next-btn-icon"><span><i class="fas fa-arrow-right-long"></i></span></a></nav>
      </div>
      <div class="kenta-sidebar sidebar-primary prose prose-kenta shrink-0 prose-no-underline kenta-heading kenta-heading-style-1" role="complementary">
        <section id="search-2" class="kenta-scroll-reveal-widget kenta-widget clearfix widget_search">
          <form role="search" method="get" action="https://hmkg.fkunud.com/" class="search-form">
            <div class="relative">
              <label class="flex items-center flex-grow mb-0" for="search-form-662294c4b7e0f">
                <span class="screen-reader-text">Search for:</span>
                <input type="search" id="search-form-662294c4b7e0f" placeholder="Search" value="" name="s" class="search-input" />
                <button type="submit" class="search-submit">
                  <i class="fas fa-search"></i>
                </button>
              </label>
            </div>
          </form>
        </section>
        <section id="recent-posts-2" class="kenta-scroll-reveal-widget kenta-widget clearfix widget_recent_entries">
          <h3 class="widget-title mb-half-gutter heading-content">Recent Posts</h3>
          <ul>
            <li>
              <a href="https://hmkg.fkunud.com/wujudkan-senyum-sehat-menyeluruh-pemerintah-targetkan-indonesia-bebas-karies-2030/">WUJUDKAN SENYUM SEHAT MENYELURUH : PEMERINTAH TARGETKAN INDONESIA BEBAS KARIES 2030</a>
            </li>
            <li>
              <a href="https://hmkg.fkunud.com/menciptakan-senyum-yang-berkilau-dan-pemeliharaan-kesehatan-mulut-bersama-world-oral-health-day-2024/">Menciptakan Senyum yang Berkilau dan Pemeliharaan Kesehatan Mulut Bersama World Oral Health Day 2024</a>
            </li>
            <li>
              <a href="https://hmkg.fkunud.com/upgrading-bikin-merinding-yuk-intip-keseruan-upgrading-hmkg-2024/">Upgrading Bikin Merinding? Yuk, Intip Keseruan Upgrading HMKG 2024!</a>
            </li>
            <li>
              <a href="https://hmkg.fkunud.com/matur-piuning-kepengurusan-hmkg-kabinet-laterna-2024-2025/">Matur Piuning Kepengurusan HMKG Kabinet Laterna 2024/2025</a>
            </li>
            <li>
              <a href="https://hmkg.fkunud.com/dokter-gigi-vs-tukang-gigi-pentingnya-pilihan-profesionalisme-dalam-perawatan-gigi-dan-mulut/">DOKTER GIGI VS TUKANG GIGI : PENTINGNYA PILIHAN PROFESIONALISME DALAM PERAWATAN GIGI DAN MULUT</a>
            </li>
          </ul>
        </section>
        <section id="archives-2" class="kenta-scroll-reveal-widget kenta-widget clearfix widget_archive">
          <h3 class="widget-title mb-half-gutter heading-content">Archives</h3> <label class="screen-reader-text" for="archives-dropdown-2">Archives</label>
          <select id="archives-dropdown-2" name="archive-dropdown">
            <option value="">Select Month</option>
            <option value='https://hmkg.fkunud.com/2024/04/'> April 2024 </option>
            <option value='https://hmkg.fkunud.com/2024/03/'> March 2024 </option>
            <option value='https://hmkg.fkunud.com/2024/02/'> February 2024 </option>
            <option value='https://hmkg.fkunud.com/2023/11/'> November 2023 </option>
            <option value='https://hmkg.fkunud.com/2023/09/'> September 2023 </option>
            <option value='https://hmkg.fkunud.com/2023/06/'> June 2023 </option>
            <option value='https://hmkg.fkunud.com/2023/05/'> May 2023 </option>
            <option value='https://hmkg.fkunud.com/2023/03/'> March 2023 </option>
            <option value='https://hmkg.fkunud.com/2022/12/'> December 2022 </option>
            <option value='https://hmkg.fkunud.com/2022/09/'> September 2022 </option>
            <option value='https://hmkg.fkunud.com/2022/07/'> July 2022 </option>
            <option value='https://hmkg.fkunud.com/2022/04/'> April 2022 </option>
            <option value='https://hmkg.fkunud.com/2022/03/'> March 2022 </option>
            <option value='https://hmkg.fkunud.com/2022/02/'> February 2022 </option>
            <option value='https://hmkg.fkunud.com/2022/01/'> January 2022 </option>
            <option value='https://hmkg.fkunud.com/2021/10/'> October 2021 </option>
            <option value='https://hmkg.fkunud.com/2021/09/'> September 2021 </option>
            <option value='https://hmkg.fkunud.com/2021/08/'> August 2021 </option>
            <option value='https://hmkg.fkunud.com/2021/07/'> July 2021 </option>
            <option value='https://hmkg.fkunud.com/2021/06/'> June 2021 </option>
            <option value='https://hmkg.fkunud.com/2021/04/'> April 2021 </option>
            <option value='https://hmkg.fkunud.com/2021/03/'> March 2021 </option>
            <option value='https://hmkg.fkunud.com/2021/01/'> January 2021 </option>
            <option value='https://hmkg.fkunud.com/2020/07/'> July 2020 </option>
            <option value='https://hmkg.fkunud.com/2020/01/'> January 2020 </option>
            <option value='https://hmkg.fkunud.com/2019/07/'> July 2019 </option>
            <option value='https://hmkg.fkunud.com/2019/05/'> May 2019 </option>
            <option value='https://hmkg.fkunud.com/2019/04/'> April 2019 </option>
            <option value='https://hmkg.fkunud.com/2018/11/'> November 2018 </option>
            <option value='https://hmkg.fkunud.com/2018/09/'> September 2018 </option>
            <option value='https://hmkg.fkunud.com/2018/08/'> August 2018 </option>
            <option value='https://hmkg.fkunud.com/2018/07/'> July 2018 </option>
            <option value='https://hmkg.fkunud.com/2018/04/'> April 2018 </option>
            <option value='https://hmkg.fkunud.com/2014/08/'> August 2014 </option>
          </select>
          <script>
            (function() {
              var dropdown = document.getElementById("archives-dropdown-2");

              function onSelectChange() {
                if (dropdown.options[dropdown.selectedIndex].value !== '') {
                  document.location.href = this.options[this.selectedIndex].value;
                }
              }
              dropdown.onchange = onSelectChange;
            })();
          </script>
        </section>
        <section id="categories-2" class="kenta-scroll-reveal-widget kenta-widget clearfix widget_categories">
          <h3 class="widget-title mb-half-gutter heading-content">Categories</h3>
          <form action="https://hmkg.fkunud.com" method="get"><label class="screen-reader-text" for="cat">Categories</label><select name='cat' id='cat' class='postform'>
              <option value='-1'>Select Category</option>
              <option class="level-0" value="7">Kegiatan External Kampus</option>
              <option class="level-0" value="1">Kegiatan Internal Kampus</option>
              <option class="level-0" value="20">Lomba</option>
              <option class="level-0" value="9">News</option>
              <option class="level-0" value="17">Pengabdian Masyarakat</option>
              <option class="level-0" value="31">Pengumuman</option>
              <option class="level-0" value="21">Susunan Pengurus</option>
            </select>
          </form>
          <script>
            (function() {
              var dropdown = document.getElementById("cat");

              function onCatChange() {
                if (dropdown.options[dropdown.selectedIndex].value > 0) {
                  dropdown.parentNode.submit();
                }
              }
              dropdown.onchange = onCatChange;
            })();
          </script>
        </section>
      </div>
    </div>
    <footer class="kenta-footer-area text-accent">
      <div class="kenta-footer-row kenta-footer-row-top" data-row="top">
        <div class="container mx-auto px-gutter flex flex-wrap">
          <div class="kenta-builder-column kenta-builder-column-0 kenta-builder-column-all kenta-builder-column-desktop-dir-column kenta-builder-column-tablet-dir-__INITIAL_VALUE__ kenta-builder-column-mobile-dir-__INITIAL_VALUE__ kenta_footer_builder_col_top_0_all flex">
            <div data-builder-element="footer-logo" class="kenta-site-branding kenta_footer_el_logo" data-logo="left">
              <a class="site-logo" href="https://hmkg.fkunud.com">
                <img class="kenta-logo" src="http://hmkg.fkunud.com/wp-content/uploads/2024/02/LOGO_HMKG_NEW__2_-removebg-preview-1.png" alt="hmkg adalah ..." />
              </a>
              <div class="site-identity">
                <span class="site-title">
                  <a href="https://hmkg.fkunud.com">HMKG FK Unud</a>
                </span>
                <span class="site-tagline"> Himpunan Mahasiswa Kedokteran Gigi Universitas Udayana </span>
              </div>
            </div>
          </div>
          <div class="kenta-builder-column kenta-builder-column-1 kenta-builder-column-all kenta-builder-column-desktop-dir-column kenta-builder-column-tablet-dir-__INITIAL_VALUE__ kenta-builder-column-mobile-dir-__INITIAL_VALUE__ kenta_footer_builder_col_top_1_all flex">
            <div data-builder-element="widgets-1" class="prose kenta-prose prose-no-underline kenta-heading kenta-heading-style-1 kenta_footer_el_widgets_1">
              <aside id="block-20" class="kenta-widget clearfix widget_block widget_search">
                <form role="search" method="get" action="https://hmkg.fkunud.com/" class="wp-block-search__button-outside wp-block-search__icon-button wp-block-search"><label class="wp-block-search__label" for="wp-block-search__input-1">Search</label>
                  <div class="wp-block-search__inside-wrapper "><input class="wp-block-search__input" id="wp-block-search__input-1" placeholder="" value="" type="search" name="s" required /><button aria-label="Search" class="wp-block-search__button has-icon wp-element-button" type="submit"><svg class="search-icon" viewBox="0 0 24 24" width="24" height="24">
                        <path d="M13 5c-3.3 0-6 2.7-6 6 0 1.4.5 2.7 1.3 3.7l-3.8 3.8 1.1 1.1 3.8-3.8c1 .8 2.3 1.3 3.7 1.3 3.3 0 6-2.7 6-6S16.3 5 13 5zm0 10.5c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5 4.5 2 4.5 4.5-2 4.5-4.5 4.5z"></path>
                      </svg></button></div>
                </form>
              </aside>
              <aside id="block-22" class="kenta-widget clearfix widget_block">
                <div class="wp-block-columns is-layout-flex wp-container-core-columns-layout-1 wp-block-columns-is-layout-flex">
                  <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"></div>
                  <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"></div>
                  <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"></div>
                </div>
              </aside>
            </div>
          </div>
          <div class="kenta-builder-column kenta-builder-column-2 kenta-builder-column-all kenta-builder-column-desktop-dir-row kenta-builder-column-tablet-dir-__INITIAL_VALUE__ kenta-builder-column-mobile-dir-__INITIAL_VALUE__ kenta_footer_builder_col_top_2_all flex">
            <div data-builder-element="footer-socials" class="kenta_footer_el_socials">
              <div class="kenta-socials kenta-socials-official kenta-socials-none">
                <a class="kenta-social-link" target="_blank" rel="nofollow" style="--kenta-official-color: #000000;" href="https://x.com/HMKG_UNUD?s=20">
                  <span class="kenta-social-icon">
                    <i class="fab fa-x-twitter"></i> </span>
                </a>
                <a class="kenta-social-link" target="_blank" rel="nofollow" style="--kenta-official-color: #ed1376;" href="https://www.instagram.com/hmkgudayana?utm_source=ig_web_button_share_sheet&#038;igsh=ZDNlZDc0MzIxNw==">
                  <span class="kenta-social-icon">
                    <i class="fab fa-instagram"></i> </span>
                </a>
                <a class="kenta-social-link" target="_blank" rel="nofollow" style="--kenta-official-color: #f42e53;" href="https://www.tiktok.com/@hmkgudayana?is_from_webapp=1&#038;sender_device=pc">
                  <span class="kenta-social-icon">
                    <i class="fab fa-tiktok"></i> </span>
                </a>
                <a class="kenta-social-link" target="_blank" rel="nofollow" style="--kenta-official-color: var(--kenta-primary-active);" href="https://youtube.com/@hmkgudayana?si=0nfJb1-gO_xM16gF">
                  <span class="kenta-social-icon">
                    <i class="fab fa-youtube"></i> </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="kenta-footer-row kenta-footer-row-middle" data-row="middle">
        <div class="container mx-auto px-gutter flex flex-wrap"></div>
      </div>
    </footer>
    <a href="#" id="scroll-top" class="kenta-to-top kenta-to-top-right"><i class="fas fa-angle-up"></i></a>
    <div class="kenta-cookies-consent-container" data-period="forever">
      <div class="kenta-cookies-consent-wrap">
        <div class="kenta-cookies-consent full-width">
          <div class="kenta-cookies-consent-text kenta-raw-html"> We use cookies to improve your experience on our website </div>
          <div class="kenta-cookies-consent-buttons">
            <button type="button" class="kenta-button accept-button"> Accept </button>
            <button type="button" class="kenta-button decline-button"> Decline </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Instagram Feed JS -->
  <script type="text/javascript">
    var sbiajaxurl = "https://hmkg.fkunud.com/wp-admin/admin-ajax.php";
  </script>
  <style id='core-block-supports-inline-css'>
    .wp-container-core-columns-layout-1.wp-container-core-columns-layout-1 {
      flex-wrap: nowrap;
    }
  </style>
  <script src="https://hmkg.fkunud.com/wp-content/themes/kenta/dist/js/app.min.js?ver=1.2.7.1" id="kenta-script-js"></script>
  <script id="booster-extension-frontend-script-js-extra">
    var booster_extension_frontend_script = {
      "ajax_url": "https:\/\/hmkg.fkunud.com\/wp-admin\/admin-ajax.php",
      "ajax_nonce": "4ac58b88e3"
    };
  </script>
  <script src="https://hmkg.fkunud.com/wp-content/plugins/booster-extension/assets/js/frontend.js?ver=6.4.4" id="booster-extension-frontend-script-js"></script>
</body>

</html>
<!-- Page cached by LiteSpeed Cache 6.1 on 2024-04-19 23:59:00 -->
