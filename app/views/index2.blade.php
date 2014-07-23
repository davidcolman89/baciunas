<html lang="en-us">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> SmartAdmin </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/bootstrap.min.css'); }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/font-awesome.min.css'); }}">

    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/smartadmin-production.min.css'); }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/smartadmin-skins.min.css'); }}">

    <!-- SmartAdmin RTL Support is under construction
         This RTL CSS will be released in version 1.5
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> -->

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('smartadmin/css/demo.min.css'); }}">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ URL::asset('smartadmin/img/favicon/favicon.ico'); }}" type="image/x-icon">
    <link rel="icon" href="{{ URL::asset('smartadmin/img/favicon/favicon.ico'); }}" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- Specifying a Webpage Icon for Web Clip
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="{{ URL::asset('smartadmin/img/splash/sptouch-icon-iphone.png'); }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('smartadmin/img/splash/touch-icon-ipad.png'); }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('smartadmin/img/splash/touch-icon-iphone-retina.png'); }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('smartadmin/img/splash/touch-icon-ipad-retina.png'); }}">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="{{ URL::asset('smartadmin/img/splash/ipad-landscape.png'); }}"
          media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="{{ URL::asset('smartadmin/img/splash/ipad-portrait.png'); }}"
          media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="{{ URL::asset('smartadmin/img/splash/iphone.png'); }}" media="screen and (max-device-width: 320px)">

    <style type="text/css">.jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }</style>
</head>
<body class=" desktop-detected pace-done" style="">
<div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
</div>
<!-- possible classes: minified, fixed-ribbon, fixed-header, fixed-width-->

<!-- HEADER -->
<header id="header">
    <div id="logo-group">

        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo"> <img src="{{ URL::asset('smartadmin/img/logo.png'); }}" alt="SmartAdmin"> </span>
        <!-- END LOGO PLACEHOLDER -->

        <!-- Note: The activity badge color changes when clicked and resets the number to 0
        Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->


        <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
        <div class="ajax-dropdown">

            <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
            <div class="btn-group btn-group-justified" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/mail.html">
                    Msgs (14) </label>
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/notifications.html">
                    notify (3) </label>
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/tasks.html">
                    Tasks (4) </label>
            </div>

            <!-- notification content -->
            <div class="ajax-notifications custom-scroll">

                <div class="alert alert-transparent">
                    <h4>Click a button to show messages here</h4>
                    This blank page message helps protect your privacy, or you can show the first message here
                    automatically.
                </div>

                <i class="fa fa-lock fa-4x fa-border"></i>

            </div>
            <!-- end notification content -->

            <!-- footer: refresh area -->
					<span> Last updated on: 12/12/2013 9:43AM
						<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..."
                                class="btn btn-xs btn-default pull-right">
                            <i class="fa fa-refresh"></i>
                        </button>
					</span>
            <!-- end footer -->

        </div>
        <!-- END AJAX-DROPDOWN -->
    </div>

    <!-- projects dropdown -->

    <!-- end projects dropdown -->

    <!-- pulled right: nav area -->

    <!-- end pulled right: nav area -->

</header>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

<!-- User info -->
<div class="login-info">

</div>
<!-- end user info -->

<!-- NAVIGATION : This navigation is also responsive

To make this navigation dynamic please make sure to link the node
(the reference to the nav > ul) after page load. Or the navigation
will not initialize.
-->
<nav>
<!-- NOTE: Notice the gaps after each icon usage <i></i>..
Please note that these links work a bit different than
traditional href="" links. See documentation for details.
-->

<ul style="">
<li class="active">
    <a href="index.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
</li>
<li>
    <a href="{{ URL::route('clientes.index') }}">
        <i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Tabla Clientes</span><spanclass="badge pull-right inbox-badge">14</span>
    </a>
</li>
<li class="">
    <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Graphs</span><b
            class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
    <ul style="display: none;">
        <li>
            <a href="flot.html">Flot Chart</a>
        </li>
        <li>
            <a href="morris.html">Morris Charts</a>
        </li>
        <li>
            <a href="inline-charts.html">Inline Charts</a>
        </li>
        <li>
            <a href="dygraphs.html">Dygraphs <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
        </li>
    </ul>
</li>
<li>
    <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span><b
            class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
    <ul>
        <li>
            <a href="table.html">Normal Tables</a>
        </li>
        <li>
            <a href="datatables.html">Data Tables <span class="badge inbox-badge bg-color-greenLight">v1.10</span></a>
        </li>
        <li>
            <a href="jqgrid.html">Jquery Grid</a>
        </li>
    </ul>
</li>
<li>
    <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Forms</span><b
            class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
    <ul>
        <li>
            <a href="form-elements.html">Smart Form Elements</a>
        </li>
        <li>
            <a href="form-templates.html">Smart Form Layouts</a>
        </li>
        <li>
            <a href="validation.html">Smart Form Validation</a>
        </li>
        <li>
            <a href="bootstrap-forms.html">Bootstrap Form Elements</a>
        </li>
        <li>
            <a href="plugins.html">Form Plugins</a>
        </li>
        <li>
            <a href="wizard.html">Wizards</a>
        </li>
        <li>
            <a href="other-editors.html">Bootstrap Editors</a>
        </li>
        <li>
            <a href="dropzone.html">Dropzone </a>
        </li>
        <li>
            <a href="image-editor.html">Image Cropping <span
                    class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
        </li>
    </ul>
</li>
<li class="">
    <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI Elements</span><b
            class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
    <ul style="display: none;">
        <li>
            <a href="general-elements.html">General Elements</a>
        </li>
        <li>
            <a href="buttons.html">Buttons</a>
        </li>
        <li>
            <a href="#">Icons<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
            <ul>
                <li>
                    <a href="fa.html"><i class="fa fa-plane"></i> Font Awesome</a>
                </li>
                <li>
                    <a href="glyph.html"><i class="glyphicon glyphicon-plane"></i> Glyph Icons</a>
                </li>
                <li>
                    <a href="flags.html"><i class="fa fa-flag"></i> Flags</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="grid.html">Grid</a>
        </li>
        <li>
            <a href="treeview.html">Tree View</a>
        </li>
        <li>
            <a href="nestable-list.html">Nestable Lists</a>
        </li>
        <li>
            <a href="jqui.html">JQuery UI</a>
        </li>
        <li>
            <a href="typography.html">Typography</a>
        </li>
        <li class="open">
            <a href="#">Six Level Menu<b class="collapse-sign"><em class="fa fa-minus-square-o"></em></b></a>
            <ul style="display: block;">
                <li>
                    <a href="#"><i class="fa fa-fw fa-folder-open"></i> Item #2<b class="collapse-sign"><em
                                class="fa fa-plus-square-o"></em></b></a>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-folder-open"></i> Sub #2.1 <b class="collapse-sign"><em
                                        class="fa fa-plus-square-o"></em></b></a>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-file-text"></i> Item #2.1.1</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-plus"></i> Expand<b class="collapse-sign"><em
                                                class="fa fa-plus-square-o"></em></b></a>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-fw fa-trash-o"></i> Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-folder-open"></i> Item #3<b class="collapse-sign"><em
                                class="fa fa-plus-square-o"></em></b></a>

                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level <b class="collapse-sign"><em
                                        class="fa fa-plus-square-o"></em></b></a>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </li>
            </ul>
        </li>
    </ul>
</li>

<li>
    <a href="calendar.html"><i class="fa fa-lg fa-fw fa-calendar"><em>3</em></i> <span
            class="menu-item-parent">Calendar</span></a>
</li>
<li>
    <a href="widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
</li>
<li>
    <a href="gallery.html"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Gallery</span></a>
</li>
<li>
    <a href="gmap-xml.html"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span
            class="menu-item-parent">GMap Skins</span><span
            class="badge bg-color-greenLight pull-right inbox-badge">9</span></a>
</li>
<li>
    <a href="#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Miscellaneous</span><b
            class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
    <ul>
        <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-file"></i> Other Pages<b class="collapse-sign"><em
                        class="fa fa-plus-square-o"></em></b></a>
            <ul>
                <li>
                    <a href="forum.html">Forum Layout</a>
                </li>
                <li>
                    <a href="profile.html">Profile</a>
                </li>
                <li>
                    <a href="timeline.html">Timeline</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="pricing-table.html">Pricing Tables</a>
        </li>
        <li>
            <a href="invoice.html">Invoice</a>
        </li>
        <li>
            <a href="login.html" target="_top">Login</a>
        </li>
        <li>
            <a href="register.html" target="_top">Register</a>
        </li>
        <li>
            <a href="lock.html" target="_top">Locked Screen</a>
        </li>
        <li>
            <a href="error404.html">Error 404</a>
        </li>
        <li>
            <a href="error500.html">Error 500</a>
        </li>
        <li>
            <a href="blank_.html">Blank Page</a>
        </li>
        <li>
            <a href="email-template.html">Email Template</a>
        </li>
        <li>
            <a href="search.html">Search Page</a>
        </li>
        <li>
            <a href="ckeditor.html">CK Editor</a>
        </li>
    </ul>
</li>
<li class="top-menu-hidden">
    <a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span
            class="menu-item-parent">SmartAdmin Intel</span><b class="collapse-sign"><em
                class="fa fa-plus-square-o"></em></b></a>
    <ul>
        <li>
            <a href="difver.html"><i class="fa fa-stack-overflow"></i> Different Versions</a>
        </li>
        <li>
            <a href="applayout.html"><i class="fa fa-cube"></i> App Settings</a>
        </li>
        <li>
            <a href="http://bootstraphunter.com/smartadmin/BUGTRACK/track_/documentation/index.html" target="_blank"><i
                    class="fa fa-book"></i> Documentation</a>
        </li>
        <li>
            <a href="http://bootstraphunter.com/smartadmin/BUGTRACK/track_/" target="_blank"><i class="fa fa-bug"></i>
                Bug Tracker</a>
        </li>
    </ul>
</li>
</ul>
</nav>
			<span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>

</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->

    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">


        <!-- widget grid -->
        <section id="widget-grid" class="">
            @yield('contenido')

        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- PAGE FOOTER -->
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white">SmartAdmin WebApp © 2013-2014</span>
        </div>


    </div>
</div>
<!-- END PAGE FOOTER -->


<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
<script data-pace-options="{ &quot;restartOnRequestAfter&quot;: true }" src="{{ URL::asset('smartadmin/js/plugin/pace/pace.min.js'); }}"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="{{ URL::asset('smartadmin/'); }}js/libs/jquery-2.0.2.min.js"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="{{ URL::asset('smartadmin/'); }}js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

<!-- BOOTSTRAP JS -->
<script src="{{ URL::asset('smartadmin/js/bootstrap/bootstrap.min.js'); }}"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="{{ URL::asset('smartadmin/js/notification/SmartNotification.min.js'); }}"></script>

<!-- JARVIS WIDGETS -->
<script src="{{ URL::asset('smartadmin/js/smartwidgets/jarvis.widget.min.js'); }}"></script>

<!-- EASY PIE CHARTS -->
<script src="{{ URL::asset('smartadmin/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js'); }}"></script>

<!-- SPARKLINES -->
<script src="{{ URL::asset('smartadmin/js/plugin/sparkline/jquery.sparkline.min.js'); }}"></script>

<!-- JQUERY VALIDATE -->
<script src="{{ URL::asset('smartadmin/js/plugin/jquery-validate/jquery.validate.min.js'); }}"></script>

<!-- JQUERY MASKED INPUT -->
<script src="{{ URL::asset('smartadmin/js/plugin/masked-input/jquery.maskedinput.min.js'); }}"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="{{ URL::asset('smartadmin/js/plugin/select2/select2.min.js'); }}"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="{{ URL::asset('smartadmin/js/plugin/bootstrap-slider/bootstrap-slider.min.js'); }}"></script>

<!-- browser msie issue fix -->
<script src="{{ URL::asset('smartadmin/js/plugin/msie-fix/jquery.mb.browser.min.js'); }}"></script>

<!-- FastClick: For mobile devices -->
<script src="{{ URL::asset('smartadmin/js/plugin/fastclick/fastclick.min.js'); }}"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only -->
<script src="{{ URL::asset('smartadmin/js/demo.min.js'); }}"></script>

<!-- MAIN APP JS FILE -->
<script src="{{ URL::asset('smartadmin/js/app.min.js'); }}"></script>

<!-- PAGE RELATED PLUGIN(S) -->

<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
<script src="{{ URL::asset('smartadmin/js/plugin/flot/jquery.flot.cust.min.js'); }}"></script>
<script src="{{ URL::asset('smartadmin/js/plugin/flot/jquery.flot.resize.min.js'); }}"></script>
<script src="{{ URL::asset('smartadmin/js/plugin/flot/jquery.flot.tooltip.min.js'); }}"></script>

<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
<script src="{{ URL::asset('smartadmin/js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js'); }}"></script>
<script src="{{ URL::asset('smartadmin/js/plugin/vectormap/jquery-jvectormap-world-mill-en.js'); }}"></script>

<!-- Full Calendar -->
<script src="{{ URL::asset('smartadmin/js/plugin/fullcalendar/jquery.fullcalendar.min.js'); }}"></script>


<div id="divSmallBoxes"></div>
<div id="divMiniIcons"></div>
<div id="divbigBoxes"></div>
<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0"
    style="display: none;"></ul>
<div class="jvectormap-label"></div>
<div id="flotTip" style="display: none; position: absolute;"></div>
@include('footer')
@yield('js')
</body>
</html>