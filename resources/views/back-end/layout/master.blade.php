<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Upvex - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/')}}back-end/assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="{{asset('/')}}back-end/assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('/')}}back-end/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/')}}back-end/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
         <!-- plugin css -->
        <link href="http://127.0.0.1:8000/back-end/assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <link href="http://127.0.0.1:8000/back-end/assets/libs/toastr/toastr.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('/')}}back-end/assets/css/app.min.css" rel="stylesheet" type="text/css" />
 <!-- Summernote css -->
 <link href="{{asset('/')}}back-end/assets/libs/summernote/summernote-bs4.css" rel="stylesheet" type="text/css" />
    </head>

    <body>




        <!-- Begin page -->
        <div id="wrapper">

        @include('back-end.includes.header')

        @include('back-end.includes.sidebar')



<!-- Content begin -->

@yield('content')









@include('back-end.includes.footer')


@include('back-end.includes.setting')


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div> 

        <!-- Vendor js -->
        <script src="{{asset('/')}}back-end/assets/js/vendor.min.js"></script>

        <!-- Third Party js-->
        <script src="{{asset('/')}}back-end/assets/libs/peity/jquery.peity.min.js"></script>
        <script src="{{asset('/')}}back-end/assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="{{asset('/')}}back-end/assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="{{asset('/')}}back-end/assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js"></script>
        <script src="{{asset('/')}}back-end/assets/libs/toastr/toastr.min.js"></script>

        <!-- Dashboard init -->
        <script src="{{asset('/')}}back-end/assets/js/pages/dashboard-1.init.js"></script>
        
        <!-- App js -->
        <script src="{{asset('/')}}back-end/assets/js/functions.js"></script>
        
        <!-- App js -->
        <script src="{{asset('/')}}back-end/assets/js/app.min.js"></script>
        
        @yield('extraURL')

        @include('back-end.src.toastr')

        <script>
  @yield('script')

</script>

        

    </body>
</html>