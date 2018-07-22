<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("admin/assets/images/favicon.png") }}">
    <title>{{ config('app.name') }}</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset("admin/assets/plugins/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{ asset("admin/assets/plugins/morrisjs/morris.css") }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset("admin/css/style.css") }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset("admin/css/colors/blue.css") }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    @include('admin.partials.header')

    @include('admin.partials.sidebar')
        @yield('content')


</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer"> © 2018 {{ config('app.name') }} </footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset("admin/assets/plugins/jquery/jquery.min.js") }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset("admin/assets/plugins/bootstrap/js/popper.min.js") }}"></script>
<script src="{{ asset("admin/assets/plugins/bootstrap/js/bootstrap.min.js") }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset("admin/js/jquery.slimscroll.js") }}"></script>
<!--Wave Effects -->
<script src="{{ asset("admin/js/waves.js") }}"></script>
<!--Menu sidebar -->
<script src="{{ asset("admin/js/sidebarmenu.js") }}"></script>
<!--stickey kit -->
<script src="{{ asset("admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js") }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset("admin/js/custom.min.js") }}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--sparkline JavaScript -->
<script src="{{ asset("admin/assets/plugins/sparkline/jquery.sparkline.min.js") }}"></script>
<!--morris JavaScript -->
<script src="{{ asset("admin/assets/plugins/raphael/raphael-min.js") }}"></script>
<script src="{{ asset("admin/assets/plugins/morrisjs/morris.min.js") }}"></script>
<!-- Chart JS -->
<!-- <script src="{{ asset("admin/js/dashboard1.js") }}"></script> -->
<script src="{{ asset("admin/js/dashboard4.js") }}"></script>

<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{ asset("admin/assets/plugins/styleswitcher/jQuery.style.switcher.js") }}"></script>
<script src="{{ asset("admin/assets/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="{{ asset("employee/app-assets/vendors/js/charts/echarts/echarts.js") }}" type="text/javascript"></script>
<script src="{{ asset("employee/app-assets/vendors/js/charts/echarts/chart/pie.js") }}" type="text/javascript"></script>
<script src="{{ asset("employee/app-assets/vendors/js/charts/echarts/chart/funnel.js") }}" type="text/javascript"></script>
    @yield('extra-script')
</body>

</html>
