<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	<meta name="author" content="">
	
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
    <link rel="icon" href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/minimal-elite-admin/images/favicon.ico">

    <title>Imakulateeyeclinic - @yield('title')</title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}">

	@stack('stylesheet')

	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('css/master_style.css') }}">

	<!-- Minimalelite Admin skins -->
	<link rel="stylesheet" href="{{ asset('css/skins/_all-skins.css') }}">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body class="hold-transition skin-blue-light sidebar-mini">

<div class="wrapper">

  <!-- mainheader -->
  @include('layouts.includes.mainheader')
  
  <!-- Left side column. contains the logo and sidebar -->
  @include('layouts.includes.sidebarandlogo')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        @yield('content')
  </div>
  <!-- /.content-wrapper -->
  
  <!-- /.footer -->
  @include('layouts.includes.footer') 


  <!-- Control Sidebar -->
  @include('layouts.includes.controlsidebar')
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="{{ asset('assets/vendor_components/jquery/dist/jquery.min.js') }}"></script>
	
	<!-- popper -->
	<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	
	<!-- DataTables -->
	<script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>
	
	<!-- SlimScroll -->
	<script src="{{ asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	
	<!-- FastClick -->
	<script src="{{ asset('assets/vendor_components/fastclick/lib/fastclick.js') }}"></script>
	
	<!-- Minimalelite Admin App -->
	<script src="{{ asset('js/template.js') }}"></script>
	
	<!-- Minimalelite Admin for demo purposes -->
	<script src="{{ asset('js/demo.js') }}"></script>
	
	<!-- Minimalelite Admin for Data Table -->
    <script src="{{ asset('js/pages/data-table.js') }}"></script>
    
    @stack('scripts')
	
</body>
</html>
