<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/tunis/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2023 05:44:56 GMT -->

<head>
    <meta charset="utf-8">
    <title> Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/preloader.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/circle.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="{{ asset('assets') }}/css/skins/yellow.css" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{ asset('assets') }}/css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{ asset('assets') }}/css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{ asset('assets') }}/css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet"
        href="{{ asset('assets') }}/css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod"
        href="{{ asset('assets') }}/css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta"
        href="{{ asset('assets') }}/css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange"
        href="{{ asset('assets') }}/css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple"
        href="{{ asset('assets') }}/css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{ asset('assets') }}/css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen"
        href="{{ asset('assets') }}/css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/styleswitcher.css" />

    <!-- Modernizr JS File -->
    <script src="{{ asset('assets') }}/js/modernizr.custom.js"></script>
</head>

<body class="{!! !empty($className) ? $className : '' !!}">
    <!-- Live Style Switcher Starts - demo only -->


    @include('layouts.sidebar')
    @yield('content')



    <script src="{{ asset('assets') }}/js/jquery-3.5.0.min.js"></script>
    <script src="{{ asset('assets') }}/js/styleswitcher.js"></script>
    <script src="{{ asset('assets') }}/js/preloader.min.js"></script>
    <script src="{{ asset('assets') }}/js/fm.revealator.jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/js/masonry.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/js/classie.js"></script>
    <script src="{{ asset('assets') }}/js/cbpGridGallery.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.hoverdir.js"></script>
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>

</body>


<!-- Mirrored from slimhamdi.net/tunis/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2023 05:45:14 GMT -->

</html>
