<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta name="description"
        content="Earn up to 17% interest on your crypto, borrow against it from just 0% APR or swap instantly between 300+ market pairs. Open your account now!" />
    <title>{{ $title }} | {{ config("app.name") }}</title>
    <!-- critical preload -->
    <link rel="preload" href="{{ asset('frontpage/js/vendors/bootstrap.bundle.min.js') }}" as="script" />
    <link rel="preload" href="{{ asset('frontpage/css/style.css') }}" as="style" />
    <!-- icon preload -->
    <link rel="preload" href="{{ asset('frontpage/fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2"
        crossorigin />
    <link rel="preload" href="{{ asset('frontpage/fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2"
        crossorigin />
    <!-- font preload -->
    <link rel="preload" href="{{ asset('frontpage/fonts/merriweather-v30-latin-900.woff2') }}" as="font"
        type="font/woff2" crossorigin />
    <link rel="preload" href="{{ asset('frontpage/fonts/poppins-v20-latin-regular.woff2') }}" as="font"
        type="font/woff2" crossorigin />
    <link rel="preload" href="{{ asset('frontpage/fonts/poppins-v20-latin-300.woff2') }}" as="font" type="font/woff2"
        crossorigin />
    <link rel="preload" href="{{ asset('frontpage/fonts/poppins-v20-latin-700.woff2') }}" as="font" type="font/woff2"
        crossorigin />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontpage/css/style.css') }}" />
    <!-- Touch icon -->
    {{--
    <link rel="apple-touch-icon-precomposed"
        href="storage/app/public/photos/vc5tzdnXm5fMagjNnHSHIkGAQMsvQhniqWHkMlzp.png" /> --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- g-hide -->
    <style type="text/css">
        iframe.goog-te-banner-frame {
            display: none !important;
        }
    </style>
    <style type="text/css">
        iframe.skiptranslate {
            display: none !important;
        }
    </style>
    <style type="text/css">
        body {
            position: static !important;
            top: 0px !important;
        }
    </style>
    <!-- end-g-hide -->
    <script>
        // register service workers

        if ("serviceWorker" in navigator) {
            // window.addEventListener("load", () => {
            navigator.serviceWorker
                .register("/service-worker.js")
                .then((req) => {
                    if (!req.active) {
                        console.log("Service Worker: Registering...");
                    }
                })
                .catch((err) => console.error(`Service Worker ${err}`));
            // });
        }
    </script>
</head>

<body oncut="return false" oncopy="return false" onpaste="return false">
    <!-- page loader begin -->
    <div
        class="page-loader w-100 h-100 bg-white d-flex justify-content-center align-items-center position-fixed overflow-hidden">
        <div class="spinner-grow spinner-grow-sm text-primary"></div>
        <div class="spinner-grow spinner-grow-sm text-primary"></div>
        <div class="spinner-grow spinner-grow-sm text-primary"></div>
    </div>
    <!-- page loader end -->
    <!-- header begin -->
    <header class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="storage/app/public/photos/Lqy4zp2AVCH0alVhtJWNJIUh0rW6AKGXt75KoDGO.png" alt="logo" width="200"
                    height="45" class="d-inline-block" />
            </a>
            <div class="collapse navbar-collapse d-flex justify-content-between d-none d-xl-block" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" id="dropdown-home" data-bs-toggle="dropdown"
                            aria-expanded="false">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('markets') }}">Markets</a>
                    </li>
                    <li class="nav-item dropdown">
                        {{-- <a class="nav-link dropdown-toggle" href="/#" id="dropdown-company"
                            data-bs-toggle="dropdown" aria-expanded="false">Company</a> --}}
                        <span class="nav-link dropdown-toggle" style="cursor: default;" id="dropdown-company"
                            data-bs-toggle="dropdown" aria-expanded="false">Company</span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('about') }}">About</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('careers') }}">Careers</a>
                            </li>
                        </ul>
                    </li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/#" id="dropdown-resources" data-bs-toggle="dropdown"
                            aria-expanded="false">Resources</a>
                        <ul class="dropdown-menu dropdown-large-menu">
                            <li>
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a class="dropdown-item" href="contact">Help Center</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="legal-docs">Legal Docs<i
                                                        class="fas fa-gavel fa-sm"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6 border-start child-menu-text">
                                        <p>
                                            Spreads as low as 0.0 leverage plus fast execution. Get a
                                            competitive pricing advantage across a choice of
                                            instruments.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
                <div class="optional-link d-flex align-items-center ms-4 d-none d-xl-block">
                    <a href="{{ route('login') }}" class="btn btn-link me-3"><i class="fas fa-circle-user"></i>Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
                </div>

            </div>
        </div>
    </header>
    <!-- header end -->
    <main>
        {{ $slot }}
    </main>
    <!-- footer begin -->
    <footer class="py-5 in-cirro-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row gx-0 mb-3">
                        <div class="col-md-12 col-lg-3 footer-logo">
                            <img src="storage/app/public/photos/Lqy4zp2AVCH0alVhtJWNJIUh0rW6AKGXt75KoDGO.png"
                                alt="footer-logo" width="280" height="70" class="mb-1 d-block" />
                            <a class="lead footer-email" href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a>
                        </div>
                        <div class="col-md-12 col-lg-9">
                            <div class="d-flex flex-column flex-xl-row justify-content-xl-end">
                                <ul class="list-inline in-footer-link order-last order-xl-first">
                                    <li class="list-inline-item">
                                        <a href="contact">Contact</a>
                                    </li>
                                    <!-- <li class="list-inline-item"><a href="#">FAQ</a></li> -->
                                    <li class="list-inline-item">
                                        <a href="careers">Carreers</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="webtrade">WebTrader</a>
                                    </li>
                                    <!-- <li class="list-inline-item"><a href="#">Integrations</a></li> -->
                                    <li class="list-inline-item">
                                        <a href="security">Security</a>
                                    </li>
                                </ul>
                                <!-- SEC begin -->
                                <div class="social-media-list small hstack gap-3 ms-lg-5 order-first order-xl-last">
                                    <img src="{{ asset('frontpage/img/security.png') }}" alt="footer-logo"
                                        class="mb-1 d-block" />
                                </div>
                                <!-- SEC end -->
                            </div>
                            <!-- social media begin -->
                            <div class="social-media-list small hstack gap-3 ms-lg-5 order-first order-xl-last">
                                <div>
                                    <a href="/#https://www.facebook.com/#"
                                        class="color-facebook text-decoration-none"><i
                                            class="fab fa-facebook-square"></i> Facebook</a>
                                </div>
                                <div>
                                    <a href="/#https://twitter.com/#" class="color-twitter text-decoration-none"><i
                                            class="fab fa-twitter"></i>
                                        Twitter</a>
                                </div>
                                <div>
                                    <a href="/#some-link" class="color-linkedin text-decoration-none"><i
                                            class="fab fa-linkedin"></i> Linkedin</a>
                                </div>
                            </div>
                            <!-- social media end -->
                        </div>
                        <div class="col-md-12 col-lg-3 mt-5 d-flex">
                            <div class="align-self-end">
                                <p class="mb-0 copyright-text">
                                    Copyright © 2025 ElitesCapital-Trade. All Rights Reserved.
                                </p>
                            </div>
                        </div>
                        <!-- <div
                        class="col-md-12 col-lg-9 d-lg-flex justify-content-lg-end d-none d-lg-block">
                        <div class="align-self-end">
                            <nav class="nav in-footer-link-2">
                                <a
                                class="nav-link border-end-md"
                                href="img/docs/riskdisclosure.pdf">Risk Disclosure</a>
                                <a
                                class="nav-link border-end-md"
                                href="https://TradexPro.profoundcoinminingfx.com/img/docs/agreement.pdf">Customer Agreement</a>
                                <a class="nav-link pe-0" href="http://tradexpro.profoundcoinminingfx.com/temp/frontpage/img/docs/policy.pdf">AML policy</a>
                            </nav>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <div class="gtranslate_wrapper"></div>
    <!-- to top begin -->
    <div class="d-none d-md-block">
        <a href="/#" class="to-top fas fa-arrow-up text-decoration-none text-white"></a>
    </div>
    <!-- to top end -->
    <!-- javascript -->
    <script src="{{asset('frontpage/js/vendors/bootstrap.bundle.min.js')}}">
    </script>
    <script src="{{asset('frontpage/js/vendors/tradingview-widget.min.js')}}"></script>
    <script src="{{asset('frontpage/js/vendors/vanilla-marquee.min.js')}}"></script>
    <script src="{{asset('frontpage/js/utilities.min.js')}}"></script>
    <script src="{{asset('frontpage/js/config-theme.js')}}"></script>


    <script>
        $(document).keydown(function (event) {
            if (event.keyCode == 123) {
                return false;
            } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
                return false;
            }
        })
        document.addEventListener('contextmenu', event => event.preventDefault())
    </script>

    <script>
        window.gtranslateSettings = {
            default_language: "en",
            alt_flags: { "en": "usa" },
            wrapper_selector: ".gtranslate_wrapper",
            flag_style: "3d",
        };
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

    <script>
        // Function to hide the loader
        function hideLoader() {
            const loader = document.getElementById('page-loader');
            if (loader) {
                loader.style.display = 'none';
            }
        }

        // Set a timeout to hide the loader after 3 seconds (3000 milliseconds)
        setTimeout(hideLoader, 1000);
    </script>
</body>

</html>