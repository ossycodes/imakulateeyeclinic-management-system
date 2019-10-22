<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/minimal-elite-admin/images/favicon.ico">

    <title>Imakulateeyeclinic - Log in </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}">
	
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
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    {{-- <a href="#"><b>Imakulateeyeclinic</b> Admin Login</a> --}}
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    {{-- <p class="login-box-msg">Sign in to start your session</p> --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('login') }}" method="post" class="form-element" novalidate>@csrf
      <div class="form-group">
          <h5> Email <span class="text-danger">*</span></h5>
          <div class="controls">
            <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
        </div>
        <div class="form-group">
          <h5> Password <span class="text-danger">*</span></h5>
          <div class="controls">
            <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
        </div>
      <div class="row">
        <div class="col-6">
          <div class="checkbox">
            <input type="checkbox" id="basic_checkbox_1" >
			<label for="basic_checkbox_1">Remember Me</label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-6">
         <div class="fog-pwd">
          	<a href="javascript:void(0)"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-info btn-block margin-top-10">SIGN IN</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


	<!-- jQuery 3 -->
	<script src="{{ asset('assets/vendor_components/jquery/dist/jquery.min.js') }}"></script>
	
	<!-- popper -->
	<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

  <!-- Form validator JavaScript -->
  <script src="{{ asset('js/pages/validation.js') }}"></script>
  <script>
  ! function(window, document, $) {
      "use strict";
    $("input").not("[type=submit]").jqBootstrapValidation();
  }(window, document, jQuery);
  </script>

</body>
</html>
