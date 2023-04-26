<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Muli:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('../css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('../css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('../css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('../css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('../css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('../fonts/icomoon/style.css')}}">
<link rel="stylesheet" href="{{asset('../fonts/flaticon/font/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('../css/aos.css')}}">
<link rel="stylesheet" href="{{asset('../css/style.css')}}">
@yield('css')
<title>BDE Douala</title>
</head>
<body>

@yield('content')

</body>


<script src="{{asset('../jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('../popper.min.js')}}"></script>
<script src="{{asset('../bootstrap.min.js')}}"></script>
<script src="{{asset('../owl.carousel.min.js')}}"></script>
<script src="{{asset('../jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('../jquery.waypoints.min.js')}}"></script>
<script src="{{asset('../jquery.fancybox.min.js')}}"></script>
<script src="{{asset('../jquery.sticky.js')}}"></script>
<script src="{{asset('../aos.js')}}"></script>
<script src="{{asset('../custom.js')}}"></script>
@stack('scripts')

<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bceae104c296695","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>
</html>


</html>