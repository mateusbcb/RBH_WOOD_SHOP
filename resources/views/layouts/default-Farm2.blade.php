<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>RBH Wood Shop - @yield('title')</title>
	<meta name="description" content="">
	<meta name="author" content="Mateus Brandt">

    <!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<!-- FONTS -->
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Poppins:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Volkhov:100,200,300,400,400italic,500,600,700,700italic,900'>
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400italic,500,600,700,700italic,900'>
	<!-- CSS -->
	<link rel='stylesheet' href="{{ asset('css/global.css') }}">
	<link rel='stylesheet' href="{{ asset('css/structure.css') }}">
	<link rel='stylesheet' href="{{ asset('css/farm2.css') }}">
	<link rel='stylesheet' href="{{ asset('css/custom.css') }}">
	<!-- Revolution Slider -->
	<link rel="stylesheet" href="{{ asset('plugins/rs-plugin-6.custom/css/rs6.css') }}">
</head>

<body class="page style-simple button-custom layout-full-width no-content-padding no-shadows header-classic sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-right menuo-no-borders logo-no-margin logo-no-sticky-padding mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-content">
	{{--  Start - Page  --}}
    <div id="Wrapper">
        {{--  Star - Menu  --}}
		<div id="Header_wrapper">
			<header id="Header">
				<div id="Top_bar">
					<div class="container">
						<div class="column one">
							<div class="top_bar_left clearfix">
								<div class="logo">
									<a id="logo" href="../../index-farm2.html" title="BeFarm 2 - Betheme" data-height="80" data-padding="0">
                                        <img class="logo-main scale-with-grid" src="{{ asset('images/logo.png') }}" data-retina="{{ asset('images/logo-retina.png') }}" data-height="80">
                                        <img class="logo-sticky scale-with-grid" src="{{ asset('images/logo.png') }}" data-retina="{{ asset('images/logo-retina.png') }}" data-height="80">
                                        <img class="logo-mobile scale-with-grid" src="{{ asset('images/logo.png') }}" data-retina="{{ asset('images/logo-retina.png') }}" data-height="80">
                                        <img class="logo-mobile-sticky scale-with-grid" src="{{ asset('images/logo.png') }}" data-retina="{{ asset('images/logo-retina.png') }}" data-height="80">
                                    </a>
								</div>
								<div class="menu_wrapper">
									<nav id="menu">
										<ul id="menu-main-menu" class="menu menu-main">
											<li class="current-menu-item"> <a href="../../index-farm2.html"><span>Home</span></a> </li>
											<li> <a href="products.html"><span>Products</span></a> </li>
											<li> <a href="story.html"><span>Our story</span></a> </li>
											<li> <a href="about.html"><span>About us</span></a> </li>
											<li> <a href="contact.html"><span>Contact</span></a> </li>
										</ul>
									</nav>
                                    <a class="responsive-menu-toggle" href="#">
                                        <i class="icon-menu-fine"></i>
                                    </a>
                                </div>
							</div>
						</div>
					</div>
				</div>
                <div class="mfn-main-slider mfn-rev-slider">
					<p class="rs-p-wp-fix"></p>
					<rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;">
						<rs-module id="rev_slider_1_1"data-version="6.3.3">
							<rs-slides>
								<rs-slide data-key="rs-1" data-title="Slide" data-anim="ei:d;eo:d;s:1000;r:0;t:fade;sl:0;"> <img src="{{ asset('images/farm2-slider-bg.jpg') }}" data-panzoom="d:10000;ss:110%;se:100;os:50px/50px;" class="rev-slidebg">
									<rs-layer id="slider-1-slide-1-layer-0" data-type="text" data-color="#274135" data-rsp_ch="on" data-xy="x:c;yo:200px,200px,66px,66px;" data-text="w:normal;s:60,60,50,50;l:70,70,60,60;a:center;" data-dim="w:900px,900px,564px,564px;" data-frame_0="y:50,50,31,31;" data-frame_1="sp:800;" data-frame_999="o:0;st:w;sR:8200;" style="z-index:5;font-family:Volkhov;"> Welcome to the place where natural flavour is born </rs-layer>
									<rs-layer id="slider-1-slide-1-layer-1" data-type="shape" data-rsp_ch="on" data-xy="x:c;yo:400px,400px,289px,289px;" data-text="w:normal;s:20,20,12,12;l:0,0,15,15;" data-dim="w:240px,240px,150px,150px;h:7px,7px,3px,3px;" data-frame_0="y:50,50,31,31;" data-frame_1="st:50;sp:800;sR:50;" data-frame_999="o:0;st:w;sR:8150;" style="z-index:6;background-color:var(--primary_2);"></rs-layer>
									<rs-layer id="slider-1-slide-1-layer-2" data-type="text" data-rsp_ch="on" data-xy="x:c;yo:608px,608px,471px,471px;" data-text="w:normal;s:80,80,60,60;l:80,80,70,70;" data-frame_0="y:50,50,31,31;" data-frame_1="st:100;sp:800;sR:100;" data-frame_999="o:0;st:w;sR:8100;" data-color="#ffffff" style="z-index:7;font-family:Reenie Beanie;"> Discover our products </rs-layer>
								</rs-slide>
							</rs-slides>
						</rs-module>
					</rs-module-wrap>
				</div>
			</header>
		</div>
        {{--  End - Menu  --}}

        {{--  Star - Content  --}}
		<div id="Content">
			<div class="content_wrapper clearfix">
				<div class="sections_group">
					<div class="entry-content">

                        @yield('content')

					</div>
				</div>
			</div>
		</div>
        {{--  End - Content  --}}

        {{--  Start - Footer  --}}
		<footer id="Footer" class="clearfix">
			<div class="widgets_wrapper">
				<div class="container">
					<div class="column one-third">
						<aside class="widget_text widget widget_custom_html">
							<div class="textwidget custom-html-widget">
								<div style="padding-right: 20%;">
									<h5>Contact us
										<br>
										Curabitur et ligula molestie ultricies porta urna.</h5>
									<hr class="no_line" style="margin:0 auto 20px"> <a class="button button_size_2 button_theme" href="contact.html" style="color:var(--white);" target="_blank" rel="noopener"><span class="button_label">Read more</span></a>
									<hr class="no_line" style="margin:0 auto 30px">
									<p> <a href="#" style="margin-right: 15px;">FAQ</a><a href="#" style="margin-right: 15px;">Support</a><a href="#" style="margin-right: 15px;">Useful info</a> </p>
								</div>
							</div>
						</aside>
					</div>
					<div class="column one-third">
						<aside class="widget_text widget widget_custom_html">
							<div class="textwidget custom-html-widget">
								<div style="padding-right: 20%;">
									<h5>Ullamcorper</h5>
									<hr class="no_line" style="margin:0 auto 10px">
									<ul class="list_custom">
										<li> <i class="icon-dot" style="color:var(--primary_2)"></i>Lorem ipsum dolor sit amet enim. Etiam ullamcorper </li>
										<li> <i class="icon-dot" style="color:var(--primary_2)"></i>Maecenas malesuada elit lectus felis ultricies </li>
										<li> <i class="icon-dot" style="color:var(--primary_2)"></i>Curabitur ligula </li>
										<li> <i class="icon-dot" style="color:var(--primary_2)"></i>Vestibulum </li>
									</ul>
								</div>
							</div>
						</aside>
					</div>
					<div class="column one-third">
						<aside class="widget_text widget widget_custom_html">
							<div class="textwidget custom-html-widget">
								<div style="padding-right: 20%;">
									<h5>Our mission</h5>
									<hr class="no_line" style="margin:0 auto 10px">
									<p> Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie enim. </p> <a href="#">Read more</a> </div>
							</div>
						</aside>
					</div>
				</div>
			</div>
			<div class="footer_copy">
				<div class="container">
					<div class="column one"> <a id="back_to_top" class="footer_button" href><i class="icon-up-open-big"></i></a>
						<div class="copyright"> &copy; 2021 BeFarm 2 - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="https://1.envato.market/9ZxXY">BeantownThemes</a> </div>
					</div>
				</div>
			</div>
		</footer>
        {{--  End - Footer  --}}
	</div>
    {{--  End - Page  --}}

	<div id="Side_slide" class="right dark" data-width="250">
		<div class="close-wrapper"> <a href="#" class="close"><i class="icon-cancel-fine"></i></a> </div>
		<div class="menu_wrapper"></div>
		<div class="extras">
			<div class="extras-wrapper"></div>
		</div>
	</div>
	<div id="body_overlay"></div>

	<!-- JS -->
	<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('js/jquery-migrate-3.3.2.js') }}"></script>
	<script src="{{ asset('js/mfn.menu.js') }}"></script>
	<script src="{{ asset('js/jquery.plugins.js') }}"></script>
	<script src="{{ asset('js/jquery.jplayer.min.js') }}"></script>
	<script src="{{ asset('js/animations/animations.js') }}"></script>
	<script src="{{ asset('js/translate3d.js') }}"></script>
	<script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('plugins/rs-plugin-6.custom/js/revolution.tools.min.js') }}"></script>
	<script src="{{ asset('plugins/rs-plugin-6.custom/js/rs6.min.js') }}"></script>

    <script>
        var revapi1, tpj;

        function revinit_revslider11() {
            jQuery(function() {
                tpj = jQuery;
                revapi1 = tpj("#rev_slider_1_1");
                if(revapi1 == undefined || revapi1.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_1_1");
                } else {
                    revapi1.revolution({
                        sliderType:"hero",
                        sliderLayout:"fullscreen",
                        visibilityLevels:"1240,1240,778,778",
                        gridwidth:"1240,1240,778,778",
                        gridheight:"1080,1080,960,960",
                        perspective: 600,
                        perspectiveType:"global",
                        editorheight:"1080,768,960,720",
                        responsiveLevels:"1240,1240,778,778",
                        progressBar: {
                            disableProgressBar: true
                        },
                        navigation: {
                            onHoverStop: false
                        },
                        fallbacks: {
                            allowHTML5AutoPlayOnAndroid: true
                        },
                    });
                }
            });
        }
        var once_revslider11 = false;
        if(document.readyState ==="loading") {
            document.addEventListener('readystatechange', function() {
                if((document.readyState ==="interactive" || document.readyState ==="complete") && !once_revslider11) {
                    once_revslider11 = true;
                    revinit_revslider11();
                }
            });
        } else {
            once_revslider11 = true;
            revinit_revslider11();
        }
	</script>
</body>

</html>
