<!DOCTYPE html>
<html>
<head>

    <!-- Site made with Mobirise Website Builder v5.6.13, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.6.13, mobirise.com">
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:image:src" content="">
    <meta property="og:image" content="">
    <meta name="twitter:title" content="Home">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">

    <title>RBH Wood Shop - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" as="style" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:100,300,400,400italic,700'>
    {{--  <link rel="stylesheet" href="{{ asset('assets/web/assets/mobirise-icons2/mobirise2.css') }}">  --}}


    <link rel="stylesheet" href="{{ asset('assets/custom/custom.css') }}">


    {{--  Select2  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css" integrity="sha512-aD9ophpFQ61nFZP6hXYu4Q/b/USW7rpLCQLX6Bi0WJHXNO7Js/fUENpBQf/+P4NtpzNX0jSgR5zVvPOJp+W2Kg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>

    <section data-bs-version="5.1" class="menu menu1 cid-tj7EjrLEYA" once="menu" id="menu1-0">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/logo.svg') }}" alt="RBH Wood Shop" style="height: 3rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap" id="Logo_text">
                        <a class="navbar-caption text-primary display-7" href="{{ route('home') }}" style="font-family: Oswald; font-size: 41px; color: #2991d6 !important;">
                            RBH Wood Shop
                        </a>
                    </span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="{{ route('portfolio.index') }}">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="{{ route('aboutUs') }}">About us</a>
                        </li>
                        {{--  <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-4" href="{{ route('workplace') }}">Workplace</a>
                        </li>  --}}
                        <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-4" href="{{ route('contacts') }}">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    @yield('content')

    <section data-bs-version="5.1" class="footer7 cid-tj7EMCi01Q" once="footers" id="footer7-3">
        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                        2022 - RBH Wood Shop
                        <ul class="menu-fppter float-end">
                            <li>
                                Follow Us!
                                <a class="iconfont-wrapper bg-facebook m-2" target="_blank" href="https://www.facebook.com/profile.php?id=100064042710217">
                                    <span class="socicon-facebook socicon"></span>
                                </a>
                            </li>
                            <li>
                                |
                            </li>
                            <li>
                                <small>developed by <Strong> <a href="https://www.facebook.com/mateus.brandt/">Mateus Brandt</a></Strong></small>
                            </li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/smoothscroll/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/ytplayer/index.js') }}"></script>
    <script src="{{ asset('assets/dropdown/js/navbar-dropdown.js') }}"></script>
    {{--  <script src="{{ asset('assets/theme/js/script.js') }}"></script>  --}}

    {{--  selec2  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {

            $('#category').select2({
                width: 'resolve', // need to override the changed default
                tags: true
            });

            $('#tags').select2({
                width: 'resolve', // need to override the changed default
                tags: true,
                tokenSeparators: [',', ';']
            });

            $('#images').change(function (event) {
                $( "#preview" ).empty()
                for (const file of event.target.files) {
                    var tmppath = URL.createObjectURL(file);
				    $('#preview').append($('<img>').attr('src', tmppath));
                }
            })

            $('#cover').change(function (event) {
                $( "#preview_cover" ).empty()
                for (const file of event.target.files) {
                    var tmppath = URL.createObjectURL(file);
				    $('#preview_cover').append($('<img>').attr('src', tmppath));
                }
            })

        });

    </script>

</body>
</html>
