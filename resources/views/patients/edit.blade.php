
@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

@push('stylesheet')
        <!--alerts CSS -->
        <link href="{{ asset('assets/vendor_components/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">
@endpush

    <!-- Main content -->
    <section class="content">
     {{-- <div id="widgethere"></div> --}}
    
     <!-- Basic Forms -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Patient Details</h3>
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashbaord') }}"><i class="fa fa-dashboard"></i>dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('patients.index') }}">patients</a></li>
                <li class="breadcrumb-item active">Registered</li>
          </ol>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
            	<form method="POST" action="{{ route('patient.update', ['patient' => $patient]) }}" novalidate id="form">@csrf
                   @method('PATCH')
                   <input type="hidden" value="{{ $patient->id }}" id="patientId">
                   
                   <div class="form-group">
                        <h5>Clinic card number: <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" id="wcliniccardnumber" value="{{ $patient->cliniccardnumber }}" name="cliniccardnumber" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
					<div class="form-group">
						<h5>Full Name: <span class="text-danger">*</span></h5>
						<div class="controls">
                            <input type="text" id="wfullname" value="{{ $patient->fullname }}" name="fullname" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
                    <div class="form-group">
						<h5>Parent's Name: <span class="text-danger">*</span></h5>
						<div class="controls">
                            <input type="text" id="wparentname" value="{{ $patient->parentname }}" name="parentname" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
					</div>
					<div class="form-group">
						<h5>Address: <span class="text-danger">*</span></h5>
						<div class="controls">
                            <input type="text" id="waddress" value="{{ $patient->address }}" name="address" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
                    <div class="form-group">
						<h5>Occupation: <span class="text-danger">*</span></h5>
						<div class="controls">
                            <input type="text" id="woccupation" value="{{ $patient->occupation }}" name="occupation" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>
                    <div class="form-group">
                            <h5>Phonenumber: <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="number" id="wphonenumber" value="{{ $patient->phonenumber }}" name="phonenumber" class="form-control" required data-validation-required-message="This field is required"> 
                            </div>
                    </div>
                    <div class="form-group">
                            <h5>Alternative Phonenumber: </h5>
                            <div class="controls">
                                <input type="number" id="walternatephonenumber" value="{{ $patient->alternativephonenumber }}" name="alternativephonenumber" class="form-control"> 
                            </div>
                    </div>
                    <div class="form-group">
                        <h5>Next Of Kin: <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" id="wnextofkin" value="{{ $patient->nextofkin }}" name="nextofkin" class="form-control" required data-validation-required-message="This field is required"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Date Of Birth: <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="date" id="wdateofbirth" value="{{ $patient->dateofbirth }}" name="dateofbirth" class="form-control" required data-validation-required-message="This field is required"> </div>
                        <div class="form-control-feedback">This field is required</div>
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

  