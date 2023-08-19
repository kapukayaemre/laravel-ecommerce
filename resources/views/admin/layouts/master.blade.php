<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset("backend/assets/images/favicon/favicon.png") }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset("backend/assets/images/favicon/favicon.png") }}" type="image/x-icon">
    <title>Tivo - Premium Admin Template</title><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/font-awesome.css") }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/icofont.css") }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/themify.css") }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/flag-icon.css") }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/feather-icon.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/scrollbar.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/animate.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/date-picker.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/owlcarousel.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/prism.css") }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/vendors/bootstrap.css") }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/style.css") }}">
    <link id="color" rel="stylesheet" href="{{ asset("backend/assets/css/color-1.css") }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset("backend/assets/css/responsive.css") }}">
</head>
<body>
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"> </div>
    <div class="dot"></div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    @include("admin.layouts.partials.header")
    <!-- Page Header Ends-->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include("admin.layouts.partials.sidebar")
        <!-- Page Sidebar Ends-->

        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Ecommerce</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item active">Ecommerce</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid dashboard-2">
                <div class="row">
                    @yield("content")
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>

        <!-- footer start-->
        @include("admin.layouts.partials.footer")
        <!-- footer end -->
    </div>
</div>
<!-- latest jquery-->
<script src="{{ asset("backend/assets/js/jquery-3.6.0.min.js") }}"></script>
<!-- Bootstrap js-->
<script src="{{ asset("backend/assets/js/bootstrap/bootstrap.bundle.min.js") }}"></script>
<!-- feather icon js-->
<script src="{{ asset("backend/assets/js/icons/feather-icon/feather.min.js") }}"></script>
<script src="{{ asset("backend/assets/js/icons/feather-icon/feather-icon.js") }}"></script>
<!-- scrollbar js-->
<script src="{{ asset("backend/assets/js/scrollbar/simplebar.js") }}"></script>
<script src="{{ asset("backend/assets/js/scrollbar/custom.js") }}"></script>
<!-- Sidebar jquery-->
<script src="{{ asset("backend/assets/js/config.js") }}"></script>
<script src="{{ asset("backend/assets/js/sidebar-menu.js") }}"></script>
<script src="{{ asset("backend/assets/js/chart/knob/knob.min.js") }}"></script>
<script src="{{ asset("backend/assets/js/chart/knob/knob-chart.js") }}"></script>
<script src="{{ asset("backend/assets/js/chart/apex-chart/apex-chart.js") }}"></script>
<script src="{{ asset("backend/assets/js/chart/apex-chart/stock-prices.js") }}"></script>
<script src="{{ asset("backend/assets/js/prism/prism.min.js") }}"></script>
<script src="{{ asset("backend/assets/js/clipboard/clipboard.min.js") }}"></script>
<script src="{{ asset("backend/assets/js/custom-card/custom-card.js") }}"></script>
<script src="{{ asset("backend/assets/js/notify/bootstrap-notify.min.js") }}"></script>
<script src="{{ asset("backend/assets/js/datepicker/date-picker/datepicker.js") }}"></script>
<script src="{{ asset("backend/assets/js/datepicker/date-picker/datepicker.en.js") }}"></script>
<script src="{{ asset("backend/assets/js/datepicker/date-picker/datepicker.custom.js") }}"></script>
<script src="{{ asset("backend/assets/js/owlcarousel/owl.carousel.js") }}"></script>
<script src="{{ asset("backend/assets/js/typeahead/handlebars.js") }}"></script>
<script src="{{ asset("backend/assets/js/typeahead/typeahead.bundle.js") }}"></script>
<script src="{{ asset("backend/assets/js/typeahead/typeahead.custom.js") }}"></script>
<script src="{{ asset("backend/assets/js/typeahead-search/handlebars.js") }}"></script>
<script src="{{ asset("backend/assets/js/typeahead-search/typeahead-custom.js") }}"></script>
<script src="{{ asset("backend/assets/js/dashboard/dashboard_2.js") }}"></script>
<!-- Template js-->
<script src="{{ asset("backend/assets/js/script.js") }}"></script>
<script src="{{ asset("backend/assets/js/theme-customizer/customizer.js") }}">  </script>
<!-- login js-->
</body>
</html>
