{{-- <x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar> --}}

<!DOCTYPE html>
<html lang="en" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-arp-injected="true" style="height: 100%;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{{ $title }} | {{ config("app.name") }}</title>
    <link rel="stylesheet" href="{{ asset('client-dashboard-assets/home/all.min.css')}}">
    {{--
    <link rel="stylesheet" href="{{ asset('client-dashboard-assets/dash/css/bootstrap.min.css')}}"> --}}
    <link href="https://db.onlinewebfonts.com/c/061b39e95e1a0bd25e8d294af8596b2a?family=Font+Awesome+5+Free"
        rel="stylesheet" type="text/css" />

    <link rel="stylesheet"
        href="{{ asset('client-dashboard-assets/themes/purposeTheme/assets/libs/animate.css/animate.min.css')}}">
    <link rel="stylesheet"
        href="{{ asset('client-dashboard-assets/themes/purposeTheme/assets/libs/@fortawesome/fontawesome-pro/css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('client-dashboard-assets/home/bootstrap.css')}}" type="text/css">
    <link href="{{ asset('client-dashboard-assets/home/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{ asset('client-dashboard-assets/home/responsive.dataTables.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('client-dashboard-assets/home/dark_blue_adminux.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('client-dashboard-assets/home/margin.css')}}" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <style>
        .mgm {
            border-radius: 7px;
            position: fixed;
            z-index: 90;
            bottom: 80px;
            right: 50px;
            background: #fff;
            padding: 10px 27px;
            box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
        }

        .mgm a {
            font-weight: 700;
            display: block;
            color: #0080db;
        }

        .mgm a,
        .mgm a:active {
            transition: all .2s ease;
            color: #0080db;
        }
    </style>

    <!-- g-hide -->
    <style type="text/css">
        iframe.goog-te-banner-frame {
            display: none !important;
        }
    </style>
    <style type="text/css">
        body {
            position: static !important;
            top: 0px !important;
        }
    </style>
    <style>
        .tradingview-widget-copyright {
            font-size: 13px !important;
            line-height: 32px !important;
            text-align: center !important;
            vertical-align: middle !important;
            font-family: -apple-system, BlinkMacSystemFont, Roboto, Ubuntu, sans-serif !important;
            color: #9db2bd !important;
        }

        .tradingview-widget-copyright .blue-text {
            color: #2962FF !important;
        }

        .tradingview-widget-copyright a {
            text-decoration: none !important;
            color: #9db2bd !important;
        }

        .tradingview-widget-copyright a:visited {
            color: #9db2bd !important;
        }

        .tradingview-widget-copyright a:hover .blue-text {
            color: #1E53E5 !important;
        }

        .tradingview-widget-copyright a:active .blue-text {
            color: #1848CC !important;
        }

        .tradingview-widget-copyright a:visited .blue-text {
            color: #2962FF !important;
        }
    </style>
    <!-- end-g-hide -->
    <style>
        .notification-container {
            position: relative;
            display: inline-block;
        }

        .notification-bell {
            font-size: 24px;
            color: black;
            /* Ensures bell is visible */
            cursor: pointer;
            position: relative;
        }

        .notification-bell .notification-count {
            background-color: red;
            color: white;
            font-size: 12px;
            padding: 3px 7px;
            border-radius: 50%;
            position: absolute;
            top: -5px;
            right: -10px;
        }

        .notification-dropdown {
            display: none;
            position: absolute;
            top: 40px;
            right: 0;
            background: #fff;
            /* White background */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            /* Stronger shadow for visibility */
            border-radius: 5px;
            width: 320px;
            padding: 15px;
            z-index: 1000;
            border: 1px solid #ddd;
        }

        .notification-dropdown h4 {
            margin: 0;
            padding-bottom: 8px;
            border-bottom: 1px solid #ccc;
            color: #333;
            /* Dark text for visibility */
            font-size: 16px;
        }

        .notification-dropdown p {
            font-size: 14px;
            padding: 10px 0;
            color: #222;
            /* Darker text */
            line-height: 1.6;
            text-align: left;
        }

        /* Show dropdown when bell is clicked */
        .notification-container:hover .notification-dropdown {
            display: block;
        }

        .ncard {
            box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgba(0, 0, 0, .2);
            margin: 0.5px;
            padding: 15px
        }

        input[type=number],
        input[type=text],
        input[type=email],
        input[type=file],
        textarea {
            border: 1px solid grey;
        }

        select {
            border: 2px solid grey;
        }

        a {
            text-decoration: none;
        }

        .blink_me {
            animation: blinker 1s linear infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        .btn-success {
            background-color: #5D99E6 !important;
            /* Change to your desired color */
            border-color: #5D99E6 !important;
            /* Adjust border color */
        }

        .btn-success:hover {
            background-color: #5D99E6 !important;
            border-color: #5D99E6 !important;
        }

        .btn-primary {
            background-color: #5D99E6 !important;
            /* Change to your desired color */
            border-color: #5D99E6 !important;
            /* Adjust border color */
        }

        .btn-primary:hover {
            background-color: #5D99E6 !important;
            border-color: #5D99E6 !important;
        }

        .btn-outline-light {
            margin-right: 6px;
            /* Adds space to the right of each button */
            /* Adds space below each button */
        }
    </style>
    <style>
        .blinking-dot {
            width: 10px;
            height: 10px;
            background-color: green;
            border-radius: 50%;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script defer type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script defer type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="menuclose-right menuclose" style="position: relative; min-height: 100%; top: 0px;">
    @include('partials.client-admin-partials.head')
    @include('partials.client-admin-partials.sidebar')
    <div class="wrapper-content">
        <div class="container" style="max-width:1400px">
            <div class="d-flex align-items-center p-1 bg-dark text-white rounded shadow">
                <i class="fas fa-user-circle fa-2x me-3"></i> <!-- User Icon -->
                <p class="mb-0 fs-5"><b>Username:</b> {{ auth()->user()->accountProfile->username }}</p>
            </div>
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript"
                    src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                        {
                            "symbols": [{
                                "proName": "FOREXCOM:SPXUSD",
                                "title": "S&P 500"
                            },
                            {
                                "proName": "FOREXCOM:NSXUSD",
                                "title": "Nasdaq 100"
                            },
                            {
                                "proName": "FX_IDC:EURUSD",
                                "title": "EUR/USD"
                            },
                            {
                                "proName": "BITSTAMP:BTCUSD",
                                "title": "BTC/USD"
                            },
                            {
                                "proName": "BITSTAMP:ETHUSD",
                                "title": "ETH/USD"
                            }
                            ],
                                "showSymbolLogo": true,
                                    "colorTheme": "dark",
                                        "isTransparent": false,
                                            "displayMode": "relative",
                                                "locale": "en"
                        }
                    </script>
            </div>
            <!-- TradingView Widget END -->
            {{ $slot }}
        </div>

    </div>

    <div class="mgm" style="display: none;">
        <div class="txt" style="color:black;"></div>
    </div>

    <!-- Add the language switcher -->
    <div class="gtranslate_wrapper"></div>


    <footer class="footer-content" style="bottom: unset;">
        <div class="container ">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-16 col-lg-8 col-xl-8">
                    Copyright {{ date('Y') }} <a href="#" target="_blank" class="">{{ env("APP_NAME") }}</a>
                </div>
            </div>
        </div>
    </footer>

    {{--
    <script data-cfasync="false" src="#"></script> --}}

    <script>
        window.gtranslateSettings = {
            default_language: "en",
            alt_flags: { "en": "usa" },
            wrapper_selector: ".gtranslate_wrapper",
            flag_style: "3d",
        };
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

    <script type="text/javascript">
        var listCountries = ['South Africa', 'USA', 'Germany', 'France', 'Italy', 'Turkey', 'Australia', 'Brazil', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'China', 'Mexico', 'Venezuela', 'USA', 'Sweden', 'Italy', 'South Africa', 'Italy', 'USA', 'United Kingdom', 'Italy', 'Greece', 'Cuba', 'USA', 'Portugal', 'Austria', 'Spain', 'Panama', 'South Africa', 'China', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
        var listPlans = ['$51,000', '$14,500', '$40,000', '$41,000', '$10,000', '$50,000', '$52,300', '$9,700', '$10,000', '$4,500', '$9,500', '$34,000', '$42,000', '$4,600', '$3,700', '$27,500', '$58,623', '$31,600'];
        var transarray = ['just <b>invested</b>', 'has <b>withdrawn</b>', 'is <b>trading with</b>'];

        /*var listCountries = ['UK', 'UK', 'Germany', 'France', 'Italy', 'UK', 'South Africa', 'UK', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'UK', 'UK', 'UK', 'UK', 'Sweden', 'South Africa', 'UK', 'Italy', 'UK', 'United Kingdom', 'UK', 'Greece', 'Cuba', 'UK', 'Portugal', 'Austria', 'South Africa', 'Panama', 'UK', 'UK', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
        var listPlans = ['£51,000', '£14,500', '£40,000', '£41,000', '£10,000', '£50,000', '£52,300', '£9,700', '£10,000', '£4,500', '£9,500', '£34,000', '£42,000', '£4,600', '£3,700', '£27,500','£58,623','£31,600'];
        var transarray = ['just <b>invested</b>', 'has <b>withdrawn</b>', 'is <b>trading with</b>'];*/
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var run = setInterval(request, interval);

        function request() {
            clearInterval(run);
            interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
            var country = listCountries[Math.floor(Math.random() * listCountries.length)];
            var transtype = transarray[Math.floor(Math.random() * transarray.length)];
            var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
            var msg = 'Someone from <b>' + country + '</b> ' + transtype + ' <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + '</a>';
            $(".mgm .txt").html(msg);
            $(".mgm").stop(true).fadeIn(300);
            window.setTimeout(function () {
                $(".mgm").stop(true).fadeOut(300);
            }, 10000);
            run = setInterval(request, interval);
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(function () {
                let alert = document.querySelector('.alert-dismissible');
                if (alert) {
                    alert.classList.remove('show');
                    alert.classList.add('fade');
                }
            }, 5000); // 5000 milliseconds = 5 seconds
        });
    </script>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('client-dashboard-assets/home/jquery-2.1.1.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('client-dashboard-assets/home/popper.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('client-dashboard-assets/home/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('client-dashboard-assets/home/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{ asset('client-dashboard-assets/home/ie10-viewport-bug-workaround.js')}}"></script>
    <script src="{{ asset('client-dashboard-assets/home/circle-progress.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('client-dashboard-assets/home/jquery.sparkline.min.js')}}"></script>

    <script src="{{ asset('client-dashboard-assets/home/utils.js')}}" type="text/javascript"></script>
    <script src="{{ asset('client-dashboard-assets/home/jquery.spincrement.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('client-dashboard-assets/home/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('client-dashboard-assets/home/dataTables.bootstrap4.js')}}"></script>
    <script src="{{ asset('client-dashboard-assets/dash/js/core/popper.min.js')}}"></script>
    <script src="{{ asset('client-dashboard-assets/dash/js/core/bootstrap.min.js')}}"></script>
    <script src="{{ asset('client-dashboard-assets/home/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('client-dashboard-assets/home/adminux.js')}}" type="text/javascript"></script>
    <script src="{{ asset('client-dashboard-assets/home/dashboard1.js')}}"></script>
    <script src="{{ asset('client-dashboard-assets/home/print.js')}}"></script>

    <script>
        // get submitted form data
        function copyWallet(ev) {
            let form = ev.target;
            let input = form.querySelector('input[type="text"]');
            let walletAddress = input.value;
            // Copy the wallet address to clipboard
            navigator.clipboard.writeText(walletAddress).then(function () {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Address Copied',
                    text: "The wallet address has been copied to your clipboard.",
                    showConfirmButton: false,
                    timer: 1500
                });
            }, function (err) {
                console.error('Could not copy text: ', err);
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Address Not Copied',
                    text: "Could not copy text: " + err,
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        }
    </script>

</body>

</html>