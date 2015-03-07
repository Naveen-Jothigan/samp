
<!DOCTYPE html>
<html lang="en-us">
	
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> Touktoukcar </title>
		<meta name="description" content="">
		<meta name="author" content="">
			
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo site_url('application/assets/css/bootstrap.min.css') ?> ">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo site_url('application/assets/css/font-awesome.min.css')?> ">

		<!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo site_url('application/assets/css/smartadmin-production.css') ?>">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo site_url('application/assets/css/smartadmin-skins.css')?> ">

		<!-- SmartAdmin RTL Support is under construction
		<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.css"> -->

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo site_url('application/assets/css/demo.css') ?> ">

		<!-- FAVICONS -->
		<link rel="shortcut icon" href="<?php echo site_url('img/faavicon/faavicon.ico') ?>" type="image/x-icon">
		<link rel="icon" href="<?php echo site_url('img/.ico') ?> " type="image/x-icon">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="<?php echo site_url('img/splash/sptouch-icon-iphone.png')?> ">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url('img/splash/touch-icon-ipad.png') ?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url('img/splash/touch-icon-iphone-retina.png') ?>">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo site_url('img/splash/touch-icon-ipad-retina.png') ?>">
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="<?php echo site_url('img/splash/ipad-landscape.png') ?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="<?php echo site_url('img/splash/ipad-portrait.png') ?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="<?php echo site_url('img/splash/iphone.png') ?>" media="screen and (max-device-width: 320px)">

	</head>
	<body>
		<!-- POSSIBLE CLASSES: minified, fixed-ribbon, fixed-header, fixed-width
			 You can also add different skin classes such as "smart-skin-1", "smart-skin-2" etc...-->
		
		<!-- HEADER -->
		<header id="header">
			<div id="logo-group">

				<!-- PLACE YOUR LOGO HERE -->
				<span id="logo" style="margin-top: 0px; width:  auto;"> <img src="" alt=""></span>
		
		
		
				<!-- END LOGO PLACEHOLDER -->

				<!-- Note: The activity badge color changes when clicked and resets the number to 0
				Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
				

				<!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
				<div class="ajax-dropdown">

					<!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
					

					<!-- notification content -->
					
					<!-- end notification content -->

					<!-- footer: refresh area -->
					<span>
						<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
							<i class="fa fa-refresh"></i>
						</button> </span>
					<!-- end footer -->

				</div>
				<!-- END AJAX-DROPDOWN -->
			</div>

			<!-- projects dropdown -->
			
			<!-- end projects dropdown -->

			<!-- pulled right: nav area -->
			<div class="pull-right">
				

				<!-- collapse menu button -->
				<div id="hide-menu" class="btn-header pull-right">
					<span> <a href="javascript:void(0);" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
				</div>
				<!-- end collapse menu -->

				<!-- logout button -->
				<div id="logout" class="btn-header transparent pull-right">
					<span> <a href="logout.php" title="Sign Out" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
				</div>
				<!-- end logout button -->

				<!-- search mobile button (this is hidden till mobile view port) -->
				<div id="search-mobile" class="btn-header transparent pull-right">
					<span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
				</div>
				<!-- end search mobile button -->

				<!-- input: search field -->
				
				<!-- end input: search field -->

				<!-- fullscreen button -->
					<!-- end fullscreen button -->

				<!-- multiple lang dropdown : find all flags in the image folder -->
				
				<!-- end multiple lang -->

			</div>
			<!-- end pulled right: nav area -->

		</header>
		<!-- END HEADER -->

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		<aside id="left-panel">

			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
					
					<a href="javascript:void(0);" id="show-shortcut">
						
						<span>
							Admin
						</span>
						<i class="fa fa-angle-down"></i>
					</a> 
					
				</span>
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

				<ul>
					<!--<li class="">
						<a href="ajax/" title=""><i class="fa fa-lg fa-fw fa-building "></i> <span class="menu-item-parent">Room Master</span></a>
					</li>-->
				
					<li>
						<a href="<?php echo site_url('Toukadmin/profile') ?> " ><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">Profile</span></a>
					</li>
					<li>
						<a href="<?php echo site_url('Toukadmin/rides') ?> " ><i class="fa fa-lg fa-fw fa-tachometer"></i> <span class="menu-item-parent">Rides offered</span></a>
					</li>
					<!--<li>
						<a href="consultin_members.php"><i class="fa fa-lg fa-fw fa-group"></i> <span class="menu-item-parent">Invite Members</span></a>
					</li>-->
					<!--<li>
						<a href="active_users.php"><i class="fa fa-lg fa-fw fa-check-circle"></i> <span class="menu-item-parent">Activated Users</span></a>
					</li>
					<li>
						<a href="deactive_users.php"><i class="fa fa-lg fa-fw fa-times-circle-o"></i> <span class="menu-item-parent">Deactivated Users</span></a>
					</li>
				-->
					
					
				</ul>
			</nav>
			<span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>

		</aside>
		<!-- END NAVIGATION -->

		<!-- MAIN PANEL -->
		<div >

			<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment"> <span  data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true" data-reset-msg="Would you like to RESET all your saved widgets and clear LocalStorage?"></span> </span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<!-- This is auto generated -->
				</ol>
				<!-- end breadcrumb -->

				<!-- You can also add more buttons to the
				ribbon for further usability

				Example below:

				<span class="ribbon-button-alignment pull-right">
				<span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
				<span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
				<span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
				</span> -->

			</div>
			<script>

  //  $(document).ready(function(){
  //
  //  $('#ribbon ol.breadcrumb').append(" <li>Home</li>.");
  //});
	//$.bread_crumb = $('#ribbon ol.breadcrumb');
	//function drawBreadCrumb() {
	//var nav_elems = $('nav li.active > a'), count = nav_elems.length;
	//
	////console.log("breadcrumb")
	//$.bread_crumb.empty();
	//$.bread_crumb.append($("<li>Home</li>"));
	//nav_elems.each(function() {
	//	$.bread_crumb.append($("<li></li>").html($.trim($(this).clone().children(".badge").remove().end().text())));
	//	// update title when breadcrumb is finished...
	//	if (!--count) document.title = $.bread_crumb.find("li:last-child").text();
	//});
	//
	//}	
	
</script>
			<!-- END RIBBON -->
<?php //print_r($_POST); ?>
			<!-- MAIN CONTENT -->
			
			
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

		<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
		Note: These tiles are completely responsive,
		you can add as many as you like
		-->
		<!--<div id="shortcut">
			<ul>
				<li>
					<a href="#ajax/inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
				</li>
				<li>
					<a href="#ajax/calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
				</li>
				<li>
					<a href="#ajax/gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
				</li>
				<li>
					<a href="#ajax/invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
				</li>
				<li>
					<a href="#ajax/gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
				</li>
				<li>
					<a href="#ajax/profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
				</li>
			</ul>
		</div>-->
		<!-- END SHORTCUT AREA -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>-->

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="application/assets/libs/jquery-2.0.2.min.js"><\/script>');
			}
		</script>

		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="application/assets/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

		<!-- BOOTSTRAP JS -->
		<script src="<?php echo site_url('application/assets/bootstrap/bootstrap.min.js') ?>"></script>

		<!-- CUSTOM NOTIFICATION -->
		<script src="<?php echo site_url('application/assets/notification/SmartNotification.min.js') ?>"></script>

		<!-- JARVIS WIDGETS -->
		<script src="<?php echo site_url('application/assets/smartwidgets/jarvis.widget.min.js') ?>"></script>

		<!--<!-- EASY PIE CHARTS -->
		<script src="<?php echo site_url('application/assets/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js')?>"></script>

		<!-- SPARKLINES -->
		<script src="<?php echo site_url('application/assets/plugin/sparkline/jquery.sparkline.min.js') ?>"></script>

		<!-- JQUERY VALIDATE -->
		<script src="<?php echo site_url('application/assets/plugin/jquery-validate/jquery.validate.min.js') ?>"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="<?php echo site_url('application/assets/plugin/masked-input/jquery.maskedinput.min.js')?> "></script>

		<!--JQUERY SELECT2 INPUT -->
		<script src="<?php echo site_url('application/assets/plugin/select2/select2.min.js') ?>"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="<?php echo site_url('application/assets/plugin/bootstrap-slider/bootstrap-slider.min.js')?> "></script>

		<!-- browser msie issue fix -->
		<script src="<?php echo site_url('application/assets/plugin/msie-fix/jquery.mb.browser.min.js')?>"></script>

		<!-- FastClick: For mobile devices: you can disable this in app.js-->
		<script src="<?php echo site_url('application/js/plugin/fastclick/fastclick.js') ?>"></script> 

		<!--[if IE 7]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		<!-- Demo purpose only -->
		

		<!-- MAIN APP JS FILE -->
		
		<script src="<?php echo site_url('application/assets/js/app.js') ?>"></script>
		

	</body>

</html>
