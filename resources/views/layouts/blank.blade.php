<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    @vite([
        'resources/darkpan/lib/owlcarousel/owl.carousel.min.js',
        'resources/darkpan/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css',
        'resources/darkpan/css/bootstrap.min.css',
        'resources/darkpan/css/style.css',
        'resources/js/sweetalert.js'
    ])
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        @yield('content')

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    @vite([
        'resources/darkpan/lib/chart/chart.min.js',
        'resources/darkpan/lib/easing/easing.min.js',
        'resources/darkpan/lib/waypoints/waypoints.min.js',
        'resources/darkpan/lib/owlcarousel/owl.carousel.min.js',
        'resources/darkpan/lib/tempusdominus/js/moment.min.js',
        'resources/darkpan/lib/tempusdominus/js/moment-timezone.min.js',
        'resources/darkpan/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js',

        'resources/darkpan/js/main.js',
    ])

    <!-- Template Javascript -->
</body>

</html>

