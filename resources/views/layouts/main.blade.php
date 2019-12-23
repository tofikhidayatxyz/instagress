<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>GramPro / Activity Demo</title>

    <meta name="description" content="See what inside without registration. Try it right now and decide is it really what you are looking for." />

    <!-- Facebook open graph tags -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Instagress" />
    <meta property="og:url" content="https://instagressalternative.com" />
    <meta property="og:title" content="Instagress — Best Instagram Automation Service" />
    <meta property="og:description" content="Automate your activity and get more real followers, likes and comments on Instagram." />
    <meta property="og:image" content="{{ asset('img/share-img-v=203.png') }}" />

    <!-- Twitter card tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@instagress" />
    <meta name="twitter:title" content="Instagress — Best Instagram Automation Service" />
    <meta name="twitter:description" content="Automate your activity and get more real followers, likes and comments on Instagram." />
    <meta name="twitter:image" content="{{ asset('img/share-img-v=203.png') }}" />

    <!-- Favicon & site image -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon-v=203.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('/favicon-v=203.png') }}" />
    <link rel="image_src" type="image/png" href="{{ asset('/img/share-img-v=203.png') }}a" />

    <!-- Apple touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('/img/apple-touch-icon-152x152-v=203.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('img/apple-touch-icon-144x144-v=203.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('img/apple-touch-icon-120x120-v=203.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114-v=203.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('img/apple-touch-icon-76x76-v=203.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/apple-touch-icon-72x72-v=203.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('img/apple-touch-icon-57x57-v=203.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/apple-touch-icon-60x60-v=203.png') }}" />

    <!-- Fonts -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" />

    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('css/styles.bundle-v=203.css') }}" media="all" />

    @yield('css')

    <!-- Scripts -->

    <script src="{{ asset('js/scripts.bundle-v=203.js') }}"></script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-43454158-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <style>
        html , body {
            overflow-y: unset !important;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script>

    $(document).ready(() => {
        $('.avatar, .account-actions .name a, .account-pages a', '.usermenu').each(function() {
            $(this).attr('data-popup-open', '#popup-account-signup');
        });
        
        $('*[data-popup-open=#popup-account-email]').remove()
        
    })
</script>

</head>

<body>
    @include('layouts.header')

    @yield('content')
    
    @include('layouts.footer')
    
</body>
    @if(\Session::has('login.error'))
    <div id="popup-shadow" data-popup-close="" style="position: fixed; left: 0px; right: 0px; top: 0px; bottom: 0px; margin: 0px; padding: 0px; overflow-y: scroll; background-color: rgba(0, 0, 0, 0.75); z-index: 1000;"></div>
    @endif
    @yield('script')
</html>