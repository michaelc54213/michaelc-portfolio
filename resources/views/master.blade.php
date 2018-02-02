<html>
<head>
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   <!-- Material Design fonts -->
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link href="{{ secure_asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ secure_asset('css/nivo-lightbox.css') }}" rel="stylesheet" />
        <link href="{{ secure_asset('css/nivo-lightbox-theme/default/default.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ secure_asset('css/animate.css') }}" rel="stylesheet" />
        <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/default.css') }}" rel="stylesheet">

 
</head>
<body>

@include('shared.navbar')

@yield('content')

@include('shared.footer')

<!-- Core JS Files -->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script scr="public/js/jquery.easing.min.js"></script>
    <script scr="public/js/classie.js"></script>
    <script scr="public/js/gnmenu.js"></script>
    <script scr="public/js/jquery.scrollTo.js"></script>
    <script scr="public/js/stellar.js"></script>
    <script scr="public/js/nivo-lightbox.min.js"></script>
    <!-- Custome JS for Theme -->
    <script scr="public/js/custom.js"></script>
</body>
</html>
