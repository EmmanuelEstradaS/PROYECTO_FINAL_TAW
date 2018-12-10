<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>  </title>
    <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CNoto+Sans:400,700" media="all"><script>
      WebFont.load({
        google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
      });
    </script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("admin/assets/img/apple-touch-icon.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("admin/assets/img/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("admin/assets/img/favicon-16x16.png") }}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset("admin/assets/vendors/css/base/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/assets/vendors/css/base/elisyam-1.5.min.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/assets/css/bootstrap-select/bootstrap-select.min.css") }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body id="page-top">

    @yield('content')


<!-- Begin Vendor Js --> 
<script src="{{ asset("admin/assets/vendors/js/base/jquery.min.js") }}"></script>
<script src="{{ asset("admin/assets/vendors/js/base/core.min.js") }}"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="{{ asset("admin/assets/vendors/js/datatables/datatables.min.js") }}"></script>
<script src="{{ asset("admin/assets/vendors/js/datatables/dataTables.buttons.min.js") }}"></script>
<script src="{{ asset("admin/assets/vendors/js/datatables/jszip.min.js") }}"></script>
<script src="{{ asset("admin/assets/vendors/js/datatables/buttons.html5.min.js") }}"></script>
<script src="{{ asset("admin/assets/vendors/js/datatables/pdfmake.min.js") }}"></script>
<script src="{{ asset("admin/assets/vendors/js/datatables/vfs_fonts.js") }}"></script>
<script src="{{ asset("admin/assets/vendors/js/datatables/buttons.print.min.js") }}"></script>
  
<script src="{{ asset("admin/assets/vendors/js/nicescroll/nicescroll.min.js") }}"></script>
<script src="{{ asset("admin/assets/vendors/js/bootstrap-select/bootstrap-select.min.js") }}"></script> 
<script src="{{ asset("admin/assets/vendors/js/app/app.min.js") }}"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
<script src="{{ asset("admin/assets/js/components/tables/tables.js") }}"></script>  
<script src="{{ asset("admin/assets/js/components/validation/validation.min.js") }}"></script>
<!-- End Page Snippets -->

</body>
</html>
