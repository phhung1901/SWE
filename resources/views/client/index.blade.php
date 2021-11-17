<!doctype html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="{{asset('/assets/client/img/favicon.png')}}" type="image/png" />
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/assets/client/css/swatch.scss.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/client/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/client/css/linearicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/client/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/client/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/client/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/client/css/venobox.css')}}s">
    <link rel="stylesheet" href="{{asset('/assets/client/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/client/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/client/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/client/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/client/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/client/css/style-smb.scss.css')}}">
</head>

<body>

    <!-- Header -->
    @include('client.layout.menu')
    <!-- End Header -->

    <!-- Main -->
    <div class="xxx" style="padding-top: 0px;">

        @yield('content')
        <!-- End Main -->

        <!-- Footer -->
        @include('client.layout.footer')

    </div>
    <!-- wrapper -->


    <!-- End Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!-- <script src="./js/api.jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/imagesloaded.pkgd.min.js"></script>
    <script src="./js/jquery-ui.js"></script>
    <script src="./js/jquery.fancybox.min.js"></script>
    <script src="./js/jquery.flexslider.js"></script>
    <script src="./js/jquery.nice-select.min.js"></script>
    <script src="./js/jquery.scrollUp.min.js"></script>
    <script src="./js/option_selection.js"></script>
    <script src="./js/plugins.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/venobox.min.js"></script> -->
    <script src="{{asset('/assets/client/js/main.js')}}"></script>
</body>

</html>