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
    <title>RBH Whood Shop - @yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:100,300,400,400italic,700'>

    <!-- CSS -->
    <link rel='stylesheet' href="{{ asset('css/global.css') }}">
    <link rel='stylesheet' href="{{ asset('css/structure.css') }}">
    <link rel='stylesheet' href="{{ asset('css/be_style.css') }}" id="style-static">
    <link rel='stylesheet' href="{{ asset('css/custom.css') }}">
    {{--  <link rel='stylesheet' href="{{ asset('css/bootstrap.min.css') }}">  --}}

    {{--  Select2  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css" integrity="sha512-aD9ophpFQ61nFZP6hXYu4Q/b/USW7rpLCQLX6Bi0WJHXNO7Js/fUENpBQf/+P4NtpzNX0jSgR5zVvPOJp+W2Kg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="blog with_aside aside_right color-blue layout-full-width header-modern sticky-header sticky-white subheader-title-left">
    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper" class="flv_header_portfolio">
            <!-- Header -->
            <header id="Header">
                <!-- Header -  Logo and Menu area -->
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <!-- Logo-->
                                <div class="logo">
                                    <a id="logo" href="{{ route('home') }}" title="BeTheme - Best Html Theme Ever" style="font-family: Oswald; font-size: 31px">
                                        <img class="scale-with-grid" src="{{ asset('images/logo.svg') }}" style="width: 41px" />
                                        <span id="Logo_text">
                                            RBH Wood Shop
                                        </span>
                                    </a>
                                </div>
                                <!-- Main menu-->
                                <div class="menu_wrapper ">
                                    <nav id="menu" >
                                        <ul id="menu" class="menu">
                                            <li @if(Route::is('home') || Route::is('portfolio.*'))class="current-menu-item" @endif>
                                                <a href="{{ route('home') }}"><span>Portfolio</span></a>
                                            </li>
                                            <li @if(Route::is('aboutUs'))class="current-menu-item" @endif>
                                                <a href="{{ route('aboutUs') }}"><span>About Us</span></a>
                                            </li>
                                            <li @if(Route::is('workplace'))class="current-menu-item" @endif>
                                                <a href="{{ route('workplace') }}"><span>Workplace</span></a>
                                            </li>
                                            <li @if(Route::is('contacts'))class="current-menu-item" @endif>
                                                <a href="{{ route('contacts') }}"><span>Contacts</span></a>
                                            </li>
                                        </ul>
                                    </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!--Subheader area - only for certain pages -->
        <div id="Subheader">
            <div class="container">
                <div class="column one">
                    <h1 class="title">@yield('title')</h1>
                    <!--BreadCrumbs area-->
                    {{--  <ul class="breadcrumbs">
                        <li>
                            <a href="index.html">Home</a><span><i class="icon-right-open"></i></span>
                        </li>
                        <li>
                            <a href="portfolio-sidebar-grid.html">
                                @yield('breadcrumbs') Portfolio
                            </a>
                        </li>
                    </ul>  --}}
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">

                @yield('content')

                <!-- Sidebar area-->
                <div class="four columns">
                    <div class="widget-area clearfix">
                        <!-- Search form-->
                        <aside id="search-5" class="widget widget_search">
                            <h3>Search</h3>
                            <form method="get" action="index.html">
                                <input type="text" class="field" name="s" placeholder="Enter your search" />
                                <input type="submit" class="submit" value="Search" />
                            </form>
                        </aside>
                        <aside id="tp_widget_recent_tweets-2" class="widget widget_tp_widget_recent_tweets">
                            <h3>Recent Tweets</h3>
                            <div class="tp_recent_tweets">
                                <ul>
                                    <li>
                                        <span>Read about ex-googlers workshop in Warsaw at Bartosz Goralewicz\s Blog <a href="http://t.co/OwQblVzOTg" target="_blank">http://t.co/OwQblVzOTg</a> <a href="https://twitter.com/search?q=SEO" title="Search #SEO" target="_blank">#SEO</a></span>
                                        <br>
                                        <a class="twitter_time" target="_blank" href="#">over a year ago</a>
                                    </li>
                                    <li>
                                        <span>Modern &amp; Fresh <a href="https://twitter.com/search?q=WordPress" title="Search #WordPress" target="_blank">#WordPress</a> <a href="https://twitter.com/search?q=Theme" title="Search #Theme" target="_blank">#Theme</a> available for sale on <a href="https://twitter.com/search?q=Themeforest" title="Search #Themeforest" target="_blank">#Themeforest</a> <a href="http://t.co/RUBFWL3ovs" target="_blank">http://t.co/RUBFWL3ovs</a></span>
                                        <br>
                                        <a class="twitter_time" target="_blank" href="#">over a year ago</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <aside id="widget_mfn_flickr-2" class="widget widget_mfn_flickr">
                            <h3>Contacts</h3>
                            <ul>
                                <li>+1(111) 1111-1111</li>
                            </ul>
                        </aside>
                        <!--Tag Cloud -->
                        <aside id="tag_cloud-3" class="widget widget_tag_cloud">
                            <h3>Tag cloud</h3>
                            <div class="tagcloud">
                                <a href='tag-page.html' class='tag-link-20' title='3 topics'>css3</a> <a href='tag-page.html' class='tag-link-21' title='2 topics'>design</a> <a href='tag-page.html' class='tag-link-22' title='2 topics'>eclipse</a> <a href='tag-page.html' class='tag-link-23' title='2 topics'>framework</a> <a href='tag-page.html' class='tag-link-24' title='2 topics'>grid</a> <a href='tag-page.html' class='tag-link-25' title='2 topics'>html5</a> <a href='tag-page.html' class='tag-link-26' title='2 topics'>mysql</a> <a href='tag-page.html' class='tag-link-27' title='2 topics'>themeforest</a> <a href='tag-page.html' class='tag-link-28' title='2 topics'>wordpress</a> <a href='tag-page.html' class='tag-link-29' title='2 topics'>zend</a>
                            </div>
                        </aside>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer-->
        <footer id="Footer" class="clearfix">
            <!-- Footer copyright-->
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                        <div class="copyright">
                            &copy; 2017 BeTheme - BeantownThemes - HTML by <a href="http://bit.ly/1M6lijQ" target="_blank">BeantownThemes</a>
                        </div>
                        <!--Social info area-->
                        <ul class="social">
                            <li class="skype">
                                <a href="#" title="Skype"><i class="icon-skype"></i></a>
                            </li>
                            <li class="facebook">
                                <a href="https://www.facebook.com/Beantown-Themes-653197714728193" title="Facebook"><i class="icon-facebook"></i></a>
                            </li>
                            <li class="googleplus">
                                <a href="https://plus.google.com/" title="Google+"><i class="icon-gplus"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="https://twitter.com/BeantownThemes" title="Twitter"><i class="icon-twitter"></i></a>
                            </li>
                            <li class="vimeo">
                                <a href="https://vimeo.com/" title="Vimeo"><i class="icon-vimeo"></i></a>
                            </li>
                            <li class="youtube">
                                <a href="#" title="YouTube"><i class="icon-play"></i></a>
                            </li>
                            <li class="flickr">
                                <a href="https://www.flickr.com/" title="Flickr"><i class="icon-flickr"></i></a>
                            </li>
                            <li class="pinterest">
                                <a href="https://www.pinterest.com/" title="Pinterest"><i class="icon-pinterest"></i></a>
                            </li>
                            <li class="dribbble">
                                <a href="#" title="Dribbble"><i class="icon-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- JS -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('js/jquery-migrate-3.3.2.js') }}"></script>
    <script src="{{ asset('js/mfn.menu.js') }}"></script>
    <script src="{{ asset('js/jquery.plugins.js') }}"></script>
    <script src="{{ asset('js/jquery.jplayer.min.js') }}"></script>
    <script src="{{ asset('js/animations/animations.js') }}"></script>
    <script src="{{ asset('js/email.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>

    {{--  selec2  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#category').select2({
                tags: true
            });

            $('#tags').select2({
                width: 'resolve', // need to override the changed default
                tags: true,
                tokenSeparators: [',', ';']
            });

            $('#images').change(function (event) {
                for (const file of event.target.files) {
                    var tmppath = URL.createObjectURL(file);
				    $('#preview').append($('<img>').attr('src', tmppath))
                }
            })
        });

    </script>

</body>

</html>
