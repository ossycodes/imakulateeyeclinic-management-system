
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

@push('stylesheet')
        <!--alerts CSS -->
        <link href="{{ asset('assets/vendor_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
@endpush

    <!-- Main content -->
    <section class="content">
    
     <!-- Basic Forms -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Change Password</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          @include('layouts.flashmessages')
          <div class="row">
            <div class="col">
            	<form method="POST" action="{{ route('password.update') }}" novalidate id="form">@csrf
                   @method('PATCH')
                   <div class="form-group">
						<h5>Old Password <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="password" name="oldPassword" class="form-control" required data-validation-required-message="This field is required"> </div>
                    </div>
                    <div class="form-group">
                            <h5>New Password <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="newPassword" class="form-control" required data-validation-required-message="This field is required"> </div>
                        </div>
					<div class="form-group">
						<h5>Repeat New Password <span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="password" name="password2" data-validation-match-match="newPassword" class="form-control" required> </div>
					</div>
					<div class="text-xs-right">
						<input type="submit" class="btn btn-info" value="update"/>
					</div>
				</form>
            	
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
    </section>
    <!-- /.content -->

    @push('scripts')
        <!-- Form validator JavaScript -->
        <script src="{{ asset('js/pages/validation.js') }}"></script>
        <script src="{{ asset('assets/vendor_components/sweetalert/sweetalert.min.js') }}"></script>
        <script>
        ! function(window, document, $) {
            "use strict";
                $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
            }(window, document, jQuery);
        </script>
    @endpush

@endsection

  