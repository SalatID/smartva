<!doctype html>
<html lang="en">
  <!-- [Head] start -->

  <head>
    <title>@yield('title') - SmartVA</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Datta able is trending dashboard template made using Bootstrap 5 design framework. Datta able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="Codedthemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{asset("assets")}}/images/favicon-32x32.png" type="image/x-icon" />
 <!-- [Font] Family -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
<!-- [phosphor Icons] https://phosphoricons.com/ -->
<link rel="stylesheet" href="{{asset("assets")}}/fonts/phosphor/regular/style.css" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="{{asset("assets")}}/fonts/tabler-icons.min.css" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="{{asset("assets")}}/css/style.css" id="main-style-link" />
<link rel="stylesheet" href="{{asset("assets")}}/css/style-preset.css" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-14K1GBX9FG');
</script>
<!-- WiserNotify -->
<script>
  !(function () {
    if (window.t4hto4) console.log('WiserNotify pixel installed multiple time in this page');
    else {
      window.t4hto4 = !0;
      var t = document,
        e = window,
        n = function () {
          var e = t.createElement('script');
          (e.type = 'text/javascript'),
            (e.async = !0),
            (e.src = 'https://pt.wisernotify.com/pixel.js?ti=1jclj6jkfc4hhry'),
            document.body.appendChild(e);
        };
      'complete' === t.readyState ? n() : window.attachEvent ? e.attachEvent('onload', n) : e.addEventListener('load', n, !1);
    }
  })();
</script>
<!-- Microsoft clarity -->
<script type="text/javascript">
  (function (c, l, a, r, i, t, y) {
    c[a] =
      c[a] ||
      function () {
        (c[a].q = c[a].q || []).push(arguments);
      };
    t = l.createElement(r);
    t.async = 1;
    t.src = 'https://www.clarity.ms/tag/' + i;
    y = l.getElementsByTagName(r)[0];
    y.parentNode.insertBefore(t, y);
  })(window, document, 'clarity', 'script', 'gkn6wuhrtb');
</script>

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
@include('layout.sidebar')
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
@include('layout.header')
<!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        @include('layout.breadcrumb')
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
         @yield('content')
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid">
        <div class="row">
          <div class="col my-1">
            <p class="m-0">UNPAM Cyber Ops - SmartVA</p>
          </div>
          <div class="col-md-auto my-1">
            <ul class="list-inline footer-link mb-0">
              <li class="list-inline-item"><a href="{{asset("assets")}}/index.html">Home</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <!-- [Page Specific JS] start -->
    <!-- apexcharts js -->
    <script src="{{asset("assets")}}/js/plugins/apexcharts.min.js"></script>

    <script src="{{asset("assets")}}/js/plugins/jsvectormap.min.js"></script>
    <script src="{{asset("assets")}}/js/plugins/world.js"></script>

    <script src="{{asset("assets")}}/js/dashboard/dashboard-default.js"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="{{asset("assets")}}/js/plugins/popper.min.js"></script>
    <script src="{{asset("assets")}}/js/plugins/simplebar.min.js"></script>
    <script src="{{asset("assets")}}/js/plugins/bootstrap.min.js"></script>
    <script src="{{asset("assets")}}/js/script.js"></script>
    <script src="{{asset("assets")}}/js/theme.js"></script>


       
    <script>
      layout_change('light');
    </script>
       
    <script>
      change_box_container('false');
    </script>
     
    <script>
      layout_caption_change('true');
    </script>
       
    <script>
      layout_rtl_change('false');
    </script>
     
    <script>
      preset_change('preset-1');
    </script>
     
    <script>
      layout_theme_sidebar_change('false');
    </script>
            

  </body>
  <!-- [Body] end -->
</html>
