<!DOCTYPE html>
<html lang="nl">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="Grafisch Vormgever, DTP, Webdesign, Logo, Huisstijl">
    <meta name="keywords" content="Grafisch Vormgever, DTP, Webdesign, Logo, Huisstijl ">
    <meta name="author" content="">

    <title>@yield('title')</title>
    <link rel="icon" href="/favicons/JD_Favicon_128x128px.png" sizes="any" type="image/png">

    <!-- Bootstrap Core CSS -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,700" rel="stylesheet" type="text/css"> -->
    
    <!-- Fonts -->
    <link href="/assets/css/plugins/font-awesome/css/font-awesome.min.css"rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

    <!-- Retina Images Plugin -->
    <script src="/assets/js/plugins/retina/retina.min.js"></script>
    
    <!-- DTB CSS -->
    <link href="/assets/dist/style.css" rel="stylesheet" type="text/css">
</head>
<body id="page-top">

    <div id="wrapper">

        @include('_partials.navbar')
 
        @yield('content')

        @include('_partials.footer')

    </div>

    <!-- Core JavaScript Files -->
    <script src="/assets/dist/app.js"></script>

    @yield('scripts')

</body>
</html>
