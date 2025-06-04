{{-- <x-layouts.auth.simple :title="$title ?? null">
    {{ $slot }}
</x-layouts.auth.simple> --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title }} | {{ config("app.name") }}</title>

    @livewireStyles
    {{-- @assets --}}
    <link href="{{ asset('auth/main/assets/web-fonts/icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('auth/main/assets/web-fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('auth/main/assets/web-fonts/plugin.css')}}" rel="stylesheet" />

    <!-- Style css-->
    <link href="{{ asset('auth/main/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('auth/main/assets/css/plugins.css')}}" rel="stylesheet">

    {{--
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    {{-- @endassets --}}
    <style type="text/css">
        /* @property --tw-font-weight {
            syntax: "*";
            inherits: false;
        } */

        .session-status {
            font-size: 0.875rem
                /* 0.875rem = 14px */
            ;
            line-height: calc(1.25 / 0.875)
                /* calc(1.25 / 0.875) ≈ 1.4286 */
            ;
            color: oklch(0.627 0.194 149.214)
                /* oklch(0.627 0.194 149.214) */
            ;
            --tw-font-weight: 500
                /* 500 */
            ;
            font-weight: 500
                /* 500 */
            ;
        }
    </style>
    <style>
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:nth-of-type(1),
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:nth-of-type(2),
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:nth-of-type(3) {
            display: none;
        }

        div#google_translate_element div.goog-te-gadget-simple {
            margin: 0px;
            padding: 10px;
            display: inline-block;
            background-color: #0080db00;
            border: 1px solid #0080db00;
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value {
            color: white;
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value::after {
            content: "Translate Site";
            padding-right: 5px;
        }

        div#google_translate_element div.goog-te-gadget-simple img:nth-of-type(1) {
            display: none;
        }
    </style>
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
    <script src="{{ asset('auth/plugins/sweetalert/js/sweetalert.min.js')}}">
    </script>
    <script src="{{ asset('auth/plugins/sweetalerts/promise-polyfill.js')}}"></script>
    <link href="{{ asset('auth/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <script defer src="https://unpkg.com/sweetalert2%407.8.2/dist/sweetalert2.all.js"></script>
</head>

<body class="main-body leftmenu ltr dark-theme">

    <!-- Loader -->

    <!-- End Loader -->
    {{ $slot }}
    <div class="gtranslate_wrapper"></div>
    {{-- @livewireScripts --}}
    {{-- @assets --}}
    <!-- Jquery js-->
    <script src="{{asset('auth/main/assets/plugins/jquery/jquery.min.js')}}"></script>


    <!-- Bootstrap js-->
    <script src="{{asset('auth/main/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('auth/main/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Bootstrap Show Password js-->
    <script src="{{asset('auth/main/assets/js/bootstrap-show-password.min.js')}}"></script>


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    {{--
    <script type="text/javascript"
        src="http://tradexpro.profoundcoinminingfx.com/translate.google.com/translate_a/elementa0d8a0d8.html?cb=googleTranslateElementInit"></script>
    --}}

    <!-- generate-otp js -->
    <script src="{{asset('auth/main/assets/js/generate-otp.js')}}"></script>

    <!-- Perfect-scrollbar js -->
    <script src="{{asset('auth/main/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    <!-- Select2 js-->
    <script src="{{asset('auth/main/assets/plugins/select2/js/select2.min.js')}}"></script>

    <!-- Color Theme js -->
    <script src="{{asset('auth/main/assets/js/themeColors.js')}}"></script>

    <!-- swither styles js -->
    <script src="{{asset('auth/main/assets/js/swither-styles.js')}}"></script>

    {{-- @assets
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
    @endassets --}}

    <!-- Custom js -->
    <script src="{{asset('auth/main/assets/js/custom.js')}}"></script>
    <script src="{{asset('scripts/custom.js')}}"></script>
    <!-- Smartsupp Live Chat script -->


    {{--
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://use.fontawesome.com/b69656bbf6.js"></script>
    {{--
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap%405.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

    <script>
        window.gtranslateSettings = {
            default_language: "en",
            alt_flags: { "en": "usa" },
            wrapper_selector: ".gtranslate_wrapper",
            flag_style: "3d",
        };
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
    {{-- @endassets --}}
</body>

</html>